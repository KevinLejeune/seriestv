<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_27855908a8d2aa753782c8c6fae419a152fb85ec52e589db0780b5dc6a41addb extends Twig_Template
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
        $__internal_19fc02561af1f357267814e5979c38d66c37a18ab6b94351e327515981c290ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19fc02561af1f357267814e5979c38d66c37a18ab6b94351e327515981c290ff->enter($__internal_19fc02561af1f357267814e5979c38d66c37a18ab6b94351e327515981c290ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_8b08951d6e07cb743730c6f42b8042b8d563cd1308fabc91ff3d98fd69bbcf41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b08951d6e07cb743730c6f42b8042b8d563cd1308fabc91ff3d98fd69bbcf41->enter($__internal_8b08951d6e07cb743730c6f42b8042b8d563cd1308fabc91ff3d98fd69bbcf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_19fc02561af1f357267814e5979c38d66c37a18ab6b94351e327515981c290ff->leave($__internal_19fc02561af1f357267814e5979c38d66c37a18ab6b94351e327515981c290ff_prof);

        
        $__internal_8b08951d6e07cb743730c6f42b8042b8d563cd1308fabc91ff3d98fd69bbcf41->leave($__internal_8b08951d6e07cb743730c6f42b8042b8d563cd1308fabc91ff3d98fd69bbcf41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
