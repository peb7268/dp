<?php
	$img_dir = get_bloginfo('stylesheet_directory')."/img/";
	get_header(); 
?>
	
	<?php require_once 'framework/elements/slideshow.php'; ?>

<div id="wrapper-home" class="clearfix">
	<ul id="product-info">
		<li>
			<h4>Increased Revenue</h4>
			<img src="" alt="">
			<p>Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit.</p>
			<a href="#" class="blue-cta">More Info<span>▶</span></a>
		</li>
		<li>
			<h4>Streamline Dicatation</h4>
			<img src="" alt="">
			<p>Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit.</p>
			<a href="#" class="blue-cta">More Info<span>▶</span></a>
		</li>
		<li>
			<h4>Better Time Management</h4>
			<img src="" alt="">
			<p>Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit.</p>
			<a href="#" class="blue-cta">More Info<span>▶</span></a>
		</li>
		<li>
			<h4 class="signup">Sign Up</h4>
			<form action="" id="newsletter" class="clearfix">
				<input id="email" type="text" name='email' placeholder="Email address..">
				<input id="submit" type="submit" value="▶">
			</form>
			<p>
				Get info on our latest promotions &amp; tips.
			</p>

			<h4 class="news">Recent News</h4>
			<ul id="news_posts">
				<li><a href="#">Here is a product announcement</a></li>
				<li><a href="#">Here is a product 2</a></li>
				<li><a href="#">Tip on how to use the product</a></li>
				<li><a href="#">In condimentum facilisis porta.</a></li>
				<li><a href="#">In condimentum facilisis porta.</a></li>
				<li><a href="#">In condimentum facilisis porta.</a></li>
			</ul>
		</li>
	</ul>
</div><!-- #wrapper -->

<?php get_footer(); ?>