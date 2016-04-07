<?php

/* @DH/Admin/login.html.twig */
class __TwigTemplate_6f3f977dff06a7214641f9f4e5f7597f3ab43f0cec320404c9e54d84b8c45411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@DH/Admin/login.html.twig", 1);
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
        $__internal_b4ec00f0c02239296c8f40f92694b911e3adade4021282a343d1340355992598 = $this->env->getExtension("native_profiler");
        $__internal_b4ec00f0c02239296c8f40f92694b911e3adade4021282a343d1340355992598->enter($__internal_b4ec00f0c02239296c8f40f92694b911e3adade4021282a343d1340355992598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DH/Admin/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4ec00f0c02239296c8f40f92694b911e3adade4021282a343d1340355992598->leave($__internal_b4ec00f0c02239296c8f40f92694b911e3adade4021282a343d1340355992598_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_dfe8a451da371051581f10977ddc944e23a58d9451fa147be6321fbdddbe222f = $this->env->getExtension("native_profiler");
        $__internal_dfe8a451da371051581f10977ddc944e23a58d9451fa147be6321fbdddbe222f->enter($__internal_dfe8a451da371051581f10977ddc944e23a58d9451fa147be6321fbdddbe222f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
\t<div class=\"contain\">

\t\t<h1>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.login", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "</h1>


\t\t";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "\t\t    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.username", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo ":</label>
\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
\t\t 
\t\t \t<br><br>

\t\t    <label for=\"password\">";
        // line 22
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.password", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo ":</label>
\t\t    <input type=\"password\" id=\"password\" name=\"_password\" />
\t\t 
\t\t    ";
        // line 30
        echo "\t\t 
\t\t \t<br><br>

\t\t    <button class=\"boton\" type=\"submit\">";
        // line 33
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.loginEnter", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo "</button>

\t\t</form>


\t</div>

";
        
        $__internal_dfe8a451da371051581f10977ddc944e23a58d9451fa147be6321fbdddbe222f->leave($__internal_dfe8a451da371051581f10977ddc944e23a58d9451fa147be6321fbdddbe222f_prof);

    }

    public function getTemplateName()
    {
        return "@DH/Admin/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 33,  85 => 30,  79 => 22,  72 => 18,  68 => 17,  63 => 15,  59 => 13,  53 => 11,  51 => 10,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
