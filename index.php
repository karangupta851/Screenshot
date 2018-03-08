<!DOCTYPE html>
<html>
<head>
<style>

		

		.movable_div{
			cursor: move;
		}
		.movable_div1{
			cursor: move;
		}
		.cap{
		height:400px;
		width:100%;
		float:left;
		}
		.capture{
		background-image:url(bg_img/Tulips.jpg);
		background-size:100% 100%;
		height: 100%;
}
		
	
.col-md-4 {
  float: left;
  margin-bottom: 8px;
  margin-top: 10px;
}
.col-md-8 {
  margin: auto;
}
#take_screenshoot {
}
button {
  width: 100%;
}
input {
  width: 100%;
}
.file {
  background: white;
  width: 100%;
  border-radius: 3px;
}

.col-12 {
  background: purple;
}
.col-md-12 {
  padding: 0!important;
}
	.top {
    width: 100%;
    float: left;
    background: red;
	text-align: left;
}	
.fb-icon {
    width: 14%;
    float: left;
}
img{
width:100%;}
.info {
  width: 96%;
  float: left;
}
.fb {
    font-size: 15px;
    color: #fff;
    font-weight: bold;
}
.bottom {
    width: 29%;
    float: right;
    position: relative;
    top: 316px;
    background: #fff;
    padding: 8px;
}
.cad {
}
.bottom1 {
    width: 100%;
    float: left;
    position: absolute;
    top: 400px;
    background: red;
}
.mob {
    width: 50%;
    float: left;
    color: #fff;
    padding: 2px;
    font-weight: bold;
	text-align:left;
    font-size: 20px;
}
.add {
    text-align: right;
    width: 50%;
    float: left;
    color: #fff;
    font-weight: bold;
    padding: 3px;
    font-size: 20px;
    text-transform: uppercase;
}
.top {
    width: 86%;
    float: left;
    background: red;
    font-size: 20px;
    text-transform: uppercase;
    font-weight: bold;
    padding-left: 6px;
}
#movable_div {
    width: 40% !important;
    float: left !important;
	height: auto !important;
}
	
.col-md-5 {
  padding: 0;
  margin: auto;
}
.col-md-6 {
  margin: auto;
  padding: 0;
}
	</style>
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
<div class="col-12">
<div class="col-md-8">
<div class="col-md-4"><input type="file" class="file" onChange="readURL(this);" /></div>
<div class="col-md-4"><input id="slider" type ="range" min ="12" max="100" value ="0"/></div>
<!--<div class="col-md-4"><input type="text" Placeholder="Enter The Text" id="textbox" /></div>
<div class="col-md-4"><textarea id="textbox1" ></textarea></div>-->
<div class="col-md-4"><input id="chosen-value" value="000000"></div>
<div class="col-md-4"><button class=" btn btn-primary  jscolor {valueElement:'chosen-value', onFineChange:'setTextColor(this)'}">Set Font Color</button> </div>
<!--<div class="col-md-4"><button class=" btn btn-primary jscolor {valueElement:'chosen-value1', onFineChange:'setTextColor1(this)'}" >Set Font Color</button> </div>-->
<div class="col-md-4"><button class=" btn btn-primary jscolor {valueElement:'chosen-value3', onFineChange:'setTextColor3(this)'}">Set Background Color</button></div>
<div class="col-md-4"><button class=" btn btn-primary jscolor {valueElement:'chosen-value2', onFineChange:'setTextColor2(this)'}">Set Background Color</button></div>
<div class="col-md-4">
		<button id="take_screenshoot" class="btn btn-primary">Take Screenshot</button>
	</div>
	<div class="col-md-4">
		<select id="align" class="form-control inputstl"> <option value="left">Left</option><option value="right">Right</option><option value="center">Center</option><option value="justify">Justify</option></select>
	</div>
	<div class="col-md-4">
		<input type="text" class="form-control" id="opacity">
	</div>
	</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-5">
	<div class="cap">
<div id="capture" class="capture">
<div class="fb-icon"><img src="bg_img/12.png"></div><div class="top"><span class="fb">facebook.com/snr.caddesk</span></div>
		<div class="movable_div" id="movable_div" contenteditable="true">Enter Text Here</div>
		<div class="bottom"><span class="cad"><img src="bg_img/caddesk_logo.png" /></span></div>
		<div class="bottom1"><span class="mob">Mb. 9817525007</span><span class="add">Sundernagar</span></div>
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
			html2canvas(document.querySelector("#capture")).then(canvas => {
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
                    document.getElementById('capture').style.backgroundImage = "url(" + reader.result + ")";  
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
