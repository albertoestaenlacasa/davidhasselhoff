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
        $__internal_f38c9bfa48d82c8945d65e8e72ed06f98659976e0d64ddccee0c41e7bd44d992 = $this->env->getExtension("native_profiler");
        $__internal_f38c9bfa48d82c8945d65e8e72ed06f98659976e0d64ddccee0c41e7bd44d992->enter($__internal_f38c9bfa48d82c8945d65e8e72ed06f98659976e0d64ddccee0c41e7bd44d992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f38c9bfa48d82c8945d65e8e72ed06f98659976e0d64ddccee0c41e7bd44d992->leave($__internal_f38c9bfa48d82c8945d65e8e72ed06f98659976e0d64ddccee0c41e7bd44d992_prof);

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
