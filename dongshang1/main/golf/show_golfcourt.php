<?php
    require '../includes/headermain.php';

    require '../includes/topbarmain.php';

    require '../includes/navbarmain.php';

    require '../../static/connect.php';


?>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
		
	<div class="container">
		<form class="navbar-form" name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="txtKeyword" id="txtKeyword" value="<?php echo $strKeyword; ?>">
                <span class="input-group-btn">
	            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
		<div class="table-responsive">
		  <table class="table table-striped table-bordered" style="border-width: 5px; border-color: orange;">
		    <thead>
		    	<tr class="bg-danger">
		    		<th class="text-center" style="width: 20px;">#</th>
		    		<th class="text-center" style="width: 200px;">จังหวัด</th>
		    		<th class="text-center" style="width: 220px;">ชื่อสนามกอล์ฟ</th>
		    		<th class="text-center">Weekday(฿)</th>
		    		<th class="text-center">Weekend(฿)</th>
		    		<th class="text-center" style="width: 150px;">Caddy | Golf Cart(฿)</th>
		    		<th class="text-center" style="width: 70px;">Night Golf(฿)</th>
		    		<th class="text-center" style="width: 100px;">ระยะสัญญาเริ่ม</th>
		    		<th class="text-center" style="width: 100px;">ระยะสัญญาสิ้นสุด</th>
		    	</tr>
		    </thead>
		    <tbody>
		    	<?php
				    $showSql = "SELECT * FROM golf_court WHERE golf_name LIKE '%".$strKeyword."%'";
				    $showQry = mysqli_query($conn, $showSql);
		    		while($showRows = mysqli_fetch_array($showQry, MYSQLI_ASSOC)){
		    	?>
		    	<tr class="bg-success">
		    		<td class="text-center" style="width: 20px;">
		    			<?php echo (int)$showRows['golf_id']; ?>
		    		</td>
		    		<td class="text-center" style="width: 220px;">
		    			<?php 
		    			if($showRows['golf_province1']=='กรุงเทพมหานคร' && $showRows['golf_province2']=='สมุทรปราการ'){
		    				echo $showRows['golf_province1'].' | '.$showRows['golf_province2'];
		    			}
		    			if($showRows['golf_province1']=='ปทุมธานี'){
		    				echo $showRows['golf_province1'];
		    			}
		    			if($showRows['golf_province1']=='นครปฐม'){
		    				echo $showRows['golf_province1'];
		    			}
		    			if($showRows['golf_province1']=='นครนายก' && $showRows['golf_province2']=='ฉะเชิงเทรา'){
		    				echo $showRows['golf_province1'].' | '.$showRows['golf_province2'];
		    			}
		    			if($showRows['golf_province1']=='ชลบุรี' && $showRows['golf_province2']=='พัทยา'){
		    				echo $showRows['golf_province1'].' | '.$showRows['golf_province2'];
		    			}
		    			if($showRows['golf_province1']=='หัวหิน' && $showRows['golf_province2']=='เพชรบุรี' && $showRows['golf_province3']=='ประจวบคีรีขันธ์'){
		    				echo $showRows['golf_province1'].' | '.$showRows['golf_province2'].' | '.$showRows['golf_province3'];
		    			}
		    			?>
		    		</td>
		    		<td class="text-center" style="width: 200px;">
		    			<?php echo $showRows['golf_name']; ?>
		    		</td>
		    		<td class="text-center">
		    			<?php echo $showRows['golf_weekday']; ?>
		    		</td>
		    		<td class="text-center">
		    			<?php echo $showRows['golf_weekend']; ?>
		    		</td>
		    		<td class="text-center" style="width: 150px;">
		    			<?php echo $showRows['golf_caddy'].' | '.$showRows['golf_cart']; ?>
		    		</td>
		    		<td class="text-center" style="width: 70px;">
		    			<?php echo $showRows['golf_night_weekday']; ?>
		    		</td>
		    		<td class="text-center" style="width: 100px;">
		    			<?php echo $showRows['golf_contact_start']; ?>
		    		</td>
		    		<td class="text-center" style="width: 100px;">
		    			<?php echo $showRows['golf_contact_end']; ?>
		    		</td>
		    	</tr>
		    	<?php } ?>
		    </tbody>
		  </table>
		</div>
		<nav class="text-center" aria-label="Page navigation">
		  <ul class="pagination">
		    <li>
		      <a href="#" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>
		    <li><a href="#">1</a></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li>
		      <a href="#" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		      </a>
		    </li>
		  </ul>
		</nav>
	</div>

<?php
    require '../includes/footermain.php';
?>