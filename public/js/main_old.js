(function($) {
     /**
      * The onloan handler to initialize date pickers, overlays, and auto tabbing
      */

     // document.domain = "pcshealthbenefits.com"
     var

          flipboard_on = false,
          prefix = "mtr_healthbenefits_";

     TEMPLATE = "rf02fst";

     // call this to initiate the loading gif

          /**
           * Website settings
           */

          // Set scroll cue
          $("#rssnav").scrollable("toLeft");

          // Start reveal
          $(".reveal").reveal();

          // Start RSS for basic links
          $(".rss-link").rssInit({
               defaultView: "teladoc"
          });

          // Start RSS for FAQ
          $(".faq-links").rssInit({
               defaultView: "teladoc"
          });

          // Inject RSS
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
                    content: "Disclaimers"
               },
               "rss-disclaimer-lab": {
                    url: "http://content.newbenefits.com/rssContentForReader.aspx?hash=G2TGGJ6AxOpUJ8lGC2PlEg"
               }

          }

          $.each(rssDisclaimers, function(k, v) {
               var values = $.extend({}, defaultrss, v);
               $("#" + k).injectRSS(values);
          });

          // Bind the overlay event listeners
          $('.overlay').overlay({
               historyStack: false
          });
          // Bind the autotab event behaviors
          $('.mtr_healthbenefits_autotab').autotab();

          // Validate before submiting
          $('#mtr_healthbenefits_form').bind('submit', function(event) {
               if ($(this).validate() === false) {
                  $("#loading_overlay").hide();
                    return false;
               }
          });

          /**
           * Set behivoirs that require config.json
           */
          $.getJSON('/' + TEMPLATE + '/json/config.json', function(config) {

               // Initiate validate behaivior after config is succesfully retrieved.
               $('#mtr_healthbenefits_form').validate('init', config, {
                    prefix: prefix,
                    errorBoxParent: '#mtr_healthbenefits_content'
               });

          }).fail(function() {

               // Handle fail, don't stop, just use PHP-side validation, warn dev.
               console.log("Failed to load json config, continuing.");
          });




     /**
      * Unique PCS behaiviors
      */

     // Call this method to show loader
     $(".show_loading").click(function (event){
       // Get form id and cache jquery object in form
       var
        form_id = $(this).data('form'),
        form    = $(form_id);

        // Fade in overlay, then submit form
       $("#loading_overlay").fadeIn(function (){
         form.submit();
       });

     });

})(jQuery);
