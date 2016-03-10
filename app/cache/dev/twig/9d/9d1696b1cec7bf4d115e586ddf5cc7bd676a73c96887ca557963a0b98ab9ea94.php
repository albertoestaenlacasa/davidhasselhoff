<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b011c9838f1f1759e0b452f6e20f7b381312547debec4e0ef82a112a45137956 extends Twig_Template
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
        $__internal_ac36df1a957cdb3a9dde97568052c6e9f8d77663b60c8816c5104f525d69a2db = $this->env->getExtension("native_profiler");
        $__internal_ac36df1a957cdb3a9dde97568052c6e9f8d77663b60c8816c5104f525d69a2db->enter($__internal_ac36df1a957cdb3a9dde97568052c6e9f8d77663b60c8816c5104f525d69a2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ac36df1a957cdb3a9dde97568052c6e9f8d77663b60c8816c5104f525d69a2db->leave($__internal_ac36df1a957cdb3a9dde97568052c6e9f8d77663b60c8816c5104f525d69a2db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
