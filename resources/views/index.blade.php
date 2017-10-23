<!doctype html>
<?php 
session_start();?>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title>Health Benefits</title>
    <meta name="description" content="The HTML5 Herald" />
    <meta name="author" content="SitePoint" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/76eb79f76b.js">
    </script>
    <link rel="stylesheet" href="css/main.css" />
    <!--<link rel="stylesheet" href="css/style.css"/>-->

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"> </script>
  <![endif]-->

   <script src="js/moment.min.js"></script>
    <script>
       
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-54KL8BM');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54KL8BM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <nav class="navbar navbar-primary">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"> </span>
              <span class="icon-bar"> </span>
              <span class="icon-bar"> </span>
            </button>
            <a class="navbar-brand" href="">
                <img alt="Pure Care Solutions" src="img/logo.png" />
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-navbar">


            <ul class="nav navbar-nav navbar-right">
                <li><a data-toggle="modal" data-target="#satisfaction">Satisfaction Guarantee</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="#about_us">About Us</a></li>
                <li>
                    <a href="https://nb94110.mymemberportal.com/#/Login"><img src="img/icon_member.png" /> Member Login</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Navbar End -->

    <!-- Above Fold Start -->

    <div class="wrapper wrapper-above_fold" id="Myaccount">
        <div class="container">

            <div class="wrapper wrapper-pills">
                <div class="pill pill-default">
                    MRI Scan
                </div>
                <div class="pill pill-default">
                    CT Scan
                </div>
                <div class="pill pill-default">
                    X-ray
                </div>
                <div class="pill pill-default">
                    Ultrasound
                </div>
            </div>

            <div class="row">


                <!-- Form column start -->

                <div class="col-md-6">
                    <div class="panel panel-form">
    <div class="panel-heading text-center">

        <h2>Save 40-75%* Off Your</h2>
        <h1>Next Medical Scan</h1>

        <p>
            Sign up and we'll help you save with a local provider.**
        </p>

    </div>

    <div class="panel-body">

        <!-- Form start -->

        <form class="form-horizontal" id="mtr_healthbenefits_form" action="AjaxCallURI" method="post">

        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">    
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="email" class="form-control effect_slap" placeholder="Email address" name="txtEmail" id="txtEmail" />
                    <span class="validation_errors" id="emailValidationError"></span>
                </div>
            </div>

            <div class="form-group">

                <div class="col-sm-6">
                    <input type="text" class="form-control effect_slap" placeholder="First name" name="txtFirstName" id="txtFirstName" />
                    <span class="validation_errors" id="fnameValidationError"></span>
                </div>

                <div class="col-sm-6">
                    <input type="text" class="form-control effect_slap" placeholder="Last name" name="txtLastName" id="txtLastName" />
                    <span class="validation_errors" id="lnameValidationError"></span>
                </div>

            </div>
            <button type="submit" id="set-up-account" class="btn btn-green btn-block">Try it 30 days free - Save now</button>
             
             

        </form>

        <!-- Form end -->
    </div>

    <div class="panel-footer">


        <!-- Start Wrapper Badges -->
        <div class="row wrapper wrapper-badges">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="img/icon_satisfaction.png" alt="Satisfaction Guaranteed" />
                </div>
            </div>
            <div class="col-sm-4">
                <h1>30 Day</h1>
                <p>
                    Refund Guarantee
                </p>
            </div>
            <div class="col-sm-4">
                <h1>Only $4.95</h1>
                <p>
                    One-Time Registration
                </p>
            </div>
        </div>
        <!-- End Badges Wrapper -->

        <div class="row text-center wrapper wrapper-table">

            <div class="col-xs-3">
                <p>30 Day trial ends</p>
                <p id="date_after">Oct 15, 2016</p>
            </div>

            <div class="col-xs-6">
                <p>Monthly Membership of $24.95</p>
                <p>automatically charged after trial</p>
            </div>

            <div class="col-xs-3">
                <p>To Cancel, Just Call</p>
                <p>(844) 859-2079</p>
            </div>

        </div>

        <div class="disclaimer">
            <p>
                * Savings may vary based on geographic loation, provider selected and procedure performed.
            </p>
            <p>
                ** Available services may vary by provider.
            </p>
        </div>

    </div>

</div>

                </div>

                <!-- Form column end -->

                <!-- Left info start -->

                <div class="col-md-6 padding-side_none">

                    <div id="sliders" data-ride="carousel" class="carousel slide wrapper wrapper-slides">
                        <div class="panel panel-slider">

                            <!-- Control Handles -->
                            <a class="handle right carousel-control handle-right" href="#sliders" role="button" data-slide="next">
                            </a>
                            <a class="handle handle-left left carousel-control" href="#sliders" role="button" data-slide="prev">
                            </a>

                            <div class="panel-body carousel-inner" role="listbox">

                                <!-- Imaging Slide Start -->
                                <div class="item active">

                                    <div class="tab-content">
                                        <!-- Highlights -->
                                        <div role="tabpanel" class="tab-pane active">
                                            <div class="item-header">
                                                <h1>A better image leads to a better diagnosis,</h1>
                                                <h2>better treatment and a better recovery.</h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="thumbnail">
                                                        <img src="img/image_xray.png" alt="xray" />
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <p>
                                                        Our members save <span>40% to 75%</span> on usual charges for MRI and CT Scans at thousands of credentialed radiology centers nationwide. You will be referred to a certified radiologist based on
                                                        condition, preferences and location.**
                                                    </p>
                                                    <ul>
                                                        <li>Average savings of 40% to 75% on MRI and CT scans*</li>
                                                        <li>Access to over 2,900 radiology centers throughout the United States</li>
                                                        <li>Convenient scheduling service assists members</li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- How It Works -->
                                        <div role="tabpanel" class="tab-pane">
                                            <div class="item-header">
                                                <h1>Setting up an appointment and saving your money is easy. </h1>
                                            </div>

                                            <ul>
                                                <li> Log on to the member portal and follow the instructions or call member services Monday to Friday, 7:00 am to 7:00 pm Central Time to find a participating facility, request an appointment, or for pricing
                                                    information.
                                                </li>
                                                <li>When calling, you will be provided a membership code to obtain your discount</li>
                                                <li>Service representatives will assist you in selecting a network provider convenient to your home or work</li>
                                                <li>Once a facility is chosen, an appointment will be scheduled through a three-way conference call with the service representative, the imaging center, and the patient</li>
                                                <li>Service representatives can answer questions regarding tests, what to expect at your appointment, directions to the facility, etc. </li>
                                                <li>You must have your doctor's order before scheduling an appointment</li>
                                                <li>Payment is collected upfront during the scheduling process and no payment is due at your appointment </li>
                                            </ul>
                                        </div>
                                        <!-- Why Us -->
                                        <div role="tabpanel" class="tab-pane">
                                            <div class="item-header">
                                                <h1>Savings doesnâ€™t just stop with imaging, <small>as a member of Pure Care Benefits weâ€™re committed to saving your family significant savings on some of the most common household health expenses:</small></h1>
                                            </div>
                                            <p><em>
                                            Dental Care Discounts â€“ over 195,000* available dental practice locations.
                                          </em></p>
                                            <p><em>
                                              Vision Care Discounts â€“ at 20,000 vision providers nationwide.
                                            </em></p>
                                            <p><em>
                                              Lab Test Discounts â€“ with convenient service options.
                                            </em></p>
                                            <p><em>
                                              Prescriptions Discounts â€“ at over 60,000 participating pharmacies.
                                            </em></p>
                                            <p><em>
                                              Diabetic Supply Discounts - Delivered to you with convenience
                                            </em></p>
                                            <p><em>
                                              Additionally, you will gain access to Board-Certified Physicians by phone, web, or app 24/7.
                                            </em></p>
                                            <p><em>
                                              For less than $1 per day we can save our members potentially thousands each year on out-of-pocket costs for health care as of May 2016*.
                                            </em></p>

                                        </div>
                                    </div>
                                </div>
                                <!-- Imaging Slide End -->

                                <!-- TeleHealth Slide Start-->
                                <div class="item">
                                    <div class="tab-content">
                                        <!-- Highlights -->
                                        <div role="tabpanel" class="tab-pane active">
                                            <div class="item-header">
                                                <h1>Is it the cold, flu or something worse?</h1>
                                                <h2>Get care on demand with a doctor in minutes.</h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="thumbnail">
                                                        <img src="img/image_telehealth.png" alt="telehealth" />
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <p>
                                                        Access to U.S. Board-Certified Physicians 24/7 by phone or online video â€”anytime anywhere with no per-visit fee!
                                                        <!-- Doctors offer a diagnosis, treatment options and prescription if necessary. Doctors by Phone is a perfect alternative to an urgent care
                                                clinic or ER, members cut unnecessary out-of-pocket costs and time wasted in crowded waiting rooms. -->
                                                    </p>
                                                    <ul>
                                                        <li>Use As Often As Needed</li>
                                                        <li>Visit Over Live Video or Phone</li>
                                                        <li>HIPAA Compliant &amp; 100% Confidential</li>
                                                        <li>$0 Per-Visit Fees For Members</li>
                                                        <li>Doctors Can Diagnose &amp; Prescribe, if medically appropriate</li>
                                                        <li>10 minute average doctor response time</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- How It works -->
                                        <div role="tabpanel" class="tab-pane">
                                            <div class="item-header">
                                                <h1>Whenever you feel unwell,<small> you can receive convenient, quality care from a variety of licensed healthcare professionals.</small></h1>
                                            </div>
                                            <p>
                                                Connecting with a Board-Certified Physician within minutes is easy, it's as simple as:
                                            </p>
                                            <ol>
                                                <li>
                                                    1. Request a visit with a doctor 24 hours a day, by web, phone, or mobile app. You will need to complete a medical history disclosure.
                                                </li>
                                                <li>
                                                    2. Talk to the doctor. Take as much time as you needâ€¦. thereâ€™s no limit!
                                                </li>
                                                <li>
                                                    3. If medically necessary, a prescription will be sent to the pharmacy of your choice.
                                                </li>
                                            </ol>
                                            <p>
                                                Receive the treatment you need in a timely, expedient manner. In addition, you have the ability to send your visit results to your primary care physician.
                                            </p>

                                        </div>
                                        <!-- Why Us -->
                                        <div role="tabpanel" class="tab-pane">
                                            <div class="item-header">
                                                <h1>In addition to first-rate on demand doctor care,<small> and the savings on some of the most common household health expenses we are committed to helping you pay less for more.</small></h1>
                                            </div>
                                            <p>
                                                Instead of paying $50, $60, or even $100 per session with other services, you only pay $24.95* per month for your household family, while easily adding your dependents.
                                            </p>
                                            <p>
                                                <small>As a promotion to new members we are offering a 30 day free trial with access to all benefits. Plus, we offer our customers a 30 day money back satisfaction guarantee.</small>
                                            </p>
                                            <p>
                                                <small>For less than $1 per day we can save our members potentially thousands each year on out-of-pocket costs for health care.</small>
                                            </p>
                                            <p>
                                                <small>*plus $4.95 one-time registration fee</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- TeleHealth Slide End-->

                                <!-- Dental Slide Start-->
                                <div class="item">
                                    <div class="tab-content">
                                        <!-- Highlights -->
                                        <div role="tabpanel" class="tab-pane active">
                                            <div class="item-header">
                                                <h1>If you're one of the 114 million American without dental insurance,<small> this is the plan for you. In most instances, our members save 15% to 50% per visit**</small></h1>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="thumbnail">
                                                        <img src="img/image_dental.png" alt="Dental" />
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <p>
                                                        Without dental benefits youâ€™re less likely to go to the dentist, allowing minor problems to turn into serious concerns.
                                                    </p>
                                                    <ul>
                                                        <li>Over 195,000* available dental practice locations</li>
                                                        <li>Save on General Dentistry</li>
                                                        <li>Save on Root Canals &amp; Crowns</li>
                                                        <li>Save on X-Rays &amp; Fillings</li>
                                                        <li>Save on Specialty Dental Care - Orthodontics and Periodontics</li>
                                                        <li>Includes your immediate family.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <small>*As of May 2016. **Actual costs and savings vary by provider, service and geographical area.</small>
                                        </div>
                                        <!-- How It Works -->
                                        <div role="tabpanel" class="tab-pane">
                                            <div class="item-header">
                                                <h1>Setting up an appointment and saving your money is easy.</h1>
                                            </div>
                                            <ul>
                                                <li>Log on to the member portal and follow the instructions or call member services Monday to Friday, 7:00 am to 7:00pm and Saturday, 8:00am to 5:00pm Central Time to find a participating facility nearest you, request an appointment, or
                                                    for pricing information.</li>
                                                <li>Present your membership card at the start of your appointment and pay the discounted price at the time of service.</li>
                                                <li>In most instances, members save 15% to 50% per visit** There is no paperwork or reimbursements when using your savings plan. After the procedure you pay your health care provider at the time of your visit. It is
                                                    that easy!</li>
                                            </ul>
                                            <p>
                                                <small>*As of May 2016. **Actual costs and savings vary by provider, service and geographical area. </small>
                                            </p>
                                        </div>
                                        <!-- Why Us -->
                                        <div role="tabpanel" class="tab-pane">
                                            <div class="item-header">
                                                <h1>Members can use their card over and over again to save throughout the year. <small> No annual spending caps, unlike dental insurance. </small></h1>
                                            </div>
                                            <p>
                                                You will be smiling brighter with all the benefits but without the expensive price tag.
                                            </p>
                                            <p>
                                                As a promotion to new members we are offering a 30 day free trial with access to all benefits. Plus, we offer our customers a 30 day money back satisfaction guarantee.
                                            </p>
                                            <p>
                                                For less than $1 per day we can save our members potentially thousands each year on out-of-pocket costs for health care.
                                            </p>

                                        </div>
                                    </div>

                                </div>
                                <!-- Dental Slide End-->

                                <!-- Lab Slide Start -->
                                <div class="item">
                                    <div class="tab-content">
                                        <!-- Highlights -->
                                        <div role="tabpanel" class="tab-pane active">
                                            <div class="item-header">
                                                <h1>Members monitor their health with 10% to 80% off typical costs of routine lab work.</h1>
                                                <h2> Affordable labs for proper treatment...</h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="thumbnail">
                                                        <img src="img/image_lab.png" />
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <p>Members can choose from over 1,500 participating locations nationwide and order online or by phone for:</p>
                                                    <ul>
                                                        <li>allergies, vitamin and cholesterol levels, liver function, fertility, thyroid and more</li>
                                                        <li>Confidential results in as little as 24 hours for most tests </li>
                                                        <li>Network location solutions</li>
                                                        <li>Confidential results</li>
                                                        <li>Includes your immediate family</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- How It works -->
                                        <div role="tabpanel" class="tab-pane">
                                            <div class="item-header">
                                                <h1>Manage your health, <small>on your terms, at your convenience.</small></h1>
                                            </div>
                                            <p>
                                                Lab testing made easy… It’s as simple as:
                                            </p>
                                            <ol>
                                                <li> Log on to the member portal or call member services Monday to Friday, 7:00 am to 7:00pm and Saturday, 8:00am to 5:00pm Central Time. </li>
                                                <li> Find a location near you, then place your order online or by phone.</li>
                                                <li> Confidential results in 24-48 hours, with members saving an average of 10%-80%.</li>
                                            </ol>

                                        </div>
                                        <!-- Why Us -->
                                        <div role="tabpanel" class="tab-pane">
                                            <div class="item-header">
                                                <h1>Aside from the obvious savings benefits,<small>there are a number of reasons our members turn to us for lab testing.</small></h1>
                                            </div>
                                            <!-- <p>
                                                To name a few:
                                            </p> -->
                                            <ul>
                                                <li>Obtain Peace of mind, cheaper labs means more labs, and this helps establishing a baseline to monitor your health over time.</li>
                                                <li>Maintain Privacy â€“ our services are confidential so no one will see your test results! We take your right to privacy seriously. </li>
                                                <li>Keep an excellent health profile with our private labs. Unfortunately, lab tests ordered by your physician become part of your permanent medical record. Your lab profile can become an aid instead of a hindrance
                                                    in your permanent medical record by being proactive with your results. </li>
                                                <li>Having records on hand â€“ walking into your doctorâ€™s office with test results in hand will save time and allow for a more in-depth discussion of specific concerns.</li>
                                            </ul>
                                            <p>
                                                As a promotion to new members we are offering a 30 day free trial with access to all benefits. Plus, we offer our customers a 30 day money back satisfaction guarantee.
                                            </p>
                                            <p>
                                                For less than $1 per day we can save our members potentially thousands each year on out-of-pocket costs for health care.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- Lab Slide End -->

                                <!-- Pharmacy Slide Start -->
                                <div class="item">
                                    <div class="tab-content">
                                        <!-- How It Works -->
                                        <div role="tabpanel" class="tab-pane active">
                                            <div class="item-header">
                                                <h1>Combat rising prescription costs with our<br />savings plan.</h1>
                                                <h2>Our average member saves 46% on medication, which can amount to some serious money back in your pocket.</h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="thumbnail">
                                                        <img src="img/image_pharmacy.png" alt="Pharmacy" />
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <p>Benefits Include:</p>

                                                    <ul>
                                                        <li>Members can compare prescription prices and find participating locations</li>
                                                        <li>Receive your discount immediately at purchase</li>
                                                        <li>Supported by most pharmacies</li>
                                                        <li>Works with or without insurance</li>
                                                        <li>Includes your immediate family</li>
                                                        <li>Members save 10% to 85% on most prescriptions</li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- How It Works -->
                                        <div role="tabpanel" class="tab-pane">
                                            <div class="item-header">
                                                <h1>Before you pick up your medication just make sure your membership card is in your wallet.</h1>
                                            </div>
                                            <p>
                                                Getting you're discount on your meds is as easy as 1-2-3:
                                            </p>
                                            <ol>
                                                <li> Locate a pharmacy near you, then log on to the member portal or call member services Monday to Friday, 7:00 am to 7:00pm and Saturday, 8:00am to 5:00pm Central Time. </li>
                                                <li> Present your membership card along with your prescription to the pharmacist. Ask the pharmacist to compare our contracted discount price with the pharmacyâ€™s retail price when the prescription is processed.
                                                    You will pay the lower of the two prices at point of sale.</li>
                                                <li> Receive instant savings on out of pocket expenses, members save an average of 10%-85%.</li>
                                            </ol>

                                        </div>
                                        <!-- Why Us -->
                                        <div role="tabpanel" class="tab-pane">
                                            <div class="item-header">
                                                <h1>Simple, members save 10% to 85% on most prescriptions at 60,000 pharmacies nationwide including CVS, Walgreens, Target and more. Just present their card to save an average of 46% on their prescriptions. </h1>
                                            </div>
                                            <p>
                                                Not all prescription discount cards are created equal! There are a lot of services out there claiming big savings on prescriptions, but the truth is not all are the same. In fact most donâ€™t offer any savings at all, especially on brand name drugs. We
                                                work hard to make sure our members have the best savings possible.
                                            </p>
                                            <p>
                                                As a promotion to new members we are offering a 30 day free trial with access to all benefits. Plus, we offer our customers a 30 day money back satisfaction guarantee.
                                            </p>
                                            <p>
                                                For less than $1 per day we can save our members potentially thousands each year on out-of-pocket costs for health care.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- Pharmacy Slide End -->

                                <!-- Vision Slide Start-->
                                <div class="item">
                                    <div class="tab-content">
                                        <!-- Highlights -->
                                        <div role="tabpanel" class="tab-pane active">
                                            <div class="item-header">
                                                <h1>Your eyes are the windows to your health.</h1>
                                                <h2> See better and receive 10% to 60% discounts on eyewear and eye care at more than 20,000 vision providers.</h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="thumbnail">
                                                        <img src="img/image_vision.png" alt="vision" />
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <p>Benefits Include:</p>
                                                    <ul>
                                                        <li>Use As Often As Needed</li>
                                                        <!-- <li>Works with insurance and great when coverage is exhausted.</li> -->
                                                        <li>40% to 50% off the national average cost of LASIK surgery</li>
                                                        <li>20% to 60% off prescription eyewear including most frames, lenses and specialty items such as tints, coatings and UV protection</li>
                                                        <li>10% to 30% off eye exams</li>
                                                        <li>Participating chains include LensCrafters, Pearle Vision, Visionworks, JCPenney, Sears, Target and more</li>
                                                        <!-- <li>Your eye doctor not in our network? The nomination process is a breeze!</li>
                                                <li>10% to 40% off contact lenses through Americaâ€™s Eyewear mail order service</li>
                                                <li>You receive exclusive access to the lowest contact lens prices through Americaâ€™s Eyewear mail order service</li>
                                                <li>15% to 40% eyeglasses and sunglasses through FramesDirect.com</li> -->

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- How It works -->
                                        <div role="tabpanel" class="tab-pane">
                                            <div class="item-header">
                                                <h1>Saving money on vision care has never been easier. </h1>
                                            </div>
                                            <p>
                                                When it's time for an exam, some new eyewear, or a procedure simply:
                                            </p>
                                            <ol>
                                                <li>Log on to the member portal or call member services Monday to Friday, 7:00 am to 7:00pm and Saturday, 8:00am to 5:00pm Central Time. </li>
                                                <li>Find a participating facility nearest you or mail order your contact lenses, eyeglasses, sunglasses, and frames.</li>
                                                <li>Receive instant savings on out of pocket expenses, members save an average of 10%-60% with purchase.</li>
                                            </ol>

                                        </div>
                                        <!-- Why Us -->
                                        <div role="tabpanel" class="tab-pane">
                                            <div class="item-header">
                                                <h1>Pay less and get more on eyewear and eye care at more than 20,000 vision providers throughout the United States.<small> Providers include national optical chains such as Target, LensCrafters, Pearle Vision, Visionworks, JCPenney, and Sears as well as regional chains and thousands of independent practitioners.</small></h1>
                                            </div>
                                            <p>
                                                As a promotion to new members we are offering a 30 day free trial with access to all benefits. Plus, we offer our customers a 30 day money back satisfaction guarantee.
                                            </p>
                                            <p>
                                                For less than $1 per day we can save our members potentially thousands each year on out-of-pocket costs for health care.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- Vision Slide End-->

                                <!-- Diabetic Slide Start -->
                                <div class="item">
                                    <div class="tab-content">
                                        <!-- Highlights -->
                                        <div role="tabpanel" class="tab-pane active">
                                            <div class="item-header">
                                                <h1>Cheaper diabetic testing supplies for convenient and better care.</h1>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="thumbnail">
                                                        <img src="img/image_diabetic.png" alt="Diabetic Supplies" />
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <p>
                                                        Diabetes can be hard to manage, but big savings on supplies can make life easier. Members get 60% off average retail prices and free shipping on all packages, and an extra 15% off any single order item.
                                                    </p>
                                                    <ul>

                                                        <li>Full line of superior state of the art technology, products, and services.</li>
                                                        <li>Save big on supplies, paying 60% less then retail prices.</li>
                                                        <li>Packages include a premier glucose meter, control solution, test strips, lancets and lancing device</li>
                                                        <li>Packages are $29.99 to $169.99 per month</li>
                                                        <li>Easy ordering, regular shipments
                                                            <!-- and convenient home delivery. Use As Often As Needed -->
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- How It works -->
                                        <div role="tabpanel" class="tab-pane">
                                            <div class="item-header">
                                                <h1>As a member, getting your supplies is made easy.</h1>
                                                <h2>When you’re running low on supplies, simply:</h2>
                                            </div>
                                            <ol>
                                                <li>Log on to the member portal or call member services Monday to Friday, 8:00 am to 5:00pm Central Time. </li>
                                                <li>Click on diabetic supplies, choose a package that suits your needs. Each package is designed on how many times a day you test and place your order. </li>
                                                <li>Thatâ€™s it! Your supplies will be shipped to you.</li>
                                            </ol>
                                        </div>
                                        <!-- Why Us-->
                                        <div role="tabpanel" class="tab-pane">
                                            <div class="item-header">
                                                <h1>Example Of Savings</h1>
                                            </div>

                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>Company</p>
                                                        </td>
                                                        <td>
                                                            <p>Glucose Meter</p>
                                                        </td>
                                                        <td>
                                                            <p>Test Strips 50ct</p>
                                                        </td>
                                                        <td>
                                                            <p>Lancing Device</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">
                                                            <p>Drugstore.com</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Freestyle<br /> Accu-Check Advantage<br /> One Touch Ultra <br /> BD</p>
                                                        </td>
                                                        <td>
                                                            <p>$72.49<br /> $65.79<br /> $69.99<br /> $73.29</p>
                                                        </td>
                                                        <td>
                                                            <p>$47.29<br /> $49.99<br /> $51.99<br /> $46.29</p>
                                                        </td>
                                                        <td>
                                                            <p>$11.79<br /> $13.99<br /> $10.89<br /> $13.59</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">
                                                            <p>CVS</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Freestyle<br /> Accu-Check Advantage<br /> One Touch Ultra<br /> BD</p>
                                                        </td>
                                                        <td>
                                                            <p>$74.99<br /> $65.99<br /> $69.99<br /> $74.99</p>
                                                        </td>
                                                        <td>
                                                            <p>$50.99<br /> $44.99<br /> $49.99<br /> $44.99</p>
                                                        </td>
                                                        <td>
                                                            <p>$11.89<br /> $11.99<br /> $11.99<br /> $9.99</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">
                                                            <p>Walgreens</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Freestyle<br /> Accu-Check Advantage<br /> One Touch Ultra<br /> BD</p>
                                                        </td>
                                                        <td>
                                                            <p>$74.99<br /> $67.99<br /> $84.99<br /> N/A</p>
                                                        </td>
                                                        <td>
                                                            <p>N/A<br /> $51.99<br /> $51.99<br /> N/A</p>
                                                        </td>
                                                        <td>
                                                            <p>N/A <br /> $14.99<br /> N/A<br /> N/A</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>VIP Diabetic Plan</p>
                                                        </td>
                                                        <td>
                                                            <p>FREE</p>
                                                        </td>
                                                        <td>
                                                            <p>$29.99</p>
                                                        </td>
                                                        <td>
                                                            <p>$7.99</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                                <!-- Diabetic Slide End -->

                            </div>
                            <div class="panel-footer">
                                <a class="tabSelect" data-target="0" data-slider="#sliders">Highlights</a> <a class="tabSelect" data-target="1" data-slider="#sliders">How It Works</a> <a class="tabSelect" data-target="2" data-slider="#sliders">Why Us</a>
                            </div>

                        </div>
                        <p class="font-style_italic">
                            Package Includes:
                        </p>

                        <ul class="wrapper wrapper-indicators carousel-indicators">
                            <li class="indicator active" data-target="#sliders" data-slide-to="0">
                                <img src="img/icon_imaging.png" alt="Imaging" />
                                <div class="label">Imaging</div>
                            </li>
                            <li class="indicator" data-target="#sliders" data-slide-to="1">
                                <img src="img/icon_telehealth.png" alt="Imaging" />
                                <div class="label">TeleHealth</div>
                            </li>
                            <li class="indicator" data-target="#sliders" data-slide-to="2">
                                <img src="img/icon_dental.png" alt="Dental" />
                                <div class="label">Dental</div>
                            </li>
                            <li class="indicator" data-target="#sliders" data-slide-to="3">
                                <img src="img/icon_labtesting.png" alt="Imaging" />
                                <div class="label">Lab Testing</div>
                            </li>
                            <li class="indicator" data-target="#sliders" data-slide-to="4">
                                <img src="img/icon_pharmacy.png" alt="Imaging" />
                                <div class="label">Pharmacy</div>
                            </li>
                            <li class="indicator" data-target="#sliders" data-slide-to="5">
                                <img src="img/icon_vision.png" alt="Imaging" />
                                <div class="label">Vision</div>
                            </li>
                            <li class="indicator" data-target="#sliders" data-slide-to="6">
                                <img src="img/icon_diabetic.png" alt="Imaging" />
                                <div class="label">Diabetic</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Left info end -->

            </div>

        </div>


    </div>

    <div class="panel panel-flat" id="shadow-box" style="display:none;">
    <div class="container sml">
        <div class="panel-heading">
            <h1 class="great-light">Let's create your account.</h1>
            <h2 class="great-light">This will only take a couple minutes, then we will send your membership material.</h2>
        </div>

        <div class="panel-body">
            <div class="padding-sides">
                <div class="row padding-sides">
                    <div class="col-md-4">
                        <div class="wrapper icon-point active">
                            <div class="thumbnail">
                                <img src="img/icon_email.png" />
                            </div>
                            <h1>Contact Information</h1>
                            <p>
                                Tell us what contact we should use for your member ID.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wrapper icon-point">
                            <div class="thumbnail">
                                <img src="img/icon_verify-user.png" />
                            </div>
                            <h1>Verify Identity</h1>
                            <p>
                               We are required to identify our members to activate each ID.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wrapper icon-point">
                            <div class="thumbnail">
                                <img src="img/icon_clipboard_check.png" />
                            </div>
                            <h1>Finished</h1>
                            <p>
                                We will process your membership and get you on the way to start saving.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <form class="pcs_form" id="mtr_healthbenefits_form" action="myAjaxCallURI" method="post" >
               <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                <div class="form-group">
                    <div class="col-xs-12">
                        <hr />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label>First Name</label>
                        <input type="text" class="form-control " placeholder="First Name" name="firstName" id="firstName" />
                        <span class="validation_errors" id="fnameValidationDisplay"></span>
                    </div>
                    <div class="col-md-6">
                        <label>Last Name</label>
                        <input type="text" class="form-control " placeholder="Last Name" name="lastName" id="lastName" />
                        <span class="validation_errors" id="lnameValidationDisplay"></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label>Phone</label>
                        <input type="tel" class="form-control" placeholder="(123) 345-6789" name="txtPhoneNumber" id="txtPhoneNumber" />
                        <span class="validation_errors" id="phnValidationDisplay"></span>
                    </div>
                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="you@example.com" name="txtEmailAddress" id="txtEmailAddress" />
                        <span class="validation_errors" id="emailValidationDisplay"></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <hr />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <p class="copy-disclaimer vertical-middle">By continuing, I agree and have read the <a data-toggle="modal" data-target="#terms">terms</a> &amp; the <a data-toggle="modal" data-target="#privacy_policy">privacy policy</a></p>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" id="continue-1" class="btn btn-green-stripe btn-block btn-lg">Continue</button>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <hr />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
    

<div class="container" id="shadow-box-2" style="display:none;">
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h1 class="great-light">Great <span id="userFirstName"></span>, we're ready to get you started!</h1>
            <h2 class="great-light">Please verify your Identity, and we are ready to activate your trial membership so you can start your savings. </h2>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="discount_plan">Discount Plan Application</div>
                <div class="col-md-6 border-side-right" style="padding-right: 55px;">

                    <div class="panel-heading step2">
                        <h2>Your receiving Pure Care Benefits. Prime-Care Plus which includes:</h2>
                    </div>
                    <!-- <h2 class="margin-top_none"></h2> -->
                    <div class="row">
                        <div class="col-md-8 border-side-right">
                            <ul class="list-tick">
                                 <li>MRI &amp; CT Scans</li>
                                 <li>Lab Testing</li>
                                 <li>Dental Care</li>
                                 <li>Diabetic Care</li>
                                 <li>Vision Care</li>
                                 <li>Doctors By Phone</li>
                                 <li>Pharmacy</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div style="padding-top: 40px;" class="wrapper wrapper-red">
                                <h1><span>$</span>24.94</h1>
                                <h2>30-DAY TRIAL APPLIED</h2>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper wrapper-mail">
                        <div class="header-wrapper">
                            <h1>Order Summary:</h1>
                        </div>
                        <div class="body-wrapper">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img src="img/image-usps.png" />
                                    </div>
                                </div>
                                <div class="col-md-8 pakage-prs">
                                     Package: .............................................Prime-Care Plus
                                     Package Shipping Type: .............Free Priority Shipping
                                     One-Time Registration Fee: .................................$4.95
                                     Free 30 Day Trial: ............................................. -$24.95
                                </div>
                            </div>
                        </div>
                        <div class="footer-wrapper">
                            Your Total Today:.................$4.95
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-form-flat">
                        <div class="panel-heading">
                            <h1 class="blue_underline_header">Payment Information</h1>
                        </div>
                        <div class="panel-body">
                            <form id="mtr_healthbenefits_form" action="myCallURI" method="post">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                                <input type="hidden" name="txtEmailAddress1" id="txtEmailAddress1" />
                                <div class="form-group">


                                    <div class="col-md-6">
                                        <label>We Accept</label>
                                        <div>
                                            <img src="img/icon_visa.png" alt="We accept Visa" />
                                            <img src="img/icon_mastercard.png" alt="We accept MasterCard" />
                                            <img src="img/icon_discover.png" alt="We accept Discover" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Credit Card #</label>
                                        <input type="tel" class="form-control" name="txtCCNumber" id="txtCCNumber" />
                                        <span class="validation_errors" id="ccValidationError"></span>
                                    </div>
                                </div>
                                <div class="spacer">
                                </div>
                                <div class="form-group">

                                    <div class="col-md-6">
                                        <label>Exp Date</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select class="form-control" id="exampleSelect1">
                                                          <option value="1">1</option>
                                                          <option value="2">2</option>
                                                          <option value="3">3</option>
                                                          <option value="4">4</option>
                                                          <option value="5">5</option>
                                                          <option value="6">6</option>
                                                          <option value="7">7</option>
                                                          <option value="8">8</option>
                                                          <option value="9">9</option>
                                                          <option value="10">10</option>
                                                          <option value="11">11</option>
                                                          <option value="12">12</option>
                                                        </select>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" id="exampleSelect1">
                                                <option value="17">2017</option>
                                                <option value="18">2018</option>
                                                <option value="19">2019</option>
                                                <option value="20">2020</option>
                                                <option value="21">21</option>
                                                          <option value="22">2022</option>
                                                          <option value="23">2023</option>
                                                          <option value="24">2024</option>
                                                          <option value="25">2025</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>CVV2/CID <a data-toggle="popover" data-placement="bottom" data-content="&lt;img style='width: 220px;' src='img/image_cvv.jpg' /&gt;">What's this?</a></label>
                                        <input type="tel" class="form-control" name="txtCVV" id="txtCVV" />
                                        <span class="validation_errors" id="cvvValidationError"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="as_regular_text">
                                        Is your billing address the same as your shipping address?
                                        <span class="float_right">
                                            <span class="vertical_input_wrapper">
                                                <input type="radio" value="Yes" name="txtBilling" id="txtYes" /> Yes
                                            </span>
                                            <span class="vertical_input_wrapper">
                                                <input name="txtBilling" type="radio" value="No" id="txtNo" /> No
                                            </span>
                                        </span>
                                    </label>

                                    </div>
                                </div>
                                
                                <div class="col-md-12" id="billing-address" style="display:none;">
                            <div id="bill-address">
                                <h5>Billing Address</h5>
                                    <input type="text" id="txtBillingAddressOne" name="txtBillingAddressOne" placeholder="Address 1" value="" class="add-1" />
                                    <span id="txtBAE"></span>
                                    <input type="text" id="txtBillingAddressTwo" name="txtBillingAddressTwo" placeholder="Address 2" value="" class="add-1" />
                                    <input type="text" id="txtBillingCity" name="txtBillingCity" placeholder="City" value="" />
                                    <span id="txtBCE"></span>
                                    <input type="text" id="txtBillingZip" name="txtBillingZip" placeholder="Zip Code" value="" />
                                    <span id="txtBZE"></span>
                                    <select id="txtBillingState" name="txtBillingState">
                                        <option value="">State</option>
                                         <option value="AL">ALABAMA</option>
                                          <option value="AK">ALASKA</option>
                                           <option value="AZ">ARIZONA</option>
                                           <option value="AR">ARKANSAS</option>
                                           <option value="CA">CALIFORNIA</option>
                                           <option value="CO">COLORADO</option>
                                           <option value="CT"> CONNECTICUT</option>
                                           <option value="DE">DELAWARE</option>
                                           <option value="FL">FLORIDA</option>
                                           <option value="GA">GEORGIA</option>
                                           <option value="HI">HAWAII</option>
                                           <option value="ID">IDAHO</option>
                                           <option value="IL">ILLINOIS</option>
                                           <option value="IN">INDIANA</option>
                                           <option value="IA">IOWA</option>
                                           <option value="KY">KENTUCKY</option>
                                           <option value="LA">LOUISIANA</option>
                                           <option value="ME">MAINE</option>
                                           <option value="MD">MARYLAND</option>
                                           <option value="MA">MASSACHUSETTS</option>
                                           <option value="MI">MICHIGAN</option>
                                           <option value="MN">MINNESOTA</option>
                                           <option value="MS">MISSISSIPPI</option>
                                           <option value="MO">MISSOURI</option>
                                           <option value="MT">MONTANA</option>
                                           <option value="NE">NEBRASKA</option>
                                           <option value="NV">NEVADA</option>
                                           <option value="NH">NEW HAMPSHIRE</option>
                                           <option value="NJ">NEW JERSEY</option>
                                           <option value="NM">NEW MEXICO</option>
                                           <option value="NY">NEW YORK</option>
                                           <option value="NC">NORTH CAROLINA</option>
                                           <option value="ND">NORTH DAKOTA</option>
                                           <option value="OH">OHIO</option>
                                           <option value="OK">OKLAHOMA</option>
                                           <option value="OR">OREGON</option>
                                           <option value="PA">PENNSYLVANIA</option>
                                           <option value="RI">RHODE ISLAND</option>
                                           <option value="SC">SOUTH CAROLINA</option>
                                           <option value="SD">SOUTH DAKOTA</option>
                                           <option value="TN">TENNESSEE</option>
                                           <option value="TX">TEXAS</option>
                                           <option value="VA">VIRGINIA</option>
                                           <option value="WV">WEST VIRGINIA</option>
                                           <option value="WI">WISCONSIN</option>
                                           <option value="WY">WYOMING</option>
                                    </select>
                                    <span id="txtBSE"></span>
                            </div>
                            <div id="ship-address"><h5>Shipping Address</h5>

                                
                                    <input type="text" name="txtShippingAddressOne" placeholder="Address 1" value="" class="add-1" />
                                    <input type="text" name="txtShippingAddressTwo" placeholder="Address 2" value="" class="add-1" />
                                    <input type="text" name="txtShippingCity" placeholder="City" value="" />
                                    <input type="text" name="txtShippingZip" placeholder="Zip Code" value="" />
                                    <select name="txtShippingState">
                                        <option value="">State</option>
                                         <option value="AL">ALABAMA</option>
                                          <option value="AK">ALASKA</option>
                                           <option value="AZ">ARIZONA</option>
                                           <option value="AR">ARKANSAS</option>
                                           <option value="CA">CALIFORNIA</option>
                                           <option value="CO">COLORADO</option>
                                           <option value="CT"> CONNECTICUT</option>
                                           <option value="DE">DELAWARE</option>
                                           <option value="FL">FLORIDA</option>
                                           <option value="GA">GEORGIA</option>
                                           <option value="HI">HAWAII</option>
                                           <option value="ID">IDAHO</option>
                                           <option value="IL">ILLINOIS</option>
                                           <option value="IN">INDIANA</option>
                                           <option value="IA">IOWA</option>
                                           <option value="KY">KENTUCKY</option>
                                           <option value="LA">LOUISIANA</option>
                                           <option value="ME">MAINE</option>
                                           <option value="MD">MARYLAND</option>
                                           <option value="MA">MASSACHUSETTS</option>
                                           <option value="MI">MICHIGAN</option>
                                           <option value="MN">MINNESOTA</option>
                                           <option value="MS">MISSISSIPPI</option>
                                           <option value="MO">MISSOURI</option>
                                           <option value="MT">MONTANA</option>
                                           <option value="NE">NEBRASKA</option>
                                           <option value="NV">NEVADA</option>
                                           <option value="NH">NEW HAMPSHIRE</option>
                                           <option value="NJ">NEW JERSEY</option>
                                           <option value="NM">NEW MEXICO</option>
                                           <option value="NY">NEW YORK</option>
                                           <option value="NC">NORTH CAROLINA</option>
                                           <option value="ND">NORTH DAKOTA</option>
                                           <option value="OH">OHIO</option>
                                           <option value="OK">OKLAHOMA</option>
                                           <option value="OR">OREGON</option>
                                           <option value="PA">PENNSYLVANIA</option>
                                           <option value="RI">RHODE ISLAND</option>
                                           <option value="SC">SOUTH CAROLINA</option>
                                           <option value="SD">SOUTH DAKOTA</option>
                                           <option value="TN">TENNESSEE</option>
                                           <option value="TX">TEXAS</option>
                                           <option value="VA">VIRGINIA</option>
                                           <option value="WV">WEST VIRGINIA</option>
                                           <option value="WI">WISCONSIN</option>
                                           <option value="WY">WYOMING</option>
                                    </select>

                                

                            </div>
                     </div>

                                <div id="toggle_address" class="collapse">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <hr />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label>Address</label>
                                            <input type="text" value="" class="form-control" />
                                        </div>
                                        <div class="col-md-6">
                                            <label>Address 2</label>
                                            <input type="text" value="" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label>City</label>
                                            <input type="text" value="" class="form-control" />
                                        </div>
                                        <div class="col-md-6">
                                            <label>Zip</label>
                                            <input type="tel" value="" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>State</label>
                                            <select class="form-control">
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District Of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <hr />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="toggle_business_address" class="collapse">

                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label>Billing Address</label>
                                            <input type="text" value="" class="form-control" />
                                        </div>
                                        <div class="col-md-6">
                                            <label>Billing Address 2</label>
                                            <input type="text" value="" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label>Billing City</label>
                                            <input type="text" value="" class="form-control" />
                                        </div>
                                        <div class="col-md-6">
                                            <label>Billing Zip</label>
                                            <input type="tel" value="" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Billing State</label>
                                            <select class="form-control">
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District Of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <hr />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="thumbnail" style="padding-top: 20px;">
                                            <img src="img/icon_comodo.png" alt="Comodo SSL Certificate" />
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        
                                        <button type="submit" id="continue-2" class="btn btn-green-stripe btn-block btn-lg">Start My Trial</button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="side-icon lock">
                                        <div class="side-icon-body">
                                            <h2>Shop With Confidence</h2>
                                            <p>
                                                PCH Health Benefits is safe and secure. Guaranteed!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="side-icon shield">
                                        <div class="side-icon-body">
                                            <h2>Privacy Secured</h2>
                                            <p>
                                                Your information is <strong>NOT</strong> sold.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="panel-footer safe-purchase">
                <h1>SAFE PURCHASE - <small>Tested &amp; Inspected Guaranteed</small></h1>
                <p>
                    The Pure Care Benefits health Savings plan is paid monthly at the offer price listed. The monthly payment program contains a one-time registration fee of $4.95 and offers you a 30 day trial period. There are no contracts and you can cancel any time simply by calling us at (844) 859-2079. This service can be used as many times as needed for you and your immediate family members.
                </p>
            </div>
        </div>
    </div>
</div>

    <div class="panel panel-flat" id="shadow-box-3" style="display:none;">
    <div class="container md">
    <iframe width='1' height='1' frameborder='0' src='https://www.pcstrker.com/rd/ipx.php?hid=[HID_VALUE]&sid=11&transid=[UNIQUE_TRANSACTION_ID]'></iframe>
        <div class="panel-heading">
            <h1>Congratulations!</h1>
            <h2>You have taken the first steps towards a more convenient and simple way to address your health care needs.</h2>
        </div>

        <div class="panel-body">
            <div class="padding-sides text-center">
                <div>
                    <h1 class="blue_underline_header centered-underline">Thank you for choosing Pure Care Benefits.</h1>
                    <p>
                        We are excited to help you start your health savings and grant you access to all the services in the premium package you have selected. You will receive your member kit in 7-10 business days which includes your Handbook and ID card(s).
                    </p>
                </div>
            </div>
        </div>

        <div class="row text-md">
            <div class="col-md-6">
                <div class="padding">
                    <div class="info hr">
                        <span> </span>
                    </div>

                    <p>
                       Once you receive your documentation you can then start to use the services in your plan immediately!
                    </p>
                    <p>
                        <a href="#">You may also confirm by email or phone right now,</a> <br /> then we will send you a digital copy that will allow you to start using services in less than 48 hours.
                    </p>
                    <p class="text-danger">
                        Please check your email address for confirmation. If you do not see any emails from us within 1 hour, please check your spam folder and un-spam our email address.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="padding margin-top">
                    <div class="well blue-faded text-center">
                        <p>
                            We will continue to send you details about your package and<br /> additional free benefits by email.
                        </p>
                        <p>
                            If you have any questions please feel free to email us at<br /> <a>support@pcshealthbenefits.com</a><br /> or call us directly.
                        </p>
                        <p>
                            Pure Care Benefits<br />
                            <strong class="text-md">(844) 859-2079</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


   

    <!-- About Us Start -->
    <div id="about_us" class="wrapper wrapper-logo">
        <div class="container">
            <div class="panel panel-about">
                <div class="panel-header">
                    <h1 class="type type-cursive header">About Us</h1>
                </div>
                <div class="panel-body">
                    <p class="we-are-changing">
                        <b>We are changing the way health care is done</b>, by speeding up care, reducing costs, and cutting out the stress.
                        <br /> Pure Care Benefits is a breakthrough web-based service that empowers individuals to understand and improve their health in a personalized and engaging way. Through video, phone, chat, and mobile devices we deliver access
                        to advanced health care with progressive first-class health practitioners. Our Goal is to create cost effective services that improve the affordability and accessibility of quality health solutions for insured and uninsured individuals.
                        In addition to Immediate 24/7 health care, our<br /> members can save potentially thousands on out of pocket health care costs each year.
                    </p>

                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class='col-md-6'>
                            <div class="icon">
                                <img src="img/icon_visa.png" alt="Visa Card" />
                            </div>
                            <div class="icon">
                                <img src="img/icon_master.png" alt="Master Card" />
                            </div>
                            <div class="icon">
                                <img src="img/icon_discover.png" alt="Discover Card" />
                            </div>
                            <div class="icon">
                                <img src="img/icon_comodo.png" alt="Trusted by Comodo" />
                            </div>
                        </div>

                        <div class="col-md-6 text-align-right">
                            <div class="icon">
                                <img src="img/logo.png" alt="Pure Care Benefits" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Disclaimer Section Start -->
    <div class="wrapper wrapper-disclaimer">
        <div class="container">
            <p class="ft1">
                When you complete your order for your Free 30 Day trial, you will begin your trial membership and only be charged the $4.95 one-time registration fee. After the trial ends, you will be billed $24.95 per month. You will have a 30 day cancellation period
                with a reimbursement of all periodic membership fees. Residents in AR and TN will also be refunded the registration fee if the membership is cancelled within the 30 day trial period or 30 day cancellation period.
            </p>
        </div>

        <hr />

        <div class="container">

            <section class="ft1">

                                    <!-- RSS Disclousres RSS -->
                <!-- <div id="rss-disclaimer">RSS DISCLAIMER</div> -->
                <div id="rss-disclaimer-direct"></div>
                <div id="rss-summary" style="display:none;"></div>

                <div id="rss-disclaimer-dental"></div>
                <div id="rss-disclaimer-dental"></div>
                <div id="rss-disclaimer-tela">
                </div>
                <!-- Use RSS Teladoc End-->
                <div id="rss-disclaimer-lab">
                </div>

                <h5>Service not available in  KS, UT, VT, WA residents.</h5>
            </section>
            <!--<h1>DISCLOSURES</h1>

            <p>
                <strong>This discount card program is NOT insurance</strong>, not intended to replace insurance, and does not meet the minimum creditable coverage requirements under the Affordable Care Act or Massachusetts M.G.L. c. 111M and 956 CRM 5.00.
                <strong>It contains a 30 day cancellation period</strong>, provides discounts only at the offices of contracted health care providers, and each member is obligated to pay the discounted medical charges in full at the point of service.
                For a complete list of disclosures, please click here. | Terms and Conditions | Discount Medical Plan Organization: New Benefits, Ltd., Attn: Compliance Department, PO Box 671309, Dallas, TX 75367-1309.
            </p>
            <div class="font-style-italic">
                <p>
                    Dental Benefit is not available to VT residents.
                </p>

                <p>
                    The discount program provides access to the Aetna Dental AccessÂ® network. This network is administered by Aetna Life Insurance Company (ALIC). Neither ALIC nor any of its affiliates offers or administers the discount program. Neither ALIC nor any of its
                    affiliates is an affiliate, agent, representative or employee of discount program. Dental providers are independent contractors and not employees or agents of ALIC or its affiliates. ALIC does not provide dental care or treatment and
                    is not responsible for outcomes.
                </p>

                <p>
                    This plan does not make payments directly to the providers of medical services. Member shall receive a reimbursement of all periodic membership fees if membership is cancelled within the first 30 days after the effective date.
                </p>

                <p>
                    Â© 2017 Teladoc, Inc. All rights reserved. Teladoc and the Teladoc logo are registered trademarks of Teladoc, Inc. and may not be used without written permission. Teladoc does not replace the primary care physician. Teladoc does not guarantee that a prescription
                    will be written. Teladoc operates subject to state regulation; phone and/or video consultations may not be available in certain states. Consults are not available outside of the U.S. Teladoc does not prescribe DEA controlled substances,
                    non-therapeutic drugs and certain other drugs which may be harmful because of their potential for abuse. Teladoc physicians reserve the right to deny care for potential misuse of services. Teladoc phone consultations are available
                    24 hours, 7 days a week while video consultations are available during the hours of 7am to 9pm, 7 days a week. Teladoc operates subject to state regulation. Click here to view a Teladoc Access Map
                </p>

                <p>
                    Lab benefit not available to HI, MA, MD, ND, NJ, NY, RI or SD residents.
                </p>
            </div>
            <p>
                Service not available in KS, UT, VT, WA residents.
            </p>-->
            <br />  <p class="footer-nav">
    Call Toll Free (844) 859-2079 | <a data-toggle="modal" data-target="#satisfaction" >Refund Guarantee</a> | <a data-toggle="modal" data-target="#contact-mdl" >Contact Us</a> | <a data-toggle="modal" data-target="learn_more.html#rss-faq">FAQ</a> | <a data-toggle="modal" data-target="#terms">Terms &amp; Conditions</a> | <a data-toggle="modal" data-target="#privacy_policy">Privacy Policy</a> | <a href="learn_more.html">Learn More</a>
</p>

            <p>
                <strong>Form #: CC-PCS050387 </strong>
            </p>
        </div>
    </div>

    <!-- Start Privacy Policy -->
    <div class="modal fade" id="privacy_policy" tabindex="-1" role="dialog" aria-labelledby="privacyLable">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    <h4 class="modal-title" id="privacyLable">Privacy Policy</h4>
                </div>
                <div class="modal-body">
                    <strong>PURE CARE BENEFITS PRIVACY POLICY</strong></h4>
    </div>

    <p>
        CureCareBenefits, (hereinafter referred to as "Company" "we," "us," or "our") takes you privacy seriously. We are committed to advising you of the right to your privacy and recommend that you review the Federal Government's practical tips on guarding your privacy at http://onguardonline.gov/. This Privacy Policy covers the online data collection and usage policies and practices that apply to the "Website Name" (referred to as "Website"). By registering with our Website, you explicitly assent to, without limitation or qualification, the collection, use and transfer of the personal information provided by you in the manner described in this Privacy Policy. We strongly recommend that you take the time to carefully review this Privacy as it affects your rights and liabilities under the law. If you disagree with the way we collect and process personal information or have any concerns, please do not use the Website.
    </p>
    <p>
        <strong>WHAT THIS POLICY COVERS</strong>
    </p>
    <p>
        This Privacy Policy applies to the Website and covers the processing of information relating to you. It grants both us and you various rights with respect to your personal data. It details the type of information we collect, how that information is used, and to whom the information can be provided. In addition, if you want us to stop using your information, the Privacy Policy informs you how to notify us.
    </p>
    <p>
        The Website may also posts links to other websites over which we have no control. As such, we are not responsible for the privacy policies or practices of other websites when you choose to link from the Website. We encourage you to review the privacy policies of those other websites so you can understand how they collect, use and share your information.
    </p>
    <p>
        We also do not control the data use practices of those persons or entities that may access your information on the Website for the purposes of providing the service or product you have requested. We encourage you to review the privacy policies and opt-out choices of those third parties so you can understand how they collect, use and share your information.
    </p>
    <p>
        <strong>INFORMATION COLLECTION AND USE</strong>
    </p>
    <p>
        When you visit and use the website, we collect the following types of information about you: personal information, demographic information, behavioral information, and other information.
    </p>
    <p>
        When you register with the Website, we ask you for information that can be used to identify you, or any other individual to whom the information may relate, personally. We do not collect personal information unless you choose to provide it to us. Some examples of personal information that we collect in some areas of the Website are: first and last name, physical address, email address, telephone number, birth date, bank account information, contact information, and other information you may provide while registering on the Website or communicating with us.
    </p>
    <p>
        Demographic information is information that may or may not be unique to you in that it refers to selected population characteristics. This may include but is not limited to, zip code, cell phone carriers, gender, salary range, education and marital status, occupation, and industry of employment
    </p>
    <p>
        Behavioral information pertains to how you use our site, what services you access, and information about your computer hardware and software including your IP address, geographic location, browser preference, operating system type, domain names, times that you access the Internet and other websites through which you have been referred to us. This information is necessary for analyzing the use of resources, troubleshooting problems, preventing fraud, and improving our services and products.
    </p>
    <p>
        Technology information related to information we automatically collect from you when you open one of our emails or visit our site. This includes information collected from the use of cookies, web beacons or JavaScript.
    </p>
    <p>
        Company may, in certain instances, use bank account information and related information when an individual registers for the Website. When the bank account information is submitted to Company, such information is encrypted and is protected with SSL encryption software. Company will use the bank account information for purposes of processing and completing the transaction you requested on the Website, and the bank account information will be disclosed to third parties as necessary to complete the requested purchase transaction.
    </p>
    <p>
        <strong>CHILDREN</strong>
    </p>
    <p>
        The Company does not knowingly collect any information from children under the age of 13. We will immediately delete any information related to children under 13 if we learn that we have collected any such personal information. Since we do not collect information from children under 13, we have no such information to use or disclose to third parties.
    </p>
    <p>
        <strong>USE OF COOKIES, WEB BEACONS, AND JAVA SCRIPT</strong>
    </p>
    <p>
        <em> <u>Cookies</u> </em>
        <u> </u>are a feature in your browser software. If enabled, we may write cookies that may store small amounts of data on your computer about your visit to any of the pages of the Website. Cookies assist us in tracking which of our features appeal the most to you and what content you may have viewed on past visits. When you visit this site again, cookies can enable us to customize our content according to your preferences. We may use cookies to keep track of the number of return visits to this site; accumulate and report aggregate, statistical information on website usage; deliver specific content to you based on your interests or past viewing history; and save your password for ease of access to our Site. You can disable cookies, although the Website may not function properly for you if you do so. Your browser preferences can be modified to accept or reject all cookies, or request a notification when a cookie is set. You may read more about cookies at http://cookiecentral.com. In order to use all of the features and functionality of Company's websites, you need to accept cookies.
    </p>
    <p>
        We predominately use "session" cookies, which are not permanently stored on your hard drive. Session cookies expire after two hours of inactivity or when you close your browser. When you carry out the purchase of a service or product on our website, a large amount of data is processed by our system and transferred through each page of the search or registration. This information includes all information you input on a registration page or questionnaire you complete as part of the registration process as well as demographic information that is not unique to you. "Session" cookies allow us to keep track of this data until you have completed your search or registration.
    </p>
    <p>
        <em> <u>Web Beacons</u> </em>
        <u> </u> : We also use electronic images known as Web beacons (sometimes called single-pixel gifs, clear gifs or action tags) that allow us to collect certain information about your visit to certain web pages (including the number of users who have visited those pages), measure and improve the effectiveness of advertisements, and deliver services. Web beacons are not used to access your personally identifiable information. Rather, they are a technique used to compile aggregated statistics about website usage. Web beacons collect only a limited set of information including a cookie number, time and date of page view and a description of the page on which the Web beacon resides. This information may be shared with one or more third parties so that they can understand the kinds of visitors to the Web pages, how those visitors use those Web Pages, and the effectiveness of their advertisements. We may also use web beacons in email messages sent to individuals listed in our database.
    </p>
    <p>
        <em> <u>Disabling Web Beacons</u> </em>
        <u> </u> : Because Web beacons are the same as any other content request, you cannot opt out or refuse them. However, they can be rendered ineffective by either opting out of cookies or changing the cookie setup in your browser.
    </p>
    <p>
        <em> <u>JavaScript</u> </em>
        <u> </u> : We may also use JavaScript within certain advertisements. JavaScript is a computer language that enhances the functionality of websites, particularly in respect to pictures. We do not collect any personal data via JavaScript but instead use it to analyze and improve the Website's functions.
    </p>
    <p>
        <em> <u>Disabling JavaScript</u> </em>
        <u> </u> : You may deactivate JavaScript via your browser settings or activate it the same way. If you disable JavaScript you will not be able to use some of the functions of the Website.
    </p>
    <p>
        <em> <u>IP Addresses</u> </em>
        <u> </u> : We automatically track certain information based upon your behavior on the site. We may use this information to do internal research on our users' demographics, interests, and behavior to better understand, protect and serve you and our community. This information may include the URL that you just came from (whether this URL is on the site or not), which URL you next go to (whether this URL is on the site or not), your computer browser information, and your IP address. Your Internet Protocol ("IP") is a unique Internet "address" which is assigned to you by your Internet Service Provider ("ISP"). For local area network ("LAN"), DSL, or cable modem users, an IP address may be permanently assigned to a particular computer. IP addresses are automatically logged by Web servers, which collect information about a user's traffic patterns. While an IP address does not identify an individual by name, it may, with the cooperation of the ISP, be used to locate and identify an individual using the Web. Your IP address can also reveal what geographic area you are connecting from or which ISP you are using. Finally, other websites you visit have IP addresses, and we may collect the IP addresses of those websites and their pages.
    </p>
    <p>
        <em> <u>Computer Profiles</u> </em>
        <u> </u> : Company may also collect and accumulate other anonymous data which will help us understand and analyze the Internet experience of our visitors. For instance, Company may accumulate visitor data relating to referring domain names, the type of browsers used, operating system software, screen resolutions, color capabilities, browser plug-ins, language settings, cookie preferences, search engine keywords and JavaScript enablement. When you provide us with Personal Identification Information, we are able to use such visitor data to identify you.
    </p>
    <p>
        <strong>HOW WE USE THE INFORMATION COLLECTED</strong>
    </p>
    <p>
        Providing Services and Products: We use the information we gather on the Website for the purposes of providing the services and or products you have requested. This may include passing your information on to a third party with whom we have a contract to provide such services. Although our contractual arrangement limits how such third party can use your information, we do not control the privacy practices of this third party. If you have any questions or wish to remove your information from the third party's database, you will need to contact that party directly.
    </p>
    <p>
        Improving our Website: We use the information we gather on the Website to respond to any inquires you make; operate and improve the Website, improve and create a positive user experience.
    </p>
    <p>
        Providing Information about our Services and Products: We may use the information that you provide to keep you up-to-date on our products and services. We will do this through email marketing. If you no longer wish to receive our updates, please email us at optout@purecarebenefits.com.
    </p>
    <p>
        <strong>DISCLOSURE OF INFORMATION TO OTHERS</strong>
    </p>
    <p>
        Product and Service Delivery: We may share your information with third parties who help us in the delivery the products and services you have requested. We disclose information to companies and individuals we employ to perform technical functions on our behalf.
    </p>
    <p>
        <em> <u>Third Party Products and Services</u> </em>
        <u> </u> : We may disclose your information to third parties in order to provide you with information about the opportunities, products or services of third parties. Third parties may in the form of email offers or mobile offers send to this type of marketing or telemarketing calls from third parties.
    </p>
    <p>
        <em> <u>Anonymous Information</u> </em>
        <u> </u> : We also share aggregated anonymous information, including demographic and behavioral information, about you and other persons using the Website with third parties so that they can understand the kinds of visitors to the Website and how those visitors use the Website.
    </p>
    <p>
        <em> <u>Legal Process</u> </em>
        <u> </u> : We will disclose information if legally required to do so, or at our discretion pursuant to a request from a governmental entity or if we believe in good faith â€“ after considering your privacy interests and other factors â€“ that such action is necessary to: (a) conform to legal requirements or comply with legal process; (b) protect our rights or property or our affiliated companies; (c) prevent a crime or protect national security; or (d) protect the personal safety of users or the public.
    </p>
    <p>
        <em> <u>Acquisition or Merger</u> </em>
        <u> </u> : We may disclose and transfer information to a third party who acquires any or all of our business, whether such acquisition is by way of merger, consolidation or purchase of all or a substantial portion of our assets. In addition, in the event we become the subject of an insolvency proceeding, whether voluntary or involuntary, we or our liquidator, administrator, receiver or administrative receiver may sell, license or otherwise dispose of such information in a transaction approved by the court.
    </p>
    <p>
        The recipients of your data may potentially be located in any country in the world.
    </p>
    <p>
        <strong>THIRD PARTY HYPERLINKS</strong>
    </p>
    <p>
        The Website and email messages sometimes contain hypertext links to the websites of third parties. We are not responsible for the privacy practices or the content of such other websites. Such links are provided for your convenience and reference only. We do not operate or control in any respect any information, software, products or services available on such third party websites. The inclusion of a link to a website does not imply any endorsement of the services or the site, its contents, or its sponsoring organization.
    </p>
    <p>
        <strong>USE OF YOUR INFORMATION</strong>
    </p>
    <p>
        Communications via Emails, Text Messages (SMS), Mobile Notifications.
    </p>
    <p>
        <strong> <em> <u>Will I ever receive Spam from Pure Care Benefits or third parties?</u> </em> </strong>
    </p>
    <p>
        <em>
          <u>No. We have a strict "No-Spam" policy. We do not share email addresses or other contact information with third parties without your permission.</u>
      </em>
    </p>
    <p>
        <strong> <em> <u>What is my e-mail address used for?</u> </em> </strong>
    </p>
    <p>
        <em>
          <u>
              Your email address is used to create, log into, and manage your account on PURE CARE Benefits. We use your email to provide you with notices about your account and our services.
          </u>
      </em>
    </p>
    <p>
        <strong>SECURITY</strong>
    </p>
    <p>
        We endeavor to safeguard and protect your information. When you submit information at the website, such information is protected both online and offline. The servers in which we store Personal Information are kept in a secure physical environment. We have security measures in place to protect against the loss, misuse, and alteration of personal information under our control. Currently, we use Secure Socket Layer Software ("SSL") to protect data and to secure any transactions. SSL encrypts information, including credit card numbers, names and addresses as they are transmitted over the Internet. Please be advised that, although we take commercially reasonable technological precautions to protect your data, no data transmission over the Internet can be guaranteed to be 100% secure. Therefore, we cannot and do not warrant that your information will be absolutely secure. Any transmission of data at or through this site is at your own risk. However, access to your information is strictly limited, and we do not authorize members of the public to access your information.
    </p>
    <p>
        <strong>CHANGES TO PRIVACY STATEMENT</strong>
    </p>
    <p>
        We reserve the right to make material changes to the substance of this Privacy Statement. We will post those changes through a prominent notice on the Website so that you will always know what information we gather, how we might use that information, and to whom we will disclose it.
    </p>
    <p>
        <strong>CALIFORNIA RESIDENTS - YOUR RIGHTS</strong>
    </p>
    <p>
        California residents who are users of this site are entitled to know that they may file complaints and grievances with the California Department of Consumer Affairs by emailing dca@dca.ca.gov, calling 800-952-5210, or writing to CDCA, 400 R Street, Suite 1080, Sacramento, CA 95814. You may also request further information about our compliance with this law by e-mailing privacy@purecarebenefits.com.
    </p>
    <p>
        <strong>CONTACT INFORMATION</strong>
    </p>
    <p>
        If you have any questions regarding this Privacy Policy, you may contact us by phone (844) 859-2079,email privacy@pcshealthbenefits.com or write to 150 Westwood Circle East Hills New York 11577-1838 United States. If you would like to opt-out or remove your registration information from our database, please email optout@purecarebenefits.com.
    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Privacy Policy -->
    <!-- Start Terms -->
    <div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="termslable">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    <h4 class="modal-title" id="termslable">Terms and Conditions</h4>
                </div>
                <div class="modal-body">

  <strong>PURE CARE BENEFITS TERMS AND CONDITIONS</strong></h4>
    </div>

   <p>
        CAREFULLY READ THE TERMS AND CONDITIONS OF THIS USE AGREEMENT BEFORE CLICKING THAT YOU AGREE. CLICKING â€œI AGREEâ€ INDICATES YOUR ACCEPTANCE OF THESE TERMS AND CONDITIONS. IF YOU DO NOT AGREE WITH THE TERMS AND CONDITIONS OF THIS USE AGREEMENT, PROMPTLY CLOSE THIS PAGE AND DO NOT PROCEED WITH USE OF OR SUBSCRIPTION TO THE PURE CARE BENEFTS SERVICE, HERETO REFERRED AS PURE CARE. NOTWITHSTANDING THE FOREGOING, YOU ACCEPT THE TERMS AND CONDITIONS OF THIS USE AGREEMENT WHEN YOU DO ANY OF THE FOLLOWING: (1) ACCEPT THE TERMS AND CONDITIONS OF THE USE AGREEMENT THROUGH ANY PRINTED, ORAL, OR ELECTRONIC STATEMENT, INCLUDING ON THE WEB BY ELECTRONICALLY MARKING THAT YOU HAVE REVIEWED AND ACCEPTED; (2) ATTEMPT TO OR IN ANY WAY USE OR SUBSCRIBE TO THE PURE CARE SERVICE; (3) PAY FOR THE PURE CARE SERVICE OR A SUBSCRIPTION TO THE PURE CARE SERVICE (WHETHER YOU PAY DIRECTLY OR SOMEONE ELSE PAYS ON YOUR BEHALF); OR (4) OPEN ANY PACKAGE OR START ANY PROGRAM THAT SAYS YOU ARE ACCEPTING THE TERMS AND CONDITIONS OF THIS USE AGREEMENT BY DOING SO. IF YOU DONâ€™T WANT TO ACCEPT THE TERMS AND CONDITIONS OF THIS USE AGREEMENT, DONâ€™T DO ANY OF THESE THINGS.
    </p>
    <p>
        <strong>TERMS OF USE</strong>
    </p>
    <p>
        The terms of use of the PURE CARE Service as well as any subscription or other service agreement with PURE CARE automatically includes but is not limited to the most recent updated terms and conditions of this Use Agreement regardless of when you first used or subscribed to the PURE CARE Service. PURE CARE has the right to change the terms and conditions of this Use Agreement at any time without notice to you. You may always view the most recent updated terms and conditions at http://www.purecarebenefits.com/terms.Carefully read all parts of this Use Agreement including the MANDATORY ARBITRATION provision and CLASS ACTION WAIVER provision below.
    </p>
    <p>
        You acknowledge and understand that (1) you are using or subscribing to the PURE CARE Service to facilitate the delivery of health care services from providers who have agreed to provide services through the PURE CARE Service (the â€œProvidersâ€), and that such services are provided at the sole discretion and medical judgment of the Providers; (2) accessing the PURE CARE Service from a state other than the Service Line you have requested or subscribed to is prohibited and you confirm that you are physically located in the state in which you are requesting the PURE CARE Service; (3) the PURE CARE Service may not be reimbursable by Medicare, Medicaid, Tricare, or any other government health care program and you agree not to use the PURE CARE Service for any services that are or might be reimbursable by such programs; (4) the PURE CARE Service may not be reimbursable by commercial insurers, managed care organizations, preferred provider organizations, or other payors and you will not seek reimbursement from any such payors for the cost of use of the PURE CARE Service where prohibited or otherwise not permitted by the payors; (5) you are at least 18 years of age or you are accompanied by a parent or guardian who can give informed consent on your behalf if you are under the age of 18 at the time of the consultation; and (6) if you are seeking services on behalf of a child, dependent, or other person for whose medical care you are responsible, your approval of the terms and conditions of this Use Agreement will bind such other person to these terms and conditions.
    </p>
    <p>
        <strong>PRIVACY AND SECURITY; DISCLOSURE</strong>
    </p>
    <p>
        PURE CAREâ€™s Notice of Privacy information may be viewed at http://www.purecarebenefits.com/privacy/. PURE CARE reserves the right to modify its Notice of Privacy Practices in its reasonable discretion from time to time. The Notice of Privacy Practices and any other PURE CARE privacy policies, including any amendments thereto, are incorporated into this Use Agreement in their entirety. If you have any questions about PURE CAREâ€™s Notice of Privacy Practices, or would like to file a written complaint with PURE CARE, please see the contact information for the PURE CARE HIPAA Compliance Officer by referring to the full version of the PURE CAREâ€™s Notice of Privacy Practices at http://www.purecarebenefits.com/privacy/ towards the bottom.
    </p>
    <p>
        <strong>LICENSE GRANT AND RESTRICTIONS</strong>
    </p>
    <p>
        PURE CARE hereby grants you a non-exclusive, non-transferable, worldwide right to use the PURE CARE Service, solely for your own purposes, subject to the terms and conditions of this Use Agreement. All rights not expressly granted to you are reserved by PURE CARE and its licensors.
    </p>
    <p>
        You may not access the PURE CARE Service if you are a direct competitor of PURE CARE, except with PURE CAREâ€™s prior written consent. In addition, you may not access the PURE CARE Service for purposes of monitoring its availability, performance or functionality, or for any other benchmarking or competitive purposes.
    </p>
    <p>
        You shall not (i) license, sublicense, sell, resell, rent, lease, transfer, assign, distribute, or otherwise commercially exploit or make available to any third party the PURE CARE Service or its content in any way; (ii) modify or make derivative works based upon the PURE CARE Service or its content; (iii) publicly display visual output of the PURE CARE Service; (iv) transmit the PURE CARE Service over a network, by telephone, or electronically using any means; (v) create Internet â€œlinksâ€ to the PURE CARE Service where prohibited or â€œframeâ€ or â€œmirrorâ€ any of its content on any other server or wireless or Internet-based device; or (vi) reverse engineer or access the PURE CARE Service in order to (a) build a competitive product or service, (b) build a product using similar ideas, features, functions, or graphics of the Service, or (c) copy any ideas, features, functions, or graphics of the PURE CARE Service.
    </p>
    <p>
        You may use the PURE CARE Service only for your purposes and shall not: (i) send or transmit spam or otherwise duplicative or unsolicited messages in violation of applicable laws; (ii) send, transmit, or post a message or any information under a false name; (iii) send, transmit, post, or store infringing, obscene, threatening, libelous, defamatory, fraudulent, false, or otherwise unlawful or tortious material, including material harmful to children or violative of third party privacy rights or the ownership or intellectual property rights of another person; (iv) send, transmit, or store material containing software viruses, worms, Trojan horses, or other harmful computer codes, files, scripts, agents, or programs; (v) interfere with or disrupt the integrity or performance of the PURE CAREService or the data contained therein; or (vi) attempt to gain unauthorized access to the PURE CARE Service or its related systems or networks. You shall not use the PURE CARE Service in a way that could cause damage or adversely affect any other customers of PURE CARE or PURE CAREâ€™s reputation, networks, property, or services.</p>
    <p>
        You agree to keep confidential and use commercially reasonable efforts to prevent and protect the content of the PURE CARE Service from unauthorized disclosure or use.
    </p>
    <p>
        <strong>RESPONSIBILITIES</strong>
    </p>
    <p>
        You are responsible for all activity occurring under your User accounts and shall abide by all applicable local, state, national, and foreign laws, treaties, and regulations in connection with your use of the PURE CARE Service, including those related to data privacy, international communications, and the transmission of technical or personal data. You shall: (i) notify PURE CARE immediately of any unauthorized use of any password or account or any other known or suspected breach of security; (ii) report to PURE CARE immediately and use reasonable efforts to stop immediately any copying or distribution of content of the PURE CARE Service that is known or suspected by you or your Users; and (iii) not impersonate another PURE CARE user or provide false identity information to gain access to or use of the PURE CARE Service.
    </p>
    <p>
        <strong>INTELLECTUAL PROPERTY OWNERSHIP</strong>
    </p>
    <p>
        PURE CARE alone (and its licensors, where applicable) shall own all right, title, and interest, including all related Intellectual Property Rights, in and to PURE CAREâ€™s technology, its content, and the PURE CARE Service and any suggestions, ideas, enhancement requests, feedback, recommendations, or other information provided by you or any other party relating to the PURE CARE Service. This Use Agreement is not a sale and does not convey to you any rights of ownership in or related to PURE CAREâ€™s technology, its content, the PURE CARE Service, or the Intellectual Property Rights owned by PURE CARE. The PURE CARE name, the PURE CARE logo, and the product names associated with the PURE CARE Service are trademarks of PURE CARE, and no right or license is granted to use them.
    </p>
    <p>
        <strong>TRIAL MEMBERSHIP</strong>
    </p>
    <p>
        Your membership with PURE CARE is effective for the period covered by your membership fee and continues upon your payment of the monthly renewal fee. Renewal fees for your membership will be charged automatically, at the then-current rate, to the credit card or other billing source authorized by you, until you cancel your membership. Should you choose to discontinue your membership for any reason before expiration of the then-applicable membership term for which you have paid, you may cancel your membership and terminate further billing by calling toll-free (844) 859-2079. If you are a monthly subscriber and choose to cancel after your free trial ends, your membership and monthly billing will terminate immediately and you will not be eligible for a prorated refund of any portion of your paid monthly membership fee. PURE CARE reserves the right to change the membership fee for any renewal term to be effective upon the renewal of your membership.
    </p>
    <p>
        Membership With Trial: The PURE CARE free trial is a special offer limited to select first-time customers only. Returning members will be billed the membership fee immediately upon renewal. You will be asked for valid credit card information when you sign up for the trial. We will verify your credit card information before processing your order. An authorization will be performed on your credit card to make sure it is valid and in good standing, but we do not bill your card until the free trial period has passed. If you do not cancel during your trial period, your membership will continue automatically and the monthly fee will be billed to the credit card or other billing source authorized by you.
    </p>
    <!-- <p>
        Membership Without Trial: The monthly/annual fee for a credit monitoring membership without a trial period will be billed immediately to the credit card or other billing source authorized by you.
    </p> -->
    <p>
        After your 30 Day trial you will be billed $24.95 for the first month and just $24.95 per month for your PURE CAREcare plan and you can call PURE CARE at (844) 859-2079 within the first 30 days to cancel, and you will not be charged/debited. To ensure continuous service, at the end of your 30day trial period your membership will be automatically charged/debited and then each month on or about 30 days from the date of the initial $24.95 charge to the same credit card you provide today associated with the debit card you provided. If for any reason you are dissatisfied, call to cancel, and you'll no longer be charged/debited. There is a one-time registration fee of $4.95 for all new members.
    </p>
    <p>
        <strong>CHARGES AND PAYMENT OF FEES</strong>
    </p>
    <p>
        You shall pay all fees or charges to your account in accordance with the fees, charges, and billing terms in effect at the time a fee or charge is due and payable. Payments may be made on a per-visit basis, monthly consistent with the Initial Term, or as otherwise mutually agreed upon. All payment obligations are non-cancelable and all amounts paid are nonrefundable. All pricing terms are confidential, and you agree not to disclose them to any third party.
    </p>
    <p>
        <strong>BILLING AND RENEWAL</strong>
    </p>
    <p>
        PURE CARE charges and collects in advance for use of the PURE CARE Service. PURE CARE will automatically renew and bill your credit card or issue an invoice to you for your current subscription amount where applicable, or as otherwise mutually agreed upon. Fees for other services will be charged on an as-quoted basis. PURE CAREâ€™s fees are exclusive of all taxes, levies, or duties imposed by taxing authorities, and you shall be responsible for payment of all such taxes, levies, or duties, excluding only United States (federal or state) taxes based solely on PURE CAREâ€™s income.
    </p>
    <p>
        You agree to provide PURE CARE with complete and accurate billing and contact information. This information includes your legal name, street address, e-mail address, and telephone number. You agree to update this information immediately upon any change to it. If the contact information you have provided is false or fraudulent, PURE CARE reserves the right to terminate your access to the PURE CARE Service in addition to any other legal remedies. Invoices will be billed in United States Dollars (USD) unless requested by you in advance of invoicing.
    </p>
    <p>
        If you believe your bill is incorrect, you must immediately contact us in writing regarding the amount in question to be eligible to receive an adjustment or credit. You irrevocably waive your right to challenge the accuracy of any bill, or otherwise receive an adjustment or credit to any bill, if you fail to notify PURE CARE in writing within thirty (30) calendar days after your receipt of the bill, that you believe the bill is inaccurate (setting forth an explanation of why).
    </p>
    <p>
        <strong>NON-PAYMENT AND SUSPENSION</strong>
    </p>
    <p>
        In addition to any other rights granted to PURE CARE herein, PURE CARE reserves the right to suspend or terminate this Use Agreement and your access to the PURE CARE Service if your account becomes delinquent (falls into arrears) where any invoice is unpaid after the invoice due date.
    </p>
    <p>
        <strong>REFUND GUARANTEE.</strong>
    </p>
    <p>
        If you do not accept this Agreement or if you are not satisfied with the service, you may contact us for a full refund within 30 days of purchase by contacting customer service at (844) 859-2079. Or you may submit a written request to PURE CARE Benefits including your name, contact and order information to PURE CARE Benefits., ATTN: Returns Department 150 Westwood Circle East Hills New York 11577-1838 United States.
    </p>
    <p>
        <strong>TERMINATION FOR CAUSE</strong>
    </p>
    <p>
        Any breach of your payment obligations or unauthorized use of the PURE CARE Service will be deemed a material breach of this Use Agreement. PURE CARE, in its sole discretion, may immediately terminate your password, account, or use of the PURE CARE Service if you breach or otherwise fail to comply with this Use Agreement. In addition, PURE CARE may terminate a free account at any time in its sole discretion.
    </p>
    <p>
        <strong>REPRESENTATIONS AND WARRANTIES</strong>
    </p>
    <p>
        Each party represents and warrants that it has the legal power and authority to enter into this Use Agreement. You represent and warrant that you have not falsely identified yourself nor provided any false information to gain access to the PURE CARE Service and that your billing information is correct.
    </p>
    <p>
        <strong>INDEMNIFICATION</strong>
    </p>
    <p>
        You agree to indemnify, defend, and hold PURE CARE (including the PURE CARE Service), its subsidiaries, affiliates, parent companies, employees, subcontractors, agents, vendors, suppliers, and licensors harmless from and against any and all rights, demands, losses, liabilities, damages, claims, causes of action, actions, suits, fees (including attorneysâ€™ fees and expert fees), and costs of any kind whatsoever arising directly and indirectly out of or in connection with (1) your use of and subscription to the PURE CARE Service and any information (including the content and subject matter) you submit, post, transmit, or make available via the PURE CARE Service or to PURE CARE or the Providers; (2) your violation of this Use Agreement or any policy set forth in this Use Agreement; and (3) your violation of any applicable laws and regulations or rights of any third party.
    </p>
    <p>
        <strong>DISCLAIMER OF WARRANTIES</strong>
    </p>
    <p>
        PURE CARE AND ITS LICENSORS MAKE NO REPRESENTATION, WARRANTY, OR GUARANTY AS TO THE RELIABILITY, TIMELINESS, QUALITY, SUITABILITY, TRUTH, AVAILABILITY, ACCURACY OR COMPLETENESS OF THE PURE CARE SERVICE OR ITS CONTENT. PURE CARE AND ITS LICENSORS DO NOT REPRESENT OR WARRANT THAT (A) THE USE OF OR SUBCRIPTION TO THE PURE CARE SERVICE WILL BE SECURE, TIMELY, UNINTERRUPTED, OR ERROR-FREE OR OPERATE IN COMBINATION WITH ANY OTHER HARDWARE, SOFTWARE, SYSTEM, OR DATA, (B) THE PURE CARE SERVICE WILL MEET YOUR REQUIREMENTS OR EXPECTATIONS, (C) ANY STORED DATA WILL BE ACCURATE OR RELIABLE, (D) THE QUALITY OF ANY PRODUCTS, SERVICES, INFORMATION, OR OTHER MATERIAL PURCHASED OR OBTAINED BY YOU THROUGH THE PURE CARE SERVICE WILL MEET YOUR REQUIREMENTS OR EXPECTATIONS, (E) ERRORS OR DEFECTS WILL BE CORRECTED, OR (F) THE PURE CARE SERVICE OR THE SERVER(S) THAT MAKE THE PURE CARE SERVICE AVAILABLE ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. PURE CARE DOES NOT AUTHORIZE ANY THIRD PARTY TO MAKE ANY OF THE FOREGOING REPRESENTATIONS OR WARRANTIES ON ITS BEHALF. THE PURE CARE SERVICE AND ALL OF ITS CONTENT IS PROVIDED TO YOU STRICTLY ON AN â€œAS ISâ€ BASIS; YOU AGREE THAT YOUR USE OF THE PURE CARE SERVICE IS AT YOUR SOLE RISK. ALL CONDITIONS, REPRESENTATIONS, AND WARRANTIES, WHETHER EXPRESS, IMPLIED, STATUTORY OR OTHERWISE, INCLUDING, WITHOUT LIMITATION, ANY IMPLIED WARRANTY OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT OF THIRD PARTY RIGHTS, ARE HEREBY DISCLAIMED TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW BY PURE CARE AND ITS LICENSORS.
    </p>
    <p>
        The PURE CARE Service does not provide healthcare services; the PURE CARE Service simply provides a system to facilitate communication with the Providers using PURE CAREâ€™s owned or licensed health information database and software. PURE CARE verifies the state and national (NPI, DEA) licensing status for all PURE CARE-contracted Providers; however, it is your obligation to verify the state and national (NPI, DEA) licensing status for all Providers who are not contracted by PURE CARE. Such Providers include, but are not limited to, Providers whose services are offered to you as part of a subscription or bundled services package by your employer, health plan, physician, or on the PURE CARE website or hosted portal. PURE CARE SPECIFICALLY DISCLAIMS ALL LIABILITY FOR THE ACTS OR OMISSIONS OF ANY PROVIDER PROVIDING MEDICAL CARE OR ADVICE (INCLUDING BUT NOT LIMITED TO PRESCRIBING MEDICATIONS) THROUGH THE PURE CARE SERVICE. PURE CARE FURTHER DISCLAIMS ALL LIABILITY (INCLUDING ANY LIABILITY FOR A REFUND) FOR THE FAILURE OF A NON-CONTRACTED PROVIDER (E.G., A PROVIDER NOT DIRECTLY CREDENTIALED AND CONTRACTED BY PURE CARE BUT WHOSE SERVICES ARE OFFERED TO YOU AS PART OF A SUBSCRIPTION OR BUNDLED SERVICES PACKAGE BY YOUR EMPLOYER, HEALTH PLAN, PHYSICIAN, OR ON THE PURE CARE WEBSITE OR HOSTED PORTAL) TO RENDER CARE TO YOU OR OTHERWISE FULFILL THE TERMS OF SERVICE OF YOUR SUBSCRIPTION OR BUNDLED SERVICES PACKAGE. PURE CARE IS NOT RESPONSIBLE FOR PROVIDING YOU ADDITIONAL SERVICES PURCHASED VIA A SUBSCRIPTION OR BUNDLED SERVICES PACKAGE.
    </p>
    <p>
        The PURE CARE Service is not a replacement for your primary care physician or annual office check-ups. Consultations through the PURE CARE Service treat the majority of common medical conditions, however a small number of cases require an in-person visit for complete care.
    </p>
    <p>
        The PURE CARE Service is not an online pharmacy, nor is it a Medicare prescription drug plan. Providers using the PURE CARE Service do not, via the PURE CARE Service, prescribe elective medications, narcotic pain relievers, or drugs listed as controlled substances by the U.S. Drug Enforcement Agency or regulated under state law. Review the DEA Controlled Substances Schedule (http://www.deadiversion.usdoj.gov/schedules/index.html) if you are interested in a particular prescription and are uncertain if it is listed as a controlled substance.
    </p>
    <p>
        The PURE CARE Service is not insurance and is not intended to replace health insurance; it is a telemedicine service. The offering of products and services by PURE CARE is not to be construed as the sale of insurance product(s) or otherwise engaging in the transaction of insurance.
    </p>
    <p>
        You authorize PURE CARE to use and publish any comments you choose to share about the PURE CARE Service, such as comments shared in the PURE CARE Patient Satisfaction Survey, unless specified otherwise. PURE CARE will only publish the comments with your first name and the state of requested service.
    </p>
    <p>
        PURE CARE does not warrant or validate any information provided by a third party (including, but not limited to, your employer, health plan, or the Providers) even if the information is about the PURE CARE Service, whether through advertisements, promotions, communications, or other materials, and does not assume any responsibility or liability for the accuracy of such information.
    </p>
    <p>
        PURE CARE has the right to refuse access to the PURE CARE Service to any person, agency, or organization, at any time, for any reason, or for no reason at all.
    </p>
    <p>
        <strong>LIMITATION ON LIABILITY</strong>
    </p>
    <p>
        UNDER NO CIRCUMSTANCES SHALL PURE CARE (INCLUDING THE PURE CARE SERVICE), ITS SUBSIDIARIES, AFFILIATES, PARENT COMPANIES, EMPLOYEES, SUBCONTRACTORS, AGENTS, VENDORS, SUPPLIERS, AND LICENSORS BE LIABLE (1) IN ANY WAY FOR YOUR USE OF OR SUBSCRIPTION TO THE PURE CARE SERVICE OR ANY OF ITS CONTENT, INCLUDING, BUT NOT LIMITED TO, ERRORS OR OMISSIONS IN ANY CONTENT, INFRINGEMENT BY ANY CONTENT OF THE INTELLECTUAL PROPERTY RIGHTS OR OTHER RIGHTS OF THIRD PARTIES, OR FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF OR SUBSCRIPTION TO THE PURE CARE SERVICE; OR (2) FOR ANY DIRECT, SPECIAL, PUNITIVE, EXEMPLARY, INDIRECT, INCIDENTAL, OR CONSEQUENTIAL DAMAGES, INCLUDING, BUT NOT LIMITED TO, PERSONAL INJURY, LOST PROFITS, BUSINESS INTERRUPTION, OR LOSS OF PROGRAMS OR OTHER DATA ON YOUR COMPUTER, ARISING FROM OR IN CONNECTION WITH THE PURE CARE SERVICE, WHETHER IN ANY ACTION IN WARRANTY, CONTRACT, TORT, BREACH OF CONTRACT, NEGLIGENCE, STRICT LIABILITY, MALPRACTICE, OR OTHERWISE RESULTING FROM YOUR USE OF THE PURE CARE SERVICE. YOU HEREBY RELEASE PURE CARE (INCLUDING THE PURE CARE SERVICE), ITS SUBSIDIARIES, AFFILIATES, PARENT COMPANIES, EMPLOYEES, SUBCONTRACTORS, AGENTS, VENDORS, SUPPLIERS, AND LICENSORS AND HOLD THEM HARMLESS FROM ANY AND ALL CLAIMS, DEMANDS, AND DAMAGES OF ANY AND EVERY KIND AND NATURE, KNOWN AND UNKNOWN, SUSPECTED AND UNSUSPECTED, DISCLOSED AND UNDISCLOSED, RESULTING FROM YOUR USE OF OR ACCESS OR SUBSCRIPTION TO THE PURE CARE SERVICE. TO THE EXTENT ALLOWED BY LAW, ANY LIABILITY OF PURE CARE (INCLUDING THE PURE CARE SERVICE), ITS SUBSIDIARIES, AFFILIATES, PARENT COMPANIES, EMPLOYEES, SUBCONTRACTORS, AGENTS, VENDORS, SUPPLIERS, AND LICENSORS FOR ANY CLAIMS YOU MAY HAVE AGAINST THEM IS LIMITED TO THE PROPORTIONATE AMOUNT OF THE VISIT OR SUBSCRIPTION FEES ACTUALLY PAID BY YOU THAT ARE ATTRIBUTABLE TO THE APPLICABLE SERVICE, INCIDENT, OR AFFECTED PERIOD GIVING RISE TO SUCH CLAIM.
    </p>
    <p>
        <strong>NOTICE</strong>
    </p>
    <p>
        Except as this Use Agreement specifically provides otherwise, you must provide PURE CARE notice by calling or writing PURE CARE at its registered address. PURE CARE may provide you notice through one or more of the following: correspondence through general notice on the PURE CARE Service, to your last known address, to any fax number or e-mail address you have provided PURE CARE, by calling you on any phone number you have provided PURE CARE, by voice message on any phone number you have provided PURE CARE, or by text message to any phone number you have provided PURE CARE that accepts text messages.
    </p>
    <p>
        <strong>CONTACTING YOU REGARDING BILLING AND COLLECTIONS</strong>
    </p>
    <p>
        You expressly authorize, and specifically consent to allowing, PURE CARE and any of PURE CAREâ€™s agents to contact you in connection with any and all matters relating to unpaid past due charges you may owe PURE CARE. You agree that, for attempts to collect unpaid past due charges, PURE CARE and any of its agents may contact you at any mailing address, telephone number, cellular phone number, email address, or any other electronic address that you have provided, or may in the future provide, to PURE CARE. You agree and acknowledge that any e-mail address or any other electronic address that you provide to PURE CARE is your private address and is not accessible to unauthorized third parties. For attempts to collect unpaid charges, you agree that in addition to individual persons attempting to communicate directly with you, any type of contact described above may be made using, among other methods, pre-recorded or artificial voice messages delivered by an automatic telephone dialing system, pre-set e-mail messages delivered by an automatic e-mailing system, or any other pre-set electronic messages delivered by any other automatic electronic messaging system.
    </p>
    <p>
        <strong>ASSIGNMENT; CHANGE IN CONTROL</strong>
    </p>
    <p>
        This Use Agreement may not be assigned by you without the prior written approval of PURE CARE but may be assigned without your consent by PURE CARE to (i) a parent or subsidiary, (ii) an acquirer of assets, or (iii) a successor by merger. Any purported assignment in violation of this section shall be void.
    </p>
    <p>
        <strong>DISPUTE RESOLUTION AND ARBITRATION</strong>
    </p>
    <p>
        <strong>PLEASE READ THIS CAREFULLY; IT AFFECTS YOUR RIGHTS</strong>
    </p>
    <p>
        In those rare instances where your concern is not resolved to your satisfaction through calls to our customer care, you and PURE CARE each agree to try to resolve those disputes in good faith after you provide written notice of the dispute as set forth below. If the dispute is not resolved, you and PURE CARE agree that the dispute will be resolved through individual binding arbitration or small claims court, instead of courts of general jurisdiction.
    </p>
    <p>
        Mandatory Arbitration and Waiver of Class Action. Instead of suing in court, you and PURE CARE agree to arbitrate all Disputes (as defined below) on an individual, non-representative, basis. You agree that, by accepting the terms and conditions of this Use Agreement, you and PURE CARE are waiving the right to a trial by jury or to participate in a class action or representative action. This agreement to arbitrate is intended to be broadly interpreted.
    </p>
    <p>
        In arbitration, there is no judge or jury. Disputes are instead decided by a neutral third-party arbitrator in a more informal process than in court. In arbitration, there is limited discovery and the arbitratorâ€™s decision is subject to limited review by courts. However, just as a court would, the arbitrator must honor the terms and conditions of the Use Agreement and can award damages and relief, including any attorneysâ€™ fees authorized by law.
    </p>
    <p>
        â€œDisputesâ€ shall include, but are not limited to, any claims or controversies against each other related in any way to or arising out of in any way the PURE CARE Service or this Use Agreement, including, but not limited to, billing services and practices, policies, contract practices (including enforceability), service claims, privacy, or advertising, even if the claim arises after use of or access or subscription to the PURE CARE Service has terminated. Disputes also include, but are not limited to, claims that: (a) you or an authorized or unauthorized user of the PURE CARE Service brings against PURE CARE (including the PURE CARE Service), its subsidiaries, affiliates, parent companies, employees, subcontractors, agents, vendors, suppliers, or licensors; (b) you bring against a third party, such as a Provider, that are based on, relate to, or arise out of in any way the use of or access or subscription to the PURE CARE Service or this Use Agreement; or (c) PURE CARE brings against you. Disputes also include, but are not limited to, (i) claims in any way related to or arising out of any aspect of the relationship between you and PURE CARE, whether based in contract, tort, statute, fraud, misrepresentation, advertising claims, or any other legal theory; (ii) claims that arose before this Use Agreement or out of a prior Use Agreement with PURE CARE; (iii) claims that are subject to on-going litigation where you are not a party or class member; and/or (iv) claims that arise after the termination of your use of or access or subscription to the PURE CARE Service or this Use Agreement.
    </p>
    <p>
        <strong>DISPUTE NOTICE AND DISPUTE RESOLUTION PERIOD.</strong>
    </p>
    <p>
        Before initiating an arbitration or a small claims matter, you and PURE CARE each agree to first provide to the other a written notice (â€œNotice of Disputeâ€), which shall contain: (a) a written description of the problem and relevant documents and supporting information; and (b) a statement of the specific relief sought. A Notice of Dispute to PURE CARE should be sent to PURE CAREâ€™s registered address and also to (if the registered address is different): PURE CARE, 150 Westwood Circle East Hills New York 11577-1838 United States ATTN: Legal. PURE CARE will provide a Notice of Dispute to you at your last known physical address or email address. PURE CARE will assign a representative to work with you and try to resolve your Dispute to your satisfaction. You and PURE CARE agree to make attempts to resolve the Dispute prior to commencing an arbitration or small claims action. If an agreement cannot be reached within forty-five (45) days of receipt of the Notice of Dispute, you or PURE CARE may commence an arbitration proceeding or small claims action.
    </p>
    <p>
        <strong>ARBITRATION TERMS, PROCESS, RULES, AND PROCEDURES.</strong>
    </p>
    <p>
        (1) Unless you and PURE CARE agree otherwise, the arbitration will be conducted by a single, neutral arbitrator and will take place in Maricopa County, Arizona (or such other location to which PURE CARE agrees). The arbitration will be governed by either: (a) rules that we mutually agree upon; or (b) the JAMS Comprehensive Arbitration Rules & Procedures (the â€œJAMS Rulesâ€), as modified by this agreement to arbitrate, including the rules about filing, administration, discovery, and arbitratorâ€™s fees. The JAMS Rules are available on its website at jamsadr.com. Notwithstanding any JAMS Rule to the contrary or any other provision in the arbitration rules chosen, by agreement, to govern the arbitration, we each agree that all issues regarding the Dispute are delegated to the arbitrator to decide, except that only a court (and not the arbitrator) shall decide any disagreements regarding the scope and enforceability of this agreement to arbitrate.
    </p>
    <p>
        (2) The Federal Arbitration Act (â€œFAAâ€) applies to your use of or access or subscription to the PURE CARE Service and this Use Agreement and arbitration provision. We each agree that the FAAâ€™s provisions - not state law - govern all questions of whether a Dispute is subject to arbitration. To the extent that this agreement to arbitrate conflicts with the JAMS Policy on Consumer Arbitrations Pursuant to Pre-Dispute Clauses Minimum Standards for Procedural Fairness (the â€œMinimum Standardsâ€), the Minimum Standards in that regard will apply. However, nothing in this paragraph will require or allow you or PURE CARE to arbitrate on a class-wide, representative, or consolidated basis.
    </p>
    <p>
        (3) The arbitrator may award declaratory or injunctive relief only in favor of the individual party seeking relief and only to the extent necessary to provide relief warranted by that partyâ€™s individual claim. YOU AND PURE CARE AGREE THAT EACH MAY BRING CLAIMS AGAINST THE OTHER ONLY IN AN INDIVIDUAL CAPACITY, AND NOT AS A CLASS MEMBER IN ANY PUTATIVE CLASS OR REPRESENTATIVE PROCEEDING. Further, unless both you and PURE CARE expressly agree otherwise, the arbitrator may not consolidate more than one personâ€™s claims, and may not otherwise preside over any form of a representative or class proceeding. If any portion of this provision is found to be unenforceable, then the entirety of this arbitration provision shall be null and void.
    </p>
    <p>
        (4) We each are responsible for our respective costs, including our respective attorneys, experts, and witnesses, unless this Use Agreement or applicable law otherwise permits the award of such to PURE CARE. We each will pay equally for any filing or case management fees associated with the arbitration and professional fees for the arbitratorâ€™s services.
    </p>
    <p>
        (5) An arbitratorâ€™s award will be a written statement of the disposition of each claim and will also provide a concise written statement of the essential findings and conclusions which form the basis of the award. The arbitratorâ€™s decision and award is final and binding, with some limited court review under the FAA, and judgment on the award may be entered in any court with jurisdiction.
    </p>Member Saving
    <p>
        (6) As an alternative to arbitration, we may resolve Disputes in small claims court in East Hills, New York (or such other location to which PURE CARE agrees).
    </p>
    <p>
        <strong>NO TRIAL BY JURY AND NO CLASS ACTION</strong>
    </p>
    <p>
        IF FOR ANY REASON A CLAIM ARISING OUT OF OR RELATING TO YOUR USE OF OR ACCESS OR SUBSCRIPTION TO THE PURE CARE SERVICE OR THIS USE AGREEMENT IN ANY WAY PROCEEDS IN COURT RATHER THAN IN ARBITRATION, REGARDLESS OF WHETHER THE CLAIM IS AN ACTION, COUNTERCLAIM, OR ANY OTHER COURT PROCEEDING, WE EACH AGREE THAT TO THE EXTENT ALLOWED BY LAW, THERE WILL NOT BE A JURY TRIAL OR CLASS ACTION AND WE EACH UNCONDITIONALLY (1) WAIVE ANY RIGHT TO TRIAL BY JURY AND (2) WAIVE ANY RIGHT TO PURSUE DISPUTES ON A CLASSWIDE BASIS, INCLUDING JOINING A CLAIM WITH THE CLAIM OF ANY OTHER PERSON OR ENTITY OR ASSERTING A CLAIM IN A REPRESENTATIVE CAPACTITY ON BEHALF OF ANYONE ELSE IN ANY OTHER PROCEEDING.
    </p>
    <p>
        <strong>OTHER IMPORTANT TERMS</strong>
    </p>
    <p>
        Subject to federal and state law or unless this Use Agreement specifically provides otherwise, your use of and access or subscription to the PURE CARE Service and this Use Agreement is governed solely by the laws of the state of Arizona, without regard to conflicts of law principles. If either of us waives or doesnâ€™t enforce a requirement under this Use Agreement in an instance, we donâ€™t waive our right to later enforce that requirement. Except as this Use Agreement specifically provides otherwise, if any part of this Use Agreement is held invalid or unenforceable, the rest of this Use Agreement remains in full force and effect. This Use Agreement isnâ€™t for the benefit of any third party except PURE CAREâ€™s subsidiaries, affiliates, parent companies, employees, subcontractors, agents, vendors, suppliers, licensors, and predecessors and successors in interest. You canâ€™t assign this Use Agreement or any of your rights or duties under it, unless PURE CARE agrees to the assignment. PURE CARE can assign this Use Agreement without notice. You cannot in any manner resell the PURE CARE Service to another party. This Use Agreement and the documents it incorporates make up the entire agreement between us and replaces all prior written or spoken agreements - you canâ€™t rely on any contradictory documents or statements by sales or service representatives or the Providers. The rights, obligations, and commitments in the Use Agreement that, by their nature, would logically continue beyond the termination of your use of or access or subscription to the PURE CARE Service (for example, those relating to billing, payment, dispute resolution, no class action, no jury trial) survive termination of your use of and access and subscription to the PURE CARE Service and this Use Agreement.
    </p>
    <p>
        <strong>ELECTRONIC SIGNATURE</strong>
    </p>
    <p>
        I have read this Use Agreement and I understand it. I agree to comply with it, on behalf of myself and on behalf of any other person on whose behalf I am or may in the future be seeking medical care. I understand and agree that if I fail to comply with the terms of the Use Agreement, I may be prohibited from using the PURE CARE Service, and I will hold PURE CARE harmless from any liability arising from my failure to comply. I hereby certify that I am at least eighteen years of age and possess the legal right and ability to enter into this Use Agreement under the name in which I have registered to use the PURE CARE Service. I further certify that I am physically present in the state that I have designated at the time that I am accessing the PURE CARE Service. I understand and acknowledge that my ability to access the PURE CARE Service is conditional upon the above-mentioned criteria of my certification of age, legal authority, and physical presence at the time that I access the PURE CARE Service, and that the Providers are relying upon this certification in order to interact with and facilitate health care services to me.
    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Terms -->

    <!-- Start satisfaction -->
    <div class="modal fade" id="satisfaction" tabindex="-1" role="dialog" aria-labelledby="satisfactionlabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    <h4 class="modal-title" id="satisfactionlabel">Satisfaction</h4>
                </div>
                <div class="modal-body">
                   <strong>Satisfaction Guaranteed Refund Policy</strong></h4>
    </div>

    <p></p>
    <p>
        Thank you for choosing PureCareBenefits in cutting health costs.
    </p>
    <p>
        Our <strong>Refund Guarantee </strong>policy says that if you're not satisfied with your service with Pure Care benefits, you can return it within 30 days of purchase for a full refund (see the End User Agreement for the fine print, about 1/3
        of the way down the page â€“ titled refund guarantee, Additional <a class="overlay" data-target="#pcs_terms" href="terms.html">Terms and Conditions</a>).
    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- End satisfaction -->
    <!-- Start faq -->
    <div class="modal fade" id="contact-mdl" tabindex="-1" role="dialog" aria-labelledby="faqlabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    <h4 class="modal-title" id="faqlabel">FAQ</h4>
                </div>
                <div class="modal-body">
                    <strong>CONTACT INFO</strong></h4>
    </div>

        <h3>Mailing Address</h3>
    <p>
        150 Westwood Circle East Hills
        <br> New York 11577-1838
        <br> United States
    </p>

    <h3>Business Hours</h3>
    <p>
        Monday - Friday 9:00am - 5:00pm Eastern Standard Time
        <br>
    </p>

    <h3>Phone</h3>
    <p>
        Billing Support: (844) 859-2079 <br>
        Account Support: (800) 800-7616
    </p>

    <h3>Email</h3>
    <p>
        <a href="mailto:support@purecarebenefits.com.">support@purecarebenefits.com.</a>
    </p>
              </div>
            </div>
        </div>
    </div>
    <!-- End faq -->

    <!-- Disclaimer Section End -->


<script src="js/main.js"></script>
  <script language="JavaScript">
    function setVisibility(id, visibility) {
        document.getElementById(id).style.display = visibility;
    }
//var j = $.noConflict();
    $(function(){
        var defaultrss = {
            // Get this content
            content: "disclosures",

            // Set options for restting data
            resetData: [
                // don't remove inline styles
                [],
                // All a elements should have target _blank
                {
                    "a": ["target", "_blank"]
                }
            ]
        }

        var rssDisclaimers = {
            "rss-disclaimer-direct": {
                url: "http://content.newbenefits.com/rssContentForReader.aspx?hash=vAttI1kCjRTpODycl64nIw",
                content: "Website"
            },
            "rss-disclaimer-dental": {
                url: "http://content.newbenefits.com/rssContentForReader.aspx?hash=C16rBsLmq3yfW33mGLGxXw"
            },
            "rss-disclaimer-tela": {
                url: "http://content.newbenefits.com/rssContentForReader.aspx?hash=tnWJcoXNNyRqJuKWjbqoQ",
                content: "disclosures"
            },
            "rss-disclaimer-lab": {
                url: "http://content.newbenefits.com/rssContentForReader.aspx?hash=G2TGGJ6AxOpUJ8lGC2PlEg"
            }

        }

        $.each(rssDisclaimers, function(k, v) {
            var values = $.extend({}, defaultrss, v);
            $("#" + k).injectRSS(values);
        });
    })
    
     $(function() {
            var thirtyDaysFromNow = moment().add(30, 'd').format("MMM D, YYYY");
            $("#date_after").text(thirtyDaysFromNow);
            
        });
</script>
    <script src="js/rss.js"></script>
        <script src="js/show_hide.js"></script>

</body>

</html>
