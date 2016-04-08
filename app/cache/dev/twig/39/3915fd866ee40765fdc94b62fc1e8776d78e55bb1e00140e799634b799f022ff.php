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
        $__internal_91e5f9e64dbde1efc64878855a37115bbabcf96b612cc0c70d90c3835210dbde = $this->env->getExtension("native_profiler");
        $__internal_91e5f9e64dbde1efc64878855a37115bbabcf96b612cc0c70d90c3835210dbde->enter($__internal_91e5f9e64dbde1efc64878855a37115bbabcf96b612cc0c70d90c3835210dbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DHBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e5f9e64dbde1efc64878855a37115bbabcf96b612cc0c70d90c3835210dbde->leave($__internal_91e5f9e64dbde1efc64878855a37115bbabcf96b612cc0c70d90c3835210dbde_prof);

    }

    // line 3
    public function block_contentBase($context, array $blocks = array())
    {
        $__internal_618e2a5d4db67e1b7a3357bfc3dba228211a2b71c170525b811582e952a5be05 = $this->env->getExtension("native_profiler");
        $__internal_618e2a5d4db67e1b7a3357bfc3dba228211a2b71c170525b811582e952a5be05->enter($__internal_618e2a5d4db67e1b7a3357bfc3dba228211a2b71c170525b811582e952a5be05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBase"));

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
        
        $__internal_618e2a5d4db67e1b7a3357bfc3dba228211a2b71c170525b811582e952a5be05->leave($__internal_618e2a5d4db67e1b7a3357bfc3dba228211a2b71c170525b811582e952a5be05_prof);

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
