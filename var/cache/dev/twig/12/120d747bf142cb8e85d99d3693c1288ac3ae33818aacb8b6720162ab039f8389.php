<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d53362d5fd36a3d30e2f56b1c274010097ef26b923f47ddb38f1001b86b65b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00b4c718dc7baf47d4f17fbe6feea216eede8cefa9bd2342f255f5e15d8cdd28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b4c718dc7baf47d4f17fbe6feea216eede8cefa9bd2342f255f5e15d8cdd28->enter($__internal_00b4c718dc7baf47d4f17fbe6feea216eede8cefa9bd2342f255f5e15d8cdd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_5e7c7d8edda2c19be15aa70c7f69360ca1a96a30286b6e36f9679962dde2256d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7c7d8edda2c19be15aa70c7f69360ca1a96a30286b6e36f9679962dde2256d->enter($__internal_5e7c7d8edda2c19be15aa70c7f69360ca1a96a30286b6e36f9679962dde2256d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_00b4c718dc7baf47d4f17fbe6feea216eede8cefa9bd2342f255f5e15d8cdd28->leave($__internal_00b4c718dc7baf47d4f17fbe6feea216eede8cefa9bd2342f255f5e15d8cdd28_prof);

        
        $__internal_5e7c7d8edda2c19be15aa70c7f69360ca1a96a30286b6e36f9679962dde2256d->leave($__internal_5e7c7d8edda2c19be15aa70c7f69360ca1a96a30286b6e36f9679962dde2256d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e25df96058f2eb8097c39ae0771a5cbdd6d468c3fba88c480f824fa84b793f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e25df96058f2eb8097c39ae0771a5cbdd6d468c3fba88c480f824fa84b793f9->enter($__internal_0e25df96058f2eb8097c39ae0771a5cbdd6d468c3fba88c480f824fa84b793f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_642a0a0f564735896e819c3c31c7f2c6ef6ea98b47fe77231380adea04673f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642a0a0f564735896e819c3c31c7f2c6ef6ea98b47fe77231380adea04673f63->enter($__internal_642a0a0f564735896e819c3c31c7f2c6ef6ea98b47fe77231380adea04673f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_642a0a0f564735896e819c3c31c7f2c6ef6ea98b47fe77231380adea04673f63->leave($__internal_642a0a0f564735896e819c3c31c7f2c6ef6ea98b47fe77231380adea04673f63_prof);

        
        $__internal_0e25df96058f2eb8097c39ae0771a5cbdd6d468c3fba88c480f824fa84b793f9->leave($__internal_0e25df96058f2eb8097c39ae0771a5cbdd6d468c3fba88c480f824fa84b793f9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
