<?php

/* ::foot.html.twig */
class __TwigTemplate_1f62e14ae66196e60015d497320633c7c1011ba81152bf57967819961c233c7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_889effc022f548df96c2cf2b0c56bf29ad4a63d84a10b3146b22af55cea5f613 = $this->env->getExtension("native_profiler");
        $__internal_889effc022f548df96c2cf2b0c56bf29ad4a63d84a10b3146b22af55cea5f613->enter($__internal_889effc022f548df96c2cf2b0c56bf29ad4a63d84a10b3146b22af55cea5f613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::foot.html.twig"));

        // line 1
        $this->displayBlock('foot', $context, $blocks);
        
        $__internal_889effc022f548df96c2cf2b0c56bf29ad4a63d84a10b3146b22af55cea5f613->leave($__internal_889effc022f548df96c2cf2b0c56bf29ad4a63d84a10b3146b22af55cea5f613_prof);

    }

    public function block_foot($context, array $blocks = array())
    {
        $__internal_ca1018974eebf1276a2fda6e2ad0e45dc3b2e5ab20494ad68300b557ec8a8126 = $this->env->getExtension("native_profiler");
        $__internal_ca1018974eebf1276a2fda6e2ad0e45dc3b2e5ab20494ad68300b557ec8a8126->enter($__internal_ca1018974eebf1276a2fda6e2ad0e45dc3b2e5ab20494ad68300b557ec8a8126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot"));

        // line 2
        echo "
\t<footer>
\t\t\t";
        // line 4
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_CONTACT", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo " : <a href=\"mailto:";
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo " </a>
\t</footer>

";
        
        $__internal_ca1018974eebf1276a2fda6e2ad0e45dc3b2e5ab20494ad68300b557ec8a8126->leave($__internal_ca1018974eebf1276a2fda6e2ad0e45dc3b2e5ab20494ad68300b557ec8a8126_prof);

    }

    public function getTemplateName()
    {
        return "::foot.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  35 => 2,  23 => 1,);
    }
}
/* {% block foot %}*/
/* */
/* 	<footer>*/
/* 			{% trans from "menu" into _locale %} STR_CONTACT {% endtrans %} : <a href="mailto:{{ contact_email }}"> {{ contact_email }} </a>*/
/* 	</footer>*/
/* */
/* {% endblock %}*/
