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
        $__internal_bcc95e4abb2adaec6cbf95afbd864725bc0fad25644340207a5b30da441b023f = $this->env->getExtension("native_profiler");
        $__internal_bcc95e4abb2adaec6cbf95afbd864725bc0fad25644340207a5b30da441b023f->enter($__internal_bcc95e4abb2adaec6cbf95afbd864725bc0fad25644340207a5b30da441b023f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DH/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcc95e4abb2adaec6cbf95afbd864725bc0fad25644340207a5b30da441b023f->leave($__internal_bcc95e4abb2adaec6cbf95afbd864725bc0fad25644340207a5b30da441b023f_prof);

    }

    // line 3
    public function block_contentBase($context, array $blocks = array())
    {
        $__internal_5211beccf6abd733ed232859159cd8b7c11871212e153f66dd7c4f5d2afad08f = $this->env->getExtension("native_profiler");
        $__internal_5211beccf6abd733ed232859159cd8b7c11871212e153f66dd7c4f5d2afad08f->enter($__internal_5211beccf6abd733ed232859159cd8b7c11871212e153f66dd7c4f5d2afad08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBase"));

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
        
        $__internal_5211beccf6abd733ed232859159cd8b7c11871212e153f66dd7c4f5d2afad08f->leave($__internal_5211beccf6abd733ed232859159cd8b7c11871212e153f66dd7c4f5d2afad08f_prof);

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
