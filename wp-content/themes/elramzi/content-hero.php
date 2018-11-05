<?php 


$prelaunch_price =get_field("prelaunch_price");
$prelaunch_price1 =get_field("prelaunch_price1");
$price1=get_field("price1");
$launch_price =get_field("launch_price");
$launch_price1 =get_field("launch_price1");
$price2 =get_field("price2");
$final_price =get_field("final_price");
$final_price1 =get_field("final_price1");
$price3 =get_field("price3");
$section_title3=get_field("section_title3");
$btn_url=get_field("btn_url");


get_header()?>

<section id="hero" data-type="background" data-speed="5">
  <article>
    <div class="container clearfix"> <!--container -->
      <div class="row"> <!--row -->
        <div class="col-sm-5">
          <img src="<?php bloginfo('stylesheet_directory');?> /images/133.jpg" alt="bootstrap to wordpress" class="logo">
        </div>
         <div class="col-sm-7">
           <h1><?php bloginfo('name');?></h1>
           <p class="lead"><?php bloginfo('description');?></p>
           <div id="price-timeline">
            <div class="price active">
                  <h4> <?php echo $prelaunch_price ; ?> 
                  <small><?php echo $prelaunch_price1 ; ?> </small>
                   </h4>
                  <span>$<?php echo $price1 ;?></span>
            </div>
             <div class="price">
                  <h4><?php echo $launch_price ?> 
                  <small><?php echo $launch_price1 ?></small></h4>
               <span>$<?php echo $price2 ;?></span>
            </div>
            <div class="price">
                   <h4><?php echo $final_price ;?>
                  <small><?php echo $final_price1 ;?></small></h4>
                  <span>$<?php echo $price3 ;?></span>
            </div>
           </div>
           <p> <a class="btn btn-lg btn-danger" href=" <?php echo $btn_url;?>" role="button">
           <?php echo $section_title3;?></a></p>
         </div> <!-- col-->
      </div> <!--row-->
    </div> <!-- container-->
  </article>
  </section>