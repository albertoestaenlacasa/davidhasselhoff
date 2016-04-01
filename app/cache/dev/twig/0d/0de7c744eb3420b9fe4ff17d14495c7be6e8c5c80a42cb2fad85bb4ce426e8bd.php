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
        $__internal_616428e3fce1f00c92b741751953aa812c2e8afab930e6adacf00c174e547f79 = $this->env->getExtension("native_profiler");
        $__internal_616428e3fce1f00c92b741751953aa812c2e8afab930e6adacf00c174e547f79->enter($__internal_616428e3fce1f00c92b741751953aa812c2e8afab930e6adacf00c174e547f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_616428e3fce1f00c92b741751953aa812c2e8afab930e6adacf00c174e547f79->leave($__internal_616428e3fce1f00c92b741751953aa812c2e8afab930e6adacf00c174e547f79_prof);

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
