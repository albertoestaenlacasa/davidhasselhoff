<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_e33c4521dfde916cae76fde1e96d8eef2ac2250532151fb16e8082af58d63535 extends Twig_Template
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
        $__internal_c5ae01e8f69b663306a002e47d16a9d1135a510b951fd136c222036e6af72389 = $this->env->getExtension("native_profiler");
        $__internal_c5ae01e8f69b663306a002e47d16a9d1135a510b951fd136c222036e6af72389->enter($__internal_c5ae01e8f69b663306a002e47d16a9d1135a510b951fd136c222036e6af72389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c5ae01e8f69b663306a002e47d16a9d1135a510b951fd136c222036e6af72389->leave($__internal_c5ae01e8f69b663306a002e47d16a9d1135a510b951fd136c222036e6af72389_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
