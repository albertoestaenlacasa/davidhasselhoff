<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_1c8d7b90eced77d47aa927e535b81e95485601cc54c02c5b0d93d1816572e574 extends Twig_Template
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
        $__internal_7ce57910d1ed9c3624af304ac864b2b1f6afa4bc0160cc6ae1ce7c39d7d1459e = $this->env->getExtension("native_profiler");
        $__internal_7ce57910d1ed9c3624af304ac864b2b1f6afa4bc0160cc6ae1ce7c39d7d1459e->enter($__internal_7ce57910d1ed9c3624af304ac864b2b1f6afa4bc0160cc6ae1ce7c39d7d1459e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7ce57910d1ed9c3624af304ac864b2b1f6afa4bc0160cc6ae1ce7c39d7d1459e->leave($__internal_7ce57910d1ed9c3624af304ac864b2b1f6afa4bc0160cc6ae1ce7c39d7d1459e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
