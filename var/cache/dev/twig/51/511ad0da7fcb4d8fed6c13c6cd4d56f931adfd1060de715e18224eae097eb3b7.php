<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2238b248ff0f46ca21dbcfe21b99cf074d67efd9ad9c11370b8ff3be4595c417 extends Twig_Template
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
        $__internal_50c49ab14b0608db52d36ea3e4082b12b5255c2d33b82d923339f7509c054de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50c49ab14b0608db52d36ea3e4082b12b5255c2d33b82d923339f7509c054de6->enter($__internal_50c49ab14b0608db52d36ea3e4082b12b5255c2d33b82d923339f7509c054de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_536e9b2f64e5229b1834388824763183cae717b8d7124f9fb52ddc0b46feab4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536e9b2f64e5229b1834388824763183cae717b8d7124f9fb52ddc0b46feab4d->enter($__internal_536e9b2f64e5229b1834388824763183cae717b8d7124f9fb52ddc0b46feab4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_50c49ab14b0608db52d36ea3e4082b12b5255c2d33b82d923339f7509c054de6->leave($__internal_50c49ab14b0608db52d36ea3e4082b12b5255c2d33b82d923339f7509c054de6_prof);

        
        $__internal_536e9b2f64e5229b1834388824763183cae717b8d7124f9fb52ddc0b46feab4d->leave($__internal_536e9b2f64e5229b1834388824763183cae717b8d7124f9fb52ddc0b46feab4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
