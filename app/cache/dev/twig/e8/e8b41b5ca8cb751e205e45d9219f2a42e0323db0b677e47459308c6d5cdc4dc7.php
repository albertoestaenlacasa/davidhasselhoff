<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1a83134a9a189305931968a0264dfcfbf3e6a190c582aa10ef1ae864ab579683 extends Twig_Template
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
        $__internal_6bb1c3a3d1827e62e807da67030778becdccbb86c51c281679ea6bb2d9c636f2 = $this->env->getExtension("native_profiler");
        $__internal_6bb1c3a3d1827e62e807da67030778becdccbb86c51c281679ea6bb2d9c636f2->enter($__internal_6bb1c3a3d1827e62e807da67030778becdccbb86c51c281679ea6bb2d9c636f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6bb1c3a3d1827e62e807da67030778becdccbb86c51c281679ea6bb2d9c636f2->leave($__internal_6bb1c3a3d1827e62e807da67030778becdccbb86c51c281679ea6bb2d9c636f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
