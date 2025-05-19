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
                    <span class="sub-text">On-Prem Solution</span>
                    <h2 class="title">Secure and Scalable Infrastructure for Localized Deployments</h2>
                    <div class="heading-line"></div>
                    <div class="desc desc-big">
                        Our On-Prem Solution delivers full control, high performance, and enterprise-grade security
                        tailored for your internal infrastructure.
                    </div>
                    <div class="desc">
                        Designed for organizations requiring compliance, data sovereignty, and low-latency operations,
                        this solution enables full-stack deployment within your environment. Benefit from robust system
                        monitoring, seamless integrations, and customizable configurations—all without relying on public
                        cloud services.
                    </div>
                    <!-- <div class="btn-part mt-45">
                        <a class="readon learn-more" href="contact.html">Contact Us</a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="software-img">
                    <img src="<?= $app_path ?>assets/images/services/single/1.jpg" alt="On-Prem Solution"
                        class="rounded-pill">
                </div>
            </div>
            <div class="col-lg-8 md-mb-50">
                <h2 class="mt-34">Tailored for Mission-Critical Operations</h2>
                <p>
                    The On-Prem Solution is built for enterprises that demand reliability, autonomy, and complete data
                    governance. Maintain operational continuity while integrating with your existing IT and security
                    infrastructure.
                </p>
                <ul class="listing-style">
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Full control over infrastructure and data</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Advanced security and compliance enforcement</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Offline functionality for critical environments</span>
                    </li>
                    <li>
                        <i class="fa fa-check-circle"></i>
                        <span>Customizable deployment and access controls</span>
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
                            <img src="<?= $app_path ?>assets/images/services/style7/1.png" alt="Local Hosting">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">Local Hosting & Control</h3>
                            <p class="services-desc">
                                Deploy within your data center for maximum oversight and performance tailored to your
                                policies.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-60">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="<?= $app_path ?>assets/images/services/style7/2.png" alt="Data Security">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">Enhanced Data Security</h3>
                            <p class="services-desc">
                                Maintain data sovereignty with built-in encryption, role-based access, and local audit
                                logs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-60">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="<?= $app_path ?>assets/images/services/style7/3.png" alt="Integration Ready">
                        </div>
                        <div class="services-content">
                            <h3 class="services-title">Seamless IT Integration</h3>
                            <p class="services-desc">
                                Integrates effortlessly with enterprise systems like Active Directory, LDAP, and
                                internal databases.
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