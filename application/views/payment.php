<section class="contuct-us-form-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- breadcrumbs start-->
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="<?php echo base_url(); ?>">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>แจ้งชำระเงิน</li>
                    </ul>
                </div>
                <!-- breadcrumbs end-->
            </div>
        </div>
        <div class="" style="padding-top:30px;">
            <div class="row">
                <div class="col-sm-6">
                <?php if (isset($is_error)): ?>
                     <?php if ($is_error): ?>
                        <p class="texe-danger">
                             <?php echo $message;?>
                        </p>

                    <?php else: ?>
                        <p class="text-success">
                            <?php echo $message;?>
                        </p>

                    <?php endif ?>
                <?php endif ?>
                <?php echo form_open_multipart('payment/save');?>
                <fieldset>
                        <!-- Text input-->
                        <div class="form-group">
                            <label for="textinput">ชื่อ</label>
                            <input id="textinput" name="txtName" type="text" placeholder="ชื่อ" class="form-control input-md" required="required">
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label for="textinput">เบอร์ติดต่อ</label>
                            <input id="textinput" name="txtTel" type="text" placeholder="เบอร์ติดต่อ" class="form-control input-md" required="required">
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label for="textinput">เลขที่ใบสั่งซื้อ</label>
                            <input id="textinput"  name="txtOrder" type="text" placeholder="เลขที่ใบสั่งซื้อ" class="form-control input-md" required="required">
                        </div>
                        <div class="form-group">
                            <label for="textinput">เลือกธนาคาร</label>
                            <select  name="txtBank" id="inputBank" class="form-control" required="required">
                                <option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ</option>
                                <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
                                <option value="ธนาคารกรุงไทย">พร้อมเพย์</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="textinput">จำนวนเงิน</label>
                            <input id="textinput"  name="txtAmount" type="text" placeholder="จำนวนเงิน" class="form-control input-md" required="required">
                        </div>
                        <div class="form-group">
                            <label for="textinput">วันที่โอน ตัวอย่าง 01/04/2016</label>
                            <input id="textinput"  name="txtDate" type="text" placeholder="วันที่โอน" class="form-control input-md" required="required">
                        </div>
                        <div class="form-group">
                            <label for="textinput">เวลาโอน ตัวอย่าง 12:00</label>
                            <input id="textinput" name="txtTime" type="text" placeholder="เวลาโอน" class="form-control input-md" required="required">
                        </div>

                        <div class="form-group">
                            <label for="textinput">แนบไฟล์</label>
                            <input id="userfile" name="userfile" type="file" class="form-control input-md" required="required">
                        </div>

                        <div class="form-group">
                            <label for="filebutton"></label>
                            <button type="submit" value="upload"  class="btn btn-success ">แจ้งชำระ</button>
                        </div>


                </fieldset>

                </form>

                </div>
                <div class="col-sm-6">
                  <p></p>
                  <?php echo $this->config->item('payment_transfer') ?>
                  <p></p>

                    <div class="" style="padding-top:30px;">
                        <p><strong>แนบสลิปผ่านทางเว็บไซต์</strong></p>
                    </div>
                    <div class="">
                        <p><strong>แจ้งชำระเงินผ่านทาง line : </strong>
                            <span class="fa fa-comment"></span> LINE ID : <?php echo $this->config->item('line_id') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div style="padding-top: 50px;"></div>
