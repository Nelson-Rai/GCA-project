@extends('layout.Category.app')

@section('content')

                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{ $product->image_path == '' ? 'https://via.placeholder.com/550x750' : asset('productImages/' . $product->image_path) }}" alt="#">
                                    <img class="hover-img" src="{{ $product->image_path == '' ? 'https://via.placeholder.com/550x750' : asset('productImages/' . $product->image_path) }}" alt="#">
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <form action="{{ route('cart.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <input type="submit" value="Add to Cart">
                                            {{-- <a title="Add to cart" href="#" onclick="event.preventDefault(); this.closest('form').submit();">Add to cart</a> --}}
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2><a href="/categories">{{ $product->category->name }}</a></h2>
                                <h3><a href="products/{{ $product->id }}">{{ $product->product_name }}</a></h3>
                                <div class="product-price">
                                    <span>Rs. {{ $product->price }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
        </section>
<!--/ End Product Style 1  -->	
@endsection