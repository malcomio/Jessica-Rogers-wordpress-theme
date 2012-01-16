<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_get_archives('type=monthly&format=link'); ?>
        <?php //comments_popup_script(); // off by default ?>
        <style type="text/css" media="screen">
                @import url( <?php bloginfo('stylesheet_url'); ?> );
        </style>
<!--[if IE 6]>
  <link rel="stylesheet" type="text/css" href="/css/ie6.css" />
<![endif]--> 
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
      wp_enqueue_script('jquery');
      wp_enqueue_script('jquery-ui-core');
      wp_enqueue_script('jquery-ui-tabs');
      wp_head();
?>
<script type="text/javascript"
   src="<?php bloginfo("template_url"); ?>/jquery.truncate-2.3.js"></script>
    <script type="text/javascript" charset="utf-8">
      jQuery(document).ready(function($){
$.fn.truncate = function( max, settings ) {
    settings = jQuery.extend( {
        chars: /\s/,
        trail: [ "...", "" ]
    }, settings );
    var myResults = {};
    var ie = $.browser.msie;
    function fixIE( o ) {
        if ( ie ) {
            o.style.removeAttribute( "filter" );
        }
    }
    return this.each( function() {
        var $this = jQuery(this);
        var myStrOrig = $this.html().replace( /\r\n/gim, "" );
        var myStr = myStrOrig;
        var myRegEx = /<\/?[^<>]*\/?>/gim;
        var myRegExArray;
        var myRegExHash = {};
        var myResultsKey = $("*").index( this );
        while ( ( myRegExArray = myRegEx.exec( myStr ) ) != null ) {
            myRegExHash[ myRegExArray.index ] = myRegExArray[ 0 ];
        }
        myStr = jQuery.trim( myStr.split( myRegEx ).join( "" ) );
        if ( myStr.length > max ) {
            var c;
            while ( max < myStr.length ) {
                c = myStr.charAt( max );
                if ( c.match( settings.chars ) ) {
                    myStr = myStr.substring( 0, max );
                    break;
                }
                max--;
            }
            if ( myStrOrig.search( myRegEx ) != -1 ) {
                var endCap = 0;
                for ( eachEl in myRegExHash ) {
                    myStr = [ myStr.substring( 0, eachEl ), myRegExHash[ eachEl ], myStr.substring( eachEl, myStr.length ) ].join( "" );
                    if ( eachEl < myStr.length ) {
                        endCap = myStr.length;
                    }
                }
                $this.html( [ myStr.substring( 0, endCap ), myStr.substring( endCap, myStr.length ).replace( /<(\w+)[^>]*>.*<\/\1>/gim, "" ).replace( /<(br|hr|img|input)[^<>]*\/?>/gim, "" ) ].join( "" ) );
            } else {
                $this.html( myStr );
            }
            myResults[ myResultsKey ] = myStrOrig;
            $this.html( [ "", $this.html(), settings.trail[ 0 ], "" ].join( "" ) )
            .find(".truncate_show",this).click( function() {
                if ( $this.find( ".truncate_more" ).length == 0 ) {
                    $this.append( [ "<div class='truncate_more' style='display: none;'>", myResults[ myResultsKey ], settings.trail[ 1 ], "</div>" ].join( "" ) )
                    .find( ".truncate_hide" ).click( function() {
                        $this.find( ".truncate_more" ).css( "background", "#fff" ).fadeOut( "normal", function() {
                            $this.find( ".truncate_less" ).css( "background", "#fff" ).fadeIn( "normal", function() {
                                fixIE( this );
                                $(this).css( "background", "none" );
                            });
                            fixIE( this );
                        });
                        return false;
                    });
                }
                $this.find( ".truncate_less" ).fadeOut( "normal", function() {
                    $this.find( ".truncate_more" ).fadeIn( "normal", function() {
                        fixIE( this );
                    });
                    fixIE( this );
                });
                jQuery(".truncate_show",$this).click( function() {
                    $this.find( ".truncate_less" ).css( "background", "#fff" ).fadeOut( "normal", function() {
                        $this.find( ".truncate_more" ).css( "background", "#fff" ).fadeIn( "normal", function() {
                            fixIE( this );
                            $(this).css( "background", "none" );
                        });
                        fixIE( this );
                    });
                    return false;
                });
                return false;
            });
        }
    });
};

         $('#post-21 > * > ul').addClass('testimonials');
         $('#post-21 > * > p').remove();
         $('.wpcf7-response-output').insertBefore('.wpcf7-form');
         $('.testimonialText > p:first').addClass('mainQuote');
         $('.mainQuote').truncate(300);
         $('.mainQuote').wrap('<a href="/clients"></a>');
      });
      


   </script>

</head>
<body>

<div class="page">
    <div class="header">
        <div class="logo">
        <a href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('template_directory'); ?>/images/logo.gif" alt="jessica rogers: logo" width="214" height="94" />
        </a>
        </div>
        <div id="topNav">
            <div id="navcontainer">
               <ul id="navlist">
                  <?php wp_list_pages('title_li=0&sort_column=menu_order');?>
               </ul>
           </div>
        </div>
    </div>
 