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
        $__internal_64dcd7e7e5beec039e465eae0b2d42e1bfe8dbbf98cf637ec12d4bac49e40baf = $this->env->getExtension("native_profiler");
        $__internal_64dcd7e7e5beec039e465eae0b2d42e1bfe8dbbf98cf637ec12d4bac49e40baf->enter($__internal_64dcd7e7e5beec039e465eae0b2d42e1bfe8dbbf98cf637ec12d4bac49e40baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DH/Admin/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64dcd7e7e5beec039e465eae0b2d42e1bfe8dbbf98cf637ec12d4bac49e40baf->leave($__internal_64dcd7e7e5beec039e465eae0b2d42e1bfe8dbbf98cf637ec12d4bac49e40baf_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_91714a384999c896ef84264b085e3839b5c760a8ff5973853118d2b945533f30 = $this->env->getExtension("native_profiler");
        $__internal_91714a384999c896ef84264b085e3839b5c760a8ff5973853118d2b945533f30->enter($__internal_91714a384999c896ef84264b085e3839b5c760a8ff5973853118d2b945533f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_91714a384999c896ef84264b085e3839b5c760a8ff5973853118d2b945533f30->leave($__internal_91714a384999c896ef84264b085e3839b5c760a8ff5973853118d2b945533f30_prof);

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
