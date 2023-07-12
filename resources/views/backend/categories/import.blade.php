<table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Categories Name</th>
                            <th>Categories image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->category_images }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>




<style>
    table, tr, td, th{
        border: 1px solid ;
        padding: 2px;
    }
</style>