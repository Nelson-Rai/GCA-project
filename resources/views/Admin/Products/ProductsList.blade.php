<x-admin.layout.app>

<table width=900 align=center>  
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->product_name }}</td>
        <td>{{ substr($product->product_desc, 0, 50) }}</td>
        <td>{{ $product->price }}</td>
        <td>
            <button><a href="{{ route('admin.products.edit', ['product' => $product->id]) }}">Edit</a></button>

            
            <form action="{{ route('admin.products.destroy', ['product'=>$product->id]) }}" method="POSt">
            @csrf
            @method('delete')
            <button>Delete</button>
            </form>

        </td>
    </tr>
        
    @endforeach
</table>

</x-admin.layout.app>