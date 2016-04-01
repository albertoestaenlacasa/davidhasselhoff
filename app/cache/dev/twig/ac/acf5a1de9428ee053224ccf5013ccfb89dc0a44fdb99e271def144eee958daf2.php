<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_1b8264e17ce3cec7c247bb8a39be96c0afc5f680a2eb8999af04ae63a17488b6 extends Twig_Template
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
        $__internal_9a6474bfe7928ad7866abd41299fc806bfd786d63098395d5275de842536ed32 = $this->env->getExtension("native_profiler");
        $__internal_9a6474bfe7928ad7866abd41299fc806bfd786d63098395d5275de842536ed32->enter($__internal_9a6474bfe7928ad7866abd41299fc806bfd786d63098395d5275de842536ed32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_9a6474bfe7928ad7866abd41299fc806bfd786d63098395d5275de842536ed32->leave($__internal_9a6474bfe7928ad7866abd41299fc806bfd786d63098395d5275de842536ed32_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
