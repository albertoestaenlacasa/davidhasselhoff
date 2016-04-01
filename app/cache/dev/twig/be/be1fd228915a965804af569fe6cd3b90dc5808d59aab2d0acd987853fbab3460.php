<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_cdef64ce680a8851f73748bea9f34585d15bd087a8154bc9c88546598ad9f01f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76515918c4bab0040c851ada8b3c99d88765a7e694114d760c1bdc9143478aaa = $this->env->getExtension("native_profiler");
        $__internal_76515918c4bab0040c851ada8b3c99d88765a7e694114d760c1bdc9143478aaa->enter($__internal_76515918c4bab0040c851ada8b3c99d88765a7e694114d760c1bdc9143478aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_76515918c4bab0040c851ada8b3c99d88765a7e694114d760c1bdc9143478aaa->leave($__internal_76515918c4bab0040c851ada8b3c99d88765a7e694114d760c1bdc9143478aaa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
