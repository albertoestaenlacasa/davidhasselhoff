<?php

/* DHBundle:Admin:news.html.twig */
class __TwigTemplate_2ca4f5db7854d9b8b93983107f1340e952cd52c5ce27eab3b628188f4daa1979 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DHBundle:Admin:news.html.twig", 1);
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
        $__internal_1d4422ff8e2b3e1943e5e1ed4143d60f6d1c83e816c9131ccf96f5917dc70f66 = $this->env->getExtension("native_profiler");
        $__internal_1d4422ff8e2b3e1943e5e1ed4143d60f6d1c83e816c9131ccf96f5917dc70f66->enter($__internal_1d4422ff8e2b3e1943e5e1ed4143d60f6d1c83e816c9131ccf96f5917dc70f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DHBundle:Admin:news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d4422ff8e2b3e1943e5e1ed4143d60f6d1c83e816c9131ccf96f5917dc70f66->leave($__internal_1d4422ff8e2b3e1943e5e1ed4143d60f6d1c83e816c9131ccf96f5917dc70f66_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3b9093c4321b6e8f989602e29f2cb6e77af9dbea62961515b3bf25ba2457ca3c = $this->env->getExtension("native_profiler");
        $__internal_3b9093c4321b6e8f989602e29f2cb6e77af9dbea62961515b3bf25ba2457ca3c->enter($__internal_3b9093c4321b6e8f989602e29f2cb6e77af9dbea62961515b3bf25ba2457ca3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
\t";
        // line 5
        $this->loadTemplate("DHBundle:Admin:logout.html.twig", "DHBundle:Admin:news.html.twig", 5)->display($context);
        // line 6
        echo "
\t<div class=\"titulo\">";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_NEWS", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "</div>


\t<form name=\"frm_new\" action=\"\" method=\"POST\">

\t\t<ul type=\"none\">
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["noticias"]) ? $context["noticias"] : $this->getContext($context, "noticias")));
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.btn_back", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "\" onclick=\"window.location.href='";
        echo $this->env->getExtension('routing')->getUrl("dh_admin");
        echo "'\">
\t\t\t<input class=\"boton\" type=\"button\" value=\"";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.btn_new", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "\" onclick=\"window.location.href='";
        echo $this->env->getExtension('routing')->getUrl("dh_admin_news_new");
        echo "'\">
\t\t\t<input class=\"boton\" type=\"button\" value=\"";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.btn_edit", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "\" onclick=\"validateForm('1')\">
\t\t\t<input class=\"boton\" type=\"button\" value=\"";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.btn_delete", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "\" onclick=\"validateForm('2')\">
\t\t</div>

\t</form>

";
        
        $__internal_3b9093c4321b6e8f989602e29f2cb6e77af9dbea62961515b3bf25ba2457ca3c->leave($__internal_3b9093c4321b6e8f989602e29f2cb6e77af9dbea62961515b3bf25ba2457ca3c_prof);

    }

    // line 36
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_2ad8685025a448c8842c02599018869da59911127a866b421a9fd9380b7882cb = $this->env->getExtension("native_profiler");
        $__internal_2ad8685025a448c8842c02599018869da59911127a866b421a9fd9380b7882cb->enter($__internal_2ad8685025a448c8842c02599018869da59911127a866b421a9fd9380b7882cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo " 

\t<script type=\"text/javascript\">

\t\tfunction validateForm(type){

\t\t\tif(document.frm_new.new_id.value == ''){
\t\t\t\talert('";
        // line 43
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.alert_SelectaAnyNew", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.alert_confirmDeleteNew", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
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
        
        $__internal_2ad8685025a448c8842c02599018869da59911127a866b421a9fd9380b7882cb->leave($__internal_2ad8685025a448c8842c02599018869da59911127a866b421a9fd9380b7882cb_prof);

    }

    public function getTemplateName()
    {
        return "DHBundle:Admin:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 53,  149 => 52,  141 => 47,  134 => 43,  120 => 36,  107 => 28,  103 => 27,  97 => 26,  91 => 25,  86 => 22,  74 => 18,  70 => 17,  66 => 16,  62 => 14,  58 => 13,  49 => 7,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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