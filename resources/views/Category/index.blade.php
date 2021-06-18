<x-layout.app>
    <div style="margin-left: 20%">
        @foreach ($categories as $category)
            <div style="padding: 10px">
                <h4>{{ $category->name }}</h3>
                <p>{{ $category->description }}</p>  
            </div>
        @endforeach 
    </div>
   
</x-layout.app>