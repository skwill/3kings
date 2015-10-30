<?php

/* contact.twig */
class __TwigTemplate_17e7885f30b7b4805619822e407cdd694b15e0db238f11727fbc7603a72d4fa9 extends Twig_Template
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
        $this->loadTemplate("_header.twig", "contact.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $template_storage = new Bolt\Storage($context['app']);
        $context['contact'] =         $template_storage->getContent("contacts/1", array() );
        // line 4
        echo "
<section class=\"sign-up section-padding text-center\" id=\"download\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h3>Send us a message!</h3>
                <p>Contact us today for any queries, feedback or just to say hello!</p>
                <form class=\"signup-form\" action=\"#\" method=\"POST\" role=\"form\">
                    <div class=\"form-input-group\">
                        <i class=\"fa fa-envelope\"></i><input type=\"text\" class=\"\" placeholder=\"Enter your email\" required>
                    </div>
                    <div class=\"form-input-group\">
                        <i class=\"fa fa-phone\"></i><input type=\"text\" class=\"\" placeholder=\"Enter your phone number (optional)\" required>
                    </div>
                    <div class=\"form-input-group\">
                        <textarea name=\"comment\" form=\"usrform\" rows=\"6\" placeholder=\"Enter your message\"></textarea>
                        <!-- <i class=\"fa fa-lock\"></i><input type=\"text\" class=\"\" placeholder=\"Enter your password\" required> -->
                        
                    </div>
                    <button type=\"submit\" class=\"btn-fill sign-up-btn\">Send Message</button>                    
                </form>
            </div>
            <div class=\"col-md-6 contact-info\">
                <h3>Contact Info </h3>
                <div class=\"col-sm-4  contact-icons\">
                    <a href=\"tel:\"><i class=\"fa fa-phone-square\"></i></a>
                    <p><a href=\"tel:\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "phone", array()), "html", null, true);
        echo "</a> </p>
                </div>
                <div class=\"col-sm-4 contact-icons\">
                    <a href=\"\"><i class=\"fa  fa-envelope \"></i></a>
                    <p><a href=\"\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "email", array()), "html", null, true);
        echo "</a></p>
                </div>
                <div class=\"col-sm-4 contact-icons\">
                    <a href=\"\"><i class=\"fa fa-facebook-official \"></i></a>
                    <p><a href=\"\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "facebook", array()), "html", null, true);
        echo "</a></p>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12 contact-txt\">
                        ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "contact_text", array()), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 49
        $this->loadTemplate("_footer.twig", "contact.twig", 49)->display($context);
    }

    public function getTemplateName()
    {
        return "contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 49,  76 => 42,  69 => 38,  62 => 34,  55 => 30,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '_header.twig' %}*/
/* */
/* {% setcontent contact = "contacts/1" %}*/
/* */
/* <section class="sign-up section-padding text-center" id="download">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-6">*/
/*                 <h3>Send us a message!</h3>*/
/*                 <p>Contact us today for any queries, feedback or just to say hello!</p>*/
/*                 <form class="signup-form" action="#" method="POST" role="form">*/
/*                     <div class="form-input-group">*/
/*                         <i class="fa fa-envelope"></i><input type="text" class="" placeholder="Enter your email" required>*/
/*                     </div>*/
/*                     <div class="form-input-group">*/
/*                         <i class="fa fa-phone"></i><input type="text" class="" placeholder="Enter your phone number (optional)" required>*/
/*                     </div>*/
/*                     <div class="form-input-group">*/
/*                         <textarea name="comment" form="usrform" rows="6" placeholder="Enter your message"></textarea>*/
/*                         <!-- <i class="fa fa-lock"></i><input type="text" class="" placeholder="Enter your password" required> -->*/
/*                         */
/*                     </div>*/
/*                     <button type="submit" class="btn-fill sign-up-btn">Send Message</button>                    */
/*                 </form>*/
/*             </div>*/
/*             <div class="col-md-6 contact-info">*/
/*                 <h3>Contact Info </h3>*/
/*                 <div class="col-sm-4  contact-icons">*/
/*                     <a href="tel:"><i class="fa fa-phone-square"></i></a>*/
/*                     <p><a href="tel:">{{contact.phone}}</a> </p>*/
/*                 </div>*/
/*                 <div class="col-sm-4 contact-icons">*/
/*                     <a href=""><i class="fa  fa-envelope "></i></a>*/
/*                     <p><a href="">{{contact.email}}</a></p>*/
/*                 </div>*/
/*                 <div class="col-sm-4 contact-icons">*/
/*                     <a href=""><i class="fa fa-facebook-official "></i></a>*/
/*                     <p><a href="">{{contact.facebook}}</a></p>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-md-12 contact-txt">*/
/*                         {{contact.contact_text}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* {% include '_footer.twig' %}*/
