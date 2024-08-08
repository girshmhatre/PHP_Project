<?php include("public_header.php");?>
<!-- Start Breadcrumbs Section -->
<section class="breadcrumbs-section background_bg" data-img-src="image/checkout-breadcrumbs-img.jpg">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-12">
                <div class="page_title text-center">
                	<h1>Checkout</h1>
                    <ul class="breadcrumb justify-content-center">
                    	<li><a href="index.html">home</a></li>
                        <li><a href="#">shop</a></li>
                        <li><span>Checkout</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Header Section -->

<!-- Start Checkout Section -->
<section class="checkout-inner-page pt_large pb_large">	
	<div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="checkout-process">
                    <div id="accordion" class="checkout-parts accordion">
                    	<form role="form" action="#" method="post">
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <a class="btn btn-link" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span>01</span>Checkout Method</a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="check-tab">
                                            <div class="row">
                                                <div class="new-cous col-md-6">
                                                    <div class="form-title">
                                                        <p>New Customer</p>
                                                    </div>
                                                    <div class="chek-form">
                                                        <div class="form-check">
                                                            <input class="form-check-input" required type="radio" name="ddd" id="12" value="option1" checked>
                                                            <label class="form-check-label" for="12">Register Account</label>
                                                        </div>
                                                        
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="ddd" id="13" value="option2">
                                                            <label class="form-check-label" for="13">Stay as Guest</label>
                                                        </div>
                                                        
                                                    </div>
                                                   	<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in</p>
                                                    <button class="btn btn-primary btn-next" type="button">Continue</button>
                                                </div>
                                                <div class="checkout-form col-md-6">
                                                    <div class="form-title">
                                                        <p>login</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control" placeholder="Enter Your Name" value="" type="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input class="form-control" placeholder="Enter Your Password" value="" type="password">
                                                    </div>
                                                    <div class="form-group forgot-password">
                                                        <a href="#">Forgot Password!</a>
                                                    </div>
                                                    <div class="form-group form-wizard-buttons">
                                                        <button class="btn btn-primary btn-submit" type="submit">Login Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header form-wizard-step">
                                    <h5>
                                         <a class="btn btn-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span>02</span>Billing information</a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                	<div class="card-body">
                                    	<div class="check-tab">
                                            <div class="checkout-form">
                                                <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>First name <span class="required_sign">*</span></label>
                                                    <input class="form-control required" placeholder="Enter Your Name" value="" type="text">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Last name <span class="required_sign">*</span></label>
                                                    <input class="form-control required" placeholder="Enter Your Last Name" value="" type="text">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Email <span class="required_sign">*</span></label>
                                                    <input class="form-control required" placeholder="Enter Your email" value="" type="email">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Phone Number <span class="required_sign">*</span></label>
                                                    <input  class="form-control required" placeholder="Enter Your Phone Number" value="" type="text">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Company name <span class="required_sign">*</span></label>
                                                    <input class="form-control required" placeholder="Enter Your Company Name" value="" type="text">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Address <span class="required_sign">*</span></label>
                                                    <input class="form-control required" placeholder="Enter Your Address" value="" type="text">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Select Your Country <span class="required_sign">*</span></label>
                                                    <select class="js-example-placeholder-single js-states form-control" data-placeholder="Select Your Country">
                                                        <option></option>
                                                        <option value="1">india</option>
                                                        <option value="2">china</option>
                                                        <option value="3">United States (US)</option>
                                                        <option value="4">United Kingdome (UK)</option>
                                                        <option value="5">Canada</option>
                                                        <option value="6">U.A.E</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>City <span class="required_sign">*</span></label>
                                                    <input class="form-control required" placeholder="Enter Your City" value="" type="text">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>State <span class="required_sign">*</span></label>
                                                    <input class="form-control required" placeholder="Enter Your State" value="" type="text">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Zipcode <span class="required_sign">*</span></label>
                                                    <input class="form-control required" placeholder="Enter Your Zipcode" value="" type="text">
                                                </div>
                                                <div class="form-group col-md-6">
                                                	<div class="form-check mt-md-3">
                                                        <label>Ship to same address as billing
                                                            <input class="defult-check" type="checkbox" checked="checked">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="form-wizard-buttons text-md-right">
                                                        <button class="btn btn-primary btn-submit btn-next" type="button">Continue</button>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header form-wizard-step">
                                    <h5>
                                         <a class="btn btn-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span>03</span>Shipping information</a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                	<div class="card-body">
                                    	<div class="check-tab">
                                            <div class="checkout-form">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>First name <span class="required_sign">*</span></label>
                                                        <input class="form-control required" placeholder="Enter Your Name" value="" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Last name <span class="required_sign">*</span></label>
                                                        <input class="form-control required" placeholder="Enter Your Last Name" value="" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Email <span class="required_sign">*</span></label>
                                                        <input class="form-control required" placeholder="Enter Your email" value="" type="email">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Phone Number <span class="required_sign">*</span></label>
                                                        <input  class="form-control required" placeholder="Enter Your Phone Number" value="" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Company name <span class="required_sign">*</span></label>
                                                        <input class="form-control required" placeholder="Enter Your Company Name" value="" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Address <span class="required_sign">*</span></label>
                                                        <input class="form-control required" placeholder="Enter Your Address" value="" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Select Your Country <span class="required_sign">*</span></label>
                                                        <select class="js-example-placeholder-single js-states form-control" data-placeholder="Select Your Country">
                                                            <option></option>
                                                            <option value="1">india</option>
                                                            <option value="2">china</option>
                                                            <option value="3">United States (US)</option>
                                                            <option value="4">United Kingdome (UK)</option>
                                                            <option value="5">Canada</option>
                                                            <option value="6">U.A.E</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>City <span class="required_sign">*</span></label>
                                                        <input class="form-control required" placeholder="Enter Your City" value="" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>State <span class="required_sign">*</span></label>
                                                        <input class="form-control required" placeholder="Enter Your State" value="" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Zipcode <span class="required_sign">*</span></label>
                                                        <input class="form-control required" placeholder="Enter Your Zipcode" value="" type="text">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Spacial requests</label>
                                                        <textarea rows="3" class="form-control" placeholder="Write Your Spacial Requests"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="form-wizard-buttons text-md-right">
                                                        	<button class="btn btn-primary btn-submit btn-next" type="button">Continue</button>
                                                    	</div>
                                                    </div>
                                                </div>
                                            </div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header form-wizard-step">
                                    <h5>
                                        <a class="btn btn-link collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><span>04</span>Payment Method</a>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                	<div class="card-body">
                                    	<div class="check-tab">
                                            <div class="checkout-form">
                                                <div class="chek-form">
                                                    <div class="form-check">
                                                        <input class="form-check-input" required type="radio" name="payment_option" id="exampleRadios3" value="option3" checked>
                                                        <label class="form-check-label" for="exampleRadios3">Direct Bank Transfer</label>
                                                        <p data-method="option3" class="payment-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios4" value="option4">
                                                        <label class="form-check-label" for="exampleRadios4">Check Payment</label>
                                                        <p data-method="option4" class="payment-text">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios5" value="option5">
                                                        <label class="form-check-label" for="exampleRadios5">Paypal</label>
                                                        <p data-method="option5" class="payment-text">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                                    </div>
                                                </div>
                                                <div class="form-wizard-buttons text-md-right">
                                                    <button class="btn btn-primary btn-next" type="button">Continue</button>
                                                </div>
                                            </div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ord_tab">
                                <div class="card-header form-wizard-step">
                                    <h5>
                                        <a class="btn btn-link collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><span>05</span>Order review</a>
                                    </h5>
                                </div>
                               	<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                	<div class="card-body">
                                    	<div class="check-tab">
                                        	<div class="order-table">
                                            	<div class="order-review-table table-responsive">
                                                	<table class="table table-bordered text-center">
                                                    <thead>
                                                        <tr class="row-1">
                                                            <th class="row-title text-left">Product Name</th>
                                                            <th class="row-title">Price</th>
                                                            <th class="row-title">Quantity</th>
                                                            <th class="row-title">Subtotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="row-2">
                                                            <td class="product-name">Variable product 001</td>
                                                            <td class="product-price">$ 78.00</td>
                                                            <td class="product-quantity">2</td>
                                                            <td class="product-subtotal">$ 156.00</td>
                                                        </tr>
                                                        <tr class="row-3">
                                                            <td class="product-name">Ornare sed consequat</td>
                                                            <td class="product-price">$ 81.00</td>
                                                            <td class="product-quantity">1</td>
                                                            <td class="product-subtotal">$ 81.00</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="row-4">
                                                            <td class="text-left" colspan="3">Cart Subtotal</td>
                                                            <td class="pr_subtotal">$237.00</td>
                                                        </tr>
                                                        <tr class="row-5">
                                                            <td class="text-left" colspan="3">Promotional Code</td>
                                                            <td class="pr_subtotal">-$5.00</td>
                                                        </tr>
                                                        <tr class="row-6">
                                                            <td class="text-left" colspan="3">ORder Total</td>
                                                            <td class="product-subtotal">$232.00</td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            	</div>
                                        	</div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="place-oreder-btn">
                        <a href="#" class="btn btn-secondary">Place Oreder</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
            	<div class="cart-inner-box box-2 text-center">
                	<div class="ci-title">
                    	<h6>Cart Total</h6>
                    </div>
                    <div class="ci-caption">
                        <ul>
                        	<li>Subtotal <span>$237.00</span></li>
                            <li>Shipping <span>Free</span></li>
                            <li>Coupon Code <span>-$5.00</span></li>
                        </ul>
                    </div>
                    <div class="ci-btn">
                        <ul>
                        	<li>Total Order<span>$232.00</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Checkout Section -->

<?php include("public_footer.php");?>