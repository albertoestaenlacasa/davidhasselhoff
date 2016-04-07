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
        $__internal_3a29f54eac897b66e97b39b41e66e2388536d0c8d3e33e6bad9d297ce6ed3cb2 = $this->env->getExtension("native_profiler");
        $__internal_3a29f54eac897b66e97b39b41e66e2388536d0c8d3e33e6bad9d297ce6ed3cb2->enter($__internal_3a29f54eac897b66e97b39b41e66e2388536d0c8d3e33e6bad9d297ce6ed3cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_3a29f54eac897b66e97b39b41e66e2388536d0c8d3e33e6bad9d297ce6ed3cb2->leave($__internal_3a29f54eac897b66e97b39b41e66e2388536d0c8d3e33e6bad9d297ce6ed3cb2_prof);

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
