<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2c5e85c633cfbc0c0bd8f6d23684f1bb7f3e60186a49537976b1426aba7b2e9c extends Twig_Template
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
        $__internal_36f7760c9b47e2d62770daa94bcba0ebfc2b357d92fa197b0c97aea0af218dda = $this->env->getExtension("native_profiler");
        $__internal_36f7760c9b47e2d62770daa94bcba0ebfc2b357d92fa197b0c97aea0af218dda->enter($__internal_36f7760c9b47e2d62770daa94bcba0ebfc2b357d92fa197b0c97aea0af218dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_36f7760c9b47e2d62770daa94bcba0ebfc2b357d92fa197b0c97aea0af218dda->leave($__internal_36f7760c9b47e2d62770daa94bcba0ebfc2b357d92fa197b0c97aea0af218dda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
