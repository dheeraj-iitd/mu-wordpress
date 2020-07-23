<?php 
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Appy-Pie
 * @since Appy Pie
 */
?>
<!doctype html>
<?php
 error_reporting( error_reporting() & ~E_NOTICE );
 include_once(dirname(dirname(dirname(dirname(__FILE__)))).'/wp-includes/shortcodes.php');

 $country_array1 = array('GB','AX','AT','BE','CY','EE','FI','FR','GF','DE','GR','GP','IE','IT','LV','LT','LU','MT','MQ','YT','MC','NL','PT','RE','SM','SK','SI','ES','MF','PM','BL','SE','AU');

 $country_array = array('US','IN','GB','CA','AU','HK','FR','ES','DE','PT','MX','BR','BH','IT','NZ');

  if($_GET['appcountry']!='')
  {
    $country_code = $_GET['appcountry'];
  }
  else
  {
    if(isset($_SESSION['country_code'])) {
      $country_code = $_SESSION['country_code'];
    } else {
    if($_SERVER['HTTP_HOST']=='www.appypie.com'){
      $country_code = countryCode();
      $_SESSION['country_code']=$country_code;
     }
    }
    if($country_code=='')
    {
     $country_code = 'US';
    }
  }
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $current_rel_uri = parse_url($url,PHP_URL_PATH);
    if($country_code=='IN') {
  $langHrefTag = do_shortcode('[text_block id=88 description="href link IN"]'); 
  }
   else if($country_code=='GB')
  {
   $langHrefTag = do_shortcode('[text_block id=89 description="Href Link GB"]'); 
  }
   else if($country_code=='CA') 
  {
   $langHrefTag = do_shortcode('[text_block id=90 description="Href Link CA"]'); 
  }
   else if($country_code=='AU') 
  {
   $langHrefTag = do_shortcode('[text_block id=91 description="Href Link AU"]'); 
  }
   else
  {
   $langHrefTag = do_shortcode('[text_block id=92 description="Href Link US"]');
  }
   $langHrefTag = str_replace("__current_rel_uri__", $current_rel_uri, $langHrefTag);
  echo $langHrefTag;
?>
    <!-- Required meta tags -->
    <link rel="shortcut icon" href="https://images.appypie.com/wp-content/uploads/2020/04/01073810/favicon.png" type="image/x-icon">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php 
 // add Organization schema
 echo do_shortcode('[Organizationschema]'); 
?>

<!-- begin Convert Experiences code-->
<script type="text/javascript" src="//cdn-3.convertexperiments.com/js/10022902-10021672.js"></script>
<!-- end Convert Experiences code -->
<script> function createFcn(nm){(window.freshsales)[nm]=function(){(window.freshsales).push([nm].concat(Array.prototype.slice.call(arguments,0)))}; } (function(url,appToken,formCapture){window.freshsales=window.freshsales||[];if(window.freshsales.length==0){list='init identify trackPageView trackEvent set'.split(' ');for(var i=0;i<list.length;i++){var nm=list[i];createFcn(nm);}var t=document.createElement('script');t.async=1;t.src='https://d952cmcgwqsjf.cloudfront.net/assets/analytics.js';var ft=document.getElementsByTagName('script')[0];ft.parentNode.insertBefore(t,ft);freshsales.init('https://appypieincsales.freshsales.io','5f54ee9f77bebfd513765aa6e53d96363ccc6896235b2c5c3c9d5f69830f8a02',true);}})();</script>
<script>
  (function(i,s,o,g,r,a,m){i['ProfitWellObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m);
  })(window,document,'script','https://dna8twue3dlxq.cloudfront.net/js/profitwell.js','profitwell');
  profitwell('auth_token', '31af6562511025a38a52d0f89c70188a'); // Your unique Profitwell public API token 
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-NFPSNM2');</script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">

    <!--Globe Fonts-->
    <link rel="stylesheet" href="https://www.appypie.com/wp-content/themes/appypie2016/icons/css/fontello.css">
    <!--Globe Fonts-->
  <?php ob_start(); wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

  <header>
    <nav id="topNavAppy" class="navbar navbar-expand-lg fixed-top navbar-light header-effect" role="navigation" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
	
        <?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo_url = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			if($_SERVER['HTTP_HOST']=='design.appypie.com') { 
		?>
		
         <a class="navbar-brand logo" href="<?php echo do_shortcode('[text_block id=223 description="Logo URL"]');?>">
         <img src="<?php echo $logo_url[0]; ?>"></a>
		 
         <?php } else { ?>
		 
        <a class="navbar-brand logo" href="<?php echo get_site_url();?>"><img src="<?php echo $logo_url[0]; ?>"></a>
		
        <?php } ?>
        <button class="navbar-toggler" id="navbar-btn" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse auto" id="navbarNav">
        <?php  
          echo str_replace('sub-menu', 'feature-sub', 
          wp_nav_menu( array(
          'echo' => false,
          'menu'=> 'header',
          'menu_class'=> 'navbar-nav mr-auto',
          'menu_id'=> 'header-menu-id',
          'container' => '',
		  'link_before'    => '<span>',
		  'link_after'     => '</span>',
		  'items_wrap' => '<ul class="nav navbar-nav s-nav">%3$s</ul>'
          ))
          );
        ?>
        </div>
		 <div class="top-language-bar">
        <div class="search-box"> <div id="dirSearch" class="left-inner-addon"> <i class="icon-search-3"></i> <form role="search" method="get" id="search-form" action="https://design.appypie.com/"> <input type="search" value="" name="s" id="s" placeholder="Search..."> <input type="submit" id="searchsubmit" value="Go"><label for="s">Search</label><label for="searchsubmit">Search</label> </form> </div> </div>
        	<?php echo do_shortcode('[text_block id=105 description="Login Signup"]');?>
			<div class="globeDropdown">
			   <div class="dropbtn"><span class="iconz-globe"></span></div>
			   <div class="globeDropdown-content">
				  <div class="textwidget">
					 <aside id="text-2" class="widget widget_text">
						<div class="textwidget">
						   <?php echo do_shortcode('[text_block id=106 description="Top Side Menu"]');?>
						</div>
					 </aside>
				  </div>
			   </div>
			</div>
      		</div>
      </nav>
  </header>