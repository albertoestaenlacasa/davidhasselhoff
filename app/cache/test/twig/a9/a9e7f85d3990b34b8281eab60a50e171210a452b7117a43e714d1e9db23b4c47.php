<?php

/* @DH/Admin/news.html.twig */
class __TwigTemplate_dfff5248722dd2dccd984613387b910612120cbab30acb30a0717e92aa2ea88f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@DH/Admin/news.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
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
\t";
        // line 5
        $this->loadTemplate("DHBundle:Admin:logout.html.twig", "@DH/Admin/news.html.twig", 5)->display($context);
        // line 6
        echo "
\t<div class=\"titulo\">";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_NEWS", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo "</div>


\t<form name=\"frm_new\" action=\"\" method=\"POST\">

\t\t<ul type=\"none\">
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["noticias"]) ? $context["noticias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 14
            echo "\t\t\t\t
\t\t\t\t<li>
\t\t\t\t\t<input type=\"radio\" name=\"new_id\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "id", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t<a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("dh_fullnew", array("id" => $this->getAttribute($context["noticia"], "id", array()), "titulo" => twig_replace_filter($this->getAttribute($context["noticia"], "titulo", array()), array(" " => "-")))), "html", null, true);
            echo "\"> 
\t\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["noticia"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "titulo", array()), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</li>\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t</ul>

\t\t<div class=\"botones\">
\t\t\t<input class=\"boton\" type=\"button\" value=\"";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.btn_back", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo "\" onclick=\"window.location.href='";
        echo $this->env->getExtension('routing')->getUrl("dh_admin");
        echo "'\">
\t\t\t<input class=\"boton\" type=\"button\" value=\"";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.btn_new", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo "\" onclick=\"window.location.href='";
        echo $this->env->getExtension('routing')->getUrl("dh_admin_news_new");
        echo "'\">
\t\t\t<input class=\"boton\" type=\"button\" value=\"";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.btn_edit", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo "\" onclick=\"validateForm('1')\">
\t\t\t<input class=\"boton\" type=\"button\" value=\"";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.btn_delete", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo "\" onclick=\"validateForm('2')\">
\t\t</div>

\t</form>

";
    }

    // line 36
    public function block_javascript($context, array $blocks = array())
    {
        echo " 

\t<script type=\"text/javascript\">

\t\tfunction validateForm(type){

\t\t\tif(document.frm_new.new_id.value == ''){
\t\t\t\talert('";
        // line 43
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.alert_SelectaAnyNew", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo "');
\t\t\t}else{
\t\t\t\t// update 
\t\t\t\tif(type == 1){
\t\t\t\t\tdocument.frm_new.action =\"";
        // line 47
        echo $this->env->getExtension('routing')->getUrl("dh_admin_news_update");
        echo "\";
\t\t\t\t\tdocument.frm_new.submit();\t\t\t\t\t
\t\t\t\t}
\t\t\t\t// delete
\t\t\t\telse if (type == 2){
\t\t\t\t\tif(confirm('";
        // line 52
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.alert_confirmDeleteNew", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo "')){\t\t\t\t\t\t
\t\t\t\t\t\tdocument.frm_new.action =\"";
        // line 53
        echo $this->env->getExtension('routing')->getUrl("dh_admin_news_delete");
        echo "\";
\t\t\t\t\t\tdocument.frm_new.submit();\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t</script>

";
    }

    public function getTemplateName()
    {
        return "@DH/Admin/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 53,  134 => 52,  126 => 47,  119 => 43,  108 => 36,  98 => 28,  94 => 27,  88 => 26,  82 => 25,  77 => 22,  65 => 18,  61 => 17,  57 => 16,  53 => 14,  49 => 13,  40 => 7,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* 	{% include 'DHBundle:Admin:logout.html.twig' %}*/
/* */
/* 	<div class="titulo">{% trans from "menu" into _locale %} STR_NEWS {% endtrans %}</div>*/
/* */
/* */
/* 	<form name="frm_new" action="" method="POST">*/
/* */
/* 		<ul type="none">*/
/* 			{% for noticia in noticias %}*/
/* 				*/
/* 				<li>*/
/* 					<input type="radio" name="new_id" value="{{ noticia.id }}" />*/
/* 					<a href="{{ url('dh_fullnew',{'id' : noticia.id, 'titulo' : noticia.titulo|replace({' ':'-'}) } ) }}"> */
/* 						{{ noticia.fecha|date('d/m/Y') }} {{ noticia.titulo }}*/
/* 					</a>*/
/* 				</li>		*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* */
/* 		<div class="botones">*/
/* 			<input class="boton" type="button" value="{% trans from "content" into _locale %} admin.btn_back {% endtrans %}" onclick="window.location.href='{{ url('dh_admin') }}'">*/
/* 			<input class="boton" type="button" value="{% trans from "content" into _locale %} admin.btn_new {% endtrans %}" onclick="window.location.href='{{ url('dh_admin_news_new') }}'">*/
/* 			<input class="boton" type="button" value="{% trans from "content" into _locale %} admin.btn_edit {% endtrans %}" onclick="validateForm('1')">*/
/* 			<input class="boton" type="button" value="{% trans from "content" into _locale %} admin.btn_delete {% endtrans %}" onclick="validateForm('2')">*/
/* 		</div>*/
/* */
/* 	</form>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block javascript %} */
/* */
/* 	<script type="text/javascript">*/
/* */
/* 		function validateForm(type){*/
/* */
/* 			if(document.frm_new.new_id.value == ''){*/
/* 				alert('{% trans from "content" into _locale %} admin.alert_SelectaAnyNew {% endtrans %}');*/
/* 			}else{*/
/* 				// update */
/* 				if(type == 1){*/
/* 					document.frm_new.action ="{{ url('dh_admin_news_update') }}";*/
/* 					document.frm_new.submit();					*/
/* 				}*/
/* 				// delete*/
/* 				else if (type == 2){*/
/* 					if(confirm('{% trans from "content" into _locale %} admin.alert_confirmDeleteNew {% endtrans %}')){						*/
/* 						document.frm_new.action ="{{ url('dh_admin_news_delete') }}";*/
/* 						document.frm_new.submit();					*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 	</script>*/
/* */
/* {% endblock %}*/
/* */
