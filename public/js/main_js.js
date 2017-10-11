/**
 |---------------------------------
 | Title
 |---------------------------------
 |
 | Description
 |
 | @author Felipe Tadeo
 */

$(function() {

  /*  $(".tabSelect").click(function(e) {
        $(this).sliderTab(e);
    });*/

    // close modal when terms and contions are clicked inside satisfaction guarantee.
   /* $(".close-satisfaction").on("click", function(){
        $("#satisfaction").modal('hide');
    });*/

    // Add placehodlers with custom icons because PHP HTML parsing has some strict rules that don't let you use ampersigns other than to declare an ampersign entity. Lame
   // $(".fa-placeholder").attr("placeholder", '\uf007');


    /**
     * The onloan handler to initialize date pickers, overlays, and auto tabbing
     */
    // document.domain = "pcshealthbenefits.com"
    /*var
        flipboard_on = false;

    PREFIX  = "mtr_healthbenefits_";

    TEMPLATE = "rf02fst";*/

    // call this to initiate the loading gif



        /**
         * Website settings
         */

        // $('input').iCheck({
        //     // checkboxClass: 'icheckbox_minimal-lite-blue',
        //     radioClass: 'iradio_minimal-lite-blue'
        // });

        // Set scroll cue
        // $("#rssnav").scrollable("toLeft");

        // Start reveal
        // $(".reveal").reveal();

        // Start RSS for basic links
        /*$(".rss-link").rssInit({
            defaultView: "teladoc"
        });*/

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

        // Live date options
        // var opts = {
        //     date_element: $("#counter_content"), //set the element where you want the gif and date to go
        //     enable_message: false,
        //     format: "@m.@D.@Y",
        //     method_used: 'val'
        // };

        // Set Live Date
        // $.setClock(opts);

        // Bind the autotab event behaviors
        // $('.mtr_healthbenefits_autotab').autotab();

        // Validate before submiting
        // $('#mtr_healthbenefits_form').bind('submit', function(event) {
        //      if ($(this).validate() === false) {
        //          return false;
        //      }
        //      return true;
        // });

        //Turn on creditCard
        // $("#mtr_healthbenefits_cc_number").mtrCards({
        //         imgFilePath: "/" + TEMPLATE + "/img/",
        //
        //         defaultCSS: function(image) {
        //             return {
        //                 "backgroundImage": "url(" + image + ")",
        //                 "background-position": "right 5px center",
        //                 "background-size": "10% auto",
        //                 "background-repeat": "no-repeat"
        //             }
        //         },
        //     }, {
        //
        //         discover: ["card_discover.png", /^(65|6011)/],
        //         master_card: ["card_master_card.png", /^5[1-5]/],
        //         visa: ["card_visa.png", /^4[0-9]/]
        //
        //     }
        //
        // );

        /**
         * Set behivoirs that require config.json
         */
        // $.getJSON('/' + TEMPLATE + '/json/config.json', function(config) {
        //
        //     // Initiate validate behaivior after config is succesfully retrieved.
        //     // $('#mtr_healthbenefits_form').validate('init', config, {
        //     //     prefix: PREFIX,
        //     //     errorBoxParent: '#mtr_healthbenefits_content',
        //     //     val_section : ".val_section",
        //     //     validate_sections : true
        //     // });
        //
        // }).fail(function() {
        //
        //     // Handle fail, don't stop, just use PHP-side validation, warn dev.
        //     console.log("Failed to load json config, continuing.");
        // });




    /**
     * Unique PCS behaiviors
     */

    // Call this method to show loader
    function showLoading() {
        // $(".loading_animation_wrapper").fadeIn("fast");
        // $(".loading_animation_wrapper").eLoader();
    }

    // // Error count
    // $(".val_section").data("initialTrigger", true);
    // $(".val_section").on("sectionInvalid", function (e, errors){
    //   $(this).find(".badge").html(errors.length).show();
    // });
    //
    // $(".val_section").on("sectionValid", function (){
    //
    //   if($(this).data("initialTrigger")){
    //     if(!$(this).is(':last-child')){
    //       $(this).find(".collapse").collapse('toggle');
    //       $(this).next(".val_section").find(".collapse").collapse('toggle');
    //     }
    //
    //   }
    //   $(this).data("initialTrigger", false);
    //
    // });

});
