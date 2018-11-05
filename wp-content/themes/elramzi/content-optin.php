<?php 
$section_title4=get_field("section_title4");
$secton_buttom=get_field("secton_buttom");
$optin_buttom_text=get_field("optin_buttom_text");

get_header();?>


  <section id="optin">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <p class="lead"><?php echo $section_title4 ;?></p>
        </div>
        <div class="col-sm-4">
          <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#example"><?php echo $secton_buttom?></button>
    
        </div>
      </div>
    </div>
  </section>