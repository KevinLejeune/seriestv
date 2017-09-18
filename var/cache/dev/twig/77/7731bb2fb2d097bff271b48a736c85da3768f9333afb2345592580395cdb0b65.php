<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_124d9dd75c929b55d18962f6bf938051c898074126861dbd40238066259d66b2 extends Twig_Template
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
        $__internal_31634eedda832d1be4e25f421ad22df1ab123142ebaf398be5ce3e33774b429b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31634eedda832d1be4e25f421ad22df1ab123142ebaf398be5ce3e33774b429b->enter($__internal_31634eedda832d1be4e25f421ad22df1ab123142ebaf398be5ce3e33774b429b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_c33bf7c2c2e2ca4c8e065b73402a89ca24ab50800850baff537018d7041cf66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33bf7c2c2e2ca4c8e065b73402a89ca24ab50800850baff537018d7041cf66f->enter($__internal_c33bf7c2c2e2ca4c8e065b73402a89ca24ab50800850baff537018d7041cf66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_31634eedda832d1be4e25f421ad22df1ab123142ebaf398be5ce3e33774b429b->leave($__internal_31634eedda832d1be4e25f421ad22df1ab123142ebaf398be5ce3e33774b429b_prof);

        
        $__internal_c33bf7c2c2e2ca4c8e065b73402a89ca24ab50800850baff537018d7041cf66f->leave($__internal_c33bf7c2c2e2ca4c8e065b73402a89ca24ab50800850baff537018d7041cf66f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
