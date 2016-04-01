<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_796599cf9e39e6443e5e0b8e7c6515daae8862782d4f761e285b77eca5925538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_961da55a0625a1986ee7275b3bd854eb1f0d4f49474d19cef8e48f073b0028b1 = $this->env->getExtension("native_profiler");
        $__internal_961da55a0625a1986ee7275b3bd854eb1f0d4f49474d19cef8e48f073b0028b1->enter($__internal_961da55a0625a1986ee7275b3bd854eb1f0d4f49474d19cef8e48f073b0028b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_961da55a0625a1986ee7275b3bd854eb1f0d4f49474d19cef8e48f073b0028b1->leave($__internal_961da55a0625a1986ee7275b3bd854eb1f0d4f49474d19cef8e48f073b0028b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f407789237f86997eebb27bd3ee48f73d0df5856c2f26342f2d6fcdaedaf2214 = $this->env->getExtension("native_profiler");
        $__internal_f407789237f86997eebb27bd3ee48f73d0df5856c2f26342f2d6fcdaedaf2214->enter($__internal_f407789237f86997eebb27bd3ee48f73d0df5856c2f26342f2d6fcdaedaf2214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f407789237f86997eebb27bd3ee48f73d0df5856c2f26342f2d6fcdaedaf2214->leave($__internal_f407789237f86997eebb27bd3ee48f73d0df5856c2f26342f2d6fcdaedaf2214_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e710d512aaa038a3090185428ddefc5917fc31b2b5645a57c0830044059ef0bb = $this->env->getExtension("native_profiler");
        $__internal_e710d512aaa038a3090185428ddefc5917fc31b2b5645a57c0830044059ef0bb->enter($__internal_e710d512aaa038a3090185428ddefc5917fc31b2b5645a57c0830044059ef0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e710d512aaa038a3090185428ddefc5917fc31b2b5645a57c0830044059ef0bb->leave($__internal_e710d512aaa038a3090185428ddefc5917fc31b2b5645a57c0830044059ef0bb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_204f5c717af78c2936a3037b044428ee2ecd66719f3c2fd24e09e3837e84506c = $this->env->getExtension("native_profiler");
        $__internal_204f5c717af78c2936a3037b044428ee2ecd66719f3c2fd24e09e3837e84506c->enter($__internal_204f5c717af78c2936a3037b044428ee2ecd66719f3c2fd24e09e3837e84506c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_204f5c717af78c2936a3037b044428ee2ecd66719f3c2fd24e09e3837e84506c->leave($__internal_204f5c717af78c2936a3037b044428ee2ecd66719f3c2fd24e09e3837e84506c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
