<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />

    <title>Health Benefits</title>
    <meta name="description" content="Health Benefits" />
    <meta name="author" content="SitePoint" />
    <script src="https://use.fontawesome.com/76eb79f76b.js">
    </script>
    <link rel="stylesheet" type="text/css" href="/rf02fst/css/app.css" />

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"> </script>
  <![endif]-->
</head>

<body>
    <nav class="navbar navbar-primary">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header center">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"> </span>
                  <span class="icon-bar"> </span>
                  <span class="icon-bar"> </span>
                </button>
                <a class="navbar-brand" href="/rf02fst">
                    <img alt="Pure Care Solutions" src="/rf02fst/img/logo.png" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Navbar End -->


    <!-- Above Fold Start -->

    <div class="wrapper wrapper-flat">
        @@content@@
    </div>

    <!-- Above Fold End -->


    <!-- Disclaimer Section Start -->
    <div class="wrapper wrapper-disclaimer">
        <div class="container">
            <p>
                When you complete your order for your Free 30 Day trial, you will begin your trial membership and only be charged the $4.95 one-time registration fee. After the trial ends, you will be billed $24.95 per month. You will have a 30 day cancellation period
                with a reimbursement of all periodic membership fees. Residents in AR and TN will also be refunded the registration fee if the membership is cancelled within the 30 day trial period or 30 day cancellation period.
            </p>
        </div>

        <hr />

        <div class="container">
            <!-- <h1>DISCLOSURES</h1>

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
                    The discount program provides access to the Aetna Dental Access® network. This network is administered by Aetna Life Insurance Company (ALIC). Neither ALIC nor any of its affiliates offers or administers the discount program. Neither ALIC nor any of its
                    affiliates is an affiliate, agent, representative or employee of discount program. Dental providers are independent contractors and not employees or agents of ALIC or its affiliates. ALIC does not provide dental care or treatment and
                    is not responsible for outcomes.
                </p>

                <p>
                    This plan does not make payments directly to the providers of medical services. Member shall receive a reimbursement of all periodic membership fees if membership is cancelled within the first 30 days after the effective date.
                </p>

                <p>
                    © 2017 Teladoc, Inc. All rights reserved. Teladoc and the Teladoc logo are registered trademarks of Teladoc, Inc. and may not be used without written permission. Teladoc does not replace the primary care physician. Teladoc does not guarantee that a prescription
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
            </p> -->

            <div id="rss-disclaimer-direct"> </div>
            <div id="rss-disclaimer-dental"> </div>
            <div class="">
              <!-- <p>
                This plan does not make payments directly to the
                providers of medical services. Member shall
                receive a reimbursement of all periodic
                membership fees if membership is cancelled within
                the first 30 days after the effective date.
              </p> -->
           </div>
            <div id="rss-disclaimer-tela">   </div>
            <div id="rss-disclaimer-lab">    </div>
            <h5>
                 Service not
                 available in  KS, UT, VT, WA residents.
            </h5>

            <br /> @@pcs_footernav@@
            <p>
                <strong>Form #: CC-PCS050387 </strong>
            </p>
        </div>
    </div>

    <!-- Start Privacy Policy -->
    <div class="modal fade" id="privacy_policy" tabindex="-1" role="dialog" aria-labelledby="privacylabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    <h4 class="modal-title" id="privacylabel">Privacy Policy</h4>
                </div>
                <div class="modal-body">
                    @@pcs_privacy@@
                </div>
            </div>
        </div>
    </div>
    <!-- End Privacy Policy -->
    <!-- Start Terms -->
    <div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="termslabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    <h4 class="modal-title" id="termslabel">Terms and Conditions</h4>
                </div>
                <div class="modal-body">
                    @@pcs_terms@@
                </div>
            </div>
        </div>
    </div>
    <!-- End Terms -->
    <!-- Start satisfaction -->
    <div class="modal fade" id="satisfaction" tabindex="-1" role="dialog" aria-labelledby="satisfaction">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    <h4 class="modal-title" id="satisfaction">Satisfaction</h4>
                </div>
                <div class="modal-body">
                    @@pcs_satisfaction@@
                </div>
            </div>
        </div>
    </div>
    <!-- End satisfaction -->


    <!-- Disclaimer Section End -->

    <script type="text/javascript" src="/rf02fst/js/main.js">
    </script>
</body>

</html>
