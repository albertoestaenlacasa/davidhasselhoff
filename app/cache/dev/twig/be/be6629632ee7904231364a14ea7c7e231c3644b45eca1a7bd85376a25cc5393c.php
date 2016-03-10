<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_26c46d89ee4984a5a9be2c90932a2a6ec2aac97dd6d477238db6f3a07d0506ca extends Twig_Template
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
        $__internal_f67d3685eacba3dbc2945e9a52e85dd7187bfe2efc72708eb3ebc758a10a5855 = $this->env->getExtension("native_profiler");
        $__internal_f67d3685eacba3dbc2945e9a52e85dd7187bfe2efc72708eb3ebc758a10a5855->enter($__internal_f67d3685eacba3dbc2945e9a52e85dd7187bfe2efc72708eb3ebc758a10a5855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f67d3685eacba3dbc2945e9a52e85dd7187bfe2efc72708eb3ebc758a10a5855->leave($__internal_f67d3685eacba3dbc2945e9a52e85dd7187bfe2efc72708eb3ebc758a10a5855_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
