<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0b0ad4263d379055fb73f54e032e575e75e67954236cd3422b3514e51cd7388c extends Twig_Template
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
        $__internal_59010e531405d51eb94d90ca3661cd94eea80b7a945340bcc31daa7d134e4891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59010e531405d51eb94d90ca3661cd94eea80b7a945340bcc31daa7d134e4891->enter($__internal_59010e531405d51eb94d90ca3661cd94eea80b7a945340bcc31daa7d134e4891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_97bdbaa3aed04e79c809c7f889f3b9fcbe15941351ed201458035a9eb856c3c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97bdbaa3aed04e79c809c7f889f3b9fcbe15941351ed201458035a9eb856c3c6->enter($__internal_97bdbaa3aed04e79c809c7f889f3b9fcbe15941351ed201458035a9eb856c3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_59010e531405d51eb94d90ca3661cd94eea80b7a945340bcc31daa7d134e4891->leave($__internal_59010e531405d51eb94d90ca3661cd94eea80b7a945340bcc31daa7d134e4891_prof);

        
        $__internal_97bdbaa3aed04e79c809c7f889f3b9fcbe15941351ed201458035a9eb856c3c6->leave($__internal_97bdbaa3aed04e79c809c7f889f3b9fcbe15941351ed201458035a9eb856c3c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
