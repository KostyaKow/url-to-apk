<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>EZ App Builder</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">

		<link rel="shortcut icon" href="img/ico/favicon.png">
	</head>
	<body>

	<!-- kkkkk -->
	<?php   
		error_reporting(-1);
		ini_set('display_errors', 'On');
		date_default_timezone_set('UTC');

		/*function checkUrl($url) {
			$urlLen = strlen($url);
			for ($x = 0; $x < $urlLen; $x++) {
			}
		}*/
		
		$appUrl = $_POST['appUrl'];
		if ($appUrl == '') {
			echo '</br>kkkkk</br>';
		}
		else {
			echo 'not zzzzz';
			echo $_POST['appUrl'];
			echo 'hiiii\n';
			$dateDirName = 'tmp/' . date('ljS\ofFYhisA') . '/';
			$currManifest = $dateDirName . 'manifest.json';
			echo shell_exec('mkdir ' . $dateDirName . ' 2>&1');

			$path = 'export ANDROID_HOME=/url-to-apk-backend/android-sdk-linux; export PATH=$PATH:/url-to-apk-backend/android-sdk-linux/tools; export PATH=$PATH:/url-to-apk-backend/crosswalk; ';

			//$manifestFileText = '{"name": "Tablet Updater", "icons": [ {  "src": "icon.png", "sizes": "128x128",  "type": "image/png", "density": "4.0" } ], "start_url": "' . $_POST['url'] . '", "display": "standalone","orientation": "any" }';
			$manifestFileText = '{"name": "Tablet Updater", "start_url": "' . $_POST['appUrl'] . '", "display": "standalone","orientation": "any" }';
			echo $manifestFileText;
			file_put_contents($currManifest, $manifestFileText);
			//$app_url = ' --app-url=' . $_POST['url'];

			$default_args = ' --package=org.gentoo.rms --manifest=' . $currManifest . ' --arch=arm --target-dir=' . $dateDirName;
			$command = "bash -c '" . $path . "make_apk.py " . $default_args . " 2>&1 1>" . $dateDirName ."/output.txt'";

			echo '</br></br>command: ' . $command . "</br></br></br>";
			$a = shell_exec($command);
			echo $a;

			echo "<a href='" . $dateDirName . "/Rms_arm.apk'><h1>richardStallamIzBae.apk</h1></a>";
		}
	?> 
 
  <!--- end kk -->	

	 <!-- Teaser start -->
	<section id="teaser">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-xs-12 pull-right">
					<center id="posterpic"><img class="headerPic" src="img/yourApp.png" /></center>
				</div>

				<div class="col-md-5 col-xs-12 pull-left">
					<div class="reservation-form-shadow">

						<form action="index.php" method="post" >
							<center><h1>
								<span class="fa fa-android"></span>
								&nbsp;&nbsp;&nbsp;EZ Android App
							</h1></center>

							<br>

							<div class="location">
								<div class="input-group pick-up">
									<span class="input-group-addon"><span class="fa fa-globe"></span>&nbsp;&nbsp;&nbsp;URL</span>
									<input type="text" name="appUrl" id="appURL" class="form-control" placeholder="www.YourWebLink.com">
								</div>
								<br><br>
					
								<div class="input-group drop-off">
									<span class="input-group-addon"><span class="fa fa-bullhorn"></span>&nbsp;&nbsp;&nbsp;Name</span>
									<input type="text" name="appName" id="appName" class="form-control" placeholder="Flappy Widget">
								</div>
								<br><br>

								<div class="input-group drop-off">
									<span class="input-group-addon"><span class="fa fa-picture-o"></span>&nbsp;&nbsp;&nbsp;Icon</span>
									<input type="text" name="appIcon" id="appIcon" class="form-control" placeholder="icon128x128.png">
								</div>
							</div>


							<input type="submit" class="submit" name="submit" value="Build" id="checkoutModalLabel">
						</form>

					</div>
				</div>

			</div>
		</div>
	</section>
	
  <div class="arrow-down"></div>
  <!-- Teaser end -->


   <!-- Services start -->
	<section id="services" class="container">
		<div class="row">
		<div class="col-md-12 title">
			<h2>Android App Builder</h2>
			<span class="underline">&nbsp;</span>
		</div>

		<!-- Service Box start -->
		<div class="col-md-6">
		<div class="service-box wow fadeInLeft" data-wow-offset="100">
		<div class="service-icon">+</div>
			<h3 class="service-title">Based on Chrome</h3>
			<div class="clearfix"></div>
				<p class="service-content">
					Dont worry about which browser your users are on. Get consistency and power for your app with Chrome.
				</p>
			</div>
		</div>
		<!-- Service Box end -->

		<!-- Service Box start -->
		<div class="col-md-6">
		<div class="service-box wow fadeInRight" data-wow-offset="100">
		<div class="service-icon">+</div>
		<h3 class="service-title">Free as in Beer</h3>
		<div class="clearfix"></div>
		<p class="service-content">We build it, you keep it. No embedded ads or other funny business. Just a great, free, app builder.</p>
		</div>
		</div>
		<!-- Service Box end -->

		<!-- Service Box start -->
		<div class="col-md-6">
		<div class="service-box wow fadeInLeft" data-wow-offset="100">
		<div class="service-icon">+</div>
		<h3 class="service-title">Easy Update</h3>
		<div class="clearfix"></div>
		<p class="service-content">If you control the URL, then you control the content. Dont worry which version your users are on.</p>
		</div>
		</div>
		<!-- Service Box end -->
		<!-- Service Box start -->
		<div class="col-md-6">
		<div class="service-box wow fadeInRight" data-wow-offset="100">
		<div class="service-icon">+</div>
		<h3 class="service-title">Redistributable</h3>
		<div class="clearfix"></div>
		<p class="service-content">Android Play Store compatible. Upload and distribute in the largest Android ecosystem, as well as others.</p>
		</div>
		</div>
		<!-- Service Box end -->

		<!-- Service Box start -->
		<div class="col-md-6">
		<div class="service-box wow fadeInRight" data-wow-offset="100">
		<div class="service-icon">+</div>
		<h3 class="service-title">Custom Icon</h3>
		<div class="clearfix"></div>
		<p class="service-content">Essential branding opportunity. Stand out with your own icon, just upload the 128x128 png and we build it in.</p>
		</div>
		</div>
		<!-- Service Box end -->

		<!-- Service Box start -->
		<div class="col-md-6">
		<div class="service-box wow fadeInRight" data-wow-offset="100">
		<div class="service-icon">+</div>
		<h3 class="service-title">URL to APK</h3>
		<div class="clearfix"></div>
		<p class="service-content">Any URL can become a full screen Android app. Less browser, more native. Your users will feel immersed in your app.</p>
		</div>
		</div>
		<!-- Service Box end -->
		<!-- Service Box start -->
		<div class="col-md-6">
		<div class="service-box wow fadeInRight" data-wow-offset="100">
		<div class="service-icon">+</div>
		<h3 class="service-title">Full Screen</h3>
		<div class="clearfix"></div>
		<p class="service-content">A powerfull full screen web browser that doesnt look like a browser - Giving every pixel to your beautiful web app.</p>
		</div>
		</div>
		<!-- Service Box end -->

		<!-- Service Box start -->
		<div class="col-md-6">
		<div class="service-box wow fadeInRight" data-wow-offset="100">
		<div class="service-icon">+</div>
		<h3 class="service-title">Access Device APIs</h3>
		<div class="clearfix"></div>
		<p class="service-content">Build apps with native support for the HTML5 Geolocation API, File API, Vibration API, Camera API and more.</p>
		</div>
		</div>
		<!-- Service Box end -->

		</div>
	</section>

	<footer id=holder> <!-- Footer start -->
		<div class="container">
		  <div class="row">
			 <div class="col-md-12 text-center">
				<div class="clearfix"></div>
				<p class="copyright">©2015 EZ Android App, All Rights Reserved</p>
			 </div>
		  </div>
		</div>

		  
		<div id=analytics style="display:none;">
			<a title="Web Analytics" href="http://clicky.com/100850988"><img alt="Web Analytics" src="//static.getclicky.com/media/links/badge.gif" border="0" /></a>
			<script type="text/javascript">
				var clicky_site_ids = clicky_site_ids || [];
				clicky_site_ids.push(100850988);
				(function() {
				var s = document.createElement('script');
				s.type = 'text/javascript';
				s.async = true;
				s.src = '//static.getclicky.com/js';
				( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
				})();
			</script>
			<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100850988ns.gif" /></p></noscript>
		</div> 		  
		  
		  
	</footer> <!-- Footer end -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<script>
		$( "#appURL" ).focusout(function() {
			var currentPic = $( "#posterpic" ).html();
			$( "#posterpic" ).html('<div style="position:absolute;top:0;bottom:0;left:0;right:0;" class="spinner"></div>' + currentPic);
			var theURL = $( this ).val();
			var jqxhr = $.post( "previewBuilder.php", { url: theURL }, function(data) {
			 $( "#posterpic" ).html(data);
			}).fail(function() {
				$( "#posterpic" ).html('<img class="headerPic" src="img/yourApp.png" />');
			  });
		});
	</script>
</body>
</html>
