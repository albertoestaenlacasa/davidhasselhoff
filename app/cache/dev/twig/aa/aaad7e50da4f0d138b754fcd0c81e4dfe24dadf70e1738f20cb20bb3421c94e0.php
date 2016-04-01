<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4cc8fcf377185bd856992862ecf9dcfc208c6e24e2de03639f2c1a04e568ad0c extends Twig_Template
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
        $__internal_63fd66a0723f53b0392a90e791af57c4acb6224dadf02b695b32d53d29d7fca9 = $this->env->getExtension("native_profiler");
        $__internal_63fd66a0723f53b0392a90e791af57c4acb6224dadf02b695b32d53d29d7fca9->enter($__internal_63fd66a0723f53b0392a90e791af57c4acb6224dadf02b695b32d53d29d7fca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_63fd66a0723f53b0392a90e791af57c4acb6224dadf02b695b32d53d29d7fca9->leave($__internal_63fd66a0723f53b0392a90e791af57c4acb6224dadf02b695b32d53d29d7fca9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
