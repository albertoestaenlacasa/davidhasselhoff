<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_bca88141156ce9e7294f44f96a43ae946d1b49c82eb79935130f338910d0f892 extends Twig_Template
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
        $__internal_dcb977460e67babcbe29cb4c44cc222c15342da6d13e2d6ea88ba2ce92a32098 = $this->env->getExtension("native_profiler");
        $__internal_dcb977460e67babcbe29cb4c44cc222c15342da6d13e2d6ea88ba2ce92a32098->enter($__internal_dcb977460e67babcbe29cb4c44cc222c15342da6d13e2d6ea88ba2ce92a32098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_dcb977460e67babcbe29cb4c44cc222c15342da6d13e2d6ea88ba2ce92a32098->leave($__internal_dcb977460e67babcbe29cb4c44cc222c15342da6d13e2d6ea88ba2ce92a32098_prof);

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