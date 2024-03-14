@extends('layouts.shopMaster')
@section('content')
<div class="section">
    <div class="container">
        <div class="row col-spacing-50">
            <div class="col-12 col-lg-7">
                <div class="owl-carousel product-carousel owl-dots-overlay-right">
                    @foreach ($productImages as $item)
                        <div data-hash="{{ $item->loop + 1 }}">
                            <img src="{{ $item->path }}" alt="">
                        </div>
                    @endforeach
                </div>
                <ul class="product-carousel-thumbnails">
                    @foreach ($productImages as $item)
                        <li><a href="#{{ $item->index + 1 }}"><img src="{{ $item->path }}" alt=""></a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12 col-lg-5">
                <h3 class="font-weight-normal margin-0">{{ $product->title }}</h3>
                <div class="product-price">
                    <h5 class="font-weight-normal"><ins>{{ $product->price }}</ins></h5>
                    {{-- <h5 class="font-weight-normal"><del>$20</del><ins>$10</ins></h5> --}}
                </div>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                <form class="product-quantity margin-top-30">
                    <div class="qnt">
                        <input type="number" id="quantity" name="quantity" min="1" max="10" value="1">
                    </div>
                    <button class="button button-md button-dark" type="submit">Add to Cart</button>
                </form>
                <div class="margin-top-30">
                    <p>SKU: 24421</p>
                    <p>Category: Accessories</p>
                    <a class="button-text-1 font-small uppercase margin-top-30" href="#">Add to Wishlist</a>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div>

<div class="container">
    <div class="product-info-box">
        <ul class="nav margin-bottom-20">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#description">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#additional-info">Additional Info</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="description">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
            </div>
            <div class="tab-pane fade" id="additional-info">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Weight</th>
                            <td>54 g</td>
                        </tr>
                        <tr>
                            <th scope="row">Dimension</th>
                            <td>12 x 18 x 7 x 57 cm</td>
                        </tr>
                        <tr>
                            <th scope="row">Color</th>
                            <td>Black</td>
                        </tr>
                        <tr>
                            <th scope="row">Care</th>
                            <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!-- end container -->

<!-- Related Products -->
<div class="section">
    <div class="container">
        <div class="text-center margin-bottom-40">
            <h3 class="font-weight-normal">Related Products</h3>
        </div>
        <div class="owl-carousel" data-owl-nav="true" data-owl-dots="false" data-owl-margin="40" data-owl-xs="1" data-owl-sm="2" data-owl-md="3" data-owl-lg="3" data-owl-xl="3">
            <!-- Carousel Item 1 -->
            <div class="product-box">
                <div class="product-img">
                    <a href="#">
                        <img src="../assets/images/col-2-tall.jpg" alt="">
                        <img src="../assets/images/col-1-tall.jpg" alt="">
                    </a>
                    <div class="product-badge-left">
                        <span class="font-small uppercase font-family-secondary font-weight-medium">Hot</span>
                    </div>
                    <div class="product-badge-right red">
                        <span class="font-small uppercase font-family-secondary font-weight-medium">-50%</span>
                    </div>
                </div>
                <div class="product-title">
                    <h6 class="font-weight-medium"><a href="#">Product title</a></h6>
                    <div class="price-and-cart">
                        <div class="price">
                            <del>$98</del>
                            <span>$49</span>
                        </div>
                        <div class="add-to-cart">
                            <a class="button-text-1" href="#">Add to Cart</a>
                        </div>
                    </div>
                    <div class="add-to-wishlist">
                        <a href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <!-- Carousel Item 2 -->
            <div class="product-box">
                <div class="product-img">
                    <a href="#">
                        <img src="../assets/images/col-2-tall.jpg" alt="">
                        <img src="../assets/images/col-1-tall.jpg" alt="">
                    </a>
                    <div class="product-badge-left">
                        <span class="font-small uppercase font-family-secondary font-weight-medium">Hot</span>
                    </div>
                </div>
                <div class="product-title">
                    <h6 class="font-weight-medium"><a href="#">Product title</a></h6>
                    <div class="price-and-cart">
                        <div class="price">
                            <span>$98</span>
                        </div>
                        <div class="add-to-cart">
                            <a class="button-text-1" href="#">Add to Cart</a>
                        </div>
                    </div>
                    <div class="add-to-wishlist">
                        <a href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <!-- Carousel Item 3 -->
            <div class="product-box">
                <div class="product-img">
                    <a href="#">
                        <img src="../assets/images/col-2-tall.jpg" alt="">
                        <img src="../assets/images/col-1-tall.jpg" alt="">
                    </a>
                    <div class="product-badge-left">
                        <span class="font-small uppercase font-family-secondary font-weight-medium">Hot</span>
                    </div>
                    <div class="product-badge-right red">
                        <span class="font-small uppercase font-family-secondary font-weight-medium">-50%</span>
                    </div>
                </div>
                <div class="product-title">
                    <h6 class="font-weight-medium"><a href="#">Product title</a></h6>
                    <div class="price-and-cart">
                        <div class="price">
                            <del>$98</del>
                            <span>$49</span>
                        </div>
                        <div class="add-to-cart">
                            <a class="button-text-1" href="#">Add to Cart</a>
                        </div>
                    </div>
                    <div class="add-to-wishlist">
                        <a href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- end owl-carousel -->
    </div><!-- end container -->
</div>
<!-- end Related Products -->
@endsection