<?php get_header(); ?>

<!-- HOME -->
<section class="home">
    <section class="main_home_content">
   
        <h1 class="title big"> <em> <span class="span1"> M</span>aximise<span class="span1"> E</span>fficiency with<span class="span1"> P</span>remier <span class="span1">H</span>ydraulic <br>  <span class="span1">O</span>peration &amp; <span class="span1">M</span>aintenance <span class="span1">M</span>anuals <span class="span1"></span> </em></h1>
        <br>
        <p class="padding_2x">Elevate your Business Operations through Expert Handover Documentation.</p>
        <a href="#contact" class="btn1 " style="margin-left: 30px;">Contact Us <i class="fa fa-arrow-right"></i></a>
    </section>
   
</section>

<!--SECTION1 (about and form)-->
<div class="section1" id="about">
    <section class="flex-content padding_2x">
        <em class="tag">ABOUT US</em>
        <h2 class="title medium">We help you to make your business more efficient.</h2>
        <p>HydraulicOMM provides hydraulic O&amp;M’s (Operation &amp; Maintenance manuals) and As Built drawings for plumbers specialising in commercial plumbing fitouts. </p>
        <p >With a growing amount of documentation needed by builders for commercial projects, HydraulicOMM can deliver stressfree, fast and affordable documentation when contractual obligations and construction deadlines loom.</p>
        <p >With over 10 years experience in providing O&amp;M manuals, HydraulicOMM prides itself on delivering accurate documentation ontime and within Budget. We work to the highest standards and are passionate about great customer service.</p>
        <p style="padding-bottom: 20px;">To discuss your project requirements and ontain a competative, fixed price quote, contact us today.</p>
        <a href="#contact" class="btn1" >Contact Us <i class="fa fa-arrow-right"></i></a>
    </section>

    <section class="flex-content padding_2x">
        <form id="form" class="padding_2x">
            <h2 class="small">Request for a Quote</h2>

          
            <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();

                        // Display the quote form )
                        echo do_shortcode('[ninja_form id=2]');

                    endwhile;
                endif;
                ?>
        </form>
    </section>
</div>

<!--SECTION2 (steps)-->
<div class="sections section2 padding_2x">
    <article class="cards padding_2x">
        <section class="flex-content padding_2x">
            <figure>
             <img src="<?php echo get_template_directory_uri(); ?>/imgs/service.png" 
            alt="hydraulicOMM_service" >
          
            </figure>
            <h2 class="title small">Pick a <em>service</em></h2>
       <p></p>
        </section>
        <section class="flex-content padding_2x">
            <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/schedule.png" 
            alt="hydraulicOMM_schedule" loading="lazy">
               
                <h2 class="title small"><em>Schedule</em> with us</h2>
            </figure>
        </section>
        <section class="flex-content padding_2x">
            <figure>

                 <img src="<?php echo get_template_directory_uri(); ?>/imgs/done.png" 
            alt="hydraulicOMM_done" loading="lazy">
            
                <h2 class="title small">Get things <em>done</em></h2>
            </figure>
        </section>
    </article>
</div>

<!-- SECTION3 (what we offer)-->
<div class="services" id="services">
   

    <div class="sections section3" >
    <div class="flex-content padding_2x">
        <em class="tag">What we offer</em>
        <h2 class="title small"> 
            <ul>
                <li>O&amp;M Manuals</li>
                <li>As Builts</li>
                <li>Customised Templates</li>

            </ul>
        </h2>
    </div>
    <section>
        <figure>
           <img src="<?php echo get_template_directory_uri(); ?>/imgs/installer.jpg" 
            alt="hydraulicOMM__documentation_img" >
            
        </figure>
        <article>
          <span>Documentation</span>
          <h4>Accurate and Professional documentation for your projects</h4>
         
        </article>
      </section>
      <section>
      <figure>
         <img src="<?php echo get_template_directory_uri(); ?>/imgs/hydraulic6.jpg" 
            alt="hydraulicOMM_review_img" >
            
      </figure>
      <article>
        <span>Review</span>
        <h4>1 X consultant review amendment included per project</h4>

      </article>
    </section>
    <section>
      <figure>
         <img src="<?php echo get_template_directory_uri(); ?>/imgs/checker.jpg" 
            alt="hydraulicOMM_deadline_img" >
            
      </figure>
      <article>
        <span>Fast</span>
        <h4>We meet your deadline</h4>
      </article>
    </section>
    
    <section>
      <figure>
         <img src="<?php echo get_template_directory_uri(); ?>/imgs/hydraulicOMM_pipe.png" 
            alt="hydraulicOMM_rate_img" >
            
      </figure>
      <article>
        <span>Rates</span>
        <h4>Small scale O&amp;M starting from $300 </h4>
      </article>
    </section>

    
    <section>
      <figure>
         <img src="<?php echo get_template_directory_uri(); ?>/imgs/document.jpg" 
            alt="hydraulicOMM_finalproduct_img" >
           
      </figure>
      <article>
        <span>Final product</span>
        <h4>Let us print and deliver your hard copies</h4>
      </article>
    </section>
    </div>
</div>

<!--SECTION4 (why choose us)-->
<div class="section4 flex">
    <section class="flex-content padding_2x">
        <figure>
             <img src="<?php echo get_template_directory_uri(); ?>/imgs/hydraulic2.jpg" 
            alt="hydraulicOMM_experience_img" >
            
            <span class="padding_1x">
                <p class="title medium">10+</p>
                <em>Years of Experience</em>
           </span>
        </figure>
    </section>
    <section class="flex-content padding_2x">

       
        <div class="slideWrapper">
            <ul id="slider_section">
                 <div>
                     <em class="tag">Why choose us?</em>
                    
                </div>

                 <li class="active">
                     
                     <h4>O&amp;M Manuals</h4>
                     <p>Customised, Professional, and Electronic O&amp;M manuals presented as an EBook in PDF format.  The O&amp;M is separated into sections featuring a clickable index. Hardcopies can be provided in a professional A4 binder, complete with A3 size drawings and a USB.
                     </p>
                 </li>
                 <li>
                     <h4> As Builts</h4>
                     <p>Let HydraulicOMM modify your plans.  Just send CAD files with a clear mark up of your changes.  Files are completed and sent via email or Dropbox in DWG and PDF format.
                     </p>
                 </li>
                 <li>
                    <h4>Delivery</h4>
                    <p >HydraulicOMM offer a print and delivery service of hard copy O&amp;M manual’s and drawings.  Standard printing of As Builts is A3 size, however other sizes are possible depending on your requirements.  
                        Electronic files are sent via email or Dropbox link for larger files.
                        <br>

                    </p>
                </li>
             </ul>
             </div>
             <div class="slide-action">
                 <div class="sld-btn prev"><i class="fa fa-angle-left"></i></div>
                 <div class="sld-btn next"><i class="fa fa-angle-right"></i></div>
             </div>


    </section>
</div>

<!--SECTION5 (what we need)-->
<div class="section5 flex">
    <section class="flex-content padding_2x">
       
        <em class="tag padding_1x">What we need from you</em>
       
        <p>We take pleasure in providing you with a service that will take the pressure off producing time consuming administrative requirements.  Just send us your project details, and we will provide you with a fixed price quotation within 24 hours <p>
        <div class="list">

       
            <ul>
                <li>Business details and logo</li>
                <li>Scope of works</li>
                <li>Fixtures list (FFE)</li>
                <li>Suppliers</li>
                <li>Commissioning details and certificates</li>
                <li>CAD files and mark up’s of changes</li>
            </ul>

            <button id="openPdfButton" class="btn1" > DOWNLOAD</button>
    </section>
    <section class="flex-content padding_2x">
        <figure>
             <img src="<?php echo get_template_directory_uri(); ?>/imgs/kitchen1.png" 
            alt="hydraulicOMM_kitchen_img" >
           
        </figure>
        </section>
</div>

<div class="section6 flex " >
    <section class="flex-content padding_2x">
        <h1 class="title small">Stay connected with us</h1>
        <p>Have any questions? please feel free to contact us. We are always happy to hear from you.</p>
        <a href="#contact" class="btn1">CONTACT US<i class="fa fa-arrow-right"></i></a>
    </section>
</div>

<!-- CONTACT -->
<!-- <div class="form-main padding_2x" id="contact" >

    <div class="form">

        <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text"></p>

            <div class="info">
            <div class="information">
                <i class="fa fa-address"></i> &nbsp &nbsp

                <p></p>
            </div>
            <div class="information">
                <i class="fa fa-envelope"></i> <p>info@hydraulicomm.com.au</p>
            </div>
            <div class="information">
                <i class="fa fa-phone"></i>&nbsp&nbsp
                <p> 0407 864 290</p>
            </div>
            </div>

            <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/hydraulicOMM">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/">
                <i class="fa fa-instagram"></i>
                </a>
            
            </div>
            </div>
        </div>

        <div class="main_form_wrapper">
            <h2 class="form-head">Have any question?</h2>
            
            <form class="form-wrapper">

                <?php 
                                if ( have_posts() ) : 
                                while ( have_posts() ) : the_post(); ?>


                                <?php echo do_shortcode('[ninja_form id=1]'); ?>
                                <?php
                                    
                                endwhile; 
                                endif; 
                        ?>
                

            </form>
        </div>
        
    </div>
</div> -->

<div class="form-main padding_2x" id="contact" >

    <div class="contact_form ">

        <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text"></p>

            <div class="info">
            <div class="information">
                <i class="fa fa-address"></i> &nbsp &nbsp

                <p></p>
            </div>
            <div class="information">
                <i class="fa fa-envelope"></i> <p>info@hydraulicomm.com.au</p>
            </div>
            <div class="information">
                <i class="fa fa-phone"></i>&nbsp&nbsp
                <p> 0407 864 290</p>
            </div>
            </div>

            <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/hydraulicOMM">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/">
                <i class="fa fa-instagram"></i>
                </a>
            
            </div>
            </div>
        </div>

        <div class="main_form_wrapper">
            <h2 class="form-head">Have any question?</h2>
            
            <form class="form-wrapper">

                <?php 
                                if ( have_posts() ) : 
                                while ( have_posts() ) : the_post(); ?>


                                <?php echo do_shortcode('[ninja_form id=1]'); ?>
                                <?php
                                    
                                endwhile; 
                                endif; 
                        ?>
                

            </form>
        </div>
        
    </div>
</div>



  <?php get_footer(); ?>
