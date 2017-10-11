/*Step one js starts here*/
jQuery(document).ready(function(){
    jQuery("#set-up-account").click(function(){
        var x = document.getElementById("txtEmail").value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if(document.getElementById("txtEmail").value == '')
        {
            var emailText = "Please enter your email address.";
            document.getElementById("emailValidationError").innerHTML = emailText;
			document.getElementById("txtEmail").focus();
        }
        else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
            var emailText2 = "Please enter a valid email address.";
            document.getElementById("emailValidationError").innerHTML = emailText2;
			document.getElementById("txtEmail").focus();
        }
        else if(document.getElementById("txtFirstName").value == '')
        {
            var fnameText = "Please enter your first name.";
            document.getElementById("fnameValidationError").innerHTML = fnameText;
            document.getElementById("emailValidationError").style.display = "none";
			document.getElementById("txtFirstName").focus();
        }
        else if(document.getElementById("txtLastName").value == '')
        {
            var lnameText = "Please enter your last name.";
            document.getElementById("lnameValidationError").innerHTML = lnameText;
            document.getElementById("fnameValidationError").style.display = "none";
			document.getElementById("emailValidationError").style.display = "none";
			document.getElementById("txtLastName").focus();
        }
        else
        {
            jQuery("#Myaccount").slideUp();
            jQuery("#shadow-box").show();
            jQuery("#about_us").hide();

            dataLayer.push({'event':'gtm.stepOneFormSubmit'});

            document.getElementById("firstName").value = document.getElementById("txtFirstName").value;
			document.getElementById("lastName").value = document.getElementById("txtLastName").value;
			document.getElementById("txtEmailAddress").value = document.getElementById("txtEmail").value;
		}
    });

	jQuery("#continue-1").click(function(event){
		
		var txtEnailAddress = document.getElementById("txtEmailAddress").value;
        var atpos = txtEnailAddress.indexOf("@");
        var dotpos = txtEnailAddress.lastIndexOf(".");

		//var phoneno = "/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;

		if(document.getElementById("firstName").value == '')
        {
            var fnameText = "Please enter your first name.";
            document.getElementById("fnameValidationDisplay").innerHTML = fnameText;
        }
        else if(document.getElementById("lastName").value == '')
        {
            var lnameText = "Please enter your last name.";
            document.getElementById("lnameValidationDisplay").innerHTML = lnameText;
            document.getElementById("fnameValidationDisplay").style.display = "none";
        }
		else if(document.getElementById("txtPhoneNumber").value == '')
        {
            var lnameText = "Please enter your phone number.";
            document.getElementById("phnValidationDisplay").innerHTML = lnameText;
            document.getElementById("fnameValidationDisplay").style.display = "none";
			document.getElementById("lnameValidationDisplay").style.display = "none";
			document.getElementById("txtPhoneNumber").focus();
        }
		else if(!document.getElementById("txtPhoneNumber").value.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/))
		{
		    var phnText = "Please enter a valid phone number.";
            document.getElementById("phnValidationDisplay").innerHTML = phnText;
            document.getElementById("fnameValidationDisplay").style.display = "none";
			document.getElementById("lnameValidationDisplay").style.display = "none";
			document.getElementById("txtPhoneNumber").focus();
		}
		else if(document.getElementById("txtEmailAddress").value == '')
        {
            var emailText = "Please enter your email address.";
            document.getElementById("emailValidationDisplay").innerHTML = emailText;
			document.getElementById("phnValidationDisplay").style.display = "none";
			document.getElementById("txtEmailAddress").focus();
        }
        else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=txtEnailAddress.length) {
            var emailText2 = "Please enter a valid email address.";
            document.getElementById("emailValidationDisplay").innerHTML = emailText2;
			document.getElementById("phnValidationDisplay").style.display = "none";
			document.getElementById("txtEmailAddress").focus();
        }
		else
		{
			//var userFirstName = document.getElementById("firstName").value;
			document.getElementById("userFirstName").innerHTML = document.getElementById("firstName").value;
			jQuery("#shadow-box").slideUp();
			jQuery("#shadow-box-2").show();
			jQuery("#Myaccount").hide();
			jQuery("#rss-summary").show();
            jQuery("#rss-disclaimer").hide();
            jQuery("#rss-disclaimer-direct").hide();
            jQuery("#rss-disclosure-dental").hide();

            dataLayer.push({'event':'gtm.stepTwoFormSubmit'});
		}
		event.preventDefault();
        $.ajax({
        url: 'http://127.0.0.1:8000/myAjaxCallURI',
        type: 'post',
        data: jQuery('form').serialize(),
        success: function( _response ){
         
        },
        error: function( _response ){
           
        }
    });
    });

	jQuery('#txtYes').change(function(){
		if(this.checked)
		{
			jQuery("#billing-address").slideDown();
			jQuery("#ship-address").hide();
		}
	});
	jQuery('#txtNo').change(function(){
		if(this.checked)
		{
			jQuery("#billing-address").slideDown();
			jQuery("#ship-address").show();
		}
	});

	jQuery("#continue-2").click(function(){
		if(document.getElementById("txtCCNumber").value == '')
        {
            var ccText = "Please enter your credit card number.";
            document.getElementById("ccValidationError").innerHTML = ccText;
			document.getElementById("txtCCNumber").focus();
        }
		else if(!document.getElementById("txtCCNumber").value.match(/^\d{16}$/))
		{
		    var ccText = "Please enter a valid credit card number.";
            document.getElementById("ccValidationError").innerHTML = ccText;
			document.getElementById("txtCCNumber").focus();
		}
        else if(document.getElementById("txtCVV").value == '')
        {
            var cvvText = "Please enter your CVV number.";
            document.getElementById("cvvValidationError").innerHTML = cvvText;
            document.getElementById("ccValidationError").style.display = "none";
			document.getElementById("txtCVV").focus();
        }
		else if(isNaN(document.getElementById("txtCVV").value))
        {
            var cvvText = "Please enter a valid CVV number.";
            document.getElementById("cvvValidationError").innerHTML = cvvText;
            document.getElementById("ccValidationError").style.display = "none";
			document.getElementById("txtCVV").focus();
        }
		else if(document.getElementsByName("txtBilling").value == 'Yes')
        {
            if(document.getElementById("txtBillingAddressOne").value == '')
			{
				var baeText = "Please enter your billing address.";
				document.getElementById("txtBAE").innerHTML = baeText;
				document.getElementById("txtBillingAddressOne").focus();
			}
			if(document.getElementById("txtBillingCity").value == '')
			{
				var bceText = "Please enter your city.";
				document.getElementById("txtBCE").innerHTML = bceText;
				document.getElementById("txtBAE").style.display = "none";
				document.getElementById("txtBillingCity").focus();
			}
			if(document.getElementById("txtBillingZip").value == '')
			{
				var bzeText = "Please enter your city.";
				document.getElementById("txtBZE").innerHTML = bzeText;
				document.getElementById("txtBCE").style.display = "none";
				document.getElementById("txtBillingZip").focus();
			}
			if(document.getElementById("txtBillingState").value == '')
			{
				var bseText = "Please enter your city.";
				document.getElementById("txtBSE").innerHTML = bseText;
				document.getElementById("txtBZE").style.display = "none";
				document.getElementById("txtBillingState").focus();
			}
        }
		else
		{
			jQuery("#shadow-box-2").slideUp();
			jQuery("#shadow-box-3").show();
			jQuery("#Myaccount").hide();
			jQuery("#shadow-box-1").hide();
			dataLayer.push({'event':'gtm.paymentSubmit'});
		}
    });


/*Step one js ends here*/

/* Carousel Arrows JS starts here */

	jQuery("#carousel-arrow-left").click(function(){
        jQuery("#contentbox2").hide(500);
		jQuery("#contentbox5").hide(500);
		jQuery("#contentbox6").hide(500);
    });

	jQuery("#carousel-arrow-right").click(function(){
        jQuery("#contentbox2").hide(500);
		jQuery("#contentbox5").hide(500);
		jQuery("#contentbox6").hide(500);
    });

/* Carousel Arrows JS ends here */

});
