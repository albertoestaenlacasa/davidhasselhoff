<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_da5b799027d8a730d1bb8a6d3dc8959821403dadb13d1dc4a311d6c7223a03bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91fcd67e23d1a452f04ce86b9b365961daa5ff3cbbfd36449131fe7b7db09872 = $this->env->getExtension("native_profiler");
        $__internal_91fcd67e23d1a452f04ce86b9b365961daa5ff3cbbfd36449131fe7b7db09872->enter($__internal_91fcd67e23d1a452f04ce86b9b365961daa5ff3cbbfd36449131fe7b7db09872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_91fcd67e23d1a452f04ce86b9b365961daa5ff3cbbfd36449131fe7b7db09872->leave($__internal_91fcd67e23d1a452f04ce86b9b365961daa5ff3cbbfd36449131fe7b7db09872_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6038c01d2c39a873cf5f5fb9a005edc0d2c301153e33409fb86a507bbab5c13b = $this->env->getExtension("native_profiler");
        $__internal_6038c01d2c39a873cf5f5fb9a005edc0d2c301153e33409fb86a507bbab5c13b->enter($__internal_6038c01d2c39a873cf5f5fb9a005edc0d2c301153e33409fb86a507bbab5c13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6038c01d2c39a873cf5f5fb9a005edc0d2c301153e33409fb86a507bbab5c13b->leave($__internal_6038c01d2c39a873cf5f5fb9a005edc0d2c301153e33409fb86a507bbab5c13b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
