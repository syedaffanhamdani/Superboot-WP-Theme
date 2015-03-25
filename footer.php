		
<footer id="footer">
	<div class="container">
		<div class="col-md-4">
          <p><a href="/about-us" class="footer-link">ABOUT US</a></p>
          <p><a href="http://getbootstrap.com/getting-started/" class="footer-link">BOOTSTRAP DOCUMENTATION</a></p>
          <p><a href="/animations" class="footer-link">CSS ANIMATIONS</a></p>
          <p><a href="/modal" class="footer-link">MODAL WINDOWS</a></p>
   		</div>
  		<div class="col-md-4">
          <p><a href="/buttons" class="footer-link">FANCY BUTTONS</a></p>
          <p><a href="/icon" class="footer-link">EASY ICONS</a></p>
          <p><a href="http://opensource.org/licenses/MIT" class="footer-link">MIT LICENSE</a></p>
          <p><a href="http://smartass.io" class="footer-link">SMARTASS.IO</a></p>
   		</div>
   		<div class="col-md-4">
     		<?php get_search_form(); ?>
        <a href="http://smartass.io"><img style="margin-top:30px;" src="<?php bloginfo('template_directory'); ?>/images/smartass-production.png" /></a>
   		</div>
</footer>
<?php wp_footer(); ?>

<!-- Document Processing Javascript -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modalEffects.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/button-plus.js"></script>
<script>
 function testAnim(x) {
    $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass();
    });
  };

  $(document).ready(function(){

    $('.js--triggerAnimation').click(function(e){
      e.preventDefault();
      var anim = $('.js--animations').val();
      testAnim(anim);
    });

    $('.js--animations').change(function(e){
      e.preventDefault();
      var anim = $(this).val();
      testAnim(anim);
    });

    $('.btn-7i').click(function(e){
      $('#trash-effect').addClass('trash-effect-active');
    });

    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},500);
                //$(this+'3').addClass('fadeInLeft animated');
                    
            }
            
        }); 
    
    });

  });
</script>
</body>
</html>