<?php

/* @DH/Default/index.html.twig */
class __TwigTemplate_2f6faf789b5fc4aba0a628e8054c86c9b1dc45a0b42f01cd96232f2c3e0faac6 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contentBase($context, array $blocks = array())
    {
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
        return array (  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
