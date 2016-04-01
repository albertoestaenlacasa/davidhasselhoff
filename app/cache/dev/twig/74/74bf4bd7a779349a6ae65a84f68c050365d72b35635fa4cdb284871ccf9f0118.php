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
        $__internal_e55b4d1cdeb9a0a8a5758c15a1a763da7529fdb61d13713094a22e980a120aa2 = $this->env->getExtension("native_profiler");
        $__internal_e55b4d1cdeb9a0a8a5758c15a1a763da7529fdb61d13713094a22e980a120aa2->enter($__internal_e55b4d1cdeb9a0a8a5758c15a1a763da7529fdb61d13713094a22e980a120aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e55b4d1cdeb9a0a8a5758c15a1a763da7529fdb61d13713094a22e980a120aa2->leave($__internal_e55b4d1cdeb9a0a8a5758c15a1a763da7529fdb61d13713094a22e980a120aa2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5914134b8f76f89c8b641f5392fb9f6f642a65bd719e701d57375a445446977 = $this->env->getExtension("native_profiler");
        $__internal_b5914134b8f76f89c8b641f5392fb9f6f642a65bd719e701d57375a445446977->enter($__internal_b5914134b8f76f89c8b641f5392fb9f6f642a65bd719e701d57375a445446977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b5914134b8f76f89c8b641f5392fb9f6f642a65bd719e701d57375a445446977->leave($__internal_b5914134b8f76f89c8b641f5392fb9f6f642a65bd719e701d57375a445446977_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_87e03aa1ad94d55c1b4f15eca355791c63fdf894e50e5378ea4fb14c071c6350 = $this->env->getExtension("native_profiler");
        $__internal_87e03aa1ad94d55c1b4f15eca355791c63fdf894e50e5378ea4fb14c071c6350->enter($__internal_87e03aa1ad94d55c1b4f15eca355791c63fdf894e50e5378ea4fb14c071c6350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_87e03aa1ad94d55c1b4f15eca355791c63fdf894e50e5378ea4fb14c071c6350->leave($__internal_87e03aa1ad94d55c1b4f15eca355791c63fdf894e50e5378ea4fb14c071c6350_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae9151b4bbfcbffa3d8b9db6fe8c6f8b190adbb78ac09e06bf3d31020ed4696a = $this->env->getExtension("native_profiler");
        $__internal_ae9151b4bbfcbffa3d8b9db6fe8c6f8b190adbb78ac09e06bf3d31020ed4696a->enter($__internal_ae9151b4bbfcbffa3d8b9db6fe8c6f8b190adbb78ac09e06bf3d31020ed4696a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ae9151b4bbfcbffa3d8b9db6fe8c6f8b190adbb78ac09e06bf3d31020ed4696a->leave($__internal_ae9151b4bbfcbffa3d8b9db6fe8c6f8b190adbb78ac09e06bf3d31020ed4696a_prof);

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
