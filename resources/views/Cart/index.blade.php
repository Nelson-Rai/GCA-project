<x-layout.app>

	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($orderitem as $item)
                            <tr>
                            <td class="image" data-title="image"> <img class="default-img" src="{{ $item->product->image_path == '' ? 'https://via.placeholder.com/550x750' : asset('productImages/' . $item->product->image_path) }}" alt="#"></td>
                            <td class="product-des" data-title="Description">
                                <p class="product-name"><a href="#">{{$item->product->product_name}}</a></p>
                                <p class="product-des">{{$item->product->product_desc}}</p>
                            </td>
                            <td class="price" data-title="Price"><span>{{$item->product_price}} </span></td>
                            <td class="qty" data-title="Qty"><!-- Input Order -->
                                <div class="input-group">
                                <form action="{{ route('cart.update', ['cart' => $item->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="number" min="1" max="50" name="quantity" value="{{$item->quantity}}">
                                        <input type="submit" class="btn btn-dark" value="Update">
                                    </form>
                                     <!-- <div class="button minus">
                                        <button type="button" class="btn btn-primary btn-number" disabled="disabled"
                                        data-type="minus" data-field="quant[1]">
                                            <i class="ti-minus"></i>
                                        </button> -->
                                    <!-- </div> 
                                    <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="100" value="1">
                                    <div class="button plus">
                                        <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                            <i class="ti-plus"></i>
                                        </button>
                                    </div> --> 
                                </div>
                                <!--/ End Input Order -->
                            </td>
                            <td class="total-amount" data-title="Total"><span>{{$item->total}}</span></td>
                            <td class="action" data-title="Remove">
                                <form action="{{ route('cart.destroy', ['cart'=>$item->id]) }}" method="POST">
                                    @csrf 
                                    <input type="hidden" name="_method" value="DELETE">

                                    <a href="{{ route('order.destroy',['order'=>$order->id]) }}" onclick="event.preventDefault(); this.closest('form').submit();"><i class="ti-trash remove-icon"></i></a>
                                </form>
                                </td>
                        </tr>
                        @endforeach
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
									<div class="coupon">
										<form action="#" target="_blank">
											<input name="Coupon" placeholder="Enter Your Coupon">
											<button class="btn">Apply</button>
										</form>
									</div>
									<div class="checkbox">
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+NPR {{ $order->shipping_price }})</label>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li>Cart Subtotal<span>NPR {{ $order->sub_total }}</span></li>
										<li>Shipping<span>NPR {{ $order->shipping_price }}</span></li>
										<li>You Save<span>NPR {{ $order->discount }}</span></li>
										<li class="last">You Pay<span>NPR {{ $order->total_price }}</span></li>
									</ul>
									<div class="button5">
										<a href="{{ route('checkout') }}" class="btn">Checkout</a>
										<a href="{{ route('products.index') }}" class="btn">Continue shopping</a>
									</div>
								</div>
							</div>				
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
			
	<!-- Start Shop Services Area  -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
</x-layout>