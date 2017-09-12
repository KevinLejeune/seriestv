<?php

/* saison/new.html.twig */
class __TwigTemplate_659b05c38b8784350130ef733ace5f22f7025cb8447791913b3a9c8a1c0eb88c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "saison/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d19c7604afb4edf38f8947387e11b9d4837f10304c56795be8e7ac9e2ebe6044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19c7604afb4edf38f8947387e11b9d4837f10304c56795be8e7ac9e2ebe6044->enter($__internal_d19c7604afb4edf38f8947387e11b9d4837f10304c56795be8e7ac9e2ebe6044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saison/new.html.twig"));

        $__internal_6e826abc3bf8c3e7b762c2a5808d6d878934b2ecaab629acc2f31612f691c069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e826abc3bf8c3e7b762c2a5808d6d878934b2ecaab629acc2f31612f691c069->enter($__internal_6e826abc3bf8c3e7b762c2a5808d6d878934b2ecaab629acc2f31612f691c069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saison/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d19c7604afb4edf38f8947387e11b9d4837f10304c56795be8e7ac9e2ebe6044->leave($__internal_d19c7604afb4edf38f8947387e11b9d4837f10304c56795be8e7ac9e2ebe6044_prof);

        
        $__internal_6e826abc3bf8c3e7b762c2a5808d6d878934b2ecaab629acc2f31612f691c069->leave($__internal_6e826abc3bf8c3e7b762c2a5808d6d878934b2ecaab629acc2f31612f691c069_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_746bb1e03f0c6eb5b48239e52faaad3e08cec0feff844392c6948875201607e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746bb1e03f0c6eb5b48239e52faaad3e08cec0feff844392c6948875201607e0->enter($__internal_746bb1e03f0c6eb5b48239e52faaad3e08cec0feff844392c6948875201607e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0a9e6f7edaff186101e74decf0e476f20996d37fd858d151a97c4e2edc7dd56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a9e6f7edaff186101e74decf0e476f20996d37fd858d151a97c4e2edc7dd56->enter($__internal_b0a9e6f7edaff186101e74decf0e476f20996d37fd858d151a97c4e2edc7dd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Saison creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("saison_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b0a9e6f7edaff186101e74decf0e476f20996d37fd858d151a97c4e2edc7dd56->leave($__internal_b0a9e6f7edaff186101e74decf0e476f20996d37fd858d151a97c4e2edc7dd56_prof);

        
        $__internal_746bb1e03f0c6eb5b48239e52faaad3e08cec0feff844392c6948875201607e0->leave($__internal_746bb1e03f0c6eb5b48239e52faaad3e08cec0feff844392c6948875201607e0_prof);

    }

    public function getTemplateName()
    {
        return "saison/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Saison creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('saison_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "saison/new.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/saison/new.html.twig");
    }
}
