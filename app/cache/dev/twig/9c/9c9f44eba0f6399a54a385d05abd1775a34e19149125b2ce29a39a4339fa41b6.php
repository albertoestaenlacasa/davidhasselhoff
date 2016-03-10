<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_961837d81fa5cd606a953e6cbc3b3d33a913553d59ffc6df3c93a05919ce5832 extends Twig_Template
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
        $__internal_c9e3044a8b3f8fd4f9a21ae49853ea23f606ef4012cfdc98a13ba26c5d4c3b09 = $this->env->getExtension("native_profiler");
        $__internal_c9e3044a8b3f8fd4f9a21ae49853ea23f606ef4012cfdc98a13ba26c5d4c3b09->enter($__internal_c9e3044a8b3f8fd4f9a21ae49853ea23f606ef4012cfdc98a13ba26c5d4c3b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c9e3044a8b3f8fd4f9a21ae49853ea23f606ef4012cfdc98a13ba26c5d4c3b09->leave($__internal_c9e3044a8b3f8fd4f9a21ae49853ea23f606ef4012cfdc98a13ba26c5d4c3b09_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
