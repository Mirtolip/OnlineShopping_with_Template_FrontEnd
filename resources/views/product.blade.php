 @extends('layouts.master')
 @section('content')
 <div class="hero-wrap hero-bread" style="background-image: url('../temp/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span class="mr-2"><a href="/">Product</a></span> <span>Product Single</span></p>
            <h1 class="mb-0 bread">Product Single</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="#" class="image-popup"><img src="{{asset('storage/'.$product->image)}}" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>{{$product->name}}</h3>
    				
    				<p class="price"><span>{{$product->price}} sum</span></p>
    				<p>{!!$product->description!!}</p>
                    <form action="{{route('cart.store')}}" method="post">
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex"> </div>
							</div>
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
            	             	<div class="form form-group col-md-8">
                                    <select name="qty" id="" class="col-md-12">
                                        @for($i = 1; $i<=$product->quantity; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>     
                                </div>
            	          	</div>
	          	            <div class="w-100"></div>
            	          	<div class="col-md-12">
            	          		<p style="color: #000;">{{$product->quantity}} kg available</p>
            	          	</div>
          	             </div>
          	             <p>
                            <!-- <a href="{{route('cart')}}" class="btn btn-black py-3 px-5">Add to Cart</a> -->
                                @csrf
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="hidden" name="name" value="{{$product->name}}">
                                <input type="hidden" name="price" value="{{$product->price}}">
                                <input type="submit" class="btn btn-black py-3 px-5" value="Add to Cart">
                        </p>
                        </form>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Products</span>
            <h2 class="mb-4">Related Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
                @foreach($products as $pro)
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="{{route('product', $pro->slug)}}" class="img-prod"><img class="img-fluid" src="{{asset('storage/'.$pro->image)}}" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="{{route('product', $pro->slug)}}">{{ucwords($pro->name)}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">{{$pro->price + ($pro->price*0.3)}}</span><span class="price-sale">{{$pro->price}}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{{route('product', $pro->slug)}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
                @endforeach
    		</div>
    	</div>
    </section>
@endsection