<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_410bc8c450eeb3bfea599b288d32603746caddde667c4f5f1a31b0c43bc725c8 extends Twig_Template
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
        $__internal_1fb8ac01bc0293ad8cbbe388a1a4064fd4f83867467584cc3dc2446621e9f8c5 = $this->env->getExtension("native_profiler");
        $__internal_1fb8ac01bc0293ad8cbbe388a1a4064fd4f83867467584cc3dc2446621e9f8c5->enter($__internal_1fb8ac01bc0293ad8cbbe388a1a4064fd4f83867467584cc3dc2446621e9f8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1fb8ac01bc0293ad8cbbe388a1a4064fd4f83867467584cc3dc2446621e9f8c5->leave($__internal_1fb8ac01bc0293ad8cbbe388a1a4064fd4f83867467584cc3dc2446621e9f8c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
