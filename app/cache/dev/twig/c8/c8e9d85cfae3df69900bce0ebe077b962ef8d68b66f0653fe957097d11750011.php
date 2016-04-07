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
        $__internal_f489370804d1aac3062f714e180a8dc69b8f4c22e9736cbe6384e9a449ba9b6c = $this->env->getExtension("native_profiler");
        $__internal_f489370804d1aac3062f714e180a8dc69b8f4c22e9736cbe6384e9a449ba9b6c->enter($__internal_f489370804d1aac3062f714e180a8dc69b8f4c22e9736cbe6384e9a449ba9b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f489370804d1aac3062f714e180a8dc69b8f4c22e9736cbe6384e9a449ba9b6c->leave($__internal_f489370804d1aac3062f714e180a8dc69b8f4c22e9736cbe6384e9a449ba9b6c_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_0207e08c2f0b72c06f374eb60f71bef978e3140fd5a2aafa6cbf4230cdd0e072 = $this->env->getExtension("native_profiler");
        $__internal_0207e08c2f0b72c06f374eb60f71bef978e3140fd5a2aafa6cbf4230cdd0e072->enter($__internal_0207e08c2f0b72c06f374eb60f71bef978e3140fd5a2aafa6cbf4230cdd0e072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "David Hasselhoff";
        
        $__internal_0207e08c2f0b72c06f374eb60f71bef978e3140fd5a2aafa6cbf4230cdd0e072->leave($__internal_0207e08c2f0b72c06f374eb60f71bef978e3140fd5a2aafa6cbf4230cdd0e072_prof);

    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        $__internal_89c4671c8c3d225dbb1ee0130ce82140781daa298fc0116d91a1f6c46a79289f = $this->env->getExtension("native_profiler");
        $__internal_89c4671c8c3d225dbb1ee0130ce82140781daa298fc0116d91a1f6c46a79289f->enter($__internal_89c4671c8c3d225dbb1ee0130ce82140781daa298fc0116d91a1f6c46a79289f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        echo " ";
        $this->loadTemplate("::menu.html.twig", "::base.html.twig", 26)->display($context);
        echo " ";
        
        $__internal_89c4671c8c3d225dbb1ee0130ce82140781daa298fc0116d91a1f6c46a79289f->leave($__internal_89c4671c8c3d225dbb1ee0130ce82140781daa298fc0116d91a1f6c46a79289f_prof);

    }

    // line 28
    public function block_contentBase($context, array $blocks = array())
    {
        $__internal_9cc115b976a1491147758971322bd4f186c5a996f9ebd65c93177357f326a2b4 = $this->env->getExtension("native_profiler");
        $__internal_9cc115b976a1491147758971322bd4f186c5a996f9ebd65c93177357f326a2b4->enter($__internal_9cc115b976a1491147758971322bd4f186c5a996f9ebd65c93177357f326a2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBase"));

        // line 29
        echo "
\t\t<div class=\"contain\">
\t\t\t";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "\t\t</div>

\t";
        
        $__internal_9cc115b976a1491147758971322bd4f186c5a996f9ebd65c93177357f326a2b4->leave($__internal_9cc115b976a1491147758971322bd4f186c5a996f9ebd65c93177357f326a2b4_prof);

    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        $__internal_6bebd66a1c6bc55deec55b368cfa9115501a878ec9a801dadc11a32254b8a1b4 = $this->env->getExtension("native_profiler");
        $__internal_6bebd66a1c6bc55deec55b368cfa9115501a878ec9a801dadc11a32254b8a1b4->enter($__internal_6bebd66a1c6bc55deec55b368cfa9115501a878ec9a801dadc11a32254b8a1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_6bebd66a1c6bc55deec55b368cfa9115501a878ec9a801dadc11a32254b8a1b4->leave($__internal_6bebd66a1c6bc55deec55b368cfa9115501a878ec9a801dadc11a32254b8a1b4_prof);

    }

    // line 36
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_28e242faa0fe2702ccbe07c73b6940f814d64ecfde66e704498d04759e876d8b = $this->env->getExtension("native_profiler");
        $__internal_28e242faa0fe2702ccbe07c73b6940f814d64ecfde66e704498d04759e876d8b->enter($__internal_28e242faa0fe2702ccbe07c73b6940f814d64ecfde66e704498d04759e876d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo " ";
        
        $__internal_28e242faa0fe2702ccbe07c73b6940f814d64ecfde66e704498d04759e876d8b->leave($__internal_28e242faa0fe2702ccbe07c73b6940f814d64ecfde66e704498d04759e876d8b_prof);

    }

    // line 38
    public function block_foot($context, array $blocks = array())
    {
        $__internal_7260b4dcf61320684b0823037c56f12b4f4ca4dfffade050d73d18ec35576072 = $this->env->getExtension("native_profiler");
        $__internal_7260b4dcf61320684b0823037c56f12b4f4ca4dfffade050d73d18ec35576072->enter($__internal_7260b4dcf61320684b0823037c56f12b4f4ca4dfffade050d73d18ec35576072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot"));

        echo " ";
        $this->loadTemplate("::foot.html.twig", "::base.html.twig", 38)->display($context);
        echo " ";
        
        $__internal_7260b4dcf61320684b0823037c56f12b4f4ca4dfffade050d73d18ec35576072->leave($__internal_7260b4dcf61320684b0823037c56f12b4f4ca4dfffade050d73d18ec35576072_prof);

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
