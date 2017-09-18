<?php

/* BackendBundle:Default:index.html.twig */
class __TwigTemplate_a5f27fa705ab25ec41e98867059dcd6af2aaa06b6abdba490f9e92b62292fe84 extends Twig_Template
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
        $__internal_bddcde066ae99de8211ef975ec3d62f43e810429b1f7f433f3b23963d17aace4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bddcde066ae99de8211ef975ec3d62f43e810429b1f7f433f3b23963d17aace4->enter($__internal_bddcde066ae99de8211ef975ec3d62f43e810429b1f7f433f3b23963d17aace4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackendBundle:Default:index.html.twig"));

        $__internal_0f4e7292a124d3fcc69b648122419ab58fd1fcb871b79e6170d179f37b920c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4e7292a124d3fcc69b648122419ab58fd1fcb871b79e6170d179f37b920c25->enter($__internal_0f4e7292a124d3fcc69b648122419ab58fd1fcb871b79e6170d179f37b920c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackendBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_bddcde066ae99de8211ef975ec3d62f43e810429b1f7f433f3b23963d17aace4->leave($__internal_bddcde066ae99de8211ef975ec3d62f43e810429b1f7f433f3b23963d17aace4_prof);

        
        $__internal_0f4e7292a124d3fcc69b648122419ab58fd1fcb871b79e6170d179f37b920c25->leave($__internal_0f4e7292a124d3fcc69b648122419ab58fd1fcb871b79e6170d179f37b920c25_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "BackendBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/seriestv/src/BackendBundle/Resources/views/Default/index.html.twig");
    }
}
