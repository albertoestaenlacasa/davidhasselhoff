<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7140caad230d6ce9953b97e149fc003fced7e41dbaee215b97963a214e6ad1a5 extends Twig_Template
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
        $__internal_2a40374c14d0b14f8022b51af6522195ca5e0e2e4222e74b49df75067830d86d = $this->env->getExtension("native_profiler");
        $__internal_2a40374c14d0b14f8022b51af6522195ca5e0e2e4222e74b49df75067830d86d->enter($__internal_2a40374c14d0b14f8022b51af6522195ca5e0e2e4222e74b49df75067830d86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_2a40374c14d0b14f8022b51af6522195ca5e0e2e4222e74b49df75067830d86d->leave($__internal_2a40374c14d0b14f8022b51af6522195ca5e0e2e4222e74b49df75067830d86d_prof);

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
