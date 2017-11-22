

<?php
  require('../function/db.class.php');
  require('../function/db.qry.php');
  $conn = connect();

  $id = $_GET['id'];



  $sql = "SELECT * FROM hotel_book WHERE id='$id'";
  $qry = $conn->query($sql);
  $rs = $qry->fetch_assoc();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/bootstrapValidator.min.css">
  <link rel="stylesheet" href="../assets/css/font-awesome.css">
  <link rel="stylesheet" href="../assets/css/ie10-viewport-bug-workaround.css">
  <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>
<body>
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">บริษัท ตงซ่าง ทราเวลเซอร์วิสกรุ๊ป(ประเทศไทย) จำกัด</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">หน้าหลัก</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a class="text-center text-success" style="font-weight: bolder;" href="../../index.php">หน้าหลัก</a></li>
            <li><a class="text-center text-success" style="font-weight: bolder;" href="../deposit-report.php">ดูข้อมูล</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h2 class="header">แก้ไขข้อมูล</h2>
        <form class="well form-horizontal" action="edit_hotelchk.php?id=<?php echo $rs['id']; ?>" method="post"  id="contact_form">
          <fieldset>

          <!-- Form Name -->
          <legend>Contact Us Today!</legend>

          <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label">วันที่</label>  
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input name="date" class="form-control"  type="date" value="<?php echo $rs['start_date']; ?>">
                <input name="time" class="form-control"  type="time" value="<?php echo $rs['start_time']; ?>">
              </div>
            </div>
          </div>

          <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label" >กรุ๊ป</label> 
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                <input name="group_code" placeholder="Ex. A15022" class="form-control"  type="text" value="<?php echo $rs['group_code']; ?>">
              </div>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label">โรงแรม</label>  
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-university"></i></span>
                <input name="hotel_name" placeholder="Ex. Avana Hotel" class="form-control"  type="text" value="<?php echo $rs['hotel_name']; ?>">
              </div>
            </div>
          </div>


          <!-- Text input-->
                 
          <div class="form-group">
            <label class="col-md-4 control-label">ห้องพัก</label>  
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-bed"></i></span>
                <input name="room" placeholder="Ex. 1-10" class="form-control" type="text" value="<?php echo $rs['room']; ?>">
              </div>
            </div>
          </div>

          <!-- Select Basic -->
             
          <div class="form-group"> 
            <label class="col-md-4 control-label">แบบห้องพัก</label>
            <div class="col-md-4 selectContainer">
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-list-alt"></i></span>
              <select name="room_type" class="form-control selectpicker">
                <option value="Standard Room"<?php if ($rs['room_type']== 'Standard Room'){ ?> selected='selected'<?php } ?>>Standard Room</option>
                <option value="Superior Room"<?php if ($rs['room_type']== 'Superior Room'){ ?> selected='selected'<?php } ?>>-- Superior Room</option>
                <option value="Premier Room"<?php if ($rs['room_type']== 'Premier Room'){ ?> selected='selected'<?php } ?>>-- Premier Room</option>
                <option value="Deluxe Room"<?php if ($rs['room_type']== 'Deluxe Room'){ ?> selected='selected'<?php } ?>>-- Deluxe Room</option>
                <option value="Executive Room"<?php if ($rs['room_type']== 'Executive Room'){ ?> selected='selected'<?php } ?>>-- Executive Room</option>
                <option value="Grand Room River View"<?php if ($rs['room_type']== 'Grand Room River View'){ ?> selected='selected'<?php } ?>>-- Grand Room River View</option>
                <option value="Superior Non Sea View Room"<?php if ($rs['room_type']== 'Superior Non Sea View Room'){ ?> selected='selected'<?php } ?>>-- Superior Non Sea View Room</option>
                <option value="Superior Sea View Room"<?php if ($rs['room_type']== 'Superior Sea View Room'){ ?> selected='selected'<?php } ?>>-- Superior Sea View Room</option>
                <option value="Deluxe Sea View Room"<?php if ($rs['room_type']== 'Deluxe Sea View Room'){ ?> selected='selected'<?php } ?>>-- Deluxe Sea View Room</option>
                <option value="Executive Club"<?php if ($rs['room_type']== 'Executive Club'){ ?> selected='selected'<?php } ?>>-- Executive Club</option>
                <option value="Executive Suite"<?php if ($rs['room_type']== 'Executive Suite'){ ?> selected='selected'<?php } ?>>-- Executive Suite</option>
                <option value="Family Suite"<?php if ($rs['room_type']== 'Family Suite'){ ?> selected='selected'<?php } ?>>-- Family Suite</option>
                <option value="One Bedroom Superior"<?php if ($rs['room_type']== 'One Bedroom Superior'){ ?> selected='selected'<?php } ?>>-- One Bedroom Superior</option>
                <option value="Studio"<?php if ($rs['room_type']== 'Studio'){ ?> selected='selected'<?php } ?>>-- Studio</option>
                <option value="Junior Suite"<?php if ($rs['room_type']== 'Junior Suite'){ ?> selected='selected'<?php } ?>>-- Junior Suite</option>
              </select>
              </div>
            </div>
          </div>

          <!-- Text area -->
            
          <div class="form-group">
            <label class="col-md-4 control-label">รายละเอียดต่างๆ</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-font"></i></span>
                  <textarea class="form-control" name="other" placeholder="รายละเอียดที่ต้องการใส่"><?php echo $rs['other']; ?></textarea>
              </div>
            </div>
          </div>

 



          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
              <button type="submit" class="btn btn-success">แก้ไขข้อมูล <span class="glyphicon glyphicon-edit"></span></button>
              <a href="../deposit-report.php" class="btn btn-warning">กลับหน้าหลัก <span class="glyphicon glyphicon-backward"></span></a>
            </div>
          </div>

          </fieldset>
          </form>
        </div>
      </div>
    </div>

  <script src="../assets/js/jquery-1.11.0.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/bootstrapValidator.min.js"></script>
  <script src="../assets/js/holder.min.js"></script>
  <script src="../assets/js/ie10-viewport-bugworkaround.js"></script>
  <script src="../assets/js/ie-emulation-modes-warning.js"></script>
</body>
</html>