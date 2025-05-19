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
                    <span class="sub-text">Smart Monitoring and Control Application</span>
                    <h2 class="title">Optimize Industrial Operations with Real-Time Insights</h2>
                    <div class="heading-line"></div>
                    <div class="desc desc-big">
                        The Smart Monitoring and Control Application empowers real-time supervision, data analytics, and
                        intelligent control of industrial systems.
                    </div>
                    <div class="desc">
                        Built for operations teams and system integrators, the platform provides centralized dashboards,
                        live data streams, and automated alerting. Gain full visibility, ensure compliance, and drive
                        operational excellence with seamless integration to sensors, PLCs, and control hardware.
                    </div>
                    <!-- <div class="btn-part mt-45">
                        <a class="readon learn-more" href="contact.html">Contact Us</a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="software-img">
                    <img src="<?= $app_path ?>assets/images/services/single/1.jpg"
                        alt="Smart Monitoring and Control Application" class="rounded-pill">
                </div>
            </div>
            <div class="col-lg-8 md-mb-50">
                <h2 class="mt-34">Reliable, Scalable, and User-Friendly</h2>
                <p>
                    Our Smart Monitoring application is designed for mission-critical environments. Experience a clean,
                    responsive interface that adapts across all devices, offering accurate system data, performance
                    indicators, and actionable alerts in real-time.
                </p>
                <ul class="listing-style">
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Live dashboards for data visualization and KPIs</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Custom alerts and event-driven automation</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Integration with PLCs, SCADA, and IoT sensors</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Secure access and role-based control management</span>
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
                            <img src="<?= $app_path ?>assets/images/services/style7/1.png" alt="Real-Time Dashboards">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">Real-Time Dashboards</h3>
                            <p class="services-desc">
                                Monitor system performance and sensor data through interactive, real-time visual
                                dashboards.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-60">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="<?= $app_path ?>assets/images/services/style7/2.png" alt="Event Monitoring">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">Intelligent Event Monitoring</h3>
                            <p class="services-desc">
                                Automatically detect anomalies, trigger alerts, and log events for traceability and
                                compliance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-60">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="<?= $app_path ?>assets/images/services/style7/3.png" alt="Device Integration">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">Device & Protocol Integration</h3>
                            <p class="services-desc">
                                Seamlessly connect with industrial devices using Modbus, OPC-UA, MQTT, and more.
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