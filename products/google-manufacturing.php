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
                    <span class="sub-text">Google Cloud for Manufacturing</span>
                    <h2 class="title">Accelerate Digital Transformation in Manufacturing</h2>
                    <div class="heading-line"></div>
                    <div class="desc desc-big">
                        Google Cloud empowers manufacturers with AI-driven insights, advanced analytics, and secure,
                        scalable infrastructure to streamline operations and boost productivity.
                    </div>
                    <div class="desc">
                        From factory floor to supply chain, leverage Google Cloud to connect assets, predict outcomes,
                        and automate workflows. Integrate with ERP, MES, and IoT platforms to drive efficiency, reduce
                        downtime, and achieve intelligent manufacturing at scale.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="software-img">
                    <img src="<?= $app_path ?>assets/images/about/about-us/google-manufacturing.jpg"
                        alt="Google Cloud for Manufacturing">
                </div>
            </div>
            <div class="col-lg-8 md-mb-50">
                <div class="services-img">
                    <img src="assets/images/services/single/google-cloud-factory.jpg" alt="">
                </div>
                <h2 class="mt-34">Smarter Factories. Stronger Outcomes.</h2>
                <p>
                    Digitally transform your manufacturing processes using Google Cloud's powerful ecosystem. Use
                    real-time data, predictive maintenance, and visual inspection tools powered by AI/ML to enhance
                    quality control, reduce waste, and improve decision-making across operations.
                </p>
                <ul class="listing-style">
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Unlock real-time visibility into production lines and supply chains</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Integrate IoT, ML, and BigQuery for predictive maintenance</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Enhance quality assurance through AI-based visual inspection</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Enable collaboration and innovation with scalable cloud infrastructure</span>
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
                            <img src="<?= $app_path ?>assets/images/services/style7/cloud-monitoring.png"
                                alt="Real-time Visibility">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">Real-Time Visibility</h3>
                            <p class="services-desc">
                                Gain insights across operations using cloud-native tools for real-time tracking and
                                analytics.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-60">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="<?= $app_path ?>assets/images/services/style7/system-integration.png"
                                alt="Connected Operations">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">Connected Operations</h3>
                            <p class="services-desc">
                                Seamlessly integrate with ERP, MES, and IoT systems to unify manufacturing data and
                                insights.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-60">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="<?= $app_path ?>assets/images/services/style7/remote-access.png"
                                alt="AI-Powered Optimization">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">AI-Powered Optimization</h3>
                            <p class="services-desc">
                                Leverage artificial intelligence and machine learning to automate quality checks and
                                forecast maintenance needs.
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