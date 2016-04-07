<?php

/* MyRecipesBundle:Trans:index.html.twig */
class __TwigTemplate_e4a5d3f90611f844a09116c85ec9b2114d4c4957e4687f0179f9ea7085d7913f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d8830870b76ed6b07ba3e0f70590b4ffb37fdb64110f574d1f7b64df4bb7468 = $this->env->getExtension("native_profiler");
        $__internal_6d8830870b76ed6b07ba3e0f70590b4ffb37fdb64110f574d1f7b64df4bb7468->enter($__internal_6d8830870b76ed6b07ba3e0f70590b4ffb37fdb64110f574d1f7b64df4bb7468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Trans:index.html.twig"));

        // line 1
        echo "<html>
<head>
\t<title>traducciones</title>
</head>
<body>

\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("prueba_trans_change", array("lang" => "en_US"));
        echo "\">En<a/> |
\t<a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("prueba_trans_change", array("lang" => "es_ES"));
        echo "\">Es<a/> |
\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("prueba_trans_change", array("lang" => "ca_ES"));
        echo "\">Vl<a/>\t

\t<br><br>

\t_locale = ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")), "html", null, true);
        echo " 

\t<br><br>

\t";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_FIRSTWORD", array(), "messages", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        // line 18
        echo "

</body>
</html>";
        
        $__internal_6d8830870b76ed6b07ba3e0f70590b4ffb37fdb64110f574d1f7b64df4bb7468->leave($__internal_6d8830870b76ed6b07ba3e0f70590b4ffb37fdb64110f574d1f7b64df4bb7468_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesBundle:Trans:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  52 => 17,  45 => 13,  38 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }
}
/* <html>*/
/* <head>*/
/* 	<title>traducciones</title>*/
/* </head>*/
/* <body>*/
/* */
/* 	<a href="{{ url('prueba_trans_change', {lang: 'en_US'}) }}">En<a/> |*/
/* 	<a href="{{ url('prueba_trans_change', {lang: 'es_ES'}) }}">Es<a/> |*/
/* 	<a href="{{ url('prueba_trans_change', {lang: 'ca_ES'}) }}">Vl<a/>	*/
/* */
/* 	<br><br>*/
/* */
/* 	_locale = {{ _locale }} */
/* */
/* 	<br><br>*/
/* */
/* 	{% trans into _locale %} STR_FIRSTWORD {% endtrans %}*/
/* */
/* */
/* </body>*/
/* </html>*/
