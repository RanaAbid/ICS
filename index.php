<?php
$page_title = "Home - ICS";
include("includes/header.php");
?>
<!-- Banner Section Start -->
<div class="rs-banner style3 rs-rain-animate modify1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-content">
                    <h1 class="title">Industrial Control Systems. Smarter, Safer, and Secure. </h1>
                    <p class="desc">
                        Our solutions combine cybersecurity, cloud, and AI to strengthen operational technology, protect
                        critical infrastructure, and enable intelligent decision-making across your industrial systems.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="images-part hidden-md">
        <img src="<?= $app_path ?>assets/images/sps/banner/bg-hero.jpg" alt="hero-img">
    </div>
    <div class="line-inner style2">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Services Section Start -->
<div class="rs-services main-home style1 pt-100 md-pt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 md-mb-30">
                <div class="services-item">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="<?= $app_path ?>assets/images/sps/icons/product-1.png" alt="product-icon-img">
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="services-title"><a href="#">ABB Smart Communication Card</a></h3>
                        </div>
                        <div class="services-desc">
                            <p>
                                Provides seamless integration of contactors with the cloud via Novolink. In addition,
                                Modbus RTU and Modbus TCP provide advanced connectivity to your devices.
                            </p>
                        </div>
                        <div class="services-text">
                            <h3 class="services-title"><a href="#">Read More...</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 md-mb-30">
                <div class="services-item">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="<?= $app_path ?>assets/images/sps/icons/product-2.png" alt="product-icon-img">
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="services-title"><a href="#">Google Manufacturing Data Engine</a></h3>
                        </div>
                        <div class="services-desc">
                            <p>
                                The cloud platform can acquire data from any type of machine, supporting a wide range of
                                data, from telemetry to image data, via a private, secure, and lowcost connection
                                between edge and cloud. With built-in data normalization and context-enrichment
                                capabilities, it provides a common data model, with a factory optimized data Lakehouse
                                for storage.
                            </p>
                        </div>
                        <div class="services-text">
                            <h3 class="services-title"><a href="#">Read More...</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 sm-mb-30">
                <div class="services-item">
                    <div class="services-icon">
                        <div class="image-part">
                            <img src="<?= $app_path ?>assets/images/sps/icons/product-3.png" alt="product-icon-img">
                        </div>
                    </div>
                    <div class="services-content">
                        <div class="services-text">
                            <h3 class="services-title"><a href="#">Google App Sheet</a></h3>
                        </div>
                        <div class="services-desc">
                            <p>
                                Enables interactive, real-time dashboards with MDE integration, automation, mobile
                                access, and date range filtering for efficient data monitoring and reporting.
                            </p>
                        </div>
                        <div class="services-text">
                            <h3 class="services-title"><a href="#">Read More...</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Section End -->

<!-- About Section Start -->
<div class="rs-about bg4 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 md-mb-50">
                <div class="images">
                    <img src="<?= $app_path ?>assets/images/sps/about/about-1.png" alt="about-img">
                </div>
            </div>
            <div class="col-lg-6 pl-60 md-pl-15">
                <div class="contact-wrap">
                    <div class="sec-title">
                        <div class="sub-text style2">About Us</div>
                        <h2 class="title pb-24">
                            Driving Industrial Innovation Through Connected Data and Intelligent Solutions
                        </h2>
                        <div class="desc pb-15">
                            We specialize in delivering advanced industrial digitalization solutions that bridge the gap
                            between operational technology and cloud intelligence. Leveraging powerful tools like the
                            ABB Smart Communication Card, Google Manufacturing Data Engine, and AppSheet, we empower
                            manufacturing teams to streamline operations and unlock real-time insights.
                        </div>
                        <p class="desc pb-15">
                            Our approach ensures seamless data flow, improved decision-making, and faster implementation
                            of smart manufacturing use cases across diverse industrial environments.
                        </p>
                    </div>
                    <div class="btn-part">
                        <a class="readon learn-more contact-us" href="contact.html">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Project Section Start -->
<div class="rs-project bg5 style1 pt-120 md-pt-80">
    <div class="container">
        <div class="sec-title2 text-center mb-45 md-mb-30">
            <span class="sub-text white-color">Solutions</span>
            <h2 class="title white-color">
                We Are Offering All Kinds of IT Solutions Services
            </h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
            data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
            data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
            data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
            data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
            data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true"
            data-md-device-dots="false">
            <div class="project-item d-flex">
                <div class="project-img">
                    <a href="#"><img src="assets/images/project/main-home/1.jpg"
                            alt="images"></a>
                </div>
                <div class="project-content flex-fill">
                    <h3 class="title"><a href="#">Digital Architecture Configurator and Control Panel Designer</a></h3>
                    <span class="category"><a href="#">Read More ...</a></span>
                </div>
            </div>
            <div class="project-item d-flex">
                <div class="project-img">
                    <a href="#"><img src="assets/images/project/main-home/2.jpg"
                            alt="images"></a>
                </div>
                <div class="project-content flex-fill">
                    <h3 class="title"><a href="#">Smart Monitoring and Control Application</a></h3>
                    <span class="category"><a href="#">Read More ...</a></span>
                </div>
            </div>
            <div class="project-item d-flex">
                <div class="project-img">
                    <a href="#"><img src="assets/images/project/main-home/3.jpg"
                            alt="images"></a>
                </div>
                <div class="project-content flex-fill">
                    <h3 class="title"><a href="#">On-Prem Solution</a></h3>
                    <span class="category"><a href="#">Read More ...</a></span>
                </div>
            </div>
            <div class="project-item d-flex">
                <div class="project-img">
                    <a href="#"><img src="assets/images/project/main-home/4.jpg"
                            alt="images"></a>
                </div>
                <div class="project-content flex-fill">
                    <h3 class="title"><a href="#">Pumping Application</a></h3>
                    <span class="category"><a href="#">Read More ...</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project Section End -->
<?php
include("includes/footer.php");
?>
<script>
$(document).ready(function() {
    $('.services-desc p').each(function() {
        var fullText = $(this).text().trim();
        var words = fullText.split(/\s+/);
        if (words.length > 18) {
            var limitedText = words.slice(0, 18).join(' ');
            $(this).text(limitedText);
        }
    });
});
</script>