<?php

/* store.twig */
class __TwigTemplate_7f4dfc3e323558742b1fe5d26e7caf5027a466b012a860be6fc6af54388d9f18 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "store.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $template_storage = new Bolt\Storage($context['app']);
        $context['phones'] =         $template_storage->getContent("phones", array() );
        // line 4
        echo "
<section>                           
    <div class=\"row\">
    \t<div class=\"container\">
    \t\t<div class=\"row\">
    \t\t\t<h2 class=\"center-align\" style=\"padding-top: 120px;\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        echo "</h2> 
\t    \t\t<div class=\"col-sm-8 col-sm-offset-2\">
\t    \t\t\t<p class=\"center-align\">Welcome to our online store! Browse through our collection, see what you like and just add it to your cart. Once you are satisfied, go to your cart by clicking the <strong>cart icon</strong> <i class=\"fa fa-shopping-cart\"></i> on your right, fill out your personal information and place your order. No credit card needed. Its that simple!</p>
\t    \t\t</div>
    \t\t</div>   \t\t
    \t\t<div class=\"row\">
    \t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt')->order((isset($context["phones"]) ? $context["phones"] : null), "-id"));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 16
            echo "    \t\t\t<div class=\"col-sm-3 center-align phone\">
    \t\t\t\t<div class=\"col-sm-12 product-name\">    \t\t\t\t\t
    \t\t\t\t\t<h5 class=\"center-align lato-font\"><strong>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "title", array()), "html", null, true);
            echo "</strong></h5>
    \t\t\t\t\t<hr class=\"line\" />
    \t\t\t\t</div>
    \t\t\t\t<img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["phone"], "main_image", array())), "html", null, true);
            echo "\" class=\"img-responsive img-rounded\">
    \t\t\t\t<div class=\"col-sm-12 product-name\"><h5 class=\"center-align lato-font\">\$";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "price", array()), "html", null, true);
            echo "</h5></div>
    \t\t\t\t<div class=\"col-sm-12\"><button class=\"btn-small2 btn-fill\">Add To Cart</button></div>
    \t\t\t</div>
    \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    \t\t</div>
    \t</div>
        

        <!-- <div class=\"col-lg-6 padded minus-bottom wow bounceInLeft \" style=\"\">
            <h3 class=\"lato-font center-align highlight\">Who are we?</h3>
            ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "body", array()), "html", null, true);
        echo "           
        </div>
        <div class=\"col-lg-6 company-intro-block padded wow bounceInRight\">
            <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "image1", array())), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
        </div> -->
    </div>    
</section>
";
        // line 39
        $this->loadTemplate("_footer.twig", "store.twig", 39)->display($context);
    }

    public function getTemplateName()
    {
        return "store.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 39,  85 => 35,  79 => 32,  71 => 26,  61 => 22,  57 => 21,  51 => 18,  47 => 16,  43 => 15,  34 => 9,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* {% setcontent phones = "phones"%}*/
/* */
/* <section>                           */
/*     <div class="row">*/
/*     	<div class="container">*/
/*     		<div class="row">*/
/*     			<h2 class="center-align" style="padding-top: 120px;">{{page.title}}</h2> */
/* 	    		<div class="col-sm-8 col-sm-offset-2">*/
/* 	    			<p class="center-align">Welcome to our online store! Browse through our collection, see what you like and just add it to your cart. Once you are satisfied, go to your cart by clicking the <strong>cart icon</strong> <i class="fa fa-shopping-cart"></i> on your right, fill out your personal information and place your order. No credit card needed. Its that simple!</p>*/
/* 	    		</div>*/
/*     		</div>   		*/
/*     		<div class="row">*/
/*     			{% for phone in phones|order('-id') %}*/
/*     			<div class="col-sm-3 center-align phone">*/
/*     				<div class="col-sm-12 product-name">    					*/
/*     					<h5 class="center-align lato-font"><strong>{{phone.title}}</strong></h5>*/
/*     					<hr class="line" />*/
/*     				</div>*/
/*     				<img src="{{ image(phone.main_image) }}" class="img-responsive img-rounded">*/
/*     				<div class="col-sm-12 product-name"><h5 class="center-align lato-font">${{phone.price}}</h5></div>*/
/*     				<div class="col-sm-12"><button class="btn-small2 btn-fill">Add To Cart</button></div>*/
/*     			</div>*/
/*     			{% endfor %}*/
/*     		</div>*/
/*     	</div>*/
/*         */
/* */
/*         <!-- <div class="col-lg-6 padded minus-bottom wow bounceInLeft " style="">*/
/*             <h3 class="lato-font center-align highlight">Who are we?</h3>*/
/*             {{page.body}}           */
/*         </div>*/
/*         <div class="col-lg-6 company-intro-block padded wow bounceInRight">*/
/*             <img src="{{ image(page.image1) }}" class="img-responsive img-rounded">*/
/*         </div> -->*/
/*     </div>    */
/* </section>*/
/* {% include '_footer.twig' %}*/
