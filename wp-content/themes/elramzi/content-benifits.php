<?php

$section_image1=get_field('section_image1');
$section_title5=get_field('section_title5');
$section_title6=get_field('section_title6');
$section_descrption3=get_field('section_descrption3');
$section_title7=get_field('section_title7');
$section_descrption4=get_field('section_descrption4');
$section_title8=get_field('section_title8');
$section_descrption5=get_field('section_descrption5');
$section_title9=get_field('section_title9');
$section_discrption6=get_field('section_discrption6');
$section_tilt10=get_field('section_tilt10');
$section_descrption7=get_field('section_descrption7');
 ?> 

    <section id="who-benifits">
      <div class="contain
      er">
      <div class="section-header">
        <?php if( !empty($section_image1)) {?>
      	<img class="img-responsive img-thumbnail" 
      	src="<?php echo $section_image1['url'];?>" 
      	alt="<?php echo $section_image1['alt'];?>">
      	<?php };?>
        <h2><?php echo $section_title5;?></h2>
      </div>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
           <h3><?php echo $section_title6 ; ?></h3>
 <p class="lead"><?php echo $section_descrption3 ;?></p>

           <h3><?php echo $section_title7;?></h3>
 <p class="lead"><?php echo $section_descrption4 ;?></p>

           <h3><?php echo $section_title8 ;?></h3>
 <p class="lead"><?php echo $section_descrption5 ;?> </p>
         <h3><?php echo $section_title9 ; ?></h3>
 
 <p class="lead"><?php echo $section_discrption6 ;?></p>

 <h3><?php echo $section_tilt10 ; ?></h3>
 <p class="lead"> <?php echo $section_descrption7 ;?> </p>
  </div> 
 </div>
 </div>
</section>