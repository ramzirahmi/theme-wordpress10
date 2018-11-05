<?php  get_header();?>

<div class="container">
  <div class="row" id="primary">


     
    
<main id="content" class="col-sm-8" role="main">
     <article class="post">
      <?php if (have_posts()):
  while (have_posts()):
     the_post(); 
     ?>
     <header>
          <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
          <div class="post-details">
           <i class="fa fa-user fa-lg"></i>  <?php the_author_posts_link() ?>
            <i class="fa fa-clock-o fa-lg "></i><time> <?php the_time('F j, Y');?></time>
            <i class="fa fa-folder-open fa-lg"></i> <?php the_category(', ');?>
            <i class="fa fa-tags fa-lg"></i>
               <?php 
          if(has_tag()){
            the_tags();}
            else{
              echo'tags: there no tags';
            }
           ?>
              
              <div class="post-comments-badge">
                <i class="fa fa-comments fa-lg"></i> <?php comments_number(0 , 1,'%');?>
                 
              </div>
            </div>
        </header>
        <div class="post-img">
           <?php the_post_thumbnail('',['class'=>'img-responsive img-thumbnail','title' => 'post Image']) ?>
        </div>
        <div class="post-excerpet">
          <p><?php the_excerpt();?><a href="post.html"></a></p>
        </div>
         <?php endwhile; endif; ?>
    <div class="clearfix"></div>
      </article>
  </main>




 <aside class="col-sm-4">
  <div class="widget">
        
    <?php if(is_active_sidebar('main-sidebar')){
    dynamic_sidebar('main-sidebar');
    }
       
     ?>
         
     </div>
       </aside>
         
           </div>
       </div>
  </div>
       





<?php get_footer(); ?>