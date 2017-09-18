<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_820c3fa1dd363d295486b680cc8d50ef7f8b7edbde760e33ea225f1c1ffc5973 extends Twig_Template
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
        $__internal_75808c35a6d230934b22442b524711d70f0eaa4a79a405d1ff21bb3b09da22a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75808c35a6d230934b22442b524711d70f0eaa4a79a405d1ff21bb3b09da22a3->enter($__internal_75808c35a6d230934b22442b524711d70f0eaa4a79a405d1ff21bb3b09da22a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_3ce937a337493e9573fcf0522dac12f9264cf7bedbc4581d4de2f4e611c47753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce937a337493e9573fcf0522dac12f9264cf7bedbc4581d4de2f4e611c47753->enter($__internal_3ce937a337493e9573fcf0522dac12f9264cf7bedbc4581d4de2f4e611c47753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_75808c35a6d230934b22442b524711d70f0eaa4a79a405d1ff21bb3b09da22a3->leave($__internal_75808c35a6d230934b22442b524711d70f0eaa4a79a405d1ff21bb3b09da22a3_prof);

        
        $__internal_3ce937a337493e9573fcf0522dac12f9264cf7bedbc4581d4de2f4e611c47753->leave($__internal_3ce937a337493e9573fcf0522dac12f9264cf7bedbc4581d4de2f4e611c47753_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
