<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f63130f31dabc486ac8a2eb883c987717265ff26c7d81ae49b4d11c823574480 extends Twig_Template
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
        $__internal_058fc37c8bd1ef884b6fe2ffd39f878b8116d77f9ed4fa1dd48b793c85cd1ffb = $this->env->getExtension("native_profiler");
        $__internal_058fc37c8bd1ef884b6fe2ffd39f878b8116d77f9ed4fa1dd48b793c85cd1ffb->enter($__internal_058fc37c8bd1ef884b6fe2ffd39f878b8116d77f9ed4fa1dd48b793c85cd1ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_058fc37c8bd1ef884b6fe2ffd39f878b8116d77f9ed4fa1dd48b793c85cd1ffb->leave($__internal_058fc37c8bd1ef884b6fe2ffd39f878b8116d77f9ed4fa1dd48b793c85cd1ffb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
