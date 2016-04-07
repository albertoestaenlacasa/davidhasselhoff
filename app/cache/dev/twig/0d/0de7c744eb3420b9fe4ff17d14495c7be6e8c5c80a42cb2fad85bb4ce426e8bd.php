<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b481333e596acb6e2791a6c8c751f26387073f7e0777923bb00a1ed620e25f31 extends Twig_Template
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
        $__internal_331d88a604fb2e51d6f1a2dfbad64f184c9e8e650623fe83ad6cab0d004c2943 = $this->env->getExtension("native_profiler");
        $__internal_331d88a604fb2e51d6f1a2dfbad64f184c9e8e650623fe83ad6cab0d004c2943->enter($__internal_331d88a604fb2e51d6f1a2dfbad64f184c9e8e650623fe83ad6cab0d004c2943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_331d88a604fb2e51d6f1a2dfbad64f184c9e8e650623fe83ad6cab0d004c2943->leave($__internal_331d88a604fb2e51d6f1a2dfbad64f184c9e8e650623fe83ad6cab0d004c2943_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
