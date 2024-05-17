<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BlogStore
 */

?>

<footer class="footersection pt-4 pb-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <h3 class="newsletterheading">
                        Signup for Newsletter
                    </h3>
                    <p class="newsletterpara">We’ll never share your email address with a third-party</p>
                </div>
                <div class="col-md-5">
                    <div class="d-flex">
                        <input type="text" placeholder="Enter Your Email" class="inputemail">
                        <input type="submit" value="Subscribe" class="inputbutton">
                    </div>
                </div>
                <div class="col-md-2 d-none d-lg-block d-md-block">
                    <div class="social-icons">
                        <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                        <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                        <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
                        <span><i class="fa fa-pinterest" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row pt-4 pb-4 mainfooter">
                <div class="col-md-5 mb-4 mt-lg-0 mt-md-0">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png">
                    <p class="newsletterpara pt-4 m-0"><span class="text_black fw-bold">Address : </span>250 Penn Avenue
                        Pittsburgh Pennsylvania 3584 United S</p>
                    <p class="newsletterpara pt-1 m-0"><span class="text_black fw-bold">Email :
                        </span>creativewithjoy@gmail.com</p>
                    <p class="newsletterpara pt-2 pt-md-4 pt-lg-4 m-0">iDoodle © 2019. All rights reserved.</p>
                </div>
                <div class="col-md-2 mb-4 mt-lg-0 mt-md-0">
                    <h6 class="text_black fw-bold">
                        Information
                    </h6>
                    <p class="newsletterpara pt-2 m-0">Job Opportunities</p>
                    <p class="newsletterpara pt-2 m-0">Investor</p>
                    <p class="newsletterpara pt-2 m-0">Events</p>
                    <p class="newsletterpara pt-2 m-0">Investor</p>
                    <p class="newsletterpara pt-2 m-0">Contact Us</p>
                </div>
                <div class="col-md-2 mb-4 mt-lg-0 mt-md-0">
                    <h6 class="text_black fw-bold">
                        About Kaldi
                    </h6>
                    <p class="newsletterpara pt-2 m-0">About Us</p>
                    <p class="newsletterpara pt-2 m-0">Investor</p>
                    <p class="newsletterpara pt-2 m-0">Corporate</p>
                    <p class="newsletterpara pt-2 m-0">Investor</p>
                    <p class="newsletterpara pt-2 m-0">Contact Us</p>
                </div>
                <div class="col-md-3">
                    <h6 class="text_black fw-bold">
                        Tweet
                    </h6>
                    <p class="newsletterpara pt-2 m-0">April doesn’t have to be the cruellest month. This year, why not
                        make it a month to
                        remember by learning something new? https://enva.to/Vs </p>
                    <p class="newsletterpara m-0 pt-1">1:00 AM - 4 Apr 2019</p>
                </div>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
