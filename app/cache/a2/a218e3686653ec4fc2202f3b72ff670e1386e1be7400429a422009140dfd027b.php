<?php

/* editcontent/fields/_imagelist.twig */
class __TwigTemplate_8432bfc7031bf7d666a7f140edd25cf6b3ae7cf812cca902c2c2377ba27201f5 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["option"] = array("extensions" => (($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "extensions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions", array()), array())) : (array())), "label" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "upload" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "upload", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "upload", array()), "")) : ("")), "can_upload" => $this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "canUpload", array()), "info" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "info.upload.imagelist")) : ("info.upload.imagelist")));
        // line 10
        echo "
";
        // line 12
        echo "
";
        // line 13
        $context["attr_fileupload"] = array("accept" => (($this->getAttribute(        // line 14
(isset($context["option"]) ? $context["option"] : null), "extensions", array())) ? (("." . twig_join_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "extensions", array()), ",."))) : ("")), "data_upload" => twig_jsonencode_filter(array("type" => "ImageList", "key" =>         // line 15
(isset($context["key"]) ? $context["key"] : null))), "data_url" => $this->env->getExtension('routing')->getUrl("upload", array("handler" => $this->getAttribute(        // line 16
(isset($context["option"]) ? $context["option"] : null), "upload", array()))), "id" => ("fileupload-" .         // line 17
(isset($context["key"]) ? $context["key"] : null)), "name" => "files[]", "type" => "file", "multiple" => true);
        // line 22
        echo "
";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method", true, true)) {
            // line 24
            echo "    ";
            $context["list_json"] = twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"));
        } else {
            // line 26
            echo "    ";
            $context["list_json"] = "";
        }
        // line 28
        echo "
";
        // line 30
        echo "
";
        // line 31
        $context["block"] = $this;
        // line 32
        echo "
";
        // line 41
        echo "

";
        // line 44
        echo "
";
        // line 45
        ob_start();
        // line 46
        echo "    <p>";
        echo $this->env->getExtension('Bolt')->trans("No images in the list, yet.");
        echo "</p>
";
        $context["list_empty"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 48
        echo "
";
        // line 49
        ob_start();
        // line 50
        echo "    <div data-id=\"";
        echo "<ID>";
        echo "\" class=\"list-item ui-state-default\">
        <a class=\"thumbnail-link\" href=\"";
        // line 51
        echo "<PATH>";
        echo "../files/";
        echo "<FNAME>";
        echo "\"><img src=\"";
        echo "<PATH>";
        echo "../thumbs/60x40/";
        echo "<FNAME>";
        echo "\" width=\"60\" height=\"40\"></a>
        <input type=\"text\" value=\"";
        // line 52
        echo "<VAL>";
        echo "\">
        <a href=\"#\" class=\"remove-button\"><i class=\"fa fa-times\"></i></a>
    </div>
";
        $context["list_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 56
        echo "
";
        // line 57
        ob_start();
        // line 58
        echo "    <div class=\"uploading-list-element\">
        ";
        // line 59
        echo $this->env->getExtension('Bolt')->trans("Uploading");
        echo " ";
        echo "<FNAME>";
        echo "
        <div class=\"progress files-progress progress-striped active\" id=\"progress-";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\">
            <div class=\"progress-bar\" style=\"width: ";
        // line 61
        echo "<PROGRESS>";
        echo "\"></div>
        </div>
    </div>
";
        $context["list_item_uploading"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 65
        echo "
";
        // line 66
        $context["listdata"] = array("message" => array("remove" => $this->env->getExtension('Bolt')->trans("Are you sure you want to remove this image?"), "removeMulti" => $this->env->getExtension('Bolt')->trans("Are you sure you want to remove these images?"), "wrongtype" => $this->env->getExtension('Bolt')->trans("There was an error uploading the file.
Make sure that the file type is of:
%typelist%", array("%typelist%" => (($this->getAttribute(        // line 70
(isset($context["option"]) ? $context["option"] : null), "extensions", array())) ? (("." . twig_join_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "extensions", array()), ", ."))) : ("–"))))), "empty" => trim(        // line 72
(isset($context["list_empty"]) ? $context["list_empty"] : null)), "item" => $this->env->getExtension('Bolt')->pregReplace(trim(        // line 73
(isset($context["list_item"]) ? $context["list_item"] : null)), "/>\\s+</", "><"), "itemUploading" => $this->env->getExtension('Bolt')->pregReplace(trim(        // line 74
(isset($context["list_item_uploading"]) ? $context["list_item_uploading"] : null)), "/>\\s+</", "><"));
        // line 76
        echo "
<fieldset class=\"imagelist\">
    <label class=\"col-sm-12 control-label\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method"), "html", null, true);
        echo "</label>

    <div class=\"col-sm-12 filelistholder dropzone\" id=\"imagelist-";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\">

        <div class=\"list\" data-list=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["listdata"]) ? $context["listdata"] : null)), "html", null, true);
        echo "\"></div>

        ";
        // line 84
        $context["can_upload"] = ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "can_upload", array()) && $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "can_upload", array()));
        // line 85
        echo "        <div class=\"clearfix\">
            ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "upload_buttons", array(0 => "image", 1 => (isset($context["key"]) ? $context["key"] : null), 2 => (isset($context["attr_fileupload"]) ? $context["attr_fileupload"] : null), 3 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "upload", array()), 4 => (isset($context["can_upload"]) ? $context["can_upload"] : null)), "method"), "html", null, true);
        echo "

            <textarea name=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\" class=\"hide\">";
        echo twig_escape_filter($this->env, (isset($context["list_json"]) ? $context["list_json"] : null), "html", null, true);
        echo "</textarea>

            <span type=\"button\" class=\"btn btn-default remove-selected-button\">
                <i class=\"fa fa-trash\"></i>
                <span>";
        // line 92
        echo $this->env->getExtension('Bolt')->trans("Remove selected");
        echo "</span>
            </span>
        </div>

        <p class=\"uploading-list\"></p>

        ";
        // line 98
        echo $context["block"]->getserverselect((isset($context["key"]) ? $context["key"] : null));
        echo "

    </div>

</fieldset>
";
    }

    // line 34
    public function getserverselect($__key__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 35
            echo "    <div class=\"modal fade\" id=\"selectModal-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\"></div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_imagelist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 35,  202 => 34,  192 => 98,  183 => 92,  172 => 88,  167 => 86,  164 => 85,  162 => 84,  157 => 82,  152 => 80,  147 => 78,  143 => 76,  141 => 74,  140 => 73,  139 => 72,  138 => 70,  135 => 66,  132 => 65,  125 => 61,  121 => 60,  115 => 59,  112 => 58,  110 => 57,  107 => 56,  100 => 52,  90 => 51,  85 => 50,  83 => 49,  80 => 48,  74 => 46,  72 => 45,  69 => 44,  65 => 41,  62 => 32,  60 => 31,  57 => 30,  54 => 28,  50 => 26,  46 => 24,  44 => 23,  41 => 22,  39 => 17,  38 => 16,  37 => 15,  36 => 14,  35 => 13,  32 => 12,  29 => 10,  27 => 8,  26 => 7,  25 => 6,  24 => 5,  23 => 4,  22 => 3,  19 => 2,);
    }
}
/* {#=== OPTIONS ========================================================================================================#}*/
/* */
/* {% set option = {*/
/*     extensions:  field.extensions|default([]),*/
/*     label:       field.label|default(''),*/
/*     upload:      field.upload|default(''),*/
/*     can_upload:  field.canUpload,*/
/*     info:        field.info|default('info.upload.imagelist')*/
/* } %}*/
/* */
/* {#=== INIT ===========================================================================================================#}*/
/* */
/* {% set attr_fileupload = {*/
/*     accept:      option.extensions ? '.' ~ option.extensions|join(',.') : '',*/
/*     data_upload: {type: 'ImageList', key: key}|json_encode(),*/
/*     data_url:    url('upload', {'handler': option.upload}),*/
/*     id:          'fileupload-' ~ key,*/
/*     name:        'files[]',*/
/*     type:        'file',*/
/*     multiple:    true,*/
/* } %}*/
/* */
/* {% if context.content.get(contentkey) is defined %}*/
/*     {% set list_json = context.content.get(contentkey)|json_encode() %}*/
/* {% else %}*/
/*     {% set list_json = '' %}*/
/* {% endif %}*/
/* */
/* {#=== BLOCKS =========================================================================================================#}*/
/* */
/* {% import _self as block %}*/
/* */
/* {# Modal "select from server" #}*/
/* {% macro serverselect(key) %}*/
/*     <div class="modal fade" id="selectModal-{{ key }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content"></div>*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* */
/* {#=== FIELDSET =======================================================================================================#}*/
/* */
/* {% set list_empty %}*/
/*     <p>{{ __('No images in the list, yet.') }}</p>*/
/* {% endset %}*/
/* */
/* {% set list_item %}*/
/*     <div data-id="{{ '<ID>' }}" class="list-item ui-state-default">*/
/*         <a class="thumbnail-link" href="{{ '<PATH>' }}../files/{{ '<FNAME>' }}"><img src="{{ '<PATH>' }}../thumbs/60x40/{{ '<FNAME>' }}" width="60" height="40"></a>*/
/*         <input type="text" value="{{ '<VAL>' }}">*/
/*         <a href="#" class="remove-button"><i class="fa fa-times"></i></a>*/
/*     </div>*/
/* {% endset %}*/
/* */
/* {% set list_item_uploading %}*/
/*     <div class="uploading-list-element">*/
/*         {{ __('Uploading') }} {{ '<FNAME>' }}*/
/*         <div class="progress files-progress progress-striped active" id="progress-{{ key }}">*/
/*             <div class="progress-bar" style="width: {{ '<PROGRESS>' }}"></div>*/
/*         </div>*/
/*     </div>*/
/* {% endset %}*/
/* */
/* {% set listdata = {*/
/*     'message': {*/
/*         'remove':       __('Are you sure you want to remove this image?'),*/
/*         'removeMulti':  __('Are you sure you want to remove these images?'),*/
/*         'wrongtype':    __('There was an error uploading the file.\nMake sure that the file type is of:\n%typelist%', {'%typelist%': option.extensions ? '.' ~ option.extensions|join(', .') : '–'})*/
/*     },*/
/*     'empty':          list_empty|trim,*/
/*     'item':           list_item|trim|preg_replace('/>\\s+</', '><'),*/
/*     'itemUploading':     list_item_uploading|trim|preg_replace('/>\\s+</', '><'),*/
/* } %}*/
/* */
/* <fieldset class="imagelist">*/
/*     <label class="col-sm-12 control-label">{{ macro.infopop(labelkey, option.info) }}</label>*/
/* */
/*     <div class="col-sm-12 filelistholder dropzone" id="imagelist-{{ key }}">*/
/* */
/*         <div class="list" data-list="{{ listdata|json_encode }}"></div>*/
/* */
/*         {% set can_upload = context.can_upload and option.can_upload %}*/
/*         <div class="clearfix">*/
/*             {{ macro.upload_buttons('image', key, attr_fileupload, option.upload, can_upload) }}*/
/* */
/*             <textarea name="{{ name }}" id="{{ key }}" class="hide">{{ list_json }}</textarea>*/
/* */
/*             <span type="button" class="btn btn-default remove-selected-button">*/
/*                 <i class="fa fa-trash"></i>*/
/*                 <span>{{ __('Remove selected') }}</span>*/
/*             </span>*/
/*         </div>*/
/* */
/*         <p class="uploading-list"></p>*/
/* */
/*         {{ block.serverselect(key) }}*/
/* */
/*     </div>*/
/* */
/* </fieldset>*/
/* */
