<?php
/*
Template Name: Button Example
*/
?>
<?php get_header(); ?>
		<section id="button-top">
			<div class="container">
				<div class="col-md-5 mg-tp-xl">
					<button class="btn-extra btn-1 btn-1a">Click Me!</button>
					<button class="btn-extra btn-1 btn-1b">Button</button>
					<button class="btn-extra btn-1 btn-1c">BOOM</button>
					<button class="btn-extra btn-1 btn-1d">GET STARTED</button>
				</div>
				<div class="col-md-7">
					<h1 style="font-size:7rem;" class="white">Buttons.Buttons.<br>Buttons.</h1>
					<h3 class="white">We all love buttons and as simple as they are, sometime it can drive someone to click or not click. And As much as we adore the button options within Bootstrap, we felt that there should be more options. We have groups of different button types for variation amongst your website while maintaining style consitency.</h3>
				</div>
			</div>
		</section>
		<section id="icon-style">
			<div class="container">
				<div class="mg-btm-m col-md-12">
					<h2 class="mg-btm-m bold">Button Plus Usage</h2>
					<h4>1. Using a Button Plus</h4>
					<div class="col-md-7">
						<p>With a button element you need to add the <span class="inline-code">btn-extra</span> class that gives the button <strong>basic layout</strong>, then add the btn group number which identifies the style group of the button. Ex: <span class="inline-code">btn-1</span> - represents group 1. </p><p>Lastly, we need to add the button id, which has been done by labeling the buttons within a group with alphabetized letters. Example for the second button within group one would be. <span class="inline-code">btn-1b</span>. You can reference a full list of buttons below. </p>
						<p class="red"><strong>Note:</strong> On mobile devices the effects might not all work as intended.</p>
						<p>You can easily add icons from either the <a href="/bootstrap">Bootstrap</a> or the <a href="/icon">IcoMoon</a>. There are a few examples of buttons with icons already added. 
						<pre>&lt;button class="btn-extra btn-6 btn-6h"&gt;Example 1&lt;/button&gt;<br>&lt;button class="btn-extra btn-3 btn-3a icon-moon-cart"&gt;Example 2&lt;/button&gt;<br>&lt;button class="btn-extra btn-8 btn-8f"&gt;Example 3&lt;/button&gt;<br>&lt;button class="btn-extra btn-5 btn-5a icon-cart"&gt;Buy Now&lt;/button&gt;<br>&lt;button class="btn-extra btn-7 btn-7b icon-envelope"&gt;Send message&lt;/button&gt;
						</pre>
					</div>
					<div class="col-md-5">
						<button class="btn-extra btn-6 btn-6h">Example 1</button>
						<button class="btn-extra btn-3 btn-3a icon-cart">Example 2</button>
						<button class="btn-extra btn-8 btn-8f">Example 3</button>
						<button class="btn-extra btn-5 btn-5a icon-cart">Buy Now</button>
						<button class="btn-extra btn-7 btn-7b icon-envelope">Send message</button>
					</div>
				</div> 
				
				<div class="mg-btm-m col-md-12">
					<h4>2. Changing Style of Button Plus</h4>
					<div class="col-md-5">
						<p>You can quickly change the style by adding your own style for the button to the <span class="inline-code">style.css</span> or if you wish to edit the defaults, you can edit <span class="inline-code">button-plus.css</span>. </p><p><span class="red">Cautious: Editing the default styles at <span class="inline-code">button-plus.css</span>could break the button behavior.</span></p>
					</div>
					<div class="col-md-4">
						<p><strong>Code Snippet:</strong><br>Setting the button text & border in group 1 to dark-gray.</p>
						<pre>.btn-1:hover{<br>     color:#333;<br>     border: 3px solid #333;<br>}</pre>
					</div>
					<div class="col-md-3">
						<p>Result.</p>
						<div class="example-btn">
							<button class="btn-extra btn-1 btn-1c">BOOM</button>
						</div>
					</div>
				</div>
			</div>
		</section>
	<section id="modal-page-content">
		<div class="container">
		<h2 class="mg-btm-m bold">Button Plus Reference Guide</h2>
			<div class="col-md-12">
				<table class="table modal-table">
					<tr>
						<th>Button Group & Style</th>
						<th>Button Code</th>
						<th>Example</th>
					</tr>
					<tr class="hr-row">
						<td style="vertical-align:middle;"><h4>Button Group 1</h4></td>
						<td style="vertical-align:middle;"></td>
						<td></td>
					</tr>
					<tr>
					<tr>
						<td style="vertical-align:middle;">Background Fade In</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-1 btn-1a"&gt;Button 1a&lt;/button&gt;</span></td>
						<td class="center tb-dk"><button class="btn-extra btn-1 btn-1a">Button 1a</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Background Slide In Top</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-1 btn-1b"&gt;Button 1b&lt;/button&gt;</span></td>
						<td class="center tb-dk"><button class="btn-extra btn-1 btn-1b">Button 1b</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Background Swipe In</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-1 btn-1c"&gt;Button 1c&lt;/button&gt;</span></td>
						<td class="center tb-dk"><button class="btn-extra btn-1 btn-1c">Button 1c</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Background Middle Horizontal Expand</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-1 btn-1d"&gt;Button 1d&lt;/button&gt;</span></td>
						<td class="center tb-dk"><button class="btn-extra btn-1 btn-1d">Button 1d</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Background Angle Expand</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-1 btn-1e"&gt;Button 1e&lt;/button&gt;</span></td>
						<td class="center tb-dk"><button class="btn-extra btn-1 btn-1e">Button 1e</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Background Middle Vertical Expand</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-1 btn-1a"&gt;Button 1f&lt;/button&gt;</span></td>
						<td class="center tb-dk"><button class="btn-extra btn-1 btn-1f">Button 1f</button></td>
					</tr>
					<tr class="hr-row">
						<td style="vertical-align:middle;"><h4>Button Group 2</h4></td>
						<td style="vertical-align:middle;"></td>
						<td></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Background Fade In</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-2 btn-2a"&gt;Button 2a&lt;/button&gt;</span></td>
						<td class="center"><button class="btn-extra btn-2 btn-2a">Button 2a</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Background Fade In</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-2 btn-2b"&gt;Button 2b&lt;/button&gt;</span></td>
						<td class="center"><button class="btn-extra btn-2 btn-2b">Button 2b</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Background Fade In</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-2 btn-2c"&gt;Button 2c&lt;/button&gt;</span></td>
						<td class="center"><button class="btn-extra btn-2 btn-2c">Button 2c</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Background Fade In</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-2 btn-2d"&gt;Button 2d&lt;/button&gt;</span></td>
						<td class="center"><button class="btn-extra btn-2 btn-2d">Button 2d</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Background Fade In</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-2 btn-2e"&gt;Button 2e&lt;/button&gt;</span></td>
						<td class="center"><button class="btn-extra btn-2 btn-2e">Button 2e</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Background Fade In</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-2 btn-2f"&gt;Button 2f&lt;/button&gt;</span></td>
						<td class="center"><button class="btn-extra btn-2 btn-2f">Button 2f</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Background Fade In</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-2 btn-2g"&gt;Button 2g&lt;/button&gt;</span></td>
						<td class="center"><button class="btn-extra btn-2 btn-2g">Button 2g</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Background Fade In</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-2 btn-2h"&gt;Button 2h&lt;/button&gt;</span></td>
						<td class="center"><button class="btn-extra btn-2 btn-2h">Button 2h</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Background Fade In</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-2 btn-2i"&gt;Button 2i&lt;/button&gt;</span></td>
						<td class="center"><button class="btn-extra btn-2 btn-2i">Button<br> 2i</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Background Fade In</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-2 btn-2j"&gt;Button 2j&lt;/button&gt;</span></td>
						<td class="center"><button class="btn-extra btn-2 btn-2j">Button<br> 2j</button></td>
					</tr>
					<tr class="hr-row">
						<td style="vertical-align:middle;"><h4>Button Group 3</h4></td>
						<td style="vertical-align:middle;"></td>
						<td></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Shopping-Cart Button</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-3 btn-3a icon-moon-cart"&gt;<br>Button 3a&lt;/button&gt;</span></td>
						<td class="center color-3"><button class="btn-extra btn-3 btn-3a icon-cart">Button 3j</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Favorite Button</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-3 btn-3b icon-moon-star2"&gt;<br>Button 3b&lt;/button&gt;</span></td>
						<td class="center color-3"><button class="btn-extra btn-3 btn-3b icon-star-2">Button 3b</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Heart Favorite Button</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-3 btn-3c icon-moon-heart2"&gt;<br>Button 3c&lt;/button&gt;</span></td>
						<td class="center color-3"><button class="btn-extra btn-3 btn-3c icon-heart-2">Button 3c</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Settings Button</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-3 btn-3d icon-cog"&gt;<br>Button 3d&lt;/button&gt;</span></td>
						<td class="center color-3"><button class="btn-extra btn-3 btn-3d icon-cog">Button 3d</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Continue Button</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-3 btn-3e icon-arrow-right"&gt;<br>Button 3e&lt;/button&gt;</span></td>
						<td class="center color-3"><button class="btn-extra btn-3 btn-3e icon-arrow-right">Button 3e</button></td>
					</tr>
					<tr class="hr-row">
						<td style="vertical-align:middle;"><h4>Button Group 4</h4></td>
						<td style="vertical-align:middle;"></td>
						<td></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Continue Button</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-4 btn-4a icon-arrow-right"&gt;<br>Button 4a&lt;/button&gt;</span></td>
						<td class="center color-4"><button class="btn-extra btn-4 btn-4a icon-arrow-right">Continue</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Continue Button</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-4 btn-4b icon-arrow-left"&gt;<br>Button 4b&lt;/button&gt;</span></td>
						<td class="center color-4"><button class="btn-extra btn-4 btn-4b icon-arrow-left">Return</button></td>
					</tr>
					<tr class="hr-row">
						<td style="vertical-align:middle;"><h4>Button Group 5</h4></td>
						<td style="vertical-align:middle;"></td>
						<td></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Add to Cart Button</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-5 btn-5a icon-cart"&gt;<br>Button 5a&lt;/button&gt;</span></td>
						<td class="center color-5"><button class="btn-extra btn-5 btn-5a icon-cart"><span><span>Add to cart</span></span></button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Delete</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-5 btn-5a icon-remove"&gt;<br>Button 5a&lt;/button&gt;</span></td>
						<td class="center color-5"><button class="btn-extra btn-5 btn-5a icon-remove"><span><span>Delete</span></span></button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Settings</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-5 btn-5a icon-cog"&gt;<br>Button 5a&lt;/button&gt;</span></td>
						<td class="center color-5"><button class="btn-extra btn-5 btn-5a icon-cog"><span><span>Settings</span></span></button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Add to Cart - Side</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-5 btn-5b icon-cart"&gt;<br>Button 5b&lt;/button&gt;</span></td>
						<td class="center color-5"><button class="btn-extra btn-5 btn-5b icon-cart"><span><span>Add to Cart</span></span></button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Delete - Side</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-5 btn-5b icon-remove"&gt;<br>Button 5b&lt;/button&gt;</span></td>
						<td class="center color-5"><button class="btn-extra btn-5 btn-5b icon-remove"><span><span>Delete</span></span></button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Settings - Side</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-5 btn-5b icon-cog"&gt;<br>Button 5b&lt;/button&gt;</span></td>
						<td class="center color-5"><button class="btn-extra btn-5 btn-5b icon-cog"><span><span>Settings</span></span></button></td>
					</tr>
					<tr class="hr-row">
						<td style="vertical-align:middle;"><h4>Button Group 6</h4></td>
						<td style="vertical-align:middle;"></td>
						<td></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Hollow - Square</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-6 btn-6a"&gt;<br>Button 6a&lt;/button&gt;</span></td>
						<td class="center color-6"><button class="btn-extra btn-6 btn-6a">Button</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Hollow - Rounded</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-6 btn-6b"&gt;<br>Button 6b&lt;/button&gt;</span></td>
						<td class="center color-6"><button class="btn-extra btn-6 btn-6b">Button</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Hollow - Square</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-6 btn-6c"&gt;<br>Button 6c&lt;/button&gt;</span></td>
						<td class="center color-6"><button class="btn-extra btn-6 btn-6c">Button</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Hollow - Square - Dotted</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-6 btn-6d"&gt;<br>Button 6d&lt;/button&gt;</span></td>
						<td class="center color-6"><button class="btn-extra btn-6 btn-6d">Button</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Hollow - Square - Dotted</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-6 btn-6e"&gt;<br>Button 6e&lt;/button&gt;</span></td>
						<td class="center color-6"><button class="btn-extra btn-6 btn-6e">Button</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Hollow - Round - Dotted</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-6 btn-6f"&gt;<br>Button 6f&lt;/button&gt;</span></td>
						<td class="center color-6"><button class="btn-extra btn-6 btn-6f">Button</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Hollow - Square - Specks</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-6 btn-6g"&gt;<br>Button 6g&lt;/button&gt;</span></td>
						<td class="center color-6"><button class="btn-extra btn-6 btn-6g">Button</button></td>
					</tr>
					<td style="vertical-align:middle;">Hollow - Rounded - Specks</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-6 btn-6h"&gt;<br>Button 6h&lt;/button&gt;</span></td>
						<td class="center color-6"><button class="btn-extra btn-6 btn-6h">Button</button></td>
					</tr>
					<td style="vertical-align:middle;">Hollow - Round - Specks</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-6 btn-6i"&gt;<br>Button 6i&lt;/button&gt;</span></td>
						<td class="center color-6"><button class="btn-extra btn-6 btn-6i">Button</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Hollow - Square - Double</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-6 btn-6j"&gt;<br>Button 6j&lt;/button&gt;</span></td>
						<td class="center color-6"><button class="btn-extra btn-6 btn-6j">Button</button></td>
					</tr>
					<td style="vertical-align:middle;">Hollow - Rounded - Double</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-6 btn-6k"&gt;<br>Button 6k&lt;/button&gt;</span></td>
						<td class="center color-6"><button class="btn-extra btn-6 btn-6k">Button</button></td>
					</tr>
					<td style="vertical-align:middle;">Hollow - Round - Double</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-6 btn-6l"&gt;<br>Button 6l&lt;/button&gt;</span></td>
						<td class="center color-6"><button class="btn-extra btn-6 btn-6l">Button</button></td>
					</tr>
					<tr class="hr-row">
						<td style="vertical-align:middle;"><h4>Button Group 7</h4></td>
						<td style="vertical-align:middle;"></td>
						<td></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Order Item</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-7 btn-7a icon-truck"&gt;<br>Button 7a&lt;/button&gt;</span></td>
						<td class="center color-7"><button class="btn-extra btn-7 btn-7a icon-truck">Order Item</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Send Message</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-7 btn-7b icon-envelope"&gt;<br>Button 7b&lt;/button&gt;</span></td>
						<td class="center color-7"><button class="btn-extra btn-7 btn-7b icon-envelope">Send Message</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Forward Arrow</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-7 btn-7c btn-icon-only icon-arrow-right"&gt;<br>Button 7c&lt;/button&gt;</span></td>
						<td class="center color-7"><button class="btn-extra btn-7 btn-7c btn-icon-only icon-arrow-right"></button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Empty Trash</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-7 btn-7d btn-icon-only icon-remove"&gt;<br>Button 7d&lt;/button&gt;</span></td>
						<td class="center color-7"><button class="btn-extra btn-7 btn-7d btn-icon-only icon-remove"></button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Favorite - Heart</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-7 btn-7e btn-icon-only icon-heart"&gt;<br>Button 7e&lt;/button&gt;</span></td>
						<td class="center color-7"><button class="btn-extra btn-7 btn-7e btn-icon-only icon-heart"></button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Favorite - Star</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-7 btn-7f btn-icon-only icon-star"&gt;<br>Button 7f&lt;/button&gt;</span></td>
						<td class="center color-7"><button class="btn-extra btn-7 btn-7f btn-icon-only icon-star"></button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Icon Plus</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-7 btn-7g btn-icon-only icon-plus"&gt;<br>Button 7g&lt;/button&gt;</span></td>
						<td class="center color-7"><button class="btn-extra btn-7 btn-7g btn-icon-only icon-plus">Button</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Submit Success</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-7 btn-7h icon-envelope"&gt;<br>Button 7h&lt;/button&gt;</span></td>
						<td class="center color-7"><button onclick="$(this).addClass('btn-success-1');" class="btn-extra btn-7 btn-7h icon-envelope">Submit Form</button></td>
					</tr>
					<tr>
						<td style="vertical-align:middle;">Submit Error</td>
						<td style="vertical-align:middle;"><span class="inline-code">&lt;button class="btn-extra btn-7 btn-7h icon-envelope"&gt;<br>Button 7h&lt;/button&gt;</span></td>
						<td class="center color-7"><button onclick="$(this).addClass('btn-error');" class="btn-extra btn-7 btn-7h icon-envelope">Submit Form</button></td>
					</tr>
					
				</table>
			</div>
		</div>
	</section>

<?php get_footer(); ?>