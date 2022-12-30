<HTML>
<HEAD>
<TITLE>
a free and portable scratch pad for firefox.
</TITLE>

<style>

body {
    background-image: url("https://www.notecabi.net/background.jpg");
}

p.warningsign {
	
    background-color: #FFFF00;
    border: 2px solid black;
    width: 70%;
    padding-top: 15px;
    padding-right: 15px;
    padding-bottom: 15px;
    padding-left: 15px;
	box-shadow: 5px 10px #888888;

	
}
p.roundmain {
    
    background-color: rgb(255,255,255);
    border: 2px solid black;
    border-radius: 12px;
    width: 620px;
    padding-top: 15px;
    padding-right: 15px;
    padding-bottom: 15px;
    padding-left: 15px;
	box-shadow: 5px 10px #888888;
}



div.roundmain {
    
    background-color: rgb(255,255,255);
    border: 2px solid black;
    border-radius: 12px;
    width: 440px;
    padding-top: 15px;
    padding-right: 15px;
    padding-bottom: 15px;
    padding-left: 15px;
	box-shadow: 5px 10px #888888;
	align:top;
}

h1 {
  text-shadow: 2px 2px #888888;
  font-face: verdana;
  font-family: verdana;
}

textarea{
 	width:90%;
	overflow-y: scroll;
	overflow: scroll; /* Horizontal and vertical scrollbar*/
        height: 300px;

}

.button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
</style>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://www.notecabi.net/js/articulate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js"></script>


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



<script>
(function( $ ){
   $.fn.xxfunction = function() {
      
	 
	  
	  localStorage.setItem('lastname','none');	  
	  $("#myForm").submit();
	  

      return this;
   }; 
})( jQuery );
</script>

<script>
(function( $ ){
   $.fn.myfunction = function() {
      
	  localStorage.setItem('lastname','foobar');	  
	  $("#myForm").submit();
	  

      return this;
   }; 
})( jQuery );
</script>


</HEAD>

<BODY style="margin:20">


<script type="text/javascript">
(function(){
    new Clipboard('#copy-button');	
})();

</script>

<DIV ALIGN="CENTER">
<DIV ALIGN="center" class="roundmain">

<h2><FONT FACE="verdana">Welcome to NoteCabinet Pro.</FONT></h2>


<FORM ACTION="https://www.notecabi.net/check.php" METHOD="post" id="myForm">

<DIV ALIGN="center">

<textarea class="textarea" id="xcontent" rows="250" cols="250" name="content">
<?php
$cookie_name = "thecontent";

if(!isset($_COOKIE[$cookie_name])) {
  //  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
   // echo "Cookie '" . $cookie_name . "' is set!<br>";
   // echo "Value is: " . $_COOKIE[$cookie_name];

	$name = $_COOKIE[$cookie_name];
	echo $name;


}?>
</textarea>


</DIV>

<DIV ALIGN="LEFT"><BR>

<A HREF="#void" onclick="function hi(){alert('Note copied!')};hi()" class="button" id="copy-button" data-clipboard-target="#xcontent">Copy note to clipboard</A>
<BR><BR>

<FONT FACE="verdana" size="1">
Store this note in the cloud, for retrieval on <B>any device</B> using NoteCabinet plus.
<A TARGET="_blank" HREF="https://notecabi.net/plus/">[CLICK HERE]</A> to find out more! It's %100 free! :)
</FONT>


			


<BR><BR>

  <input type="checkbox" id="usecookies" name="usecookies">
  <label for="usecookies"> Save for later (using cookies)</label><br>
  <input type="checkbox" id="sessions" name="sessions" value="true">
  <label for="sessions"> Save for later (using sessions)</label><br><BR>
  
  
  
  

<hr>
</DIV>

<BR>
<input type="button" value="Clear text" onclick="javascript:eraseText();"> 
<input type="button" value="Save for later" onclick="javascript:$('#my_div').xxfunction();"> <input type="button" value="Read out load" onclick="javascript:$('#my_div').myfunction();">
</FORM>
 
  
<script type="text/javascript">

function eraseText() {
	 document.getElementById("xcontent").value = "";
}

</script>

N:B> We do not log, nor save data used in the form above.

</DIV>


</BODY>
</HTML>









