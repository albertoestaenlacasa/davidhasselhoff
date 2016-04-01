<?php

/* base.html.twig */
class __TwigTemplate_ce9c40c48478c65f85c166e2dc21114526d261558e5e214f8841bd68e0038026 extends Twig_Template
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
        $__internal_7ca2dba6a74b9caeba928c53d3c6caba00eade278bfef631e2103ef8a103839d = $this->env->getExtension("native_profiler");
        $__internal_7ca2dba6a74b9caeba928c53d3c6caba00eade278bfef631e2103ef8a103839d->enter($__internal_7ca2dba6a74b9caeba928c53d3c6caba00eade278bfef631e2103ef8a103839d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7ca2dba6a74b9caeba928c53d3c6caba00eade278bfef631e2103ef8a103839d->leave($__internal_7ca2dba6a74b9caeba928c53d3c6caba00eade278bfef631e2103ef8a103839d_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa3afa40b9aadb1bf6b470dc5aec24b043b0ba72dab02538bcf905f7f1da0cf6 = $this->env->getExtension("native_profiler");
        $__internal_aa3afa40b9aadb1bf6b470dc5aec24b043b0ba72dab02538bcf905f7f1da0cf6->enter($__internal_aa3afa40b9aadb1bf6b470dc5aec24b043b0ba72dab02538bcf905f7f1da0cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "David Hasselhoff";
        
        $__internal_aa3afa40b9aadb1bf6b470dc5aec24b043b0ba72dab02538bcf905f7f1da0cf6->leave($__internal_aa3afa40b9aadb1bf6b470dc5aec24b043b0ba72dab02538bcf905f7f1da0cf6_prof);

    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c24aaf3ca27bdde84fdf96c7942f29cda1ed47aa6fa7f062d8cda9fd089db8e = $this->env->getExtension("native_profiler");
        $__internal_8c24aaf3ca27bdde84fdf96c7942f29cda1ed47aa6fa7f062d8cda9fd089db8e->enter($__internal_8c24aaf3ca27bdde84fdf96c7942f29cda1ed47aa6fa7f062d8cda9fd089db8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        echo " ";
        $this->loadTemplate("::menu.html.twig", "base.html.twig", 26)->display($context);
        echo " ";
        
        $__internal_8c24aaf3ca27bdde84fdf96c7942f29cda1ed47aa6fa7f062d8cda9fd089db8e->leave($__internal_8c24aaf3ca27bdde84fdf96c7942f29cda1ed47aa6fa7f062d8cda9fd089db8e_prof);

    }

    // line 28
    public function block_contentBase($context, array $blocks = array())
    {
        $__internal_9234e75b0d48d40dd55ae539a3d4c46c3e2f5599b5cd1af921ab5d1b63c796ec = $this->env->getExtension("native_profiler");
        $__internal_9234e75b0d48d40dd55ae539a3d4c46c3e2f5599b5cd1af921ab5d1b63c796ec->enter($__internal_9234e75b0d48d40dd55ae539a3d4c46c3e2f5599b5cd1af921ab5d1b63c796ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBase"));

        // line 29
        echo "
\t\t<div class=\"contain\">
\t\t\t";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "\t\t</div>

\t";
        
        $__internal_9234e75b0d48d40dd55ae539a3d4c46c3e2f5599b5cd1af921ab5d1b63c796ec->leave($__internal_9234e75b0d48d40dd55ae539a3d4c46c3e2f5599b5cd1af921ab5d1b63c796ec_prof);

    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        $__internal_0dbd9bb0715524ea3e71a09665b02a50a6b98b3e1747c9d42d7a70b6732a117b = $this->env->getExtension("native_profiler");
        $__internal_0dbd9bb0715524ea3e71a09665b02a50a6b98b3e1747c9d42d7a70b6732a117b->enter($__internal_0dbd9bb0715524ea3e71a09665b02a50a6b98b3e1747c9d42d7a70b6732a117b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_0dbd9bb0715524ea3e71a09665b02a50a6b98b3e1747c9d42d7a70b6732a117b->leave($__internal_0dbd9bb0715524ea3e71a09665b02a50a6b98b3e1747c9d42d7a70b6732a117b_prof);

    }

    // line 36
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_1f5b449ae07b88ef7678c80c0702260e7a773024f2533ff91b9fd2d9d7e5cb25 = $this->env->getExtension("native_profiler");
        $__internal_1f5b449ae07b88ef7678c80c0702260e7a773024f2533ff91b9fd2d9d7e5cb25->enter($__internal_1f5b449ae07b88ef7678c80c0702260e7a773024f2533ff91b9fd2d9d7e5cb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo " ";
        
        $__internal_1f5b449ae07b88ef7678c80c0702260e7a773024f2533ff91b9fd2d9d7e5cb25->leave($__internal_1f5b449ae07b88ef7678c80c0702260e7a773024f2533ff91b9fd2d9d7e5cb25_prof);

    }

    // line 38
    public function block_foot($context, array $blocks = array())
    {
        $__internal_4063251e6021bbebfa7ca249ecf56e998c20ed902034c5114d9a54fa96adddaf = $this->env->getExtension("native_profiler");
        $__internal_4063251e6021bbebfa7ca249ecf56e998c20ed902034c5114d9a54fa96adddaf->enter($__internal_4063251e6021bbebfa7ca249ecf56e998c20ed902034c5114d9a54fa96adddaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot"));

        echo " ";
        $this->loadTemplate("::foot.html.twig", "base.html.twig", 38)->display($context);
        echo " ";
        
        $__internal_4063251e6021bbebfa7ca249ecf56e998c20ed902034c5114d9a54fa96adddaf->leave($__internal_4063251e6021bbebfa7ca249ecf56e998c20ed902034c5114d9a54fa96adddaf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
