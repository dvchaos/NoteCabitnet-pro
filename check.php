 <?php
if(isset($_POST['usecookies'])) {

	$usecookies = $_POST['usecookies'];

} else {

	$usecookies = "false";

}

$content = ($_POST['content']);



?>
<!DOCTYPE html>
<html>
<body>

<?

 if ($usecookies == "on")  {

$cookie_name = "thecontent";
$cookie_value = $content;
setcookie($cookie_name, $cookie_value, time() + (6*30*24*3600), "/"); 

}


	
	$str = <<<EOF
<html>
<head>
<title>Read out loud</title>

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">


<style>

body {
    background-image: url("https://www.notecabi.net/background.jpg");
	
  margin-top: 15px;
  margin-bottom: 15px;
  margin-right: 15px;
  margin-left: 15px;
}

</style>

    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
    $( document ).ready(function() {
        
    });
 
    $( window ).on( "load", function() {
        		
				var str = localStorage.getItem('lastname');
								
				var n = str.includes("oo");
				
							
					if(n) {

						//
						
						speak('div.myspeech')
						
						
					}
					
		
	
		
    });
    </script>

</head>
<BODY>

							<button onclick="speak('div.myspeech')" class="btn btn-primary">Read out loud</button>
							<button onclick="pause()" class="btn btn-danger">Pause</button>
							<button onclick="resume()" class="btn btn-info">Resume</button>
							<button onclick="stop()" class="btn btn-success">Stop</button>
							
							<BR><BR>
						
	<div class="myspeech">
		$content
	</div>
	
</div>							

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://www.notecabi.net/js/articulate.js"></script>

<script>
function speak(obj) {  
   $(obj).articulate('speak');
};

function pause() {
  $().articulate('pause');
};

function resume() {
  $().articulate('resume');
};

function stop() {
  $().articulate('stop');
};
</script>

<BR>
<button onclick="goBack();">Go Back</button> <button onclick="CloseXXX();">Close this window</button>

<script>
function goBack() {
	
	
  window.history.back();
}
</script> 

<script>
function CloseXXX() {
	
this.focus();
self.opener=this;
self.close();

}
</script>


</BODY>
</HTML>
EOF;
	
	
	echo $str;
	

?>

</body>
</html> 