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
        $__internal_079ef1d856b80708f2ebfa7628e56fd70e6d993153bc6b1400e79eeb0eaea830 = $this->env->getExtension("native_profiler");
        $__internal_079ef1d856b80708f2ebfa7628e56fd70e6d993153bc6b1400e79eeb0eaea830->enter($__internal_079ef1d856b80708f2ebfa7628e56fd70e6d993153bc6b1400e79eeb0eaea830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_079ef1d856b80708f2ebfa7628e56fd70e6d993153bc6b1400e79eeb0eaea830->leave($__internal_079ef1d856b80708f2ebfa7628e56fd70e6d993153bc6b1400e79eeb0eaea830_prof);

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
