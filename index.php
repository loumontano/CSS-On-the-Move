<!DOCTYPE html>
<html>
<head>
	<title>R/GA - CSS3 On the Move </title>
	<link href="css/reset.css" rel="stylesheet" type="text/css" />
	<link href="css/slides/deck.core.css" rel="stylesheet" type="text/css" />
	<link href="css/slides/deck.hash.css" rel="stylesheet" type="text/css" />
	<link href="css/slides/deck.navigation.css" rel="stylesheet" type="text/css" />
	<link href="css/slides/deck.status.css" rel="stylesheet" type="text/css" />
	<link href="css/slides/swiss.css" rel="stylesheet" type="text/css" />
	<link href="css/slides/horizontal-slide.css" rel="stylesheet" type="text/css" />
	<link href="css/demo-styles.css" rel="stylesheet" type="text/css" />
	<link href="css/slides/demo-snippets.css" rel="stylesheet" type="text/css" />
	<script src="js/Three.js"></script>
	<script src="js/RequestAnimationFrame.js"></script>
	<script src="js/slides/modernizr.custom.js"></script>
	
</head>
<body class="deck-container">
	<section id="title" class="slide">
		<h1><span>CSS3</span><br />On the Move</h1>
		<span class="signature">by Lourdes Montano</span>
		
		<div class="footer"><img src="img/logo.jpg" /></div>
	</section>
	
	<section id="agenda" class="slide">
		<h2>CSS3 On the Move - Agenda</h2>
		<div class="snow-container">
			<div class="snow-pattern"></div>
		</div>	
		<ul style="margin: 70px 40px 0;">
			  <li><h4>What is this?</h4></li>
			  <li><h4>Usage</h4></li>
			  <li><h4>Transform</h4></li>
			  <li><h4>Pros & Cons</h4></li>
			  <li><h4>Browser support</h4></li>
			  <li><h4>Vendor Prefixes</h4></li>
			  <li><h4>Transition</h4></li>
			  <li><h4>Animation</h4></li>
		</ul>
		<div class="footer"><img src="img/logo.jpg" /></div>
	</section>
	
	<section id="whatis" class="slide">
		<h2>What is this?</h2>		
		<h3></h3>		
		<img src="img/css3-logo.jpg" class="css-logo" />
		<ul class="wots" style="margin: 30px 40px;">
			<li>CSS3 provides the ability to transform, move or animate elements by changing their values.</li>
			<li>You can cause the changes in a property to take place over a period of time.</li>
			<li>CSS3 lets you decide which properties to animate, when the animation will start (delay), how long the transition will last (duration), and how the transition will run (timing-functions).</li>
       	</ul>		
		<div class="footer"><img src="img/logo.jpg" /></div>
	</section>

	<section id="usage" class="slide">
		<h2>Usage</h2>
		<img src="img/slide-pic.jpg" class="css-logo" />
		<ul class="wots" style="margin: 30px 40px;">
			<li>Animations are not just a nice to have, they help the user to have a better UX.</li>
			<li>By creating a smooth animation, the page looks more friendly to the user.</li>
			<li>This means...Friendly = I will come back again.</li>
			<li>Use them for communicating something, use them for purpose. </li>
       	</ul>
		<div class="footer"><img src="img/logo.jpg" /></div>
	</section>

	<section id="usage" class="slide">
		<h2>Usage</h2>
		<img src="img/foca.jpg" class="css-logo" />
		<ul class="wots" style="margin: 30px 40px;">
			<li>Otherwise....we get back to Flash again!</li>
       	</ul>
		<div class="footer"><img src="img/logo.jpg" /></div>
	</section>

	<section id="usage" class="slide">
		<h2>Types of animations</h2>

		<ul class="wots" style="margin: 30px 40px;">
			<h3 class="subtitle">Transform</h3>
			<div class="menu-container">
				<h6 class="demo-menu-title">Interests</h6>
				<h2 class="demo-menu-subtitle">Select one</h2>
				<ul class="demo-menu-links">
					<li><a href="" class="demo-menu-link">Sports</a></li>
					<li><a href="" class="demo-menu-link">Theatre</a></li>
					<li><a href="" class="demo-menu-link">Wildlife</a></li>
					<li><a href="" class="demo-menu-link">Music</a></li>
					<li><a href="" class="demo-menu-link">Movies</a></li>
					<li><a href="" class="demo-menu-link">Beauty</a></li>
					<li><a href="" class="demo-menu-link">Travel</a></li>
				</ul>
			</div>
       	</ul>
		<div class="footer"><img src="img/logo.jpg" /></div>
	</section>

	<section id="usage" class="slide">
		<h2>Types of animations</h2>
		<ul style="margin: 30px 40px; width: 90%;">
			<h3 class="subtitle">Transform</h3>
			<li>The CSS transform property allows you to visually manipulate element, literally transforming their appearance. Elements can be translated, rotated, scaled, and skewed according to the values set.</li>
			<li>transform: translate(12px, 50%); | transform: scale(2) | transform: rotate(45deg)</li>
			<li>transform: skewX(30deg) | transform: perspective(17px)</li>
			<br />
			<a class="jsbin-embed" href="http://jsbin.com/usemox/1/embed?live">JS Bin</a><script src="http://static.jsbin.com/js/embed.js"></script>
		</ul>
		<div class="footer"><img src="img/logo.jpg" /></div>
	</section>

	<section id="pros-cons" class="slide">
		<h2>Pros & Cons</h2>
		
		<ul style="margin: 30px 40px;">
			<h3 class="subtitle">Pros</h3>
			<li>CSS transitions are more performant than JS (GPU vs. CPU)</li>
			<li><a href="http://css3.bradshawenterprises.com/blog/jquery-vs-css3-transitions/" target="_blank">http://css3.bradshawenterprises.com/blog/jquery/vs-css3-transitions/</a></li>
			<li>CSS3 transitions are considered browser-native. And native is faster.</li>			
			<li>Colors can be animated easily</li>
			<li>No need to rely on plugins</li>
			<li>Better, Faster, Stronger...</li>

			<h3 class="subtitle">Cons</h3>
			<li>Browser support</li>
			<li>Vendor prefixes</li>
			<li>IE...</li>
		</ul>

		<div class="footer"><img src="img/logo.jpg" /></div>
	</section>

	<section id="browser-support" class="slide">
		<h2>Browser support</h2>
		<ul style="margin: 30px 40px;">
			<img src="img/browser-chart.jpg" style="margin-left: 25%; margin-top: 50px; float: left;" />
		</ul>
		<div class="footer"><img src="img/logo.jpg" /></div>
	</section>

	<section id="browser-support2" class="slide">
		<h2>Browser support</h2>
		<ul style="margin: 30px 40px;">
			<h3 class="subtitle">What if the browser doesn't support this?</h3>
			<li>The functionality won't be affected if the browser doesn't support animations, it will just look abrupt, but will be still usable.</li>

			<h3 class="subtitle">Yeah yeah...but...Vendor prefixes?</h3>
			<li>CSS vendor prefixes are a way for browser makers to add support for new CSS features in a sort of testing and experimentation period.</li>
			<li>-webkit- (Safari, Chrome)</li>
			<li>-moz- (Firefox)</li>
			<li>-ms- (Internet Explorer)</li>
			<li>There are more, old prefixes for browsers like Konqueror.</li>
			<li><a href="http://leaverou.github.io/prefixfree/" target="_blank">http://leaverou.github.io/prefixfree/</a></li>
		</ul>
		<div class="footer"><img src="img/logo.jpg" /></div>
	</section>

	<section id="types-transition1" class="slide">
		<h2>Types of animations</h2>
		<ul class="wots" style="margin: 30px; width: 100%;">
			<h3 class="subtitle">Transition</h3>
			<div clasS="demo-transition-container">
				<ul clasS="demo-photo-slide">

					<li class="caption-cont">
						<img src="img/demos/pic04.jpg">
						<figcaption>
						    <div>
						      <h3>The Place</h3>
						      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						    </div>
					    </figcaption>
					</li>

					<li><img src="img/demos/pic01.jpg">
						<div class="caption-cont">
							<div class="social-share-bg"></div>
							<ul clasS="share-icons">
								<li class="ico social-pin"></li>
								<li class="ico social-fb"></li>
								<li class="ico social-tw"></li>
							</ul>
						</div>
					</li>

					<li><img src="img/demos/pic02.jpg">
						<div class="caption-cont">
							<div class="bg-demo-caption">
								<caption>Puerto Montt</caption>
								<p class="date">3 days ago</p>
							</div>
						</div>
					</li>

					<li><img src="img/demos/pic03.jpg">
						<div class="fav-cont">
							<div class="heart">Oh!</div>
						</div>
					</li>
				</ul>
			</div>
       	</ul>

		<div class="footer"><img src="img/logo.jpg" /></div>
	</section>

	<section id="types-transition1" class="slide">
		<h2>Types of animations</h2>
		<ul style="margin: 30px 40px; width: 90%;">
			<h3 class="subtitle">Transition</h3>
			<li>CSS Transitions allows property changes in CSS values to occur smoothly over a specified duration changes values.</li>
			<li>Syntax: <strong>transition-property</strong> | <strong>transition-duration</strong> | <strong>transition-timing-function</strong> | <strong>transition-delay</strong></li>
			<br /><br />
			<a class="jsbin-embed" href="http://jsbin.com/asoday/1/embed?live">JS Bin</a><script src="http://static.jsbin.com/js/embed.js"></script>
		</ul>

		<div class="footer"><img src="img/logo.jpg" /></div>
	</section>

	<section id="types-transition1" class="slide">
		<h2>Types of animations</h2>
		<ul class="wots" style="margin: 30px 40px; width: 100%;">
			<h3 class="subtitle">Animation</h3>
			<div class="demo-animation-container">

				<div class="demo-animation cloudy-container">
					<div class="cloudy-pattern"></div>
					<div class="demo-home-title cloud-title"></div>
				</div>

				<div class="demo-animation storm-container">
					<div class="storm-pattern"></div>
					<div class="storm-icon"></div>
					<div class="demo-home-title storm-title"></div>
				</div>

				<div class="demo-animation sunny-container">
					<div class="sunny-animation"></div>
					<div class="demo-home-title sunny-title"></div>
				</div>

				<div class="demo-animation rain-container">
					<div class="rain-pattern"></div>
					<div class="demo-home-title rain-title"></div>
				</div>

				
			</div>
       	</ul>

	</section>

	<section id="types-transition1" class="slide">
		<h2>Types of animations</h2>
		<ul style="margin: 30px 40px; width: 90%;">
			<h3 class="subtitle">Animation</h3>
			<li>Good for what transitions cannot do, for example repeating.</li>
			<li>Specify when the change will happen in percent, or the keywords "from" and "to", which is the same as 0% and 100%. 0% is the beginning of the animation, 100% is when the animation is complete.</li>
			<li>You must define the name and the duration of the animation. The default value is 0.</li>
			<li><a href="http://leaverou.github.io/animatable/" target="_blank" style="color: #C00!important;">http://leaverou.github.io/animatable/</a></li>
		</ul>
		<br />
		<a class="jsbin-embed" href="http://jsbin.com/ovowel/1/embed?live">JS Bin</a><script src="http://static.jsbin.com/js/embed.js"></script>

		<div class="footer"><img src="img/logo.jpg" /></div>
	</section>

	<section id="summary" class="slide">
		<h2>Conclusions</h2>
        <ul>
        	<li><h3>Faster and more performant than jQuery animations.</h3></li>
        	<li><h3>No plugins.</h3></li>
        	<li><h3>Enhance UX.</h3></li>
            <li><h3>Still have to use vendor prefixes (for now).</h3></li>
            <li><h3>Less file size.</h3></li>
        </ul>
        <div class="footer"><img src="img/logo.jpg" /></div>
	</section>

	<section id="summary" class="slide">
		<h2>Useful Links</h2>
        <ul>
            <li><h3><a class="links" href="http://vimeo.com/49879139" target="_blank">http://vimeo.com/49879139</a></h3></li>
			<li><h3><a class="links" href="http://vimeo.com/31719130" target="_blank">http://vimeo.com/31719130</a></h3></li>
			<li><h3><a class="links" href="http://h5bp.github.io/Effeckt.css/dist/" target="_blank">http://h5bp.github.io/Effeckt.css/dist/</a></h3></li>
			<li><h3><a class="links" href="http://leaverou.github.io/animatable/" target="_blank">http://leaverou.github.io/animatable/</a></h3></li>
			<li><h3><a class="links" href="http://cubic-bezier.com/" target="_blank">http://cubic-bezier.com/</a></h3></li>
			<li><h3><a class="links" href="http://css-tricks.com/snippets/css/keyframe-animation-syntax/" target="_blank">http://css-tricks.com/snippets/css/keyframe-animation-syntax/</a></h3></li>
			<li><h3><a class="links" href="http://www.w3c.org" target="_blank">http://www.w3c.org</a></h3></li>
			<li><h3><a class="links" style="color: #C00!important;" href="http://codepen.io/noahblon/full/GKflw" target="_blank">http://codepen.io/noahblon/full/GKflw</a></h3></li>
        </ul>
        <div class="footer"><img src="img/logo.jpg" /></div>
	</section>

	<section id="questions" class="slide">
		<h2>CSS3 On the Move</h2>
		<div class="feedback-slide">Questions?</div>
		<div class="footer"><img src="img/logo.jpg" /></div>
	</section>
	<section id="thanks" class="slide">
		<h2>CSS3 On the Move</h2>
		<div class="feedback-slide">Thanks!</div>
		<h3 class="email-field">lourdes.montano@rga.com</h3>
		<div class="footer"><img src="img/logo.jpg" /></div>
	</section>
	<a href="#" title="Previous" class="deck-prev-link">&#8592;</a>
	<a href="#" title="Next" class="deck-next-link">&#8594;</a>
	<p class="deck-status">
		<span class="deck-status-current"></span>&nbsp;/
		<span class="deck-status-total"></span>
	</p>
	<a href="#" class="exit-fullscreen">x</a>

	<script src="js/jquery-1.7.min.js"></script>
	<script src="js/slides/deck.core.js"></script>
	<script src="js/slides/deck.hash.js"></script>
	<script src="js/slides/deck.status.js"></script>
	<script src="js/slides/deck.navigation.js"></script>
	<script src="js/slides/slides.js"></script>
</body>
</html>