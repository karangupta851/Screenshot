<!DOCTYPE html>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
	<title>Take A Screenshot</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="html2canvas.js"></script>
	<script src="jscolor.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script></head>
<body>
<div class="container">
<div class="row">
<div class="col-12 col-sm-12">
<div class="col-md-8 col-sm-12">
<div class="col-md-4 col-sm-12"><input type="file" class="file" onChange="readURL(this);" /></div>
<div class="col-md-4 col-sm-12"><input id="slider" type ="range" min ="12" max="100" value ="0"/></div>
<!--<div class="col-md-4"><input type="text" Placeholder="Enter The Text" id="textbox" /></div>
<div class="col-md-4"><textarea id="textbox1" ></textarea></div>-->
<div class="col-md-4 col-sm-12"><input class="form-control" id="chosen-value" value="000000"></div>
<div class="col-md-4 col-sm-12"><button class=" btn btn-primary  jscolor {valueElement:'chosen-value', onFineChange:'setTextColor(this)'}">Set Font Color</button> </div>
<!--<div class="col-md-4"><button class=" btn btn-primary jscolor {valueElement:'chosen-value1', onFineChange:'setTextColor1(this)'}" >Set Font Color</button> </div>-->
<div class="col-md-4 col-sm-12"><button class=" btn btn-primary jscolor {valueElement:'chosen-value3', onFineChange:'setTextColor3(this)'}">Set Background Color</button></div>
<div class="col-md-4 col-sm-12"><button class=" btn btn-primary jscolor {valueElement:'chosen-value2', onFineChange:'setTextColor2(this)'}">Set Background Color</button></div>
<div class="col-md-4 col-sm-12">
		<button id="take_screenshoot" class="btn btn-primary">Take Screenshot</button>
	</div>
	<div class="col-md-4 col-sm-12">
		<select id="align" class="form-control inputstl"> <option value="left">Left</option><option value="right">Right</option><option value="center">Center</option><option value="justify">Justify</option></select>
	</div>
	<div class="col-md-4 col-sm-12">
		<a class="view btn btn-primary" href="screenshot.html" class="btn btn-primary">View ScreenShot</a>
	</div>
	</div>
	</div>
	<div class="col-md-12 col-sm-12">
		<div class="col-md-6 col-sm-12">
	<div class="cap">
<div id="capture1" class="capture">
	<div class="col-md-12">
		<div class="fb-icon col-md-2"><span>facebook</span></div><div class="top col-md-10"><span class="fb">facebook.com/snr.caddesk</span></div>
	</div>
	<div class="col-md-12">
		<div id="capture" class="capture"> <div class="movable_div" id="movable_div" contenteditable="true">Enter Text Here</div>
			<div class="bottom"><span class="cad"><img src="bg_img/caddesk_logo.png" /></span></div></div>
	</div>
		<div class="col-md-12"><div class="bottom1"><span class="mob">Mb. 9817525007</span><span class="add">Sundernagar</span></div>
	</div>
</div>
			</div>
</div>

</div>
<script type="text/javascript">
	$(function(){	
			
			//to make a div draggable
			$('.movable_div').draggable(
				{containment: "#capture", scroll: false}
			);
		//	$('.movable_div1').draggable(
//				{containment: "#capture", scroll: false}
//			);
//			//to capture the entered text in the textbox 
//			$('#textbox').keyup(function(){
//				var text = $(this).val();
//				$('.movable_div').text(text);
//			});	
//			$('#textbox1').keyup(function(){
//				var text = $(this).val();
//				$('.movable_div1').text(text);
//			});	
			//font size handler here. 
			//$('#capture').change(function(){
//				Width = $(this).val();
//				$('.capture').css('width', Width+'%');
//			});	
			
			//to change the background once the user select
			//$('#background').change(function(){
//				var background = $(this).val();
//				$('#canvas').css('background', 'url(bg_img/'+background+')');
//			});
	//to change the background once the user select
			$('#align').change(function(){
				var align = $(this).val();
				$('#capture').css('text-align', align);
			});
			$('#opacity').change(function(){
				var opacity = $(this).val();
				$('#abc').css('opacity', opacity);
			});
			
			
		//font size handler here. 
			$('#slider').change(function(){
				fontSize = $(this).val();
				$('.movable_div').css('font-size', fontSize+'px');
			});		
		//	$('#slider').change(function(){
//				fontSize = $(this).val();
//				$('.movable_div1').css('font-size', fontSize+'px');
//			});
	
		var dataURL = {};
		$('#take_screenshoot').click(function(){
			html2canvas(document.querySelector("#capture1")).then(canvas => {
				document.body.appendChild(canvas);
	    //console.log(canvas.toDataURL());
	    dataURL = canvas.toDataURL();
	    post_data(dataURL);  	
	  });
		});
});
		function post_data(imageURL){
		//console.log(imageURL);
		$.ajax({
			url: "save_data.php",
			type: "POST",
			data: {image: imageURL},
			dataType: "html",
			success: function() {
				alert('Success!!');
				location.reload();
			}
		});
		
	}
	
	function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                   // document.getElementById('capture').image.src =reader.result;  
		document.getElementById('capture').style.background = "url(" + reader.result + ")"; 
                };
                reader.readAsDataURL(input.files[0]);
            }
     }
</script>
  <script>
  $( function() {
    $( "#movable_div" ).resizable();
  } );
  </script>
<script>
	function setTextColor(picker) {
		document.getElementById('movable_div').style.color = '#' + picker.toString()
	}
	</script>
<!--	<script>
	function setTextColor1(picker) {
		document.getElementById('movable_div1').style.color = '#' + picker.toString()
	}
	</script>-->
	<script>
	function setTextColor2(picker) {
		document.getElementById('capture').style.background = '#' + picker.toString()
	}
	</script>
	<script>
	function setTextColor3(picker) {
		document.getElementById('movable_div').style.background = '#' + picker.toString()
	}
	</script>
	</div></div>
</body>
</html>
