<!DOCTYPE html>
<?php include 'quotes.php';?>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Srinivas Yelamanchili</title>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' type='text/css'/>
		<link rel='stylesheet' href='css/main.css'/>
	</head>
	<body>
		<div class="container">
			<h1>Srinivas Yelamanchili</h1>
			<img src='images/sri.jpg' alt='Srinivas Yelamanchili'/>
			<h2>About Me</h2>
			<p>
            Hello everybody! I am Srinivas Yelamanchili, prefer to be addressed as 'Sri'.
            I am from Boston and have been here mostly since 2005.<br/>
            I am a Senior System Architect and travel for work.
            This is my 4th semester at Harvard Extension School. I originally registered at HES in Spring 2016 for HTML5/CSS3 and Javascript classes alone and then later got more ambitious!<br/>
            I have been working in the IT industry for over 13 years but never built web applications professionally and I am very confident that this course will help me understand the server side processing of the web applications.<br/>
            My favorite hobby is to watch all wildlife, mysteries, history, discoveries on Netflix. I follow IT news very regularly.
			</p>
			<h2>Random Quote</h2>
			<blockquote>
				<?php echo $quotes[array_rand($quotes)]?>
			</blockquote>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>