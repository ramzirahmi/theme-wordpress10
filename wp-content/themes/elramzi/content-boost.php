<?php 
$section_image=get_field('section_image');
$section_title=get_field('section_title');
$section_descrption=get_field('section_descrption');
$section_title1=get_field("section_title1");
$section_descrption1=get_field('section_descrption1');
$section_title2=get_field('section_title2');
$section_descrption2=get_field('section_descrption2');

?>
<section id="boost-income">
    <div class="container">
      <div class="section-header">
      	<?php if( !empty($section_image)) {?>
      	<img class="img-responsive img-thumbnail" 
      	src="<?php echo $section_image['url'];?>" 
      	alt="<?php echo $section_image['alt'];?>">
      	<?php };?>
        
        <h2><?php  echo $section_title ;?></h2>
        <p class="lead"><?php echo $section_descrption;?> </p>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <h3><?php echo $section_title1 ; ?></h3>
          <p class="lead"><?php echo $section_descrption1 ;?>
          </p>
       </div>
       <div class="col-sm-6">
         <h3><?php echo $section_title2 ;?></h3>
         <p><?php echo $section_descrption2 ;?></p>
       </div>
      </div>
    </div>
    </section>