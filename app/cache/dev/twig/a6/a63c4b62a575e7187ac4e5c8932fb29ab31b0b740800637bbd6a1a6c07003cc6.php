<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_cb4a5a58223ea3c6f21cd7f83886a5b73a57e5e722488b76fb1ca5cda5532222 extends Twig_Template
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
        $__internal_05f23186dc545deb3f112eb3b8c5da1fbb0b0ff1f64cbb47d4061f739654d9db = $this->env->getExtension("native_profiler");
        $__internal_05f23186dc545deb3f112eb3b8c5da1fbb0b0ff1f64cbb47d4061f739654d9db->enter($__internal_05f23186dc545deb3f112eb3b8c5da1fbb0b0ff1f64cbb47d4061f739654d9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_05f23186dc545deb3f112eb3b8c5da1fbb0b0ff1f64cbb47d4061f739654d9db->leave($__internal_05f23186dc545deb3f112eb3b8c5da1fbb0b0ff1f64cbb47d4061f739654d9db_prof);

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
