<?php
/*
Template Name: Animations Example
*/
?>
<?php get_header(); ?>
	<section id="animations-top">
		<div class="container">
			<div class="col-md-12 center">
				<h1 id="animationSandbox" style="font-size:7rem;color:#fff !important;" class="white">Animation.css</h1>
				<h3 class="white">Elegantly Animate things easily...</h3>
			</div>
		</div>
	</section>
	<section id="animation-content" style="margin-top:30px;">
			<main class="site__content island container" role="content">
			  <div class="wrap" style="text-align: center;">
			    <form>
			      <select style="font-size: 24px;" class="input input--dropdown js--animations">
			        <optgroup label="Attention Seekers">
			          <option value="bounce">bounce</option>
			          <option value="flash">flash</option>
			          <option value="pulse">pulse</option>
			          <option value="rubberBand">rubberBand</option>
			          <option value="shake">shake</option>
			          <option value="swing">swing</option>
			          <option value="tada">tada</option>
			          <option value="wobble">wobble</option>
			        </optgroup>

			        <optgroup label="Bouncing Entrances">
			          <option value="bounceIn">bounceIn</option>
			          <option value="bounceInDown">bounceInDown</option>
			          <option value="bounceInLeft">bounceInLeft</option>
			          <option value="bounceInRight">bounceInRight</option>
			          <option value="bounceInUp">bounceInUp</option>
			        </optgroup>

			        <optgroup label="Bouncing Exits">
			          <option value="bounceOut">bounceOut</option>
			          <option value="bounceOutDown">bounceOutDown</option>
			          <option value="bounceOutLeft">bounceOutLeft</option>
			          <option value="bounceOutRight">bounceOutRight</option>
			          <option value="bounceOutUp">bounceOutUp</option>
			        </optgroup>

			        <optgroup label="Fading Entrances">
			          <option value="fadeIn">fadeIn</option>
			          <option value="fadeInDown">fadeInDown</option>
			          <option value="fadeInDownBig">fadeInDownBig</option>
			          <option value="fadeInLeft">fadeInLeft</option>
			          <option value="fadeInLeftBig">fadeInLeftBig</option>
			          <option value="fadeInRight">fadeInRight</option>
			          <option value="fadeInRightBig">fadeInRightBig</option>
			          <option value="fadeInUp">fadeInUp</option>
			          <option value="fadeInUpBig">fadeInUpBig</option>
			        </optgroup>

			        <optgroup label="Fading Exits">
			          <option value="fadeOut">fadeOut</option>
			          <option value="fadeOutDown">fadeOutDown</option>
			          <option value="fadeOutDownBig">fadeOutDownBig</option>
			          <option value="fadeOutLeft">fadeOutLeft</option>
			          <option value="fadeOutLeftBig">fadeOutLeftBig</option>
			          <option value="fadeOutRight">fadeOutRight</option>
			          <option value="fadeOutRightBig">fadeOutRightBig</option>
			          <option value="fadeOutUp">fadeOutUp</option>
			          <option value="fadeOutUpBig">fadeOutUpBig</option>
			        </optgroup>

			        <optgroup label="Flippers">
			          <option value="flip">flip</option>
			          <option value="flipInX">flipInX</option>
			          <option value="flipInY">flipInY</option>
			          <option value="flipOutX">flipOutX</option>
			          <option value="flipOutY">flipOutY</option>
			        </optgroup>

			        <optgroup label="Lightspeed">
			          <option value="lightSpeedIn">lightSpeedIn</option>
			          <option value="lightSpeedOut">lightSpeedOut</option>
			        </optgroup>

			        <optgroup label="Rotating Entrances">
			          <option value="rotateIn">rotateIn</option>
			          <option value="rotateInDownLeft">rotateInDownLeft</option>
			          <option value="rotateInDownRight">rotateInDownRight</option>
			          <option value="rotateInUpLeft">rotateInUpLeft</option>
			          <option value="rotateInUpRight">rotateInUpRight</option>
			        </optgroup>

			        <optgroup label="Rotating Exits">
			          <option value="rotateOut">rotateOut</option>
			          <option value="rotateOutDownLeft">rotateOutDownLeft</option>
			          <option value="rotateOutDownRight">rotateOutDownRight</option>
			          <option value="rotateOutUpLeft">rotateOutUpLeft</option>
			          <option value="rotateOutUpRight">rotateOutUpRight</option>
			        </optgroup>

			        <optgroup label="Sliding Entrances">
			          <option value="slideInUp">slideInUp</option>
			          <option value="slideInDown">slideInDown</option>
			          <option value="slideInLeft">slideInLeft</option>
			          <option value="slideInRight">slideInRight</option>

			        </optgroup>
			        <optgroup label="Sliding Exits">
			          <option value="slideOutUp">slideOutUp</option>
			          <option value="slideOutDown">slideOutDown</option>
			          <option value="slideOutLeft">slideOutLeft</option>
			          <option value="slideOutRight">slideOutRight</option>
			          
			        </optgroup>
			        
			        <optgroup label="Zoom Entrances">
			          <option value="zoomIn">zoomIn</option>
			          <option value="zoomInDown">zoomInDown</option>
			          <option value="zoomInLeft">zoomInLeft</option>
			          <option value="zoomInRight">zoomInRight</option>
			          <option value="zoomInUp">zoomInUp</option>
			        </optgroup>
			        
			        <optgroup label="Zoom Exits">
			          <option value="zoomOut">zoomOut</option>
			          <option value="zoomOutDown">zoomOutDown</option>
			          <option value="zoomOutLeft">zoomOutLeft</option>
			          <option value="zoomOutRight">zoomOutRight</option>
			          <option value="zoomOutUp">zoomOutUp</option>
			        </optgroup>

			        <optgroup label="Specials">
			          <option value="hinge">hinge</option>
			          <option value="rollIn">rollIn</option>
			          <option value="rollOut">rollOut</option>
			        </optgroup>
			      </select>

			      <button class="btn-extra btn-2 btn-2a butt js--triggerAnimation">Animate it</button>
			    </form>
			  </div>
			</main><!-- /.site__content -->
	</section>
	<section style="margin-bottom:50px;">
		<div class="container">
			<hr>
			<div class="col-sm-6">
				<h3>About Animate.css</h3>
				<p>Animate.css is a great library to use in order to make elements on the page animate easily. You can read full documentation <a href="https://github.com/daneden/animate.css">here</a>.</p>
			</div>
			<div class="col-sm-6">
				<h3>Using Animate.css</h3>
				<p>By default, jQuery is included in the SuperBoot Theme. Here is the code snippet to trigger with jQuery in order to fire the animation:
				<pre>$('#yourElement').addClass('animated bounceOutLeft');</pre>
				</p>
			</div>
		</div>
	</section>
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

    $('.js--animations').change(function(){
      var anim = $(this).val();
      testAnim(anim);
    });
  });

</script>

<?php get_footer(); ?>