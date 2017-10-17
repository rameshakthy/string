<html>
<title>String Operations</title>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$("#string_input").keyup(function(){
			$("#lowercase").val($(this).val().toLowerCase());
			$("#uppercase").val($(this).val().toUpperCase());
		});
		  $.get("https://ipinfo.io/json", function(response) {
      			$("#ip").text(response.ip);
  		   }, "jsonp");
	});
	</script>
</head>
<div class="container" >
	
    <div class="col-md-12 col-sm-12 col-xs-12">    
        <label class="col-md-6 col-sm-6 col-xs-6">Enter a string :</label>
        <input class="col-md-6 col-sm-6 col-xs-6" type="text" value="" id="string_input">
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">   
        <label class="col-md-6 col-sm-6 col-xs-6">Lowercase :</label>
        <input class="col-md-6 col-sm-6 col-xs-6" type="text" value="" id="lowercase" readonly>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">   
        <label class="col-md-6 col-sm-6 col-xs-6">Uppercase :</label>
        <input class="col-md-6 col-sm-6 col-xs-6" type="text" value="" id="uppercase" readonly>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">   
        <label class="col-md-6 col-sm-6 col-xs-6">Your IP address :</label>		
        <button class="col-md-6col-sm-6 col-xs-6  btn-primary" id="ip"></button>
    </div>
	
</div>
</html>