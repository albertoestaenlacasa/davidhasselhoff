<?php

/* @DH/Default/news.html.twig */
class __TwigTemplate_9e758b2224ab7f9c95f550fe323a4c628ff075d2c4c4eef320d550e145741055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@DH/Default/news.html.twig", 1);
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
        $__internal_3bcc9a1255e1ec266d57a2759b7614f0281e84b58e761425cb6033810462303a = $this->env->getExtension("native_profiler");
        $__internal_3bcc9a1255e1ec266d57a2759b7614f0281e84b58e761425cb6033810462303a->enter($__internal_3bcc9a1255e1ec266d57a2759b7614f0281e84b58e761425cb6033810462303a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DH/Default/news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bcc9a1255e1ec266d57a2759b7614f0281e84b58e761425cb6033810462303a->leave($__internal_3bcc9a1255e1ec266d57a2759b7614f0281e84b58e761425cb6033810462303a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3e4f5b671169677f992ecfe5504fd6fbada87644e2edddd54d3d92ee1ebae7d2 = $this->env->getExtension("native_profiler");
        $__internal_3e4f5b671169677f992ecfe5504fd6fbada87644e2edddd54d3d92ee1ebae7d2->enter($__internal_3e4f5b671169677f992ecfe5504fd6fbada87644e2edddd54d3d92ee1ebae7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
\t<div class=\"titulo\">**Noticias**</div>

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
        
        $__internal_3e4f5b671169677f992ecfe5504fd6fbada87644e2edddd54d3d92ee1ebae7d2->leave($__internal_3e4f5b671169677f992ecfe5504fd6fbada87644e2edddd54d3d92ee1ebae7d2_prof);

    }

    public function getTemplateName()
    {
        return "@DH/Default/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  53 => 10,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* 	<div class="titulo">**Noticias**</div>*/
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
