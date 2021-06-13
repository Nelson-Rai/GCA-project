
<x-admin.layout.app>
    <div class="container">
        <div class="az-content-body">
          <div class="az-dashboard-one-title">
            <div>
                <h2>Edit Category </h2>
            <form action="/admin/categories/{{ $category->id }}" method="POST">
                @csrf
                @method('put');
                    Category Name: <input type="text" name="name" class="form-control" value={{ $category->name }}>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror <br> <br>
                    Category Description: <textarea name="description" id="" cols="30" rows="10" class="form-control" value={{ $category->description }}></textarea> <br><br>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
    
                    
                <button type="submit" value="add_category" class="form-control" style="background-color: #A8B3F2">
                    SAVE
                </button>

            </form>
            
            </div>
          </div>
        </div>
    </div>
    

</x-admin.layout.app>