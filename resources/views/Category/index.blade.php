

<h3>Category Page</h3>
<div>
    <ul>
        @foreach ($categories as $category)
                <li><a href="categories/{{ $category->id }}/productlist">{{ $category->name }}</a></li>
        @endforeach
    </ul>
</div>
<button type="button">
    <a href="/categories/create">Add Category</a>
</button>
