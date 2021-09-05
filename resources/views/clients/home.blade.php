@extends('layouts.client_master')


@section('title', 'Home')


@section('content')

<!--top brand panel start-->
<section class="brand-panel">
    <div class="brand-panel-box">
      <div class="brand-panel-contain ">
        <ul>
          <li><a href="javascript:void(0)">top brand</a></li>
          <li><a>:</a></li>
          <li><a href="category-page(left-sidebar).html">aerie</a></li>
          <li><a href="category-page(left-sidebar).html">baci lingrie</a></li>
          <li><a href="category-page(left-sidebar).html">gerbe</a></li>
          <li><a href="category-page(left-sidebar).html">jolidon</a></li>
          <li><a href="category-page(left-sidebar).html">Wonderbra</a></li>
          <li><a href="category-page(left-sidebar).html">Ultimo</a></li>
          <li><a href="category-page(left-sidebar).html">Vassarette </a></li>
          <li><a href="category-page(left-sidebar).html">Oysho</a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--top brand panel end-->

  <!--slider start-->
  <section class="theme-slider home-slide b-g-white " id="home-slide">
    <div class="custom-container">
      <div class="row">
        <div class="col">
          <div class="slide-1 no-arrow">
            <div>
              <div class="slider-banner p-center slide-banner-1">
                <div class="slider-img">
                  <ul class="layout1-slide-1">
                    <li id="img-1"><img src="{{ URL::to('frontend/images/layout-2/slider/1.1.png') }}" class="img-fluid" alt="slider"></li>
                    <li id="img-2" class="slide-center"><img src="{{ URL::to('frontend/images/layout-2/slider/1.2.png') }}" class="img-fluid" alt="slider"></li>
                  </ul>
                </div>
                <div class="slider-banner-contain">
                  <div>
                    <h1>mi<span>Mobile</span></h1>
                    <h4>fast and light</h4>
                    <h2>Pixel Perfect Deal Camera</h2>
                    <a href="product-page(left-sidebar).html" class="btn btn-normal">
                      Shop Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="slider-banner p-center slide-banner-1">
                <div class="slider-img">
                  <ul class="layout1-slide-2">
                    <li id="img-3" class="slide-center"><img src="{{ URL::to('frontend/images/layout-2/slider/2.1.png') }}" class="img-fluid" alt="slider"></li>
                    <li id="img-4" class="slide-center"><img src="{{ URL::to('frontend/images/layout-2/slider/2.2.png') }}" class="img-fluid" alt="slider"></li>
                  </ul>
                </div>
                <div class="slider-banner-contain">
                  <div>
                    <h1>big<span>Sale</span></h1>
                    <h4>now start at $99</h4>
                    <h2>50% off</h2>
                    <a href="product-page(left-sidebar).html" class="btn btn-normal">
                      Shop Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="slider-banner p-center slide-banner-1">
                <div class="slider-img">
                  <ul class="layout1-slide-3">
                    <li id="img-5"><img src="{{ URL::to('frontend/images/layout-2/slider/3.2.png') }}" class="img-fluid" alt="slider"></li>
                    <li id="img-6" class="slide-center"><img src="{{ URL::to('frontend/images/layout-2/slider/3.1.png') }}" class="img-fluid" alt="slider"></li>
                  </ul>
                </div>
                <div class="slider-banner-contain">
                  <div>
                    <h1>camera<span>Sale</span></h1>
                    <h4>now start at $79</h4>
                    <h2>70% off today</h2>
                    <a href="product-page(left-sidebar).html" class="btn btn-normal">
                      Shop Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--slider end-->

  <!--collection banner start-->
  <section class="collection-banner section-pt-space b-g-white ">
    <div class="custom-container">
      <div class="row collection2">
        <div class="col-md-4">
          <div class="collection-banner-main banner-1  p-right">
            <div class="collection-img">
              <img src="{{ URL::to('frontend/images/layout-2/collection-banner/1.jpg') }}" class="img-fluid bg-img  " alt="banner">
            </div>
            <div class="collection-banner-contain">
              <div>
                <h3>women</h3>
                <h4>fashion</h4>
                <div class="shop">
                  <a href="product-page(left-sidebar).html">
                    shop now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="collection-banner-main banner-1 p-right">
            <div class="collection-img">
              <img src="{{ URL::to('frontend/images/layout-2/collection-banner/2.jpg') }}" class="img-fluid bg-img  " alt="banner">
            </div>
            <div class="collection-banner-contain ">
              <div>
                <h3>camera</h3>
                <h4>lenses</h4>
                <div class="shop">
                  <a href="product-page(left-sidebar).html">
                    shop now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="collection-banner-main banner-1 p-right">
            <div class="collection-img">
              <img src="{{ URL::to('frontend/images/layout-2/collection-banner/3.jpg') }}" class="img-fluid bg-img  " alt="banner">
            </div>
            <div class="collection-banner-contain ">
              <div>
                <h3>refrigerator</h3>
                <h4>lG mini</h4>
                <div class="shop">
                  <a href="product-page(left-sidebar).html">
                    shop now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--collection banner end-->

  <!--discount banner start-->
  <section class="discount-banner">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="discount-banner-contain">
            <h2>Discount on every single item on our site.</h2>
            <h1><span>OMG! Just Look at the</span> <span>great Deals!</span></h1>
            <div class="rounded-contain rounded-inverse">
              <div class="rounded-subcontain">
                How does it feel, when you see great discount deals for each product?
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--discount banner end-->

  <!--tab product-->
  <section class="section-pt-space" >
    <div class="tab-product-main">
      <div class="tab-prodcut-contain">
        <ul class="tabs tab-title">
          <li class="current"><a href="tab-1.html">fashion</a></li>
          <li class=""><a href="tab-2.html">electronic</a></li>
          <li class=""><a href="tab-3.html">footware</a></li>
          <li class=""><a href="tab-4.html">sports</a></li>
          <li class=""><a href="tab-5.html">toys</a></li>
          <li class=""><a href="tab-6.html">books</a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--tab product-->

  <!-- slider tab  -->
  <section class="section-py-space ratio_square product">
    <div class="custom-container">
      <div class="row">
        <div class="col pr-0">
          <div class="theme-tab product mb--5">
            <div class="tab-content-cls ">
              <div id="tab-1" class="tab-content active default">
                <div class="product-slide-6 product-m no-arrow">
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/1.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a1.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                        <div class="new-label1">
                          <div>new</div>
                        </div>
                        <div class="on-sale1">
                          on sale
                        </div>
                      </div>
                      <div class="product-detail detail-inline ">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                sony xperia m5
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 56.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 24.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/3.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a3.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist">
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                        <div class="new-label1">
                          <div>new</div>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                woman hande bag
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 56.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 24.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/4.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a4.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                nikon camera
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 60.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 20.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/5.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a5.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                        <div class="new-label1">
                          <div>new</div>
                        </div>
                        <div class="on-sale1">
                          on sale
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                lenovo laptop
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 70.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 30.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/6.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a6.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                earphone Pouch Bag
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 100.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 80.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/7.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a7.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                wooden table
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 90.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 28.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/8.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a8.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                Wireless Optical Mouse
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 80.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 28.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-2" class="tab-content ">
                <div class="product-slide-6 product-m no-arrow">
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/8.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a8.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                Wireless Optical Mouse
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $150.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 80.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/1.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a1.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                        <div class="new-label1">
                          <div>new</div>
                        </div>
                        <div class="on-sale1">
                          on sale
                        </div>
                      </div>
                      <div class="product-detail detail-inline ">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                sony xperia m5
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 120.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $100.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/3.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a3.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                        <div class="new-label1">
                          <div>new</div>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                woman hande bag
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 60.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 30.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/4.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a4.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                nikon camera
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 40.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 30.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/5.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a5.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                        <div class="new-label1">
                          <div>new</div>
                        </div>
                        <div class="on-sale1">
                          on sale
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                lenovo laptop
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 45.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 18.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/6.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a6.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                earphone Pouch Bag
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 180.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 120.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/7.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a7.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                wooden table
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 320.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 125.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div id="tab-3" class="tab-content ">
                <div class="product-slide-6 product-m no-arrow">
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-pagplayout4e(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/7.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a7.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                wooden table
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 225.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 180.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/8.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a8.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                Wireless Optical Mouse
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $99.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 75.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/1.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a1.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                        <div class="new-label1">
                          <div>new</div>
                        </div>
                        <div class="on-sale1">
                          on sale
                        </div>
                      </div>
                      <div class="product-detail detail-inline ">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                sony xperia m5
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 260.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 120.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/3.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a3.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                        <div class="new-label1">
                          <div>new</div>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                woman hande bag
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 360.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 140.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/4.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a4.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                nikon camera
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 370.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 170.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/5.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a5.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                        <div class="new-label1">
                          <div>new</div>
                        </div>
                        <div class="on-sale1">
                          on sale
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                lenovo laptop
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 76.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 40.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/6.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a6.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                earphone Pouch Bag
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 60.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 45.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-4" class="tab-content ">
                <div class="product-slide-6 product-m no-arrow">
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/6.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a6.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                earphone Pouch Bag
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 60.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 45.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/7.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a7.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                wooden table
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 225.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 180.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/8.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a8.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                Wireless Optical Mouse
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $99.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 75.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/1.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a1.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                        <div class="new-label1">
                          <div>new</div>
                        </div>
                        <div class="on-sale1">
                          on sale
                        </div>
                      </div>
                      <div class="product-detail detail-inline ">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                sony xperia m5
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 260.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 120.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/3.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a3.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                        <div class="new-label1">
                          <div>new</div>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                woman hande bag
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 360.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 140.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/4.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a4.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                nikon camera
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 370.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 170.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/5.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a5.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                        <div class="new-label1">
                          <div>new</div>
                        </div>
                        <div class="on-sale1">
                          on sale
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                lenovo laptop
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 76.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 40.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div id="tab-5" class="tab-content ">
                <div class="product-slide-6 product-m no-arrow">
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/5.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a5.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                        <div class="new-label1">
                          <div>new</div>
                        </div>
                        <div class="on-sale1">
                          on sale
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                lenovo laptop
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 76.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 40.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/6.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a6.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                earphone Pouch Bag
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 60.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 45.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/7.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a7.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                wooden table
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 225.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 180.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/8.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a8.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                Wireless Optical Mouse
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $99.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 75.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/1.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a1.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                        <div class="new-label1">
                          <div>new</div>
                        </div>
                        <div class="on-sale1">
                          on sale
                        </div>
                      </div>
                      <div class="product-detail detail-inline ">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                sony xperia m5
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 260.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 120.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/3.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a3.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                        <div class="new-label1">
                          <div>new</div>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                woman hande bag
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 360.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 140.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/4.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a4.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                nikon camera
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 370.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 170.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
              <div id="tab-6" class="tab-content ">
                <div class="product-slide-6 product-m no-arrow">
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/4.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a4.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                nikon camera
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 370.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 170.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/5.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a5.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                        <div class="new-label1">
                          <div>new</div>
                        </div>
                        <div class="on-sale1">
                          on sale
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                lenovo laptop
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 76.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 40.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/6.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a6.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                earphone Pouch Bag
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 60.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 45.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/7.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a7.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                wooden table
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 225.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 180.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/8.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a8.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                Wireless Optical Mouse
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $99.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 75.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/1.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a1.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                      </div>
                      <div class="product-detail detail-inline ">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                sony xperia m5
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 260.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 120.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="product-box">
                      <div class="product-imgbox">
                        <div class="product-front">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/3.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-back">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/product/a3.jpg') }}" class="img-fluid  " alt="product">
                          </a>
                        </div>
                        <div class="product-icon icon-inline">
                          <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                            <i  data-feather="shopping-cart"></i>
                          </button>
                          <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                            <i  data-feather="heart"></i>
                          </a>
                          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                            <i  data-feather="eye"></i>
                          </a>
                          <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                            <i  data-feather="refresh-cw"></i>
                          </a>
                        </div>
                        <div class="new-label1">
                          <div>new</div>
                        </div>
                      </div>
                      <div class="product-detail detail-inline">
                        <div class="detail-title">
                          <div class="detail-left">
                            <div class="rating-star">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(left-sidebar).html">
                              <h6 class="price-title">
                                woman hande bag
                              </h6>
                            </a>
                          </div>
                          <div class="detail-right">
                            <div class="check-price">
                              $ 360.21
                            </div>
                            <div class="price">
                              <div class="price">
                                $ 140.05
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>



                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- slider tab end -->

  <!--collection banner start-->
  <section class="collection-banner section-pb-space ">
    <div class="custom-container">
      <div class="row">
        <div class="col">
          <div class="collection-banner-main banner-5 p-center">
            <div class="collection-img">
              <img src="{{ URL::to('frontend/images/layout-2/collection-banner/7.jpg') }}" class="bg-img  " alt="banner">
            </div>
            <div class="collection-banner-contain ">
              <div class="sub-contain">
                <h3>save up to 30% off</h3>
                <h4>women<span>fashion</span></h4>
                <div class="shop">
                  <a class="btn btn-normal" href="product-page(left-sidebar).html">
                    shop now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--collection banner end-->

  <!--deal banner start-->
  <section class="deal-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="deal-banner-containe">
            <h2>
              save up to  30% to 40% off
            </h2>
            <h1>
              omg! just look at the great deals!
            </h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 ">
          <div class="deal-banner-containe">
            <diV class="deal-btn">
              <a href="category-page(left-sidebar).html" class="btn-white">
                View more
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--deal banner end-->

  <!--rounded category start-->
  <section class="rounded-category">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="slide-6 no-arrow">
            <div>
              <div class="category-contain">
                <div class="img-wrapper">
                  <a href="category-page(left-sidebar).html">
                    <img src="{{ URL::to('frontend/images/layout-1/rounded-cat/1.png') }}" alt="category  " class="img-fluid">
                  </a>
                </div>
                <a href="category-page(left-sidebar).html" class="btn-rounded">
                  flower
                </a>
              </div>
            </div>
            <div>
              <div class="category-contain">
                <div class="img-wrapper">
                  <a href="category-page(left-sidebar).html">
                    <img src="{{ URL::to('frontend/images/layout-1/rounded-cat/2.png') }}" alt="category  " class="img-fluid">
                  </a>
                </div>
                <a href="category-page(left-sidebar).html" class="btn-rounded">
                  furniture
                </a>
              </div>
            </div>
            <div>
              <div class="category-contain">
                <div class="img-wrapper">
                  <a href="category-page(left-sidebar).html">
                    <img src="{{ URL::to('frontend/images/layout-1/rounded-cat/3.png') }}" alt="category  " class="img-fluid">
                  </a>
                </div>
                <a href="category-page(left-sidebar).html" class="btn-rounded">
                  bag
                </a>
              </div>
            </div>
            <div>
              <div class="category-contain">
                <div class="img-wrapper">
                  <a href="category-page(left-sidebar).html">
                    <img src="{{ URL::to('frontend/images/layout-1/rounded-cat/4.png') }}" alt="category  " class="img-fluid">
                  </a>
                </div>
                <a href="category-page(left-sidebar).html" class="btn-rounded">
                  tools
                </a>
              </div>
            </div>
            <div>
              <div class="category-contain">
                <div class="img-wrapper">
                  <a href="category-page(left-sidebar).html">
                    <img src="{{ URL::to('frontend/images/layout-1/rounded-cat/5.png') }}" alt="category  " class="img-fluid">
                  </a>
                </div>
                <a href="category-page(left-sidebar).html" class="btn-rounded">
                  grocery
                </a>
              </div>
            </div>
            <div>
              <div class="category-contain">
                <div class="img-wrapper">
                  <a href="category-page(left-sidebar).html">
                    <img src="{{ URL::to('frontend/images/layout-1/rounded-cat/6.png') }}" alt="category  " class="img-fluid">
                  </a>
                </div>
                <a href="category-page(left-sidebar).html" class="btn-rounded">
                  camera
                </a>
              </div>
            </div>
            <div>
              <div class="category-contain">
                <div class="img-wrapper">
                  <a href="category-page(left-sidebar).html">
                    <img src="{{ URL::to('frontend/images/layout-1/rounded-cat/7.png') }}" alt="category  " class="img-fluid">
                  </a>
                </div>
                <a href="category-page(left-sidebar).html" class="btn-rounded">
                  shoes
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--rounded category end-->

  <!--box categroy start-->
  <section class="box-category section-py-space">
    <div class="container-fluid ">
      <div class="row">
        <div class="col pl-0">
          <div class="slide-10 no-arrow">
            <div>
              <a href="category-page(left-sidebar).html">
                <div class="box-category-contain">
                  <h4>10% off</h4>
                </div>
              </a>
            </div>
            <div>
              <a href="category-page(left-sidebar).html">
                <div class="box-category-contain">
                  <h4>under @99</h4>
                </div>
              </a>
            </div>
            <div>
              <a href="category-page(left-sidebar).html">
                <div class="box-category-contain">
                  <h4>free shipping</h4>
                </div>
              </a>
            </div>
            <div>
              <a href="category-page(left-sidebar).html">
                <div class="box-category-contain">
                  <h4>extra 10% off</h4>
                </div>
              </a>
            </div>
            <div>
              <a href="category-page(left-sidebar).html">
                <div class="box-category-contain">
                  <h4>$79 cashback</h4>
                </div>
              </a>
            </div>
            <div>
              <a href="category-page(left-sidebar).html">
                <div class="box-category-contain">
                  <h4>80% off</h4>
                </div>
              </a>
            </div>
            <div>
              <a href="category-page(left-sidebar).html">
                <div class="box-category-contain">
                  <h4>on sale</h4>
                </div>
              </a>
            </div>
            <div>
              <a href="category-page(left-sidebar).html">
                <div class="box-category-contain">
                  <h4>only $49</h4>
                </div>
              </a>
            </div>
            <div>
              <a href="category-page(left-sidebar).html">
                <div class="box-category-contain">
                  <h4>under @150</h4>
                </div>
              </a>
            </div>
            <div>
              <a href="category-page(left-sidebar).html">
                <div class="box-category-contain">
                  <h4>save money</h4>
                </div>
              </a>
            </div>
            <div>
              <a href="category-page(left-sidebar).html">
                <div class="box-category-contain">
                  <h4>80% off</h4>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--box category end-->

  <!-- media banner tab start-->
  <section class=" ratio_square">
    <div class="custom-container b-g-white section-pb-space">
      <div class="row">
        <div class="col p-0">
          <div class="theme-tab product">
            <ul class="tabs tab-title media-tab">
              <li class="current"><a href="tab-7.html">new product</a></li>
              <li class=""><a href="tab-8.html">Feature Products</a></li>
              <li class=""><a href="tab-9.html">best Sellers</a></li>
              <li class=""><a href="tab-10.html">On Sale</a></li>
            </ul>
            <div class="tab-content-cls">
              <div id="tab-7" class="tab-content active default ">
                <div class="media-slide-5 product-m no-arrow">
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-8" class="tab-content ">
                <div class="media-slide-5 product-m no-arrow">
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-9" class="tab-content ">
                <div class="media-slide-5 product-m no-arrow">
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-10" class="tab-content ">
                <div class="media-slide-5 product-m no-arrow">
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="media-banner media-banner-1 border-0">
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>usha table fan</p></a>
                                  <h6>$52.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                                  <h6>$47.05 <span>$55.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="media-banner-box">
                        <div class="media">
                          <a href="product-page(left-sidebar).html">
                            <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                          </a>
                          <div class="media-body">
                            <div class="media-contant">
                              <div>
                                <div class="product-detail">
                                  <ul class="rating">
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star" ></i></li>
                                    <li><i class="fa fa-star-o" ></i></li>
                                  </ul>
                                  <a href="product-page(left-sidebar).html"><p>bajaj rex mixer</p></a>
                                  <h6>$40.05 <span>$60.21</span></h6>
                                </div>
                                <div class="cart-info">
                                  <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                                  <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- media banner tab end -->

  <!--collection banner start-->
  <section class="collection-banner section-py-space">
    <div class="container-fluid">
      <div class="row collection2">
        <div class="col-md-4">
          <div class="collection-banner-main banner-1 p-left">
            <div class="collection-img">
              <img src="{{ URL::to('frontend/images/layout-2/collection-banner/4.jpg') }}" class="img-fluid bg-img " alt="banner">
            </div>
            <div class="collection-banner-contain ">
              <div>
                <h3>Leather</h3>
                <h4>new bag</h4>
                <div class="shop">
                  <a href="product-page(left-sidebar).html">
                    shop now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="collection-banner-main banner-1 p-left">
            <div class="collection-img">
              <img src="{{ URL::to('frontend/images/layout-2/collection-banner/5.jpg') }}" class="img-fluid bg-img " alt="banner">
            </div>
            <div class="collection-banner-contain ">
              <div>
                <h3>nike</h3>
                <h4>breeze</h4>
                <div class="shop">
                  <a href="product-page(left-sidebar).html">
                    shop now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="collection-banner-main banner-1 p-left">
            <div class="collection-img">
              <img src="{{ URL::to('frontend/images/layout-2/collection-banner/6.jpg') }}" class="img-fluid bg-img " alt="banner">
            </div>
            <div class="collection-banner-contain ">
              <div>
                <h3>Printing 3D</h3>
                <h4>USB moon</h4>
                <div class="shop">
                  <a href="product-page(left-sidebar).html">
                    shop now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--collection banner end-->


  <!--hot deal start-->
  <section class="hot-deal hotdeal-first b-g-white section-big-pb-space space-abjust">
    <div class="custom-container">
      <div class="row hot-2 ">
        <div class="col-12">
          <!--title start-->
          <div class="title3 b-g-white text-left">
            <h4>today's hot deal</h4>
          </div>
          <!--titel end-->
        </div>
        <div class="col-lg-9">
          <div class="slide-1 no-arrow">
            <div>
              <div class="hot-deal-contain ">
                <div class="row hot-deal-subcontain hotdeal-block1">
                  <div class="col-lg-4 col-md-4  ">
                    <div class="hotdeal-right-slick border-0">
                      <a href="product-page(left-sidebar).html">
                        <div class="img-wrraper">
                          <div>
                            <img src="{{ URL::to('frontend/images/layout-2/hot-deal/8.jpg') }}" alt="hot-deal" class="img-fluid  bg-img">
                          </div>
                        </div>
                      </a>
                      <a href="product-page(left-sidebar).html">
                        <div class="img-wrraper">
                          <div>
                            <img src="{{ URL::to('frontend/images/layout-2/hot-deal/7.jpg') }}" alt="hot-deal" class="img-fluid  bg-img">
                          </div>
                        </div>
                      </a>
                      <a href="product-page(left-sidebar).html">
                        <div class="img-wrraper">
                          <div>
                            <img src="{{ URL::to('frontend/images/layout-2/hot-deal/6.jpg') }}" alt="hot-deal" class="img-fluid  bg-img">
                          </div>
                        </div>
                      </a>
                      <a href="product-page(left-sidebar).html">
                        <div class="img-wrraper">
                          <div>
                            <img src="{{ URL::to('frontend/images/layout-2/hot-deal/5.jpg') }}" alt="hot-deal" class="img-fluid  bg-img">
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 deal-order-3">
                    <div class="hotdeal-right-slick border-0">
                      <div>
                        <div>
                          <a href="product-page(left-sidebar).html">
                            <h5>oppo find x2 </h5>
                          </a>
                          <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                          </ul>
                          <p>
                            It is a long established fact that a reader. It is a long established fact that a reader.It is a long established fact that a reader. It is a long established fact that a reader.
                          </p>
                          <h6>$50.30 <span>60.00</span></h6>
                          <div class="timer">
                            <p id="demo">
                            </p>
                          </div>
                          <a href="product-page(left-sidebar).html" class="btn btn-normal btn-md ">shop now</a>
                        </div>
                      </div>
                      <div>
                        <div>
                          <a href="product-page(left-sidebar).html">
                            <h5>wooden owl </h5>
                          </a>
                          <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                          </ul>
                          <p>
                            It is a long established fact that a reader. It is a long established fact that a reader.It is a long established fact that a reader. It is a long established fact that a reader.
                          </p>
                          <h6>$60.30 <span>70.00</span></h6>
                          <div class="timer">
                            <p id="demo1">
                            </p>
                          </div>
                          <a href="product-page(left-sidebar).html" class="btn btn-normal btn-md ">shop now</a>
                        </div>
                      </div>
                      <div>
                        <div>
                          <a href="product-page(left-sidebar).html">
                            <h5>office cotton seat </h5>
                          </a>
                          <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                          </ul>
                          <p>
                            It is a long established fact that a reader. It is a long established fact that a reader.It is a long established fact that a reader. It is a long established fact that a reader.
                          </p>
                          <h6>$45.30 <span>50.00</span></h6>
                          <div class="timer">
                            <p id="demo2">
                            </p>
                          </div>
                          <a href="product-page(left-sidebar).html" class="btn btn-normal btn-md ">shop now</a>
                        </div>
                      </div>
                      <div>
                        <div>
                          <a href="product-page(left-sidebar).html">
                            <h5>Generic Rock Earphone </h5>
                          </a>
                          <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                          </ul>
                          <p>
                            It is a long established fact that a reader. It is a long established fact that a reader.It is a long established fact that a reader. It is a long established fact that a reader.
                          </p>
                          <h6>$85.30 <span>90.00</span></h6>
                          <div class="timer">
                            <p id="demo3">
                            </p>
                          </div>
                          <a href="product-page(left-sidebar).html" class="btn btn-normal btn-md ">shop now</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 ">
                    <div class="hotdeal-right-nav">
                      <div><img src="{{ URL::to('frontend/images/layout-2/hot-deal/8.jpg') }}" alt="hot-dea" class="img-fluid  " ></div>
                      <div><img src="{{ URL::to('frontend/images/layout-2/hot-deal/7.jpg') }}" alt="hot-dea" class="img-fluid  " ></div>
                      <div><img src="{{ URL::to('frontend/images/layout-2/hot-deal/6.jpg') }}" alt="hot-dea" class="img-fluid  " ></div>
                      <div><img src="{{ URL::to('frontend/images/layout-2/hot-deal/5.jpg') }}" alt="hot-dea" class="img-fluid  " ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="slide-1-section no-arrow">
            <div>
              <div class="media-banner border-0">
                <div class="media-banner-box">
                  <div class="media-heading">
                    <h5>New Products</h5>
                  </div>
                </div>
                <div class="media-banner-box">
                  <div class="media">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                    </a>
                    <div class="media-body">
                      <div class="media-contant">
                        <div>
                          <div class="product-detail">
                            <ul class="rating">
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star-o" ></i></li>
                            </ul>
                            <a href="product-page(left-sidebar).html"><p>Bajaj GX-1 Mixer</p></a>
                            <h6>$42.05 <span>$47.21</span></h6>
                          </div>
                          <div class="cart-info">
                            <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                            <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                            <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media-banner-box">
                  <div class="media">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                    </a>
                    <div class="media-body">
                      <div class="media-contant">
                        <div>
                          <div class="product-detail">
                            <ul class="rating">
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star-o" ></i></li>
                            </ul>
                            <a href="product-page(left-sidebar).html"><p>rechargeable  fan</p></a>
                            <h6>$47.05 <span>$52.21</span></h6>
                          </div>
                          <div class="cart-info">
                            <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                            <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                            <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media-banner-box">
                  <div class="media">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                    </a>
                    <div class="media-body">
                      <div class="media-contant">
                        <div>
                          <div class="product-detail">
                            <ul class="rating">
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star-o" ></i></li>
                            </ul>
                            <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                            <h6>$57.05 <span>$75.21</span></h6>
                          </div>
                          <div class="cart-info">
                            <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                            <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                            <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media-banner-box">
                  <div class="media-view">
                    <h5>View More</h5>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="media-banner border-0">
                <div class="media-banner-box">
                  <div class="media-heading">
                    <h5>New Products</h5>
                  </div>
                </div>
                <div class="media-banner-box">
                  <div class="media">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                    </a>
                    <div class="media-body">
                      <div class="media-contant">
                        <div>
                          <div class="product-detail">
                            <ul class="rating">
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star-o" ></i></li>
                            </ul>
                            <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                            <h6>$78.05 <span>$68.21</span></h6>
                          </div>
                          <div class="cart-info">
                            <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                            <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                            <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media-banner-box">
                  <div class="media">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                    </a>
                    <div class="media-body">
                      <div class="media-contant">
                        <div>
                          <div class="product-detail">
                            <ul class="rating">
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star-o" ></i></li>
                            </ul>
                            <a href="product-page(left-sidebar).html"><p>Bajaj GX-1 Mixer</p></a>
                            <h6>$72.05 <span>$63.21</span></h6>
                          </div>
                          <div class="cart-info">
                            <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                            <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                            <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media-banner-box">
                  <div class="media">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                    </a>
                    <div class="media-body">
                      <div class="media-contant">
                        <div>
                          <div class="product-detail">
                            <ul class="rating">
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star-o" ></i></li>
                            </ul>
                            <a href="product-page(left-sidebar).html"><p>rechargeable  fan</p></a>
                            <h6>82.05 <span>$75.21</span></h6>
                          </div>
                          <div class="cart-info">
                            <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                            <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                            <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="media-banner-box">
                  <div class="media-view">
                    <h5>View More</h5>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="media-banner border-0">
                <div class="media-banner-box">
                  <div class="media-heading">
                    <h5>New Products</h5>
                  </div>
                </div>

                <div class="media-banner-box">
                  <div class="media">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/media-banner/2.jpg') }}" class="img-fluid " alt="banner">
                    </a>
                    <div class="media-body">
                      <div class="media-contant">
                        <div>
                          <div class="product-detail">
                            <ul class="rating">
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star-o" ></i></li>
                            </ul>
                            <a href="product-page(left-sidebar).html"><p>rechargeable  fan</p></a>
                            <h6>$79.05 <span>$47.21</span></h6>
                          </div>
                          <div class="cart-info">
                            <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                            <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                            <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media-banner-box">
                  <div class="media">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/media-banner/3.jpg') }}" class="img-fluid " alt="banner">
                    </a>
                    <div class="media-body">
                      <div class="media-contant">
                        <div>
                          <div class="product-detail">
                            <ul class="rating">
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star-o" ></i></li>
                            </ul>
                            <a href="product-page(left-sidebar).html"><p>sumsung galaxy</p></a>
                            <h6>$51.05 <span>$76.21</span></h6>
                          </div>
                          <div class="cart-info">
                            <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                            <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                            <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media-banner-box">
                  <div class="media">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/media-banner/1.jpg') }}" class="img-fluid " alt="banner">
                    </a>
                    <div class="media-body">
                      <div class="media-contant">
                        <div>
                          <div class="product-detail">
                            <ul class="rating">
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star" ></i></li>
                              <li><i class="fa fa-star-o" ></i></li>
                            </ul>
                            <a href="product-page(left-sidebar).html"><p>Bajaj GX-1 Mixer</p></a>
                            <h6>$24.05 <span>$56.21</span></h6>
                          </div>
                          <div class="cart-info">
                            <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart"><i  data-feather="shopping-cart"></i></button>
                            <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" ><i  data-feather="heart"></i></a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View"><i  data-feather="eye"></i></a>
                            <a href="compare.html"  class="tooltip-top" data-tippy-content="Compare"><i  data-feather="refresh-cw"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media-banner-box">
                  <div class="media-view">
                    <h5>View More</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--hot deal start-->

  <!--testimonial start-->
  <section class="testimonial testimonial-inverse">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="slide-1 no-arrow">
            <div>
              <div class="testimonial-contain">
                <div class="media">
                  <div class="testimonial-img">
                    <img src="{{ URL::to('frontend/images/testimonial/1.jpg') }}" class="img-fluid rounded-circle  " alt="testimonial">
                  </div>
                  <div class="media-body">
                    <h5>mark jecno</h5>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="testimonial-contain">
                <div class="media">
                  <div class="testimonial-img">
                    <img src="{{ URL::to('frontend/images/testimonial/2.jpg') }}" class="img-fluid rounded-circle  " alt="testimonial">
                  </div>
                  <div class="media-body">
                    <h5>mark jecno</h5>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="testimonial-contain">
                <div class="media">
                  <div class="testimonial-img">
                    <img src="{{ URL::to('frontend/images/testimonial/3.jpg') }}" class="img-fluid rounded-circle  " alt="testimonial">
                  </div>
                  <div class="media-body">
                    <h5>mark jecno</h5>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--testimonial end-->

  <!--title start-->
  <div class="title1 section-my-space">
    <h4>Special Products</h4>
  </div>
  <!--title end-->

  <!--product start-->
  <section class="product section-pb-space mb--5">
    <div class="custom-container">
      <div class="row">
        <div class="col pr-0">
          <div class="product-slide-6 no-arrow">
            <div>
              <div class="product-box">
                <div class="product-imgbox">
                  <div class="product-front">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/product/1.jpg') }}" class="img-fluid  " alt="product">
                    </a>
                  </div>
                  <div class="product-back">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/product/a1.jpg') }}" class="img-fluid  " alt="product">
                    </a>
                  </div>
                  <div class="product-icon icon-inline">
                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                      <i  data-feather="shopping-cart"></i>
                    </button>
                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                      <i  data-feather="heart"></i>
                    </a>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                      <i  data-feather="eye"></i>
                    </a>
                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                      <i  data-feather="refresh-cw"></i>
                    </a>
                  </div>
                  <div class="new-label1">
                    <div>new</div>
                  </div>
                  <div class="on-sale1">
                    on sale
                  </div>
                </div>
                <div class="product-detail detail-inline ">
                  <div class="detail-title">
                    <div class="detail-left">
                      <div class="rating-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <a href="product-page(left-sidebar).html">
                        <h6 class="price-title">
                          sony xperia z5
                        </h6>
                      </a>
                    </div>
                    <div class="detail-right">
                      <div class="check-price">
                        $ 58.21
                      </div>
                      <div class="price">
                        <div class="price">
                          $ 24.05
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="product-box">
                <div class="product-imgbox">
                  <div class="product-front">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/product/2.jpg') }}" class="img-fluid  " alt="product">
                    </a>
                  </div>
                  <div class="product-back">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/product/a2.jpg') }}" class="img-fluid  " alt="product">
                    </a>
                  </div>
                  <div class="product-icon icon-inline">
                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                      <i  data-feather="shopping-cart"></i>
                    </button>
                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                      <i  data-feather="heart"></i>
                    </a>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                      <i  data-feather="eye"></i>
                    </a>
                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                      <i  data-feather="refresh-cw"></i>
                    </a>
                  </div>
                  <div class="new-label1">
                    <div>new</div>
                  </div>
                  <div class="on-sale1">
                    on sale
                  </div>
                </div>
                <div class="product-detail detail-inline ">
                  <div class="detail-title">
                    <div class="detail-left">
                      <div class="rating-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <a href="product-page(left-sidebar).html">
                        <h6 class="price-title">
                          Double Door Refrigerator
                        </h6>
                      </a>
                    </div>
                    <div class="detail-right">
                      <div class="check-price">
                        $ 147.21
                      </div>
                      <div class="price">
                        <div class="price">
                          $ 110.05
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="product-box">
                <div class="product-imgbox">
                  <div class="product-front">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/product/4.jpg') }}" class="img-fluid  " alt="product">
                    </a>
                  </div>
                  <div class="product-back">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/product/a4.jpg') }}" class="img-fluid  " alt="product">
                    </a>
                  </div>
                  <div class="product-icon icon-inline">
                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                      <i  data-feather="shopping-cart"></i>
                    </button>
                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                      <i  data-feather="heart"></i>
                    </a>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                      <i  data-feather="eye"></i>
                    </a>
                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                      <i  data-feather="refresh-cw"></i>
                    </a>
                  </div>
                  <div class="new-label1">
                    <div>new</div>
                  </div>
                  <div class="on-sale1">
                    on sale
                  </div>
                </div>
                <div class="product-detail detail-inline ">
                  <div class="detail-title">
                    <div class="detail-left">
                      <div class="rating-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <a href="product-page(left-sidebar).html">
                        <h6 class="price-title">
                          nikon d5003
                        </h6>
                      </a>
                    </div>
                    <div class="detail-right">
                      <div class="check-price">
                        $ 264.21
                      </div>
                      <div class="price">
                        <div class="price">
                          $ 210.05
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="product-box">
                <div class="product-imgbox">
                  <div class="product-front">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/product/5.jpg') }}" class="img-fluid  " alt="product">
                    </a>
                  </div>
                  <div class="product-back">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/product/a5.jpg') }}" class="img-fluid  " alt="product">
                    </a>
                  </div>
                  <div class="product-icon icon-inline">
                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                      <i  data-feather="shopping-cart"></i>
                    </button>
                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                      <i  data-feather="heart"></i>
                    </a>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                      <i  data-feather="eye"></i>
                    </a>
                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                      <i  data-feather="refresh-cw"></i>
                    </a>
                  </div>
                  <div class="new-label1">
                    <div>new</div>
                  </div>
                  <div class="on-sale1">
                    on sale
                  </div>
                </div>
                <div class="product-detail detail-inline ">
                  <div class="detail-title">
                    <div class="detail-left">
                      <div class="rating-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <a href="product-page(left-sidebar).html">
                        <h6 class="price-title">
                          Lenovo V14 Intel
                        </h6>
                      </a>
                    </div>
                    <div class="detail-right">
                      <div class="check-price">
                        $ 418.21
                      </div>
                      <div class="price">
                        <div class="price">
                          $ 380.05
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="product-box">
                <div class="product-imgbox">
                  <div class="product-front">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/product/7.jpg') }}" class="img-fluid  " alt="product">
                    </a>
                  </div>
                  <div class="product-back">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/product/a7.jpg') }}" class="img-fluid  " alt="product">
                    </a>
                  </div>
                  <div class="product-icon icon-inline">
                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                      <i  data-feather="shopping-cart"></i>
                    </button>
                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                      <i  data-feather="heart"></i>
                    </a>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                      <i  data-feather="eye"></i>
                    </a>
                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                      <i  data-feather="refresh-cw"></i>
                    </a>
                  </div>
                  <div class="new-label1">
                    <div>new</div>
                  </div>
                  <div class="on-sale1">
                    on sale
                  </div>
                </div>
                <div class="product-detail detail-inline ">
                  <div class="detail-title">
                    <div class="detail-left">
                      <div class="rating-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <a href="product-page(left-sidebar).html">
                        <h6 class="price-title">
                          coffee table
                        </h6>
                      </a>
                    </div>
                    <div class="detail-right">
                      <div class="check-price">
                        $ 49.21
                      </div>
                      <div class="price">
                        <div class="price">
                          $ 47.05
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="product-box">
                <div class="product-imgbox">
                  <div class="product-front">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/product/4.jpg') }}" class="img-fluid  " alt="product">
                    </a>
                  </div>
                  <div class="product-back">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/product/a4.jpg') }}" class="img-fluid  " alt="product">
                    </a>
                  </div>
                  <div class="product-icon icon-inline">
                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                      <i  data-feather="shopping-cart"></i>
                    </button>
                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                      <i  data-feather="heart"></i>
                    </a>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                      <i  data-feather="eye"></i>
                    </a>
                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                      <i  data-feather="refresh-cw"></i>
                    </a>
                  </div>
                  <div class="new-label1">
                    <div>new</div>
                  </div>
                  <div class="on-sale1">
                    on sale
                  </div>
                </div>
                <div class="product-detail detail-inline ">
                  <div class="detail-title">
                    <div class="detail-left">
                      <div class="rating-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <a href="product-page(left-sidebar).html">
                        <h6 class="price-title">
                          nikon d5003
                        </h6>
                      </a>
                    </div>
                    <div class="detail-right">
                      <div class="check-price">
                        $ 264.21
                      </div>
                      <div class="price">
                        <div class="price">
                          $ 210.05
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="product-box">
                <div class="product-imgbox">
                  <div class="product-front">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/product/5.jpg') }}" class="img-fluid  " alt="product">
                    </a>
                  </div>
                  <div class="product-back">
                    <a href="product-page(left-sidebar).html">
                      <img src="{{ URL::to('frontend/images/layout-2/product/a5.jpg') }}" class="img-fluid  " alt="product">
                    </a>
                  </div>
                  <div class="product-icon icon-inline">
                    <button  onclick="openCart()" class="tooltip-top" data-tippy-content="Add to cart" >
                      <i  data-feather="shopping-cart"></i>
                    </button>
                    <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                      <i  data-feather="heart"></i>
                    </a>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                      <i  data-feather="eye"></i>
                    </a>
                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                      <i  data-feather="refresh-cw"></i>
                    </a>
                  </div>
                  <div class="new-label1">
                    <div>new</div>
                  </div>
                  <div class="on-sale1">
                    on sale
                  </div>
                </div>
                <div class="product-detail detail-inline ">
                  <div class="detail-title">
                    <div class="detail-left">
                      <div class="rating-star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <a href="product-page(left-sidebar).html">
                        <h6 class="price-title">
                          Lenovo V14 Intel
                        </h6>
                      </a>
                    </div>
                    <div class="detail-right">
                      <div class="check-price">
                        $ 418.21
                      </div>
                      <div class="price">
                        <div class="price">
                          $ 380.05
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--product end-->

  <!--instagram start-->
  <section class="instagram">
    <div class="container-fluid">
      <div class="row">
        <div class="col p-0 position-relative">
          <div class="insta-contant1 ">
            <div class="slide-7 no-arrow">
              <div>
                <div class="instagram-box">
                  <img src="{{ URL::to('frontend/images/insta/1.jpg') }}" class="img-fluid  " alt="insta">
                  <div class="insta-cover">
                    <i class="fa fa-instagram" ></i>
                  </div>
                </div>
              </div>
              <div>
                <div class="instagram-box">
                  <img src="{{ URL::to('frontend/images/insta/2.jpg') }}" class="img-fluid  " alt="insta">
                  <div class="insta-cover">
                    <i class="fa fa-instagram" ></i>
                  </div>
                </div>
              </div>
              <div>
                <div class="instagram-box">
                  <img src="{{ URL::to('frontend/images/insta/3.jpg') }}" class="img-fluid  " alt="insta">
                  <div class="insta-cover">
                    <i class="fa fa-instagram" ></i>
                  </div>
                </div>
              </div>
              <div>
                <div class="instagram-box">
                  <img src="{{ URL::to('frontend/images/insta/4.jpg') }}" class="img-fluid  " alt="insta">
                  <div class="insta-cover">
                    <i class="fa fa-instagram" ></i>
                  </div>
                </div>
              </div>
              <div>
                <div class="instagram-box">
                  <img src="{{ URL::to('frontend/images/insta/5.jpg') }}" class="img-fluid  " alt="insta">
                  <div class="insta-cover">
                    <i class="fa fa-instagram" ></i>
                  </div>
                </div>
              </div>
              <div>
                <div class="instagram-box">
                  <img src="{{ URL::to('frontend/images/insta/6.jpg') }}" class="img-fluid  " alt="insta">
                  <div class="insta-cover">
                    <i class="fa fa-instagram" ></i>
                  </div>
                </div>
              </div>
              <div>
                <div class="instagram-box">
                  <img src="{{ URL::to('frontend/images/insta/7.jpg') }}" class="img-fluid  " alt="insta">
                  <div class="insta-cover">
                    <i class="fa fa-instagram" ></i>
                  </div>
                </div>
              </div>
              <div>
                <div class="instagram-box">
                  <img src="{{ URL::to('frontend/images/insta/8.jpg') }}" class="img-fluid  " alt="insta">
                  <div class="insta-cover">
                    <i class="fa fa-instagram" ></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="insta-sub-contant1">
              <div class="insta-title">
                <h4><span>#</span>INSTAGRAM</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--instagra end-->

@endsection
