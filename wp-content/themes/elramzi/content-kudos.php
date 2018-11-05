<?php 
?>
<section id="kudos">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2>what people are saying about ramzi</h2>
<?php $loop=new wp_Query(array(
        'post_type'=>'testimonial',
        'orderby'=>'post_id',
        'order'=>'ASC'
      ));?>
  <?php while($loop->have_posts()):$loop->the_post();?>
        <div class="row">
          <div class="col-sm-4">
     <?php if(has_post_thumbnail()){
        the_post_thumbnail(array());
      } ?>
          </div>
          <div class="col-sm-8">
            <blockquote>
             <?php the_content() ;?>
            </blockquote>
          </div>
          <div class="clearfix"></div>
    <?php endwhile ; wp_reset_query();?>
        </div>
      </div>
    </div> 
  </div>
</section>
<section id="signup">
  <div class="container">
    <div class="col-sm-6 col-sm-offset-3">
      <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
      <p><a href="#" class="btn btn-lg btn-block btn-success">yes sign me up!</a></p>
    </div>
  </div>
</
<div id="topbotton" style="display: block;">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
  </div>