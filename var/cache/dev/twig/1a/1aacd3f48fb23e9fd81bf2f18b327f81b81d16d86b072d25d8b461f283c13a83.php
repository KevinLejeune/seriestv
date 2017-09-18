<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_32e4c481536383d50cd9dd37f75507a360c64fe4de6b769666c5d971623fa9e5 extends Twig_Template
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
        $__internal_bb00b9c3f8e1b8df128f4ad41bae8d0870627282b181e523350eff4fede616d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb00b9c3f8e1b8df128f4ad41bae8d0870627282b181e523350eff4fede616d4->enter($__internal_bb00b9c3f8e1b8df128f4ad41bae8d0870627282b181e523350eff4fede616d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b4f86836da7cec01c9b07cff33c794808c19685991d98c7be1f55177a1631470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f86836da7cec01c9b07cff33c794808c19685991d98c7be1f55177a1631470->enter($__internal_b4f86836da7cec01c9b07cff33c794808c19685991d98c7be1f55177a1631470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bb00b9c3f8e1b8df128f4ad41bae8d0870627282b181e523350eff4fede616d4->leave($__internal_bb00b9c3f8e1b8df128f4ad41bae8d0870627282b181e523350eff4fede616d4_prof);

        
        $__internal_b4f86836da7cec01c9b07cff33c794808c19685991d98c7be1f55177a1631470->leave($__internal_b4f86836da7cec01c9b07cff33c794808c19685991d98c7be1f55177a1631470_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
