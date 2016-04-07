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
        $__internal_c5bbf20363ddaf64e9feca9c53cc0c9d2fe2c4dfaafdf593c7ff1c1d771f3dd5 = $this->env->getExtension("native_profiler");
        $__internal_c5bbf20363ddaf64e9feca9c53cc0c9d2fe2c4dfaafdf593c7ff1c1d771f3dd5->enter($__internal_c5bbf20363ddaf64e9feca9c53cc0c9d2fe2c4dfaafdf593c7ff1c1d771f3dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DH/Default/news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5bbf20363ddaf64e9feca9c53cc0c9d2fe2c4dfaafdf593c7ff1c1d771f3dd5->leave($__internal_c5bbf20363ddaf64e9feca9c53cc0c9d2fe2c4dfaafdf593c7ff1c1d771f3dd5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e342eed15ee7c46214c17f7599228f84852e1d37901952ae1d73624d7237fd60 = $this->env->getExtension("native_profiler");
        $__internal_e342eed15ee7c46214c17f7599228f84852e1d37901952ae1d73624d7237fd60->enter($__internal_e342eed15ee7c46214c17f7599228f84852e1d37901952ae1d73624d7237fd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e342eed15ee7c46214c17f7599228f84852e1d37901952ae1d73624d7237fd60->leave($__internal_e342eed15ee7c46214c17f7599228f84852e1d37901952ae1d73624d7237fd60_prof);

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
