<?php 
$pageTitle = 'Netmatters | Full Service Digital Agency';
include('inc/head.php'); 
include('inc/header.php');
include('inc/functions.php');

?>

    <main>

      <!-- BANNER -->

        <div class="slides">
            <div class="banner-container slide-1">
            <div class="flex">
                <div class="banner-item">
                <h1>WEB DESIGN</h1>
                <p>For businesses looking to make a strong<br>and effective first impression.</p>
                <a class="link-btn" href="#">Find Out More<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            </div>
            <div class="banner-container slide-2">
            <div class="flex">
                <div class="banner-item">
                <h1>IT SUPPORT</h1>
                <p>Fast and cost-effective IT support<br>services for your business.</p>
                <a class="link-btn" href="#">Find Out More<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            </div>
            <div class="banner-container slide-3">
            <div class="flex">
                <div class="banner-item">
                <h1>TELECOMS SERVICES</h1>
                <p>A new approach to connectivity, see how<br>we can help your business.</p>
                <a class="link-btn" href="#">Find Out More<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            </div>
            <div class="banner-container slide-4">
            <div class="flex">
                <div class="banner-item">
                <h1>BESPOKE SOFTWARE</h1>
                <p>Bring your business together<br>with solutions that grow with you.</p>
                <a class="link-btn" href="#">Find Out More<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            </div>
            <div class="banner-container slide-5">
            <div class="flex">
                <div class="banner-item">
                <h1>DIGITAL MARKETING</h1>
                <p>Generating you new business through<br>results-driven marketing activities.</p>
                <a class="link-btn" href="#">Find Out More<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            </div>
            <div class="banner-container slide-6">
            <div class="flex">
                <div class="banner-item">
                <h1>CYBER SECURITY</h1>
                <p>Keeping businesses and their customers<br>sensitive information protected.</p>
                <a class="link-btn" href="#">Find Out More<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            </div>
        </div>


        <!-- end of BANNER -->


        <!-- SERVICE LIST -->


        <div class="service-list-section">
            <div class="service-list-container">
            <div class="service-list-shell1">
                <a class="service-list-item sl-web-design" href="#">
                <span class="sl-icon web-design-icon"><i class="nav-icon fas fa-code"></i></span>
                <span class="sl-title">Web Design</span>
                <span class="sl-summary"> User-centric design for businesses looking to make a lasting first
                    impression
                    and
                    drive conversations.</span>
                <span class="link-btn sl-button web-design-button">READ MORE</span>
                </a>
            </div>
            <div class="service-list-shell1">
                <a class="service-list-item sl-it-support" href="#">
                <span class="sl-icon it-support-icon"><i class="nav-icon fas fa-desktop"></i></span>
                <span class="sl-title">IT Support</span>
                <span class="sl-summary">Remotely managed IT services that is catered to your businesses needs, adds
                    value
                    and reduces
                    costs.</span>
                <span class="link-btn sl-button it-support-button">READ MORE</span>
                </a>
            </div>
            <div class="service-list-shell2">
                <a class="service-list-item sl-telecom-services" href="#">
                <span class="sl-icon telecom-services-icon"><i class="nav-icon fas fa-phone-alt"></i></span>
                <span class="sl-title">Telecoms Services</span>
                <span class="sl-summary">Stay connected with bespoke telecoms solutions when you need it most.</span>
                <span class="link-btn sl-button telecom-services-button">READ MORE</span>
                </a>
            </div>

            <div class="service-list-shell2">
                <a class="service-list-item sl-bespoke-software" href="#">
                <span class="sl-icon bespoke-software-icon"><i class="nav-icon fas fa-th"></i></span>
                <span class="sl-title">Bespoke Software</span>
                <span class="sl-summary">Tailored software solutions to improve business productivity and online
                    profits.</span>
                <span class="link-btn sl-button bespoke-software-button">READ MORE</span>
                </a>
            </div>

            <div class="service-list-shell2">
                <a class="service-list-item sl-digital-marketing" href="#">
                <span class="sl-icon digital-marketing-icon"><i class="nav-icon fas fa-signal"></i></span>
                <span class="sl-title">Digital Marketing</span>
                <span class="sl-summary">Driving brand awareness and ROI through creative digital marketing
                    campaigns.</span>
                <span class="link-btn sl-button digital-marketing-button">READ MORE</span>
                </a>
            </div>

            <div class="service-list-shell2">
                <a class="service-list-item sl-cyber-security " href="#">
                <span class="sl-icon cyber-security-icon"><i class="nav-icon fas fa-shield-alt"></i></span>
                <span class="sl-title">Cyber Security</span>
                <span class="sl-summary">Ensuring your online business stays secure 24&sol;7, 365 days of the
                    year.</span>
                <span class="link-btn sl-button cyber-security-button">READ MORE</span>
                </a>
            </div>
            </div>
        </div>


        <!-- end of SERVICE LIST -->


        <!-- PROFILE -->


        <div class="profile-outer">
            <div class="profile-container">
            <div class="profile-item">
                <h1>Netmatters</h1>
                <p><strong>Netmatters Ltd is a leading web design, IT support and digital marketing agency based in
                    Wymondham,
                    Norfolk.</strong></p>
                <p>Founded in 2008, we work with businesses from a variety of industries to gain new prospects, nurture
                existing leads and further grow their sales.</p>
                <p>We provide cost effective, reliable solutions to a range of services; from bespoke cloud-based
                management
                systems, workflow and IT solutions through to creative website development and integrated digital
                campaigning</p>
                <a class="link-btn" href="#">Our culture<i class="fas fa-arrow-right"></i></a>
            </div>
            </div>
        </div>

        <!-- end of PROFILE -->
     

        <!-- LATEST NEWS-->
    
        <div class="latest-heading-outer">
            <div class="latest-heading">
                <span>Latest</span>
            </div>
        </div>



        <div class="latest-outer">
            <div class="latest-container">

                <?php
                $results = getLatestNews(); 
                foreach ($results as $result) { ?>


                <div class="card card-1">
                    <div>
                        <div class="card-top">
                            <a class="ablink <?php if($result['format'] == '1') { echo 'ablink-1'; } elseif ($result['format'] == '2') { echo 'ablink-2'; }?>" href="#"><?php echo htmlspecialchars($result['category']); ?></a>
                            <a href="#"><img class="card-image" src="<?php echo htmlspecialchars($result['img']); ?>" alt="latest news card"></a>
                        </div>
                        <div class="card-text">
                            <h3><a class="card-title <?php if($result['format'] == '1') { echo 'card-title-1'; } elseif ($result['format'] == '2') { echo 'card-title-2'; }?>" href="#"><?php echo htmlspecialchars($result['subject']); ?></a></h3>
                            <p><?php if (strlen($result['content']) > 50) { echo substr(htmlspecialchars($result['content']), 0, 100) . '...'; } ?></p>
                            <a class="link-btn <?php if($result['format'] == '1') { echo 'sl-link-btn-1'; } elseif ($result['format'] == '2') { echo 'sl-link-btn-2'; }?>" href="#">Read More</a>
                            <div class="card-details-item">
                                <img src="<?php echo htmlspecialchars($result['thumbnail_img']); ?>" alt="profile pic">
                                <p><strong><?php echo htmlspecialchars($result['posted_by']); ?></strong><br><?php echo date('jS F Y', strtotime($result['date_posted'])); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?> <!-- END OF FOREACH -->
                    
            </div>
        </div>       
        

        <!-- end of LATEST NEWS-->


        <!-- CLIENTS -->

        <div class="clients-outer">
            <div class="clients-container">
            <div class="clients-item tooltipArrow">
                <a class="hidden" href="#">
                <img class="color" src="https://www.netmatters.co.uk/uploads/page/1/home-gZQR.png" alt="Busseys">
                <img class="greyscale" src="https://www.netmatters.co.uk/uploads/page/1/home-T5gi.jpg" alt="Busseys">
                </a>
                <div class="tooltip-data">
                <h3>Bussey's</h3>
                <p>One of the UK's leading Ford dealerships.</p>
                </div>
            </div>
            <div class="clients-item tooltipArrow">
                <a class="hidden" href="#">
                <img class="color" src="https://www.netmatters.co.uk/uploads/page/1/home-MjHw.png"
                    alt="Crane Garden Supplies">
                <img class="greyscale" src="https://www.netmatters.co.uk/uploads/page/1/home-BsyK.jpg"
                    alt="Crane Garden Supplies">
                </a>
                <div class="tooltip-data">
                <h3>Crane Garden Builders</h3>
                <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in
                    the
                    UK.
                </p>
                </div>
            </div>
            <div class="clients-item tooltipArrow">
                <a class="hidden" href="#">
                <img class="color" src="https://www.netmatters.co.uk/uploads/page/1/home-ukEL.png" alt="Beat">
                <img class="greyscale" src="https://www.netmatters.co.uk/uploads/page/1/home-RfLc.jpg" alt="Beat">
                </a>
                <div class="tooltip-data">
                <h3>Beat</h3>
                <p>The UK's eating disorder charity founded in 1989.</p>
                </div>
            </div>
            <div class="clients-item tooltipArrow">
                <a class="hidden" href="#">
                <img class="color" src="https://www.netmatters.co.uk/uploads/page/1/home-kGn4.png" alt="Northern Diver">
                <img class="greyscale" src="https://www.netmatters.co.uk/uploads/page/1/home-jHUl.jpg"
                    alt="Northern Diver">
                </a>
                <div class="tooltip-data">
                <h3>Northern Diver</h3>
                <p>Global water based equipment manufacturers for sport, military, commercial and rescue businesses.
                </p>
                </div>
            </div>
            </div>
        </div>

        <!-- end of CLIENTS -->

        </main>

        <?php include('inc/cookie.php'); ?>
        <?php include('inc/footer.php'); ?>
        <?php include('inc/sidebar.php'); ?>