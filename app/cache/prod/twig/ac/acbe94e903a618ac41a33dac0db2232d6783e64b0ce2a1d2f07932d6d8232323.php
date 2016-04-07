<?php

/* @DH/Admin/index.html.twig */
class __TwigTemplate_296f2978c7e810f0958168fb5467d70e36d0a3ea15fafca1c8b595edd7255546 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_NEWS", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo "</a></li>
\t\t\t<li>";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_MOVIES", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo "</li>
\t\t\t<li>";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_MUSIC", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo "</li>
\t\t\t<li>";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_GLOSARY", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo "</li>
\t\t</ul>

\t</diV>

";
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
        return array (  56 => 13,  52 => 12,  48 => 11,  42 => 10,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
