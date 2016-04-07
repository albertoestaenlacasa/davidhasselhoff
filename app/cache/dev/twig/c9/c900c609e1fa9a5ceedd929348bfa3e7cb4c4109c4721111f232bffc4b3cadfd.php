<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_9627c04e350f0309f59ab346a41a664b75e1a228ef553dc0e9e384df0fa979a4 extends Twig_Template
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
        $__internal_e744777d4e673c93d5a5241eb847d9fa8e43c515051620f362b6905dc700b46b = $this->env->getExtension("native_profiler");
        $__internal_e744777d4e673c93d5a5241eb847d9fa8e43c515051620f362b6905dc700b46b->enter($__internal_e744777d4e673c93d5a5241eb847d9fa8e43c515051620f362b6905dc700b46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e744777d4e673c93d5a5241eb847d9fa8e43c515051620f362b6905dc700b46b->leave($__internal_e744777d4e673c93d5a5241eb847d9fa8e43c515051620f362b6905dc700b46b_prof);

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
