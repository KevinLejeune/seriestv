<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b6975709208f12cfaeb9803ffdf6965fac624c0ba52f0f775711970af923f94c extends Twig_Template
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
        $__internal_a4d2066141f776ed5b974927aaa50039d8c82e8ce33a3fd9a9f84b48dabb24d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d2066141f776ed5b974927aaa50039d8c82e8ce33a3fd9a9f84b48dabb24d2->enter($__internal_a4d2066141f776ed5b974927aaa50039d8c82e8ce33a3fd9a9f84b48dabb24d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_300608405f1207b1c7183fc11ba8839dd6d2b9faf94d8ac6d66f96d321ae4037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300608405f1207b1c7183fc11ba8839dd6d2b9faf94d8ac6d66f96d321ae4037->enter($__internal_300608405f1207b1c7183fc11ba8839dd6d2b9faf94d8ac6d66f96d321ae4037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a4d2066141f776ed5b974927aaa50039d8c82e8ce33a3fd9a9f84b48dabb24d2->leave($__internal_a4d2066141f776ed5b974927aaa50039d8c82e8ce33a3fd9a9f84b48dabb24d2_prof);

        
        $__internal_300608405f1207b1c7183fc11ba8839dd6d2b9faf94d8ac6d66f96d321ae4037->leave($__internal_300608405f1207b1c7183fc11ba8839dd6d2b9faf94d8ac6d66f96d321ae4037_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
