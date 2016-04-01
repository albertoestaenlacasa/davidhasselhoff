<?php

/* @DH/Default/fullnew.html.twig */
class __TwigTemplate_53472400ca7c6446a3ef366d893df77e075cee89d534a04f4082c92350ae0d5d extends Twig_Template
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
        $__internal_a0cfa45e6e13d51c023f9e1876d6bc5f0f8b8f432bf429fd968794960069f540 = $this->env->getExtension("native_profiler");
        $__internal_a0cfa45e6e13d51c023f9e1876d6bc5f0f8b8f432bf429fd968794960069f540->enter($__internal_a0cfa45e6e13d51c023f9e1876d6bc5f0f8b8f432bf429fd968794960069f540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DH/Default/fullnew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0cfa45e6e13d51c023f9e1876d6bc5f0f8b8f432bf429fd968794960069f540->leave($__internal_a0cfa45e6e13d51c023f9e1876d6bc5f0f8b8f432bf429fd968794960069f540_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e66deecc34af3f6b6541711d4a982e7bcbcad7baba4186f14b775371972ad910 = $this->env->getExtension("native_profiler");
        $__internal_e66deecc34af3f6b6541711d4a982e7bcbcad7baba4186f14b775371972ad910->enter($__internal_e66deecc34af3f6b6541711d4a982e7bcbcad7baba4186f14b775371972ad910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
\t<div class=\"titulo\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : $this->getContext($context, "noticia")), "titulo", array()), "html", null, true);
        echo "</div>

\t<div class=\"realContain\">

\t\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : $this->getContext($context, "noticia")), "descripcion", array()), "html", null, true);
        echo " 

\t\t<br><br>

\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : $this->getContext($context, "noticia")), "urlImg", array()), "html", null, true);
        echo "\" width=\"80%\" />

\t</div>\t\t\t\t

";
        
        $__internal_e66deecc34af3f6b6541711d4a982e7bcbcad7baba4186f14b775371972ad910->leave($__internal_e66deecc34af3f6b6541711d4a982e7bcbcad7baba4186f14b775371972ad910_prof);

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
        return array (  57 => 13,  50 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
