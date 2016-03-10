<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_e4204e8fcd642e1724bbcb01e731e78adb334fababc6674d9cd28b75b51fc19e extends Twig_Template
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
        $__internal_dbbdbd8572e339f786c9f685e3cd246da89b25a9acd29c863d265b901928a000 = $this->env->getExtension("native_profiler");
        $__internal_dbbdbd8572e339f786c9f685e3cd246da89b25a9acd29c863d265b901928a000->enter($__internal_dbbdbd8572e339f786c9f685e3cd246da89b25a9acd29c863d265b901928a000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dbbdbd8572e339f786c9f685e3cd246da89b25a9acd29c863d265b901928a000->leave($__internal_dbbdbd8572e339f786c9f685e3cd246da89b25a9acd29c863d265b901928a000_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_85e1c278de6cf16c87ca39c7990652a92deff96a20549b47d3bcb37ed425cc31 = $this->env->getExtension("native_profiler");
        $__internal_85e1c278de6cf16c87ca39c7990652a92deff96a20549b47d3bcb37ed425cc31->enter($__internal_85e1c278de6cf16c87ca39c7990652a92deff96a20549b47d3bcb37ed425cc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_85e1c278de6cf16c87ca39c7990652a92deff96a20549b47d3bcb37ed425cc31->leave($__internal_85e1c278de6cf16c87ca39c7990652a92deff96a20549b47d3bcb37ed425cc31_prof);

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
