<?php
	$img_dir = get_bloginfo('stylesheet_directory')."/img/";
	get_header(); 
?>
	
	<?php require_once 'framework/elements/slideshow.php'; ?>

<div id="wrapper-home" class="clearfix">
	<ul id="product-info" class="clearfix">
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
	<section id="home-footer">
		<div class="left">
			<ul>
				<li class="active hello"><a href="#1"></a>Welcome</li>
				<li class="who_we_are"><a href="#2"></a>Who We <br>Are</li>
				<li class="intro"><a href="#3"></a>Intro to <br>DOCPLUS</li>
			</ul>
		</div><!-- .left -->
		<div class="right">
			<div id="1" class="active">
				<h1 class="title">Welcome To DOCPLUS</h1>
				<p>
					Imagine a system designed to capture all of the necessary patient intake information
					and doctors notes that archives the data and produces high-quality typed written reports to communicate the patient encounter with the click of a button.
				</p>

				<p>
					Sound too good to be true?
				</p>

				<p>
					Not with the Document Plus system. The increasing demand for documentation by insurance companies and Managed Care have created a nightmare for practitioners. Treating the patient is, and should be, the number one priority. Document Plus was created to streamline the paperwork, enhance practice management and assist in practice building.
				</p>

				<p>
					How does one program do all that? Automated forms and a scanner enable the collection of comprehensive information that works with our system to produce the highest quality reports.
				<p>
					Our forms facilitate complete documentation and correspondence by using automated doctor’s questionnaires, clinical forms, a personal computer, software and scanner.
				</p>

				<p>
					Document Plus completes all record keeping effortlessly and instantaneously.
				</p>
			</div><!-- #1 -->
			<div id="2">two</div>
			<div id="3">
					<div class="right">
						<a href="<?php echo VIDEOS_DIR.'/demo.php'; ?>" id="intro_video" ></a>
						<h2 class="title">
							Find Out How DOCPLUS Can Save You Money.
						</h2><!-- .title -->
						<p>
							Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam.
						</p>
						<p>
							Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam.
						</p>
					</div><!-- .right -->
			</div><!-- #3 -->
		</div><!-- .right -->
	</section><!-- #home-footer -->
</div><!-- #wrapper -->

<?php get_footer(); ?>