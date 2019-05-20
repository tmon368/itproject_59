<div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow mb-4">
					<div class="card-header" id="card_2">
              			<h6 class="m-0 text-primary"><span class="fas fa-user-alt"></span>&nbsp;ประเภทผู้ใช้งาน</h6>
            		</div>
				<div class="card-body" id="card_1">
				<div class="form-group">
						<div class="input-group">
                          		<input type="text" class="form-control" id="form_ct" placeholder="ค้นหาประเภทผู้ใช้">
									<span class="input-group-btn">
												<button class="btn btn-primary btn-group-right" id="btn_shape" type="submit"><i class="fa fa-search"></i></button>
									</span>&nbsp;&nbsp;
						</div>
				</div>
				<button type="button" class="btn btn-inverse-primary btn-fw" data-toggle="modal" data-target="#exampleModalCenter">
									<i class="fas fa-user-plus"></i>เพิ่มกลุ่มผู้ใช้
				</button>
				&nbsp;



				</div>
					<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">เพิ่มประเภทผู้ใช้งาน</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">

		  <!--ส่วนฟอร์มเพิ่มข้อมูล-->
		  <center><div class="form-group">
				<div class="input-group">
					<label for="add_udroup">ประเภทผู้ใช้</label>&nbsp;
                    <input type="text" class="form-control" placeholder="เพิ่มประเภทผู้ใช้" aria-label="Username" aria-describedby="colored-addon1" required="">

				</div>
			</div></center>
		  <!------------------>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="button" class="btn btn-success">เพิ่มข้อมูล</button>
      </div>
    </div>
  </div>
</div>
<!--------------------------------->








				<div class="card-body">
			<div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="style_table" class="table table-hover">
                                            <thead>
                                                <tr>
													<th>
													<div class="checkbox">
													<label class="custom-control custom-checkbox">
                                                		<input type="checkbox" class="custom-control-input" id="checkall"><span class="custom-control-label"></span>
                                            		</label>
													</div>
													</th>
                                                    <th>#</th>
                                                    <th>ประเภทผู้ใช้งาน</th>
                                                    <th>จัดการ</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
													<td width="1%">

													<!--ส่วนของ check box-->
													<div class="checkbox">
													<label class="custom-control custom-checkbox">

                                                		<input type="checkbox" class="custom-control-input check-item"><span class="custom-control-label"></span>

                                            		</label>
													</div>
													</td>
                                                    <td width="10px">1</td>
                                                    <td>เจ้าหน้าที่วินัย</td>
                                                    <td width="10px">
													


                            <span><i class="fa fa-trash-o"></i></span>
                            <span><i class="fa fa-pencil-square-o"></i></span>
								   					</td>

                                                </tr>
                                                <tr>
													<td width="3%">

													<!--ส่วนของ check box-->
													<label class="custom-control custom-checkbox">
                                                		<input type="checkbox" class="custom-control-input check-item"><span class="custom-control-label"></span>
                                            		</label>

													</td>
                                                    <td>2</td>
                                                    <td>หัวหน้าส่วนกิจการนักศึกษา</td>
                                                    <td>
														<span><i class="fas fa-edit" style="color:#47307b;"></i></span>&nbsp;<span>
														<i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)"></i></span>

								  					</td>

                                                </tr>
                                                <tr>
													<td width="3%">

													<!--ส่วนของ check box-->
													<label class="custom-control custom-checkbox">
                                                		<input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
                                            		</label>

													</td>
                                                    <td>3</td>
                                                    <td>หัวหน้างานหอพัก</td>
                                                    <td>
														<span><i class="fas fa-edit" style="color:#47307b;"></i></span>&nbsp;<span>
														<i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)"></i></span>

								  					</td>

                                                </tr>
                                                <tr>
													<td width="3%">

													<!--ส่วนของ check box-->
													<label class="custom-control custom-checkbox">
                                                		<input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
                                            		</label>

													</td>
                                                    <td>4</td>
                                                    <td>นักศึกษา</td>
                                                    <td>
														<span><i class="fas fa-edit" style="color:#47307b;"></i></span>&nbsp;<span>
														<i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)"></i></span>

								  					</td>

                                                </tr>
                                                <tr>
													<td width="3%">

													<!--ส่วนของ check box-->
													<label class="custom-control custom-checkbox">
                                                		<input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
                                            		</label>

													</td>
                                                    <td>5</td>
                                                    <td>อาจารย์ที่ปรึกษา</td>
                                                    <td>
														<span><i class="fas fa-edit" style="color:#47307b;"></i></span>&nbsp;<span>
														<i class="fas fa-trash-alt" style="color:rgba(235,99,102,1.00)"></i></span>
								   					</td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

			</div>




	  		</div>



		  </div>
