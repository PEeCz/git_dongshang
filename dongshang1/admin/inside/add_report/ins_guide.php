<?php
	

	
	$user_id = $_GET['id'];
?>
	
		<div class="modal-dialog1" role="document">
		    <div class="modal-content">
		      	<div class="modal-header bg-primary">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        	<h4 class="modal-title text-center">ข้อมูลไกด์</h4>
		      	</div>
		      	<form method="post" class="form-horizontal" name="frmAddGuide" action="add_report/ins_guidechk.php?id=<?php echo $user_id; ?>">
			      	<div class="modal-body" style="background: linear-gradient(to bottom, #66ffff 0%, #3399ff 100%);">
				      	<div class="form-group">
						    <label for="re_group_code" class="col-sm-2 control-label">กรุ๊ปโค้ด</label>
						    <div class="col-sm-2">
						      	<input type="text" class="form-control" id="re_group_code" name="re_group_code" placeholder="กรุ๊ปโค้ด" required="โปรดใส่ข้อมูล">
						    </div>
						    <div class="col-sm-2">
						      	<input type="text" class="form-control" id="re_group_agent" name="re_group_agent" placeholder="เอเย่นต์โค้ด">
						    </div>
						    <label for="re_group_personqty" class="col-sm-2 col-sm-pull-1 control-label">จำนวนคน</label>
						    <div class="col-sm-2 col-sm-pull-1">
						      	<select class="form-control-static" id="re_group_personqty" name="re_group_personqty">
						      		<?php 
						      			for($i=1; $i<=50; $i++){
						      		?>
									<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									<?php } ?>
						      	</select>
						      	<label class="control-label"> คน</label>
						    </div>
						</div>

						<div class="form-group">
						    <label for="re_group_leadertour" class="col-sm-2 control-label">ชื่อหัวหน้าทัวร์</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="re_group_leadertour" name="re_group_leadertour" placeholder="ชื่อหัวหน้าทัวร์">
						    </div>
						    <div class="col-sm-3">
						      	<div class="radio">
								  <label>
								    <input type="checkbox" name="final[]" id="final[]" value="10">
								    Final <i class="fa fa-square square_final"></i>
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="checkbox" name="final[]" id="final[]" value="20">
								    No Final <i class="fa fa-square square_nofinal"></i>
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="checkbox" name="final[]" id="final[]" value="30">
								    มีการแก้ไข <i class="fa fa-square square_edit"></i>
								  </label>
								</div>
						    </div>
						    <div class="col-sm-3">
								<div class="radio">
								  <label>
								    <input type="checkbox" name="normal_noshop[]" id="normal_noshop[]" value="10">
								    Normal
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="checkbox" name="normal_noshop[]" id="normal_noshop[]" value="20">
								    No Shop
								  </label>
								</div>
						    </div>
						</div>

						<div class="form-group">
						    <label for="re_group_nameagent" class="col-sm-2 control-label">ชื่อเอเย่นต์</label>
						    <div class="col-sm-2">
						      	<input type="text" class="form-control" id="re_group_nameagent" name="re_group_nameagent" placeholder="ชื่อเอเย่นต์">
						    </div>
						    <label for="re_group_in" class="col-sm-2 col-sm-pull-1 control-label">รับ</label>
						    <div class="col-sm-2 col-sm-pull-1">
						      	<input type="text" id="date1" class="form-control" id="re_group_in_date" name="re_group_in_date" placeholder="วันที่" required>
						      	<input type="text" id="time1" class="form-control" id="re_group_in_time" name="re_group_in_time" placeholder="เวลา">
						    </div>
						    <label for="re_group_flight_in" class="col-sm-2 col-sm-pull-1 control-label">Flight-In</label>
						    <div class="col-sm-2 col-sm-pull-1">
						      	<input type="text" class="form-control" id="re_group_flight_in" name="re_group_flight_in" placeholder="Flight รับ">
						    </div>
						</div>

						<div class="form-group">
						    <label for="re_group_program" class="col-sm-2 control-label">ชื่อรายการ</label>
						    <div class="col-sm-2">
						      	<input type="text" class="form-control" id="re_group_program" name="re_group_program" placeholder="ชื่อรายการ">
						    </div>
						    <label for="re_group_out" class="col-sm-2 col-sm-pull-1 control-label">ส่ง</label>
						    <div class="col-sm-2 col-sm-pull-1">
						    	<input type="text" id="date2" class="form-control" id="re_group_out_date" name="re_group_out_date" placeholder="วันที่" required>
						      	<input type="text" id="time2" class="form-control" id="re_group_out_time" name="re_group_out_time" placeholder="เวลา">
						    </div>
						    <label for="re_group_flight_out" class="col-sm-2 col-sm-pull-1 control-label">Flight-Out</label>
						    <div class="col-sm-2 col-sm-pull-1">
						      	<input type="text" class="form-control" id="re_group_flight_out" name="re_group_flight_out" placeholder="Flight ส่ง">
						    </div>
						</div>
						<div class="form-group">
						    <label for="re_group_description" class="col-sm-2 control-label">รายละเอียด</label>
						    <div class="col-sm-10">
						      	<textarea class="form-control" rows="5" id="re_group_description" name="re_group_description" placeholder="รายละเอียดต่างๆ"></textarea>
						    </div>
						</div>
						<HR style="border-width: 5px;">
						<div class="form-group">
						    <label for="re_group_nameguide_th" class="col-sm-2 control-label">ชื่อไกด์ (ไทย)</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="re_group_nameguide_th" name="re_group_nameguide_th" placeholder="ชื่อไกด์ (ไทย)">
						    </div>
						    <label for="re_group_nameguide_cn" class="col-sm-2 control-label">ชื่อไกด์ (จีน)</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="re_group_nameguide_cn" name="re_group_nameguide_cn" placeholder="ชื่อไกด์ (จีน)">
						    </div>
						</div>
						<div class="form-group">
						    <div class="col-sm-3 col-sm-offset-2">
						      	<div class="radio">
								  <label for="plan">
								    <input type="checkbox" name="p_t_c_f_con[]" id="p_t_c_f_con[]" value="10">
								    Plan <i class="fa fa-square square_plan"></i>
								  </label>
								</div>
								<div class="radio">
								  <label for="call">
								    <input type="checkbox" name="p_t_c_f_con[]" id="p_t_c_f_con[]" value="30">
								    Call <i class="fa fa-square square_call"></i>
								  </label>
								</div>
								<div class="radio">
								  <label for="confirm">
								    <input type="checkbox" name="p_t_c_f_con[]" id="p_t_c_f_con[]" value="50">
								    Confirm <i class="fa fa-square square_confirm"></i>
								  </label>
								</div>
						    </div>
						    <div class="col-sm-3">
								<div class="radio">
								  <label>
								    <input type="checkbox" name="p_t_c_f_con[]" id="p_t_c_f_con[]" value="40">
								    Fit <i class="fa fa-square square_fit"></i>
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="checkbox" name="p_t_c_f_con[]" id="p_t_c_f_con[]" value="20">
								    Transfer <i class="fa fa-square square_transfer"></i>
								  </label>
								</div>
						    </div>
						</div>
						<div class="form-group">
						    <label for="re_group_kb" class="col-sm-2 control-label">KB ไม่ปกติ</label>
						    <div class="col-sm-10">
						      	<textarea class="form-control" rows="5" id="re_group_kb" name="re_group_kb" placeholder="ข้อมูลที่มีการเพิ่มเข้ามา"></textarea>
						    </div>
						</div>
						<div class="form-group">
						    <label for="re_group_hotel1" class="col-sm-2 control-label">โรงแรมที่ 1</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="re_group_hotel1" name="re_group_hotel1" placeholder="Ex. Avana Hotel">
						    </div>
						    <label for="re_group_hotel2" class="col-sm-2 control-label">โรงแรมที่ 2</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="re_group_hotel2" name="re_group_hotel2" placeholder="Ex. Avana Hotel">
						    </div>
						</div>
						<div class="form-group">
						    <label for="re_group_hotel3" class="col-sm-2 control-label">โรงแรมที่ 3</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="re_group_hotel3" name="re_group_hotel3" placeholder="Ex. Avana Hotel">
						    </div>
						    <label for="re_group_hotel4" class="col-sm-2 control-label">โรงแรมที่ 4</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="re_group_hotel4" name="re_group_hotel4" placeholder="Ex. Avana Hotel">
						    </div>
						</div>
					</div>
			      	<div class="modal-footer">
			        	<input type="submit" name="save" class=" btn btn-success" value="บันทึก">
			        	<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
			      	</div>
		      	</form>
		    </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->

		<script type="text/javascript">
		$(document).ready(function()
		{
			$('#date1').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});

			$('#date2').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});

			$('#time1').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});

			$('#time2').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});

			$('#date-format').bootstrapMaterialDatePicker
			({
				format: 'dddd DD MMMM YYYY - HH:mm'
			});
			$('#date-fr').bootstrapMaterialDatePicker
			({
				format: 'DD/MM/YYYY HH:mm',
				lang: 'fr',
				weekStart: 1, 
				cancelText : 'ANNULER',
				nowButton : true,
				switchOnClick : true
			});

			$('#date-end').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm'
			});
			$('#date-start').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
			}).on('change', function(e, date)
			{
				$('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
			});

			$('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });

			$.material.init()
		});
		</script>
	