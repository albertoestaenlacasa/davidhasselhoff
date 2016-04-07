<?php

/* MyRecipesBundle:Default:showAll.html.twig */
class __TwigTemplate_97aef9fa3381a11bd414572c5cd0d979e6f3705d9455ad3612b28496020053a0 extends Twig_Template
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
        $__internal_8e54e124d8509846f14330b8a6ce325f0417ef83734daba52767b5d58de76a28 = $this->env->getExtension("native_profiler");
        $__internal_8e54e124d8509846f14330b8a6ce325f0417ef83734daba52767b5d58de76a28->enter($__internal_8e54e124d8509846f14330b8a6ce325f0417ef83734daba52767b5d58de76a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesBundle:Default:showAll.html.twig"));

        // line 1
        echo "<html>
<head>
</head>

<body style=\"background-color:lightblue\">

\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recetas"]) ? $context["recetas"] : $this->getContext($context, "recetas")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 8
            echo "

\t\t<div style=\"padding:15px;background-color: ";
            // line 10
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo " red ";
            } else {
                echo "  blue; ";
            }
            echo ";\">
\t\t\t";
            // line 12
            echo "\t\t\t<span style=\"font-size:  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('my_recipes_extension')->textoSizeAlberto($context["receta"]), "html", null, true);
            echo "px;\">
\t\t\t
\t\t\t\t<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("my_recipes_5_show_one", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
            echo "</a> - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "name", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "difficulty", array()), "html", null, true);
            echo "
\t\t\t</span>
\t\t</div>

\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "

\t<br><br>

\t";
        // line 24
        echo "\t<footer>
\t\tContacto : <a href=\"\"> ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo " </a>
\t</footer>

</body>
</html>";
        
        $__internal_8e54e124d8509846f14330b8a6ce325f0417ef83734daba52767b5d58de76a28->leave($__internal_8e54e124d8509846f14330b8a6ce325f0417ef83734daba52767b5d58de76a28_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesBundle:Default:showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  96 => 24,  90 => 19,  65 => 14,  59 => 12,  51 => 10,  47 => 8,  30 => 7,  22 => 1,);
    }
}
/* <html>*/
/* <head>*/
/* </head>*/
/* */
/* <body style="background-color:lightblue">*/
/* */
/* 	{% for receta in recetas %}*/
/* */
/* */
/* 		<div style="padding:15px;background-color: {% if loop.index is odd %} red {% else %}  blue; {% endif %};">*/
/* 			{# usando filtro twig que no me va #}*/
/* 			<span style="font-size:  {{ receta|textoSizeAlberto }}px;">*/
/* 			*/
/* 				<a href="{{ url('my_recipes_5_show_one', {id: receta.id}) }}">{{ receta.id }}</a> - {{ receta.name }} - {{ receta.difficulty }}*/
/* 			</span>*/
/* 		</div>*/
/* */
/* 	{% endfor %}*/
/* */
/* */
/* 	<br><br>*/
/* */
/* 	{# esto es para el ejercicio 2 de la UNIDAD 4 #}*/
/* 	<footer>*/
/* 		Contacto : <a href=""> {{ contact_email }} </a>*/
/* 	</footer>*/
/* */
/* </body>*/
/* </html>*/
