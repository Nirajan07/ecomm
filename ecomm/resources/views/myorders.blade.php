@extends('master')
@section("content")
<!-- Slider Area -->
	<
	
	
	
	<!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>My Orders:</h2><br>
						</div>
						
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							
							
							@foreach($orders as $i)
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																
																
																	@csrf
																	<input type="hidden" name="product_id" value={{$i->id}}>
																	
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="/productview/{{ $i->id }}">Product name: {{$i->name}}</a></h3>
													
															
															<div class="Delivery Status">
															<span>Delivery Status: {{$i->status}} </span>
															<div class="Address">
															<span>Address: {{$i->address}} </span>
															<div class="Payment Status">
															<span>Payment Status: {{$i->payment_status}} </span>
															<div class="payment method">
															<span>Payment Method: {{$i->payment_method}} </span>


														</div>
													</div>
												</div>
											</div>
											
										</div>

									</div>

								</div>

								@endforeach
								
	@endsection