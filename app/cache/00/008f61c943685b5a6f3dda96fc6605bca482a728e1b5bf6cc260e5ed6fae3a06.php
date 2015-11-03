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
    \t<div id=\"shopping-cart-trigger\">
\t\t\t<i class=\"fa fa-shopping-cart\" style=\"color: #ffffff; font-size: 35px;\"></i>
\t\t</div>
\t\t<div class=\"shopping-cart\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-1\" id=\"close-cart\">
\t\t\t\t\t<i class=\"fa fa-arrow-right white\"></i>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-10 center-align\">
\t\t\t\t\t<h3 class=\"lato-font white\">Welcome To Your Shopping Cart</h3>
\t\t\t\t\t<h4 class=\"lato-font white\">Here is your order</h4>

\t\t\t\t\t<div class=\"col-md-12\" id=\"orders\">
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-12 order\">
\t\t\t\t\t\t<form class=\"order-form\" id=\"orders-form\" action=\"#\" method=\"POST\" role=\"form\">
\t\t\t\t\t\t\t<div class=\"col-sm-12 form-input-group\">
\t\t                       \t<input type=\"text\" id=\"form-name\" placeholder=\"Enter your name\" required>
\t\t                    </div>
\t\t                    <div class=\"col-sm-12 form-input-group\">
\t\t                        <input type=\"text\" id=\"form-email\" placeholder=\"Enter your email\" required>
\t\t                    </div>
\t\t                    <div class=\" col-sm-12 form-input-group\">
\t\t                        <input type=\"text\" id=\"form-phone\" placeholder=\"Enter your phone number\" required>
\t\t                    </div>\t\t                    
\t\t                    <button type=\"submit\" class=\"btn-fill order-btn\">Place Order</button>                    
\t\t                </form> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    \t<div class=\"container\">    \t\t
    \t\t<div class=\"row\">
    \t\t\t<h2 class=\"center-align\" style=\"padding-top: 120px;\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        echo "</h2> 
\t    \t\t<div class=\"col-sm-8 col-sm-offset-2\">
\t    \t\t\t<p class=\"center-align\">Welcome to our online store! Browse through our collection, see what you like and just add it to your cart. Once you are satisfied, go to your cart by clicking the <strong>cart icon</strong> <i class=\"fa fa-shopping-cart\"></i> on your right, fill out your personal information and place your order. No credit card needed. Its that simple!</p>
\t    \t\t</div>
    \t\t</div>   \t\t
    \t\t<div class=\"row\">
    \t\t\t";
        // line 48
        $context["number"] = 1;
        // line 49
        echo "    \t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt')->order((isset($context["phones"]) ? $context["phones"] : null), "-id"));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 50
            echo "    \t\t\t
    \t\t\t<div class=\"col-sm-3 center-align phone\">
    \t\t\t\t<div class=\"col-sm-12 product-name\">    \t\t\t\t\t
    \t\t\t\t\t<h5 class=\"center-align lato-font\"><strong>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "title", array()), "html", null, true);
            echo "</strong></h5>
    \t\t\t\t\t<hr class=\"line\" />
    \t\t\t\t</div>
    \t\t\t\t<img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($context["phone"], "main_image", array())), "html", null, true);
            echo "\" class=\"img-responsive img-rounded\">
    \t\t\t\t<div class=\"col-sm-12 product-name\"><h5 class=\"center-align lato-font\">\$";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "price", array()), "html", null, true);
            echo "</h5></div>
    \t\t\t\t<div class=\"col-sm-12\"><button class=\"btn-small2 btn-fill add-btn\" id=\"add-btn-";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : null), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "title", array()), "html", null, true);
            echo "\" data-price=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "price", array()), "html", null, true);
            echo "\">Add To Cart</button></div>
    \t\t\t</div>
    \t\t\t";
            // line 60
            $context["number"] = ((isset($context["number"]) ? $context["number"] : null) + 1);
            // line 61
            echo "    \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    \t\t</div>
    \t</div>
        

        <!-- <div class=\"col-lg-6 padded minus-bottom wow bounceInLeft \" style=\"\">
            <h3 class=\"lato-font center-align highlight\">Who are we?</h3>
            ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "body", array()), "html", null, true);
        echo "           
        </div>
        <div class=\"col-lg-6 company-intro-block padded wow bounceInRight\">
            <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "image1", array())), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\">
        </div> -->
    </div>    
</section>
";
        // line 75
        $this->loadTemplate("_footer.twig", "store.twig", 75)->display($context);
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
        return array (  140 => 75,  133 => 71,  127 => 68,  119 => 62,  113 => 61,  111 => 60,  102 => 58,  98 => 57,  94 => 56,  88 => 53,  83 => 50,  78 => 49,  76 => 48,  67 => 42,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* {% setcontent phones = "phones"%}*/
/* */
/* <section>                           */
/*     <div class="row">*/
/*     	<div id="shopping-cart-trigger">*/
/* 			<i class="fa fa-shopping-cart" style="color: #ffffff; font-size: 35px;"></i>*/
/* 		</div>*/
/* 		<div class="shopping-cart">*/
/* 			<div class="row">*/
/* 				<div class="col-md-1" id="close-cart">*/
/* 					<i class="fa fa-arrow-right white"></i>					*/
/* 				</div>*/
/* 				<div class="col-md-10 center-align">*/
/* 					<h3 class="lato-font white">Welcome To Your Shopping Cart</h3>*/
/* 					<h4 class="lato-font white">Here is your order</h4>*/
/* */
/* 					<div class="col-md-12" id="orders">*/
/* 						*/
/* 					</div>*/
/* */
/* 					<div class="col-md-12 order">*/
/* 						<form class="order-form" id="orders-form" action="#" method="POST" role="form">*/
/* 							<div class="col-sm-12 form-input-group">*/
/* 		                       	<input type="text" id="form-name" placeholder="Enter your name" required>*/
/* 		                    </div>*/
/* 		                    <div class="col-sm-12 form-input-group">*/
/* 		                        <input type="text" id="form-email" placeholder="Enter your email" required>*/
/* 		                    </div>*/
/* 		                    <div class=" col-sm-12 form-input-group">*/
/* 		                        <input type="text" id="form-phone" placeholder="Enter your phone number" required>*/
/* 		                    </div>		                    */
/* 		                    <button type="submit" class="btn-fill order-btn">Place Order</button>                    */
/* 		                </form> */
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/*     	<div class="container">    		*/
/*     		<div class="row">*/
/*     			<h2 class="center-align" style="padding-top: 120px;">{{page.title}}</h2> */
/* 	    		<div class="col-sm-8 col-sm-offset-2">*/
/* 	    			<p class="center-align">Welcome to our online store! Browse through our collection, see what you like and just add it to your cart. Once you are satisfied, go to your cart by clicking the <strong>cart icon</strong> <i class="fa fa-shopping-cart"></i> on your right, fill out your personal information and place your order. No credit card needed. Its that simple!</p>*/
/* 	    		</div>*/
/*     		</div>   		*/
/*     		<div class="row">*/
/*     			{% set number = 1 %}*/
/*     			{% for phone in phones|order('-id') %}*/
/*     			*/
/*     			<div class="col-sm-3 center-align phone">*/
/*     				<div class="col-sm-12 product-name">    					*/
/*     					<h5 class="center-align lato-font"><strong>{{phone.title}}</strong></h5>*/
/*     					<hr class="line" />*/
/*     				</div>*/
/*     				<img src="{{ image(phone.main_image) }}" class="img-responsive img-rounded">*/
/*     				<div class="col-sm-12 product-name"><h5 class="center-align lato-font">${{phone.price}}</h5></div>*/
/*     				<div class="col-sm-12"><button class="btn-small2 btn-fill add-btn" id="add-btn-{{number}}" data-name="{{phone.title}}" data-price="{{phone.price}}">Add To Cart</button></div>*/
/*     			</div>*/
/*     			{% set number = number+1 %}*/
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
