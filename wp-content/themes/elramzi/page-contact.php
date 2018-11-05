<?php
$thumbnail_url=wp_get_attachment_url(get_post_thumbnail_id($post->ID));
 get_header();?>

<?php if(has_post_thumbnail()){ ?>
<section class="feature-images" style="background:url('<?php echo $thumbnail_url;?>')no-repeat;background-size:cover;" data-type="background" data-speed="2">
	<h1 class="page-title"><?php the_title() ;?></h1>
</section>
<?php } else { ?>
<section class="feature-images feature-images-default" data-type="background" data-speed="2">
<h1 class="page-title"><?php the_title() ;?></h1>
</section>
<?php } ?>

<section id="contact">
	<div class="container">
      <div class="section-content">
      	<?php while (have_posts()) : the_post();?>
      	 <?php the_content();?>
      	<?php endwhile ; ?>
       
      </div>
      </div>
    </section>

<?php if(has_post_thumbnail()): ?>
<section class="feature-images" style="background:url('<?php echo $thumbnail_url;?>')no-repeat;background-size:cover;" data-type="background" data-speed="2"> 
<?php endif ; ?>


























<?php get_footer();?>