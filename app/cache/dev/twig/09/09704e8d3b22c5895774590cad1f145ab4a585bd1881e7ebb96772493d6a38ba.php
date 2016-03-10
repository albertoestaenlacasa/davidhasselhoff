<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_1a78f9191f93a6f4a35e1bc57e25b328498c2514a9d0fed988d6c86ff1e6d02e extends Twig_Template
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
        $__internal_5404131d55366b21aad6fd7e14c9def7203897a8ac57e8392f6445a1874c3fdf = $this->env->getExtension("native_profiler");
        $__internal_5404131d55366b21aad6fd7e14c9def7203897a8ac57e8392f6445a1874c3fdf->enter($__internal_5404131d55366b21aad6fd7e14c9def7203897a8ac57e8392f6445a1874c3fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5404131d55366b21aad6fd7e14c9def7203897a8ac57e8392f6445a1874c3fdf->leave($__internal_5404131d55366b21aad6fd7e14c9def7203897a8ac57e8392f6445a1874c3fdf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac51db6e0ec0203f9ff260f49d99d99b28ce52b71b3833abd3fd8a23754b2b79 = $this->env->getExtension("native_profiler");
        $__internal_ac51db6e0ec0203f9ff260f49d99d99b28ce52b71b3833abd3fd8a23754b2b79->enter($__internal_ac51db6e0ec0203f9ff260f49d99d99b28ce52b71b3833abd3fd8a23754b2b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ac51db6e0ec0203f9ff260f49d99d99b28ce52b71b3833abd3fd8a23754b2b79->leave($__internal_ac51db6e0ec0203f9ff260f49d99d99b28ce52b71b3833abd3fd8a23754b2b79_prof);

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
