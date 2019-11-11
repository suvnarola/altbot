<?php echo $__env->make('frontend.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="blog-detail-page">
	<?php echo $__env->make('frontend.partials.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="col-md-7">
		<div class="hero-left wow fadeInLeft animated">
			<h1>Get in on the discussion in our <span>Live blog</span></h1>
			<p>Get in on the action, learn <span>cool tips and tricks</span>, “how tos” and ask
				guestions, find right answers - all within our live community.</p>
			<p>find great answers all within our live community.</p>
		</div>
	</div>
</div>
<?php echo $__env->make('frontend.partials.navigation-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<section class="site-blog-detail">
	<div class="container">
		<div class="blog-top mb-4">
			<div class="blog-top-inner mb-3 d-flex justify-content-between align-items-center">
				<div class="bck-btn d-flex align-items-center">
					<a href="<?php echo e(URL::previous()); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
							height="18px" viewBox="0 0 18 18" version="1.1">
							<!-- Generator: Sketch 54.1 (76490) - https://sketchapp.com -->
							<title>icon/left</title>
							<desc>Created with Sketch.</desc>
							<g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
								stroke-linecap="round" stroke-linejoin="round">
								<g transform="translate(1.000000, -3.000000)" stroke="#3D52D5">
									<g transform="translate(0.000000, 4.000000)">
										<g>
											<path d="M16,8 L0,8" id="Path" stroke-width="2" />
											<polyline stroke-width="2" points="8 16 0 8 8 0" />
										</g>
									</g>
								</g>
							</g>
						</svg> Back
					</a>
				</div>
				<div class="blog-date">
					<h6><?php echo e($blog->created_at->format('d M Y')); ?></h6>
				</div>
			</div>
			<ul class="tags d-flex justify-content-end">
				<?php $__currentLoopData = explode(',', $blog->tags); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<form id="tagForm" method="POST" action=<?php echo e(trim(route('search'))); ?>>
					<input type="hidden" name="tags" id="search-field" value="<?php echo e($tag); ?>"
						placeholder="Search for your topic here...">
					
					<?php echo e(csrf_field()); ?>

				</form>
				<li><a href="#" onclick="document.getElementById('tagForm').submit();"><?php echo e(ucfirst($tag)); ?></a>
				<li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div>
		
	<div class="sec-title">
		<div class="ova wow zoomIn animated"></div>
		<h3 class="wow zoomIn animated"><?php echo e($blog->title); ?></h3>
	</div>
	<div class=""><?php echo $blog->content; ?></div>
	<div id="disqus_thread"></div>

	
	</div>
</section>

<section class="site-newsletter">
	<div class="container">
		<div class="newsletter-box">
			<h2 class="wow zoomIn animated">Sign up for our newsletter</h2>
			<h6 class="wow zoomIn animated">Sign up and get latest news, promotions and much more.<br>No worries, we
				will send you <span>only important</span> stuff.</h6>
			<div class="form-wrap">
				<form>
					<input type="email" name="q" id="search-field" value="" placeholder="Your email here...">
					<div class="search-btn btn-bg">
						<a href="">Sign up</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

</div>
<script>
	/**
			 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT 
			 *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR 
			 *  PLATFORM OR CMS.
			 *  
			 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: 
			 *  https://disqus.com/admin/universalcode/#configuration-variables
			 */
			
			var disqus_config = function () {
				// Replace PAGE_URL with your page's canonical URL variable
				this.page.url = "<?php echo e(url()->current()); ?>";  
				
				// Replace PAGE_IDENTIFIER with your page's unique identifier variable
				this.page.identifier = "<?php echo e(url()->current()); ?>"; 
			};
			
			
			(function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
				var d = document, s = d.createElement('script');
				
				// IMPORTANT: Replace EXAMPLE with your forum shortname!
				s.src = 'https://altbot.disqus.com/embed.js';
				
				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
			})();
</script>
<noscript>
	Please enable JavaScript to view the
	<a href="https://disqus.com/?ref_noscript" rel="nofollow">
		comments powered by Disqus.
	</a>
</noscript>
<script>
	$('#newsletter').click(function (e) {

			e.preventDefault();

			var email = $('#subscribe').val();

			$.ajax({

				type: 'POST',

				url: '/newsletter',

					data: {

						"_token": "<?php echo e(csrf_token()); ?>",

						"email": email

					},

				success: function (data) {

						$('#message').html(data);

				}

			});

		});

</script>
<?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>