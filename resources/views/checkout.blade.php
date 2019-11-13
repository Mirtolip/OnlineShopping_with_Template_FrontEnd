@extends('layouts.master')
@section('content')

	<div class="hero-wrap hero-bread" style="background-image: url('temp/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>
	@if(count($errors)>0)
		@foreach($errors as $error)
		<div class="alert alert-damage">
			{{$error}}
		</div>
		@endforeach
	@endif
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
				<form action="{{route('checkout.store')}}" class="billing-form" method="post">
					@csrf
							<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Firt Name</label>
	                  <input type="text" class="form-control" name="firstname" placeholder="First Name">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control" name="lastname" placeholder="Last Name">
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">State / Country</label>
		            		<input type="text" class="form-control" name="country" placeholder="State / Country">
		            	</div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" class="form-control" name="city" placeholder="Town / City">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" class="form-control" name="postcode" placeholder="Postcode / ZIP">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" class="form-control" name="phone" placeholder="Phone">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="email" class="form-control" name="email" placeholder="Email address">
	                </div>
                </div>

                <div class="col-md-12">
	          		<div class="cart-detail p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Payment Method</h3>
	          			<div class="form-group">
	          				<div class="col-md-12">
	          					<div class="checkbox">
	          						<label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
	          					</div>
	          				</div>
	          			</div>
	          			<p><button class="btn btn-primary py-3 px-4">Place an order</button></p>
	          		</div>
	          	</div>
                
	            </div>
	          </form><!-- END -->
					</div>
					<div class="col-xl-5">
	          <div class="row mt-5 pt-3">
	          	@foreach(Cart::content() as $item)
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
          				<p class="d-flex total-price">
          					<span><img src="{{asset($item->model->image)}}" alt="" width="50" height="50"></span>
	          				<span>{{$item->name}}</span>
	          				<span>{{$item->qty}}</span>
	          				<span>{{$item->qty * $item->price}}</span>
	          			</p>
	          		</div>
	          	</div>
	          	@endforeach

	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
	          			<hr>
	          			<p class="d-flex total-price">
	          				<span>Total</span>
	          				<span>{{Cart::total()}}</span>
	          			</p>
	          		</div>
	          	</div>

	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

@endsection