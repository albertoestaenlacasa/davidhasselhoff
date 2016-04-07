<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_796599cf9e39e6443e5e0b8e7c6515daae8862782d4f761e285b77eca5925538 extends Twig_Template
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
        $__internal_4129c345ca783084db03807cb2481be92f56f74f88a82fc3de2aecbfcfea1382 = $this->env->getExtension("native_profiler");
        $__internal_4129c345ca783084db03807cb2481be92f56f74f88a82fc3de2aecbfcfea1382->enter($__internal_4129c345ca783084db03807cb2481be92f56f74f88a82fc3de2aecbfcfea1382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4129c345ca783084db03807cb2481be92f56f74f88a82fc3de2aecbfcfea1382->leave($__internal_4129c345ca783084db03807cb2481be92f56f74f88a82fc3de2aecbfcfea1382_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b56ef289a682c7af39616464181ef71ddbbf0d7b6a02cbfe31fa28eeed26abe4 = $this->env->getExtension("native_profiler");
        $__internal_b56ef289a682c7af39616464181ef71ddbbf0d7b6a02cbfe31fa28eeed26abe4->enter($__internal_b56ef289a682c7af39616464181ef71ddbbf0d7b6a02cbfe31fa28eeed26abe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b56ef289a682c7af39616464181ef71ddbbf0d7b6a02cbfe31fa28eeed26abe4->leave($__internal_b56ef289a682c7af39616464181ef71ddbbf0d7b6a02cbfe31fa28eeed26abe4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6095c4b2d5f8145c63a84bf4198dfc03c771dfae0289a106feb39fa56352bee2 = $this->env->getExtension("native_profiler");
        $__internal_6095c4b2d5f8145c63a84bf4198dfc03c771dfae0289a106feb39fa56352bee2->enter($__internal_6095c4b2d5f8145c63a84bf4198dfc03c771dfae0289a106feb39fa56352bee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6095c4b2d5f8145c63a84bf4198dfc03c771dfae0289a106feb39fa56352bee2->leave($__internal_6095c4b2d5f8145c63a84bf4198dfc03c771dfae0289a106feb39fa56352bee2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_43fa7dcb952fc4f19651a97ab46fdb1fa0d8968ad8232137ca2c1cb1f66a6b80 = $this->env->getExtension("native_profiler");
        $__internal_43fa7dcb952fc4f19651a97ab46fdb1fa0d8968ad8232137ca2c1cb1f66a6b80->enter($__internal_43fa7dcb952fc4f19651a97ab46fdb1fa0d8968ad8232137ca2c1cb1f66a6b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_43fa7dcb952fc4f19651a97ab46fdb1fa0d8968ad8232137ca2c1cb1f66a6b80->leave($__internal_43fa7dcb952fc4f19651a97ab46fdb1fa0d8968ad8232137ca2c1cb1f66a6b80_prof);

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
