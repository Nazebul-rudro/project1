<?php

namespace App\Imports;

use App\Models\category;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class CategoryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new category([
            //
            'category_name'     => $row[0],
            'category_description'    => $row[1], 
            'category_images' => $row[2],
            // 'name'     => $row['name'],
            // 'email'    => $row['email'], 
            // 'password' => Hash::make($row['password']),
 
        ]);
    }
}
