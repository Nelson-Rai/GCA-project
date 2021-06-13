<div class="search-top">
    <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
    <!-- Search Form -->
    <div class="search-top">
        @php
            // echo "<pre>"; print_r(categories_list()); echo "</pre>";
            $categories = categories_list();
       @endphp
            <form  method="GET" action="{{ route('search') }}">
                <select name="category">
                    <option selected="selected" value="">All Category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>                
                @endforeach
                </select>
            <input value="{{ request('search') }}" name="search" placeholder="Search Products Here....." type="search">
            <button class="btnn"><i class="ti-search"></i></button>
        </form>
    </div>
    <!--/ End Search Form -->
</div>
<!--/ End Search Form -->
<div class="mobile-nav"></div>
</div>
<div class="col-lg-8 col-md-7 col-12">
<div class="search-bar-top">
    <div class="search-bar">
        @php
            // echo "<pre>"; print_r(categories_list()); echo "</pre>";
            $categories = categories_list();
       @endphp
            <form  method="GET" action="{{ route('search') }}">
                <select name="category">
                    <option selected="selected" value="">All Category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>                
                @endforeach
                </select>
            <input value="{{ request('search') }}" name="search" placeholder="Search Products Here....." type="search">
            <button class="btnn"><i class="ti-search"></i></button>
        </form>
    </div>
</div>
</div>