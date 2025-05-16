<?php
$page_title = "Products - ICS";
include("../includes/header.php");
?>
<style>
.rs-breadcrumbs.img3 {
    background: url(http://localhost/my_sites/ics/assets/images/sps/products/theme.png);
}
</style>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img3">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title">Products</h1>
        <ul>
            <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                <a class="active" href="index.html">Home</a>
            </li>
            <li>Products</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->
<!-- Product Section Start -->
<div class="rs-contact pt-120 md-pt-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 md-mb-60">
                <div class="sec-title4">
                    <span class="sub-text">ABB Smart Communication Card</span>
                    <h2 class="title">Streamline Power Distribution with Intelligent Automation</h2>
                    <div class="heading-line"></div>
                    <div class="desc desc-big">
                        The ABB Smart Communication Card enables seamless integration and real-time monitoring of
                        electrical systems, enhancing automation and operational efficiency.
                    </div>
                    <div class="desc">
                        Designed to connect ABB devices to SCADA, PLCs, and Building Management Systems, it supports
                        protocols like Modbus TCP/IP. Get instant insights, perform remote diagnostics, and ensure
                        system reliability — all from a centralized interface.
                    </div>
                    <!-- <div class="btn-part mt-45">
                        <a class="readon learn-more" href="contact.html">Contact Us</a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="software-img">
                    <img src="<?= $app_path ?>assets/images/about/about-us/1.jpg" alt="ABB Smart Communication Card">
                </div>
            </div>
            <div class="col-lg-8 md-mb-50">
                <div class="services-img">
                    <img src="assets/images/services/single/1.jpg" alt="">
                </div>
                <h2 class="mt-34">Responsive Pixel Perfect Design</h2>
                <p>
                    Cras enim urna, interdum nec porttitor vitae, sollicitudin eu eros. Praesent eget mollis nulla, non
                    lacinia urna. Donec sit amet neque auctor, ornare dui rutrum, condimentum justo. Duis dictum, ex
                    accumsan eleifend eleifend, ex justo aliquam nunc, in ultrices ante quam eget massa. Sed
                    scelerisque, odio eu tempor pulvinar, magna tortor finibus lorem, ut mattis tellus nunc ut quam.
                    Curabitur quis ornare leo. Suspendisse bibendum nibh non turpis vestibulum pellentesque.
                </p>
                <ul class="listing-style">
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Sed ut perspiciatis unde omnis iste natus error</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Accusamus et iusto odio dignissimos ducimus qui blanditiis</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Nam libero tempore, cum soluta nobis est eligendi optio cumque</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Services Section Start -->
    <div class="rs-services style5 pt-120 pb-120 md-pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 md-mb-60">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="<?= $app_path ?>assets/images/services/style7/1.png" alt="Real-time Monitoring">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">Real-Time Monitoring</h3>
                            <p class="services-desc">
                                Enables real-time status updates and diagnostics of ABB devices through seamless
                                communication.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-60">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="<?= $app_path ?>assets/images/services/style7/2.png" alt="Easy Integration">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">Easy System Integration</h3>
                            <p class="services-desc">
                                Supports integration with SCADA, PLCs, and BMS via Modbus TCP/IP and other protocols.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-60">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="<?= $app_path ?>assets/images/services/style7/3.png" alt="Remote Accessibility">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">Remote Accessibility</h3>
                            <p class="services-desc">
                                Facilitates remote configuration, control, and performance tracking of ABB switchgear
                                systems.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section End -->
</div>
<!-- Product Section End -->
<?php
include("../includes/footer.php");
?>