
<x-admin.layout.app>
    <div class="container">
        <div class="az-content-body">
          <div class="az-dashboard-one-title">
            <div>
                <h2>Create New Category</h2>
            <form action="/admin/categories" method="POST">
                @csrf

                <div class="container w-75% center">
                    Category Name: <input type="text" name="name" class="form-control" value={{ old('name')}}>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror <br> <br>
                    Category Description: <textarea name="description" id="" cols="30" rows="10" class="form-control" value={{ old('description') }}></textarea> <br><br>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    Parent Category :
                    <x-forms.select name="parent_id">
                            <option value="">Select A Category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == old('category_id') ? "selected" : ''}}>
                                {{ $category->name }}       
                            </option> 
                            @endforeach
                    </x-forms.select><br><br>
                    @error('parent_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                    
                <button type="submit" value="add_category" class="form-control" style="background-color: #A8B3F2">
                    SAVE
                </button>

            </form>
            
            </div>
          </div>
        </div>
    </div>
    

</x-admin.layout.app>