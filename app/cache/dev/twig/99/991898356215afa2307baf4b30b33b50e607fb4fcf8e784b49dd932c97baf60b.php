<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7c20f47737190dd3542293584902c2384cae7e9bc3abce306b9539b001f640ff extends Twig_Template
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
        $__internal_875fa9075423b10cbe76d5b185c499bcf0493b0b01e659470393d815047fc36d = $this->env->getExtension("native_profiler");
        $__internal_875fa9075423b10cbe76d5b185c499bcf0493b0b01e659470393d815047fc36d->enter($__internal_875fa9075423b10cbe76d5b185c499bcf0493b0b01e659470393d815047fc36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_875fa9075423b10cbe76d5b185c499bcf0493b0b01e659470393d815047fc36d->leave($__internal_875fa9075423b10cbe76d5b185c499bcf0493b0b01e659470393d815047fc36d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
