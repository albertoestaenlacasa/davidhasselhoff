<?php

/* @MyRecipes/Author/create.html.twig */
class __TwigTemplate_f2f6a9488857dff363fa5f7c2654381e8250a6d3e12e63128ea2856285205d7f extends Twig_Template
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
        // line 1
        echo "<br><br>


";
        // line 9
        echo "
";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("id" => "author-create")));
        echo "

";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

<ul>
\t<li>

\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
        echo "
\t\t
\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
        echo "
\t\t
\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "

\t</li>
\t<li>

\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "surname", array()), 'row');
        echo "

\t</li>
\t<li>

\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'row');
        echo "

\t</li>
</ul>

";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "


";
    }

    public function getTemplateName()
    {
        return "@MyRecipes/Author/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  66 => 31,  58 => 26,  50 => 21,  45 => 19,  40 => 17,  32 => 12,  27 => 10,  24 => 9,  19 => 1,);
    }
}
/* <br><br>*/
/* */
/* */
/* {# */
/* */
/* {{ form(form) }}*/
/* */
/* #}*/
/* */
/* {{ form_start(form, {'attr' : {'id' : 'author-create'} }) }}*/
/* */
/* {{ form_errors(form) }}*/
/* */
/* <ul>*/
/* 	<li>*/
/* */
/* 		{{ form_label(form.name) }}*/
/* 		*/
/* 		{{ form_errors(form.name) }}*/
/* 		*/
/* 		{{ form_widget(form.name) }}*/
/* */
/* 	</li>*/
/* 	<li>*/
/* */
/* 		{{ form_row(form.surname) }}*/
/* */
/* 	</li>*/
/* 	<li>*/
/* */
/* 		{{ form_row(form.save) }}*/
/* */
/* 	</li>*/
/* </ul>*/
/* */
/* {{ form_end(form) }}*/
/* */
/* */
/* */
