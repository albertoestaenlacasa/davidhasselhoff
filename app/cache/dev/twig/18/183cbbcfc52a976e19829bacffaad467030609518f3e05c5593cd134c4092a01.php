<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7632e3d478a5ae6d7a5680b19e545eeeae73693f272f70890b722cdeeab3b4de extends Twig_Template
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
        $__internal_338071cf73f9bbfe46fd7601c4d1707d89606395b3e6dc895db9d68b4ec096df = $this->env->getExtension("native_profiler");
        $__internal_338071cf73f9bbfe46fd7601c4d1707d89606395b3e6dc895db9d68b4ec096df->enter($__internal_338071cf73f9bbfe46fd7601c4d1707d89606395b3e6dc895db9d68b4ec096df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_338071cf73f9bbfe46fd7601c4d1707d89606395b3e6dc895db9d68b4ec096df->leave($__internal_338071cf73f9bbfe46fd7601c4d1707d89606395b3e6dc895db9d68b4ec096df_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6150b38cbdb8525b11c39d02512fcdc5e8d2f823723289032c30bac8c7f002c3 = $this->env->getExtension("native_profiler");
        $__internal_6150b38cbdb8525b11c39d02512fcdc5e8d2f823723289032c30bac8c7f002c3->enter($__internal_6150b38cbdb8525b11c39d02512fcdc5e8d2f823723289032c30bac8c7f002c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6150b38cbdb8525b11c39d02512fcdc5e8d2f823723289032c30bac8c7f002c3->leave($__internal_6150b38cbdb8525b11c39d02512fcdc5e8d2f823723289032c30bac8c7f002c3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
