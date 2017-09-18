<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_69787b8f45555631b7dd60dddf820b29a6106424c88235bb45364dc950e1a374 extends Twig_Template
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
        $__internal_9ce9d3c22c7948b615340ebad993feddc624e94e8d6ff5beb6c5d962de623fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce9d3c22c7948b615340ebad993feddc624e94e8d6ff5beb6c5d962de623fac->enter($__internal_9ce9d3c22c7948b615340ebad993feddc624e94e8d6ff5beb6c5d962de623fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_1ded02af0c2fe9a51bb5d99707ccad43297d2c3b51a1d72bb7d78100b69a11a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ded02af0c2fe9a51bb5d99707ccad43297d2c3b51a1d72bb7d78100b69a11a0->enter($__internal_1ded02af0c2fe9a51bb5d99707ccad43297d2c3b51a1d72bb7d78100b69a11a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9ce9d3c22c7948b615340ebad993feddc624e94e8d6ff5beb6c5d962de623fac->leave($__internal_9ce9d3c22c7948b615340ebad993feddc624e94e8d6ff5beb6c5d962de623fac_prof);

        
        $__internal_1ded02af0c2fe9a51bb5d99707ccad43297d2c3b51a1d72bb7d78100b69a11a0->leave($__internal_1ded02af0c2fe9a51bb5d99707ccad43297d2c3b51a1d72bb7d78100b69a11a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
