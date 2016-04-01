<?php

/* foot.html.twig */
class __TwigTemplate_3befac1132db2be66d98cbb18133652b16b626cb7df33b9cf2379223cebd3139 extends Twig_Template
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
        $__internal_216c8e5637f072ef50ab5343ba290c501a01c7e41549ccf7321ea7b933b41ef5 = $this->env->getExtension("native_profiler");
        $__internal_216c8e5637f072ef50ab5343ba290c501a01c7e41549ccf7321ea7b933b41ef5->enter($__internal_216c8e5637f072ef50ab5343ba290c501a01c7e41549ccf7321ea7b933b41ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foot.html.twig"));

        // line 1
        $this->displayBlock('foot', $context, $blocks);
        
        $__internal_216c8e5637f072ef50ab5343ba290c501a01c7e41549ccf7321ea7b933b41ef5->leave($__internal_216c8e5637f072ef50ab5343ba290c501a01c7e41549ccf7321ea7b933b41ef5_prof);

    }

    public function block_foot($context, array $blocks = array())
    {
        $__internal_59e704ff89e04eabe2d3b39e9b0e9902bfd9dc235c10689d6df072d156d94820 = $this->env->getExtension("native_profiler");
        $__internal_59e704ff89e04eabe2d3b39e9b0e9902bfd9dc235c10689d6df072d156d94820->enter($__internal_59e704ff89e04eabe2d3b39e9b0e9902bfd9dc235c10689d6df072d156d94820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot"));

        // line 2
        echo "
\t<style type=\"text/css\">
\t\tfooter {
\t\t\tpadding:50px 5px;
\t\t\ttext-align: center;
\t\t}
\t</style>

\t<footer>
\t\t";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_CONTACT", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo " : <a href=\"mailto:";
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo " </a>
\t</footer>

";
        
        $__internal_59e704ff89e04eabe2d3b39e9b0e9902bfd9dc235c10689d6df072d156d94820->leave($__internal_59e704ff89e04eabe2d3b39e9b0e9902bfd9dc235c10689d6df072d156d94820_prof);

    }

    public function getTemplateName()
    {
        return "foot.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  35 => 2,  23 => 1,);
    }
}
/* {% block foot %}*/
/* */
/* 	<style type="text/css">*/
/* 		footer {*/
/* 			padding:50px 5px;*/
/* 			text-align: center;*/
/* 		}*/
/* 	</style>*/
/* */
/* 	<footer>*/
/* 		{% trans from "menu" into _locale %} STR_CONTACT {% endtrans %} : <a href="mailto:{{ contact_email }}"> {{ contact_email }} </a>*/
/* 	</footer>*/
/* */
/* {% endblock %}*/
