<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CategoryExport;
use App\Http\Requests\CategoryRequest;
use App\Imports\CategoryImport;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        $categories =  category::latest()->get();
        return view('backend.categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('backend.categories.create');
    }
    public function store(CategoryRequest $request)
    {
        $request->validate([
            // 'category_name' => ['required', 'min:5', 'max:25', Rule::unique('categories', 'category_name')],
            // 'category_description' => ['required', 'min:5', 'max:25', ],
        ]);
        category::create([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'category_images' => $request->category_images,
        ]);
        return redirect()->route('categories')->with('message', "Category Create Successfully");
    }
    public function show($id)
    {
        $categories = category::find($id);
        return view('backend.categories.show', ['categories' => $categories]);
    }
    public function edit(category $category)
    {

        return view('backend.categories.edit', compact('category'));
    }


    public function update(CategoryRequest $request, category $category)
    {
        // $request->validate([
        //     'category_name' => ['required', 'min:5', 'max:25', Rule::unique('categories', 'category_name')->ignore($category->id)],
        // ]);
        $category->update([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'category_images' => $request->category_images,

        ]);
        return redirect()->route('categories')->with('message', "Category Update Successfully");
    }

    public function destroy(category $category)
    {
        $category->delete();
        return redirect()->route('categories')->with('message', "Category Delete Successfully");
    }

    public function CategoryPdf()
    {
       try {
        //code...
        $categories = category::all();
        $filename = "category.pdf";
        $html = view('backend.categories.pdf', compact('categories'))->render();
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output($filename, 'I');
       } catch (\Throwable $th) {
        //throw $th;
        dd($th->getMessage());
       }
    }

    public function export() 
    {
        return Excel::download(new CategoryExport, 'users.xlsx');
    }


    public function import(){
        Excel::import(new CategoryImport,request()->file('file'));
        
        return back()->with('message', 'Import Successfully');

    }
}
