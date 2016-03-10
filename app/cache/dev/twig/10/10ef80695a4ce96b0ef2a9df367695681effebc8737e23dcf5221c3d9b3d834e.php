<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_cb96737fa5acf259c26a561fdbc7df8384faf83b2275fa59e6161cf7b9409f25 extends Twig_Template
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
        $__internal_83c8021fdc7d131d6f44d0165e1c0279ba268bf7b59bec78bcb81d655cda1f2a = $this->env->getExtension("native_profiler");
        $__internal_83c8021fdc7d131d6f44d0165e1c0279ba268bf7b59bec78bcb81d655cda1f2a->enter($__internal_83c8021fdc7d131d6f44d0165e1c0279ba268bf7b59bec78bcb81d655cda1f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_83c8021fdc7d131d6f44d0165e1c0279ba268bf7b59bec78bcb81d655cda1f2a->leave($__internal_83c8021fdc7d131d6f44d0165e1c0279ba268bf7b59bec78bcb81d655cda1f2a_prof);

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
