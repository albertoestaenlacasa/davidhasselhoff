<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ad6130d91e41497f1906d2899482ce4028a156b3c4ccaa76aad2fdaf2369e2cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1714034ef20aac6bf7b53a86454f76b12ab7d014c2f859ab46522936d432fbe1 = $this->env->getExtension("native_profiler");
        $__internal_1714034ef20aac6bf7b53a86454f76b12ab7d014c2f859ab46522936d432fbe1->enter($__internal_1714034ef20aac6bf7b53a86454f76b12ab7d014c2f859ab46522936d432fbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1714034ef20aac6bf7b53a86454f76b12ab7d014c2f859ab46522936d432fbe1->leave($__internal_1714034ef20aac6bf7b53a86454f76b12ab7d014c2f859ab46522936d432fbe1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f874fccf78c531297d63de9c932e339e9cdcdcd0c384164560f5feea7f19f2bd = $this->env->getExtension("native_profiler");
        $__internal_f874fccf78c531297d63de9c932e339e9cdcdcd0c384164560f5feea7f19f2bd->enter($__internal_f874fccf78c531297d63de9c932e339e9cdcdcd0c384164560f5feea7f19f2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f874fccf78c531297d63de9c932e339e9cdcdcd0c384164560f5feea7f19f2bd->leave($__internal_f874fccf78c531297d63de9c932e339e9cdcdcd0c384164560f5feea7f19f2bd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebd0740c723e7ce05de29c038483704f7408f22b9966330f1281dba612bb8e02 = $this->env->getExtension("native_profiler");
        $__internal_ebd0740c723e7ce05de29c038483704f7408f22b9966330f1281dba612bb8e02->enter($__internal_ebd0740c723e7ce05de29c038483704f7408f22b9966330f1281dba612bb8e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ebd0740c723e7ce05de29c038483704f7408f22b9966330f1281dba612bb8e02->leave($__internal_ebd0740c723e7ce05de29c038483704f7408f22b9966330f1281dba612bb8e02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_26bb3b7e72879b434fabe81c972f83e4480dfcde13ecb4370ebb89cc83c55272 = $this->env->getExtension("native_profiler");
        $__internal_26bb3b7e72879b434fabe81c972f83e4480dfcde13ecb4370ebb89cc83c55272->enter($__internal_26bb3b7e72879b434fabe81c972f83e4480dfcde13ecb4370ebb89cc83c55272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_26bb3b7e72879b434fabe81c972f83e4480dfcde13ecb4370ebb89cc83c55272->leave($__internal_26bb3b7e72879b434fabe81c972f83e4480dfcde13ecb4370ebb89cc83c55272_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
