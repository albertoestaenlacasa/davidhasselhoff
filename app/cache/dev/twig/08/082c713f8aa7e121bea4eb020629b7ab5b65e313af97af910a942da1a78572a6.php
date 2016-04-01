<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c46c8f2c23bcc00ea5b3c80bc7014bafc3a04f5d3e1960a58bf99795682b16f3 extends Twig_Template
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
        $__internal_16ff7ec2f774d6f7518094812e626d61df5a0d15eb6892f437e4cb24d0735648 = $this->env->getExtension("native_profiler");
        $__internal_16ff7ec2f774d6f7518094812e626d61df5a0d15eb6892f437e4cb24d0735648->enter($__internal_16ff7ec2f774d6f7518094812e626d61df5a0d15eb6892f437e4cb24d0735648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_16ff7ec2f774d6f7518094812e626d61df5a0d15eb6892f437e4cb24d0735648->leave($__internal_16ff7ec2f774d6f7518094812e626d61df5a0d15eb6892f437e4cb24d0735648_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
