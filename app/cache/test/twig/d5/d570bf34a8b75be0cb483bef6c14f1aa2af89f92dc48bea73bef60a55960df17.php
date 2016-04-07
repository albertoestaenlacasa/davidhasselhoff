<?php

/* DHBundle:Default:news.html.twig */
class __TwigTemplate_aba73fcefbbcb234b6c3d45a9826ccfb4946bac06cc7cb2ff521727edacb1557 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DHBundle:Default:news.html.twig", 1);
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_NEWS", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo "</div>

\t<ul>
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["noticias"]) ? $context["noticias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 9
            echo "\t\t\t
\t\t\t<li>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["noticia"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("dh_fullnew", array("id" => $this->getAttribute($context["noticia"], "id", array()), "titulo" => twig_replace_filter($this->getAttribute($context["noticia"], "titulo", array()), array(" " => "-")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "titulo", array()), "html", null, true);
            echo "</a></li>
\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t</ul>

";
    }

    public function getTemplateName()
    {
        return "DHBundle:Default:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  47 => 10,  44 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* 	<div class="titulo">{% trans from "menu" into _locale %} STR_NEWS {% endtrans %}</div>*/
/* */
/* 	<ul>*/
/* 		{% for noticia in noticias %}*/
/* 			*/
/* 			<li>{{ noticia.fecha|date('d/m/Y') }} <a href="{{ url('dh_fullnew',{'id' : noticia.id, 'titulo' : noticia.titulo|replace({' ':'-'}) } ) }}">{{ noticia.titulo }}</a></li>*/
/* 		*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* */
/* {% endblock %}*/
