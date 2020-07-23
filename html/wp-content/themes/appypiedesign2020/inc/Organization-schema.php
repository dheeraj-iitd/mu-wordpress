<?php
include_once(dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/wp-load.php');
include_once(dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/wp-includes/shortcodes.php');
add_shortcode( 'Organizationschema', 'Organization_schema' );
function Organization_schema( $atts ) {
$url = home_url();
?>
<script type="application/ld+json">
{ "@context" : "https://schema.org",
  "@type" : "Organization",
  "name" : "Appy Pie",
  "logo": "https://images.appypie.com/wp-content/uploads/2020/03/16070955/appypie-logo.svg", 
  "url" : "https://www.appypie.com",
  "sameAs" : [ "https://www.facebook.com/AppyPieInc",
    "https://www.trustpilot.com/review/www.appypie.com",
    "https://twitter.com/AppyPieInc",
    "https://www.linkedin.com/company/appy-pie-inc-",
    "https://www.pinterest.com/appypie/",
    "https://www.instagram.com/AppyPieInc/"]
}
</script>
<?php } ?>