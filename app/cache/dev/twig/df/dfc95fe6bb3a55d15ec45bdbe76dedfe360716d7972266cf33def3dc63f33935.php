<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_407e4d75f52a8398e844c8ba1f6cbcfdfacb4af9e22b59fb759c35614f95e479 extends Twig_Template
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
        $__internal_585ea5c3ccd5c5f09a5f165a7cf363f46c3d2c7efb4ff16e86b9b28684d12e07 = $this->env->getExtension("native_profiler");
        $__internal_585ea5c3ccd5c5f09a5f165a7cf363f46c3d2c7efb4ff16e86b9b28684d12e07->enter($__internal_585ea5c3ccd5c5f09a5f165a7cf363f46c3d2c7efb4ff16e86b9b28684d12e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_585ea5c3ccd5c5f09a5f165a7cf363f46c3d2c7efb4ff16e86b9b28684d12e07->leave($__internal_585ea5c3ccd5c5f09a5f165a7cf363f46c3d2c7efb4ff16e86b9b28684d12e07_prof);

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
