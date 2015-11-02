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
        echo "
";
        // line 3
        $template_storage = new Bolt\Storage($context['app']);
        $context['sliders'] =         $template_storage->getContent("sliders", array() );
        // line 4
        echo "
<section id=\"sliders-container\">
    <ul id=\"demo1\" class=\"header-section\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt')->order((isset($context["sliders"]) ? $context["sliders"] : null), "id"));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 8
            echo "        <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["slide"], "image", array())), "html", null, true);
            echo "\"  alt='<h3 class=\"center-align lato-font white\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "caption", array()), "html", null, true);
            echo "</h3>'</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        <!-- <li><img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "img/nokia1.jpg\" alt='<h4 class=\"center-align\">It&apos;s all about connecting you with everyone you know.</h4><div class=\"center-align\"><a href=\"\" class=\"btn-large btn-fill2\">Find out more</a><div>'></li>   

        <li><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "img/iphone12.jpg\" alt='<h4 class=\"center-align\">We can supply all your mobile needs.</h4><div class=\"center-align\"><a href=\"\" class=\"btn-large btn-fill2\">Contact us now</a><div>'></li> -->
    </ul>
</section>
<section>              
    <div class=\"row\">
        <div class=\"container\">
            
            <div class=\"col-lg-6 med-img center-align\">
                <h3 class=\"lato-font\">Welcome to</h3>
                <h2 class=\"lato-font\">3 Kings Enterprises</h2>
                <h3 class=\"lato-font\">Bringing the <strong class=\"highlight\">best</strong>  at <strong class=\"highlight\">affordable</strong> prices</h3>
            </div>
            <div class=\"col-lg-6 med-img\">
                 <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "img/logo-med.jpg\" class=\"img-responsive\" alt=\"\">
            </div>
        </div>       
    </div>      
    <div class=\"row  company-intro-block \">
        <div class=\"col-lg-6 padded minus-bottom wow bounceInLeft\">
            ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "body", array()), "html", null, true);
        echo "
            <p class=\"center-align\"><a class=\"btn-large btn-fill\">Visit Our Store</a></p>
        </div>
        <div class=\"col-lg-6 company-intro-block padded wow bounceInRight\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "image1", array())), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\"></div>
    </div>                    
</section>
";
        // line 37
        $this->loadTemplate("_footer.twig", "index.twig", 37)->display($context);
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
        return array (  90 => 37,  84 => 34,  78 => 31,  69 => 25,  53 => 12,  47 => 10,  36 => 8,  32 => 7,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* {% setcontent sliders = "sliders" %}*/
/* */
/* <section id="sliders-container">*/
/*     <ul id="demo1" class="header-section">*/
/*         {% for slide in sliders|order('id') %}*/
/*         <li><img src="{{ image(slide.image) }}"  alt='<h3 class="center-align lato-font white">{{slide.caption}}</h3>'</li>*/
/*         {% endfor %}*/
/*         <!-- <li><img src="{{ paths.theme }}img/nokia1.jpg" alt='<h4 class="center-align">It&apos;s all about connecting you with everyone you know.</h4><div class="center-align"><a href="" class="btn-large btn-fill2">Find out more</a><div>'></li>   */
/* */
/*         <li><img src="{{ paths.theme }}img/iphone12.jpg" alt='<h4 class="center-align">We can supply all your mobile needs.</h4><div class="center-align"><a href="" class="btn-large btn-fill2">Contact us now</a><div>'></li> -->*/
/*     </ul>*/
/* </section>*/
/* <section>              */
/*     <div class="row">*/
/*         <div class="container">*/
/*             */
/*             <div class="col-lg-6 med-img center-align">*/
/*                 <h3 class="lato-font">Welcome to</h3>*/
/*                 <h2 class="lato-font">3 Kings Enterprises</h2>*/
/*                 <h3 class="lato-font">Bringing the <strong class="highlight">best</strong>  at <strong class="highlight">affordable</strong> prices</h3>*/
/*             </div>*/
/*             <div class="col-lg-6 med-img">*/
/*                  <img src="{{ paths.theme }}img/logo-med.jpg" class="img-responsive" alt="">*/
/*             </div>*/
/*         </div>       */
/*     </div>      */
/*     <div class="row  company-intro-block ">*/
/*         <div class="col-lg-6 padded minus-bottom wow bounceInLeft">*/
/*             {{page.body}}*/
/*             <p class="center-align"><a class="btn-large btn-fill">Visit Our Store</a></p>*/
/*         </div>*/
/*         <div class="col-lg-6 company-intro-block padded wow bounceInRight"><img src="{{ image(page.image1) }}" class="img-responsive img-rounded"></div>*/
/*     </div>                    */
/* </section>*/
/* {% include '_footer.twig' %}*/
