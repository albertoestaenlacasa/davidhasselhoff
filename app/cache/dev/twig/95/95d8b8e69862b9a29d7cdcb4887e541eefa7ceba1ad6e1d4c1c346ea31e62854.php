<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_97f61828800558575bb1064f47311251d8da79704cadf05d21104e5a91b7e7db extends Twig_Template
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
        $__internal_2d236136fd41c56958cda674c7c2aba306729efc109a77ee7864ce6284efcb7e = $this->env->getExtension("native_profiler");
        $__internal_2d236136fd41c56958cda674c7c2aba306729efc109a77ee7864ce6284efcb7e->enter($__internal_2d236136fd41c56958cda674c7c2aba306729efc109a77ee7864ce6284efcb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_2d236136fd41c56958cda674c7c2aba306729efc109a77ee7864ce6284efcb7e->leave($__internal_2d236136fd41c56958cda674c7c2aba306729efc109a77ee7864ce6284efcb7e_prof);

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
