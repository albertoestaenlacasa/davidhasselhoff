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
        $__internal_1e4aaedafb92cf51f89430d8b031417253bb88abc14cbabcb34ebe055f3597d9 = $this->env->getExtension("native_profiler");
        $__internal_1e4aaedafb92cf51f89430d8b031417253bb88abc14cbabcb34ebe055f3597d9->enter($__internal_1e4aaedafb92cf51f89430d8b031417253bb88abc14cbabcb34ebe055f3597d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DHBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e4aaedafb92cf51f89430d8b031417253bb88abc14cbabcb34ebe055f3597d9->leave($__internal_1e4aaedafb92cf51f89430d8b031417253bb88abc14cbabcb34ebe055f3597d9_prof);

    }

    // line 3
    public function block_contentBase($context, array $blocks = array())
    {
        $__internal_41b7ec4c535151a1e44edb0639ecc61e1e81fe607754b1c95ac0f4ae9dcf4d92 = $this->env->getExtension("native_profiler");
        $__internal_41b7ec4c535151a1e44edb0639ecc61e1e81fe607754b1c95ac0f4ae9dcf4d92->enter($__internal_41b7ec4c535151a1e44edb0639ecc61e1e81fe607754b1c95ac0f4ae9dcf4d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBase"));

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
        
        $__internal_41b7ec4c535151a1e44edb0639ecc61e1e81fe607754b1c95ac0f4ae9dcf4d92->leave($__internal_41b7ec4c535151a1e44edb0639ecc61e1e81fe607754b1c95ac0f4ae9dcf4d92_prof);

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
