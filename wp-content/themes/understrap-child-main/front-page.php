<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<main class="site-main" id="main">

    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

        <header class="entry-header bg-cover shadow-lg py-5">
                <a href="/"><img width="590" class="img-fluid d-block mx-auto pb-5" src="wp-content/uploads/2022/06/stx-logistics-logo-SILVER.svg"></a>
            
            <div class="row no-gutters text-white text-center pb-5 px-3">
                <div class="col-md-10 offset-md-1">
                    <h1 class="text-uppercase">Your Asset-Based 3rd Party Logistics Company</h1>

                    <p class="lead mb-5">As a shipper, you have so many choices in the transportation industry. However, not all are equal. Industry knowledge, empathy, and competency are critical when it comes to having a successful transportation solution. Here at STX Logistics, we pride ourselves in not only partnering with the right carriers to ensure success, but we also look to create innovative and tailored solutions for our clients supply chain needs.</p>
                    
                    <p><a class="btn btn-lg btn-primary text-uppercase" href="#more">Learn More</a></p>
                </div>
            </div>
        </header><!-- .entry-header -->

        <div class="entry-content text-white">
            <div class="row complete-logistics no-gutters d-flex align-items-center text-center text-md-left pt-md-5 pb-md-2">

                <div class="col-md-4 offset-md-1 pb-5 py-md-5">
                    <img class="img-fluid shadow-lg" src="/wp-content/uploads/2022/06/comprehensive-logistics1.jpg" alt="Complete Logistics Services">
                </div>
                
                <div class="col-md-6 p-5">
                    <div class="row">
                        <h2>Complete Logistics Services</h2>
                        
                        <p class="lead">Our logistics experts offer complete Shipment Management Services for your business. From Point A to Point B, we specialize in offering our customers creative & cost-effective solutions.</p>
                    </div>
                </div>
            </div>

            <div class="row complete-logistics-trucks no-gutters d-flex align-items-center text-center text-md-left pb-5">

                <div class="col-md-4 p-5">
                    <div class="inner">
                        <img class="img-fluid shadow-lg" src="/wp-content/uploads/2022/06/open-heavy-truck.svg" alt="open heavy truck">
                        <h2 class="mt-5 px-sm-2">OPEN DECK / HEAVY HAUL</h2>
                        <p>STX Logistics has access to hundreds of open-deck trailers of varying styles in order to service any type of need. Heavy haul and over-dimensional shipments are everyday task that we excel at.</p>
                    </div>
                </div>
                
                <div class="col-md-4 p-5">
                    <div class="inner">
                        <img class="img-fluid shadow-lg" src="/wp-content/uploads/2022/06/dry-van.svg" alt="dry van">
                        <h2 class="mt-5">DRY VAN</h2>
                        <p>STX Logistics partners with only the best  48’ or 53’ dry van trailers and straight truck operators to accommodate your unique requirements.</p>
                    </div>
                </div>

                <div class="col-md-4 p-5">
                    <div class="inner">
                        <img class="img-fluid shadow-lg" src="/wp-content/uploads/2022/06/fridge-van.svg" alt="Complete Logistics Services">
                        <h2 class="mt-5">REFRIGERATED</h2>
                        <p>STX Logistics understands the importance of your climate controlled products and has the knowledge and partners to ensure successful transportation to destination. </p>
                    </div>
                </div>

                <div class="col-md-1"></div>
            </div>

            
            <div class="row no-gutters text-center">
                <div class="col-md-12 bg-secondary shadow-lg py-3" style="z-index: 2;">
                    <h2 id="more" class="text-uppercase m-0">The STX Logistics Difference</h2>
                </div>
                
                <div class="col-md-4 bg-cover custom-solutions p-5">
                    <div class="inner">
                        <h2>Custom Solutions</h2>
                        <p class="lead">Our team members have years of experience in all facets of 3rd party logistics and asset based trucking, which allows us to offer ideas, programs, and solutions that actually work for your supply chain needs.</p>
                    </div>
                </div>
                
                <div class="col-md-4 bg-cover quality-service p-5">
                    <div class="inner">
                        <h2>Quality Service</h2>
                        <p class="lead">We pride ourselves on providing our customers and carrier partners superior service by communicating with facts and empathy. We truly care about your success.</p>
                    </div>
                </div>
                
                <div class="col-md-4 bg-cover expanded-offerings p-5">
                    <div class="inner">
                        <h2>Expanded Offerings</h2>
                        <p class="lead">With our asset divisions we are able to offer complete solutions in moving railcar, windfarm, and many other heavy-haul or oversized projects. We also have the capabilities to fabricate trailers for custom one-off shipments or to provide warehousing/outdoor storage.</p>
                    </div>
                </div>
            </div>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <div class="row no-gutters text-center bg-primary-gradient py-5 px-3">
                <div class="col-md-8 offset-md-2 text-white">
                    <h2>Looking to get started with STX Logistics?</h2>
                    <p>Contact us at <a class="text-white text-decoration-none"  href="mailto:info@stxlogistics.net?subject=Looking to get started with STX Logistics">info@stxlogistics.net</a> to speak with our transportation experts about your specific situation or simply request a quote for a project with the form below.</p>

                    <?php gravity_form( 2, false, false, false, '', true, ); ?>

                </div>
            </div>
        </footer><!-- .entry-footer -->

    </article> <!--#post-## -->

</main><!-- #main -->

<?php
get_footer();
