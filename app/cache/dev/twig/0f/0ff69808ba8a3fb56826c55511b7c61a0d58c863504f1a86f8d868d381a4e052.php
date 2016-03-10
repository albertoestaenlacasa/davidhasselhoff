<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_79703b15e6ad87e86822cbf68d4ec701b68132589544b14c69c4b73d70d3bdd5 extends Twig_Template
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
        $__internal_c2f8d0fea0bfe9cae8d430218c4dd3ab3fa45552cb9c25ec04b47ff2ad5bd4dc = $this->env->getExtension("native_profiler");
        $__internal_c2f8d0fea0bfe9cae8d430218c4dd3ab3fa45552cb9c25ec04b47ff2ad5bd4dc->enter($__internal_c2f8d0fea0bfe9cae8d430218c4dd3ab3fa45552cb9c25ec04b47ff2ad5bd4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_c2f8d0fea0bfe9cae8d430218c4dd3ab3fa45552cb9c25ec04b47ff2ad5bd4dc->leave($__internal_c2f8d0fea0bfe9cae8d430218c4dd3ab3fa45552cb9c25ec04b47ff2ad5bd4dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
