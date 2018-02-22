<div class="row">
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form">
            <!--login form-->
            <form class="form-area" action="<?php echo base_url('dealer/login');?>" method="post">
                <legend>เข้าสู่ระบบ</legend>
                <?php
				    if($this->session->flashdata('msg') != ''){
				        echo '
				        <div class="alert alert-danger alert-dismissible" role="alert">
				          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				          '.$this->session->flashdata('msg').'
				        </div>';
				    }
				    if($this->session->flashdata('success') != ''){
				        echo '
				         <div class="alert alert-success alert-dismissible" role="alert">
				          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				          '.$this->session->flashdata('success').'
				        </div>';
				    }
				?>
                <div class="form-group">
                    <input type="email" class="form-control" id="Username" name="username" placeholder="Email" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="Password" name="password" placeholder="Password" required="required">
                </div>
                <div class="form-content">
                  <button type="submit" name="Submit">
                    <span>
                      <i class="fa fa-lock" aria-hidden="true"></i> Login
                    </span>
                  </button>
                </div>
            </form>
        </div>
        <!--/login form-->
    </div>
    <div class="col-sm-1 text-center">
        <span class="fa-stack fa-2x">
		  <i class="fa fa-circle fa-stack-2x"></i>
		  <i class="fa fa-chevron-circle-right fa-stack-1x fa-inverse"></i>
		</span>
    </div>
    <div class="col-sm-4">
        <div class="signup-form  form-area"><!--sign up form-->
            <form  ng-submit="saveDealer()">

				<legend>สมัครสมาชิก</legend>
        <div class="form-group">
				    <input ng-model="dealer.name" class="form-control"  id="name" name="name" placeholder="ชื่อ"  required="required" type="text">
				 </div>
				 <div class="form-group">

				    <input ng-model="dealer.lastname" class="form-control"  id="lastname" name="lastname" placeholder="นามสกุล"  required="required" type="text">
				 </div>

				 <div class="form-group">

				    <input ng-model="dealer.shop" class="form-control"  id="shop" name="shop" placeholder="ชื่อร้าน"  type="text" hidden>

				 </div>

				 <div class="form-group">

				    <input ng-model="dealer.email" class="form-control"  id="email" name="email" placeholder="Email"  required="required" type="email">
				 </div>

				 <div class="form-group">
				    <input ng-model="dealer.password" class="form-control"  id="password" name="password" placeholder="Password"  required="required" type="password">
				 </div>
				 <div class="form-group">
				    <input ng-model="dealer.confirm_password" class="form-control"  id="confirm_password" name="password" placeholder="Confirm Password"  required="required" type="password">
				 </div>

				 <div class="form-group">

				    <input ng-model="dealer.phone" class="form-control"  id="phone" name="phone" placeholder="โทรศัพท์บ้านหรือ Fax" type="text" hidden>
				 </div>

				 <div class="form-group">

				    <input ng-model="dealer.mobile" class="form-control"  id="mobile" name="mobile" placeholder="เบอร์มือถึอ"  required="required" type="text">
				 </div>


				 <div class="form-group">

				    <textarea ng-model="dealer.address" class="form-control" id="address" name="address" placeholder="ที่อยู่สำหรับส่งสินค้า"  required="required"> </textarea>
				 </div>

				 <div class="form-group">
				    <input ng-model="dealer.nid" class="form-control" id="nid" name="nid" placeholder="เลขประจำตัวผู้เสียภาษี" type="text" hidden>
				 </div>
                  <div class="form-content">
                  <button type="submit" name="Submit">
                    <span>
                      <i class="fa fa-user" aria-hidden="true"></i> ยืนยันการสมัคร
                    </span>
                  </button>
                </div>
            </form> <!--/sign up form-->
        </div>
        <div class="clearfix">
        </div>
        <div class="form-group" ng-if="isProscess==true">
            <hr>
            <div class="progress progress-striped active">
            	<div class="progress-bar progress-bar-success" style="width:70%"></div>
       		</div>
        </div>
        <span ng-if="!message_error"><h4 class="text-success" ng-bind="message_prosecss"></h4></span>
        <span ng-if="message_error"><h4 class="text-danger" ng-bind="message_prosecss"></h4></span>
	</div>
</div>
