<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_6a3aeae9b0b6ff35ccf32fb5acf5005009e4aca8922b58b3bba441f98f9cf290 extends Twig_Template
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
        $__internal_388b7c45a725d7172f58d64a57bff1ea84b3a1be2dd6abed1eca2e16e1900b5e = $this->env->getExtension("native_profiler");
        $__internal_388b7c45a725d7172f58d64a57bff1ea84b3a1be2dd6abed1eca2e16e1900b5e->enter($__internal_388b7c45a725d7172f58d64a57bff1ea84b3a1be2dd6abed1eca2e16e1900b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_388b7c45a725d7172f58d64a57bff1ea84b3a1be2dd6abed1eca2e16e1900b5e->leave($__internal_388b7c45a725d7172f58d64a57bff1ea84b3a1be2dd6abed1eca2e16e1900b5e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
