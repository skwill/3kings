<?php

/* _footer.twig */
class __TwigTemplate_bf409a792e2880179cda5628dbf04b9f9c64610ebc69848c9db2b845f54a4bec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "</section>
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"logo\"><a href=\"/3k/\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "img/small2.png\" class=\"img-responsive\" alt=\"\"></a></div>
            </div>
            <div class=\"col-md-4 center-align\">
                <h3 class=\"lato-font white\">3 Kings Enterprises</h3>
                <h6 class=\"lato-font white\"><a href=\"\">Privacy</a> | <a href=\"\">Terms</a></h6>
            </div>
            <div class=\"col-md-4 center-align\">                
                 <!-- <a href=\"https://twitter.com/peterfinlan\" class=\"twitter-share\"><p>Check us out</p></a>  -->
                 <!-- <h3 class=\"center-align lato-font white\">Check us out</h3> -->
                 <a href=\"#\" class=\"facebook-share\"><i class=\"fa fa-facebook-official fa-1x\"><h4 class=\"center-align lato-font white\">Check Us Out</h4></i></a>                
            </div>
        </div>        
    </div>
</footer>
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/vendor/jquery-1.11.2.min.js\"><\\/script>')</script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "bower_components/retina.js/dist/retina.js\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/jquery.fancybox.pack.js\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/vendor/bootstrap.min.js\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/scripts.js\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/jquery.flexslider-min.js\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "bower_components/classie/classie.js\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "bower_components/jquery-waypoints/lib/jquery.waypoints.min.js\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/slippry.js\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/wow.js\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "js/3kings.js\"></script>
    
    <script>
      new WOW().init();
      </script>
    <script>

        \$(function() {
            var demo1 = \$(\"#demo1\").slippry({
                // transition: 'fade',
                // useCSS: true,
                 speed: 1400,
                 pause: 5000,
                auto: true,
                preload: 'visible',
                 autoHover: false
            });

            \$('.stop').click(function () {
                demo1.stopAuto();
            });

            \$('.start').click(function () {
                demo1.startAuto();
            });

            \$('.prev').click(function () {
                demo1.goToPrevSlide();
                return false;
            });
            \$('.next').click(function () {
                demo1.goToNextSlide();
                return false;
            });
            \$('.reset').click(function () {
                demo1.destroySlider();
                return false;
            });
            \$('.reload').click(function () {
                demo1.reloadSlider();
                return false;
            });
            \$('.init').click(function () {
                demo1 = \$(\"#demo1\").slippry();
                return false;
            });
        });
    </script>

    <script>
        \$(function() {
            var demo1 = \$(\"#demo2\").slippry({
                 transition: 'horizontal',
                // useCSS: true,
                 speed: 1000,
                 pause: 5000,
                //auto: true,
                //preload: 'visible',
                 //autoHover: false
            });

            \$('.stop').click(function () {
                demo1.stopAuto();
            });

            \$('.start').click(function () {
                demo1.startAuto();
            });

            \$('.prev').click(function () {
                demo1.goToPrevSlide();
                return false;
            });
            \$('.next').click(function () {
                demo1.goToNextSlide();
                return false;
            });
            \$('.reset').click(function () {
                demo1.destroySlider();
                return false;
            });
            \$('.reload').click(function () {
                demo1.reloadSlider();
                return false;
            });
            \$('.init').click(function () {
                demo1 = \$(\"#demo1\").slippry();
                return false;
            });
        });
    </script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  80 => 30,  76 => 29,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  56 => 24,  52 => 23,  48 => 22,  44 => 21,  26 => 6,  19 => 1,);
    }
}
/* </section>*/
/* <footer>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-4">*/
/*                 <div class="logo"><a href="/3k/"><img src="{{ paths.theme }}img/small2.png" class="img-responsive" alt=""></a></div>*/
/*             </div>*/
/*             <div class="col-md-4 center-align">*/
/*                 <h3 class="lato-font white">3 Kings Enterprises</h3>*/
/*                 <h6 class="lato-font white"><a href="">Privacy</a> | <a href="">Terms</a></h6>*/
/*             </div>*/
/*             <div class="col-md-4 center-align">                */
/*                  <!-- <a href="https://twitter.com/peterfinlan" class="twitter-share"><p>Check us out</p></a>  -->*/
/*                  <!-- <h3 class="center-align lato-font white">Check us out</h3> -->*/
/*                  <a href="#" class="facebook-share"><i class="fa fa-facebook-official fa-1x"><h4 class="center-align lato-font white">Check Us Out</h4></i></a>                */
/*             </div>*/
/*         </div>        */
/*     </div>*/
/* </footer>*/
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>*/
/*     <script>window.jQuery || document.write('<script src="{{ paths.theme }}js/vendor/jquery-1.11.2.min.js"><\/script>')</script>*/
/*     <script src="{{ paths.theme }}bower_components/retina.js/dist/retina.js"></script>*/
/*     <script src="{{ paths.theme }}js/jquery.fancybox.pack.js"></script>*/
/*     <script src="{{ paths.theme }}js/vendor/bootstrap.min.js"></script>*/
/*     <script src="{{ paths.theme }}js/scripts.js"></script>*/
/*     <script src="{{ paths.theme }}js/jquery.flexslider-min.js"></script>*/
/*     <script src="{{ paths.theme }}bower_components/classie/classie.js"></script>*/
/*     <script src="{{ paths.theme }}bower_components/jquery-waypoints/lib/jquery.waypoints.min.js"></script>*/
/*     <script src="{{ paths.theme }}js/slippry.js"></script>*/
/*     <script src="{{ paths.theme }}js/wow.js"></script>*/
/*     <script src="{{ paths.theme }}js/3kings.js"></script>*/
/*     */
/*     <script>*/
/*       new WOW().init();*/
/*       </script>*/
/*     <script>*/
/* */
/*         $(function() {*/
/*             var demo1 = $("#demo1").slippry({*/
/*                 // transition: 'fade',*/
/*                 // useCSS: true,*/
/*                  speed: 1400,*/
/*                  pause: 5000,*/
/*                 auto: true,*/
/*                 preload: 'visible',*/
/*                  autoHover: false*/
/*             });*/
/* */
/*             $('.stop').click(function () {*/
/*                 demo1.stopAuto();*/
/*             });*/
/* */
/*             $('.start').click(function () {*/
/*                 demo1.startAuto();*/
/*             });*/
/* */
/*             $('.prev').click(function () {*/
/*                 demo1.goToPrevSlide();*/
/*                 return false;*/
/*             });*/
/*             $('.next').click(function () {*/
/*                 demo1.goToNextSlide();*/
/*                 return false;*/
/*             });*/
/*             $('.reset').click(function () {*/
/*                 demo1.destroySlider();*/
/*                 return false;*/
/*             });*/
/*             $('.reload').click(function () {*/
/*                 demo1.reloadSlider();*/
/*                 return false;*/
/*             });*/
/*             $('.init').click(function () {*/
/*                 demo1 = $("#demo1").slippry();*/
/*                 return false;*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/*     <script>*/
/*         $(function() {*/
/*             var demo1 = $("#demo2").slippry({*/
/*                  transition: 'horizontal',*/
/*                 // useCSS: true,*/
/*                  speed: 1000,*/
/*                  pause: 5000,*/
/*                 //auto: true,*/
/*                 //preload: 'visible',*/
/*                  //autoHover: false*/
/*             });*/
/* */
/*             $('.stop').click(function () {*/
/*                 demo1.stopAuto();*/
/*             });*/
/* */
/*             $('.start').click(function () {*/
/*                 demo1.startAuto();*/
/*             });*/
/* */
/*             $('.prev').click(function () {*/
/*                 demo1.goToPrevSlide();*/
/*                 return false;*/
/*             });*/
/*             $('.next').click(function () {*/
/*                 demo1.goToNextSlide();*/
/*                 return false;*/
/*             });*/
/*             $('.reset').click(function () {*/
/*                 demo1.destroySlider();*/
/*                 return false;*/
/*             });*/
/*             $('.reload').click(function () {*/
/*                 demo1.reloadSlider();*/
/*                 return false;*/
/*             });*/
/*             $('.init').click(function () {*/
/*                 demo1 = $("#demo1").slippry();*/
/*                 return false;*/
/*             });*/
/*         });*/
/*     </script>*/
/* </body>*/
/* </html>*/
