<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5d34a99192d83825b5bfa3b251fa2a6027cb5d5b7e06aff62c93a007eb38bd8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_b6c004d9610204dad2aca50920796006592d3bfdf3b0f8d3683513527de4801b = $this->env->getExtension("native_profiler");
        $__internal_b6c004d9610204dad2aca50920796006592d3bfdf3b0f8d3683513527de4801b->enter($__internal_b6c004d9610204dad2aca50920796006592d3bfdf3b0f8d3683513527de4801b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6c004d9610204dad2aca50920796006592d3bfdf3b0f8d3683513527de4801b->leave($__internal_b6c004d9610204dad2aca50920796006592d3bfdf3b0f8d3683513527de4801b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2ac0c780f113babdb3a904d1d264484f1333c8ed1687cd58855d25be83b403e = $this->env->getExtension("native_profiler");
        $__internal_f2ac0c780f113babdb3a904d1d264484f1333c8ed1687cd58855d25be83b403e->enter($__internal_f2ac0c780f113babdb3a904d1d264484f1333c8ed1687cd58855d25be83b403e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f2ac0c780f113babdb3a904d1d264484f1333c8ed1687cd58855d25be83b403e->leave($__internal_f2ac0c780f113babdb3a904d1d264484f1333c8ed1687cd58855d25be83b403e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a064c75ddb84431d3d9c2c32342d11737f35dbb157476f5977a38305ab2bd085 = $this->env->getExtension("native_profiler");
        $__internal_a064c75ddb84431d3d9c2c32342d11737f35dbb157476f5977a38305ab2bd085->enter($__internal_a064c75ddb84431d3d9c2c32342d11737f35dbb157476f5977a38305ab2bd085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a064c75ddb84431d3d9c2c32342d11737f35dbb157476f5977a38305ab2bd085->leave($__internal_a064c75ddb84431d3d9c2c32342d11737f35dbb157476f5977a38305ab2bd085_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5a88d97d4353223c90b314b917660cb5af9a84a785ff6ac735a5a8beee56eb3 = $this->env->getExtension("native_profiler");
        $__internal_b5a88d97d4353223c90b314b917660cb5af9a84a785ff6ac735a5a8beee56eb3->enter($__internal_b5a88d97d4353223c90b314b917660cb5af9a84a785ff6ac735a5a8beee56eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b5a88d97d4353223c90b314b917660cb5af9a84a785ff6ac735a5a8beee56eb3->leave($__internal_b5a88d97d4353223c90b314b917660cb5af9a84a785ff6ac735a5a8beee56eb3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
