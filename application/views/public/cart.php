<?php include("public_header.php");?>

<!-- Start Breadcrumbs Section -->

	<div class="container" style="margin-top: 80px; margin-bottom: -50px;">
    	<div class="row justify-content-center">
        	<div class="col-md-12">
                <div class="page_title text-center">
                	<h1 style="color:black;">Check out</h1>
                   
                </div>
            </div>
        </div>
    </div>
<!-- End Header Section -->



<!-- Start Cart Section -->
<section class="cart-section pt_large">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-9 col-md-12">
            	<div class="cart-table table-responsive">
                	<table class="table table-bordered text-center">
                    	<thead>
                        	<tr class="row-1">
                            	<th class="row-title"><p>Item</p></th>
                                <th class="row-title"><p>Product Name</p></th>
                                <th class="row-title"><p>Price</p></th>
                                <th class="row-title"><p>Quantity</p></th>
                                <th class="row-title"><p>Subtotal</p></th>
                                <th class="row-title"><p></p></th>
                            </tr>
                        </thead>
                        <tbody>
                        	<tr class="row-2">
                            	<td class="row-close close-1" data-title="product-remove"><a href="#"><i class="ion-close-circled"></i></a></td>
                            	<td class="row-img"><img src="image/cart-inner-img-1.jpg" alt="cart-img"></td>
                                <td class="product-name" data-title="Product"><a href="#">Variable product 001</a></td>
                                <td class="product-price" data-title="Price"><p>$ 78.00</p></td>
                                <td class="product-quantity" data-title="Quantity">
                                	<div class="quantity_filter">
                                        <input type="button" value="-" class="minus">
                                        <input class="quantity-number qty" type="text" value="2" min="1" max="10">
                                        <input type="button" value="+" class="plus">
                               		</div>
                                </td>
                                <td class="product-total" data-title="Subprice"><p>$ 156.00</p></td>
                                <td class="row-close close-2" data-title="product-remove"><a href="#"><i class="ion-close-circled"></i></a></td>
                            </tr>
                            <tr class="row-3">
                            	<td class="row-close close-1" data-title="product-remove"><a href="#"><i class="ion-close-circled"></i></a></td>
                            	<td class="row-img"><img src="image/cart-inner-img-2.jpg" alt="cart-img"></td>
                                <td class="product-name" data-title="Product"><a href="#">Ornare sed consequat</a></td>
                                <td class="product-price" data-title="Price"><p>$ 81.00</p></td>
                                <td class="product-quantity" data-title="Quantity">
                                    <div class="quantity_filter">
                                        <input type="button" value="-" class="minus">
                                        <input class="quantity-number qty" type="text" value="1" min="1" max="10">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                </td>
                                <td class="product-total" data-title="Subprice"><p>$ 81.00</p></td>
                                <td class="row-close close-2" data-title="product-remove"><a href="#"><i class="ion-close-circled"></i></a></td>
                            </tr>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="12">
                                    <ul class="table-btn">
                                        <li><a href="shop.html" class="btn btn-secondary"><i class="fa fa-chevron-left"></i>Continue Shopping</a></li>
                                        <li><a href="#" class="btn btn-primary"><i class="fa fa-refresh"></i>Update cart</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
				 <form action="#" method="post" class="login_form ">
                    <div class="form-group">
                        <label>Full Name <span class="required">*</span></label>
                        <input type="text" required="" class="form-control" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label>Contact Number <span class="required">*</span></label>
                        <input type="text" required="" class="form-control" name="phone" value="">
                    </div>
                    <div class="form-group">
                        <label>Complete Address <span class="required">*</span></label>
                        <input type="text" required="" class="form-control" name="address" value="">
                    </div>
                   
                
            </div>
            <div class="col-lg-3 col-md-12">
            	<div class="cart-inner-box box-2 text-center">
                	<div class="ci-title">
                    	<h6>Cart Total</h6>
                    </div>
                    <div class="ci-caption">
                        <ul>
                        	<li>Subtotal <span>₹ <?= $total ?>/-</span></li>
                            <li>Shipping <span>Free</span></li>
                        </ul>
                    </div>
                    <div class="ci-btn">
                        <ul>
                        	<li>Total Order<span>₹ <?= $total ?>/-</span></li>
                        	<li style="margin-top:30px; margin-left: 30px;"><button type="submit" class="btn btn-primary" name="submit" value="Log in">Placed Order</button></li>
                        </ul>
                    </div>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>
</section>
<!-- End Cart Section -->
<?php include("public_footer.php");?>