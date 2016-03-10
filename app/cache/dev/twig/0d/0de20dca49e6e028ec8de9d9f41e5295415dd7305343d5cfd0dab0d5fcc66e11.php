<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f6f8933fc462e81db045cd766fe628cadcd99772f1028620455bd00b66dc980c extends Twig_Template
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
        $__internal_7bd9ac3dc02371723f3aa1dec397344f6de874768edfe41f35d998158927b31a = $this->env->getExtension("native_profiler");
        $__internal_7bd9ac3dc02371723f3aa1dec397344f6de874768edfe41f35d998158927b31a->enter($__internal_7bd9ac3dc02371723f3aa1dec397344f6de874768edfe41f35d998158927b31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_7bd9ac3dc02371723f3aa1dec397344f6de874768edfe41f35d998158927b31a->leave($__internal_7bd9ac3dc02371723f3aa1dec397344f6de874768edfe41f35d998158927b31a_prof);

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
