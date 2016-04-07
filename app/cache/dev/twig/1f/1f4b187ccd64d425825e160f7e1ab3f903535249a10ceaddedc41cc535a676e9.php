<?php

/* @DH/Admin/createNew.html.twig */
class __TwigTemplate_816b3b68fb99949bd516b6df3d9a24eb446af35ec27e061081a79a599abee86d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@DH/Admin/createNew.html.twig", 1);
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
        $__internal_c206a121c43ef76de71e27520aec5157e4217f0a2ea7b9c328b44cc4510c5613 = $this->env->getExtension("native_profiler");
        $__internal_c206a121c43ef76de71e27520aec5157e4217f0a2ea7b9c328b44cc4510c5613->enter($__internal_c206a121c43ef76de71e27520aec5157e4217f0a2ea7b9c328b44cc4510c5613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DH/Admin/createNew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c206a121c43ef76de71e27520aec5157e4217f0a2ea7b9c328b44cc4510c5613->leave($__internal_c206a121c43ef76de71e27520aec5157e4217f0a2ea7b9c328b44cc4510c5613_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7edb2b0b2693abdf188fea26b97fc19c49ceb21687014bb949470a1e7968b632 = $this->env->getExtension("native_profiler");
        $__internal_7edb2b0b2693abdf188fea26b97fc19c49ceb21687014bb949470a1e7968b632->enter($__internal_7edb2b0b2693abdf188fea26b97fc19c49ceb21687014bb949470a1e7968b632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
\t";
        // line 5
        $this->loadTemplate("DHBundle:Admin:logout.html.twig", "@DH/Admin/createNew.html.twig", 5)->display($context);
        // line 6
        echo "
\t<div class=\"titulo\">";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_NEWS", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "</div>

\t";
        // line 10
        echo "
\t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("name" => "frm_createNew", "novalidate" => "novalidate")));
        echo "

\t<div class=\"formStyle\">

\t\t<div class=\"element\">
\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"element\">
\t\t\t<div class=\"title\">
\t\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'label');
        echo ": 
\t\t\t</div>
\t\t\t<div class=\"inputs\">
\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'errors');
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"element\">
\t\t\t<div class=\"title\">
\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label');
        echo ": 
\t\t\t</div>
\t\t\t<div class=\"inputs\">
\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'errors');
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"element\">
\t\t\t<div class=\"title\">
\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urlImg", array()), 'label');
        echo ": 
\t\t\t</div>
\t\t\t<div class=\"inputs\">
\t\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urlImg", array()), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urlImg", array()), 'errors');
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"element\">
\t\t\t<div class=\"title\">
\t\t\t\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'label');
        echo ":
\t\t\t</div>
\t\t\t<div class=\"inputs\">
\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'errors');
        echo "
\t\t\t</div>
\t\t</div>

\t\t";
        // line 55
        if (array_key_exists("new_id", $context)) {
            // line 56
            echo "\t\t\t<input type=\"hidden\" id=\"new_id\" name=\"new_id\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["new_id"]) ? $context["new_id"] : $this->getContext($context, "new_id")), "html", null, true);
            echo "\">
\t\t";
        }
        // line 58
        echo "
\t</div>

\t<div class=\"botones floatLeft\">
\t\t
\t\t<input class=\"boton\" type=\"button\" value=\"";
        // line 63
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.btn_back", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "\" onclick=\"window.location.href='";
        echo $this->env->getExtension('routing')->getUrl("dh_admin_news");
        echo "'\">

\t\t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "

\t</div>


\t";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_7edb2b0b2693abdf188fea26b97fc19c49ceb21687014bb949470a1e7968b632->leave($__internal_7edb2b0b2693abdf188fea26b97fc19c49ceb21687014bb949470a1e7968b632_prof);

    }

    public function getTemplateName()
    {
        return "@DH/Admin/createNew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 70,  160 => 65,  153 => 63,  146 => 58,  140 => 56,  138 => 55,  129 => 51,  123 => 48,  112 => 42,  106 => 39,  95 => 33,  89 => 30,  78 => 24,  72 => 21,  64 => 16,  56 => 11,  53 => 10,  48 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/* 	{# formulario #}*/
/* */
/* 	{{ form_start(form, {'attr': {'name': 'frm_createNew', 'novalidate': 'novalidate' }} ) }}*/
/* */
/* 	<div class="formStyle">*/
/* */
/* 		<div class="element">*/
/* 			{{ form_errors(form) }}*/
/* 		</div>*/
/* */
/* 		<div class="element">*/
/* 			<div class="title">*/
/* 				{{ form_label(form.titulo) }}: */
/* 			</div>*/
/* 			<div class="inputs">*/
/* 				{{ form_widget(form.titulo) }} {{ form_errors(form.titulo) }}*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="element">*/
/* 			<div class="title">*/
/* 				{{ form_label(form.descripcion) }}: */
/* 			</div>*/
/* 			<div class="inputs">*/
/* 				{{ form_widget(form.descripcion) }} {{ form_errors(form.descripcion) }}*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="element">*/
/* 			<div class="title">*/
/* 				{{ form_label(form.urlImg) }}: */
/* 			</div>*/
/* 			<div class="inputs">*/
/* 				{{ form_widget(form.urlImg) }} {{ form_errors(form.urlImg) }}*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="element">*/
/* 			<div class="title">*/
/* 				{{ form_label(form.fecha) }}:*/
/* 			</div>*/
/* 			<div class="inputs">*/
/* 				{{ form_widget(form.fecha) }} {{ form_errors(form.fecha) }}*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		{% if new_id is defined %}*/
/* 			<input type="hidden" id="new_id" name="new_id" value="{{ new_id }}">*/
/* 		{% endif %}*/
/* */
/* 	</div>*/
/* */
/* 	<div class="botones floatLeft">*/
/* 		*/
/* 		<input class="boton" type="button" value="{% trans from "content" into _locale %} admin.btn_back {% endtrans %}" onclick="window.location.href='{{ url('dh_admin_news') }}'">*/
/* */
/* 		{{ form_widget(form.save) }}*/
/* */
/* 	</div>*/
/* */
/* */
/* 	{{ form_end(form) }}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
