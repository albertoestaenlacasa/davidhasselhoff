<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_538fff5225fe8e856a889723b443dccf7192adb8a78b2b608038f4af1b8a20ea extends Twig_Template
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
        $__internal_5dc6cbaa334e6215a59d985fa46b611f0da223dfbc594e74d5e4ab1045e2c18b = $this->env->getExtension("native_profiler");
        $__internal_5dc6cbaa334e6215a59d985fa46b611f0da223dfbc594e74d5e4ab1045e2c18b->enter($__internal_5dc6cbaa334e6215a59d985fa46b611f0da223dfbc594e74d5e4ab1045e2c18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5dc6cbaa334e6215a59d985fa46b611f0da223dfbc594e74d5e4ab1045e2c18b->leave($__internal_5dc6cbaa334e6215a59d985fa46b611f0da223dfbc594e74d5e4ab1045e2c18b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
