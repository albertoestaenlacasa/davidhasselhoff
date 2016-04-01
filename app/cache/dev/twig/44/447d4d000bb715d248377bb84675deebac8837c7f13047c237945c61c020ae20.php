<?php

/* @MyRecipes/Author/showAuthors.html.twig */
class __TwigTemplate_c2f5197cf6d9da0b6c0c2a24fdf09ff5f6c2aecef0bfefbd2b5aa39ceac38a30 extends Twig_Template
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
        $__internal_3824c0eeb803c9247fcfb2e49479c7be8231a2fe849c914f7311258e8bd66855 = $this->env->getExtension("native_profiler");
        $__internal_3824c0eeb803c9247fcfb2e49479c7be8231a2fe849c914f7311258e8bd66855->enter($__internal_3824c0eeb803c9247fcfb2e49479c7be8231a2fe849c914f7311258e8bd66855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MyRecipes/Author/showAuthors.html.twig"));

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
        
        $__internal_3824c0eeb803c9247fcfb2e49479c7be8231a2fe849c914f7311258e8bd66855->leave($__internal_3824c0eeb803c9247fcfb2e49479c7be8231a2fe849c914f7311258e8bd66855_prof);

    }

    public function getTemplateName()
    {
        return "@MyRecipes/Author/showAuthors.html.twig";
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
