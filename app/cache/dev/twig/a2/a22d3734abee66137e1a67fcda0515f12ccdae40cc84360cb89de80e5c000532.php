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
        $__internal_5ada569e33282e9772a0e11dd00d077149ca0d18547b9b48a3a269da5a2c84f7 = $this->env->getExtension("native_profiler");
        $__internal_5ada569e33282e9772a0e11dd00d077149ca0d18547b9b48a3a269da5a2c84f7->enter($__internal_5ada569e33282e9772a0e11dd00d077149ca0d18547b9b48a3a269da5a2c84f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5ada569e33282e9772a0e11dd00d077149ca0d18547b9b48a3a269da5a2c84f7->leave($__internal_5ada569e33282e9772a0e11dd00d077149ca0d18547b9b48a3a269da5a2c84f7_prof);

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
