<?php
/*Template Name: Appypie Landing Page */
get_header();

while (have_posts()): the_post();
	$title = get_the_title();
	$images = wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>

<div class="main">
   <section id="subscription" class="banner">
   	<div class="banner-content-area">
    <div class="container">
     <div class="row">
       <div class="col-lg-6 col-sm-12 pt-5">
       	<h1><?php echo $title;?></h1>
       	<h2><?php echo $excerpt;?></h2>
       <form class="form-inline">
		<div class="form-group mb-2 subscription">
			<?php echo do_shortcode(get_post_meta($post->ID,'subscriptionform',true)); ?>
		</div>
		</form>
       </div>
       <div class="col-lg-6 col-sm-12 mt-40"><img src="<?php echo $images;?>"></div>
     </div>
   </div>
    <div class="client-area">
   	 <div class="container-fluid text-center py-4">
   	 	<img class="clientarea_desktop" src="<?php echo get_post_meta($post->ID, 'clientarea_desktop', true );?>">
		<img class="clientarea_mobile" src="<?php echo get_post_meta($post->ID, 'clientarea_mobile', true );?>"> 
   	 </div>
   </div>
</div>
   </section>

<?php echo get_the_content();?>
<?php
endwhile;
get_footer();
?>