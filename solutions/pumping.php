<?php
$page_title = "Solutions - ICS";
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
        <h1 class="page-title">Solutions</h1>
        <ul>
            <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                <a class="active" href="index.html">Home</a>
            </li>
            <li>Solutions</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->
<!-- Solutions Section Start -->
<div class="rs-contact pt-120 md-pt-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 md-mb-60">
                <div class="sec-title4">
                    <span class="sub-text">Pumping Application</span>
                    <h2 class="title">Optimize Fluid Management with Intelligent Pumping Control</h2>
                    <div class="heading-line"></div>
                    <div class="desc desc-big">
                        Our Pumping Application empowers utilities and industries to streamline operations with
                        real-time monitoring and automated pump control.
                    </div>
                    <div class="desc">
                        Built for water treatment plants, irrigation systems, and industrial fluid networks, the
                        application ensures optimal energy usage, flow regulation, and predictive maintenance. Manage
                        multiple pump stations, adjust parameters dynamically, and improve system uptime with advanced
                        analytics and fault detection.
                    </div>
                    <!-- <div class="btn-part mt-45">
                        <a class="readon learn-more" href="contact.html">Contact Us</a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="software-img">
                    <img src="<?= $app_path ?>assets/images/services/single/1.jpg" alt="Pumping Application"
                        class="rounded-pill">
                </div>
            </div>
            <div class="col-lg-8 md-mb-50">
                <h2 class="mt-34">Intelligent Control & Efficiency</h2>
                <p>
                    The Pumping Application is designed to deliver precision, automation, and reliability in managing
                    pumping infrastructure. Easily monitor performance metrics, adjust pump sequences, and respond to
                    system conditions in real time.
                </p>
                <ul class="listing-style">
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Real-time flow, pressure, and level monitoring</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Automated control logic for energy-efficient operation</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Alarm management and fault diagnostics</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Remote access and historical data analysis</span>
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
                            <img src="<?= $app_path ?>assets/images/services/style7/1.png" alt="Pump Monitoring">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">Pump Station Monitoring</h3>
                            <p class="services-desc">
                                Visualize and control pump performance with real-time dashboards and live
                                updates.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-60">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="<?= $app_path ?>assets/images/services/style7/2.png" alt="Automation Control">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">Automation & Scheduling</h3>
                            <p class="services-desc">
                                Set control rules and operational schedules to balance load and reduce peak energy
                                usage.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-60">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="<?= $app_path ?>assets/images/services/style7/3.png" alt="Predictive Analytics">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">Predictive Maintenance</h3>
                            <p class="services-desc">
                                Detect anomalies, forecast breakdowns, and plan maintenance activities to avoid
                                downtime.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->
</div>
<!-- Solutions Section End -->
<?php
include("../includes/footer.php");
?>