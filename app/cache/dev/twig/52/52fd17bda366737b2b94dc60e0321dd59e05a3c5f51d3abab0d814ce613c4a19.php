<?php

/* DHBundle:Admin:index.html.twig */
class __TwigTemplate_83f756daadf10b3fe630fd8af06c5393654e1759924d9775aa22a520ac9d7b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DHBundle:Admin:index.html.twig", 1);
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
        $__internal_082ad9134db1667c8f2f637d9eca8bc62fd6716d606860828f7f08b8e40b01ab = $this->env->getExtension("native_profiler");
        $__internal_082ad9134db1667c8f2f637d9eca8bc62fd6716d606860828f7f08b8e40b01ab->enter($__internal_082ad9134db1667c8f2f637d9eca8bc62fd6716d606860828f7f08b8e40b01ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DHBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_082ad9134db1667c8f2f637d9eca8bc62fd6716d606860828f7f08b8e40b01ab->leave($__internal_082ad9134db1667c8f2f637d9eca8bc62fd6716d606860828f7f08b8e40b01ab_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0fe46f654e482a4c9eaf04e80319059b639889cfca9aeb48779a9dde7f0bfcf5 = $this->env->getExtension("native_profiler");
        $__internal_0fe46f654e482a4c9eaf04e80319059b639889cfca9aeb48779a9dde7f0bfcf5->enter($__internal_0fe46f654e482a4c9eaf04e80319059b639889cfca9aeb48779a9dde7f0bfcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
\t";
        // line 5
        $this->loadTemplate("DHBundle:Admin:logout.html.twig", "DHBundle:Admin:index.html.twig", 5)->display($context);
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
        
        $__internal_0fe46f654e482a4c9eaf04e80319059b639889cfca9aeb48779a9dde7f0bfcf5->leave($__internal_0fe46f654e482a4c9eaf04e80319059b639889cfca9aeb48779a9dde7f0bfcf5_prof);

    }

    public function getTemplateName()
    {
        return "DHBundle:Admin:index.html.twig";
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
