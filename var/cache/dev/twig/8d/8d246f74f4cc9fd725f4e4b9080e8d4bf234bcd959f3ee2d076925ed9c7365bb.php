<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f6217e166b994556adba263301db96e59c16bbb339fedd6cb1926679508bc20e extends Twig_Template
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
        $__internal_284ebc7061c5d3c60cdb8b65c15994bd093f5f1c9ba189a34eea81256e797280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284ebc7061c5d3c60cdb8b65c15994bd093f5f1c9ba189a34eea81256e797280->enter($__internal_284ebc7061c5d3c60cdb8b65c15994bd093f5f1c9ba189a34eea81256e797280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_aa81307b0c469665b7955a497bf24c97bb9b565876147244e3a3c1726885e28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa81307b0c469665b7955a497bf24c97bb9b565876147244e3a3c1726885e28e->enter($__internal_aa81307b0c469665b7955a497bf24c97bb9b565876147244e3a3c1726885e28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_284ebc7061c5d3c60cdb8b65c15994bd093f5f1c9ba189a34eea81256e797280->leave($__internal_284ebc7061c5d3c60cdb8b65c15994bd093f5f1c9ba189a34eea81256e797280_prof);

        
        $__internal_aa81307b0c469665b7955a497bf24c97bb9b565876147244e3a3c1726885e28e->leave($__internal_aa81307b0c469665b7955a497bf24c97bb9b565876147244e3a3c1726885e28e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
