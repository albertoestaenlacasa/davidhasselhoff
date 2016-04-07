<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_1e00c858a5cc897c0ced231ff95b37c11d1b0094c6aff424e64d2223bf232fec extends Twig_Template
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
        $__internal_4f2e0f3fc5e5cd60d07aaccd1d94e147c4eeb337de2f777cbd3be22b4e29c72c = $this->env->getExtension("native_profiler");
        $__internal_4f2e0f3fc5e5cd60d07aaccd1d94e147c4eeb337de2f777cbd3be22b4e29c72c->enter($__internal_4f2e0f3fc5e5cd60d07aaccd1d94e147c4eeb337de2f777cbd3be22b4e29c72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_4f2e0f3fc5e5cd60d07aaccd1d94e147c4eeb337de2f777cbd3be22b4e29c72c->leave($__internal_4f2e0f3fc5e5cd60d07aaccd1d94e147c4eeb337de2f777cbd3be22b4e29c72c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
