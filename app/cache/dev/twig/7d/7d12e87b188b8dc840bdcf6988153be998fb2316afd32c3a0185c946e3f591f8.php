<?php

/* DHBundle:Admin:login.html.twig */
class __TwigTemplate_d6d33ed9be63c3a586f15e549c4733c0b1412edbec69917dfe8f051a4b4bd34a extends Twig_Template
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
        $__internal_94c9ccfa6d30e3411a7276821d8af9b54a6ba61ffe8e6c855a90ab8d8ea2619b = $this->env->getExtension("native_profiler");
        $__internal_94c9ccfa6d30e3411a7276821d8af9b54a6ba61ffe8e6c855a90ab8d8ea2619b->enter($__internal_94c9ccfa6d30e3411a7276821d8af9b54a6ba61ffe8e6c855a90ab8d8ea2619b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DHBundle:Admin:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94c9ccfa6d30e3411a7276821d8af9b54a6ba61ffe8e6c855a90ab8d8ea2619b->leave($__internal_94c9ccfa6d30e3411a7276821d8af9b54a6ba61ffe8e6c855a90ab8d8ea2619b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ea961b60bcaa63cf7e5de93ebdf243d5778fd5e4027dbe9e4feb6537bf10570b = $this->env->getExtension("native_profiler");
        $__internal_ea961b60bcaa63cf7e5de93ebdf243d5778fd5e4027dbe9e4feb6537bf10570b->enter($__internal_ea961b60bcaa63cf7e5de93ebdf243d5778fd5e4027dbe9e4feb6537bf10570b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
\t<div class=\"contain\">

\t\t<h1>**Login**</h1>


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

\t\t    <label for=\"username\">**Username**:</label>
\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
\t\t 
\t\t \t<br><br>

\t\t    <label for=\"password\">**Password**:</label>
\t\t    <input type=\"password\" id=\"password\" name=\"_password\" />
\t\t 
\t\t    ";
        // line 30
        echo "\t\t 
\t\t \t<br><br>

\t\t    <button type=\"submit\">**login**</button>

\t\t</form>


\t</div>

";
        
        $__internal_ea961b60bcaa63cf7e5de93ebdf243d5778fd5e4027dbe9e4feb6537bf10570b->leave($__internal_ea961b60bcaa63cf7e5de93ebdf243d5778fd5e4027dbe9e4feb6537bf10570b_prof);

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
        return array (  76 => 30,  66 => 18,  60 => 15,  56 => 13,  50 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* 	<div class="contain">*/
/* */
/* 		<h1>**Login**</h1>*/
/* */
/* */
/* 		{% if error %}*/
/* 		    <div>{{ error.message }}</div>*/
/* 		{% endif %}*/
/* 		 */
/* 		<center>*/
/* 		<form action="{{ url('login_check') }}" method="post">*/
/* */
/* 		    <label for="username">**Username**:</label>*/
/* 		    <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* 		 */
/* 		 	<br><br>*/
/* */
/* 		    <label for="password">**Password**:</label>*/
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
/* 		    <button type="submit">**login**</button>*/
/* */
/* 		</form>*/
/* */
/* */
/* 	</div>*/
/* */
/* {% endblock %}*/
