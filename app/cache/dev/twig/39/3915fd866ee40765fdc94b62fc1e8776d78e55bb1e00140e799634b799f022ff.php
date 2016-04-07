<?php

/* DHBundle:Default:index.html.twig */
class __TwigTemplate_f4b9d9fd3d9c4fcc119536a35456c5996714c596f50f567964b41ab37cd9da28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DHBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'contentBase' => array($this, 'block_contentBase'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee502cc8605c6063d3c4ca9d0ea411911e365d2f883a7e073ce7495a72bc839b = $this->env->getExtension("native_profiler");
        $__internal_ee502cc8605c6063d3c4ca9d0ea411911e365d2f883a7e073ce7495a72bc839b->enter($__internal_ee502cc8605c6063d3c4ca9d0ea411911e365d2f883a7e073ce7495a72bc839b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DHBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee502cc8605c6063d3c4ca9d0ea411911e365d2f883a7e073ce7495a72bc839b->leave($__internal_ee502cc8605c6063d3c4ca9d0ea411911e365d2f883a7e073ce7495a72bc839b_prof);

    }

    // line 3
    public function block_contentBase($context, array $blocks = array())
    {
        $__internal_4e62fd5f5476422cc23cc2e4a53c3c827eb34bc58fcf5b4edfeb46d61ffbd49f = $this->env->getExtension("native_profiler");
        $__internal_4e62fd5f5476422cc23cc2e4a53c3c827eb34bc58fcf5b4edfeb46d61ffbd49f->enter($__internal_4e62fd5f5476422cc23cc2e4a53c3c827eb34bc58fcf5b4edfeb46d61ffbd49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBase"));

        // line 4
        echo "
\t<div>

\t\t<h1>David Hasselhoff</h1>
\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/david-hasselhoff.jpg"), "html", null, true);
        echo "\" />

\t</div>

";
        
        $__internal_4e62fd5f5476422cc23cc2e4a53c3c827eb34bc58fcf5b4edfeb46d61ffbd49f->leave($__internal_4e62fd5f5476422cc23cc2e4a53c3c827eb34bc58fcf5b4edfeb46d61ffbd49f_prof);

    }

    public function getTemplateName()
    {
        return "DHBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block contentBase %}*/
/* */
/* 	<div>*/
/* */
/* 		<h1>David Hasselhoff</h1>*/
/* 		<img src="{{ asset('images/david-hasselhoff.jpg') }}" />*/
/* */
/* 	</div>*/
/* */
/* {% endblock %}*/
