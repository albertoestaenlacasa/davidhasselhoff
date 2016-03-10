<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_9df36d8c8cc464317d4697437fb6ae4c7f6cf5f35ee249a7916be73baa6ac7b4 extends Twig_Template
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
        $__internal_a17ebd217fbd90eca16f11f843cc2e58430061b36f8df1841b7e10feb3574c78 = $this->env->getExtension("native_profiler");
        $__internal_a17ebd217fbd90eca16f11f843cc2e58430061b36f8df1841b7e10feb3574c78->enter($__internal_a17ebd217fbd90eca16f11f843cc2e58430061b36f8df1841b7e10feb3574c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a17ebd217fbd90eca16f11f843cc2e58430061b36f8df1841b7e10feb3574c78->leave($__internal_a17ebd217fbd90eca16f11f843cc2e58430061b36f8df1841b7e10feb3574c78_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
