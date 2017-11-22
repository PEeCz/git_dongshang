<?php
	require('../function/db.class.php');
  $conn = connect();

	$id = $_GET['id'];
	
	$sql = "SELECT * FROM hotel_book WHERE id='$id'";
	$qry = $conn->query($sql);
  $rs = $qry->fetch_assoc();
?>

  <form method="post" action="hotel/use_room_description_chk.php?idDescrip=<?php echo $rs['id']; ?>">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="text-center text-danger"><span style="font-weight: bolder;">รายละเอียดในการใช้ห้องไป)</span></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
          <textarea class="form-control" name="use_room_description" cols="15" rows="10"></textarea>
        
	    </div>
      <?php
        if(isset($rs['use_room_description'])!=''){
      ?>
      <div class="modal-content text-center" style="background-color: #f0e68c;">      
        <h3 class="text-info">*** ข้อมูลการใช้ห้องไป ***</h3>
        <div class="well well-sm text-center" style="background-color: #f0e68c; border-style: none;">
          <p class="text-success" style="font-size: 20px;"><?php echo $rs['use_room_description']; ?></p>
        </div>
      </div>
      <?php } ?>
      <div class="modal-footer">
      	<input name="save" type="submit" id="save" value="+ บันทีก" class="btn btn-primary">
        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
      </div>
    </div>
  </form>


  
