<?php

/* @MyRecipes/Trans/index.html.twig */
class __TwigTemplate_60bd38e9df3ed318df29d6d72a4b4e7fb84e80f8fa73964099759f13d6b14145 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["_locale"]) ? $context["_locale"] : null), "html", null, true);
        echo " 

\t<br><br>

\t";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_FIRSTWORD", array(), "messages", (isset($context["_locale"]) ? $context["_locale"] : null));
        // line 18
        echo "

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@MyRecipes/Trans/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 18,  49 => 17,  42 => 13,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
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
