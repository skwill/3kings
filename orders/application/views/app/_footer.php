</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo"><a href="/3k/"><img src="<?php echo base_url();?>assets/3k/img/small2.png" class="img-responsive" alt=""></a></div>
            </div>
            <div class="col-md-4 center-align">
                <h3 class="lato-font white">3 Kings Enterprises</h3>
                <h6 class="lato-font white"><a href="">Privacy</a> | <a href="">Terms</a></h6>
            </div>
            <div class="col-md-4 center-align">                
                 <!-- <a href="https://twitter.com/peterfinlan" class="twitter-share"><p>Check us out</p></a>  -->
                 <!-- <h3 class="center-align lato-font white">Check us out</h3> -->
                 <a href="#" class="facebook-share"><i class="fa fa-facebook-official fa-1x"><h4 class="center-align lato-font white">Check Us Out</h4></i></a>                
            </div>
        </div>        
    </div>
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/3k/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?php echo base_url();?>assets/3k/bower_components/retina.js/dist/retina.js"></script>
    <script src="<?php echo base_url();?>assets/3k/js/jquery.fancybox.pack.js"></script>
    <script src="<?php echo base_url();?>assets/3k/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/3k/js/scripts.js"></script>
    <script src="<?php echo base_url();?>assets/3k/js/jquery.flexslider-min.js"></script>
    <script src="<?php echo base_url();?>assets/3k/bower_components/classie/classie.js"></script>
    <script src="<?php echo base_url();?>assets/3k/bower_components/jquery-waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/3k/js/slippry.js"></script>
    <script src="<?php echo base_url();?>assets/3k/js/wow.js"></script>
    <script src="<?php echo base_url();?>assets/3k/js/3kings.js"></script>
    <script src="<?php echo base_url();?>assets/3k/js/management.js"></script>
    
    <script>
      new WOW().init();
      </script>
    <script>

        $(function() {
            var demo1 = $("#demo1").slippry({
                // transition: 'fade',
                // useCSS: true,
                 speed: 1400,
                 pause: 5000,
                auto: true,
                preload: 'visible',
                 autoHover: false
            });

            $('.stop').click(function () {
                demo1.stopAuto();
            });

            $('.start').click(function () {
                demo1.startAuto();
            });

            $('.prev').click(function () {
                demo1.goToPrevSlide();
                return false;
            });
            $('.next').click(function () {
                demo1.goToNextSlide();
                return false;
            });
            $('.reset').click(function () {
                demo1.destroySlider();
                return false;
            });
            $('.reload').click(function () {
                demo1.reloadSlider();
                return false;
            });
            $('.init').click(function () {
                demo1 = $("#demo1").slippry();
                return false;
            });
        });
    </script>

    <script>
        $(function() {
            var demo1 = $("#demo2").slippry({
                 transition: 'horizontal',
                // useCSS: true,
                 speed: 1000,
                 pause: 5000,
                //auto: true,
                //preload: 'visible',
                 //autoHover: false
            });

            $('.stop').click(function () {
                demo1.stopAuto();
            });

            $('.start').click(function () {
                demo1.startAuto();
            });

            $('.prev').click(function () {
                demo1.goToPrevSlide();
                return false;
            });
            $('.next').click(function () {
                demo1.goToNextSlide();
                return false;
            });
            $('.reset').click(function () {
                demo1.destroySlider();
                return false;
            });
            $('.reload').click(function () {
                demo1.reloadSlider();
                return false;
            });
            $('.init').click(function () {
                demo1 = $("#demo1").slippry();
                return false;
            });
        });
    </script>
</body>
</html>