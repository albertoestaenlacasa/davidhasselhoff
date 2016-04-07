<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_af8e4e1f9235763285e0f47a865affaa69404a55ebd50e0211228fe0d6b83e85 extends Twig_Template
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
        $__internal_cef638010b4ca010aa6329592f16d80daca5806639a6213d2e320cf9c4758a05 = $this->env->getExtension("native_profiler");
        $__internal_cef638010b4ca010aa6329592f16d80daca5806639a6213d2e320cf9c4758a05->enter($__internal_cef638010b4ca010aa6329592f16d80daca5806639a6213d2e320cf9c4758a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cef638010b4ca010aa6329592f16d80daca5806639a6213d2e320cf9c4758a05->leave($__internal_cef638010b4ca010aa6329592f16d80daca5806639a6213d2e320cf9c4758a05_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
