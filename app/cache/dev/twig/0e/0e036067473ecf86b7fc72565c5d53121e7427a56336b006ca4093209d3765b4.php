<?php

/* @MyRecipes/Author/create.html.twig */
class __TwigTemplate_7ecb51db690ae765669bb5d2e9ce6a317f55651c39cf3efff1a5a049d38bb78c extends Twig_Template
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
        $__internal_8050d60a4e56ce41f5b02eaefc4afe0e8d367c061ba1accb45008d0280b5523a = $this->env->getExtension("native_profiler");
        $__internal_8050d60a4e56ce41f5b02eaefc4afe0e8d367c061ba1accb45008d0280b5523a->enter($__internal_8050d60a4e56ce41f5b02eaefc4afe0e8d367c061ba1accb45008d0280b5523a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MyRecipes/Author/create.html.twig"));

        // line 1
        echo "<br><br>


";
        // line 9
        echo "
";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "author-create")));
        echo "

";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<ul>
\t<li>

\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
\t\t
\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
\t\t
\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "

\t</li>
\t<li>

\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surname", array()), 'row');
        echo "

\t</li>
\t<li>

\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row');
        echo "

\t</li>
</ul>

";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_8050d60a4e56ce41f5b02eaefc4afe0e8d367c061ba1accb45008d0280b5523a->leave($__internal_8050d60a4e56ce41f5b02eaefc4afe0e8d367c061ba1accb45008d0280b5523a_prof);

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
        return array (  77 => 36,  69 => 31,  61 => 26,  53 => 21,  48 => 19,  43 => 17,  35 => 12,  30 => 10,  27 => 9,  22 => 1,);
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