<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_95cb289b6176d77c715a5b4ceb5b39decf9f06dee00f0b91cf7426b926450dd7 extends Twig_Template
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
        $__internal_4737be3e3732c2d6789d410754c710fb1bfb48be6875d64bc0af71187d7ceee3 = $this->env->getExtension("native_profiler");
        $__internal_4737be3e3732c2d6789d410754c710fb1bfb48be6875d64bc0af71187d7ceee3->enter($__internal_4737be3e3732c2d6789d410754c710fb1bfb48be6875d64bc0af71187d7ceee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4737be3e3732c2d6789d410754c710fb1bfb48be6875d64bc0af71187d7ceee3->leave($__internal_4737be3e3732c2d6789d410754c710fb1bfb48be6875d64bc0af71187d7ceee3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */