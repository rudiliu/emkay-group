<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>quiz time | how well do you know emkay?</title>
	<meta name="description" content="How well do you know emkay? 35 prizes to be won. Register and try your luck now">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta property="og:url" content="quiz.emkay.com.my" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="quiz | 35th anniversary | EMKAY Group" />
	<meta property="og:description" content="How well do you know emkay? 35 prizes to be won. Register and try your luck now" />
	<meta property="og:image" content="http://emkay.com.my/sites/all/themes/emkay/logo.png" />

	<meta property="twitter:card" content="summary">
	<meta property="twitter:url" content="quiz.emkay.com.my">
	<meta property="twitter:title" content="How well do you know emkay? 35 prizes to be won. Register and try your luck now">

	<link rel="apple-touch-icon" href="http://emkay.com.my/sites/all/themes/emkay/logo.png">
	<link rel="icon" href="http://emkay.com.my/sites/all/themes/emkay/logo.png" type="image/x-icon" />

	<link rel="stylesheet" href="styles/css/main.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124751452-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-124751452-1');
	</script>
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '1097017407065773');
	fbq('track', 'PageView');
	</script>
	<noscript>
	<img height="1" width="1"
	src="https://www.facebook.com/tr?id=1097017407065773&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->
</head>

<body class="quiz game">
	<input type="hidden" value="{{url('/')}}" id="baseURL">
	<input type="hidden" value="{{$registration->id}}" id="reg">
	<input type="hidden" value="{{$registration->answer1}}" id="an1">
	<input type="hidden" value="{{$registration->answer2}}" id="an2">
	<input type="hidden" value="{{$registration->answer3}}" id="an3">
	<input type="hidden" value="{{$registration->answer4}}" id="an4">
	<input type="hidden" value="{{$registration->answer5}}" id="an5">
	<!-- navbar -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-quiz">
			<div class="p-2 w-md-none z-100">
				<a class="navbar-brand" href="http://emkay.com.my/35thanniversary"><img class="image-aim" src="img/emkaylogo.png" alt="emkay logo"></a>
			</div>
		</nav>
	</header>
	<!-- end navbar -->
	<section class="p-section main-bg bg-turquoise">
		<div class="container">
			<div class="box-white card-shadow text-center">
				<form action="">
					<div class="stages stage1 an1 an2 an3 an4">
						<div class="title-group">
							<h1>QUESTION 1</h1>
							<h4 class="mt-4 mb-4">WHO IS THE FOUNDER OF EMKAY GROUP?</h4>
						</div>
						<div class="group">
							<label for="">
								<input type="radio" value="Tan Sri Dato’ Mohamed Azman Yayha" name="group1">
								<div class="card card-shadow">
									<div class="card-image-container">
										<img src="img/tan-sri-mohamed.jpg" alt="Tan Sri Dato’ Mohamed Azman Yayha">
									</div>
									<p>Tan Sri Dato’ Mohamed Azman Yayha</p>
								</div>
							</label>
							<label for="">
								<input type="radio" value="Tan Sri Abdul Rahim" name="group1">
								<div class="card card-shadow">
									<div class="card-image-container">
										<img src="img/tan-sri-abdul-rahim.jpg" alt="Tan Sri Abdul Rahim">
									</div>
									<p>Tan Sri Abdul Rahim</p>
								</div>
							</label>
							<label for="">
								<input type="radio" value="Tan Sri Mustapha Kamal" name="group1">
								<div class="card card-shadow">
									<div class="card-image-container">
										<img src="img/tan-sri-mustapha.jpg" alt="Tan Sri Mustapha Kamal">
									</div>
									<p>Tan Sri Mustapha Kamal</p>
								</div>
							</label>
							<label for="">
								<input type="radio" value="Tan Sri Tony Fernandes" name="group1">
								<div class="card card-shadow">
									<div class="card-image-container">
										<img src="img/tony-fernandes.jpg" alt="Tan Sri Tony Fernandes">
									</div>
									<p>Tan Sri Tony Fernandes</p>
								</div>
							</label>
							<div class="timeline">
								<div class="step z-0 active">
								</div>
								<div class="step z-1">
								</div>
								<div class="step z-2">
								</div>
								<div class="step z-3">
								</div>
								<div class="step z-4">
								</div>
								<div class="step z-5">
								</div>
							</div>
						</div>
					</div>
					<div class="stages stage2 an2 an3 an4">
						<div class="title-group">
							<h1>QUESTION 2</h1>
							<h4 class="mt-4 mb-4">WHICH RESORT BELONGS TO EMKAY GROUP?</h4>
						</div>
						<div class="group">
							<label for="">
								<input type="radio" value="Colmar Tropicale, Bukit Tinggi" name="group2">
								<div class="card card-shadow">
									<div class="card-image-container">
										<img src="img/colmar-tropicale.jpg" alt="Colmar Tropicale, Bukit Tinggi">
									</div>
									<p>Colmar Tropicale, Bukit Tinggi</p>
								</div>
							</label>
							<label for="">
								<input type="radio" value="Terra’s Tree House, Cameron Highlands" name="group2">
								<div class="card card-shadow">
									<div class="card-image-container">
										<img src="img/terra-tree-house-hotel.jpg" alt="Terra’s Tree House, Cameron Highlands">
									</div>
									<p>Terra’s Tree House, Cameron Highlands</p>
								</div>
							</label>
							<label for="">
								<input type="radio" value="The Dusun, Seremban" name="group2">
								<div class="card card-shadow">
									<div class="card-image-container">
										<img src="img/the-dusun.jpg" alt="The Dusun, Seremban">
									</div>
									<p>The Dusun, Seremban</p>
								</div>
							</label>
							<label for="">
								<input type="radio" value="Belum Rainforest Resort, Perak" name="group2">
								<div class="card card-shadow">
									<div class="card-image-container">
										<img src="img/belum-rainforest-resort.jpg" alt="Belum Rainforest Resort, Perak">
									</div>
									<p>Belum Rainforest Resort, Perak</p>
								</div>
							</label>
							<div class="timeline">
								<div class="step z-0 active">
								</div>
								<div class="step z-1 active">
								</div>
								<div class="step z-2">
								</div>
								<div class="step z-3">
								</div>
								<div class="step z-4">
								</div>
								<div class="step z-5">
								</div>
							</div>
						</div>
					</div>
					<div class="stages stage3 an3 an4">
						<div class="title-group">
							<h1>QUESTION 3</h1>
							<h4 class="mt-4 mb-4">WHICH OF THESE IS <span class="italics">NOT</span> AN EMKAY GROUP DEVELOPMENT?</h4>
						</div>
						<div class="group">
							<label for="">
								<input type="radio" value="TWG Estate" name="group3">
								<div class="card card-shadow">
									<div class="card-image-container">
										<img src="img/twg.jpg" alt="TWG Estate">
									</div>
									<p>TWG Estate</p>
								</div>
							</label>
							<label for="">
								<input type="radio" value="Star Central" name="group3">
								<div class="card card-shadow">
									<div class="card-image-container">
										<img src="img/star-central.jpg" alt="Star Central">
									</div>
									<p>Star Central</p>
								</div>
							</label>
							<label for="">
								<input type="radio" value="Radius Business Park" name="group3">
								<div class="card card-shadow">
									<div class="card-image-container">
										<img src="img/the-dusun.jpg" alt="Radius Business Park">
									</div>
									<p>Radius Business Park</p>
								</div>
							</label>
							<label for="">
								<input type="radio" value="MasReca n19eteen Biz" name="group3">
								<div class="card card-shadow">
									<div class="card-image-container">
										<img src="img/masreca.jpg" alt="MasReca n19eteen Biz">
									</div>
									<p>MasReca n19eteen Biz</p>
								</div>
							</label>
							<div class="timeline">
								<div class="step z-0 active">
								</div>
								<div class="step z-1 active">
								</div>
								<div class="step z-2 active">
								</div>
								<div class="step z-3">
								</div>
								<div class="step z-4">
								</div>
								<div class="step z-5">
								</div>
							</div>
						</div>
					</div>
					<div class="stages stage4 an4">
						<div class="title-group">
							<h1>QUESTION 4</h1>
							<h4 class="mt-4 mb-4">EMKAY GROUP IS CURRENTLY CELEBRATING ITS“X”TH ANNIVERSARY?</h4>
						</div>
						<div class="group">
							<label for="">
								<input type="radio" value="15th" name="group4">
								<div class="card card-text">
									<p>15th</p>
								</div>
							</label>
							<label for="">
								<input type="radio" value="20th" name="group4">
								<div class="card card-text">
									<p>20th</p>
								</div>
							</label>
							<label for="">
								<input type="radio" value="35th" name="group4">
								<div class="card card-text">
									<p>35th</p>
								</div>
							</label>
							<label for="">
								<input type="radio" value="50th" name="group4">
								<div class="card card-text">
									<p>50th</p>
								</div>
							</label>
							<div class="timeline">
								<div class="step z-0 active">
								</div>
								<div class="step z-1 active">
								</div>
								<div class="step z-2 active">
								</div>
								<div class="step z-3 active">
								</div>
								<div class="step z-4">
								</div>
								<div class="step z-5">
								</div>
							</div>
						</div>
					</div>
					<div class="stages stage5">
						<h1>QUESTION 5</h1>
						<h4 class="mt-4 mb-4">WHERE IS EMKAY GROUP’S HEAD OFFICE LOCATED?</h4>
						<div class="group">
							<label for="">
								<input type="radio" value="Cyberjaya" name="group5">
								<div class="card card-text">
									<p>Cyberjaya</p>
								</div>
							</label>
							<label for="">
								<input type="radio" value="Putrajaya" name="group5">
								<div class="card card-text">
									<p>Putrajaya</p>
								</div>
							</label>
							<label for="">
								<input type="radio" value="KLCC" name="group5">
								<div class="card card-text">
									<p>KLCC</p>
								</div>
							</label>
							<label for="">
								<input type="radio" value="Ipoh" name="group5">
								<div class="card card-text">
									<p>Ipoh</p>
								</div>
							</label>
							<div class="timeline">
								<div class="step z-0 active">
								</div>
								<div class="step z-1 active">
								</div>
								<div class="step z-2 active">
								</div>
								<div class="step z-3 active">
								</div>
								<div class="step z-4 active">
								</div>
								<div class="step z-5">
								</div>
							</div>
						</div>
					</div>
					<div class="stages stage6">
						<div class="group2">
							<h1>THANK YOU!</h1>
							<div class="group2-1">
								<p class="mb-1 text-red text-bold">Important Notice</p>
								<p>Share the quiz on your social media and hashtag #emkay35thanniversary to be in the running for the grand prize</p>
							</div>
							<div class="group-btn">
								<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://emkay.com.my/35thanniversary" id="shareBtnFb" class="shareBtnFb">
									<img class="mb-3" src="img/sharefb.png" alt="share fb">
								</a>
								<a target="_blank" href="https://twitter.com/intent/tweet?url=http%3A%2F%2Femkay.com.my/35thanniversary&text=%23emkay35thanniversary&original_referer=http%3A%2F%2Femkay.com.my/35thanniversary" id="shareBtnTw" class="shareBtnTw">
									<img src="img/sharetwitter.png" alt="share fb">
								</a>
							</div>
							<p class="mt-5 return-home">Return to <a href="35thanniversary.html">Homepage</a></p>
						</div>
					</div>
			</div>
			</form>
		</div>
		</div>
	</section>

	<footer class="text-center footer">
		<div class="container">
			<p>All Right Reserved. Copyright © EMKAY35years 2018</p>
		</div>
	</footer>

	<script src='//cdn.freshmarketer.com/112328/202607.js'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="scripts/app.js" charset="utf-8"></script>
	<script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $( document ).ready(function() {
            if($('#an4').val()!=''){
                show_hide_stage(4,5);
			}
			else if($('#an3').val()!=''){
                show_hide_stage(3,4);
            }
            else if($('#an2').val()!=''){
                show_hide_stage(2,3);
            }
            else if($('#an1').val()!=''){
                show_hide_stage(1,2);
            }
        });

		//validation

		'use strict';
		window.addEventListener('load', function() {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
				form.addEventListener('submit', function(event) {
					if (form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
			});
		}, false);

		//game js

		function show_hide_stage(hide,show) {
            $('.stage' + hide).css('opacity', '0');
			$('.an' + hide).css('display', 'none');
			$('.stage' + show).css('display', 'flex');
        }

		function submit(q, ans, hide, show){
            $.ajax({
                url: $('#baseURL').val()+'/answer',
                type: 'POST',
                data: {q:q, ans:ans},
                success: function (status) {
                    var result = JSON.parse(status);
                    if(result.status){
                        $('.stage'+q).css('opacity', '0');
                        setTimeout(function() {
                            $('.stage'+hide).css('display', 'none');
                        },500);
                        setTimeout(function() {
                            $('.stage'+show).css('display', 'flex');
                        },500)
                    }else{
                        alert('Error occur. Please try again!');
                        location.reload();
                    }
                },
                error: function(jqXHR, exception){
                    alert('Error occur. Please try again!');
                    //location.reload();
                }
            });
		}

		$('.stage1 input').click(function() {
            var ans = $("input[name='group1']:checked").val();
			submit(1,ans,1,2);
		});

		// $('.stage2').css('display', 'flex')

		$('.stage2 input').click(function() {
            var ans = $("input[name='group2']:checked").val();
            submit(2,ans,2,3);
		});

		$('.stage3 input').click(function() {
            var ans = $("input[name='group3']:checked").val();
            submit(3,ans,3,4);
		});

		$('.stage4 input').click(function() {
            var ans = $("input[name='group4']:checked").val();
            submit(4,ans,4,5);
		});

		$('.stage5 input').click(function() {
            var ans = $("input[name='group5']:checked").val();
            submit(5,ans,5,6);
		});

        $('#shareBtnFb').click(function() {
            shareUpdate('Facebook');
        });

        $('#shareBtnTw').click(function() {
            shareUpdate('Twitter');
        });

        function shareUpdate(social){
            $.ajax({
                url: $('#baseURL').val()+'/answer',
                type: 'POST',
                data: {q:10, ans:social, reg:$('#reg').val()},
                success: function (status) {
                },
                error: function(jqXHR, exception){
                }
            });
        }
	</script>

</body>

</html>
