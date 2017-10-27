<?php
    require '../includes/headermain.php';

    require '../includes/topbarmain.php';

    require '../includes/navbarmain.php';

?>

	<div class="container">
		<form class="form-horizontal" method="post" action="insert_golfdbchk.php">
			
			<div class="form-group">
				<label class="col-sm-2 control-label">จังหวัดที่ 1</label>
			    <div class="col-sm-6">
			      <select name="golf_province1" class="form-control">
				      <option value="" selected>--------- เลือกจังหวัด ---------</option>
				      <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
				      <option value="กระบี่">กระบี่ </option>
				      <option value="กาญจนบุรี">กาญจนบุรี </option>
				      <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
				      <option value="กำแพงเพชร">กำแพงเพชร </option>
				      <option value="ขอนแก่น">ขอนแก่น</option>
				      <option value="จันทบุรี">จันทบุรี</option>
				      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
				      <option value="ชัยนาท">ชัยนาท </option>
				      <option value="ชัยภูมิ">ชัยภูมิ </option>
				      <option value="ชุมพร">ชุมพร </option>
				      <option value="ชลบุรี">ชลบุรี </option>
				      <option value="เชียงใหม่">เชียงใหม่ </option>
				      <option value="เชียงราย">เชียงราย </option>
				      <option value="ตรัง">ตรัง </option>
				      <option value="ตราด">ตราด </option>
				      <option value="ตาก">ตาก </option>
				      <option value="นครนายก">นครนายก </option>
				      <option value="นครปฐม">นครปฐม </option>
				      <option value="นครพนม">นครพนม </option>
				      <option value="นครราชสีมา">นครราชสีมา </option>
				      <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
				      <option value="นครสวรรค์">นครสวรรค์ </option>
				      <option value="นราธิวาส">นราธิวาส </option>
				      <option value="น่าน">น่าน </option>
				      <option value="นนทบุรี">นนทบุรี </option>
				      <option value="บึงกาฬ">บึงกาฬ</option>
				      <option value="บุรีรัมย์">บุรีรัมย์</option>
				      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
				      <option value="ปทุมธานี">ปทุมธานี </option>
				      <option value="ปราจีนบุรี">ปราจีนบุรี </option>
				      <option value="ปัตตานี">ปัตตานี </option>
				      <option value="พะเยา">พะเยา </option>
				      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
				      <option value="พังงา">พังงา </option>
				      <option value="พิจิตร">พิจิตร </option>
				      <option value="พิษณุโลก">พิษณุโลก </option>
				      <option value="เพชรบุรี">เพชรบุรี </option>
				      <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
				      <option value="แพร่">แพร่ </option>
				      <option value="พัทลุง">พัทลุง </option>
				      <option value="ภูเก็ต">ภูเก็ต </option>
				      <option value="มหาสารคาม">มหาสารคาม </option>
				      <option value="มุกดาหาร">มุกดาหาร </option>
				      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
				      <option value="ยโสธร">ยโสธร </option>
				      <option value="ยะลา">ยะลา </option>
				      <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
				      <option value="ระนอง">ระนอง </option>
				      <option value="ระยอง">ระยอง </option>
				      <option value="ราชบุรี">ราชบุรี</option>
				      <option value="ลพบุรี">ลพบุรี </option>
				      <option value="ลำปาง">ลำปาง </option>
				      <option value="ลำพูน">ลำพูน </option>
				      <option value="เลย">เลย </option>
				      <option value="ศรีสะเกษ">ศรีสะเกษ</option>
				      <option value="สกลนคร">สกลนคร</option>
				      <option value="สงขลา">สงขลา </option>
				      <option value="สมุทรสาคร">สมุทรสาคร </option>
				      <option value="สมุทรปราการ">สมุทรปราการ </option>
				      <option value="สมุทรสงคราม">สมุทรสงคราม </option>
				      <option value="สระแก้ว">สระแก้ว </option>
				      <option value="สระบุรี">สระบุรี </option>
				      <option value="สิงห์บุรี">สิงห์บุรี </option>
				      <option value="สุโขทัย">สุโขทัย </option>
				      <option value="สุพรรณบุรี">สุพรรณบุรี </option>
				      <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
				      <option value="สุรินทร์">สุรินทร์ </option>
				      <option value="สตูล">สตูล </option>
				      <option value="หนองคาย">หนองคาย </option>
				      <option value="หนองบัวลำภู">หนองบัวลำภู </option>
				      <option value="อำนาจเจริญ">อำนาจเจริญ </option>
				      <option value="อุดรธานี">อุดรธานี </option>
				      <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
				      <option value="อุทัยธานี">อุทัยธานี </option>
				      <option value="อุบลราชธานี">อุบลราชธานี</option>
				      <option value="อ่างทอง">อ่างทอง </option>
				      <option value="อื่นๆ">อื่นๆ</option>
				</select>
			    </div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">จังหวัดที่ 2</label>
			    <div class="col-sm-6">
			      <select name="golf_province2" class="form-control">
				      <option value="" selected>--------- เลือกจังหวัด ---------</option>
				      <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
				      <option value="กระบี่">กระบี่ </option>
				      <option value="กาญจนบุรี">กาญจนบุรี </option>
				      <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
				      <option value="กำแพงเพชร">กำแพงเพชร </option>
				      <option value="ขอนแก่น">ขอนแก่น</option>
				      <option value="จันทบุรี">จันทบุรี</option>
				      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
				      <option value="ชัยนาท">ชัยนาท </option>
				      <option value="ชัยภูมิ">ชัยภูมิ </option>
				      <option value="ชุมพร">ชุมพร </option>
				      <option value="ชลบุรี">ชลบุรี </option>
				      <option value="เชียงใหม่">เชียงใหม่ </option>
				      <option value="เชียงราย">เชียงราย </option>
				      <option value="ตรัง">ตรัง </option>
				      <option value="ตราด">ตราด </option>
				      <option value="ตาก">ตาก </option>
				      <option value="นครนายก">นครนายก </option>
				      <option value="นครปฐม">นครปฐม </option>
				      <option value="นครพนม">นครพนม </option>
				      <option value="นครราชสีมา">นครราชสีมา </option>
				      <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
				      <option value="นครสวรรค์">นครสวรรค์ </option>
				      <option value="นราธิวาส">นราธิวาส </option>
				      <option value="น่าน">น่าน </option>
				      <option value="นนทบุรี">นนทบุรี </option>
				      <option value="บึงกาฬ">บึงกาฬ</option>
				      <option value="บุรีรัมย์">บุรีรัมย์</option>
				      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
				      <option value="ปทุมธานี">ปทุมธานี </option>
				      <option value="ปราจีนบุรี">ปราจีนบุรี </option>
				      <option value="ปัตตานี">ปัตตานี </option>
				      <option value="พะเยา">พะเยา </option>
				      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
				      <option value="พังงา">พังงา </option>
				      <option value="พิจิตร">พิจิตร </option>
				      <option value="พิษณุโลก">พิษณุโลก </option>
				      <option value="เพชรบุรี">เพชรบุรี </option>
				      <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
				      <option value="แพร่">แพร่ </option>
				      <option value="พัทลุง">พัทลุง </option>
				      <option value="ภูเก็ต">ภูเก็ต </option>
				      <option value="มหาสารคาม">มหาสารคาม </option>
				      <option value="มุกดาหาร">มุกดาหาร </option>
				      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
				      <option value="ยโสธร">ยโสธร </option>
				      <option value="ยะลา">ยะลา </option>
				      <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
				      <option value="ระนอง">ระนอง </option>
				      <option value="ระยอง">ระยอง </option>
				      <option value="ราชบุรี">ราชบุรี</option>
				      <option value="ลพบุรี">ลพบุรี </option>
				      <option value="ลำปาง">ลำปาง </option>
				      <option value="ลำพูน">ลำพูน </option>
				      <option value="เลย">เลย </option>
				      <option value="ศรีสะเกษ">ศรีสะเกษ</option>
				      <option value="สกลนคร">สกลนคร</option>
				      <option value="สงขลา">สงขลา </option>
				      <option value="สมุทรสาคร">สมุทรสาคร </option>
				      <option value="สมุทรปราการ">สมุทรปราการ </option>
				      <option value="สมุทรสงคราม">สมุทรสงคราม </option>
				      <option value="สระแก้ว">สระแก้ว </option>
				      <option value="สระบุรี">สระบุรี </option>
				      <option value="สิงห์บุรี">สิงห์บุรี </option>
				      <option value="สุโขทัย">สุโขทัย </option>
				      <option value="สุพรรณบุรี">สุพรรณบุรี </option>
				      <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
				      <option value="สุรินทร์">สุรินทร์ </option>
				      <option value="สตูล">สตูล </option>
				      <option value="หนองคาย">หนองคาย </option>
				      <option value="หนองบัวลำภู">หนองบัวลำภู </option>
				      <option value="อำนาจเจริญ">อำนาจเจริญ </option>
				      <option value="อุดรธานี">อุดรธานี </option>
				      <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
				      <option value="อุทัยธานี">อุทัยธานี </option>
				      <option value="อุบลราชธานี">อุบลราชธานี</option>
				      <option value="อ่างทอง">อ่างทอง </option>
				      <option value="อื่นๆ">อื่นๆ</option>
				</select>
			    </div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">จังหวัดที่ 3</label>
			    <div class="col-sm-6">
			      <select name="golf_province3" class="form-control">
				      <option value="" selected>--------- เลือกจังหวัด ---------</option>
				      <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
				      <option value="กระบี่">กระบี่ </option>
				      <option value="กาญจนบุรี">กาญจนบุรี </option>
				      <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
				      <option value="กำแพงเพชร">กำแพงเพชร </option>
				      <option value="ขอนแก่น">ขอนแก่น</option>
				      <option value="จันทบุรี">จันทบุรี</option>
				      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
				      <option value="ชัยนาท">ชัยนาท </option>
				      <option value="ชัยภูมิ">ชัยภูมิ </option>
				      <option value="ชุมพร">ชุมพร </option>
				      <option value="ชลบุรี">ชลบุรี </option>
				      <option value="เชียงใหม่">เชียงใหม่ </option>
				      <option value="เชียงราย">เชียงราย </option>
				      <option value="ตรัง">ตรัง </option>
				      <option value="ตราด">ตราด </option>
				      <option value="ตาก">ตาก </option>
				      <option value="นครนายก">นครนายก </option>
				      <option value="นครปฐม">นครปฐม </option>
				      <option value="นครพนม">นครพนม </option>
				      <option value="นครราชสีมา">นครราชสีมา </option>
				      <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
				      <option value="นครสวรรค์">นครสวรรค์ </option>
				      <option value="นราธิวาส">นราธิวาส </option>
				      <option value="น่าน">น่าน </option>
				      <option value="นนทบุรี">นนทบุรี </option>
				      <option value="บึงกาฬ">บึงกาฬ</option>
				      <option value="บุรีรัมย์">บุรีรัมย์</option>
				      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
				      <option value="ปทุมธานี">ปทุมธานี </option>
				      <option value="ปราจีนบุรี">ปราจีนบุรี </option>
				      <option value="ปัตตานี">ปัตตานี </option>
				      <option value="พะเยา">พะเยา </option>
				      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
				      <option value="พังงา">พังงา </option>
				      <option value="พิจิตร">พิจิตร </option>
				      <option value="พิษณุโลก">พิษณุโลก </option>
				      <option value="เพชรบุรี">เพชรบุรี </option>
				      <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
				      <option value="แพร่">แพร่ </option>
				      <option value="พัทลุง">พัทลุง </option>
				      <option value="ภูเก็ต">ภูเก็ต </option>
				      <option value="มหาสารคาม">มหาสารคาม </option>
				      <option value="มุกดาหาร">มุกดาหาร </option>
				      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
				      <option value="ยโสธร">ยโสธร </option>
				      <option value="ยะลา">ยะลา </option>
				      <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
				      <option value="ระนอง">ระนอง </option>
				      <option value="ระยอง">ระยอง </option>
				      <option value="ราชบุรี">ราชบุรี</option>
				      <option value="ลพบุรี">ลพบุรี </option>
				      <option value="ลำปาง">ลำปาง </option>
				      <option value="ลำพูน">ลำพูน </option>
				      <option value="เลย">เลย </option>
				      <option value="ศรีสะเกษ">ศรีสะเกษ</option>
				      <option value="สกลนคร">สกลนคร</option>
				      <option value="สงขลา">สงขลา </option>
				      <option value="สมุทรสาคร">สมุทรสาคร </option>
				      <option value="สมุทรปราการ">สมุทรปราการ </option>
				      <option value="สมุทรสงคราม">สมุทรสงคราม </option>
				      <option value="สระแก้ว">สระแก้ว </option>
				      <option value="สระบุรี">สระบุรี </option>
				      <option value="สิงห์บุรี">สิงห์บุรี </option>
				      <option value="สุโขทัย">สุโขทัย </option>
				      <option value="สุพรรณบุรี">สุพรรณบุรี </option>
				      <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
				      <option value="สุรินทร์">สุรินทร์ </option>
				      <option value="สตูล">สตูล </option>
				      <option value="หนองคาย">หนองคาย </option>
				      <option value="หนองบัวลำภู">หนองบัวลำภู </option>
				      <option value="อำนาจเจริญ">อำนาจเจริญ </option>
				      <option value="อุดรธานี">อุดรธานี </option>
				      <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
				      <option value="อุทัยธานี">อุทัยธานี </option>
				      <option value="อุบลราชธานี">อุบลราชธานี</option>
				      <option value="อ่างทอง">อ่างทอง </option>
				      <option value="อื่นๆ">อื่นๆ</option>
				</select>
			    </div>
			</div>
			<div class="form-group">
			    <label class="col-sm-2 control-label">ชื่อ สถานที่</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="golf_name">
			    </div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">ราคา Weekday</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="golf_weekday">
			    </div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">ราคา Weekend</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="golf_weekend">
			    </div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">ราคา Caddy</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="golf_caddy">
			    </div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">ราคา Golf Cart</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="golf_cart">
			    </div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">ราคา Night Golf Weekday</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="golf_night_weekday">
			    </div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">ราคา Night Golf Weekend</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="golf_night_weekend">
			    </div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">ระยะเวลาเริ่มสัญญา</label>
			    <div class="col-sm-6">
			      <input type="date" class="form-control" name="golf_contact_start">
			    </div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">ระยะเวลาหมดสัญญา</label>
			    <div class="col-sm-6">
			      <input type="date" class="form-control" name="golf_contact_end">
			    </div>
			</div>
			<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
			    </div>
			</div>
		</form>
	</div>

<?php
    require '../includes/footermain.php';
?>