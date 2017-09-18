<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a82370ae76458a5c61e4c6d4c883fbaab43d42597c85b0b54beaf4400025eb71 extends Twig_Template
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
        $__internal_b459240d76e464305d845c7e1e8c4e99090338bb061056f298a3352a206351e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b459240d76e464305d845c7e1e8c4e99090338bb061056f298a3352a206351e6->enter($__internal_b459240d76e464305d845c7e1e8c4e99090338bb061056f298a3352a206351e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1afaeba3ca05b6f61a5dc6a4da3ec0e6fd70a56a94070098e3db10987390af19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1afaeba3ca05b6f61a5dc6a4da3ec0e6fd70a56a94070098e3db10987390af19->enter($__internal_1afaeba3ca05b6f61a5dc6a4da3ec0e6fd70a56a94070098e3db10987390af19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b459240d76e464305d845c7e1e8c4e99090338bb061056f298a3352a206351e6->leave($__internal_b459240d76e464305d845c7e1e8c4e99090338bb061056f298a3352a206351e6_prof);

        
        $__internal_1afaeba3ca05b6f61a5dc6a4da3ec0e6fd70a56a94070098e3db10987390af19->leave($__internal_1afaeba3ca05b6f61a5dc6a4da3ec0e6fd70a56a94070098e3db10987390af19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
