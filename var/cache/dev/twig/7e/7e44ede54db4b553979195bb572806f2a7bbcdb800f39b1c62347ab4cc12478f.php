<?php

/* BackendBundle:Default:index.html.twig */
class __TwigTemplate_d8602b7bed06f3869b70ddbe2debdac021bf51852a570378fea54eceb3eb7b8c extends Twig_Template
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
        $__internal_27fde46cb7cf612d8f2d14281134c927bf69d521eae34ad75aa427c6bd123bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27fde46cb7cf612d8f2d14281134c927bf69d521eae34ad75aa427c6bd123bcf->enter($__internal_27fde46cb7cf612d8f2d14281134c927bf69d521eae34ad75aa427c6bd123bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackendBundle:Default:index.html.twig"));

        $__internal_0e30f69f98b5aad2bd9ce0b67106279cc079ed43a4ea4a682e39f189bc993101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e30f69f98b5aad2bd9ce0b67106279cc079ed43a4ea4a682e39f189bc993101->enter($__internal_0e30f69f98b5aad2bd9ce0b67106279cc079ed43a4ea4a682e39f189bc993101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackendBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_27fde46cb7cf612d8f2d14281134c927bf69d521eae34ad75aa427c6bd123bcf->leave($__internal_27fde46cb7cf612d8f2d14281134c927bf69d521eae34ad75aa427c6bd123bcf_prof);

        
        $__internal_0e30f69f98b5aad2bd9ce0b67106279cc079ed43a4ea4a682e39f189bc993101->leave($__internal_0e30f69f98b5aad2bd9ce0b67106279cc079ed43a4ea4a682e39f189bc993101_prof);

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
