<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_89413bbcb8f0620445e29d3e9be93b74c8f6ab6fdee93ab7ef1eec43dede3d28 extends Twig_Template
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
        $__internal_17b8e841424af4e8b088f9f50ae3a07c6eb916f36dc022338c9bf0e7e3470097 = $this->env->getExtension("native_profiler");
        $__internal_17b8e841424af4e8b088f9f50ae3a07c6eb916f36dc022338c9bf0e7e3470097->enter($__internal_17b8e841424af4e8b088f9f50ae3a07c6eb916f36dc022338c9bf0e7e3470097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_17b8e841424af4e8b088f9f50ae3a07c6eb916f36dc022338c9bf0e7e3470097->leave($__internal_17b8e841424af4e8b088f9f50ae3a07c6eb916f36dc022338c9bf0e7e3470097_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
