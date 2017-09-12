<?php

/* serie/new.html.twig */
class __TwigTemplate_31e03c222604e6b6315bcba0f4da3df70c0d8240dc04e8485b1054933a41d4da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "serie/new.html.twig", 1);
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
        $__internal_fca432f69e51455a884569b94784ea500de2d7b1042838e955a538aad9691892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fca432f69e51455a884569b94784ea500de2d7b1042838e955a538aad9691892->enter($__internal_fca432f69e51455a884569b94784ea500de2d7b1042838e955a538aad9691892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serie/new.html.twig"));

        $__internal_30e46ba16bb1c9c4d8b3101ab0bc572d9e838da4b33a54678780e015c15629d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e46ba16bb1c9c4d8b3101ab0bc572d9e838da4b33a54678780e015c15629d7->enter($__internal_30e46ba16bb1c9c4d8b3101ab0bc572d9e838da4b33a54678780e015c15629d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serie/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fca432f69e51455a884569b94784ea500de2d7b1042838e955a538aad9691892->leave($__internal_fca432f69e51455a884569b94784ea500de2d7b1042838e955a538aad9691892_prof);

        
        $__internal_30e46ba16bb1c9c4d8b3101ab0bc572d9e838da4b33a54678780e015c15629d7->leave($__internal_30e46ba16bb1c9c4d8b3101ab0bc572d9e838da4b33a54678780e015c15629d7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac671828c5e0f0b605e401a447d66b340b63ab6239716841c2af02c9ef3381ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac671828c5e0f0b605e401a447d66b340b63ab6239716841c2af02c9ef3381ca->enter($__internal_ac671828c5e0f0b605e401a447d66b340b63ab6239716841c2af02c9ef3381ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e99f63b4bbfe2cdc56f8f10670659571030621ee4d38c15ac400bb53acc931f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99f63b4bbfe2cdc56f8f10670659571030621ee4d38c15ac400bb53acc931f2->enter($__internal_e99f63b4bbfe2cdc56f8f10670659571030621ee4d38c15ac400bb53acc931f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Serie creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e99f63b4bbfe2cdc56f8f10670659571030621ee4d38c15ac400bb53acc931f2->leave($__internal_e99f63b4bbfe2cdc56f8f10670659571030621ee4d38c15ac400bb53acc931f2_prof);

        
        $__internal_ac671828c5e0f0b605e401a447d66b340b63ab6239716841c2af02c9ef3381ca->leave($__internal_ac671828c5e0f0b605e401a447d66b340b63ab6239716841c2af02c9ef3381ca_prof);

    }

    public function getTemplateName()
    {
        return "serie/new.html.twig";
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
    <h1>Serie creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('serie_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "serie/new.html.twig", "/var/www/html/seriestv/app/Resources/views/serie/new.html.twig");
    }
}
