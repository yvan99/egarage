@include('components.homecss')

<body class="boxed_wrapper ltr">
    <!-- page-direction end -->

    <!-- Header one start-->
    <div class="brator-header-top-bar-area design-one dark-bg">
        <div class="container-xxxl container-xxl container">
   
        </div>
    </div>


    <!-- Banner style two start -->
    <div class="brator-main-banner-area banner-style-two lazyload" style="background-image:linear-gradient(to bottom, rgba(56, 57, 60, 0.52), rgba(225, 204, 71, 0.73)),url('homepage/images/banner/rp.jpg');" >
        <div class="container-xxxl container-xxl container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brator-main-banner-content">
                        <h2 class="">E-Garage Smart Ranking</h2>
                        <a href='/garage-apply' class="btn btn-warning btn-lg rounded-lg mt-5 shadow-lg">Apply Garage</a>
                        <a href='/signup' class="btn btn-dark btn-lg rounded-lg mt-5">Create Account</a>
                    </div>
                    <!-- Search by Vehicle -->
                    <div class="brator-parts-search-box-area search-box-with-banner design-two">
                        <div class="brator-parts-search-box-header">
                            <h2>Search by Vehicle</h2>
                            <p>Filter your results by entering your Vehicle to ensure you find the parts that fit.</p>
                        </div>
                        <div class="brator-parts-search-box-form">
                            <select class="select-year-parts brator-select-active">
                                <option value="anything">Year</option>
                                <option value="anything">2000</option>
                                <option value="anything">2001</option>
                                <option value="anything">2002</option>
                                <option value="anything">2003</option>
                            </select>
                            <select class="select-make-parts brator-select-active" disabled="disabled">
                                <option value="anything">Make</option>
                                <option value="anything">Make 01</option>
                                <option value="anything">Make 02</option>
                                <option value="anything">Make 03</option>
                                <option value="anything">Make 04</option>
                            </select>
                            <select class="select-model-parts brator-select-active" disabled="disabled">
                                <option value="anything">Model</option>
                                <option value="anything">Model 01</option>
                                <option value="anything">Model 02</option>
                                <option value="anything">Model 03</option>
                                <option value="anything">Model 04</option>
                            </select>
                            <select class="select-sub-model-parts brator-select-active" disabled="disabled">
                                <option value="anything">Sub Model</option>
                                <option value="anything">Sub Model 01</option>
                                <option value="anything">Sub Model 02</option>
                                <option value="anything">Sub Model 03</option>
                                <option value="anything">Sub Model 04</option>
                            </select>
                            <select class="select-engine-parts brator-select-active" disabled="disabled">
                                <option value="anything">Engine</option>
                                <option value="anything">Engine 01</option>
                                <option value="anything">Engine 02</option>
                                <option value="anything">Engine 03</option>
                                <option value="anything">Engine 04</option>
                            </select>
                            <button type="submit">Search</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Banner style two end -->

    <!-- Brator categories list three area start -->
    <div class="brator-categories-list-area design-two categories-with-load-more gray-bg">
        <div class="container-xxxl container-xxl container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brator-section-header">
                        <div class="brator-section-header-title">
                            <h2>Browse Garages by services</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="brator-categories-list">
                        <div class="brator-categories-single">
                            <div class="brator-categories-single-img"><a href="#_"><img class="lazyload"
                                        data-src="homepage/images/categories/categories-07.png" alt="logo" /></a></div>
                            <div class="brator-categories-single-title">
                                <p><a href="shop-sub-category.html">Auto Parts</a></p>
                            </div>
                            <div class="brator-categories-single-sub"><a href="#_">Mesh</a><a href="#_">Billet</a>
                            </div>
                        </div>
                        <div class="brator-categories-single">
                            <div class="brator-categories-single-img"><a href="#_"><img class="lazyload"
                                        data-src="homepage/images/categories/categories-08.png" alt="logo" /></a></div>
                            <div class="brator-categories-single-title">
                                <p><a href="shop-sub-category.html">Starting &amp; Charging</a></p>
                            </div>
                            <div class="brator-categories-single-sub"><a href="#_">Batteries</a><a
                                    href="#_">Starters</a>
                            </div>
                        </div>
                        <div class="brator-categories-single">
                            <div class="brator-categories-single-img"><a href="#_"><img class="lazyload"
                                        data-src="homepage/images/categories/categories-09.png" alt="logo" /></a></div>
                            <div class="brator-categories-single-title">
                                <p><a href="shop-sub-category.html">Factory Wheels</a></p>
                            </div>
                            <div class="brator-categories-single-sub"><a href="#_">Brakes</a><a href="#_">Batteries</a>
                            </div>
                        </div>
                        <div class="brator-categories-single">
                            <div class="brator-categories-single-img"><a href="#_"><img class="lazyload"
                                        data-src="homepage/images/categories/categories-10.png" alt="logo" /></a></div>
                            <div class="brator-categories-single-title">
                                <p><a href="shop-sub-category.html">Packages</a></p>
                            </div>
                            <div class="brator-categories-single-sub"><a href="#_">Tires</a><a href="#_">TMPS</a>
                            </div>
                        </div>
                        <div class="brator-categories-single">
                            <div class="brator-categories-single-img"><a href="#_"><img class="lazyload"
                                        data-src="homepage/images/categories/categories-11.png" alt="logo" /></a></div>
                            <div class="brator-categories-single-title">
                                <p><a href="shop-sub-category.html">TPMS Sensors</a></p>
                            </div>
                            <div class="brator-categories-single-sub"><a href="#_">Lighting</a><a href="#_">Boyd</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="brator-categories-list-load-more">
                        <button class="brator-categories-more-button">Load More</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Brator categories list three area end -->


    <div class="brator-plan-pixel-area">
        <div class="row">
            <div class="container-xxxl container-xxl container">
                <div class="col-12">
                    <div class="plan-pixel-area"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brator featured makes list start -->
    <div class="brator-makes-list-area design-two">
        <div class="container-xxxl container-xxl container">
            <div class="brator-brator-makes-list-tab-list js-tabs" id="tabs-product-content">
                <div class="brator-makes-list-tab-header js-tabs__header">
                    <ul>
                        <li><a class="js-tabs__title" href="#">Find Your nearest</a></li>
                        <li><a class="js-tabs__title" href="#"> Garage Location</a></li>
                    </ul>
                </div>
                <div class="row js-tabs__content">
                    <div class="col-md-12">
                        <div class="brator-makes-list">
                            <div class="brator-makes-list-single">
                                <a href="shop-sub-category.html">
                                    <span>Accura 1</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="brator-makes-list-single">
                                <a href="shop-sub-category.html">
                                    <span>Chevy</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="brator-makes-list-single">
                                <a href="shop-sub-category.html">
                                    <span>Ford</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="brator-makes-list-single">
                                <a href="shop-sub-category.html">
                                    <span>Dodge</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="brator-makes-list-single">
                                <a href="shop-sub-category.html">
                                    <span>Ram</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Toyota</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Honda</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Nissan</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Jeep</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>GMC</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Huyndai</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Kia</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a
                                    href="shop-sub-category.html"><span>Mercerdess</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>BMW</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Audi</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Lexus</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Jaguar</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Volvo</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a
                                    href="shop-sub-category.html"><span>Rangover</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Porsche</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Accura</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Chevy</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Ford</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Dodge</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Huyndai</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Kia</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Mercerdess</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>BMW</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Audi</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Lexus</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Jaguar</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Volvo</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable">
                                <a href="shop-sub-category.html">
                                    <span>Rangover</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="brator-makes-list-single disable">
                                <a href="shop-sub-category.html">
                                    <span>Porsche</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="brator-makes-list-view-more">
                            <button> <span><b>view more</b>
                                    <svg class="bi bi-chevron-down" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row js-tabs__content">
                    <div class="col-md-12">
                        <div class="brator-makes-list">
                            <div class="brator-makes-list-single">
                                <a href="shop-sub-category.html">
                                    <span>Accura 2</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="brator-makes-list-single">
                                <a href="shop-sub-category.html">
                                    <span>Chevy 2</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="brator-makes-list-single">
                                <a href="shop-sub-category.html">
                                    <span>Ford 2</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="brator-makes-list-single">
                                <a href="shop-sub-category.html">
                                    <span>Dodge 2</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="brator-makes-list-single">
                                <a href="shop-sub-category.html">
                                    <span>Ram 2</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Toyota</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Honda</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Nissan</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Jeep</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>GMC 2</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Huyndai</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Kia</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a
                                    href="shop-sub-category.html"><span>Mercerdess</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>BMW 2</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Audi</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Lexus</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Jaguar</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Volvo</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a
                                    href="shop-sub-category.html"><span>Rangover</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single"><a href="shop-sub-category.html"><span>Porsche</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Accura</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Chevy</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Ford</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Dodge</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Huyndai</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Kia</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Mercerdess</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>BMW</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Audi</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Lexus</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a
                                    href="shop-sub-category.html"><span>Jaguar</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable"><a href="shop-sub-category.html"><span>Volvo
                                        2</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></a></div>
                            <div class="brator-makes-list-single disable">
                                <a href="shop-sub-category.html">
                                    <span>Rangover</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="brator-makes-list-single disable">
                                <a href="shop-sub-category.html">
                                    <span>Porsche</span>
                                    <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="brator-makes-list-view-more">
                            <button> <span><b>view more 2</b>
                                    <svg class="bi bi-chevron-down" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brator featured makes list end -->
    @include('components.footer')
    @include('components.homejs')
