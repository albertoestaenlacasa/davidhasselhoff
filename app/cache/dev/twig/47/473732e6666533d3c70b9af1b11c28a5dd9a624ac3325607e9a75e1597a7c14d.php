<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_69e7f78fc47462b10568659106631643cd5fdbd641692aeb3be42b64a8c23cb1 extends Twig_Template
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
        $__internal_437c8ffc949518eafe932add1fc61e22a1d17c2f6c62e087b443c142c1515bc7 = $this->env->getExtension("native_profiler");
        $__internal_437c8ffc949518eafe932add1fc61e22a1d17c2f6c62e087b443c142c1515bc7->enter($__internal_437c8ffc949518eafe932add1fc61e22a1d17c2f6c62e087b443c142c1515bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_437c8ffc949518eafe932add1fc61e22a1d17c2f6c62e087b443c142c1515bc7->leave($__internal_437c8ffc949518eafe932add1fc61e22a1d17c2f6c62e087b443c142c1515bc7_prof);

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
