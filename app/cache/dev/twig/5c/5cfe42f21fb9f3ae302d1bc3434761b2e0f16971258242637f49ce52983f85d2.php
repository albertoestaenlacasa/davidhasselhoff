<?php

/* DHBundle:Default:fullnew.html.twig */
class __TwigTemplate_d00bcfea5c03fc9ea6caa6b220bba1eda3d81afe470bbd2aa06147131796d064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DHBundle:Default:fullnew.html.twig", 1);
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
        $__internal_e5546dd5476bcfa1bb9843ea824b3d7354ee0edba90ce2ee1428f40421628579 = $this->env->getExtension("native_profiler");
        $__internal_e5546dd5476bcfa1bb9843ea824b3d7354ee0edba90ce2ee1428f40421628579->enter($__internal_e5546dd5476bcfa1bb9843ea824b3d7354ee0edba90ce2ee1428f40421628579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DHBundle:Default:fullnew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5546dd5476bcfa1bb9843ea824b3d7354ee0edba90ce2ee1428f40421628579->leave($__internal_e5546dd5476bcfa1bb9843ea824b3d7354ee0edba90ce2ee1428f40421628579_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4c8e0c122bd8ed0a756e90d5d956009b5c2e16fa56e49c0bedef9f25c6b52793 = $this->env->getExtension("native_profiler");
        $__internal_4c8e0c122bd8ed0a756e90d5d956009b5c2e16fa56e49c0bedef9f25c6b52793->enter($__internal_4c8e0c122bd8ed0a756e90d5d956009b5c2e16fa56e49c0bedef9f25c6b52793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_4c8e0c122bd8ed0a756e90d5d956009b5c2e16fa56e49c0bedef9f25c6b52793->leave($__internal_4c8e0c122bd8ed0a756e90d5d956009b5c2e16fa56e49c0bedef9f25c6b52793_prof);

    }

    public function getTemplateName()
    {
        return "DHBundle:Default:fullnew.html.twig";
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
