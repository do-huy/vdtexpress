<div class="row">
	<div style="background-color: #C1CDC1;height: 500px;" class="col-md-2">	
      <form style="margin-top: 10px;" action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
     <nav class="navbar navbar-inversee">
  <div class="container-fluidd">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul style="width: 100%;" class="nav navbar-nav">
        <li class=""><a href="#" id="vi">Tạo Đơn Hàng</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="vi">Kho Hàng Ex <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="vi" href="#">Tổng hợp đơn hàng</a></li>
            <li><a id="vi" href="#">Page 1-2</a></li>
            <li><a id="vi" href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#" id="vi">Thông Tin Khách Hàng</a></li>
        <li><a href="#" id="vi">Page 3</a></li>
      </ul>
     
    </div>
  </div>
</nav>
	</div>
	<div class="col-md-10">
		<p id="tdh">Tạo đơn hàng</p>
		<div class="col-md-4">
			<p id="login">Người gửi</p>
			<div class="form-group">
				<label id="login">Tên người gửi</label>
				<input type="name" name="name" value="{{ Auth::user()->name }}" class="form-control" disabled="" />
			</div>
			<div class="form-group">
				<label id="login">Số điện thoại</label>
				<input type="text" name="text	" value="{{ Auth::user()->users_number }}" class="form-control" disabled />
			</div>
			<div class="form-group">
                <label id="login" for="title">Chọn tỉnh thành</label>
                <select name="district" id="district" class="form-control" disabled="">
                	  <option value="" selected disabled>{{Auth::user()->province_users_name }}</option>
                </select>
            </div>
            <div class="form-group">
                <label id="login" for="title">Chọn quận huyện</label>
                <select name="district" id="district" class="form-control" disabled="">
                	  <option value="" selected disabled>{{Auth::user()->district_users_name }}</option>
                </select>
            </div>
            <div class="form-group">
                <label id="login" for="title">Chọn phường xã</label>
                <select name="district" id="district" class="form-control" disabled="">
                	  <option value="" selected disabled>{{Auth::user()->ward_users_name }}</option>
                </select>
            </div>
             <div class="form-group">
    		<label id="login" for="exampleFormControlTextarea1">Địa chỉ</label>
    		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled="">{{Auth::user()->user_address }}</textarea>
  			</div>
		</div>
		<div class="col-md-4">
			<p id="login">Dịch vụ</p>
			<div class="radio">
  			<label><input type="radio" name="optradio" checked>Chuyển phát nhanh</label>
			</div>

			<div class="form-group">
				<label id="login">Khối lượng (kg)</label>
				<input type="name" name="name" class="form-control" />
			</div>
			<div class="form-group">
				<label id="login">Tiền COD (vnd)</label>
				<input type="name" name="name" class="form-control" />
			</div>
			<div class="form-group">
				<label id="login">Tiền tạm ứng (vnd)</label>
				<input type="name" name="name" class="form-control" />
			</div>
			<label id="login">Yêu cầu khi phát</label>
			<div class="radio">
  <label><input type="radio" name="optradio" checked>Không xem</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Cho xem</label>
</div>
<div class="radio disabled">
  <label><input type="radio" name="optradio" >Cho thử hàng</label>
</div>

<label id="login">Hình thức trả phí</label>
			<div class="radio">
  <label><input type="radio" name="optradio" checked>Người gửi</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Người nhận</label>
</div>
<div class="form-group">
				<label id="login">Tổng cước thanh toán</label>
				<input type="name" name="name" class="form-control" />
			</div>
			<div class="form-group">			
				<input type="submit" name="register" class="btn btn-primary" value="Tạo đơn hàng" />
			</div>


		</div>
		<div class="col-md-4">
			<p id="login">Người nhận</p>
			<div class="form-group">
				<label id="login">Tên người gửi</label>
				<input type="name" name="name" class="form-control" />
			</div>
			<div class="form-group">
				<label id="login">Số điện thoại</label>
				<input type="text" name="text	" class="form-control" />
			</div>
			<div class="form-group">
                <label id="login" for="title">Chọn tỉnh thành</label>
                <select name="district" id="district" class="form-control">
                	  <option value="" selected disabled>Chọn tỉnh thành</option>
                </select>
            </div>
            <div class="form-group">
                <label id="login" for="title">Chọn quận huyện</label>
                <select name="district" id="district" class="form-control">
                	  <option value="" selected disabled>Chọn quận huyện</option>
                </select>
            </div>
            <div class="form-group">
                <label id="login" for="title">Chọn phường xã</label>
                <select name="district" id="district" class="form-control">
                	  <option value="" selected disabled>Chọn phường xã</option>
                </select>
            </div>
             <div class="form-group">
    		<label id="login" for="exampleFormControlTextarea1">Địa chỉ</label>
    		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  			</div>

  			  <div class="form-group">
    		<label id="login" for="exampleFormControlTextarea1">Ghi chú</label>
    		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  			</div>

  				
		</div>
	</div>
</div>