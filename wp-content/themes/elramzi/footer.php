<div class="footer text-center">
  <div class="container">
    <div class="col-sm-3">
      <p><a href=""><img src="<?php bloginfo('stylesheet_directory');?> /images/010.jpg"></a></p>
    </div>
    <div class="col-sm-6 ">
       <?php footer_nav_menu();?>
    <!--  <nav>
        <ul class="list-unstiled list-inline">
          <li>home</li>
          <li>blog</li>
          <li>resource</li>
          <li>contact</li>
          <li class="signup-link"><a href=""></a>sign up now</li>
        </ul>
      </nav>
    -->
    </div>
    <div class="col-sm-3">
      <div class="pull-right">
        &copy;<?php echo date('Y')?> <?php bloginfo('name')?>
      </div>
    </div>
  </div>
  </div>
 
<div id="topbotton" style="display: block;">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
  </div>

<?php wp_footer(); ?>
</body>
</html>