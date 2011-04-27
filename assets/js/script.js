COMMON = {
    equal_height: function(group) {
    	var tallest = 0;
    	group.each(function() {
    		var thisHeight = $(this).height();
    		if(thisHeight > tallest) {
    			tallest = thisHeight;
    		}
    	});
    	group.height(tallest);
    },
    
    superfish: function(parent) {
    $(parent) //ul#main-menu
        .supersubs({
            maxWidth:    35,
            minWidth:    15
        })
        .superfish({
            animation:   {opacity:'show',height:'show'},
            easing:      'easeOutBack'
        })
        .find('ul').bgIframe({opacity:false});
    },
    
    gallery: function() {
      $("a[rel='gallery']").colorbox({
          innerWidth: '550px'
          });
    },
    
    js_back: function() {
      $('a.js_back').click(function(e) {
          history.go(-1);
          e.preventDefault();
      });
    },
    
    hover_image: function() {
      $('a').hover(
        function(event) {
          var img = $(this).find('img:first'),
              hover = $(img).data('hover'),
              src   = $(img).attr('src');
          
          if( img === undefined || hover === undefined || src === undefined) {
            return;
          }
          
          $(img).data('original_src', src);
          $(img).attr('src', hover);
        },
        function(event) {
          var img = $(this).find('img:first'),
              hover = $(img).attr('src'),
              src   = $(img).data('original_src');
          
          if( img === undefined || hover === undefined || src === undefined) {
            return;
          }
          
          $(img).attr('src', src);          
        }
      )
    },
    
    iframe_colorbox: function() {
      $("a.iframe-colorbox").colorbox({
        width:"97%", 
        height:"97%", 
        iframe:true
      });
    }
}

SITE = {
  common: {
    init: function() {
      // application-wide code
      COMMON.superfish('#main-nav');
      COMMON.hover_image();
      COMMON.iframe_colorbox();
      COMMON.js_back();
    },

    run_after: function() {
      /* Do this after Controller:Action action has run */
    }
  },
  
  home: {
    init: function() {
    },
    
    /* document w/ id 1 */    
    doc1: function() {
      /* do something on this page only */
    },
    
    run_after: function() {
      /* Do this after the common::run_after and Controller:Action action has run */
    }
  }
};

UTIL = {
  exec: function( controller, action ) {
    var ns = SITE,
        action = ( action === undefined ) ? "init" : action;

    if ( controller !== "" && ns[controller] && typeof ns[controller][action] == "function" ) {
      ns[controller][action]();
    }
  },

  init: function() {
    var body = document.body,
        controller = body.getAttribute( "data-template" ),
        action = "doc" + body.getAttribute( "data-docid" );
    
    log(body, controller, action );
    
    UTIL.exec( "common" );
    UTIL.exec( controller );
    UTIL.exec( controller, action );
    UTIL.exec( controller, "run_after" );
    UTIL.exec( "common", "run_after" );
  }
};

jQuery(document).ready(function($) {
	UTIL.init();
});