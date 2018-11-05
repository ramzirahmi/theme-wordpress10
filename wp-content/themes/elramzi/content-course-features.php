<?php 
$feature_section_image3=get_field('feature_section_image3');
$feature_section_title=get_field('feature_section_title');
?>

<section id="course-features">
  <div class="container">
    <div class="section-header">
     <?php if( !empty($feature_section_image3)) {?>
      	<img class="img-responsive img-thumbnail" 
      	src="<?php echo $feature_section_image3['url'];?>" 
      	alt="<?php echo $feature_section_image3['alt'];?>">
      	<?php };?>
     
      <h2><?php echo $feature_section_title ?></h2>
    </div>
    <div class="row">
      <?php $loop=new wp_Query(array(
        'post_type'=>'course_feature',
        'orderby'=>'post_id',
        'order'=>'ASC'
      ));?>
  <?php while($loop->have_posts()):$loop->the_post();?>
    <div class="col-sm-2">
        <i class="<?php the_field('course_feature_icon') ;?>"></i>
        <h4><?php the_title() ;?></h4>
      </div>
  <?php endwhile; wp_reset_query();?>
</div>
  </div>
</section>