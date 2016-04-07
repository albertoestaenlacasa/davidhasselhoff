<?php

/* @DH/Default/fullnew.html.twig */
class __TwigTemplate_b7dd9c029e651ef0accd874a5950da779c7047ff11790bf313ac326873b512fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@DH/Default/fullnew.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t<div class=\"titulo\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "titulo", array()), "html", null, true);
        echo "</div>

\t<div class=\"realContain\">

\t\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "descripcion", array()), "html", null, true);
        echo " 

\t\t<br><br>

\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "urlImg", array()), "html", null, true);
        echo "\" width=\"80%\" />

\t</div>\t\t\t\t

";
    }

    public function getTemplateName()
    {
        return "@DH/Default/fullnew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  41 => 9,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* 	<div class="titulo">{{ noticia.titulo }}</div>*/
/* */
/* 	<div class="realContain">*/
/* */
/* 		{{ noticia.descripcion }} */
/* */
/* 		<br><br>*/
/* */
/* 		<img src="{{ noticia.urlImg }}" width="80%" />*/
/* */
/* 	</div>				*/
/* */
/* {% endblock %}*/
