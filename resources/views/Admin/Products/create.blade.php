<x-admin.layout.app>
    <div class="container">
        <div class="az-content-body">
          <div class="az-dashboard-one-title">
            <div>
                <h2>Create New Product</h2>
            <form action="/admin/products" method="POST" enctype="multipart/form-data">
                @csrf
                Product Name : <input type="text" name="product_name" class="form-control" value={{ old('product_name') }}
                @error('product_name')
                    style="border-color: rebeccapurple;"
                @enderror>
                @error('product_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br> <br>
                Product Description : <textarea name="product_desc" id="" cols="30" rows="10" class="form-control" value={{ old('product_desc') }}></textarea> <br><br>
                @error('product_desc')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                Product Price : <input type="integer" name="price" class="form-control" value={{ old('price') }}> <br><br>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                Category :
                    <x-forms.select name="category_id">
                            <option value="">Select A Category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == old('category_id') ? "selected" : ''}}>
                                {{ $category->name }}       
                            </option> 
                            @endforeach
                    </x-forms.select><br><br>
                    @error('category_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                Image : <input type="file" name="image" class="form-control">
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                <button type="submit" value="add_product" class="form-control" style="background-color: #A8B3F2">
                    SAVE
                </button>

            </form>
            
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            </div>
          </div>
        </div>
    </div>
    

</x-admin.layout.app>