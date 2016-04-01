<?php

/* ::base.html.twig */
class __TwigTemplate_be1e5ba9792f9fc6ffc4936e620bdfef3d20d305df5e876f8690e6a41c1cf10d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'contentBase' => array($this, 'block_contentBase'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6c36506e9aae48b56540f301f22dae7dc0bf6a15a6918425bc073b38e025b69 = $this->env->getExtension("native_profiler");
        $__internal_c6c36506e9aae48b56540f301f22dae7dc0bf6a15a6918425bc073b38e025b69->enter($__internal_c6c36506e9aae48b56540f301f22dae7dc0bf6a15a6918425bc073b38e025b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 2
        $context["_locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "_locale"), "method");
        // line 3
        echo "


<!DOCTYPE html>

<html>

<head>
\t
\t<meta charset=\"UTF-8\" />
\t
\t<title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t<link rel=\"icon\" type=\"image/x-icon\" href=\"\" />

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />

</head>

<body>



\t";
        // line 26
        $this->displayBlock('menu', $context, $blocks);
        // line 27
        echo "
\t";
        // line 28
        $this->displayBlock('contentBase', $context, $blocks);
        // line 35
        echo "
\t";
        // line 36
        $this->displayBlock('javascript', $context, $blocks);
        // line 37
        echo "
\t";
        // line 38
        $this->displayBlock('foot', $context, $blocks);
        // line 39
        echo "
</body>

</html>

";
        
        $__internal_c6c36506e9aae48b56540f301f22dae7dc0bf6a15a6918425bc073b38e025b69->leave($__internal_c6c36506e9aae48b56540f301f22dae7dc0bf6a15a6918425bc073b38e025b69_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fb291c440e0f78ba77b8955d919a758bd2af6b9bbbaa41f647ebd1003b1438a = $this->env->getExtension("native_profiler");
        $__internal_1fb291c440e0f78ba77b8955d919a758bd2af6b9bbbaa41f647ebd1003b1438a->enter($__internal_1fb291c440e0f78ba77b8955d919a758bd2af6b9bbbaa41f647ebd1003b1438a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "David Hasselhoff";
        
        $__internal_1fb291c440e0f78ba77b8955d919a758bd2af6b9bbbaa41f647ebd1003b1438a->leave($__internal_1fb291c440e0f78ba77b8955d919a758bd2af6b9bbbaa41f647ebd1003b1438a_prof);

    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05de1e329cecef5fb67fc53e3d490d053cfce364128494e230fd2fbe177920b7 = $this->env->getExtension("native_profiler");
        $__internal_05de1e329cecef5fb67fc53e3d490d053cfce364128494e230fd2fbe177920b7->enter($__internal_05de1e329cecef5fb67fc53e3d490d053cfce364128494e230fd2fbe177920b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        echo " ";
        $this->loadTemplate("::menu.html.twig", "::base.html.twig", 26)->display($context);
        echo " ";
        
        $__internal_05de1e329cecef5fb67fc53e3d490d053cfce364128494e230fd2fbe177920b7->leave($__internal_05de1e329cecef5fb67fc53e3d490d053cfce364128494e230fd2fbe177920b7_prof);

    }

    // line 28
    public function block_contentBase($context, array $blocks = array())
    {
        $__internal_02dff3713004be705cd4b4b6f898aad9cc5a641074e1154831aac09778cad3dc = $this->env->getExtension("native_profiler");
        $__internal_02dff3713004be705cd4b4b6f898aad9cc5a641074e1154831aac09778cad3dc->enter($__internal_02dff3713004be705cd4b4b6f898aad9cc5a641074e1154831aac09778cad3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBase"));

        // line 29
        echo "
\t\t<div class=\"contain\">
\t\t\t";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "\t\t</div>

\t";
        
        $__internal_02dff3713004be705cd4b4b6f898aad9cc5a641074e1154831aac09778cad3dc->leave($__internal_02dff3713004be705cd4b4b6f898aad9cc5a641074e1154831aac09778cad3dc_prof);

    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        $__internal_a2285d2619db40b5ce28367cea14924bb001457d8088abfbf71a7af58834253d = $this->env->getExtension("native_profiler");
        $__internal_a2285d2619db40b5ce28367cea14924bb001457d8088abfbf71a7af58834253d->enter($__internal_a2285d2619db40b5ce28367cea14924bb001457d8088abfbf71a7af58834253d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_a2285d2619db40b5ce28367cea14924bb001457d8088abfbf71a7af58834253d->leave($__internal_a2285d2619db40b5ce28367cea14924bb001457d8088abfbf71a7af58834253d_prof);

    }

    // line 36
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_1be72b3fdb9987f7bb949e97beece87726ec150ec0a786debac23c47bf7e4400 = $this->env->getExtension("native_profiler");
        $__internal_1be72b3fdb9987f7bb949e97beece87726ec150ec0a786debac23c47bf7e4400->enter($__internal_1be72b3fdb9987f7bb949e97beece87726ec150ec0a786debac23c47bf7e4400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo " ";
        
        $__internal_1be72b3fdb9987f7bb949e97beece87726ec150ec0a786debac23c47bf7e4400->leave($__internal_1be72b3fdb9987f7bb949e97beece87726ec150ec0a786debac23c47bf7e4400_prof);

    }

    // line 38
    public function block_foot($context, array $blocks = array())
    {
        $__internal_8f945a3d4579e4a66fc91695322a6161691a450bc9f8f655df116e3d5c01e828 = $this->env->getExtension("native_profiler");
        $__internal_8f945a3d4579e4a66fc91695322a6161691a450bc9f8f655df116e3d5c01e828->enter($__internal_8f945a3d4579e4a66fc91695322a6161691a450bc9f8f655df116e3d5c01e828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot"));

        echo " ";
        $this->loadTemplate("::foot.html.twig", "::base.html.twig", 38)->display($context);
        echo " ";
        
        $__internal_8f945a3d4579e4a66fc91695322a6161691a450bc9f8f655df116e3d5c01e828->leave($__internal_8f945a3d4579e4a66fc91695322a6161691a450bc9f8f655df116e3d5c01e828_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 38,  149 => 36,  137 => 31,  128 => 32,  126 => 31,  122 => 29,  116 => 28,  102 => 26,  90 => 14,  78 => 39,  76 => 38,  73 => 37,  71 => 36,  68 => 35,  66 => 28,  63 => 27,  61 => 26,  50 => 18,  43 => 14,  30 => 3,  28 => 2,);
    }
}
/* {# inicializamos variable _locale para está página #}*/
/* {% set _locale = app.session.get('_locale') %}*/
/* */
/* */
/* */
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* */
/* <head>*/
/* 	*/
/* 	<meta charset="UTF-8" />*/
/* 	*/
/* 	<title>{% block title %}David Hasselhoff{% endblock %}</title>*/
/* */
/* 	<link rel="icon" type="image/x-icon" href="" />*/
/* */
/* 	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* */
/* */
/* 	{% block menu %} {% include '::menu.html.twig' %} {% endblock %}*/
/* */
/* 	{% block contentBase %}*/
/* */
/* 		<div class="contain">*/
/* 			{% block content %} {% endblock %}*/
/* 		</div>*/
/* */
/* 	{% endblock %}*/
/* */
/* 	{% block javascript %} {% endblock %}*/
/* */
/* 	{% block foot %} {% include '::foot.html.twig' %} {% endblock %}*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
/* */
