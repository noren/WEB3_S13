<!doctype html>
<html>
	<head>
		<title>Text to Speech Hello World.</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="js/jquery.playSound.js"></script>
		<script>
			$(document).ready(function(){

				$('form').submit(function(e){

						e.preventDefault();
						console.log('Requesting Audio');
						$('ul').append('<li>Requesting Audio</li>');

						$.getJSON("voice.php?callback=?", {text: $('textarea').val() }, //send text to php and get file location back

							function(json){
								console.log('Success');
								var file = json['audio'];
								$('ul').append('<li>Success - Storing File '+file+'</li>'); //give our user some feedback
								console.log('Playing Audio')
								$('ul').append('<li>Playing Audio</li>');
								$.playSound(file);
								console.log(file);	

							});

				});

			});
		</script>

		<style> 
			html, body, section, form, ul, li, h1, h2, h3, h4, h5, p {margin: 0; padding: 0; font-family: sans-serif;}
			body{width: 100%; height: 100%; background-color: #e9e9e9;}
			section{width: 40%; margin: 0 auto; padding: 20px 0; background-color: #3f3f3f;display:block;}

			ul{display:block; width: 90%; margin:0 auto;}
			ul li{display: block; text-decoration: none; list-style: none; margin: 2px 0 0; padding: 5px;}
			ul li:nth-child(even){ background-color: #fff;}
			ul li:nth-child(odd){ background-color:#dedede;}
			textarea{ width: 90%; height: 300px; margin: 10px auto; display: block;}
			input{display: block; width: 100px; margin: 10px auto;}

		</style>

	</head>
	<body>
		<section>
			<form><!-- Just a regular old form -->
				<textarea name="Content" placeholder="Enter What you'd like me to say here."></textarea>
				<input name="" type="submit" value="Speak">
			</form>
			<ul></ul>
		</section>
	</body>
</html>