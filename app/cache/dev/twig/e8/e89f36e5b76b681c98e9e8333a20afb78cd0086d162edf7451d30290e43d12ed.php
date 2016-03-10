<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f508d6c6db22d8a6b52183b47e9ef98715d3a93e1462b2e8acba37a14c473379 extends Twig_Template
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
        $__internal_3ad4e2c24bb97db7c110ced1bf64899aed83b7e5906aabfd16710bab7f4f90b0 = $this->env->getExtension("native_profiler");
        $__internal_3ad4e2c24bb97db7c110ced1bf64899aed83b7e5906aabfd16710bab7f4f90b0->enter($__internal_3ad4e2c24bb97db7c110ced1bf64899aed83b7e5906aabfd16710bab7f4f90b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3ad4e2c24bb97db7c110ced1bf64899aed83b7e5906aabfd16710bab7f4f90b0->leave($__internal_3ad4e2c24bb97db7c110ced1bf64899aed83b7e5906aabfd16710bab7f4f90b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
