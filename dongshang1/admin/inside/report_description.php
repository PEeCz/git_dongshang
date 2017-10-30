<?php
	session_start();
    require '../../static/db.class.php';
    $conn = connect();

    $id = $_GET['id'];
    $sqlDescrip = "SELECT re_group_description FROM report_group WHERE re_group_id='$id'";
    $qryDescrip = $conn->query($sqlDescrip);
    $rs = $qryDescrip->fetch_assoc();
?>
	
		<div class="modal-dialog1" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        	<h4 class="modal-title text-center">รายละเอียด ( Append )</h4>
		      	</div>
		      	<div class="modal-body">
			      	<div class="well">
						<?php 
							if(isset($rs['re_group_description'])!==''){
								echo $rs['re_group_description']; 
							}else{
								echo "ไม่มีรายละเอียด";
							}
						?>
			      	</div>
				</div>
		      	<div class="modal-footer">
		        	<a href="#" class=" btn btn-warning">Edit</a>
		        	<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
		      	</div>
		    </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	