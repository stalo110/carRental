 <?php   
 
 include "nav.php";
 
 ?>
 <!-- =====================================
    	==== Start Header -->

 <header class="header pos-re slider-fade" data-scroll-index="0">

     <div class="owl-carousel owl-theme">
         <div class="item bg-img" data-overlay-dark="5" data-background="img/cars/hero.png">
             <div class="text-center v-middle caption mt-30">
                 <h1>Car rental</h1>
                 <h4>Made Easy</h4>

                 <?php include "reserve_form.php"; ?>

             </div>
         </div>
     </div>
 </header>

 <!-- End Header ====
    	======================================= -->



 <!-- =====================================
        ==== Start cars -->

 <section class="hero" data-scroll-index="1">
     <div class="section-padding pos-re">
         <div class="container">
             <div class="row">
                 <div class="feat-item mb-md50 col-lg-4">
                     <div class="text-center">
                         <h4>Cars</h4>
                         <div class="img" style="background: grey; height: 250px; padding: 60px 20px; margin-top: 20px">
                             <img src=" img/cars/car2.png" alt="">
                         </div>
                         <a href="cars.php" class="butn butn-light mt-30">
                             <span>View Cars</span>
                         </a>
                     </div>
                 </div>

                 <div class="feat-item mb-md50 col-lg-4">
                     <div class="text-center">
                         <h4>SUVs</h4>
                         <div class="img" style="background: grey; height: 250px; padding: 20px; margin-top: 20px">
                             <img src=" img/cars/suv2.png" alt="">
                         </div>
                         <a href="suv.php" class="butn butn-light mt-30">
                             <span>View SUVs</span>
                         </a>
                     </div>
                 </div>

                 <div class="feat-item mb-md50 col-lg-4">
                     <div class="text-center">
                         <h4>PickUp Trucks</h4>
                         <div class="img" style="background: grey; height: 250px; padding: 40px 20px; margin-top: 20px">
                             <img src=" img/cars/truck1.png" alt="">
                         </div>
                         <a href="pickup_truck.php" class="butn butn-light mt-30">
                             <span>View Trucks</span>
                         </a>
                     </div>
                 </div>

             </div>

             <div class="text-center">
                 <a href="rentals.php" class="butn butn-light mt-30">
                     <span>View Rentals</span>
                 </a>
             </div>
         </div>

         <div class="curve curve-gray-b curve-bottom"></div>
     </div>

     <!-- =====================================
        ==== Start Car describe -->

     <section class="testimonials section-padding bg-img bg-fixed pos-re" data-overlay-dark="7"
         data-background="img/cars/bgimg.jpg">
         <div class="container">
             <div class="row">

                 <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                     <h2>Quality Car, <span> Truck & SUV </span> Rentals.</h2>
                     <p>Commerce Auto Rental has been making car rentals simple and hassle-free since 2021. As a
                         privately owned, family-operated business near Dallas, Texas, we take pride in offering
                         boutique rental services with personalized care. We treat every customer like family. Book your
                         rental today or call us at (972) 616-4728 to speak with our friendly and professional team.</p>
                 </div>

                 <div class="row">
                     <div class="feat-item mb-md50 col-lg-6">
                         <div class="info" style="padding: 20px">
                             <h1>Rentals for Everybody</h1>
                             <p>Our vehicle fleet is constantly expanding to meet your needs. For business trips or solo
                                 vacations, our compact and easy-to-drive car rentals are a perfect choice. If you need
                                 more space and power, we offer premium crossovers and SUVs. Tackling a home project and
                                 need a reliable truck to transport materials? We also provide a range of pickup truck
                                 rentals ideal for any task or trip.</p>
                         </div>
                     </div>
                 </div>

             </div>
         </div>

         <div class="curve curve-top"></div>
     </section>


     <div class="tabs-section section-padding bg-gray">
         <div class="container">
             <div class="row">

                 <ul class="col-md-12 nav nav-pills tabs" id="pills-tab" role="tablist">
                     <li class="nav-item one active">
                         <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#tab1" role="tab"
                             aria-controls="tab1" aria-selected="true">About Us</a>
                     </li>
                     <li class="nav-item two">
                         <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#tab2" role="tab"
                             aria-controls="tab2" aria-selected="false">Our Mission</a>
                     </li>
                     <li class="nav-item three">
                         <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#tab3" role="tab"
                             aria-controls="tab3" aria-selected="false">Why Us?</a>
                     </li>
                 </ul>

                 <div class="tab-content col-lg-12" id="pills-tabContent">
                     <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="pills-home-tab">
                         <div class="row">
                             <div class="left col-lg-6">
                                 <div class="about box-white">
                                     <h5 class="title">About Us</h5>
                                     <h6 class="sub-title">Reliable Rentals, Exceptional Service</h6>
                                     <p>
                                         Since our inception, we have been committed to providing safe, clean, and
                                         well-maintained vehicles tailored to your travel needs. From business trips to
                                         family vacations, we aim to make every journey seamless and enjoyable.
                                     </p>

                                     <!-- Skills -->

                                     <div class="skills mt-40">
                                         <div class="skill-item mb-30">
                                             <h6>Fleet Quality</h6>
                                             <div class="skill-progress">
                                                 <div class="progres" data-value="90%"></div>
                                             </div>
                                         </div>
                                         <div class="skill-item mb-30">
                                             <h6>Customer Satisfaction</h6>
                                             <div class="skill-progress">
                                                 <div class="progres" data-value="95%"></div>
                                             </div>
                                         </div>
                                         <div class="skill-item">
                                             <h6>Flexibility & Affordability</h6>
                                             <div class="skill-progress">
                                                 <div class="progres" data-value="80%"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-lg-6 image">
                                 <div class="img">
                                     <img src="img/cars/about1.jpg" alt="">
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="pills-home-tab">
                         <div class="row">
                             <div class="left col-lg-6">
                                 <div class="mission box-white">
                                     <h5 class="title">Our Mission</h5>
                                     <h6 class="sub-title">Your Journey, Our Commitment</h6>
                                     <p class="mb-10">
                                         <b>Our mission is simple:</b> to provide reliable, affordable, and top-quality
                                         vehicles that meet your travel needs. Whether you're embarking on a business
                                         trip, a family vacation, or need a vehicle for daily errands, <b>we strive to
                                             make your rental experience seamless and stress-free.</b>
                                     </p>
                                     <p>
                                         At our core, we value trust, reliability, and customer satisfaction. <b>We’ll
                                             go the extra mile</b> to ensure your journey is safe and enjoyable. From
                                         well-maintained vehicles to outstanding customer support, <b>your comfort and
                                             success on the road are our top priorities.</b>
                                     </p>

                                 </div>
                             </div>

                             <div class="col-lg-6 image">
                                 <div class="img">
                                     <img src="img/cars/about2.jpeg" alt="">
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="pills-home-tab">
                         <div class="row">
                             <div class="left col-lg-6">
                                 <div class="why-us box-white">
                                     <h5 class="title">Why Choose Us?</h5>
                                     <h6 class="sub-title">Your Trusted Car Rental Partner</h6>
                                     <p>We offer comprehensive car rental services to meet all your travel needs. From
                                         providing a wide range of vehicles to delivering exceptional customer support,
                                         we ensure a seamless and enjoyable rental experience. With us, you’re not just
                                         a customer—you’re family. Collaboration and your satisfaction are at the heart
                                         of everything we do.</p>
                                     <ul class="feat mt-30 row">
                                         <li class="col-sm-4">
                                             <span class="icon"><i class="bi bi-shield-check"></i></span>
                                             <h6>Reliable, safe, and clean vehicles for any trip.</h6>
                                         </li>
                                         <li class="col-sm-4">
                                             <span class="icon"><i class="bi bi-people-fill"></i></span>
                                             <h6>
                                                 Highly rated by previous customers for our excellent customer service.
                                             </h6>
                                         </li>
                                         <li class="col-sm-4">
                                             <span class="icon"><i class="bi bi-truck"></i></span>
                                             <h6>Continuously growing fleet.</h6>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="col-lg-6 image">
                                 <div class="img owl-carousel owl-theme carousel-single">


                                     <img src="img/cars/about.jpg" alt="">
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </section>

 <!-- End cars ====
        ======================================= -->




 <!-- =====================================
        ==== Start Process -->

 <div class="process section-padding bg-img bg-fixed pos-re text-center" data-overlay-dark="7"
     data-background="img/cars/bgimg1.png">
     <div class="container">
         <div class="row">

             <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                 <h4><span>Our</span> Process</h4>
                 <p>Renting a car with us is straightforward and hassle-free. Follow these steps to get on the road in
                     no time.</p>
             </div>
             <div class="full-width clearfix"></div>

             <div class="col-lg-3 col-md-6">
                 <div class="item first mb-md50">
                     <img src="img/arrow.png" class="tobotm" alt="">
                     <span class="icon bi bi-card-checklist"></span>
                     <div class="cont">
                         <h3>01</h3>
                         <h6>Check Requirements</h6>
                         <p>Ensure you meet our rental criteria: 21+ years of age, valid driver’s license, credit card,
                             and insurance.</p>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="item odd mb-md50">
                     <img src="img/arrow.png" alt="">
                     <span class="icon bi bi-car-front"></span>
                     <div class="cont">
                         <h3>02</h3>
                         <h6>Choose Your Vehicle</h6>
                         <p>Browse our diverse fleet of vehicles and select the perfect car for your trip.</p>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="item mb-sm50">
                     <img src="img/arrow.png" class="tobotm" alt="">
                     <span class="icon bi bi-file-earmark-check"></span>
                     <div class="cont">
                         <h3>03</h3>
                         <h6>Complete Booking</h6>
                         <p>Reserve your car online or call our friendly team to finalize your booking.</p>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="item odd">
                     <span class="icon bi bi-key-fill"></span>
                     <div class="cont">
                         <h3>04</h3>
                         <h6>Pick Up & Drive</h6>
                         <p>Visit our location to pick up your car and enjoy your journey hassle-free.</p>
                     </div>
                 </div>
             </div>

         </div>
     </div>

     <div class="curve curve-gray-t curve-top"></div>
     <div class="curve curve-bottom"></div>
 </div>

 <!-- End Process ====
        ======================================= -->


 <div class="why-us section-padding bg-gray pos-re">
     <div class="container">
         <div class="row">

             <div class="col-lg-6">
                 <div class="img mb-md50">
                     <img src="img/cars/drive1.jpg" alt="">
                 </div>
             </div>

             <div class="col-lg-6">
                 <div class="content pt-10">
                     <h4>How do you rent from us?</h4>
                     <h6 class="content pt-10">It is easy. Before you contact us, check out our rental requirements,
                         valid at every
                         location.
                     </h6>
                     <ul class="list-check pt-10">
                         <li><i class="fas fa-check-circle"></i> Must be 21 years of age or older.</li>
                         <li><i class="fas fa-check-circle"></i> Have a valid driver’s license.</li>
                         <li><i class="fas fa-check-circle"></i> Provide a credit card for deposit.</li>
                         <li><i class="fas fa-check-circle"></i> Bring proof of full-coverage insurance.</li>

                     </ul>
                 </div>
             </div>

         </div>
     </div>

     <div class="curve curve-top"></div>
     <div class="curve curve-bottom"></div>
 </div>


 <div class="why-us section-padding bg-gray pos-re">
     <div class="container">
         <div class="row">
             <div class="col-lg-6">
                 <div class="content pt-10">
                     <h2>Long-Term Rentals</h2>
                     <p class="pt-10">At JCAutos, we offer car rentals on a daily, weekly, and monthly basis.
                         Whether you're looking for an insurance replacement while your vehicle is being repaired or
                         need a rental for business travel, we have long-term rental options to suit your needs. Inquire
                         about our additional discounts and discover how you can save even more.
                     </p>
                 </div>
             </div>


             <div class="col-lg-6">
                 <div class="img mb-md50">
                     <img src="img/cars/drive2.jpg" alt="">
                 </div>
             </div>

         </div>
     </div>

     <div class="curve curve-top"></div>
     <div class="curve curve-bottom"></div>
 </div>

 <!-- =====================================
        ==== Start Call-Action -->

 <section class="call-action section-padding bg-img bg-fixed" data-overlay-dark="5"
     data-background="img/cars/bgimg.jpg">
     <div class="container">
         <div class="row">

             <div class="col-lg-12">
                 <div class="text-center">
                     <h2>Reserve Now</h2>
                     <p>Now that you know more about CAR, call our office at (972) 616-4728 or reserve now online to get
                         started. We
                         serve Dallas, Fort Worth, and nearby cities. Find out more about who we are and our company’s
                         values.</p>
                     <a href="reserve.php" class="butn butn-bg">
                         <span>Reserve Now</span>
                     </a>
                 </div>
             </div>

         </div>
     </div>
 </section>

 <!-- End Call-Action ====
        ======================================= -->


 <!-- =====================================
        ==== Start Contact -->

 <section class="contact section-padding" data-scroll-index="6" id="contact">
     <div class=" container">
         <div class="row">

             <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                 <h4>Get <span>In</span> Touch</h4>
                 <p>At JCAutos, we provide reliable and flexible car rental services. </p>

             </div>

             <div class="col-lg-5">
                 <div class="contact-info mb-md50">
                     <h5>Contact Us :</h5>
                     <p>Whether you're in need of a
                         temporary vehicle or a long-term rental, we're here to meet your needs with a fleet of
                         well-maintained cars for every occasion.</p>
                     <div class="item">
                         <span class="icon icon-basic-tablet"></span>
                         <div class="cont">
                             <h6>Phone : </h6>
                             <p>+20 010 251 789 18 , 251 789 18</p>
                         </div>
                     </div>
                     <div class="item">
                         <span class="icon icon-basic-mail-open-text"></span>
                         <div class="cont">
                             <h6>Email : </h6>
                             <p>Coco_support@website.com</p>
                         </div>
                     </div>
                     <div class="item">
                         <span class="icon icon-basic-geolocalize-05"></span>
                         <div class="cont">
                             <h6>Address : </h6>
                             <p>4655 Carter Street ,Olney, Illinois</p>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-7">
                 <form class="form" id="contact-form" method="post"
                     action="http://innovationplans.com/idesign/coco3/contact.php">

                     <div class="messages"></div>

                     <div class="controls">

                         <div class="row">

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input id="form_name" type="text" name="name" placeholder="Name"
                                         required="required">
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input id="form_email" type="email" name="email" placeholder="Email"
                                         required="required">
                                 </div>
                             </div>
                             <div class="col-md-12">
                                 <div class="form-group">
                                     <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                 </div>
                             </div>
                             <div class="col-md-12">
                                 <div class="form-group">
                                     <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                         required="required"></textarea>
                                 </div>
                             </div>

                             <div class="col-md-12">
                                 <button type="submit" class="butn butn-bg"><span>Send Message</span></button>
                             </div>

                         </div>
                     </div>
                 </form>
             </div>

         </div>
     </div>
 </section>

 <!-- End Contact ====
        ======================================= -->



 <?php
include "footer.php";
 ?>