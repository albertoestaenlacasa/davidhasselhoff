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
        $__internal_ec3b1e0076067ad8053f947143e29b97fd78eccbc75dab6637fd3741dccbc31f = $this->env->getExtension("native_profiler");
        $__internal_ec3b1e0076067ad8053f947143e29b97fd78eccbc75dab6637fd3741dccbc31f->enter($__internal_ec3b1e0076067ad8053f947143e29b97fd78eccbc75dab6637fd3741dccbc31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DHBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec3b1e0076067ad8053f947143e29b97fd78eccbc75dab6637fd3741dccbc31f->leave($__internal_ec3b1e0076067ad8053f947143e29b97fd78eccbc75dab6637fd3741dccbc31f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fbea30d1d2ed8a9f6050c0643c464e6aefb42473aa804fa5eb587acc5fd5e7c6 = $this->env->getExtension("native_profiler");
        $__internal_fbea30d1d2ed8a9f6050c0643c464e6aefb42473aa804fa5eb587acc5fd5e7c6->enter($__internal_fbea30d1d2ed8a9f6050c0643c464e6aefb42473aa804fa5eb587acc5fd5e7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
\t";
        // line 5
        $this->loadTemplate("DHBundle:Admin:logout.html.twig", "DHBundle:Admin:index.html.twig", 5)->display($context);
        // line 6
        echo "
\t<div class=\"realContain\">
\t\tjsaklfasklfajlksdsa
\t\ta
\t</diV>

";
        
        $__internal_fbea30d1d2ed8a9f6050c0643c464e6aefb42473aa804fa5eb587acc5fd5e7c6->leave($__internal_fbea30d1d2ed8a9f6050c0643c464e6aefb42473aa804fa5eb587acc5fd5e7c6_prof);

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
