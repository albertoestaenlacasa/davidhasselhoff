<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_46c967e6a52420b653384bb7df5cf1739bd3b6f06dfe0eca4f460b8150032d66 extends Twig_Template
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
        $__internal_94f4c36bde88008179dd6544d6fd5a580c577f164b1137efacf6e53434627689 = $this->env->getExtension("native_profiler");
        $__internal_94f4c36bde88008179dd6544d6fd5a580c577f164b1137efacf6e53434627689->enter($__internal_94f4c36bde88008179dd6544d6fd5a580c577f164b1137efacf6e53434627689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_94f4c36bde88008179dd6544d6fd5a580c577f164b1137efacf6e53434627689->leave($__internal_94f4c36bde88008179dd6544d6fd5a580c577f164b1137efacf6e53434627689_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
