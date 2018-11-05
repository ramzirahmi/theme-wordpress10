<?php 

$instructor_title=get_field('instructor_title');
$instructor_name=get_field('instructor_name');
$instructor_descrption=get_field('instructor_descrption');
$twitter_username=get_field('twitter_username');
$facebook_username=get_field('facebook_username');
$google_username=get_field('google_username');
$section_number_title=get_field('section_number_title');
$section_number_students=get_field('section_number_students');
$section_number_reviews=get_field('section_number_reviews');
$section_number_cours=get_field('section_number_cours');
$section_instructor_image=get_field('section_instructor_image');
?>

<section id="instructor">
  <div class="container"> <!-- container -->
    <div class="row">
      <div class="col-sm-8">
        <div class="row"> <!-- row -->
        <div class="col-md-8">
            <h2><?php echo $instructor_title ;?><small><?php echo $instructor_name ;?></small></h2>
        </div>
          <div class="col-md-4">
            <?php if(!empty($facebook_username)):?>
            <a href="http://www.facebook.com/<?php echo $facebook_username ;?>" target="_blank" class="social"><i class="fa fa-facebook fa-lg"></i></a>
          <?php  endif;?>
           <?php if(!empty($twitter_username)) :?>
            <a href="http://www.twitter.com/<?php echo $twitter_username ?>" target="_blank" class="social"><i class="fa fa-twitter fa-lg"></i></a>
          <?php endif ; ?>
          <?php if(!empty($google_username)):?>
            <a href="http://www.google.com/<?php echo $google_username ; ?>" target="_blank" class="social"><i class="fa fa-google fa-lg"></i></a>
          <?php endif ; ?>
          </div>
        </div> <!-- row -->
          <p><?php echo $instructor_descrption ; ?></p>
          <hr>
          <h3><?php echo $section_number_title ; ?></h3>
          <div class="row"> <!--row -->
            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  <?php echo $section_number_students ; ?><span> students</span>
                </div>
              </div>
            </div>
            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  <?php echo $section_number_reviews ; ?><span> reviews</span>
                </div>
              </div>
            </div>
            <div class="col-xs-4">
              <div class="num">
                <div class="num-content"><?php echo $section_number_cours ; ?>
                  <span> cours</span>
                </div>
              </div>
            </div>
          </div> <!--row -->
        </div> <!-- col-sm-8 -->

      <div class="col-sm-4">
        <?php if( !empty($section_instructor_image)) {?>
        <img class="img-responsive img-thumbnail" 
        src="<?php echo $section_instructor_image['url'];?>" 
        alt="<?php echo $section_instructor_image['alt'];?>">
        <?php };?>
      </div>
    </div> <!-- row -->
  </div> <!-- container -->
</section>