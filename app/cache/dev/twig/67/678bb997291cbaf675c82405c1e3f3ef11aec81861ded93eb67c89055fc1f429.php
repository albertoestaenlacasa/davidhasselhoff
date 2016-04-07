<?php

/* ::base.html.twig */
class __TwigTemplate_5dea9182ea4429a75ffd35bb99389ad711023f19e7f03992625d70a07e06d44d extends Twig_Template
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
        // line 2
        $context["_locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "_locale"), "method");
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

\t<link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\">

</head>

<body>



\t";
        // line 28
        $this->displayBlock('menu', $context, $blocks);
        // line 29
        echo "
\t";
        // line 30
        $this->displayBlock('contentBase', $context, $blocks);
        // line 37
        echo "
\t";
        // line 38
        $this->displayBlock('javascript', $context, $blocks);
        // line 39
        echo "
\t";
        // line 40
        $this->displayBlock('foot', $context, $blocks);
        // line 41
        echo "
</body>

</html>

";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "David Hasselhoff";
    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        echo " ";
        $this->loadTemplate("::menu.html.twig", "::base.html.twig", 28)->display($context);
        echo " ";
    }

    // line 30
    public function block_contentBase($context, array $blocks = array())
    {
        // line 31
        echo "
\t\t<div class=\"contain\">
\t\t\t";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "\t\t</div>

\t";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 38
    public function block_javascript($context, array $blocks = array())
    {
        echo " ";
    }

    // line 40
    public function block_foot($context, array $blocks = array())
    {
        echo " ";
        $this->loadTemplate("::foot.html.twig", "::base.html.twig", 40)->display($context);
        echo " ";
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
        return array (  130 => 40,  124 => 38,  118 => 33,  112 => 34,  110 => 33,  106 => 31,  103 => 30,  95 => 28,  89 => 14,  80 => 41,  78 => 40,  75 => 39,  73 => 38,  70 => 37,  68 => 30,  65 => 29,  63 => 28,  52 => 20,  47 => 18,  40 => 14,  27 => 3,  25 => 2,);
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
/* 	<link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">*/
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
