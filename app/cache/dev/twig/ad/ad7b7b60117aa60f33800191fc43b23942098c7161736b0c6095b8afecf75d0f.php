<?php

/* DHBundle:Default:news.html.twig */
class __TwigTemplate_68a1f2f941a7e0de1ac7a8be792b0ffee0d6cb581f9b127a01fae8732816e7fd extends Twig_Template
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
        $__internal_cdb58aade7167d83b2e612bbd7fe52e50d0fa0c0d5c336f9009ac7067d2d97c8 = $this->env->getExtension("native_profiler");
        $__internal_cdb58aade7167d83b2e612bbd7fe52e50d0fa0c0d5c336f9009ac7067d2d97c8->enter($__internal_cdb58aade7167d83b2e612bbd7fe52e50d0fa0c0d5c336f9009ac7067d2d97c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DHBundle:Default:news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdb58aade7167d83b2e612bbd7fe52e50d0fa0c0d5c336f9009ac7067d2d97c8->leave($__internal_cdb58aade7167d83b2e612bbd7fe52e50d0fa0c0d5c336f9009ac7067d2d97c8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_cc19ae6b3f2571756cada71a9fde5706ba1e35f81da68569fa3eceb2d6afd462 = $this->env->getExtension("native_profiler");
        $__internal_cc19ae6b3f2571756cada71a9fde5706ba1e35f81da68569fa3eceb2d6afd462->enter($__internal_cc19ae6b3f2571756cada71a9fde5706ba1e35f81da68569fa3eceb2d6afd462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
\t<div class=\"titulo\">";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_NEWS", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "</div>

\t<ul>
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["noticias"]) ? $context["noticias"] : $this->getContext($context, "noticias")));
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
        
        $__internal_cc19ae6b3f2571756cada71a9fde5706ba1e35f81da68569fa3eceb2d6afd462->leave($__internal_cc19ae6b3f2571756cada71a9fde5706ba1e35f81da68569fa3eceb2d6afd462_prof);

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
        return array (  69 => 13,  56 => 10,  53 => 9,  49 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
