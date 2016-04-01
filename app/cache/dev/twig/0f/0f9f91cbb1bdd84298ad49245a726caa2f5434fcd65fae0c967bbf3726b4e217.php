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
        $__internal_e9355275b090d45bc659f085054305fc3768844686976badcffeeff82955925a = $this->env->getExtension("native_profiler");
        $__internal_e9355275b090d45bc659f085054305fc3768844686976badcffeeff82955925a->enter($__internal_e9355275b090d45bc659f085054305fc3768844686976badcffeeff82955925a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DH/Admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9355275b090d45bc659f085054305fc3768844686976badcffeeff82955925a->leave($__internal_e9355275b090d45bc659f085054305fc3768844686976badcffeeff82955925a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_bcf0fe505146c6f82073e8919d8e4fec009ee6694620865b32241e179f6d49f3 = $this->env->getExtension("native_profiler");
        $__internal_bcf0fe505146c6f82073e8919d8e4fec009ee6694620865b32241e179f6d49f3->enter($__internal_bcf0fe505146c6f82073e8919d8e4fec009ee6694620865b32241e179f6d49f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
\t";
        // line 5
        $this->loadTemplate("DHBundle:Admin:logout.html.twig", "@DH/Admin/index.html.twig", 5)->display($context);
        // line 6
        echo "
\t<div class=\"realContain\">
\t\tjsaklfasklfajlksdsa
\t\ta
\t</diV>

";
        
        $__internal_bcf0fe505146c6f82073e8919d8e4fec009ee6694620865b32241e179f6d49f3->leave($__internal_bcf0fe505146c6f82073e8919d8e4fec009ee6694620865b32241e179f6d49f3_prof);

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
        return array (  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* 	{% include 'DHBundle:Admin:logout.html.twig' %}*/
/* */
/* 	<div class="realContain">*/
/* 		jsaklfasklfajlksdsa*/
/* 		a*/
/* 	</diV>*/
/* */
/* {% endblock %}*/
