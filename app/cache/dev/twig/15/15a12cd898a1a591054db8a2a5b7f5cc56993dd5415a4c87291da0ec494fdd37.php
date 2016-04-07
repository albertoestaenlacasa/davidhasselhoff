<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5780275db14980ef60f4c4c361eae4632ee67e7b33fc7632eb4d3bb868cdb5d4 extends Twig_Template
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
        $__internal_3a18c0db74cd5637aebf84fd72488fbd31301090a8fee773b6848802b3939157 = $this->env->getExtension("native_profiler");
        $__internal_3a18c0db74cd5637aebf84fd72488fbd31301090a8fee773b6848802b3939157->enter($__internal_3a18c0db74cd5637aebf84fd72488fbd31301090a8fee773b6848802b3939157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3a18c0db74cd5637aebf84fd72488fbd31301090a8fee773b6848802b3939157->leave($__internal_3a18c0db74cd5637aebf84fd72488fbd31301090a8fee773b6848802b3939157_prof);

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
