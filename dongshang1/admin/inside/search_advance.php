<?php
	require '../include/header.php';
?>

<script language="JavaScript">
	   var HttPRequest = false;

	   function doCallAjax(Search,Page) {
		  HttPRequest = false;
		  if (window.XMLHttpRequest) { // Mozilla, Safari,...
			 HttPRequest = new XMLHttpRequest();
			 if (HttPRequest.overrideMimeType) {
				HttPRequest.overrideMimeType('text/html');
			 }
		  } else if (window.ActiveXObject) { // IE
			 try {
				HttPRequest = new ActiveXObject("Msxml2.XMLHTTP");
			 } catch (e) {
				try {
				   HttPRequest = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {}
			 }
		  } 
		  
		  if (!HttPRequest) {
			 alert('Cannot create XMLHTTP instance');
			 return false;
		  }
	
			var url = 'search_ajax.php';
			var pmeters = 'mySearch='+Search;

		  	var pmeters = "mySearch=" + Search +
						"&myPage=" + Page;

			HttPRequest.open('POST',url,true);

			HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			HttPRequest.setRequestHeader("Content-length", pmeters.length);
			HttPRequest.setRequestHeader("Connection", "close");
			HttPRequest.send(pmeters);
			
			
			HttPRequest.onreadystatechange = function()
			{

				 if(HttPRequest.readyState == 3)  // Loading Request
				  {
				   document.getElementById("mySpan").innerHTML = "Now is Loading...";
				  }

				 if(HttPRequest.readyState == 4) // Return Request
				  {
				   document.getElementById("mySpan").innerHTML = HttPRequest.responseText;
				  }
				
			}

	   }
	</script>
<body Onload="JavaScript:doCallAjax('','');">
	<h1 class="text-center">OP Data Search Advanced</h1>
	<div class="col-sm-12">
		<form name="frmMain" class="form-inline">
			<div class="col-sm-12">
				<div class="row">
					<input type="text" class="form-control" name="txtSearch" id="txtSearch" placeholder="Search By Group Code" style="width: 300px;">
					<input type="button" class="btn btn-primary" name="btnSearch" id="btnSearch" value="Search" OnClick="JavaScript:doCallAjax(document.getElementById('txtSearch').value,'1');">
					<br><br>
					<span id="mySpan"></span>
				</div>
			</div>
		</form>
	</div>

	<?php
		require '../include/footer_inside.php';
	?>
</body>
</html>