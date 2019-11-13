@extends('layouts.master')
@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('temp/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

   @if(session()->has('success_message'))
        <div class="alert aslert-success">
            {{session()->get('success_message')}}
        </div>
    @endif

    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
    					@if(Cart::count()>0)
    					<h3>{{ Cart::count() }} item(s) in Sopping Cart</h3>
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
						      @foreach(Cart::content() as $item)
						      <tr class="text-center">
						        <td class="product-remove">
						        	<form action="{{route('cart.destroy', $item->rowId)}}" method="POST">
						        		{{csrf_field()}}
						        		{{method_field('DELETE')}}
						        		<button style="width: 50px; background: transparent; cursor: pointer;"><span class="ion-ios-close"></span></button>
						        	</form>
						        	
						        </td>

						        <td class="image-prod">
						        	<img class="img" src="{{'storage/'.$item->model->image}}">
						        </td>
						        
						        <td class="product-name">
						        	<a href="{{route('product', $item->model->slug)}}"><h3>{{$item->name}}</h3></a>
						        </td>
						        
						        <td class="price">{{$item->price}} sum</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="{{$item->qty}}" min="1" disabled>
					          	</div>
					          </td>
						        
						        <td class="total">{{$item->qty * $item->price}}</td>
						      </tr><!-- END TR-->
								@endforeach

						    </tbody>
						  </table>
						  @else
								<h3>No item in Cart. <a href="{{route('shop')}}">Go to Shopping</a></h3>
						  @endif
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>{{Cart::total()}}</span>
    					</p>
    				</div>
    				<p><a href="{{route('checkout.index')}}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section>

@endsection