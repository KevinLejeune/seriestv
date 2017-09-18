<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c9bae5203b5f622841ee972dd404aabacc43f83c37f85914e94ff6cacd161c1e extends Twig_Template
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
        $__internal_fb0c5c300be0562ef32d5bb87e2bd199fe404910590e3d4661b4b0b6cb7c836c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0c5c300be0562ef32d5bb87e2bd199fe404910590e3d4661b4b0b6cb7c836c->enter($__internal_fb0c5c300be0562ef32d5bb87e2bd199fe404910590e3d4661b4b0b6cb7c836c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7a9988df1aa649f0453713e4c7d565fc0826441bfa56064822c786260e4728f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9988df1aa649f0453713e4c7d565fc0826441bfa56064822c786260e4728f7->enter($__internal_7a9988df1aa649f0453713e4c7d565fc0826441bfa56064822c786260e4728f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_fb0c5c300be0562ef32d5bb87e2bd199fe404910590e3d4661b4b0b6cb7c836c->leave($__internal_fb0c5c300be0562ef32d5bb87e2bd199fe404910590e3d4661b4b0b6cb7c836c_prof);

        
        $__internal_7a9988df1aa649f0453713e4c7d565fc0826441bfa56064822c786260e4728f7->leave($__internal_7a9988df1aa649f0453713e4c7d565fc0826441bfa56064822c786260e4728f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
