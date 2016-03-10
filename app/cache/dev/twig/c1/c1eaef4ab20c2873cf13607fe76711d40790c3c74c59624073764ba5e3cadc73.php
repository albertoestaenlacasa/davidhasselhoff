<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_47a178593adea55dc4d582c0f749b1f3bec3ceb41efaf4e15d62a154dfaad44f extends Twig_Template
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
        $__internal_c13fe28819265c66f2d0a136165259fbcda9a43d55a60e983ba37f434c263c4a = $this->env->getExtension("native_profiler");
        $__internal_c13fe28819265c66f2d0a136165259fbcda9a43d55a60e983ba37f434c263c4a->enter($__internal_c13fe28819265c66f2d0a136165259fbcda9a43d55a60e983ba37f434c263c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c13fe28819265c66f2d0a136165259fbcda9a43d55a60e983ba37f434c263c4a->leave($__internal_c13fe28819265c66f2d0a136165259fbcda9a43d55a60e983ba37f434c263c4a_prof);

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
