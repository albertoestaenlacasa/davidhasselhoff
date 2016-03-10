<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_055ccee31253863804a5f19d018896998a4f9458f6e6e9f279fa4f319c3e60d8 extends Twig_Template
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
        $__internal_f5b1d403a362235045c7fb2c06859f05fec27ad65e83803a043f160eff7a895e = $this->env->getExtension("native_profiler");
        $__internal_f5b1d403a362235045c7fb2c06859f05fec27ad65e83803a043f160eff7a895e->enter($__internal_f5b1d403a362235045c7fb2c06859f05fec27ad65e83803a043f160eff7a895e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f5b1d403a362235045c7fb2c06859f05fec27ad65e83803a043f160eff7a895e->leave($__internal_f5b1d403a362235045c7fb2c06859f05fec27ad65e83803a043f160eff7a895e_prof);

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
