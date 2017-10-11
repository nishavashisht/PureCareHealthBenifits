(function($) {

     var methods = {

          /**
           * Default options
           */
          options: {
               content_wrapper: "#rss-content",
               activeclass: "active",
               defaultView: undefined,
               onCall: function() {
                    $(".loading_wrapper").show();
               },
               onDone: function() {
                    $(".loading_wrapper").hide();
               }
          },

          /**
           * Url map
           *
           * Each link has a data attribute that called rss. Add the key from
           * this map and it will fetch from the relevant link.
           */
          urlmap: {
               "dental": "http://content.newbenefits.com/rssContentForReader.aspx?hash=C16rBsLmq3yfW33mGLGxXw",
               "diabetic": "http://content.newbenefits.com/rssContentForReader.aspx?hash=BL3oKqCNObII7jeAYYcjVg",
               "lab": "http://content.newbenefits.com/rssContentForReader.aspx?hash=G2TGGJ6AxOpUJ8lGC2PlEg",
               "mri": "http://content.newbenefits.com/rssContentForReader.aspx?hash=0gO9BA5Sq2BgHZl3nrvCqA",
               "teladoc": "http://content.newbenefits.com/rssContentForReader.aspx?hash=tnWJcoXNNyRqJuKWjbqoQ",
               "vision": "http://content.newbenefits.com/rssContentForReader.aspx?hash=KPD5Pehn4x4bfXFbR5DSDw",
               "pharmacy": "http://content.newbenefits.com/rssContentForReader.aspx?hash=jPvnBGHqSAfIpXROXn0HRg",
               "disclosures": "http://content.newbenefits.com/rssContentForReader.aspx?hash=j3yIAiq02ocYNCZWTvg"
          },

          /**
           * Key map
           *
           * key is the 'title' of the data fetched from the rss link. Value is
           * the id of the elment you want it to populate.
           */
          keymap: {
               "detailed_b2c": "rss-content",
               "FAQ": "rss-faq",
               "Intro": "intro",
               "Disclaimers": "rss-disclaimer",
               "disclosures": "rss-disclousre",
               "Savings": "rss-savings"
          },

          /**
           * init
           *
           * Starts the method  where options are the user's preferences. It
           * binds a click method will be bound to `this`. This should have an
           * an data called `data-rss="<key>"` where key is a key from url key
           * from urlmap. It will set a class as a visual cue found in `options.activeclass`
           *
           * @param object options        an object with user prefrences
           * @return object returns jQuery selected object to maintain chainability.
           */
          init: function(options) {


               // Merge user options with default options
               methods.options = $.extend(methods.options, options);

               // bind clicking acction to fetch rss
               $(this).click(function() {
                    // get the data type:
                    var data = $(this).data("rss");

                    // set visual
                    $(this).setVisual("." + methods.options.activeclass, methods.options.activeclass);

                    methods.setBlogView(data);
               });

               // Load default page\
               methods.setBlogView(methods.options.defaultView);

               return $(this);

          },

          /**
           * setBlogView
           *
           * Sets the view for blog
           */
          setBlogView: function(view) {
               // clear view
               methods.clearFeed();
               // fetch RSS
               methods.fetchRSS(methods.urlmap[view],
                    function(data) {
                         // parse and process RSS
                         var parsed = methods.parseData(data, methods.keymap);
                         methods.processFeed(parsed, ["style"], {
                              "a": ["target", "_blank"]
                         });
                    });
          },

          /**
           * injectRSS
           *
           *
           */
          injectRSS: function(options, callback) {
               // Set default options
               var
                    default_options = {},
                    $this = $(this);


               // Merge user options with default options
               default_options = $.extend(default_options, options);

               methods.fetchRSS(default_options.url, function(data) {
                    // Set the key map
                    var keyMap = {};
                    keyMap[default_options["content"]] = "content";

                    // Fetch data, which content will be stored in data.content
                    var data = methods.parseData(data, keyMap);

                    // insert data into element
                    $this.html(data.content);


                    // Clear reset anything that needs to be reset
                    methods.resetData($this, default_options.resetData[0], default_options.resetData[1]);

                    if (typeof callback == "function") {
                         callback();
                    }
               });
          },

          /**
           * fetchRSS
           *
           * fetches rss from url and calls callback and passes a parsed entries
           * through its first param.
           *
           * @param string url      the url of the rss feed
           * @param function callback     an anonnymous function to be called on success
           */
          fetchRSS: function(url, callback) {
               methods.options.onCall();
               $.ajax({
                    type: "GET",
                    url: document.location.protocol + '//ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=1000&callback=?&q=' + encodeURIComponent(url),
                    dataType: 'json',
                    error: function() {
                         alert('Unable to load feed, Incorrect path or invalid feed');
                    },
                    success: function(xml) {
                         methods.options.onDone();
                         values = xml.responseData.feed.entries;
                         // console.dir(values);
                         callback(values);
                    }
               });
          },

          testRSS: function(url) {
               methods.fetchRSS(url, function(xml) {
                    console.log(xml);
               });
          },

          /**
           * Clear out feed
           */
          clearFeed: function() {
               $.each(methods.keymap, function(k, v) {
                    $("#" + v).html("");
               })
          },

          /**
           * processFeed
           */
          processFeed: function(feed, stripstyling, addAttributes) {
               // clear out old content:
               methods.clearFeed();
               $.each(feed, function(k, v) {
                    var v = $(v);

                    $("#" + k).html(v);

                    methods.resetData($("#" + k), stripstyling, addAttributes);

               });


          },

          /**
           * resetData
           *
           * clears any inline styling and adds attributes.
           */
          resetData: function($element, stripstyling, addAttributes) {
               if (stripstyling.length > 0) {
                    // console.log("stipping...");
                    $.each(stripstyling, function(key, style) {
                         $element.find("*").removeAttr(style);
                    });
               }

               // Adds attributres
               if (typeof addAttributes == "object") {
                    // console.log("adding Atrribute");
                    $.each(addAttributes, function(key, value) {
                         $element.find(key).attr(value[0], value[1]);
                    });
               }

          },

          /**
           * parseData
           */
          parseData: function(feed,
          ) {
               var parsed = {};
               $.each(feed, function(k, v) {
                    if (v.title in lookfor) {
                         //var key = { lookfor[v.title] : v.content};
                         parsed[lookfor[v.title]] = v.content;
                    }
               });

               return parsed;
          }
     }


     /**
      * rssInit
      */
     $.fn.rssInit = function() {
          return methods.init.apply(this, arguments);
     }

     /**
      * setVisual
      */
     $.fn.setVisual = function(indicators, activeClass) {
          // Set visual ques
          $(indicators).removeClass(activeClass);
          $(this).addClass(activeClass);

     }

     $.testRSS = function(url) {
          methods.testRSS(url);
     }

     $.fn.injectRSS = function() {
          methods.injectRSS.apply(this, arguments);
     }


})($);
