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
        $__internal_1237e2480314cf71490a094dddfad7dd7cba765076aa1cd61561e9c618f7f191 = $this->env->getExtension("native_profiler");
        $__internal_1237e2480314cf71490a094dddfad7dd7cba765076aa1cd61561e9c618f7f191->enter($__internal_1237e2480314cf71490a094dddfad7dd7cba765076aa1cd61561e9c618f7f191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1237e2480314cf71490a094dddfad7dd7cba765076aa1cd61561e9c618f7f191->leave($__internal_1237e2480314cf71490a094dddfad7dd7cba765076aa1cd61561e9c618f7f191_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1b451230b5aedbd31e05c7fc3ab147897331dbab68cf730cedf27f54231a0b0 = $this->env->getExtension("native_profiler");
        $__internal_c1b451230b5aedbd31e05c7fc3ab147897331dbab68cf730cedf27f54231a0b0->enter($__internal_c1b451230b5aedbd31e05c7fc3ab147897331dbab68cf730cedf27f54231a0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c1b451230b5aedbd31e05c7fc3ab147897331dbab68cf730cedf27f54231a0b0->leave($__internal_c1b451230b5aedbd31e05c7fc3ab147897331dbab68cf730cedf27f54231a0b0_prof);

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
