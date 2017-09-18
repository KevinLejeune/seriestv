<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_65745dacfda34bf8ca86fd3d02a00a1cfd699b81d46dae317ac597c2e881dfc0 extends Twig_Template
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
        $__internal_c1dcce7f99c213f25385a52c80319117ba83251b566bc6c3ed6eba0b44be25f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1dcce7f99c213f25385a52c80319117ba83251b566bc6c3ed6eba0b44be25f9->enter($__internal_c1dcce7f99c213f25385a52c80319117ba83251b566bc6c3ed6eba0b44be25f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_f3c8b07fcf8307ab44374aaa41255b5fdeeadc4112d83da8c7b0ec2e9195f524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c8b07fcf8307ab44374aaa41255b5fdeeadc4112d83da8c7b0ec2e9195f524->enter($__internal_f3c8b07fcf8307ab44374aaa41255b5fdeeadc4112d83da8c7b0ec2e9195f524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c1dcce7f99c213f25385a52c80319117ba83251b566bc6c3ed6eba0b44be25f9->leave($__internal_c1dcce7f99c213f25385a52c80319117ba83251b566bc6c3ed6eba0b44be25f9_prof);

        
        $__internal_f3c8b07fcf8307ab44374aaa41255b5fdeeadc4112d83da8c7b0ec2e9195f524->leave($__internal_f3c8b07fcf8307ab44374aaa41255b5fdeeadc4112d83da8c7b0ec2e9195f524_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
