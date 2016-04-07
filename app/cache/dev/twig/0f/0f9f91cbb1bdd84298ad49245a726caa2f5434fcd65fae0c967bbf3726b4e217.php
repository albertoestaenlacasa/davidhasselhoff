<?php

/* @DH/Admin/index.html.twig */
class __TwigTemplate_0bbba38e20543aa59f057f46fd34e4646f4a874be01017b41a24720ba347479e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@DH/Admin/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4aab7fb280a9cf70d0fd377897f4f97da7b5965669c1cf3c477f33bb53939487 = $this->env->getExtension("native_profiler");
        $__internal_4aab7fb280a9cf70d0fd377897f4f97da7b5965669c1cf3c477f33bb53939487->enter($__internal_4aab7fb280a9cf70d0fd377897f4f97da7b5965669c1cf3c477f33bb53939487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DH/Admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aab7fb280a9cf70d0fd377897f4f97da7b5965669c1cf3c477f33bb53939487->leave($__internal_4aab7fb280a9cf70d0fd377897f4f97da7b5965669c1cf3c477f33bb53939487_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2c1cb76675325d88d9c77ea4b1641b75ec7d2942ba0559156afa135edb2b3518 = $this->env->getExtension("native_profiler");
        $__internal_2c1cb76675325d88d9c77ea4b1641b75ec7d2942ba0559156afa135edb2b3518->enter($__internal_2c1cb76675325d88d9c77ea4b1641b75ec7d2942ba0559156afa135edb2b3518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
\t";
        // line 5
        $this->loadTemplate("DHBundle:Admin:logout.html.twig", "@DH/Admin/index.html.twig", 5)->display($context);
        // line 6
        echo "
\t<div class=\"realContain\">
\t\t
\t\t<ul>
\t\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("dh_admin_news");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_NEWS", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "</a></li>
\t\t\t<li>";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_MOVIES", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "</li>
\t\t\t<li>";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_MUSIC", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "</li>
\t\t\t<li>";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_GLOSARY", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "</li>
\t\t</ul>

\t</diV>

";
        
        $__internal_2c1cb76675325d88d9c77ea4b1641b75ec7d2942ba0559156afa135edb2b3518->leave($__internal_2c1cb76675325d88d9c77ea4b1641b75ec7d2942ba0559156afa135edb2b3518_prof);

    }

    public function getTemplateName()
    {
        return "@DH/Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  61 => 12,  57 => 11,  51 => 10,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* 	{% include 'DHBundle:Admin:logout.html.twig' %}*/
/* */
/* 	<div class="realContain">*/
/* 		*/
/* 		<ul>*/
/* 			<li><a href="{{ url('dh_admin_news') }}">{% trans from "menu" into _locale %} STR_NEWS {% endtrans %}</a></li>*/
/* 			<li>{% trans from "menu" into _locale %} STR_MOVIES {% endtrans %}</li>*/
/* 			<li>{% trans from "menu" into _locale %} STR_MUSIC {% endtrans %}</li>*/
/* 			<li>{% trans from "menu" into _locale %} STR_GLOSARY {% endtrans %}</li>*/
/* 		</ul>*/
/* */
/* 	</diV>*/
/* */
/* {% endblock %}*/
