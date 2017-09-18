<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd51f700ad647e562be98ad3b02868fd8b86a17a5ef2bd8021a18c9de9ad2f5d extends Twig_Template
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
        $__internal_406711ac3d4dff41a372713278bc7cd51b913f34001b2d951d33e590725031d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406711ac3d4dff41a372713278bc7cd51b913f34001b2d951d33e590725031d8->enter($__internal_406711ac3d4dff41a372713278bc7cd51b913f34001b2d951d33e590725031d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_4f2f809c90e0417b3693e5cf28100ddca5e9347b07b9a9100291d13b0f98635d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2f809c90e0417b3693e5cf28100ddca5e9347b07b9a9100291d13b0f98635d->enter($__internal_4f2f809c90e0417b3693e5cf28100ddca5e9347b07b9a9100291d13b0f98635d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_406711ac3d4dff41a372713278bc7cd51b913f34001b2d951d33e590725031d8->leave($__internal_406711ac3d4dff41a372713278bc7cd51b913f34001b2d951d33e590725031d8_prof);

        
        $__internal_4f2f809c90e0417b3693e5cf28100ddca5e9347b07b9a9100291d13b0f98635d->leave($__internal_4f2f809c90e0417b3693e5cf28100ddca5e9347b07b9a9100291d13b0f98635d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
