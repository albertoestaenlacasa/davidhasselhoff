<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bdd3b89ffe38b4b1c784ca30d319a2400da1708131de6d133dbcca8567d47ca8 extends Twig_Template
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
        $__internal_b7b1b29079060e5650a455858903cfe038217b072d87400c3225c5cfae437344 = $this->env->getExtension("native_profiler");
        $__internal_b7b1b29079060e5650a455858903cfe038217b072d87400c3225c5cfae437344->enter($__internal_b7b1b29079060e5650a455858903cfe038217b072d87400c3225c5cfae437344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b7b1b29079060e5650a455858903cfe038217b072d87400c3225c5cfae437344->leave($__internal_b7b1b29079060e5650a455858903cfe038217b072d87400c3225c5cfae437344_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
