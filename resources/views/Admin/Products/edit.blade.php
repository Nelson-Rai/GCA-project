<x-admin.layout.app>
    <div class="container">
        <div class="az-content-body">
          <div class="az-dashboard-one-title">
            <div>
                @can('update-product', $product)
                <h2>Edit Product {{ $product->product_name }}</h2>
                    <form action="/admin/products/{{ $product->id }}" method="POST">
                        @csrf
                        @method('put')
                        Product Name : <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}">
                        @error('product_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror <br> <br>
                        Product Description : <textarea name="product_desc" id="" cols="30" rows="10" class="form-control">  {{ $product->product_desc }} </textarea>
                        @error('product_desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror <br><br>
                        Product Price : <input type="integer" name="price" class="form-control" value="{{ $product->price }}">
                        @error('product_desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror <br><br>
                        Category :
                            <x-forms.select name="category_id">
                                    <option value="">Select A Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        @if ($category->id == $product->category_id)
                                        selected 
                                        @endif>
                                        {{ $category->name }}       
                                    </option> 
                                    @endforeach
                            </x-forms.select>
                            @error('category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror <br><br>
                        Image : <input type="file" name="image" class="form-control" value="{{ $product->image_path }}">
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        <button type="submit" class="form-control" style="background-color: #A8B3F2">
                            UPDATE
                        </button>
        
                    </form>
                    @else
                        <p>Unauthorised Access.</p>
                @endcan
            </div>
          </div>
        </div>
    </div>
    

</x-admin.layout.app>