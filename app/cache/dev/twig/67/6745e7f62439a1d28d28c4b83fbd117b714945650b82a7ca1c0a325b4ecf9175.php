<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_645872c0f74d12b25972f457623f9ce5639f8e221565df9457435c2d60a312c8 extends Twig_Template
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
        $__internal_0a8ccf38f76bd80c8e817d9684b5c1be46f38d90f0123e2d9bbf9d4861b99b70 = $this->env->getExtension("native_profiler");
        $__internal_0a8ccf38f76bd80c8e817d9684b5c1be46f38d90f0123e2d9bbf9d4861b99b70->enter($__internal_0a8ccf38f76bd80c8e817d9684b5c1be46f38d90f0123e2d9bbf9d4861b99b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0a8ccf38f76bd80c8e817d9684b5c1be46f38d90f0123e2d9bbf9d4861b99b70->leave($__internal_0a8ccf38f76bd80c8e817d9684b5c1be46f38d90f0123e2d9bbf9d4861b99b70_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
