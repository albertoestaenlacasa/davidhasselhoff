<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e2987a61f72b9ddeaea182e1f9dc462d61d62bf23f2563e975b7fcc7ccf4c3e8 extends Twig_Template
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
        $__internal_1aa25afdc4d910c7d0c8020060900fa9845ba80e63f48c758693f7a7d778654b = $this->env->getExtension("native_profiler");
        $__internal_1aa25afdc4d910c7d0c8020060900fa9845ba80e63f48c758693f7a7d778654b->enter($__internal_1aa25afdc4d910c7d0c8020060900fa9845ba80e63f48c758693f7a7d778654b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1aa25afdc4d910c7d0c8020060900fa9845ba80e63f48c758693f7a7d778654b->leave($__internal_1aa25afdc4d910c7d0c8020060900fa9845ba80e63f48c758693f7a7d778654b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */