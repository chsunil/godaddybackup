<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="google-site-verification" content="pUVChg0p3dc1qkvlcAS6ojceUlZRP5G_EyJg-_HWEJ4" />
<?php
	if ( is_page ( 1819 )  ) {
     // if current page is Thankyou (1819) send to previous page 
     ?>
	<meta http-equiv="refresh" content="5;url=javascript:window.history.go(-1)">
	<?php
} else {
     ?>
	
	<?php }
	?>
	
    <meta charset="<?php bloginfo('charset'); ?>">
    

    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <meta name="author" content="<?php the_author_meta('display_name', 1); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" >	
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
	<?php wp_head(); ?> 
	<script type="application/ld+json">
{
 "@context": "https://schema.org/",
 "@type": "WebPage",
 "name": "ADing Agency",
 "speakable":
 {
  "@type": "SpeakableSpecification",
  "xpath": [
    "/html/head/title",
    "/html/head/meta[@name='description']/@content"
    ]
  },
 "url": "https://www.ading.agency/"
 }
  </script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148944663-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-148944663-1');
</script>
	<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "WebSite",
"@id": "#website",
"name": "ADing Agency",
"url": "https://www.ading.agency",
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "ADing Agency",
  "alternateName": "ADingAgency",
  "url": "https://www.ading.agency/",
  "logo": "https://www.ading.agency/wp-content/uploads/2019/04/Ading-Logo-white-1.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91 949-297-3688",
    "contactType": "customer service",
    "contactOption": "TollFree",
    "areaServed": "IN",
    "availableLanguage": "en"
  },
  "sameAs": [
    "https://www.facebook.com/adingagency/",
    "https://twitter.com/adingagency",
    "https://www.instagram.com/ading_agency/",
    "https://www.linkedin.com/company/ading-agency/",
    "https://www.youtube.com/channel/UCr1O_vck0W10MOZm5xvHQAg?view_as=subscriber",
    "https://in.pinterest.com/adingagency/"
  ]
}
</script>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": " ADing Agency - Digital Marketing Services (SEO, SMO, ORM & PPC)",
    "image": " https://www.ading.agency/  ",
    "url": " https://www.ading.agency/ ",
    "telephone": " +91-94929 73688",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": " Inani House, Level 4, Kavuri Hills Phase 2 Rd, Near D-Mart, ",
        "addressLocality": " Madhapur, Hyderabad, Telangana ",
        "postalCode": " 500033",
        "addressCountry": "India",
        "addressRegion": " Hyderabad, Telangana "
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": " 17.4389813 ",
        "longitude": " 78.3932213 "
    },
    "openingHours": [
        "Mon-Sat Open 24 hours "
    ],
    "priceRange": "Rs. 10000 - Rs.100000"
}
</script>
<meta name="DC.title" content="ADing Agency -Digital Marketing Services" />
<meta name="geo.region" content="IN" />
<meta name="geo.placename" content="Hyderabad" />
<meta name="geo.position" content="17.440858;78.391629" />
<meta name="ICBM" content="17.440858, 78.391629" />
<meta name="geo.region" content="US-TX" />
<meta name="geo.placename" content="Irving" />
<meta name="geo.position" content="32.829518;-96.944218" />
<meta name="ICBM" content="32.829518, -96.944218" />
<meta name="geo.region" content="US-FL" />
<meta name="geo.placename" content="Jacksonville" />
<meta name="geo.position" content="30.332184;-81.655651" />
<meta name="ICBM" content="30.332184, -81.655651" />
<?php 
	if ( is_page(2459) ) {

	?>
	<style>

#onesignal-bell-container {
   display:none
}

	</style>
	<?php } ?>
</head>
	
    <body <?php body_class(); ?>>
	
	
				<!--preloader function-->
                <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'preloader_set')) :  
                 $derwati_preload = ot_get_option( 'preloader_set' ); if ($derwati_preload == 'show_home') {  ?>
                    
                    <?php  if (is_front_page() ){ ?>
                            <!-- Preloader -->
                            <div id="preloader">
                                <div id="status">
                                    <div class="sk-folding-cube">
                                      <div class="sk-cube1 sk-cube"></div>
                                      <div class="sk-cube2 sk-cube"></div>
                                      <div class="sk-cube4 sk-cube"></div>
                                      <div class="sk-cube3 sk-cube"></div>
                                    </div>
                                </div><!--status-->
                            </div><!--/preloader-->
                    
                    <?php } 
                } else if ($derwati_preload == 'show_all') {?>
                
                       	<!-- Preloader -->
                        <div id="preloader">
                            <div id="status">
                                <div class="sk-folding-cube">
                                    <div class="sk-cube1 sk-cube"></div>
                                    <div class="sk-cube2 sk-cube"></div>
                                    <div class="sk-cube4 sk-cube"></div>
                                    <div class="sk-cube3 sk-cube"></div>
                                 </div>
                            </div><!--status-->
                        </div><!--/preloader-->
                
                <?php  } endif ; endif; ?>
				