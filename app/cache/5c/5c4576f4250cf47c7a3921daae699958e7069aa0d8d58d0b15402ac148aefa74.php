<?php

/* index.twig */
class __TwigTemplate_c3c875313b45e5e6407ed7ddbefea5f6490ed9dd6b0a6eea9b6ac967fbb4d928 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "index.twig", 1)->display($context);
        // line 2
        echo "<section>
    <ul id=\"demo1\" class=\"header-section\">
        <li><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "img/samsung1.jpg\"  alt='<h4 class=\"center-align\">Bringing the best and latest phones at an affordable price.</h4><div class=\"center-align\"><a href=\"\" class=\"btn-large btn-fill2\">Visit Our Store</a><div>'</li>

        <li><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "img/nokia1.jpg\" alt='<h4 class=\"center-align\">It&apos;s all about connecting you with everyone you know.</h4><div class=\"center-align\"><a href=\"\" class=\"btn-large btn-fill2\">Find out more</a><div>'></li>   

        <li><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "img/iphone12.jpg\" alt='<h4 class=\"center-align\">We can supply all your mobile needs.</h4><div class=\"center-align\"><a href=\"\" class=\"btn-large btn-fill2\">Contact us now</a><div>'></li>
    </ul>
</section>
<section>              
    <div class=\"row\">
        <div class=\"container\">
            <div class=\"col-lg-12 med-img\">
                 <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "img/logo-med.jpg\" class=\"img-responsive\" alt=\"\">
            </div>
        </div>       
    </div>      
    <div class=\"row  company-intro-block \">
        <div class=\"col-lg-6 padded minus-bottom center-align wow bounceInLeft\">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis, felis et malesuada vehicula, justo sem auctor quam, in viverra lacus augue a lorem. Curabitur ut egestas ipsum, eget dapibus tortor. Nullam diam leo, tempor ut tellus eu, tempus porttitor ante. Donec lacinia sollicitudin felis eget tempus. Sed nulla ex, imperdiet eu iaculis sit amet, fermentum ut nunc. Suspendisse aliquet luctus ex. Aliquam vel orci at dui tincidunt ultricies. Praesent quis tristique sapien.Donec lacinia sollicitudin felis eget tempus. Sed nulla ex, imperdiet eu iaculis sit amet, fermentum ut nunc. Suspendisse aliquet luctus ex.</p>
            <button class=\"btn-large btn-fill\">Visit Our Store</button>
        </div>
        <div class=\"col-lg-6 company-intro-block padded wow bounceInRight\"><img src=\"http://placehold.it/628x350\" class=\"img-responsive\"></div>
    </div>                    
</section>
";
        // line 27
        $this->loadTemplate("_footer.twig", "index.twig", 27)->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 27,  45 => 15,  35 => 8,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* <section>*/
/*     <ul id="demo1" class="header-section">*/
/*         <li><img src="{{ paths.theme }}img/samsung1.jpg"  alt='<h4 class="center-align">Bringing the best and latest phones at an affordable price.</h4><div class="center-align"><a href="" class="btn-large btn-fill2">Visit Our Store</a><div>'</li>*/
/* */
/*         <li><img src="{{ paths.theme }}img/nokia1.jpg" alt='<h4 class="center-align">It&apos;s all about connecting you with everyone you know.</h4><div class="center-align"><a href="" class="btn-large btn-fill2">Find out more</a><div>'></li>   */
/* */
/*         <li><img src="{{ paths.theme }}img/iphone12.jpg" alt='<h4 class="center-align">We can supply all your mobile needs.</h4><div class="center-align"><a href="" class="btn-large btn-fill2">Contact us now</a><div>'></li>*/
/*     </ul>*/
/* </section>*/
/* <section>              */
/*     <div class="row">*/
/*         <div class="container">*/
/*             <div class="col-lg-12 med-img">*/
/*                  <img src="{{ paths.theme }}img/logo-med.jpg" class="img-responsive" alt="">*/
/*             </div>*/
/*         </div>       */
/*     </div>      */
/*     <div class="row  company-intro-block ">*/
/*         <div class="col-lg-6 padded minus-bottom center-align wow bounceInLeft">*/
/*             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis, felis et malesuada vehicula, justo sem auctor quam, in viverra lacus augue a lorem. Curabitur ut egestas ipsum, eget dapibus tortor. Nullam diam leo, tempor ut tellus eu, tempus porttitor ante. Donec lacinia sollicitudin felis eget tempus. Sed nulla ex, imperdiet eu iaculis sit amet, fermentum ut nunc. Suspendisse aliquet luctus ex. Aliquam vel orci at dui tincidunt ultricies. Praesent quis tristique sapien.Donec lacinia sollicitudin felis eget tempus. Sed nulla ex, imperdiet eu iaculis sit amet, fermentum ut nunc. Suspendisse aliquet luctus ex.</p>*/
/*             <button class="btn-large btn-fill">Visit Our Store</button>*/
/*         </div>*/
/*         <div class="col-lg-6 company-intro-block padded wow bounceInRight"><img src="http://placehold.it/628x350" class="img-responsive"></div>*/
/*     </div>                    */
/* </section>*/
/* {% include '_footer.twig' %}*/
