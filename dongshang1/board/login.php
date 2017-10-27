
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dong Shang Board</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="../src/css/bootstrap.css" rel="stylesheet">
     <!-- FONTAWESOME STYLES-->
    <link href="../src/css/font-awesome.css" rel="stylesheet">
     <!-- MORRIS CHART STYLES-->
    <link href="../src/js/board/morris/morris-0.4.3.min.css" rel="stylesheet">
        <!-- CUSTOM STYLES-->
    <link href="../src/css/board/custom.css" rel="stylesheet">
     <!-- GOOGLE FONTS-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="../src/css/board/style.css">
    <link rel="stylesheet" href="../src/css/board/jquery_notification.css">

  
</head>

<body>

<div class="login-wrap">
  <div class="login-html">
    <a href="../index.php"><img class="img-responsive center-block" style="padding-bottom: 20px;" src="../img/logo/dongshang.png" width="100px" height="100px"></a>
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">เข้าสู่ระบบ</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">สมัครสมาชิก</label>
    <div class="login-form">
      <div class="sign-in-htm">
      <form role="form" method="post" action="function/login_chk.php">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="user" type="text" class="input" name="user_login">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="pass" type="password" class="input" name="pass_login" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="ล็อคอิน">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="forgot_password.php">Forgot Password?</a>
        </div>
      </form>
      </div>
      <div class="sign-up-htm">
          <form data-toggle="validator" role="form" id="myForm" method="post" action="function/regisboard_chk.php">
            <div class="form-group">
              <div class="form-group">
                <label for="inputName" class="control-label">Username</label>
                <input type="text" class="form-control" id="username" name="mem_user" placeholder="Username" required>
                <BR>
                <input type="button" class="btn btn-md btn-warning" name="login" id="login" value="ตรวจสอบชื่อผู้ใช้" onclick="chkUser();" />
              </div>
              <div class="form-group">
                <label for="inputPassword" class="control-label">Password</label>
                <input type="password" data-minlength="6" class="form-control" name="mem_pass" id="inputPassword" placeholder="Password" required>
                <div class="help-block">*** Minimum of 6 characters ***</div>
              </div>
            </div>

            <div class="form-group">
                <label for="inputName" class="control-label">Name</label>
                <input type="text" class="form-control" id="inputName" name="mem_name" placeholder="Name" required>
            </div>

            <div class="form-group">
              <label for="inputEmail" class="control-label">Email</label>
              <input type="email" class="form-control" id="inputEmail" name="mem_email" placeholder="Email Address" data-error="@ , that email address is invalid" required>
              <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="inputName" class="control-label">Address</label>
                <textarea type="text" class="form-control" name="mem_address" id="inputName" rows="5" placeholder="544/31" required></textarea>
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-success btn-block" value="ลงทะเบียน">
            </div>
          </form>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1"><a>Already Member?</a></label>
        </div>
      </div>
    </div>
  </div>
</div>
  
  
    <script src="../src/js/jquery-1.11.0.min.js"></script>
    <script src="../src/js/board/jquery_notification_v.1.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../src/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../src/js/board/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
    <script src="../src/js/board/morris/raphael-2.1.0.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../src/js/board/validator.min.js"></script>

    <script type="text/javascript">
      function chkUser(){
        var user = $("#username").val();
        if(user == ""){
              showNotification({
                   message:"กรอก username ผู้ใช้ที่ต้องการตรวจสอบ",
                   type:"error", 
                   autoClose:true, 
                   duration:3 
              }); 
              return;       
        }else{
            var url = "function/datachk_user.php?username=" + user;
            $.get(url, function(data){
                   if(data==2){
                          showNotification({
                               message: "username นี้ ใช้งานได้",
                               type: "success",
                               autoClose: false,
                               duration: 5
                          });                 
                    }else{
                          showNotification({
                               message:"username นี้มีผู้ใช้ไปก่อนแล้ว",
                               type:"error", 
                               autoClose:true, 
                               duration:10 
                          });               
                    }
               });    
         }
      }
    </script>
</body>
</html>
