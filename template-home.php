<?php
/**
 * The template for displaying all pages
 *
 *This is page for HomePage
 * 
 * Template Name: HomePage V1
 * 
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BlogStore
 */

get_header();
?>

	<!-- featured section -->
    <section class="featuredsection">
        <div class="container">
            <div class="row pt-4 pb-4">
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="featuredimagesection">
                        <h6>Cricket</h6>
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/test.jpg" alt="featured-images" class="img-fluid"></a>
                    </div>
                    <div class="featuredcontent">
                        <h6 class="featuredtitle">
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </h6>
                        <h6 class="featuredmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                                class="ps-3">March 15,2019</span></h6>
                        <p class="featuredpara pt-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi
                            quae dicta delectus deserunt quam maxime laudantium autem voluptas sequi placeat! </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-6">
                            <div class="featuredimagesection">
                                <h6>Cricket</h6>
                                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/babar.jpg" alt="featured-images" class="img-fluid"></a>
                            </div>
                            <div class="featuredsmcontent">
                                <h6 class="featuredsmtitle">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing.
                                </h6>
                                <h6 class="featuredsmmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                                        class="ps-3">March 15,2019</span></h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-6">
                            <div class="featuredimagesection">
                                <h6>Cricket</h6>
                                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/haris rauf.jpg" alt="featured-images" class="img-fluid"></a>
                            </div>
                            <div class="featuredsmcontent">
                                <h6 class="featuredsmtitle">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing.
                                </h6>
                                <h6 class="featuredsmmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                                        class="ps-3">March 15,2019</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-6 col-lg-6 col-6">
                            <div class="featuredimagesection">
                                <h6>Cricket</h6>
                                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/DINESH KARTHIK.jpg" alt="featured-images" class="img-fluid"></a>
                            </div>
                            <div class="featuredsmcontent">
                                <h6 class="featuredsmtitle">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing.
                                </h6>
                                <h6 class="featuredsmmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                                        class="ps-3">March 15,2019</span></h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-6">
                            <div class="featuredimagesection">
                                <h6>Cricket</h6>
                                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/williamson.jpg" alt="featured-images" class="img-fluid"></a>
                            </div>
                            <div class="featuredsmcontent">
                                <h6 class="featuredsmtitle">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing.
                                </h6>
                                <h6 class="featuredsmmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                                        class="ps-3">March 15,2019</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- popular section -->
    <section class="popularsection pt-5 pb-5">
        <div class="container">
            <h3 class="popularheading">
                Most Popular
            </h3>
            <hr>
            <div class="row">
                <div class="col-md-9 col-lg-9 col-12">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="featuredimagesection">
                                <h6>Politics</h6>
                                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/rishab.jpg" alt="featured-images" class="img-fluid"></a>
                            </div>
                            <div class="featuredcontent">
                                <h6 class="featuredtitle">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing.
                                </h6>
                                <h6 class="featuredmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                                        class="ps-3">March 15,2019</span></h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mt-3 mt-lg-0 mt-md-0">
                            <div class="featuredimagesection">
                                <h6>Politics</h6>
                                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/virat.jpg" alt="featured-images" class="img-fluid"></a>
                            </div>
                            <div class="featuredcontent">
                                <h6 class="featuredtitle">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing.
                                </h6>
                                <h6 class="featuredmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                                        class="ps-3">March 15,2019</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-12">
                    <div class="sidebar mt-4 mt-lg-0 mt-md-0">
                        <div class="sidebarbox">
                            <div class="d-flex align-items-center">
                                <img src="<?php echo get_template_directory_uri() ?> /assets/img/sm1.jpg" class="sidebarimage me-3">
                                <div class="sidebarcontent">
                                    <h5>
                                        | Economy
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet Lorem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="sidebarbox mt-3">
                            <div class="d-flex align-items-center">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/sm2.jpg" class="sidebarimage me-3">
                                <div class="sidebarcontent">
                                    <h5>
                                        | Economy
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet Lorem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="sidebarbox mt-3">
                            <div class="d-flex align-items-center">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/sm3.jpg" class="sidebarimage me-3">
                                <div class="sidebarcontent">
                                    <h5>
                                        | Economy
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet Lorem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="sidebarbox mt-3">
                            <div class="d-flex align-items-center">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/sm4.jpg" class="sidebarimage me-3">
                                <div class="sidebarcontent">
                                    <h5>
                                        | Economy
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet Lorem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- banner section -->
    <section class="bannersection pt-5 pb-5 d-none d-lg-block d-md-block">
        <div class="container">
            <div class="adbanner text-center">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/bannerad.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- politics section -->
    <section class="politicssection pt-5 pb-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="politicsheading">
                    Latest News
                </h3>
                <p class="politicsviewall m-0">
                    View All
                </p>
            </div>
            <hr class="m-0">
            <div class="row pt-4">
                <div class="col-md-2 col-lg-2 col-6 mt-3 mt-lg-0 mt-md-0">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/sm1.jpg" class="politicsimg">
                    <h6 class="politicstitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing.
                    </h6>
                    <h6 class="featuredsmmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                            class="ps-1">March 15,2019</span></h6>
                </div>
                <div class="col-md-2 col-lg-2 col-6 mt-3 mt-lg-0 mt-md-0">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/sm2.jpg" class="politicsimg">
                    <h6 class="politicstitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing.
                    </h6>
                    <h6 class="featuredsmmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                            class="ps-1">March 15,2019</span></h6>
                </div>
                <div class="col-md-2 col-lg-2 col-6 mt-3 mt-lg-0 mt-md-0">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/sm3.jpg" class="politicsimg">
                    <h6 class="politicstitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing.
                    </h6>
                    <h6 class="featuredsmmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                            class="ps-1">March 15,2019</span></h6>
                </div>
                <div class="col-md-2 col-lg-2 col-6 mt-3 mt-lg-0 mt-md-0">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/rishab.jpg" class="politicsimg">
                    <h6 class="politicstitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing.
                    </h6>
                    <h6 class="featuredsmmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                            class="ps-1">March 15,2019</span></h6>
                </div>
                <div class="col-md-2 col-lg-2 col-6 mt-3 mt-lg-0 mt-md-0">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/haris rauf.jpg" class="politicsimg">
                    <h6 class="politicstitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing.
                    </h6>
                    <h6 class="featuredsmmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                            class="ps-1">March 15,2019</span></h6>
                </div>
                <div class="col-md-2 col-lg-2 col-6 mt-3 mt-lg-0 mt-md-0">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/babar.jpg" class="politicsimg">
                    <h6 class="politicstitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing.
                    </h6>
                    <h6 class="featuredsmmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                            class="ps-1">March 15,2019</span></h6>
                </div>
            </div>
        </div>
    </section>

    <!-- economy section -->
    <section class="politicssection pt-4 pb-4">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="politicsheading">
                    Test Cricket
                </h3>
                <p class="politicsviewall m-0">
                    View All
                </p>
            </div>
            <hr class="m-0">
            <div class="row pt-4">
                <div class="col-md-2 col-lg-2 col-6 mt-3 mt-lg-0 mt-md-0">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/test.jpg" class="politicsimg">
                    <h6 class="politicstitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing.
                    </h6>
                    <h6 class="featuredsmmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                            class="ps-1">March 15,2019</span></h6>
                </div>
                <div class="col-md-2 col-lg-2 col-6 mt-3 mt-lg-0 mt-md-0">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/williamson.jpg" class="politicsimg">
                    <h6 class="politicstitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing.
                    </h6>
                    <h6 class="featuredsmmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                            class="ps-1">March 15,2019</span></h6>
                </div>
                <div class="col-md-2 col-lg-2 col-6 mt-3 mt-lg-0 mt-md-0">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/sm4.jpg" class="politicsimg">
                    <h6 class="politicstitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing.
                    </h6>
                    <h6 class="featuredsmmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                            class="ps-1">March 15,2019</span></h6>
                </div>
                <div class="col-md-2 col-lg-2 col-6 mt-3 mt-lg-0 mt-md-0">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/sm3.jpg" class="politicsimg">
                    <h6 class="politicstitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing.
                    </h6>
                    <h6 class="featuredsmmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                            class="ps-1">March 15,2019</span></h6>
                </div>
                <div class="col-md-2 col-lg-2 col-6 mt-3 mt-lg-0 mt-md-0">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/haris rauf.jpg" class="politicsimg">
                    <h6 class="politicstitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing.
                    </h6>
                    <h6 class="featuredsmmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                            class="ps-1">March 15,2019</span></h6>
                </div>
                <div class="col-md-2 col-lg-2 col-6 mt-3 mt-lg-0 mt-md-0">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/babar.jpg" class="politicsimg">
                    <h6 class="politicstitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing.
                    </h6>
                    <h6 class="featuredsmmeta">by <strong class="text_black">Muhammad Furqan</strong> <span
                            class="ps-1">March 15,2019</span></h6>
                </div>
            </div>
        </div>
    </section>

<?php
get_sidebar();
get_footer();
