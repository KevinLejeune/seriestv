<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_701dcdd97d37dad2e87d66c4193097c3165f41f9a0e608fa8208817dd4d44b31 extends Twig_Template
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
        $__internal_7ae7c2f8ba5f76bfa8448ba8b2af4acd1fca9a777233239e763858e615a1d524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae7c2f8ba5f76bfa8448ba8b2af4acd1fca9a777233239e763858e615a1d524->enter($__internal_7ae7c2f8ba5f76bfa8448ba8b2af4acd1fca9a777233239e763858e615a1d524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_69f88a8e870bf3f577b09d49b339fee15d798a36a0c1fca2d18b4f065242d4d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f88a8e870bf3f577b09d49b339fee15d798a36a0c1fca2d18b4f065242d4d4->enter($__internal_69f88a8e870bf3f577b09d49b339fee15d798a36a0c1fca2d18b4f065242d4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7ae7c2f8ba5f76bfa8448ba8b2af4acd1fca9a777233239e763858e615a1d524->leave($__internal_7ae7c2f8ba5f76bfa8448ba8b2af4acd1fca9a777233239e763858e615a1d524_prof);

        
        $__internal_69f88a8e870bf3f577b09d49b339fee15d798a36a0c1fca2d18b4f065242d4d4->leave($__internal_69f88a8e870bf3f577b09d49b339fee15d798a36a0c1fca2d18b4f065242d4d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
