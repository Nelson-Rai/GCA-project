<x-admin.layout.app>

    
    <table width=900 align=center>  
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Slug</th>
            <th>Action</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ substr($category->description, 0, 50) }}</td>
            <td>{{ $category->slug }}</td>
            <td>
                <button><a href="/admin/categories/{{ $category->id }}/edit">Edit</a></button>
    
    
                <form action="{{ route('categories.destroy', ['category'=>$category->id]) }}" method="POSt">
                @csrf
                @method('delete')
                <button>Delete</button>
                </form>
    
            </td>
        </tr>
            
        @endforeach
    </table>
    
    </x-admin.layout.app>