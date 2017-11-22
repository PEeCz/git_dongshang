<?php
	session_start();
    require '../../static/db.class.php';
    $conn = connect();

    $id = $_GET['id'];
    $sqlDescrip = "SELECT re_group_description,re_group_kb FROM report_group WHERE re_group_id='$id'";
    $qryDescrip = $conn->query($sqlDescrip);
    $rs = $qryDescrip->fetch_assoc();
?>
	
		<div class="modal-dialog1" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      	</div>
		      	<div class="modal-body">
		      		<h4 class="modal-title text-center bg-info">รายละเอียด ( Append ) <i class="fa fa-hand-o-down"></i></h4>
			      	<div class="well">
						<?php 
							if(isset($rs['re_group_description'])!==''){
								echo $rs['re_group_description']; 
							}else{
								echo "ไม่มีรายละเอียด";
							}
						?>
			      	</div>
			      	<?php 
						if($rs['re_group_kb']!==''){
					
							echo '<h4 class="modal-title text-center bg-danger kb_textcolor">รายละเอียด ( KB ไม่ปกติ ) <i class="fa fa-hand-o-down"></i></h4>';
			      			echo '<div class="well kb_textcolor">';
						
							echo $rs['re_group_kb']; 
						
			      			echo '</div>';
			      		}
			      	?>
				</div>
		      	<div class="modal-footer">
		        	<a href="edit_shopping/insert_shop.php?id=<?php echo $id; ?>" class=" btn btn-success">Add</a>
		        	<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
		      	</div>
		    </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	