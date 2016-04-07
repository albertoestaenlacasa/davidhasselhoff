<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_28ed8a44075a8fa2e25058c32ed7c7dc36cceeec9a47142334835dd752ed60ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28d22e27120c99f161389988f48c3425ec653c79a7567df58732a5aa7b1d5d0d = $this->env->getExtension("native_profiler");
        $__internal_28d22e27120c99f161389988f48c3425ec653c79a7567df58732a5aa7b1d5d0d->enter($__internal_28d22e27120c99f161389988f48c3425ec653c79a7567df58732a5aa7b1d5d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28d22e27120c99f161389988f48c3425ec653c79a7567df58732a5aa7b1d5d0d->leave($__internal_28d22e27120c99f161389988f48c3425ec653c79a7567df58732a5aa7b1d5d0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8677679810e3c4be8db0038d9928b393b4f64f0a06ee1c34d4e884a27f982f38 = $this->env->getExtension("native_profiler");
        $__internal_8677679810e3c4be8db0038d9928b393b4f64f0a06ee1c34d4e884a27f982f38->enter($__internal_8677679810e3c4be8db0038d9928b393b4f64f0a06ee1c34d4e884a27f982f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8677679810e3c4be8db0038d9928b393b4f64f0a06ee1c34d4e884a27f982f38->leave($__internal_8677679810e3c4be8db0038d9928b393b4f64f0a06ee1c34d4e884a27f982f38_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_25e325722667df58cb7043c0034e070a38a24587645ceb5586325b047f5fe29f = $this->env->getExtension("native_profiler");
        $__internal_25e325722667df58cb7043c0034e070a38a24587645ceb5586325b047f5fe29f->enter($__internal_25e325722667df58cb7043c0034e070a38a24587645ceb5586325b047f5fe29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_25e325722667df58cb7043c0034e070a38a24587645ceb5586325b047f5fe29f->leave($__internal_25e325722667df58cb7043c0034e070a38a24587645ceb5586325b047f5fe29f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0da102921282192bfe84367fcdd9993bbb91bfd84a8ba75cddc334cb7567318 = $this->env->getExtension("native_profiler");
        $__internal_d0da102921282192bfe84367fcdd9993bbb91bfd84a8ba75cddc334cb7567318->enter($__internal_d0da102921282192bfe84367fcdd9993bbb91bfd84a8ba75cddc334cb7567318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d0da102921282192bfe84367fcdd9993bbb91bfd84a8ba75cddc334cb7567318->leave($__internal_d0da102921282192bfe84367fcdd9993bbb91bfd84a8ba75cddc334cb7567318_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
