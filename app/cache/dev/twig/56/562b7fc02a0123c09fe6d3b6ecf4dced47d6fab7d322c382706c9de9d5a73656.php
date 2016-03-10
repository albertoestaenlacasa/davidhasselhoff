<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_aab684d0996ce5bc61d85031ca1e726137e8b5d549995675b14d6c263675ba4c extends Twig_Template
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
        $__internal_ae929baec56ab68050f63d36d5eef29cb236ca4d33305c935ab22b6b929ee920 = $this->env->getExtension("native_profiler");
        $__internal_ae929baec56ab68050f63d36d5eef29cb236ca4d33305c935ab22b6b929ee920->enter($__internal_ae929baec56ab68050f63d36d5eef29cb236ca4d33305c935ab22b6b929ee920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ae929baec56ab68050f63d36d5eef29cb236ca4d33305c935ab22b6b929ee920->leave($__internal_ae929baec56ab68050f63d36d5eef29cb236ca4d33305c935ab22b6b929ee920_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
