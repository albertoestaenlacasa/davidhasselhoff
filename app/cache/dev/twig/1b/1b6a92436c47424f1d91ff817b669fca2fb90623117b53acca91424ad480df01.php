<?php

/* DHBundle:Admin:login.html.twig */
class __TwigTemplate_d5821ae7a9317de01b7ceaee68e5531201b5d940c020e2b8163e21d98035c7e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DHBundle:Admin:login.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t<div class=\"contain\">

\t\t<h1>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.login", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo "</h1>


\t\t";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 11
            echo "\t\t    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 13
        echo "\t\t 
\t\t<center>
\t\t<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("login_check");
        echo "\" method=\"post\">

\t\t    <label for=\"username\">";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.username", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo ":</label>
\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />
\t\t 
\t\t \t<br><br>

\t\t    <label for=\"password\">";
        // line 22
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.password", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo ":</label>
\t\t    <input type=\"password\" id=\"password\" name=\"_password\" />
\t\t 
\t\t    ";
        // line 30
        echo "\t\t 
\t\t \t<br><br>

\t\t    <button class=\"boton\" type=\"submit\">";
        // line 33
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.loginEnter", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo "</button>

\t\t</form>


\t</div>

";
    }

    public function getTemplateName()
    {
        return "DHBundle:Admin:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 33,  76 => 30,  70 => 22,  63 => 18,  59 => 17,  54 => 15,  50 => 13,  44 => 11,  42 => 10,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* 	<div class="contain">*/
/* */
/* 		<h1>{% trans from "content" into _locale %} admin.login {% endtrans %}</h1>*/
/* */
/* */
/* 		{% if error %}*/
/* 		    <div>{{ error.message }}</div>*/
/* 		{% endif %}*/
/* 		 */
/* 		<center>*/
/* 		<form action="{{ url('login_check') }}" method="post">*/
/* */
/* 		    <label for="username">{% trans from "content" into _locale %} admin.username {% endtrans %}:</label>*/
/* 		    <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* 		 */
/* 		 	<br><br>*/
/* */
/* 		    <label for="password">{% trans from "content" into _locale %} admin.password {% endtrans %}:</label>*/
/* 		    <input type="password" id="password" name="_password" />*/
/* 		 */
/* 		    {#*/
/* 		        añade lo siguiente si quieres redirigir al usuario a una*/
/* 		        URL concreta después del login (explicado más adelante)*/
/* 		        <input type="hidden" name="_target_path" value="/account" />*/
/* 		    #}*/
/* 		 */
/* 		 	<br><br>*/
/* */
/* 		    <button class="boton" type="submit">{% trans from "content" into _locale %} admin.loginEnter {% endtrans %}</button>*/
/* */
/* 		</form>*/
/* */
/* */
/* 	</div>*/
/* */
/* {% endblock %}*/
