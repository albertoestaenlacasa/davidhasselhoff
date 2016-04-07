<?php

/* ::menu.html.twig */
class __TwigTemplate_6f6aa2bdc02fe2d9c063244c45461a161ef4ab87153b0e95a5e60a129d9e8326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5b5757bc995fd7969cc64231129d840d5a309eeb48794893f8c69a7cf630cf7 = $this->env->getExtension("native_profiler");
        $__internal_d5b5757bc995fd7969cc64231129d840d5a309eeb48794893f8c69a7cf630cf7->enter($__internal_d5b5757bc995fd7969cc64231129d840d5a309eeb48794893f8c69a7cf630cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('menu', $context, $blocks);
        
        $__internal_d5b5757bc995fd7969cc64231129d840d5a309eeb48794893f8c69a7cf630cf7->leave($__internal_d5b5757bc995fd7969cc64231129d840d5a309eeb48794893f8c69a7cf630cf7_prof);

    }

    public function block_menu($context, array $blocks = array())
    {
        $__internal_a433f305525bb18dbe19f0c81a59309387c119c835d8735e6cd619475177d0b0 = $this->env->getExtension("native_profiler");
        $__internal_a433f305525bb18dbe19f0c81a59309387c119c835d8735e6cd619475177d0b0->enter($__internal_a433f305525bb18dbe19f0c81a59309387c119c835d8735e6cd619475177d0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "
\t<div>
\t\t";
        // line 6
        echo "\t\t<div id=\"idioma\">
\t\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("dh_changeLang", array("lang" => "es"));
        echo "\">
\t\t\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/spain.png"), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")) != "es")) {
            echo "noSelected";
        }
        echo "\" title=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_LANG", array(), "menu", "es");
        echo "\" />
\t\t\t<a/>
\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("dh_changeLang", array("lang" => "ca"));
        echo "\">
\t\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/comunidadValenciana.gif"), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")) != "ca")) {
            echo "noSelected";
        }
        echo "\" title=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_LANG", array(), "menu", "ca");
        echo "\"/>
\t\t\t<a/>\t
\t\t\t<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("dh_changeLang", array("lang" => "en"));
        echo "\">
\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/bandera-en.jpg"), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")) != "en")) {
            echo "noSelected";
        }
        echo "\" title=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_LANG", array(), "menu", "en");
        echo "\" />
\t\t\t<a/> 
\t\t</div>

\t\t";
        // line 19
        echo "\t\t<div id=\"menu\">
\t\t\t<div id=\"ini\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getUrl("dh_homepage");
        echo "\">David Hasselhoff</a></div>

\t\t\t";
        // line 23
        echo "\t\t\t<div><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("dh_admin");
        echo "\">
\t\t\t\t<img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/icon-login.png"), "html", null, true);
        echo "\" title=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_ADMIN", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "\" /></a>
\t\t\t</div>

\t\t\t<div><a href=\"\">";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_GLOSARY", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "</a></div>

\t\t\t<div><a href=\"\">";
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_MUSIC", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "</a></div>

\t\t\t<div><a href=\"\">";
        // line 31
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_MOVIES", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "</a></div>

\t\t\t<div><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("dh_news");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_NEWS", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "</a></div>

\t\t</div>
\t</div>\t

";
        
        $__internal_a433f305525bb18dbe19f0c81a59309387c119c835d8735e6cd619475177d0b0->leave($__internal_a433f305525bb18dbe19f0c81a59309387c119c835d8735e6cd619475177d0b0_prof);

    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 33,  123 => 31,  118 => 29,  113 => 27,  105 => 24,  100 => 23,  95 => 20,  92 => 19,  79 => 14,  75 => 13,  64 => 11,  60 => 10,  49 => 8,  45 => 7,  42 => 6,  38 => 3,  26 => 2,  23 => 1,);
    }
}
/* */
/* {% block menu %}*/
/* */
/* 	<div>*/
/* 		{# selección de idioimas #}*/
/* 		<div id="idioma">*/
/* 			<a href="{{ url('dh_changeLang', {lang: 'es'}) }}">*/
/* 				<img src="{{ asset('images/spain.png') }}" class="{% if _locale != 'es' %}noSelected{% endif %}" title="{% trans from "menu" into 'es' %} STR_LANG {% endtrans %}" />*/
/* 			<a/>*/
/* 			<a href="{{ url('dh_changeLang', {lang: 'ca'}) }}">*/
/* 				<img src="{{ asset('images/comunidadValenciana.gif') }}" class="{% if _locale != 'ca' %}noSelected{% endif %}" title="{% trans from "menu" into 'ca' %} STR_LANG {% endtrans %}"/>*/
/* 			<a/>	*/
/* 			<a href="{{ url('dh_changeLang', {lang: 'en'}) }}">*/
/* 				<img src="{{ asset('images/bandera-en.jpg') }}" class="{% if _locale != 'en' %}noSelected{% endif %}" title="{% trans from "menu" into 'en' %} STR_LANG {% endtrans %}" />*/
/* 			<a/> */
/* 		</div>*/
/* */
/* 		{# menú principal #}*/
/* 		<div id="menu">*/
/* 			<div id="ini"><a href="{{ url('dh_homepage') }}">David Hasselhoff</a></div>*/
/* */
/* 			{# acceso con autorización #}*/
/* 			<div><a href="{{ url('dh_admin') }}">*/
/* 				<img src="{{ asset('images/icon-login.png') }}" title="{% trans from "menu" into _locale %} STR_ADMIN {% endtrans %}" /></a>*/
/* 			</div>*/
/* */
/* 			<div><a href="">{% trans from "menu" into _locale %} STR_GLOSARY {% endtrans %}</a></div>*/
/* */
/* 			<div><a href="">{% trans from "menu" into _locale %} STR_MUSIC {% endtrans %}</a></div>*/
/* */
/* 			<div><a href="">{% trans from "menu" into _locale %} STR_MOVIES {% endtrans %}</a></div>*/
/* */
/* 			<div><a href="{{ url('dh_news') }}">{% trans from "menu" into _locale %} STR_NEWS {% endtrans %}</a></div>*/
/* */
/* 		</div>*/
/* 	</div>	*/
/* */
/* {% endblock %}*/
