@extends('layouts.master')
@section('content')

 <div class="hero-wrap hero-bread" style="background-image: url('temp/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
                        @foreach($categories as $category)
    					<li><a href="{{route('shop', ['category' => $category->slug])}}">{{$category->name}}</a></li>
                        @endforeach
    				</ul>
    			</div>
    		</div>
    		<div class="row">
    			@foreach($products as $product)
                <div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="{{route('product', $product->slug)}}" class="img-prod">
                            <img class="img-fluid" src="{{asset('storage/'.$product->image)}}" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="{{route('product', $product->slug)}}">{{$product->name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">{{$product->price + ($product->price * 0.3)}}  sum</span><span class="price-sale">{{$product->price}} sum</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{{route('product', $product->slug)}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
                @endforeach
    		</div>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li>{{$products->appends(request()->input())->links()}}</li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>

@endsection