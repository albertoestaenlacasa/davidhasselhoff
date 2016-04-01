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
        $__internal_ba9b38d8171ca702823094101ffc2ccccb2f32929b3d20a725ee99e8d9bbd9ee = $this->env->getExtension("native_profiler");
        $__internal_ba9b38d8171ca702823094101ffc2ccccb2f32929b3d20a725ee99e8d9bbd9ee->enter($__internal_ba9b38d8171ca702823094101ffc2ccccb2f32929b3d20a725ee99e8d9bbd9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DHBundle:Default:news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba9b38d8171ca702823094101ffc2ccccb2f32929b3d20a725ee99e8d9bbd9ee->leave($__internal_ba9b38d8171ca702823094101ffc2ccccb2f32929b3d20a725ee99e8d9bbd9ee_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_58d02982b3f78433de8be324c53557a3705e3b88c96706368b9ca978067f3aa0 = $this->env->getExtension("native_profiler");
        $__internal_58d02982b3f78433de8be324c53557a3705e3b88c96706368b9ca978067f3aa0->enter($__internal_58d02982b3f78433de8be324c53557a3705e3b88c96706368b9ca978067f3aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_58d02982b3f78433de8be324c53557a3705e3b88c96706368b9ca978067f3aa0->leave($__internal_58d02982b3f78433de8be324c53557a3705e3b88c96706368b9ca978067f3aa0_prof);

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
