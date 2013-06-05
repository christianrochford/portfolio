<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">

<title>Contact Christan Rochford for Web Design and Web Development</title>

<meta name="description" content="Contact Christian Rochford to find out more about responsive web design and web development.
Get in touch to discuss your website project.">
<meta name="keywords" content="Christian Rochford, web developer, web development, web design, portfolio, Dublin, Ireland">

<link rel="stylesheet" href="/css/style.css">
<meta name="viewport" content="width=device-width, user-scalable=no">
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="favicon32.ico"/><!--for IE6-10-->
<link rel="icon" type="image/png" href="/favicons/favicon32.png" sizes="32x32"><!--For FF & Safari-->
<link rel="icon" type="image/png" href="/favicons/favicon16.png" sizes="16x16"><!--For Chrome for Windows-->
<link rel="apple-touch-icon" sizes="57x57" href="/favicons/favicon57.png"/>
<script src="/js/modernizr.custom.44423.js"></script>

</head>

<body>

<div id="wrap">
	<header>
		<a href="/index/"><h1>Christian Rochford</h1></a>
		<a id="to_nav" href="#mobilenav">Menu</a>
		<nav>
			<ul>
            	<li><a href="/index/">Home</a>
            		<ul>
						<div class="list effect"><li>Go back to <br>Homepage.</li></div>
					</ul>
				</li>
				<li><a href="/about/">About</a>
					<ul>
						<div class="list effect"><li>Who am I and why am I a web developer?</li></div>
					</ul>
				</li>
				<li><a href="/services/">Services</a>
					<ul>
						<div class="list effect"><li>Read about the web development services I enjoy providing.</li>
						</div>
					</ul>
				</li>
				<li><a href="/portfolio/">Work</a>
					<ul>
						<div class="list effect"><li>View my collection of work and take a look at a case study.</li>
						</div>
					</ul>
				</li>
				<li id="selected">Contact</li>
				<li><a href="http://christianrochford.me/learn/">Learn</a>
					<ul>
						<div class="list effect"><li>Read my web developer blog and see what I'm learning lately.</li>
						</div>
					</ul>
				</li>
			</ul>
		</nav>
	</header>
	<section id="contact">
		<h2>Contact Me</h2>
		<a href="https://maps.google.ie/maps?q=dublin&ll=53.349732,-6.260147&spn=0.219284,0.676346&oe=utf-8&client=firefox-a&hnear=Dublin,+County+Dublin&gl=ie&t=m&z=11"><img id="mobilemap" src="/img/mobilemap.png"></a>
		<p>If you're interested in getting a new website or if you're thinking of refurbishing an old one get in touch 
		and I'll help you out. From the simple to the ambitious, all ideas have a bit of magic going on and I just love to 
		develop them.</p>
		<a id="map" href="https://maps.google.ie/maps?q=dublin&ll=53.343993,-6.198349&spn=0.220953,0.603561&oe=utf-8&client=firefox-a&channel=fflb&hnear=Dublin,+County+Dublin&gl=ie&t=m&z=11"></a>
		
		<form method="post" action="/php/process.php">
		
			<ul>
				<li>
					<label for="name">Name:</label>
					<input type="text" name="name" id="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" required aria-required="true">
				</li>
				<li>
					<label for="email">Email address:</label>
					<input type="email" name="email" id="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" required aria-required="true">
				</li>
				<li>
					<label for="message">Message:</label><br>
					<textarea name="message" id="message" required="required" data-minlength="20" <?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?> required aria-required="true"></textarea>
				</li>
			</ul>
			                        
			<input type="image" src="/img/post.gif" id="submit" value="Send">
			
		</form>
		
		<!--updating the UI on form completion-->
		<?php  
		//init variables  
		$cf = array();  //cf=contact form
		$sr = false;  	//sr=server response
		if(isset($_SESSION['cf_returndata'])){  
    	$cf = $_SESSION['cf_returndata'];  //set cf to equal session to save typing $_SESSION… every time we want to access this data
    	$sr = true;  //will be checking sr to see if form has been posted
		}  
		?>
		
		<ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">  
    	<li id="info">There were some problems with your form submission:</li>  
    	<?php  
    	if(isset($cf['errors']) && count($cf['errors']) > 0) :  
        foreach($cf['errors'] as $error) :  
    	?>  
    	<li><?php echo $error ?></li>  
    	<?php  
        endforeach;  
    	endif;  
    	?>  
		</ul>  
		<p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks! I'll get back to you ASAP!</p>
		
		<!--not essesntial but resets form so error/success message is not shown upon returning to page-->
		<?php unset($_SESSION['cf_returndata']); ?>
		
	</section>
	<footer>
		<div id="mobilenav">
			<ul>
            	<li><a href="/index/">Home</a></li>
				<li><a href="/about/">About</a></li>
				<li><a href="/services/">Services</a></li>
				<li><a href="/portfolio/">Work</a></li>
				<li><a href="/contact/">Contact</a></li>
				<li><a href="http://christianrochford.me/learn/">Learn</a></li>
			</ul>
		</div><!--mobilenav-->	
		<p>&copy; Christian Rochford</p>
	</footer>
</div>

<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37413961-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>

</html>