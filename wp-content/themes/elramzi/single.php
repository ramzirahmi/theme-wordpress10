<?php get_header(); ?>

<div class="container">
  <div class="row" id="primary">
    <div id="content" class="col-sm-8" >
      <article class="post">
        <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        ?>
        <header>
          <h3><a href="<?php the_permalink();?>"a><?php the_title();?></h3>
          <div class="post-details">
           <i class="fa fa-user"></i><?php the_author_posts_link() ;?>
            <i class="fa fa-clock-o "></i><time><?php the_time('F j, Y');?> </time>
            <i class="fa fa-folder-open"></i><a href=""> <?php the_category(', ');?></a>
               <i class="fa fa-tags"></i>tagged<a href=""> <?php the_tags()?>
               </a>
              <div class="post-comments-badge">
                <a href=""><i class="fa fa-comments"></i><?php comments_number(0,1,'%') ?></a>
              </div>
            </div>
        </header>
        <div class="post-img">
           <?php the_post_thumbnail('',['class'=>'img-responsive img-thumbnail','title' => 'post Image']) ?>
        </div>
        <div class="post-body">
      <?php the_content(); ?>
        </div>


      <div id="comments">
        <div class="comments-wrap">
         <?php
   if ( comments_open()  ) {
    ?>

     <h5><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></h5>

    <?php
    echo '<ul class="list-unstyled list-comment">';
    $arg  = array(
      'max_depth'           => 2, 
      'type'                => 'comment',
      'avatar_size'         => 39,
      'reverse_top_level'   => true,
      'per_page'            => 5,
    );
   wp_list_comments($arg);
   echo '</ul>';
     
     $arr = array(
      'class_submit'           => 'btn btn-info',
      'label_submit'           => 'Add Comment',
      'comment_notes_before'   => '',
      'title_reply'            => ''
      
     );
   comment_form($arr);
   }
   else
   {
      echo 'sorry comments disabled';
   }
   ?>
      <?php
                    }
                }
                ?>
</article>
</div>


      <div class="col-sm-4">
      	<div class="widget">
        
    <?php if(is_active_sidebar('main-sidebar')){
    dynamic_sidebar('main-sidebar');
    }
       
     ?>
  </div>
    </div>


       </div>
      </div>


<?php get_footer(); ?>