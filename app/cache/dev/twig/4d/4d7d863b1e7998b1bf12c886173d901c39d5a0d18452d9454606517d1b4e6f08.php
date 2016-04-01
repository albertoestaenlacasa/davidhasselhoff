<?php

/* @DH/Default/index.html.twig */
class __TwigTemplate_ea4b328b19322642bd9d9afe1e46e9117358f5af1cc7c064f74cdfb5a96c951c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@DH/Default/index.html.twig", 1);
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
        $__internal_99c1553440319385e773a6c0cf52322bf241c1530653cb638d4771eb51bde3cd = $this->env->getExtension("native_profiler");
        $__internal_99c1553440319385e773a6c0cf52322bf241c1530653cb638d4771eb51bde3cd->enter($__internal_99c1553440319385e773a6c0cf52322bf241c1530653cb638d4771eb51bde3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DH/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99c1553440319385e773a6c0cf52322bf241c1530653cb638d4771eb51bde3cd->leave($__internal_99c1553440319385e773a6c0cf52322bf241c1530653cb638d4771eb51bde3cd_prof);

    }

    // line 3
    public function block_contentBase($context, array $blocks = array())
    {
        $__internal_b703f405bdbff852d51627f12c863e4a5410660a4748f20a003f296dc9bee7a3 = $this->env->getExtension("native_profiler");
        $__internal_b703f405bdbff852d51627f12c863e4a5410660a4748f20a003f296dc9bee7a3->enter($__internal_b703f405bdbff852d51627f12c863e4a5410660a4748f20a003f296dc9bee7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBase"));

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
        
        $__internal_b703f405bdbff852d51627f12c863e4a5410660a4748f20a003f296dc9bee7a3->leave($__internal_b703f405bdbff852d51627f12c863e4a5410660a4748f20a003f296dc9bee7a3_prof);

    }

    public function getTemplateName()
    {
        return "@DH/Default/index.html.twig";
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
