<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_99e0b75c20af0c1b85845caed854ef9c2208c12179f6e9acfc9d24824dcb1a11 extends Twig_Template
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
        $__internal_638d0231f41c831b211d859bf0fc115243962ecb111512b2cb2d6e71e9b08067 = $this->env->getExtension("native_profiler");
        $__internal_638d0231f41c831b211d859bf0fc115243962ecb111512b2cb2d6e71e9b08067->enter($__internal_638d0231f41c831b211d859bf0fc115243962ecb111512b2cb2d6e71e9b08067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_638d0231f41c831b211d859bf0fc115243962ecb111512b2cb2d6e71e9b08067->leave($__internal_638d0231f41c831b211d859bf0fc115243962ecb111512b2cb2d6e71e9b08067_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
