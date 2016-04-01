<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ae8d27a5244db6cecc464f048cfd4a776fdb241d5abd7c8907be0abdf62a2175 extends Twig_Template
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
        $__internal_43b0d676f72ab714073a806147eb28d0a34dc7fcae1bd7cb02ba116e2ac86d62 = $this->env->getExtension("native_profiler");
        $__internal_43b0d676f72ab714073a806147eb28d0a34dc7fcae1bd7cb02ba116e2ac86d62->enter($__internal_43b0d676f72ab714073a806147eb28d0a34dc7fcae1bd7cb02ba116e2ac86d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_43b0d676f72ab714073a806147eb28d0a34dc7fcae1bd7cb02ba116e2ac86d62->leave($__internal_43b0d676f72ab714073a806147eb28d0a34dc7fcae1bd7cb02ba116e2ac86d62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
