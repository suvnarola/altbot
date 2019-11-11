<footer class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4 footer-logo">
				<img src="{{asset('assets/frontend/image/footer-logo.png')}}" alt="site-logo" title=""
					class="footer-logo">
			</div>
			<div class="col-md-2">
				<ul class="footer-link">
					<li><a href="{{route('frontend.blog')}}">Live Blog</a></li>
					<li><a href="{{route('frontend.work')}}">How to start</a></li>
				</ul>
			</div>
			<div class="col-md-2">
				<ul class="footer-link">
					<li><a href="{{route('term')}}">Legal & Privacy</a></li>
					<li><a href="{{route('frontend.contact')}}">Contacts</a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul class="payment-link">
					<li class="d-flex align-items-center mt-4">
						<span>Payments by:</span>
						<a href="" class=""><img src="{{asset('assets/frontend/image/mc_symbol@2x.png')}}"
								alt="paypal-logo" class="payment-logo" title="">
							<img src="{{asset('assets/frontend/image/full-color-800x450@2x.png')}}"
								alt="paypal-logo" class="payment-logo" title="">
							<img style="height: 30px !important;width:100px;"
								src="{{asset('assets/frontend/image/click2sell.gif')}}" alt="paypal-logo"
								class="payment-logo" title=""></a>
						</a>
					</li>
					<span class="logo-text">Click2Sell is an authorized reseller of Al.t.bot</span>
					<li class="d-flex align-items-center mt-4">
						<span>Join the talk:</span>
						<a href=""><img src="{{asset('assets/frontend/image/telegram.png')}}" alt="telegram-logo"
								title="" class="telegram-logo"></a>
					</li>
				</ul>
			</div>
		</div>
		<p>Altbot trading solutions inc. © All rights reserved</p>
	</div>
</footer>

<script src="{{asset('assets/frontend/js/animate.js')}}"></script>

<script src="{{asset('assets/frontend/js/slick.js')}}"></script>

<script src="{{asset('assets/frontend/js/custom.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<script>
	$(function() {

		new WOW().init();

	});
</script>

</body>



</html>