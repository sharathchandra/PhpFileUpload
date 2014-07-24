<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>JS File Upload with Progress</title>
    <style>
    .container {
        width: 500px;
        margin: 0 auto;
    }
    .progress_outer {
        border: 1px solid #000;
    }
    .progress {
        width: 0%;
        background: #DEDEDE;
        height: 20px;  
    }
    </style>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
	<script>
		$(function(){
		  var openOnce = 0;
		    $("#addpdf").click(function(){
			
			  $("#dialog").dialog({resizable: false,
			  height:250,
			  modal: false,
			  buttons: {
				Cancel: function() {
				  $( this ).dialog( "close" );
				}
			  }});
			  if(openOnce == 0){
			  $("#dialog").css("display","block");
			  openOnce++;
			  }
			});
		});
	</script>
</head>
<body>    
	<input type="button" value="Add Pdf" id="addpdf"/> 
	<input type="button" value="Remove Pdf" />
	<input type="button" value="Change Pdf" />
	<?php
		echo "<input type='hidden' value='".$_GET['order_value']."' name='order_value' id='_ordernum'/>";
	?>
	<div class="container" id="dialog" style="display:none"><p>Select File: <input type="file" id="_file"> <input type="button" id="_submit" value="Upload!"></p><div class="progress_outer"><div id="_progress" class="progress"></div></div></div>
    <script src='upload.js'></script>
</body>
</html>
