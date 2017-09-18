<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_fe41488acc3417521100e0f07c1fec3596110dade835cd2bbecc8d7f60cf9337 extends Twig_Template
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
        $__internal_d059bdbaf15c144b10b8b480212e9c0f821cd61070a0e85c72a223ed721681b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d059bdbaf15c144b10b8b480212e9c0f821cd61070a0e85c72a223ed721681b9->enter($__internal_d059bdbaf15c144b10b8b480212e9c0f821cd61070a0e85c72a223ed721681b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_f887cd39b26d41fee250507e2fd67877afb7b3efaa404b9a1f7852f9e1e6251f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f887cd39b26d41fee250507e2fd67877afb7b3efaa404b9a1f7852f9e1e6251f->enter($__internal_f887cd39b26d41fee250507e2fd67877afb7b3efaa404b9a1f7852f9e1e6251f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d059bdbaf15c144b10b8b480212e9c0f821cd61070a0e85c72a223ed721681b9->leave($__internal_d059bdbaf15c144b10b8b480212e9c0f821cd61070a0e85c72a223ed721681b9_prof);

        
        $__internal_f887cd39b26d41fee250507e2fd67877afb7b3efaa404b9a1f7852f9e1e6251f->leave($__internal_f887cd39b26d41fee250507e2fd67877afb7b3efaa404b9a1f7852f9e1e6251f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
