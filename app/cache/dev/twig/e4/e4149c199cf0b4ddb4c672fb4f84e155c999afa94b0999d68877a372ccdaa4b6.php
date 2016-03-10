<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7b2fa0c35b550f805cdc2374a37e604b135e7a665765c4a19fe466a1bd99267b extends Twig_Template
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
        $__internal_7a01a775d08f337e695fd426a231af1b3241d007cbdf7a279b05a1b8c5454e8d = $this->env->getExtension("native_profiler");
        $__internal_7a01a775d08f337e695fd426a231af1b3241d007cbdf7a279b05a1b8c5454e8d->enter($__internal_7a01a775d08f337e695fd426a231af1b3241d007cbdf7a279b05a1b8c5454e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7a01a775d08f337e695fd426a231af1b3241d007cbdf7a279b05a1b8c5454e8d->leave($__internal_7a01a775d08f337e695fd426a231af1b3241d007cbdf7a279b05a1b8c5454e8d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
