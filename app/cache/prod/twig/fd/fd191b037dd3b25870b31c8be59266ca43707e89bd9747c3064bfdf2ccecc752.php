<?php

/* ::base.html.twig */
class __TwigTemplate_674ac0223f12826793a94e927f578dc44f754d40ad5ed30b0ef030ab373b0a3a extends Twig_Template
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
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "David Hasselhoff";
    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        echo " ";
        $this->loadTemplate("::menu.html.twig", "::base.html.twig", 26)->display($context);
        echo " ";
    }

    // line 28
    public function block_contentBase($context, array $blocks = array())
    {
        // line 29
        echo "
\t\t<div class=\"contain\">
\t\t\t";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "\t\t</div>

\t";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 36
    public function block_javascript($context, array $blocks = array())
    {
        echo " ";
    }

    // line 38
    public function block_foot($context, array $blocks = array())
    {
        echo " ";
        $this->loadTemplate("::foot.html.twig", "::base.html.twig", 38)->display($context);
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
        return array (  125 => 38,  119 => 36,  113 => 31,  107 => 32,  105 => 31,  101 => 29,  98 => 28,  90 => 26,  84 => 14,  75 => 39,  73 => 38,  70 => 37,  68 => 36,  65 => 35,  63 => 28,  60 => 27,  58 => 26,  47 => 18,  40 => 14,  27 => 3,  25 => 2,);
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
