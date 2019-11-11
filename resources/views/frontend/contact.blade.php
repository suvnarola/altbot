@include('frontend.partials.header')

<div class="contact-page">



	@include('frontend.partials.navigation')

	<div class="col-md-6">

		<div class="hero-left wow fadeInLeft animated">

			<h1>Our contacts</h1>

		</div>

	</div>

</div>

@include('frontend.partials.navigation-footer')


{{-- 
<section class="site-contact">

	<div class="container">

		<div class="contact-box text-center">

			<h2 class="wow zoomIn animated">Company</h2>

			<h4>Altbot trading Ltd.</h4>

			<div class="dot"></div>

			<p>+371 2377 31371</p>

			<p>info@atlbot.com</p>

			<p>Terbatas street 4, Riga<br>Latvia LV1050</p>

		</div>

	</div>

</section> --}}
<section class="site-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-11">
				<div class="contact-box text-center">
					<div class="row">
						<div class="col-md-6">
							<h2 class="wow zoomIn animated">Thank you for your interest in Al.t.bot trading bot!</h2>
							<h4>We appreciate any comment, question or feedback you may have. Feel free to contact us
								anytimewhen you need our help. Our Support Team will respond as soon as possible.</h4>
							<p>Email: <span>info@altbot.net</span></p>
							<p>Mob: <span>+371 26286137</span></p>
							<p>Chat: <span>Telegram/altbot</span></p>

						</div>
						<div class="col-md-6" id="send-msg">
							<h2 class="wow zoomIn animated">Send message</h2>
							<div class="form-wrap">
								<form>
									<input type="text" class="form-control" name="name" placeholder="Name">
									<input type="email" class="form-control" name="email" placeholder="Email">
									<textarea name="msg" rows="2" cols="50" placeholder="Your message here..."></textarea>
									<div class="d-flex justify-content-end align-items-end btn-groups">
										<div class="btn-submit">
											<a id="send" href="#">Send</a>
										</div>


									</div>
								</form>
							</div>
						</div>
						<div class="col-md-6" id="message" style="display:none">
							<h2 class="">Message Sent!</h2>
							<div>Thank You, your message has been received.<br /> We will be in touch with you shortly
							</div>
							<br>
							<br>
							<a href="#" id="send-more">Send More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



</div>
<script>
	$('#send').on('click', function(event) {
		event.preventDefault();
		
		var name = $("input[name=name]").val();

        var msg = $('textarea:input[name=msg]').val();

        var email = $("input[name=email]").val();

		$.ajax({

			type: 'POST',

			url: '/contactmail',

				data: {

					"_token": "{{ csrf_token() }}",

					"email": email,

					"message":msg,

					name


				},

			success: function (data) {

				$("#send-msg").hide();
				$("#message").show();

			}

		});

	});

	
	$("#send-more").on('click',function(event){
		event.preventDefault();
		location.reload();

	});
</script>

@include('frontend.partials.footer')