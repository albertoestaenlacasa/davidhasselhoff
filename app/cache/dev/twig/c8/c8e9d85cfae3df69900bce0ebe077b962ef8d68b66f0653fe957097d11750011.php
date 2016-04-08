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
        $__internal_bd0e98c69b29d2a4341c628f76e7e9f2dd45c93e4df8ee03d217cd8cfbee1b97 = $this->env->getExtension("native_profiler");
        $__internal_bd0e98c69b29d2a4341c628f76e7e9f2dd45c93e4df8ee03d217cd8cfbee1b97->enter($__internal_bd0e98c69b29d2a4341c628f76e7e9f2dd45c93e4df8ee03d217cd8cfbee1b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_bd0e98c69b29d2a4341c628f76e7e9f2dd45c93e4df8ee03d217cd8cfbee1b97->leave($__internal_bd0e98c69b29d2a4341c628f76e7e9f2dd45c93e4df8ee03d217cd8cfbee1b97_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_e39a673e16af1230551866a954b40dcfeb15d1032efd1b34b175aaa66667f4df = $this->env->getExtension("native_profiler");
        $__internal_e39a673e16af1230551866a954b40dcfeb15d1032efd1b34b175aaa66667f4df->enter($__internal_e39a673e16af1230551866a954b40dcfeb15d1032efd1b34b175aaa66667f4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "David Hasselhoff";
        
        $__internal_e39a673e16af1230551866a954b40dcfeb15d1032efd1b34b175aaa66667f4df->leave($__internal_e39a673e16af1230551866a954b40dcfeb15d1032efd1b34b175aaa66667f4df_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d6cb04c647a3b1bdce8ace5f9959f861b336348c57dcba26759d117c04b6876b = $this->env->getExtension("native_profiler");
        $__internal_d6cb04c647a3b1bdce8ace5f9959f861b336348c57dcba26759d117c04b6876b->enter($__internal_d6cb04c647a3b1bdce8ace5f9959f861b336348c57dcba26759d117c04b6876b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        echo " ";
        $this->loadTemplate("::menu.html.twig", "::base.html.twig", 28)->display($context);
        echo " ";
        
        $__internal_d6cb04c647a3b1bdce8ace5f9959f861b336348c57dcba26759d117c04b6876b->leave($__internal_d6cb04c647a3b1bdce8ace5f9959f861b336348c57dcba26759d117c04b6876b_prof);

    }

    // line 30
    public function block_contentBase($context, array $blocks = array())
    {
        $__internal_f617207231ffedde6b4043799a94907a3b6814c57c5e8eb89ab619458597a88a = $this->env->getExtension("native_profiler");
        $__internal_f617207231ffedde6b4043799a94907a3b6814c57c5e8eb89ab619458597a88a->enter($__internal_f617207231ffedde6b4043799a94907a3b6814c57c5e8eb89ab619458597a88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBase"));

        // line 31
        echo "
\t\t<div class=\"contain\">
\t\t\t";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "\t\t</div>

\t";
        
        $__internal_f617207231ffedde6b4043799a94907a3b6814c57c5e8eb89ab619458597a88a->leave($__internal_f617207231ffedde6b4043799a94907a3b6814c57c5e8eb89ab619458597a88a_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_18c6a2b2695cce4b763131211f7df23195dbe1b2a5b676699ef50d94a656f17f = $this->env->getExtension("native_profiler");
        $__internal_18c6a2b2695cce4b763131211f7df23195dbe1b2a5b676699ef50d94a656f17f->enter($__internal_18c6a2b2695cce4b763131211f7df23195dbe1b2a5b676699ef50d94a656f17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_18c6a2b2695cce4b763131211f7df23195dbe1b2a5b676699ef50d94a656f17f->leave($__internal_18c6a2b2695cce4b763131211f7df23195dbe1b2a5b676699ef50d94a656f17f_prof);

    }

    // line 38
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_94309e4f886524c77c4741bee73bba2581b938db36e5650c2b2064187b1257d7 = $this->env->getExtension("native_profiler");
        $__internal_94309e4f886524c77c4741bee73bba2581b938db36e5650c2b2064187b1257d7->enter($__internal_94309e4f886524c77c4741bee73bba2581b938db36e5650c2b2064187b1257d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo " ";
        
        $__internal_94309e4f886524c77c4741bee73bba2581b938db36e5650c2b2064187b1257d7->leave($__internal_94309e4f886524c77c4741bee73bba2581b938db36e5650c2b2064187b1257d7_prof);

    }

    // line 40
    public function block_foot($context, array $blocks = array())
    {
        $__internal_0b75bdd884ac895c67ef9d9c8e774858b524bc49aa022531352d316cf25d36c7 = $this->env->getExtension("native_profiler");
        $__internal_0b75bdd884ac895c67ef9d9c8e774858b524bc49aa022531352d316cf25d36c7->enter($__internal_0b75bdd884ac895c67ef9d9c8e774858b524bc49aa022531352d316cf25d36c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot"));

        echo " ";
        $this->loadTemplate("::foot.html.twig", "::base.html.twig", 40)->display($context);
        echo " ";
        
        $__internal_0b75bdd884ac895c67ef9d9c8e774858b524bc49aa022531352d316cf25d36c7->leave($__internal_0b75bdd884ac895c67ef9d9c8e774858b524bc49aa022531352d316cf25d36c7_prof);

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
