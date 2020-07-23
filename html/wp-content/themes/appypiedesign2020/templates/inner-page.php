<?php
/*Template Name: Inner Page */
get_header();

while (have_posts()): the_post();
	$title = get_the_title();
	$excerpt = get_the_excerpt();
	$images = wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>

<div class="main">
   <section id="subscription" class="banner">
   	<div class="banner-content-area">
    <div class="container">
     <div class="row">
       <div class="col-lg-6 col-sm-12 pt-5 ">
         <h1><?php echo $title;?></h1>
         <h2><?php echo $excerpt;?></h2>
		<?php echo get_post_meta($post->ID, 'cta_button', true); ?>
       </div>
       <div class="col-lg-6 col-sm-12 bg-new-onlinw" style="background: url(<?php echo $images;?>);">
				<!---<img src="<?php //echo $images;?>">--->
			 </div>
     </div>
   </div>
    <div class="client-area">
   	 <div class="container-fluid text-center py-4">
   	 	<?php echo get_post_meta($post->ID, 'clientarea', true );?>
   	 </div>
   </div>
</div>
   </section>

<?php echo get_the_content();?>
<?php
endwhile;
get_footer();
?>