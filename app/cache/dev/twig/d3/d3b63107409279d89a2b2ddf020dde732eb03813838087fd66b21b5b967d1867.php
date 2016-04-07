<?php

/* MyRecipesBundle:Author:showAuthors.html.twig */
class __TwigTemplate_23d1572fb5dbfc0ed46fa6b9b0a3ad652612f4763cef3740dd365961d9e6c661 extends Twig_Template
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
        $__internal_be5b6c7c6f66d7c6aa7cf19cdf55bb81109859b66f80bd5615a558462ff2760b = $this->env->getExtension("native_profiler");
        $__internal_be5b6c7c6f66d7c6aa7cf19cdf55bb81109859b66f80bd5615a558462ff2760b->enter($__internal_be5b6c7c6f66d7c6aa7cf19cdf55bb81109859b66f80bd5615a558462ff2760b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Author:showAuthors.html.twig"));

        // line 1
        echo "

<h1>Cocineros</h1>

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authores"]) ? $context["authores"] : $this->getContext($context, "authores")));
        foreach ($context['_seq'] as $context["_key"] => $context["autor"]) {
            // line 6
            echo "
\t<li> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["autor"], "name", array()), "html", null, true);
            echo " </li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['autor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_be5b6c7c6f66d7c6aa7cf19cdf55bb81109859b66f80bd5615a558462ff2760b->leave($__internal_be5b6c7c6f66d7c6aa7cf19cdf55bb81109859b66f80bd5615a558462ff2760b_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesBundle:Author:showAuthors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* */
/* */
/* <h1>Cocineros</h1>*/
/* */
/* {% for autor in authores %}*/
/* */
/* 	<li> {{ autor.name }} </li>*/
/* */
/* {% endfor %}*/
