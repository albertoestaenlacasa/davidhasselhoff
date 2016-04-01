<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_8bc7f56f4977be88e19a8759bb813775853bb3379ac6f38000a33c7de784a15a extends Twig_Template
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
        $__internal_d4ca1b00796bccc2e17ed095a0ad0a5be3506a3e711fe471ee515c8d3e6bb3c3 = $this->env->getExtension("native_profiler");
        $__internal_d4ca1b00796bccc2e17ed095a0ad0a5be3506a3e711fe471ee515c8d3e6bb3c3->enter($__internal_d4ca1b00796bccc2e17ed095a0ad0a5be3506a3e711fe471ee515c8d3e6bb3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d4ca1b00796bccc2e17ed095a0ad0a5be3506a3e711fe471ee515c8d3e6bb3c3->leave($__internal_d4ca1b00796bccc2e17ed095a0ad0a5be3506a3e711fe471ee515c8d3e6bb3c3_prof);

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
