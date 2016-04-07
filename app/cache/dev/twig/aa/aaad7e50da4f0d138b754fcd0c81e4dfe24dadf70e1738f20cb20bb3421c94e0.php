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
        $__internal_aab360f3e5464a314ccbfac8f604475eab57a85597dff529d4781d495b6b53cd = $this->env->getExtension("native_profiler");
        $__internal_aab360f3e5464a314ccbfac8f604475eab57a85597dff529d4781d495b6b53cd->enter($__internal_aab360f3e5464a314ccbfac8f604475eab57a85597dff529d4781d495b6b53cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_aab360f3e5464a314ccbfac8f604475eab57a85597dff529d4781d495b6b53cd->leave($__internal_aab360f3e5464a314ccbfac8f604475eab57a85597dff529d4781d495b6b53cd_prof);

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
