<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8037715c37ac2b39d215e1a99219e41eeff2d29aed3494d021bf95913ec25429 extends Twig_Template
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
        $__internal_c24a37fcbaadbd6cdc528a40ee77554ad785ba4af3edd91c0e39d027a5467a90 = $this->env->getExtension("native_profiler");
        $__internal_c24a37fcbaadbd6cdc528a40ee77554ad785ba4af3edd91c0e39d027a5467a90->enter($__internal_c24a37fcbaadbd6cdc528a40ee77554ad785ba4af3edd91c0e39d027a5467a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c24a37fcbaadbd6cdc528a40ee77554ad785ba4af3edd91c0e39d027a5467a90->leave($__internal_c24a37fcbaadbd6cdc528a40ee77554ad785ba4af3edd91c0e39d027a5467a90_prof);

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
