<?php include("public_header.php");?>


<!-- Start Product Detail Section -->
<section class="products-detail-section pt_large">
	<div class="container">
    	<div class="row">
        <div class="col-md-5">
             <div class="product-image">
                <img class="product_img" src='image/product1.png' data-zoom-image="image/product1.png"/>
             </div>
             <div id="pr_item_gallery" class="product_gallery_item owl-thumbs-slider owl-carousel owl-theme">
                <div class="item">
                    <a href="#" class="active" data-image="image/product1.png" data-zoom-image="image/product1.png">
                        <img src="image/product_small1.png" />
                    </a>
                </div>
                <div class="item">
                    <a href="#" data-image="image/product2.png" data-zoom-image="image/product2.png">
                        <img src="image/product_small2.png" />
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="quickview-product-detail">
                <h2 class="box-title">Ornare sed consequat</h2>
                <h3 class="box-price"><del>$ 95.00</del>$ 81.00</h3>
                <p class="box-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                <p class="stock">Availability: <span>In Stock</span></p>
                <div class="quantity-box">
                    <p>Quantity:</p>
                    <div class="input-group">
                    	<input type="button" value="-" class="minus">
                        <input class="quantity-number qty" type="text" value="1" min="1" max="10">
                        <input type="button" value="+" class="plus">
                    </div>
                    <div class="quickview-cart-btn">
                        <a href="#" class="btn btn-primary"><img src="image/cart-icon-1.png" alt="cart-icon-1"> Add To Cart</a>
                    </div>
                </div>
                <div class="box-social-like d-sm-flex justify-content-between">
                    <ul class="hover-icon box-like">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                    </ul>
                    <ul class="hover-icon box-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- End Product Detail Section -->

<!-- Start Product Tabs Section -->
<section class="products-detail-tabs">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="products-tabs">
                	<ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                        	<a class="nav-link active" id="discription-tab" data-toggle="tab" href="#discription" role="tab" aria-controls="discription" aria-selected="true">Discription</a>
                        </li>
                        <li class="nav-item">
                        	<a class="nav-link" id="ai-tab" data-toggle="tab" href="#ai" role="tab" aria-controls="ai" aria-selected="false">ADDITIONAL INFORMATION</a>
                        </li>
                        <li class="nav-item">
                        	<a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">REVIEWS (2)</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade tab-1 show active" id="discription" role="tabpanel" aria-labelledby="discription-tab">
                        	<div class="tab-title">
                            	<h6>Discription</h6>
                            </div>
                            <div class="tab-caption">
                            	<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade tab-2" id="ai" role="tabpanel" aria-labelledby="ai-tab">
                        	<div class="tab-title">
                            	<h6>Additional information</h6>
                            </div>
                            <div class="tab-caption">
                            	<div class="table-responsive">
                            		<table class="table">
                                    	<tbody>
                                            <tr>
                                                <td colspan="1">Brand</td>
                                                <td>FairPlay</td>
                                            </tr>
                                            <tr>
                                                <td colspan="1">Season</td>
                                                <td>Spring / Summer</td>
                                            </tr>
                                            <tr>
                                                <td  colspan="1">Color</td>
                                                <td>Black</td>
                                            </tr>
                                            <tr>
                                                <td colspan="1">Fit</td>
                                                <td>Comfort</td>
                                            </tr>
                                            <tr>
                                                <td colspan="1">Size</td>
                                                <td>S</td>
                                            </tr>
                                    	</tbody>
                                	</table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade tab-3" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        	<div class="tab-title">
                            	<h6>Costomer Reviews</h6>
                            </div>
                            <div class="tab-caption">
                            	<div class="costomer-reviews">
                                	<div class="costomer-reviews-box">
                                    	<div class="reviews-img">
                                        	<img src="image/costomer-img.jpg" alt="costomer-img">
                                        </div>
                                        <div class="reviews-text">
                                        	<p class="reviewer-name">admin</p>
                                            <span class="reviews-date">September 13, 2017</span>
                                            <p class="reviewer-text">24/7 helpdesk is also available. I Love it!</p>
                                        </div>
                                    </div>
                                    <div class="costomer-reviews-box">
                                    	<div class="reviews-img">
                                        	<img src="image/costomer-img.jpg" alt="costomer-img">
                                        </div>
                                        <div class="reviews-text">
                                        	<p class="reviewer-name">admin</p>
                                            <span class="reviews-date">September 13, 2017</span>
                                            <p class="reviewer-text">24/7 helpdesk is also available. I Love it!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-caption">
                            	<div class="add-review">
                                	<div class="tab-title">
                                        <h6>Add a review</h6>
                                    </div>
                                    <form class="add-review-form">
                                    	<div class="input-1">
                                    		<input required class="form-control" placeholder="Enter Your Name" value="" type="text">
                                        </div>
                                        <div class="input-2">
                                    		<input required class="form-control" placeholder="Enter Your Email" value="" type="email">
                                        </div>
                                        <div class="input-3">
                                    		<textarea required rows="6" class="form-control" placeholder="Enter Your Review"></textarea>
                                        </div>
                                        <div class="input-btn">
                                        	<button type="submit" class="btn btn-secondary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product Tabs Section -->

<!-- Start Related Product Section -->
<section class="related-product pb_large">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="title">
                	<h4>RELATED PRODUCTS</h4>
                </div> 
            </div>
        </div>
        <div class="row">
			<div class="col-12">
				<div class="products-slider4 same-nav owl-carousel owl-theme" data-margin="30" data-dots="false">
					<div class="item">
                    	<div class="product-box common-cart-box">
                        	<div class="product-img common-cart-img">
                            	<img src="image/product-img-1.jpg" alt="product-img">
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                	<ul class="hover-icon">
                                    	<li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info common-cart-info text-center">
                            	<a href="product-detail.html" class="cart-name">Variable product 001</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 78.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="product-box common-cart-box">
                        	<div class="product-img common-cart-img">
                            	<img src="image/product-img-2.jpg" alt="product-img">
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                	<ul class="hover-icon">
                                    	<li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info common-cart-info text-center">
                            	<a href="product-detail.html" class="cart-name">Ornare sed consequat</a>
                                <p class="cart-price"><del>$ 95.00</del>$ 81.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="product-box common-cart-box">
                        	<div class="product-img common-cart-img">
                            	<img src="image/product-img-3.jpg" alt="product-img">
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                	<ul class="hover-icon">
                                    	<li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info common-cart-info text-center">
                            	<a href="product-detail.html" class="cart-name">Pellentesque posuere</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 80.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="product-box common-cart-box">
                        	<div class="product-img common-cart-img">
                            	<img src="image/product-img-4.jpg" alt="product-img">
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                	<ul class="hover-icon">
                                    	<li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info common-cart-info text-center">
                            	<a href="product-detail.html" class="cart-name">Consequat posuere</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 80.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="product-box common-cart-box">
                        	<div class="product-img common-cart-img">
                            	<img src="image/product-img-1.jpg" alt="product-img">
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                	<ul class="hover-icon">
                                    	<li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info common-cart-info text-center">
                            	<a href="product-detail.html" class="cart-name">Variable product 001</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 78.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="product-box common-cart-box">
                        	<div class="product-img common-cart-img">
                            	<img src="image/product-img-2.jpg" alt="product-img">
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                	<ul class="hover-icon">
                                    	<li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info common-cart-info text-center">
                            	<a href="product-detail.html" class="cart-name">Ornare sed consequat</a>
                                <p class="cart-price"><del>$ 95.00</del>$ 81.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="product-box common-cart-box">
                        	<div class="product-img common-cart-img">
                            	<img src="image/product-img-3.jpg" alt="product-img">
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                	<ul class="hover-icon">
                                    	<li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info common-cart-info text-center">
                            	<a href="product-detail.html" class="cart-name">Pellentesque posuere</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 80.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="product-box common-cart-box">
                        	<div class="product-img common-cart-img">
                            	<img src="image/product-img-4.jpg" alt="product-img">
                                <div class="hover-option">
                                	<div class="add-cart-btn">
                                    	<a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                	<ul class="hover-icon">
                                    	<li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#test-popup3" class="quickview-popup-link"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info common-cart-info text-center">
                            	<a href="product-detail.html" class="cart-name">Consequat posuere</a>
                                <p class="cart-price"><del>$ 90.00</del>$ 80.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Related Product Section -->

<?php include("public_footer.php");?>