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
        $__internal_9b96d21ffd0c3866b1fa2309ed99c55855d401b5222f4b3db3c3f78f4fa56c23 = $this->env->getExtension("native_profiler");
        $__internal_9b96d21ffd0c3866b1fa2309ed99c55855d401b5222f4b3db3c3f78f4fa56c23->enter($__internal_9b96d21ffd0c3866b1fa2309ed99c55855d401b5222f4b3db3c3f78f4fa56c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9b96d21ffd0c3866b1fa2309ed99c55855d401b5222f4b3db3c3f78f4fa56c23->leave($__internal_9b96d21ffd0c3866b1fa2309ed99c55855d401b5222f4b3db3c3f78f4fa56c23_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_679ebe1e3564e2726d4aa7f65b459fd56bf5f74a0ac3cdcc1260c9fd7694e90e = $this->env->getExtension("native_profiler");
        $__internal_679ebe1e3564e2726d4aa7f65b459fd56bf5f74a0ac3cdcc1260c9fd7694e90e->enter($__internal_679ebe1e3564e2726d4aa7f65b459fd56bf5f74a0ac3cdcc1260c9fd7694e90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "David Hasselhoff";
        
        $__internal_679ebe1e3564e2726d4aa7f65b459fd56bf5f74a0ac3cdcc1260c9fd7694e90e->leave($__internal_679ebe1e3564e2726d4aa7f65b459fd56bf5f74a0ac3cdcc1260c9fd7694e90e_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b050e144190df9e76fb9c3582c304c17ebe2802d7041065a8a804961194eb36 = $this->env->getExtension("native_profiler");
        $__internal_6b050e144190df9e76fb9c3582c304c17ebe2802d7041065a8a804961194eb36->enter($__internal_6b050e144190df9e76fb9c3582c304c17ebe2802d7041065a8a804961194eb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        echo " ";
        $this->loadTemplate("::menu.html.twig", "::base.html.twig", 28)->display($context);
        echo " ";
        
        $__internal_6b050e144190df9e76fb9c3582c304c17ebe2802d7041065a8a804961194eb36->leave($__internal_6b050e144190df9e76fb9c3582c304c17ebe2802d7041065a8a804961194eb36_prof);

    }

    // line 30
    public function block_contentBase($context, array $blocks = array())
    {
        $__internal_52ec2100d4812d80b8410515f0d17dd5e3ac355cd3ba62e0d210f6db1679c155 = $this->env->getExtension("native_profiler");
        $__internal_52ec2100d4812d80b8410515f0d17dd5e3ac355cd3ba62e0d210f6db1679c155->enter($__internal_52ec2100d4812d80b8410515f0d17dd5e3ac355cd3ba62e0d210f6db1679c155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBase"));

        // line 31
        echo "
\t\t<div class=\"contain\">
\t\t\t";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "\t\t</div>

\t";
        
        $__internal_52ec2100d4812d80b8410515f0d17dd5e3ac355cd3ba62e0d210f6db1679c155->leave($__internal_52ec2100d4812d80b8410515f0d17dd5e3ac355cd3ba62e0d210f6db1679c155_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_326f1035dc23798de4acf48989c464e4a828ddc6ec4565f86429ce3ba3f6649d = $this->env->getExtension("native_profiler");
        $__internal_326f1035dc23798de4acf48989c464e4a828ddc6ec4565f86429ce3ba3f6649d->enter($__internal_326f1035dc23798de4acf48989c464e4a828ddc6ec4565f86429ce3ba3f6649d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_326f1035dc23798de4acf48989c464e4a828ddc6ec4565f86429ce3ba3f6649d->leave($__internal_326f1035dc23798de4acf48989c464e4a828ddc6ec4565f86429ce3ba3f6649d_prof);

    }

    // line 38
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_7a823e37159345990ea06baa65270600d543294605cdc2e6b9256117582927c1 = $this->env->getExtension("native_profiler");
        $__internal_7a823e37159345990ea06baa65270600d543294605cdc2e6b9256117582927c1->enter($__internal_7a823e37159345990ea06baa65270600d543294605cdc2e6b9256117582927c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo " ";
        
        $__internal_7a823e37159345990ea06baa65270600d543294605cdc2e6b9256117582927c1->leave($__internal_7a823e37159345990ea06baa65270600d543294605cdc2e6b9256117582927c1_prof);

    }

    // line 40
    public function block_foot($context, array $blocks = array())
    {
        $__internal_863b3a8a2f2bdab2fd630c81e0a07c9455f1d2e907c0e463956b729ac90487df = $this->env->getExtension("native_profiler");
        $__internal_863b3a8a2f2bdab2fd630c81e0a07c9455f1d2e907c0e463956b729ac90487df->enter($__internal_863b3a8a2f2bdab2fd630c81e0a07c9455f1d2e907c0e463956b729ac90487df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot"));

        echo " ";
        $this->loadTemplate("::foot.html.twig", "::base.html.twig", 40)->display($context);
        echo " ";
        
        $__internal_863b3a8a2f2bdab2fd630c81e0a07c9455f1d2e907c0e463956b729ac90487df->leave($__internal_863b3a8a2f2bdab2fd630c81e0a07c9455f1d2e907c0e463956b729ac90487df_prof);

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
        return array (  166 => 40,  154 => 38,  142 => 33,  133 => 34,  131 => 33,  127 => 31,  121 => 30,  107 => 28,  95 => 14,  83 => 41,  81 => 40,  78 => 39,  76 => 38,  73 => 37,  71 => 30,  68 => 29,  66 => 28,  55 => 20,  50 => 18,  43 => 14,  30 => 3,  28 => 2,);
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
