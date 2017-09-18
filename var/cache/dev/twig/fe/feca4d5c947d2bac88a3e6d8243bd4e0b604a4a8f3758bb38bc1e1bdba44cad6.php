<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_71e9dcbef320040219a1db1e2fb8b698e8c8d462086ee2564e2982396dc53d5e extends Twig_Template
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
        $__internal_0c354fbb397a789413e0fae55abd0f08b6c285a7f8ca46bdac93a9d6aefd70fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c354fbb397a789413e0fae55abd0f08b6c285a7f8ca46bdac93a9d6aefd70fb->enter($__internal_0c354fbb397a789413e0fae55abd0f08b6c285a7f8ca46bdac93a9d6aefd70fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_73b65b5f1710da82ec102930e57be43c0bc5b9bcbab16889d04f5e6dd56f48d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b65b5f1710da82ec102930e57be43c0bc5b9bcbab16889d04f5e6dd56f48d5->enter($__internal_73b65b5f1710da82ec102930e57be43c0bc5b9bcbab16889d04f5e6dd56f48d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_0c354fbb397a789413e0fae55abd0f08b6c285a7f8ca46bdac93a9d6aefd70fb->leave($__internal_0c354fbb397a789413e0fae55abd0f08b6c285a7f8ca46bdac93a9d6aefd70fb_prof);

        
        $__internal_73b65b5f1710da82ec102930e57be43c0bc5b9bcbab16889d04f5e6dd56f48d5->leave($__internal_73b65b5f1710da82ec102930e57be43c0bc5b9bcbab16889d04f5e6dd56f48d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
