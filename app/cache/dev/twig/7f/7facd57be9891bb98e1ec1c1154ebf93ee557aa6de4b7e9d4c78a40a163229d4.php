<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d39a365e0a37693b6e3ad46cc71de254801fe6a09bce884ac3ff56c44549a60f extends Twig_Template
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
        $__internal_6193fe09393a3eb77d3f8dd235c1875e1c0baeb948a8c33f467184fafb423ad6 = $this->env->getExtension("native_profiler");
        $__internal_6193fe09393a3eb77d3f8dd235c1875e1c0baeb948a8c33f467184fafb423ad6->enter($__internal_6193fe09393a3eb77d3f8dd235c1875e1c0baeb948a8c33f467184fafb423ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6193fe09393a3eb77d3f8dd235c1875e1c0baeb948a8c33f467184fafb423ad6->leave($__internal_6193fe09393a3eb77d3f8dd235c1875e1c0baeb948a8c33f467184fafb423ad6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
