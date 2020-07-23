<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * 
 *
 * @package WordPress
 * @subpackage Appy_Pie
 * @since Appy Pie
 */
?>
<footer>
	<div class="footer-menu pb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<?php echo do_shortcode('[text_block id=84 description="Appie Pie Design Landing Page Certificate"]');?>
				</div>
			</div>

				<div class="row  pb-4">
					<?php echo do_shortcode('[Reviewaggregator]'); ?>
				</div>
			<?php echo do_shortcode('[text_block id=86 description="Footer Menu"]');?>
		</div>
	</div>
	<div class="footer-botom-area">
		<div class="container py-3">
			<div class="row">
			      <?php echo do_shortcode('[text_block id=87 description="Footer Bottom Menu"]');?>	
				<div class="col-xl-3 col-sm-12 text-light text-right">
					<?php echo do_shortcode('[text_block id=83 description="Footer Social Media Links"]');?>
				</div>
			</div>

			<div class="col-md-12 text-light text-center copyRight"><?php echo do_shortcode('[text_block id=82 description="Copyright 2020"]');?></div>
		</div>
	</div>
<div class="web-cookies-policy">
	<div class="container bc">
		<div class="k-flex align-items-center cookies-main">
			<div>
				<h2 class="cookies-policy-head">This website uses cookies</h2>
				<p class="cookies-policy-desc">Appy Pie uses cookies on appypie.com & its subdomains to analyse usage of the website, to enable content sharing on social 
					media, and offer ads that match your interests.</p>
			</div>	
			<div class="ml-auto cookies-btn">
				<button class="btn accept-ploicy acceptCookie">Accept</button>
				<button class="btn modify-ploicy modifyCookie">Manage cookies <span class="arrow-cookies ml-2"><i class="fas fa-angle-down"></i></span></button>
			</div>		
		</div>
		<div class="web-cookies-settings">
			<h2 class="cookies-policy-head">Manage Cookies</h2>
			<div class="cookies-settings-accordian">  
					<div id="accordionCookies" class="accordionCookies">
					  <div class="card">
						<div class="card-header">
							<div class="k-flex align-items-center">
								<div class="flex-grow-1">
									<a class="card-link" data-toggle="collapse" href="#collapseOne">
										Analytics Cookies  
									  </a>
								</div>
								<div class="ml-auto px-3">
									<label class="mb-0 mr-3">
										<input type="radio" name="onOff" checked> <span class="onoff-text">ON</span>
									</label>
									<label class="mb-0">
										<input type="radio" name="onOff"> <span class="onoff-text">OFF</span>
									</label>
								</div>
								<div class="cookie-acc-arow">
									<a class="card-link" data-toggle="collapse" href="#collapseOne">
										<span class="arrow-cookies"><i class="fas fa-angle-down"></i></span>
									  </a>
									
								</div>
							</div>
						  
						</div>
						<div id="collapseOne" class="collapse" data-parent="#accordionCookies">
						  <div class="card-body">
							These cookies are used to collect information about how visitors use our site. The information gathered does not identify any individual visitor. It is aggregated and entirely anonymous. 
						  </div>
						</div>
					  </div>
					  <div class="card">
						<div class="card-header border-0">
							<div class="k-flex align-items-center">
								<div class="flex-grow-1">
									<a class="card-link" data-toggle="collapse" href="#collapseTwo">
										Social media and Advertising  
									  </a>
								</div>
								<div class="ml-auto px-3">
									<label class="mb-0 mr-3">
										<input type="radio" name="onOff2" checked> <span class="onoff-text">ON</span>
									</label>
									<label class="mb-0">
										<input type="radio" name="onOff2"> <span class="onoff-text">OFF</span>
									</label>
								</div>
								<div class="cookie-acc-arow">
									<a class="card-link" data-toggle="collapse" href="#collapseTwo">
										<span class="arrow-cookies"><i class="fas fa-angle-down"></i></span>
									  </a>
									
								</div>
							</div>
						</div>
						<div id="collapseTwo" class="collapse" data-parent="#accordionCookies">
						  <div class="card-body">
							These cookies are used when you share information using a social media sharing button or “like” button on our sites, link your account, or engage with our content on or through a social networking 
							site such as Facebook, Linkedin, Twitter etc. These cookies track your browsing habits and let us show you ads that match your interests.
						  </div>
						</div>
					  </div>
					</div> 
					<div class="mt-3 text-right">
						<button class="btn accept-ploicy saveCookiesPref">Save Preferences</button>
						<button class="btn modify-ploicy canCookiesPref">Cancel</button>
					</div>
			</div> 
		</div>
	</div>
</div>
</footer>
<script src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div> <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/966112351/?value=0&amp;guid=ON&amp;script=0"/> </div>
</noscript>
<?php echo do_shortcode('[sharpspringtraking]'); // add sharpspring traking scrip 01/10/2019 ?>
<!-- Start Alexa Certify Javascript update 17-08-2017 -->
<script>
_atrk_opts = { atrk_acct:"Z2BIh1aIE700GW", domain:"appypie.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=Z2BIh1aIE700GW" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->
<!-- end new script -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NFPSNM2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
setTimeout(function() {
    var headID = document.getElementsByTagName("head")[0];         
    var newScript = document.createElement('script');
    newScript.src = '//widget.trustpilot.com/bootstrap/v5/tp.widget.sync.bootstrap.min.js';
    headID.appendChild(newScript);
}, 20000);
</script>
<script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
<script>
$(window).scroll(function() {
if ($(this).scrollTop()) {
if ($(this).scrollTop() > 50) {
$('.header-effect').addClass("squeezelogo");
} else if ($(this).scrollTop() < 50) {
$('.header-effect').removeClass("squeezelogo");
}
} else {
$('.header-effect').removeClass("squeezelogo");
}
});
if ($(window).width() > 768){
$('.banner').height($(window).height());
}
</script>
<script>
	$('.owl-carousel').owlCarousel({
    margin:35,
    loop:true,
    autoWidth:true,
    items:4,
    nav:true,
})


///// cookies /////
$('.web-cookies-policy').addClass('active');
$('.acceptCookie').click(function(){
	$('.web-cookies-policy').removeClass('active');
	$('.web-cookies-settings').removeClass('active');  
});
$('.modifyCookie').click(function(){
	$('.web-cookies-settings').toggleClass('active');
	$(this).find('.arrow-cookies').toggleClass('rotated-arrow')
});
$('.saveCookiesPref, .canCookiesPref').click(function(){
	$('.web-cookies-settings').removeClass('active'); 
	$('.arrow-cookies').removeClass('rotated-arrow')
});
///// cookies /////
</script>

<script>
$( "#footer-menu-id li a" ).removeClass( "nav-link" );
$( "#footer-menu-id li" ).addClass( "d-inline-block" );
</script>

<script>
$(document).ready(function(){
$('#navbar-btn').click(function(){
//alert();
//$('#navbarNav').toggle(2000);
$('#navbarNav').hasClass('show') ? $('#navbarNav').removeClass('show showNavbar') : $('#navbarNav').addClass('show showNavbar');
}); 
});
</script>

<?php wp_footer(); ?>
</body>
</html>
