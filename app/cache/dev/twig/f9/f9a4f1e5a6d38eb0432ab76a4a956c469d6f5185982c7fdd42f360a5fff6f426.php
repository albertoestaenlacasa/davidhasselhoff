<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_a93a1e5b8aa13cd8accd3dd617d3185df53d1fdb6a3847baa5b84a6903a1dafe extends Twig_Template
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
        $__internal_525715242f59370222ab238e91231e42082d53f10a932201d1155f8720a7982f = $this->env->getExtension("native_profiler");
        $__internal_525715242f59370222ab238e91231e42082d53f10a932201d1155f8720a7982f->enter($__internal_525715242f59370222ab238e91231e42082d53f10a932201d1155f8720a7982f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_525715242f59370222ab238e91231e42082d53f10a932201d1155f8720a7982f->leave($__internal_525715242f59370222ab238e91231e42082d53f10a932201d1155f8720a7982f_prof);

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
