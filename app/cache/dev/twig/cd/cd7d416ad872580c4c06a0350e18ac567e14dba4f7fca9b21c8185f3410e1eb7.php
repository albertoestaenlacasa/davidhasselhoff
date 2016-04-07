<?php

/* base.html.twig */
class __TwigTemplate_ce9c40c48478c65f85c166e2dc21114526d261558e5e214f8841bd68e0038026 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'contentBase' => array($this, 'block_contentBase'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bde9a20f7aed6355ae80b3f6ca98504ff5179d554db9f8995c38997b54d32592 = $this->env->getExtension("native_profiler");
        $__internal_bde9a20f7aed6355ae80b3f6ca98504ff5179d554db9f8995c38997b54d32592->enter($__internal_bde9a20f7aed6355ae80b3f6ca98504ff5179d554db9f8995c38997b54d32592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 2
        $context["_locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "_locale"), "method");
        // line 3
        echo "


<!DOCTYPE html>

<html>

<head>
\t
\t<meta charset=\"UTF-8\" />
\t
\t<title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t<link rel=\"icon\" type=\"image/x-icon\" href=\"\" />

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />

</head>

<body>



\t";
        // line 26
        $this->displayBlock('menu', $context, $blocks);
        // line 27
        echo "
\t";
        // line 28
        $this->displayBlock('contentBase', $context, $blocks);
        // line 35
        echo "
\t";
        // line 36
        $this->displayBlock('javascript', $context, $blocks);
        // line 37
        echo "
\t";
        // line 38
        $this->displayBlock('foot', $context, $blocks);
        // line 39
        echo "
</body>

</html>

";
        
        $__internal_bde9a20f7aed6355ae80b3f6ca98504ff5179d554db9f8995c38997b54d32592->leave($__internal_bde9a20f7aed6355ae80b3f6ca98504ff5179d554db9f8995c38997b54d32592_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c9dae20981a8e65ce5691a7cf606140f3a603b06d57a7a6f24e9daf795fd27f = $this->env->getExtension("native_profiler");
        $__internal_8c9dae20981a8e65ce5691a7cf606140f3a603b06d57a7a6f24e9daf795fd27f->enter($__internal_8c9dae20981a8e65ce5691a7cf606140f3a603b06d57a7a6f24e9daf795fd27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "David Hasselhoff";
        
        $__internal_8c9dae20981a8e65ce5691a7cf606140f3a603b06d57a7a6f24e9daf795fd27f->leave($__internal_8c9dae20981a8e65ce5691a7cf606140f3a603b06d57a7a6f24e9daf795fd27f_prof);

    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        $__internal_56d8517714bf7128f6996fb0c1702aae88aaea48423c92d1edb4a9677901ca6d = $this->env->getExtension("native_profiler");
        $__internal_56d8517714bf7128f6996fb0c1702aae88aaea48423c92d1edb4a9677901ca6d->enter($__internal_56d8517714bf7128f6996fb0c1702aae88aaea48423c92d1edb4a9677901ca6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        echo " ";
        $this->loadTemplate("::menu.html.twig", "base.html.twig", 26)->display($context);
        echo " ";
        
        $__internal_56d8517714bf7128f6996fb0c1702aae88aaea48423c92d1edb4a9677901ca6d->leave($__internal_56d8517714bf7128f6996fb0c1702aae88aaea48423c92d1edb4a9677901ca6d_prof);

    }

    // line 28
    public function block_contentBase($context, array $blocks = array())
    {
        $__internal_760b954fa4512a671996ee5319b5f817c4aec8f2a26bcf313938dd1c000372aa = $this->env->getExtension("native_profiler");
        $__internal_760b954fa4512a671996ee5319b5f817c4aec8f2a26bcf313938dd1c000372aa->enter($__internal_760b954fa4512a671996ee5319b5f817c4aec8f2a26bcf313938dd1c000372aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBase"));

        // line 29
        echo "
\t\t<div class=\"contain\">
\t\t\t";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "\t\t</div>

\t";
        
        $__internal_760b954fa4512a671996ee5319b5f817c4aec8f2a26bcf313938dd1c000372aa->leave($__internal_760b954fa4512a671996ee5319b5f817c4aec8f2a26bcf313938dd1c000372aa_prof);

    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        $__internal_ac4e43ae9307c724c5659f750bbde59957cca6759b0460d94f4c84b1a825f322 = $this->env->getExtension("native_profiler");
        $__internal_ac4e43ae9307c724c5659f750bbde59957cca6759b0460d94f4c84b1a825f322->enter($__internal_ac4e43ae9307c724c5659f750bbde59957cca6759b0460d94f4c84b1a825f322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_ac4e43ae9307c724c5659f750bbde59957cca6759b0460d94f4c84b1a825f322->leave($__internal_ac4e43ae9307c724c5659f750bbde59957cca6759b0460d94f4c84b1a825f322_prof);

    }

    // line 36
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_e4ec35058103be485cd60250898dac3029eabcbb4ec2b7840df6589be5644f78 = $this->env->getExtension("native_profiler");
        $__internal_e4ec35058103be485cd60250898dac3029eabcbb4ec2b7840df6589be5644f78->enter($__internal_e4ec35058103be485cd60250898dac3029eabcbb4ec2b7840df6589be5644f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo " ";
        
        $__internal_e4ec35058103be485cd60250898dac3029eabcbb4ec2b7840df6589be5644f78->leave($__internal_e4ec35058103be485cd60250898dac3029eabcbb4ec2b7840df6589be5644f78_prof);

    }

    // line 38
    public function block_foot($context, array $blocks = array())
    {
        $__internal_9b5dfa8172e990f158a9b4efccd0f788775d1c330f5fffc0b939df9a0644558c = $this->env->getExtension("native_profiler");
        $__internal_9b5dfa8172e990f158a9b4efccd0f788775d1c330f5fffc0b939df9a0644558c->enter($__internal_9b5dfa8172e990f158a9b4efccd0f788775d1c330f5fffc0b939df9a0644558c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot"));

        echo " ";
        $this->loadTemplate("::foot.html.twig", "base.html.twig", 38)->display($context);
        echo " ";
        
        $__internal_9b5dfa8172e990f158a9b4efccd0f788775d1c330f5fffc0b939df9a0644558c->leave($__internal_9b5dfa8172e990f158a9b4efccd0f788775d1c330f5fffc0b939df9a0644558c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 38,  149 => 36,  137 => 31,  128 => 32,  126 => 31,  122 => 29,  116 => 28,  102 => 26,  90 => 14,  78 => 39,  76 => 38,  73 => 37,  71 => 36,  68 => 35,  66 => 28,  63 => 27,  61 => 26,  50 => 18,  43 => 14,  30 => 3,  28 => 2,);
    }
}
/* {# inicializamos variable _locale para está página #}*/
/* {% set _locale = app.session.get('_locale') %}*/
/* */
/* */
/* */
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* */
/* <head>*/
/* 	*/
/* 	<meta charset="UTF-8" />*/
/* 	*/
/* 	<title>{% block title %}David Hasselhoff{% endblock %}</title>*/
/* */
/* 	<link rel="icon" type="image/x-icon" href="" />*/
/* */
/* 	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* */
/* */
/* 	{% block menu %} {% include '::menu.html.twig' %} {% endblock %}*/
/* */
/* 	{% block contentBase %}*/
/* */
/* 		<div class="contain">*/
/* 			{% block content %} {% endblock %}*/
/* 		</div>*/
/* */
/* 	{% endblock %}*/
/* */
/* 	{% block javascript %} {% endblock %}*/
/* */
/* 	{% block foot %} {% include '::foot.html.twig' %} {% endblock %}*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
/* */
