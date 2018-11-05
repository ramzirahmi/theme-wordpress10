<?php 
get_header(); 
$thumbnail_url=wp_get_attachment_url(get_post_thumbnail_id($post->ID));

?>
<?php if(has_post_thumbnail()){ ?>
<section class="feature-images" style="background:url('<?php echo $thumbnail_url;?>')no-repeat;background-size:cover;" data-type="background" data-speed="2">
	<h1 class="page-title"><?php the_title() ;?></h1>
</section>
<?php } else { ?>
<section class="feature-images feature-images-default" data-type="background" data-speed="2">
<h1 class="page-title"><?php the_title() ;?></h1>
</section>
<?php } ?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <section class="main-content">
        
        	<?php while(have_posts()): the_post();?>
        		<?php the_content();?>
        	<?php endwhile; ?>
        <hr>

     <?php $loop=new wp_Query(array(
        'post_type'=>'resources',
        'orderby'=>'post_id',
        'order'=>'ASC'
      ));?>
  
   <div class="resource-row clearfix">
   	<?php while($loop->have_posts()): $loop->the_post();?>
      <?php 
$resource_image=get_field("resource_image");
$resource_url=get_field("resource_url");
$resource_buttom=get_field("resource_buttom");
$resource_text=get_field("resource_text"); ?>
      <div class="resource">
        <img src="<?php echo $resource_image['url'] ;?>" alt="<?php echo $resource_image['alt'] ;?>">
      	
      <h2><a href="<?php echo $resource_url ;?>">
      	
           </a><?php the_title();?></h2>
            <?php the_content() ;?>
            <?php  if(!empty($resource_buttom)): ?>
     <a href="<?php echo $resource_url ;?>" class="btn btn-success"><?php echo $resource_text;?></a>
            <?php endif; ?>
          </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>       
  </section>
</div>
</div>
</div>

 <?php get_footer(); ?>