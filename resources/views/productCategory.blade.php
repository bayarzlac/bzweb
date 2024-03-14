@extends('layouts.shopMaster')
@section('content')
    <!-- Products section -->
    <div class="section">
        <div class="container">
            <!-- Sorting -->
            <div class="margin-bottom-40">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-6">
                        <p>Showing 1-9 of 46 results</p>
                    </div>
                    <div class="col-12 col-sm-6 text-sm-right">
                        <select class="custom-select">
                            <option selected>Sort by latest</option>
                            <option value="1">Sort by popularity</option>
                            <option value="2">Sort by rating</option>
                            <option value="3">Sort by price: high to low</option>
                            <option value="4">Sort by price: low to high</option>
                        </select>
                    </div>
                </div><!-- end row -->
            </div>
            <!-- Products -->
            <div class="row col-spacing-40">
                @foreach ($products as $item)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product-box">
                            <div class="product-img">
                                <a href="{{ route('product', $item->id) }}">
                                    <img src="{{ asset($item->path) }}" alt="">
                                    {{-- <img src="/bzweb/storage/assets/images/col-1-tall.jpg" alt=""> --}}
                                </a>
                                <div class="product-badge-left">
                                    <span class="font-small uppercase font-family-secondary font-weight-medium">Шинэ</span>
                                </div>
                            </div>
                            <div class="product-title">
                                <h6 class="font-weight-medium"><a href="{{ route('product', $item->id) }}">{{ $item->title }}</a></h6>
                                <div class="price-and-cart">
                                    <div class="price">
                                        {{-- <del>$98</del> --}}
                                        <span>{{ $item->price }}</span>
                                    </div>
                                    <div class="add-to-cart">
                                        <a class="button-text-1" href="#">Үнийн санал авах</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- 1 -->
            </div><!-- end row -->
            <!-- Pagination -->
            <div class="text-center margin-top-70">
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </nav>
            </div>
        </div><!-- end container -->
    </div>
    <!-- end Products section -->
@endsection
