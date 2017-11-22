<?php
	require('../function/db.class.php');
	$conn = connect();

	$id = $_GET['id'];

	
	$sql = "SELECT * FROM golf_book WHERE id='$id'";
	$qry = $conn->query($sql);
    $rs = $qry->fetch_assoc();
?>
	<!--<script type="text/javascript">
		function nStr(){
		    var int1 =document.getElementById('input1').value;
		    var int2=document.getElementById('input2').value;    
		    var n1 = parseInt(int1);
		    var n2 = parseInt(int2);        
		    var show=document.getElementById('show');
		    
		    if (isNaN(n1)){    
		          document.getElementById("show").setAttribute("color","red");       
		          show.innerHTML="ERROR"
		        if (int2.length>0){
		            if (isNaN(int1)){
		                document.getElementById("show").setAttribute("color","red");
		                show.innerHTML="ERROR"
		            }  
		            else if (isNaN(int2)){
		                document.getElementById("show").setAttribute("color","red");
		                show.innerHTML="ERROR"
		            }           
		            else  if (int1.length >0){
		                document.getElementById("show").setAttribute("color","Blue");    
		                show.innerHTML=n1-n2;
		            }            
		            else if (int2.length>0){
		                document.getElementById("show").setAttribute("color","Blue");    
		                show.innerHTML=n2;
		            }
		        }   
		    }else if (int1.length > 0) {     
	         	if (isNaN(int2)){
	            	document.getElementById("show").setAttribute("color","red");
	               	show.innerHTML="ERROR"
	         	}    
	         	else if (int2.length >0){
	               	document.getElementById("show").setAttribute("color","Blue");    
	               	show.innerHTML=n1-n2;
	         	}                     
	         	else if (int1.length > 0){
	               	document.getElementById("show").setAttribute("color","Blue");    
	               	show.innerHTML=n1;
	       		}            
	     	}
		}

		function addCommas(nStr) //ฟังชั่้นเพิ่ม คอมม่าในการแสดงเลข
	    {
	        nStr += '';
	        x = nStr.split('.');
	        show = x[0];
	        x2 = x.length > 1 ? '.' + x[1] : '';
	        var rgx = /(\d+)(\d{3})/;
	        while (rgx.test(x1)) {
	        show = show.replace(rgx, '$1' + ',' + '$2');
	        }
	        return x1 - x2;
	    }
		
	</script>-->

	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script language="javascript">
		function fncCal()
		{
			var tot = 0;
			var sum = 0;
			for(i=1;i<=document.frmCalc.hdnLine.value;i++)
			{
				tot = parseInt(eval("document.frmCalc.txtVol1_"+i+".value")) - parseInt(eval("document.frmCalc.txtVol2_"+i+".value"));
				sum = tot - sum;
				document.frmCalc.txtSum.value=sum;
			}
		}
	</script>
</head>
<body>
	<form method="post" name="frmCalc" action="golf/calc_update.php?id=<?php echo $rs['id']; ?>">
	    <div class="modal-content">
	      <div class="modal-header text-center">
	      	<h2 class="text-danger">คำนวณห้อง <span style="font-weight: bolder;">(= คงเหลือ)</span></h2>
	      	<hr>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        <span aria-hidden="true">&times;</span></button>
		        <div class="form-group">
		        	&nbsp;&nbsp;
					<input type="text" class="form-control-static text-center" style="width: 30px;" id="txtVol1_1" name="txtVol[]" value="<?php echo $rs['room']; ?>" readonly> 
					&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;
		            <input type="text" class="form-control-static text-center" style="width: 30px;" id="txtVol2_1" name="txtVol[]"> &nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;
		            <input type="text" class="form-control-static text-center" style="width: 30px;" name="txtSum" id="txtSim">
		            <input type="hidden" name="hdnLine" value="1">
					<input class="btn btn-primary btn-sm" name="btnCal" type="button" value="คำนวณ" OnClick="JavaScript:fncCal();">
		        </div>
		  </div>
		  <?php
			if(isset($rs['room_balance'])!=''){
			$room = $rs['room'];
			$room_balance = $rs['room_balance'];
			$use_room = $room-$room_balance;
		  ?>
		  <div class="modal-content text-center" style="background-color: #f0e68c;">			
				<h3 class="text-info">*** จำนวนห้องที่ใช้ไป และห้องคงเหลือ ***</h3>
				<div class="well well-sm text-center" style="background-color: #f0e68c; border-style: none;">
					<p class="text-success" style="font-size: 20px;">ห้องที่ใช้ทั้งหมด : <?php echo $use_room; ?> ห้อง</p>
					<BR>
					<p class="text-success" style="font-size: 20px;">ห้องคงเหลือทั้งหมด : <?php echo $room_balance; ?> ห้อง</p>
				</div>
		  </div>
		  <?php } ?>
	      <div class="modal-footer">
	      	<input type="submit" name="save" class=" btn btn-success" value="บันทึก">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
	      </div>
	    </div>
	</form>

	
</body>
</html>