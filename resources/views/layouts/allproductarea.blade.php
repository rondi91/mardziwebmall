<div class="all-products-area pb-70">
    <div class="pl-100 pr-100">
        <div class="container-fluid">
            <div class="row">
                @foreach ($products as $product )
                    <div class="col-lg-3 col-xl-3 col-md-6">
                        <div class="product-wrapper mb-45">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/fashion-2/1.jpg" alt="">
                                </a>
                                <span>hot</span>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">{{ $product->name }}</a></h4>
                                <span>{{ $product->price }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                    
                
            </div>
        </div>
    </div>
</div>