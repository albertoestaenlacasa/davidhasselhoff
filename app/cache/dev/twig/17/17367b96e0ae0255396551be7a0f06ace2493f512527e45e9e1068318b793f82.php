<?php

/* base.html.twig */
class __TwigTemplate_0e5829e501c74fb519d2258960721d4d79bd74b32adefc1146af8a6880469837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2924d87bc81795f27b6be30ed5e67df0a04ff800c8f56dfab9d130db376cc861 = $this->env->getExtension("native_profiler");
        $__internal_2924d87bc81795f27b6be30ed5e67df0a04ff800c8f56dfab9d130db376cc861->enter($__internal_2924d87bc81795f27b6be30ed5e67df0a04ff800c8f56dfab9d130db376cc861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2924d87bc81795f27b6be30ed5e67df0a04ff800c8f56dfab9d130db376cc861->leave($__internal_2924d87bc81795f27b6be30ed5e67df0a04ff800c8f56dfab9d130db376cc861_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_72f2b4bbc00b505d83ac66e463aec234b65b961f13907a52334c5389b93cb021 = $this->env->getExtension("native_profiler");
        $__internal_72f2b4bbc00b505d83ac66e463aec234b65b961f13907a52334c5389b93cb021->enter($__internal_72f2b4bbc00b505d83ac66e463aec234b65b961f13907a52334c5389b93cb021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_72f2b4bbc00b505d83ac66e463aec234b65b961f13907a52334c5389b93cb021->leave($__internal_72f2b4bbc00b505d83ac66e463aec234b65b961f13907a52334c5389b93cb021_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f2db298d62add3ef2cdd60fe0b073963c4ecc202ab874eeed5710525270a3841 = $this->env->getExtension("native_profiler");
        $__internal_f2db298d62add3ef2cdd60fe0b073963c4ecc202ab874eeed5710525270a3841->enter($__internal_f2db298d62add3ef2cdd60fe0b073963c4ecc202ab874eeed5710525270a3841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f2db298d62add3ef2cdd60fe0b073963c4ecc202ab874eeed5710525270a3841->leave($__internal_f2db298d62add3ef2cdd60fe0b073963c4ecc202ab874eeed5710525270a3841_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_263f8a601ef5b4461e8dcd9c80c4c37107e1987cb98337237b19380056a17634 = $this->env->getExtension("native_profiler");
        $__internal_263f8a601ef5b4461e8dcd9c80c4c37107e1987cb98337237b19380056a17634->enter($__internal_263f8a601ef5b4461e8dcd9c80c4c37107e1987cb98337237b19380056a17634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_263f8a601ef5b4461e8dcd9c80c4c37107e1987cb98337237b19380056a17634->leave($__internal_263f8a601ef5b4461e8dcd9c80c4c37107e1987cb98337237b19380056a17634_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d222a22d15af1a18c13581fe1c8977c6414b2e8954d8437e898ffbe7f0ce2abe = $this->env->getExtension("native_profiler");
        $__internal_d222a22d15af1a18c13581fe1c8977c6414b2e8954d8437e898ffbe7f0ce2abe->enter($__internal_d222a22d15af1a18c13581fe1c8977c6414b2e8954d8437e898ffbe7f0ce2abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d222a22d15af1a18c13581fe1c8977c6414b2e8954d8437e898ffbe7f0ce2abe->leave($__internal_d222a22d15af1a18c13581fe1c8977c6414b2e8954d8437e898ffbe7f0ce2abe_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
