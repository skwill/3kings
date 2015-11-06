    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/ispent.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

    <script type="text/javascript">
        $(function(){
            setTimeout( function() { 
              $('#login-form input:-webkit-autofill').filter('input[type="email"]:last, input[type="password"]:first') 
                           .addClass('no-webkit-autofill').val(''); 
         }, 100 ); 
        })

        $(function(){
            setTimeout( function() { 
              $('#signup-form input:-webkit-autofill').filter('input[type="email"]:last, input[type="password"]:first') 
                           .addClass('no-webkit-autofill').val(''); 
         }, 100 ); 
        })
    </script>
    
  </body>
</html>