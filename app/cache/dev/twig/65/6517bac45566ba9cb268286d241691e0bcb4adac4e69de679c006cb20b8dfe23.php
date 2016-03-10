<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ab70250c1465ce2e6bf84c2af6117838a8c3b4f8cb9c21352d28aeb30a28189a extends Twig_Template
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
        $__internal_0c1505822ec90659e2bec5fb466419e38b92eb24ad503e9095b9646e7b560cda = $this->env->getExtension("native_profiler");
        $__internal_0c1505822ec90659e2bec5fb466419e38b92eb24ad503e9095b9646e7b560cda->enter($__internal_0c1505822ec90659e2bec5fb466419e38b92eb24ad503e9095b9646e7b560cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0c1505822ec90659e2bec5fb466419e38b92eb24ad503e9095b9646e7b560cda->leave($__internal_0c1505822ec90659e2bec5fb466419e38b92eb24ad503e9095b9646e7b560cda_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
