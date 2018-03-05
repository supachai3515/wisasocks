<!-- footer-area-start -->
    <footer>
        <section class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="footer">

                      <div class="col-sm-3 col-lg-3 col-md-3">
                           <div class="store-information-area">
                              <div class="footer-title">
                                  <h2>wisasocks</h2>
                              </div>
                              <div class="store-content">
                                  <ul>
                                     <li>ถุงเท้าเแฟชั่น ลายโบฮีเมียน (Bohemian) By. wisasocks (วิสาซ็อคซ) ตอบโจทย์คนชอบการแต่งตัวสไตล์ คลาสสิก วิลเทจโอลสคูลเป็นอย่างดี</li>
                                  </ul>
                              </div>
                          </div>
                      </div>

                        <div class="col-sm-3 col-lg-3 col-md-3">
                            <div class="static-book">
                                <div class="footer-title">
                                    <h2>wisasocks</h2>
                                </div>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="<?php echo base_url('products')?>">สินค้า</a></li>
                                        <li><a href="<?php echo base_url('cart')?>">ตะกร้าสินค้า</a></li>
                                        <li><a href="<?php echo base_url('payment')?>">วีธีแจ้งชำระเงิน</a></li>
                                         <li><a href="<?php echo base_url('howtobuy')?>">วิธีการสั่งซื้อ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-3 col-lg-3 col-md-3">
                            <div class="store-information-area">
                              <div class="footer-title">
                                  <h2>ติดต่อเรา</h2>
                              </div>
                              <div class="store-content">
                                  <ul>
                                      <li><i class="fa fa-map-marker"></i> wisasocks
                                      ที่อยู่ 79/55 หมู่ 1 ตำบลศาลากลาง อำเภอบางกรวย จังหวัดนนทบุรี 11130</li>
                                      <li><i class="fa fa-phone"></i> Mobile: 091-7750586</li>
                                      <li><i class="fab fa-line"></i> LINE : @wisasocks</li>
                                  </ul>
                              </div>
                            </div>
                        </div>

                        <div class="col-sm-3 col-lg-3 col-md-3">
                            <div class="store-information-area">
                              <div class="footer-title">
                                  <h2>Facebook</h2>
                              </div>
                              <div class="store-content">

                                <div id="fb-root"></div>
                                  <script>(function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.6&appId=615663091936505";
                                    fjs.parentNode.insertBefore(js, fjs);
                                  }(document, 'script', 'facebook-jssdk'));</script>
                                      <div class="add-banner-carsuol">
                                          <div class="fb-page" data-href="https://www.facebook.com/wisasocks/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                              <blockquote cite="https://www.facebook.com/wisasocks/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/wisasocks/">wisasocks</a></blockquote>
                                          </div>
                                      </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="copyright">
                            <p>Copyright &copy; 2016 <a href="<?php echo $this->config->item('weburl') ?>"><?php echo $this->config->item('sitename') ?></a>. All rights reserved. Design By <a href="http://www.wisadev.com" target="_blank">wisadev.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
    <!-- JS -->
    <!-- jquery-1.11.3.min js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/bootstrap.min.js"></script>
    <!-- owl.carousel.min js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/owl.carousel.min.js"></script>
    <!-- jquery.meanmenu js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/jquery.meanmenu.js"></script>
    <!-- jquery-ui.min js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/jquery-ui.min.js"></script>
    <!-- fancybox js -->
     <!-- Add fancyBox Js -->
        <script type="text/javascript" src="<?php echo base_url('theme');?>/fancyBox/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>
        <script type="text/javascript" src="<?php echo base_url('theme');?>/fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script type="text/javascript" src="<?php echo base_url('theme');?>/fancyBox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="<?php echo base_url('theme');?>/fancyBox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
        <script type="text/javascript" src="<?php echo base_url('theme');?>/fancyBox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

        <!-- image zoom js
        ============================================ -->
        <script src="<?php echo base_url('theme');?>/zoom-image/Drift.min.js"></script>
     <script type="text/javascript">
    $(document).ready(function() {
        $(".thumbnail-img").click(function() {
            $("#main-image").attr({
                "src": $(this).attr("src"),
                "data-zoom": $(this).attr("src")
            });
            $("#fancybox-link").attr("href",$(this).attr("src"));
        });
        $(".fancybox-thumb").fancybox({
            prevEffect  : "none",
            nextEffect  : "none",
            helpers : {
                title   : {
                    type: "outside"
                },
                thumbs  : {
                    width   : 50,
                    height  : 50
                }
            }
        });
        var demoTrigger = document.querySelector('#main-image');
        var paneContainer = document.querySelector('.zoom-area');
        if(demoTrigger && (demoTrigger != null)) {
            new Drift(demoTrigger, {
              paneContainer: paneContainer,
              inlinePane: false,
              handleTouch: false
            });
        }
    });
    </script>
    <style>
        .drift-open{
            border: 1px solid #555;
            left: -15px;
            border-radius: 4px;
        }
    </style>
    <!-- jquery.scrollUp.min js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/jquery.scrollUp.min.js"></script>
    <!-- wow js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/wow.js"></script>
    <script>
    new WOW().init();
    </script>
    <!-- Nivo slider js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="<?php echo base_url('theme');?>/custom-slider/home.js" type="text/javascript"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyC5AOdM__wv8_dChk55jzPZAspp_ViJWik"></script>
    <!-- plugins js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/plugins.js"></script>
    <!-- main js
        ============================================ -->
    <script src="<?php echo base_url('theme');?>/js/main.js"></script>

    <script src="<?php echo base_url('theme');?>/datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url('theme');?>/datepicker/locales/bootstrap-datepicker.th.min.js"></script>
    <script src="<?php echo base_url('theme');?>/datepicker/js/bootstrap-timepicker.js"></script>
    <script type='text/javascript' src='<?php echo base_url('theme');?>/js/angular.min.js'></script>

    <?php echo $this->load->view("template/app");?>
    <?php if(isset($script)){echo $script;}?>
    <?php if(isset($script_file)){echo $this->load->view($script_file); }?>

</body>

</html>
