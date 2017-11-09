<?php
	require '../../static/db.class.php';
	$conn = connect();

	$output = '';
	$sql = "SELECT * FROM report_group WHERE re_group_code LIKE '%".$_POST['search']."%'";
	$result = mysqli_query($conn, $sql);
	$output.="<h4 align='center'>Search Result</h4>";
		if(mysqli_num_rows($result)>0){
			$output.="<table class='table table-bordered'>
				<tr>
					<th>No.</th>
					<th>No. Group</th>
					<th>ชื่อ<BR>ไกด์</th>
					<th>ชื่อ<BR>หัวหน้าทัวร์</th>
					<th>ชื่อ<BR>เอเยนต์</th>
					<th>ชื่อ<BR>รายการ</th>
					<th>จำนวน<BR>(คน)</th>
					<th>รับ</th>
					<th>ส่ง</th>
					<th>โรงแรม <BR>1</th>
					<th>โรงแรม <BR>2</th>
					<th>โรงแรม <BR>3</th>
					<th>โรงแรม <BR>4</th>
					<th>รายละเอียด</th>
                </tr>";
	        while($row = mysqli_fetch_array($result)){
	        	$output.="<tr>
        				<td>".$row['re_group_id']."</td>
        				<td>".$row['re_group_code']."</td>
        				<td>".$row['re_group_nameguide_th']."</td>
        				<td>".$row['re_group_leadertour']."</td>
        				<td>".$row['re_group_agent']."</td>
        				<td>".$row['re_group_program']."</td>
        				<td>".$row['re_group_personqty']."</td>
        				<td>".$row['re_group_in_date'].''.$row['re_group_in_time']."</td>
        				<td>".$row['re_group_out_date'].''.$row['re_group_out_time']."</td>
        				<td>".$row['re_group_hotel1']."</td>
        				<td>".$row['re_group_hotel1']."</td>
        				<td>".$row['re_group_hotel1']."</td>
        				<td>".$row['re_group_hotel1']."</td>
        				<td><a id='$row[re_group_code]' class='btn btn-sm btn-primary btn_description'>คลิก</a></td>";
        	}
        	$output.="</table>";

        	echo $output;

		}else{
			echo "Data Not Found";
		}
?>