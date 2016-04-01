<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b0638dbe207673c145c122f8aa37063cf2f5bc45d118188cd3f957df9f0ae814 extends Twig_Template
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
        $__internal_5c9152274f55d777bf1d81f67433c6549ba0ededfbf0ebd9b03cf091ed51d300 = $this->env->getExtension("native_profiler");
        $__internal_5c9152274f55d777bf1d81f67433c6549ba0ededfbf0ebd9b03cf091ed51d300->enter($__internal_5c9152274f55d777bf1d81f67433c6549ba0ededfbf0ebd9b03cf091ed51d300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5c9152274f55d777bf1d81f67433c6549ba0ededfbf0ebd9b03cf091ed51d300->leave($__internal_5c9152274f55d777bf1d81f67433c6549ba0ededfbf0ebd9b03cf091ed51d300_prof);

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
