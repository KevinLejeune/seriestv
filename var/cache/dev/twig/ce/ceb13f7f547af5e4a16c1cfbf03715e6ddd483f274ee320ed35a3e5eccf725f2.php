<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c1378f42193d4f7b23b1915b7440c50c6a8ff2b6d8a416c16bef78faf3ae96e3 extends Twig_Template
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
        $__internal_5ed159b8232b9d95e22be3e18f695278019fd5b709168e765197af57db3acac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed159b8232b9d95e22be3e18f695278019fd5b709168e765197af57db3acac1->enter($__internal_5ed159b8232b9d95e22be3e18f695278019fd5b709168e765197af57db3acac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_9f6ce985507314332616809ffad2687151334d558560d24473a4190495702e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6ce985507314332616809ffad2687151334d558560d24473a4190495702e6f->enter($__internal_9f6ce985507314332616809ffad2687151334d558560d24473a4190495702e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_5ed159b8232b9d95e22be3e18f695278019fd5b709168e765197af57db3acac1->leave($__internal_5ed159b8232b9d95e22be3e18f695278019fd5b709168e765197af57db3acac1_prof);

        
        $__internal_9f6ce985507314332616809ffad2687151334d558560d24473a4190495702e6f->leave($__internal_9f6ce985507314332616809ffad2687151334d558560d24473a4190495702e6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
