<?php
	session_start();
    require 'static/db.class.php';
    $conn = connect();

    $id = $_GET['id'];
    $sqlDescrip = "SELECT append,kbcomment FROM report_shopping WHERE no_key='$id'";
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
							if(isset($rs['append'])!==''){
								echo $rs['append']; 
							}else{
								echo "ไม่มีรายละเอียด";
							}
						?>
			      	</div>
			      	<?php 
						if($rs['kbcomment']!=''){
					
							echo '<h4 class="modal-title text-center bg-danger kb_text">รายละเอียด ( KB ไม่ปกติ ) <i class="fa fa-hand-o-down"></i></h4>';
			      			echo '<div class="well kb_text">';
						
							echo $rs['kbcomment']; 
						
			      			echo '</div>';
			      		}
			      	?>
				</div>
		      	<div class="modal-footer">
		      		<a href="old_edit_report/old_edit_group.php?id=<?php echo $id; ?>" class=" btn btn-warning">Edit</a>
		        	<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
		      	</div>
		    </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	