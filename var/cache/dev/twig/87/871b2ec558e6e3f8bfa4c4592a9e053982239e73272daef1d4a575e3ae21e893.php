<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ec1d7375e20d3f49b5b347decaa1bb97b35616e5a49d90689b7e87f4c24acf28 extends Twig_Template
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
        $__internal_55ba0052eb98fee6a92c5f5f6420bd984e8874964044196a6460160f7213228a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ba0052eb98fee6a92c5f5f6420bd984e8874964044196a6460160f7213228a->enter($__internal_55ba0052eb98fee6a92c5f5f6420bd984e8874964044196a6460160f7213228a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0fba26d8a61f824bd76b848b4903e57d22dfa980bcb8e730a90a5854c45c9f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fba26d8a61f824bd76b848b4903e57d22dfa980bcb8e730a90a5854c45c9f01->enter($__internal_0fba26d8a61f824bd76b848b4903e57d22dfa980bcb8e730a90a5854c45c9f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_55ba0052eb98fee6a92c5f5f6420bd984e8874964044196a6460160f7213228a->leave($__internal_55ba0052eb98fee6a92c5f5f6420bd984e8874964044196a6460160f7213228a_prof);

        
        $__internal_0fba26d8a61f824bd76b848b4903e57d22dfa980bcb8e730a90a5854c45c9f01->leave($__internal_0fba26d8a61f824bd76b848b4903e57d22dfa980bcb8e730a90a5854c45c9f01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
