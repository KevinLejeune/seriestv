<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0f52fd5d75bf84a2e90fc07ec2872336c4eb2373bdaef862c6473dde17dc8724 extends Twig_Template
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
        $__internal_05461423542ad0d77d9edfaf8c62789a542a4eb3d37fdba683d583d8124c71ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05461423542ad0d77d9edfaf8c62789a542a4eb3d37fdba683d583d8124c71ec->enter($__internal_05461423542ad0d77d9edfaf8c62789a542a4eb3d37fdba683d583d8124c71ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_83f61c90c3cc1cd73ca536aa9e5854c5284d14b440a2b89399b327442a59e578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f61c90c3cc1cd73ca536aa9e5854c5284d14b440a2b89399b327442a59e578->enter($__internal_83f61c90c3cc1cd73ca536aa9e5854c5284d14b440a2b89399b327442a59e578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_05461423542ad0d77d9edfaf8c62789a542a4eb3d37fdba683d583d8124c71ec->leave($__internal_05461423542ad0d77d9edfaf8c62789a542a4eb3d37fdba683d583d8124c71ec_prof);

        
        $__internal_83f61c90c3cc1cd73ca536aa9e5854c5284d14b440a2b89399b327442a59e578->leave($__internal_83f61c90c3cc1cd73ca536aa9e5854c5284d14b440a2b89399b327442a59e578_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
