<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d8abe7bfa93cb1cecbc82c8e1f5cd1fc71755506e5375a77adf84418634f8343 extends Twig_Template
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
        $__internal_5dce619bd8a33c71264017bdfc1edbd4ad36f799880a811b7067d6a8f26e77ee = $this->env->getExtension("native_profiler");
        $__internal_5dce619bd8a33c71264017bdfc1edbd4ad36f799880a811b7067d6a8f26e77ee->enter($__internal_5dce619bd8a33c71264017bdfc1edbd4ad36f799880a811b7067d6a8f26e77ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5dce619bd8a33c71264017bdfc1edbd4ad36f799880a811b7067d6a8f26e77ee->leave($__internal_5dce619bd8a33c71264017bdfc1edbd4ad36f799880a811b7067d6a8f26e77ee_prof);

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
