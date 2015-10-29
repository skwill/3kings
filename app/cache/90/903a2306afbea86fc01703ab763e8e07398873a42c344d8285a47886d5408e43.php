<?php

/* nav/_secondary-content.twig */
class __TwigTemplate_f727b499fa05e4e00232bfadbf6a05b9512cfd583e8138755e9597c6047bdaf2 extends Twig_Template
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
        $context["sub_hide"] = array();
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["slug"] => $context["contenttype"]) {
            // line 4
            echo "    ";
            if ($this->env->getExtension('Bolt')->isAllowed(("contenttype:" . $context["slug"]))) {
                // line 5
                echo "        ";
                $context["sub_view"] = array("icon" => (($this->getAttribute(                // line 6
$context["contenttype"], "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_many", array()), (($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))) : ((($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))), "label" => $this->env->getExtension('Bolt')->trans("contenttypes.generic.view", array("%contenttypes%" => $this->getAttribute(                // line 7
$context["contenttype"], "slug", array()))), "link" => $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" =>                 // line 8
$context["slug"])));
                // line 10
                echo "        ";
                $context["sub_new"] = array("icon" => "fa:plus", "label" => $this->env->getExtension('Bolt')->trans("contenttypes.generic.new", array("%contenttype%" =>                 // line 12
$context["slug"])), "link" => $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" =>                 // line 13
$context["slug"])), "isallowed" => (("contenttype:" .                 // line 14
$context["slug"]) . ":create"));
                // line 16
                echo "        ";
                $context["sub"] = array(0 => (isset($context["sub_view"]) ? $context["sub_view"] : null), 1 => (isset($context["sub_new"]) ? $context["sub_new"] : null), 2 => "-");
                // line 17
                echo "
        ";
                // line 19
                echo "        ";
                if ($this->getAttribute($context["contenttype"], "show_in_menu", array())) {
                    // line 20
                    echo "
            ";
                    // line 21
                    $template_storage = new Bolt\Storage($context['app']);
                    $context['records'] =                     $template_storage->getContent((isset($context["slug"]) ? $context["slug"] : null), array("limit" => 4, "hydrate" => false, "order" => "-datechanged") );
                    // line 22
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                        // line 23
                        echo "                ";
                        $context["sub"] = twig_array_merge((isset($context["sub"]) ? $context["sub"] : null), array(0 => array("icon" => (($this->getAttribute(                        // line 25
$context["contenttype"], "icon_one", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_one", array()), "fa:file-text-o")) : ("fa:file-text-o")), "label" => trim(twig_replace_filter($this->getAttribute(                        // line 26
$context["record"], "excerpt", array(0 => 80, 1 => true), "method"), array("</b>" => "&nbsp;</b>"))), "link" => $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" =>                         // line 27
$context["slug"], "id" => $this->getAttribute($context["record"], "id", array()))))));
                        // line 30
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "
            ";
                    // line 32
                    $context["label"] = $this->env->getExtension('Bolt')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($context["contenttype"], "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($context["contenttype"], "name", array())));
                    // line 33
                    echo "            ";
                    $context["active"] = (((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Content/*") && ((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "slug", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "slug", array()))) : ("")) == $context["slug"]));
                    // line 34
                    echo "
            ";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => (($this->getAttribute($context["contenttype"], "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_many", array()), "")) : ("")), 1 => (isset($context["label"]) ? $context["label"] : null), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => (isset($context["active"]) ? $context["active"] : null), 4 => true), "method"), "html", null, true);
                    echo "

        ";
                    // line 38
                    echo "        ";
                } else {
                    // line 39
                    echo "
            ";
                    // line 40
                    $context["sub_view"] = array("icon" => (($this->getAttribute(                    // line 41
$context["contenttype"], "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_many", array()), (($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))) : ((($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))), "label" => $this->env->getExtension('Bolt')->trans(array(0 => "contenttypes", 1 => $this->getAttribute(                    // line 42
$context["contenttype"], "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($context["contenttype"], "name", array()))), "link" => $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" =>                     // line 43
$context["slug"])));
                    // line 45
                    echo "
            ";
                    // line 46
                    $context["sub_hide"] = twig_array_merge((isset($context["sub_hide"]) ? $context["sub_hide"] : null), array(0 => (isset($context["sub_view"]) ? $context["sub_view"] : null)));
                    // line 47
                    echo "
        ";
                }
                // line 49
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['contenttype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:th-list", 1 => $this->env->getExtension('Bolt')->trans("Other content"), 2 => (isset($context["sub_hide"]) ? $context["sub_hide"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "nav/_secondary-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 53,  118 => 51,  111 => 49,  107 => 47,  105 => 46,  102 => 45,  100 => 43,  99 => 42,  98 => 41,  97 => 40,  94 => 39,  91 => 38,  86 => 35,  83 => 34,  80 => 33,  78 => 32,  75 => 31,  69 => 30,  67 => 27,  66 => 26,  65 => 25,  63 => 23,  58 => 22,  55 => 21,  52 => 20,  49 => 19,  46 => 17,  43 => 16,  41 => 14,  40 => 13,  39 => 12,  37 => 10,  35 => 8,  34 => 7,  33 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set sub_hide = [] %}*/
/* */
/* {% for slug, contenttype in app.config.get('contenttypes')  %}*/
/*     {% if isallowed('contenttype:' ~ slug) %}*/
/*         {% set sub_view = {*/
/*             icon: contenttype.icon_many|default(contenttype.show_in_menu ? 'fa:files-o' : 'fa:th-list'),*/
/*             label: __('contenttypes.generic.view', {'%contenttypes%': contenttype.slug}),*/
/*             link: path('overview', {'contenttypeslug': slug})*/
/*         } %}*/
/*         {% set sub_new = {*/
/*             icon: 'fa:plus',*/
/*             label: __('contenttypes.generic.new', {'%contenttype%': slug}),*/
/*             link: path('editcontent', {'contenttypeslug': slug}),*/
/*             isallowed: 'contenttype:' ~ slug ~ ':create'*/
/*         } %}*/
/*         {% set sub = [sub_view, sub_new, '-'] %}*/
/* */
/*         {# Contenttypes, where show_in_menu is set true #}*/
/*         {% if contenttype.show_in_menu %}*/
/* */
/*             {% setcontent records = slug limit 4 nohydrate orderby '-datechanged' %}*/
/*             {% for record in records %}*/
/*                 {% set sub = sub|merge([*/
/*                     {*/
/*                         icon: contenttype.icon_one|default('fa:file-text-o'),*/
/*                         label: record.excerpt(80, true)|replace({"</b>": "&nbsp;</b>"})|trim,*/
/*                         link: path('editcontent', {'contenttypeslug': slug, 'id': record.id})*/
/*                     }*/
/*                 ]) %}*/
/*             {% endfor %}*/
/* */
/*             {% set label = __(['contenttypes', contenttype.slug, 'name', 'plural'], {DEFAULT: contenttype.name}) %}*/
/*             {% set active = (page_nav == 'Content/*' and context.contenttype.slug|default == slug) %}*/
/* */
/*             {{ nav.submenu(contenttype.icon_many|default(''), label, sub, active, true) }}*/
/* */
/*         {# Contenttypes, where show_in_menu is set false #}*/
/*         {% else %}*/
/* */
/*             {% set sub_view = {*/
/*                 icon: contenttype.icon_many|default(contenttype.show_in_menu ? 'fa:files-o' : 'fa:th-list'),*/
/*                 label: __(['contenttypes', contenttype.slug, 'name', 'plural'], {DEFAULT: contenttype.name}),*/
/*                 link: path('overview', {'contenttypeslug': slug})*/
/*             } %}*/
/* */
/*             {% set sub_hide = sub_hide|merge([sub_view]) %}*/
/* */
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
/* {# Display contenttypes, that have show_in_menu set to false in a submenu #}*/
/* {{ nav.submenu('fa:th-list', __('Other content'), sub_hide) }}*/
/* */
