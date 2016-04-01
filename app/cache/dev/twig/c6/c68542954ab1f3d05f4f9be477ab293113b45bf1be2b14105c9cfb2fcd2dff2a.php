<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_3b590e8b0a0c2f2cc1a13d2974564fe564bf0385854d142324f7fa11e098d1b0 extends Twig_Template
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
        $__internal_59c3743f20a1dd0a54f5a5bb18fb037b17405fa2e85f4b1f4ff1828cb824dade = $this->env->getExtension("native_profiler");
        $__internal_59c3743f20a1dd0a54f5a5bb18fb037b17405fa2e85f4b1f4ff1828cb824dade->enter($__internal_59c3743f20a1dd0a54f5a5bb18fb037b17405fa2e85f4b1f4ff1828cb824dade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_59c3743f20a1dd0a54f5a5bb18fb037b17405fa2e85f4b1f4ff1828cb824dade->leave($__internal_59c3743f20a1dd0a54f5a5bb18fb037b17405fa2e85f4b1f4ff1828cb824dade_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
