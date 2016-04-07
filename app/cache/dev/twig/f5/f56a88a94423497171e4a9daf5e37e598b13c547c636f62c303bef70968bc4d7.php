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
        $__internal_3ed99910e51d813de1103a2ed3b7df4fd15eccb267a05fff79a7183331a63f42 = $this->env->getExtension("native_profiler");
        $__internal_3ed99910e51d813de1103a2ed3b7df4fd15eccb267a05fff79a7183331a63f42->enter($__internal_3ed99910e51d813de1103a2ed3b7df4fd15eccb267a05fff79a7183331a63f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_3ed99910e51d813de1103a2ed3b7df4fd15eccb267a05fff79a7183331a63f42->leave($__internal_3ed99910e51d813de1103a2ed3b7df4fd15eccb267a05fff79a7183331a63f42_prof);

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
