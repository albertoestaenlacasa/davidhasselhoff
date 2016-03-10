<?php

/* ::base.html.twig */
class __TwigTemplate_2152007ee53577773574950b24417166b38375c52b7c7af586a1d0c44e32518d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a154268d6d3a07ef996207f87c0e385263b0dfd80ceba6dfcf59f4057007c25c = $this->env->getExtension("native_profiler");
        $__internal_a154268d6d3a07ef996207f87c0e385263b0dfd80ceba6dfcf59f4057007c25c->enter($__internal_a154268d6d3a07ef996207f87c0e385263b0dfd80ceba6dfcf59f4057007c25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a154268d6d3a07ef996207f87c0e385263b0dfd80ceba6dfcf59f4057007c25c->leave($__internal_a154268d6d3a07ef996207f87c0e385263b0dfd80ceba6dfcf59f4057007c25c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8187b32a1e289978000541ecadedfb746c9d00429e1f8b17eb2208d74084a688 = $this->env->getExtension("native_profiler");
        $__internal_8187b32a1e289978000541ecadedfb746c9d00429e1f8b17eb2208d74084a688->enter($__internal_8187b32a1e289978000541ecadedfb746c9d00429e1f8b17eb2208d74084a688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8187b32a1e289978000541ecadedfb746c9d00429e1f8b17eb2208d74084a688->leave($__internal_8187b32a1e289978000541ecadedfb746c9d00429e1f8b17eb2208d74084a688_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7fd0e4561ce1b6106e7b771e9eee410158b208f711c1f99a59f4ad5bf56a9bc0 = $this->env->getExtension("native_profiler");
        $__internal_7fd0e4561ce1b6106e7b771e9eee410158b208f711c1f99a59f4ad5bf56a9bc0->enter($__internal_7fd0e4561ce1b6106e7b771e9eee410158b208f711c1f99a59f4ad5bf56a9bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7fd0e4561ce1b6106e7b771e9eee410158b208f711c1f99a59f4ad5bf56a9bc0->leave($__internal_7fd0e4561ce1b6106e7b771e9eee410158b208f711c1f99a59f4ad5bf56a9bc0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9badb8611688ff79d14b000e9daa41895e8e41267d9cce7f09a38e6a868ac067 = $this->env->getExtension("native_profiler");
        $__internal_9badb8611688ff79d14b000e9daa41895e8e41267d9cce7f09a38e6a868ac067->enter($__internal_9badb8611688ff79d14b000e9daa41895e8e41267d9cce7f09a38e6a868ac067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9badb8611688ff79d14b000e9daa41895e8e41267d9cce7f09a38e6a868ac067->leave($__internal_9badb8611688ff79d14b000e9daa41895e8e41267d9cce7f09a38e6a868ac067_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d90d43335f00c1548affe22d6fc2a119284ffaecb5a851be45503ff830e63ec = $this->env->getExtension("native_profiler");
        $__internal_3d90d43335f00c1548affe22d6fc2a119284ffaecb5a851be45503ff830e63ec->enter($__internal_3d90d43335f00c1548affe22d6fc2a119284ffaecb5a851be45503ff830e63ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3d90d43335f00c1548affe22d6fc2a119284ffaecb5a851be45503ff830e63ec->leave($__internal_3d90d43335f00c1548affe22d6fc2a119284ffaecb5a851be45503ff830e63ec_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
