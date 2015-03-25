<?php
/*
Template Name: Modal Example
*/
?>
<?php get_header(); ?>
		<section id="modal-top">
			<div class="container">
				<div class="col-md-5 mg-tp-xl">
					<img class="grayscale header-modal" src="<?php bloginfo('template_directory');?>/images/modal-example.png" />
				</div>
				<div class="col-md-7">
					<h1 style="font-size:7rem;" class="white">Modal Windows</h1>
					<h3 class="white">Modal windows can be very useful to show alerts, marketing news, or pop up content in an overlayed window to focus the attention of your viewer. I found myself at times needing these and having to lookup a library or build from scratch. This was time consuming so we decided to add one of the best ones we used before into SuperBoot.</h3>
				</div>
			</div>
		</section>
		<section id="icon-style">
			<div class="container">
				<div class="mg-btm-m col-md-12">
					<h2 class="mg-btm-m bold">Modal Window Usage</h2>
					<h4>1. Create Your Modal Window</h4>
					<div class="col-md-7">
						<p>You can create a modal window that you will continuously use within the theme if you would like and add it to the header or footer file. Or if it's page specific, you can simply add it to the page that you will need ot use it. Add the class of the modal effect that you want to your modal window. The complete reference is below. To close the modal window just add a button with <span class="inline-code">class="md-close"</span>.</p> <p><span class="red"><span class="bold">Note:</span> Only one modal effect per window.</span></p>
						<pre>&lt;div class="md-modal md-effect-1" id="modal-1"&gt;<br>     &lt;div class="md-content"&gt;<br>          &lt;h3&gt;Modal Dialog&lt;/h3&gt;<br>          &lt;p>Modal Type: Fade In &amp; Scale&lt;/p&gt;<br>          &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, architecto, amet dolorem tenetur pariatur ipsum autem consectetur earum voluptates dignissimos eum dolor corporis nulla aspernatur sed maiores maxime harum labore.&lt;/p&gt;<br>          &lt;button class="btn btn-default md-close">Close me&lt;/button&gt;<br>     &lt;/div&gt;<br>&lt;/div&gt;
						</pre>
					</div>
					<div class="col-md-5">
						<p>Result</p>
						<div class="md-content">
							<h3>Modal Dialog</h3>
							<div>
								<p>Modal Type: Fade In &amp; Scale</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, architecto, amet dolorem tenetur pariatur ipsum autem consectetur earum voluptates dignissimos eum dolor corporis nulla aspernatur sed maiores maxime harum labore.</p>
								<button class="btn btn-default md-close">Close me</button>
							</div>
						</div>
					</div>
				</div>
				<div class="mg-btm-m col-md-12">
					<h4>2. Add Overlay Window</h4>
					<div class="col-md-5">
						<p>You can add an overlay window very easily and easily change the properties of the overlay. If you want to set a default overlay for your modal, goto <span class="inline-code">css/modal-styles.css</span> and there you can edit the default overlay color. </p>
					</div>
					<div class="col-md-4">
						<p>Some Example Triggers.</p>
						<pre>&lt;div class="md-overlay"&gt;&lt;/div&gt;</pre>
					</div>
					<div class="col-md-3">
						<p>Click to see Result.</p>
						<button class="btn md-video mg-rt-s btn-default md-trigger" data-modal="modal-overlay">Example 1</button>
					</div>
				</div>
				<div class="mg-btm-m col-md-12">
					<h4>3. Add the Button/Trigger for Modal</h4>
					<div class="col-md-5">
						<p>You can set any thing as the trigger for a modal or program one through javascript, it's important that your trigger includes <span class="inline-code">class="md-trigger"</span> and then a modal window reference such as <span class="inline-code"> data-modal="modal-1"</span>. This will refernce the modal window that you wish to pop up. </p>
					</div>
					<div class="col-md-7">
						<p>Some Example Triggers.</p>
						<pre>&lt;button class="btn md-trigger" data-modal="modal-1"&gt;Example 1&lt;/button&gt;<br>&lt;button class="btn md-trigger" data-modal="modal-2">Example 2&lt;/button&gt;<br>&lt;button class="md-trigger" data-modal="modal-3">Example 3&lt;/button&gt;</pre>
					</div>
					<div class="col-md-12">
						<p>Result</p>
						<button class="btn md-video mg-rt-s btn-default md-trigger" data-modal="modal-video">Example 1</button>
						<button class="btn mg-rt-s btn-warning md-trigger" data-modal="modal-2">Example 2</button>
						<button class="btn btn-primary md-trigger" data-modal="modal-3">Example 3</button>
					</div>
				</div>
			</div>
		</section>
<!--======================================================================
		        START OF ALL MODAL WINDOWS FOR REFERENCE
=========================================================================-->
		<div class="md-modal md-effect-1" id="modal-overlay">
			<button style="display:none;" class="md-close">Close</button>
		</div>
		<div class="md-modal md-effect-1" id="modal-video">
			<iframe width="560" height="315" src="//www.youtube.com/embed/vw61gCe2oqI" frameborder="0" allowfullscreen></iframe>
			<button style="display:none;" class="md-close">Close</button>
		</div>
		<div class="md-modal md-effect-1" id="modal-1">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>Fade In &amp; Scale</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-2" id="modal-2">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-3" id="modal-3">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-4" id="modal-4">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-5" id="modal-5">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-6" id="modal-6">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-7" id="modal-7">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-8" id="modal-8">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-9" id="modal-9">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-10" id="modal-10">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-11" id="modal-11">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-12" id="modal-12">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-13" id="modal-13">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-14" id="modal-14">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-15" id="modal-15">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-16" id="modal-16">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-17" id="modal-17">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-18" id="modal-18">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-19" id="modal-19">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-20" id="modal-20">
			<div class="md-content">
				<h3>Modal Example</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
<!--======================================================
		        END OF MODAL WINDOWS
======================================================-->
	<section id="modal-page-content">
		<div class="container">
			<h2 class="bold">Modal Effect References</h2>
				<div class="col-md-12">
				<table class="table modal-table">
					<tr>
						<th>Modal Effect</th>
						<th>Modal Class</th>
						<th>Example</th>
					</tr>
					<tr>
						<td>Fade In &amp; Scale Effect</td>
						<td style="vertical-align:middle;"><span class="inline-code">.md-effect-1</span></td>
						<td><button class="btn btn-default md-trigger" data-modal="modal-1">Fade in &amp; Scale</button></td>
					</tr>
					<tr>
						<td>Slide In Right Effect</td>
						<td style="vertical-align:middle;"><span class="inline-code">.md-effect-2</span></td>
						<td><button class="btn btn-default md-trigger" data-modal="modal-2">Slide In Right</button></td>
					</tr>
					<tr>
						<td>Slide In Bottom Effect</td>
						<td style="vertical-align:middle;"><span class="inline-code">.md-effect-3</span></td>
						<td><button class="btn btn-default md-trigger" data-modal="modal-3">Slide in Bottom</button></td>
					</tr>
					<tr>
						<td>Spinning Newspaper Effect</td>
						<td style="vertical-align:middle;"><span class="inline-code">.md-effect-4</span></td>
						<td><button class="btn btn-default md-trigger" data-modal="modal-4">Newspaper</button></td>
					</tr>
					<tr>
						<td>Fall In Effect</td>
						<td style="vertical-align:middle;"><span class="inline-code">.md-effect-5</span></td>
						<td><button class="btn btn-default md-trigger" data-modal="modal-5">Fall In</button></td>
					</tr>
					<tr>
						<td>Side Fall Effect</td>
						<td style="vertical-align:middle;"><span class="inline-code">.md-effect-6</span></td>
						<td><button class="btn btn-default md-trigger" data-modal="modal-6">Side Fall</button></td>
					</tr>
					<tr>
						<td>Top Slide In Effect</td>
						<td style="vertical-align:middle;"><span class="inline-code">.md-effect-7</span></td>
						<td><button class="btn btn-default md-trigger" data-modal="modal-7">Top Slide</button></td>
					</tr>
					<tr>
						<td>3D Flip - Horizontal Effect</td>
						<td style="vertical-align:middle;"><span class="inline-code">.md-effect-8</span></td>
						<td><button class="btn btn-default md-trigger" data-modal="modal-8">3D Flip Horizontal</button></td>
					</tr>
					<tr>
						<td>3D Flip - Vertical Effect</td>
						<td style="vertical-align:middle;"><span class="inline-code">.md-effect-9</span></td>
						<td><button class="btn btn-default md-trigger" data-modal="modal-9">3D Flip Vertical</button></td>
					</tr>
					<tr>
						<td>3D Sign Effect</td>
						<td style="vertical-align:middle;"><span class="inline-code">.md-effect-10</span></td>
						<td><button class="btn btn-default md-trigger" data-modal="modal-10">3D Sign</button></td>
					</tr>
					<tr>
						<td>Super Scaled Effect</td>
						<td style="vertical-align:middle;"><span class="inline-code">.md-effect-11</span></td>
						<td><button class="btn btn-default md-trigger" data-modal="modal-11">Super Scaled</button></td>
					</tr>
					<tr>
						<td>Just Me Effect</td>
						<td style="vertical-align:middle;"><span class="inline-code">.md-effect-12</span></td>
						<td><button class="btn btn-default md-trigger" data-modal="modal-12">Just Me</button></td>
					</tr>
					<tr>
						<td>3D Slit Effect</td>
						<td style="vertical-align:middle;"><span class="inline-code">.md-effect-13</span></td>
						<td><button class="btn btn-default md-trigger" data-modal="modal-13">3D Slit</button></td>
					</tr>
					<tr>
						<td>3D Rotate Bottom Effect</td>
						<td style="vertical-align:middle;"><span class="inline-code">.md-effect-14</span></td>
						<td><button class="btn btn-default md-trigger" data-modal="modal-14">3D Rotate Bottom</button></td>
					</tr>
					<tr>
						<td>3D Rotate In Left Effect</td>
						<td style="vertical-align:middle;"><span class="inline-code">.md-effect-15</span></td>
						<td><button class="btn btn-default md-trigger" data-modal="modal-15">3D Rotate In Left</button></td>
					</tr>
					<tr>
						<td>Top Fade In Effect</td>
						<td style="vertical-align:middle;"><span class="inline-code">.md-effect-16</span></td>
						<td><button class="btn btn-default md-trigger" data-modal="modal-16">Top Fade In</button></td>
					</tr>
				</table>
				</div>
		</div><!-- /container -->
		
	</section>
	<!-- OVERLAY ELEMENT -->
	<div class="md-overlay"></div>

	<script>
	// $(document).ready(function(){	
	// 	$('.md-video').on('click', function () { 
	//  		$('#modal-video').html('<iframe width="560" height="315" src="//www.youtube.com/embed/vw61gCe2oqI" frameborder="0" allowfullscreen></iframe><span style="postion:absolute; right:-5px; top:-5px;" class="glyphicon glyphicon-remove white md-close"></span>"');
	//  		$('.body').on('click', function () {
	//  			$('#modal-video').html('');
	// 		});  
	// 	});
		
	// });
	</script>

<?php get_footer(); ?>