<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_aaf971ee9948af1ea514913cb2c70568439402c6bd26072240e623574f10ea6b extends Twig_Template
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
        $__internal_8607918f908a37688e275cda8ea54d23175ba3a77a5ce1e55077d105b08287e9 = $this->env->getExtension("native_profiler");
        $__internal_8607918f908a37688e275cda8ea54d23175ba3a77a5ce1e55077d105b08287e9->enter($__internal_8607918f908a37688e275cda8ea54d23175ba3a77a5ce1e55077d105b08287e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_8607918f908a37688e275cda8ea54d23175ba3a77a5ce1e55077d105b08287e9->leave($__internal_8607918f908a37688e275cda8ea54d23175ba3a77a5ce1e55077d105b08287e9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
