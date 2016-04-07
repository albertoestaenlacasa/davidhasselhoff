<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e8da74046113c61698020512eb49167f56aacc7250a2b1a45b930fc77a8353e2 extends Twig_Template
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
        $__internal_97e931a9903479ce53d7fba8535034c5c49ec6bb7138e9d343f301b94101b98a = $this->env->getExtension("native_profiler");
        $__internal_97e931a9903479ce53d7fba8535034c5c49ec6bb7138e9d343f301b94101b98a->enter($__internal_97e931a9903479ce53d7fba8535034c5c49ec6bb7138e9d343f301b94101b98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_97e931a9903479ce53d7fba8535034c5c49ec6bb7138e9d343f301b94101b98a->leave($__internal_97e931a9903479ce53d7fba8535034c5c49ec6bb7138e9d343f301b94101b98a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
