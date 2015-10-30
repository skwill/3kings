<?php

/* about.twig */
class __TwigTemplate_5a9a47100ac34192a4f98a6750ceeee313fcd7c8d60745e52f0af2304412f814 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "about.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $template_storage = new Bolt\Storage($context['app']);
        $context['testimonials'] =         $template_storage->getContent("testimonials", array() );
        // line 4
        echo "<section>                           
    <div class=\"row  company-intro-block \" style=\"padding-top: 120px;\">
        <h2 class=\"center-align\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        echo "</h2>     
        <div class=\"col-lg-6 padded minus-bottom wow bounceInLeft \" style=\"\">
            <h3 class=\"lato-font center-align highlight\">Who are we?</h3>
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "body", array()), "html", null, true);
        echo "           
        </div>
        <div class=\"col-lg-6 company-intro-block padded wow bounceInRight\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "image1", array())), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
        </div>
    </div>    
    <div class=\"row  company-intro-block\">
        <div class=\"col-lg-6 company-intro-block padded wow bounceInLeft\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "image2", array())), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
        </div>
        <div class=\"col-lg-6 padded minus-bottom wow bounceInRight\">
            <h3 class=\"lato-font center-align highlight\">What we do</h3>
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "body2", array()), "html", null, true);
        echo "        
        </div>                
    </div>                   
</section>
<section>
    <div class=\"container\">
        <div class=\"col-md-8 col-md-offset-2\">
            <h3 class=\"center-align\">What do our customers say?</h3>
            <ul id=\"demo2\" class=\"header-section\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt')->order((isset($context["testimonials"]) ? $context["testimonials"] : null), "id"));
        foreach ($context['_seq'] as $context["_key"] => $context["testimony"]) {
            // line 31
            echo "                    <li class=\"center-align\">
                        \"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["testimony"], "testimony", array()), "html", null, true);
            echo "\"
                        <strong><p>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["testimony"], "client_name", array()), "html", null, true);
            echo "</p></strong> 
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimony'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </ul>
        </div>
    </div>            
</section>
";
        // line 40
        $this->loadTemplate("_footer.twig", "about.twig", 40)->display($context);
    }

    public function getTemplateName()
    {
        return "about.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 40,  90 => 36,  81 => 33,  77 => 32,  74 => 31,  70 => 30,  58 => 21,  51 => 17,  43 => 12,  37 => 9,  31 => 6,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* {% setcontent testimonials= "testimonials" %}*/
/* <section>                           */
/*     <div class="row  company-intro-block " style="padding-top: 120px;">*/
/*         <h2 class="center-align">{{page.title}}</h2>     */
/*         <div class="col-lg-6 padded minus-bottom wow bounceInLeft " style="">*/
/*             <h3 class="lato-font center-align highlight">Who are we?</h3>*/
/*             {{page.body}}           */
/*         </div>*/
/*         <div class="col-lg-6 company-intro-block padded wow bounceInRight">*/
/*             <img src="{{ image(page.image1) }}" class="img-responsive img-rounded">*/
/*         </div>*/
/*     </div>    */
/*     <div class="row  company-intro-block">*/
/*         <div class="col-lg-6 company-intro-block padded wow bounceInLeft">*/
/*             <img src="{{ image(page.image2) }}" class="img-responsive img-rounded">*/
/*         </div>*/
/*         <div class="col-lg-6 padded minus-bottom wow bounceInRight">*/
/*             <h3 class="lato-font center-align highlight">What we do</h3>*/
/*             {{page.body2}}        */
/*         </div>                */
/*     </div>                   */
/* </section>*/
/* <section>*/
/*     <div class="container">*/
/*         <div class="col-md-8 col-md-offset-2">*/
/*             <h3 class="center-align">What do our customers say?</h3>*/
/*             <ul id="demo2" class="header-section">*/
/*                 {% for testimony in testimonials|order('id') %}*/
/*                     <li class="center-align">*/
/*                         "{{testimony.testimony}}"*/
/*                         <strong><p>{{testimony.client_name}}</p></strong> */
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>            */
/* </section>*/
/* {% include '_footer.twig' %}*/
