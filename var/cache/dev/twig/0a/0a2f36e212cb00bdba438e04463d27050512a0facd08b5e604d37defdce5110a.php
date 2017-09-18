<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e4c16c19f8f2434e75928f1a7ab60aa30c50591555f8553767133b1a1101f476 extends Twig_Template
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
        $__internal_5b3938db207d692b2dd2ceff4dcc36a2a22f3e686c3efeb397bb38f97e3bc077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b3938db207d692b2dd2ceff4dcc36a2a22f3e686c3efeb397bb38f97e3bc077->enter($__internal_5b3938db207d692b2dd2ceff4dcc36a2a22f3e686c3efeb397bb38f97e3bc077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_a4d5849b751bda74f94b7d6f568987df12102b08befb8f8ab45bf8ec4a663f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d5849b751bda74f94b7d6f568987df12102b08befb8f8ab45bf8ec4a663f38->enter($__internal_a4d5849b751bda74f94b7d6f568987df12102b08befb8f8ab45bf8ec4a663f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5b3938db207d692b2dd2ceff4dcc36a2a22f3e686c3efeb397bb38f97e3bc077->leave($__internal_5b3938db207d692b2dd2ceff4dcc36a2a22f3e686c3efeb397bb38f97e3bc077_prof);

        
        $__internal_a4d5849b751bda74f94b7d6f568987df12102b08befb8f8ab45bf8ec4a663f38->leave($__internal_a4d5849b751bda74f94b7d6f568987df12102b08befb8f8ab45bf8ec4a663f38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
