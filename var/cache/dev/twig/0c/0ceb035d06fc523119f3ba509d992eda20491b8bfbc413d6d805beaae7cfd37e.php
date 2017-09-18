<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0a613460bff8d95f3e4cd222f89856befc9503068b7f3b576bb61fe5bbbc2221 extends Twig_Template
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
        $__internal_0cf6edd2b9bae567c53b9c5bf85d9c90e841e954ae9f23416fdfea8d1a2ec5d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf6edd2b9bae567c53b9c5bf85d9c90e841e954ae9f23416fdfea8d1a2ec5d2->enter($__internal_0cf6edd2b9bae567c53b9c5bf85d9c90e841e954ae9f23416fdfea8d1a2ec5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_6479401a0002440ffabf4e728843f2ec9d79d4b0ebdfb96242c86f8781cf44bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6479401a0002440ffabf4e728843f2ec9d79d4b0ebdfb96242c86f8781cf44bd->enter($__internal_6479401a0002440ffabf4e728843f2ec9d79d4b0ebdfb96242c86f8781cf44bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0cf6edd2b9bae567c53b9c5bf85d9c90e841e954ae9f23416fdfea8d1a2ec5d2->leave($__internal_0cf6edd2b9bae567c53b9c5bf85d9c90e841e954ae9f23416fdfea8d1a2ec5d2_prof);

        
        $__internal_6479401a0002440ffabf4e728843f2ec9d79d4b0ebdfb96242c86f8781cf44bd->leave($__internal_6479401a0002440ffabf4e728843f2ec9d79d4b0ebdfb96242c86f8781cf44bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
