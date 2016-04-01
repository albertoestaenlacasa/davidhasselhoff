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
        $__internal_0f4d8d81722947048cb13e4b66de41b4c45688179edcc69ce043d57825809b59 = $this->env->getExtension("native_profiler");
        $__internal_0f4d8d81722947048cb13e4b66de41b4c45688179edcc69ce043d57825809b59->enter($__internal_0f4d8d81722947048cb13e4b66de41b4c45688179edcc69ce043d57825809b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0f4d8d81722947048cb13e4b66de41b4c45688179edcc69ce043d57825809b59->leave($__internal_0f4d8d81722947048cb13e4b66de41b4c45688179edcc69ce043d57825809b59_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_07a2323d89eff3ce8ef3ba503fe83ff238062b2dfd66acee35df86d64b92c48c = $this->env->getExtension("native_profiler");
        $__internal_07a2323d89eff3ce8ef3ba503fe83ff238062b2dfd66acee35df86d64b92c48c->enter($__internal_07a2323d89eff3ce8ef3ba503fe83ff238062b2dfd66acee35df86d64b92c48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_07a2323d89eff3ce8ef3ba503fe83ff238062b2dfd66acee35df86d64b92c48c->leave($__internal_07a2323d89eff3ce8ef3ba503fe83ff238062b2dfd66acee35df86d64b92c48c_prof);

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
