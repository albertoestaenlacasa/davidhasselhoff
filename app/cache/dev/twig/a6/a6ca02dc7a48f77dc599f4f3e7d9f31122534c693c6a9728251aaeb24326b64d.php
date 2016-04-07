<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8eeed27b914c2f61077dd1155b84dd4df1fcbd6a84a87cd2729478211509d947 extends Twig_Template
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
        $__internal_d11f57c49b473cd5fad8f2388b5bd6a3c4645e281625d0dd550132ebb22e70d9 = $this->env->getExtension("native_profiler");
        $__internal_d11f57c49b473cd5fad8f2388b5bd6a3c4645e281625d0dd550132ebb22e70d9->enter($__internal_d11f57c49b473cd5fad8f2388b5bd6a3c4645e281625d0dd550132ebb22e70d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d11f57c49b473cd5fad8f2388b5bd6a3c4645e281625d0dd550132ebb22e70d9->leave($__internal_d11f57c49b473cd5fad8f2388b5bd6a3c4645e281625d0dd550132ebb22e70d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
