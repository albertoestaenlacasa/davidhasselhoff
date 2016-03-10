<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d69c352a84f81f19a96bfddb38c84579e0da4e3d42a2403c9cc805bc466b4dec extends Twig_Template
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
        $__internal_3de5b0bcf8813d638d08551c6396bba8e92a6532d86a826e0b11e3c93dcc46d1 = $this->env->getExtension("native_profiler");
        $__internal_3de5b0bcf8813d638d08551c6396bba8e92a6532d86a826e0b11e3c93dcc46d1->enter($__internal_3de5b0bcf8813d638d08551c6396bba8e92a6532d86a826e0b11e3c93dcc46d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3de5b0bcf8813d638d08551c6396bba8e92a6532d86a826e0b11e3c93dcc46d1->leave($__internal_3de5b0bcf8813d638d08551c6396bba8e92a6532d86a826e0b11e3c93dcc46d1_prof);

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
