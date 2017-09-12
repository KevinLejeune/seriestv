<?php

/* saison/new.html.twig */
class __TwigTemplate_e749e80e823a77ee748ec7ee6d570b088c2f4565240d75499271abbfdb7ff8cb extends Twig_Template
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
        $__internal_5231793d00f8d9a021451ccdc8194aefb7ed6b8860840ab3d7b5fab273ac9aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5231793d00f8d9a021451ccdc8194aefb7ed6b8860840ab3d7b5fab273ac9aa2->enter($__internal_5231793d00f8d9a021451ccdc8194aefb7ed6b8860840ab3d7b5fab273ac9aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saison/new.html.twig"));

        $__internal_e7a8dd7af06a2b2e66c527ee6af99a735b4b49bbe3968b5ac058ee1d00e1b10a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a8dd7af06a2b2e66c527ee6af99a735b4b49bbe3968b5ac058ee1d00e1b10a->enter($__internal_e7a8dd7af06a2b2e66c527ee6af99a735b4b49bbe3968b5ac058ee1d00e1b10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saison/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5231793d00f8d9a021451ccdc8194aefb7ed6b8860840ab3d7b5fab273ac9aa2->leave($__internal_5231793d00f8d9a021451ccdc8194aefb7ed6b8860840ab3d7b5fab273ac9aa2_prof);

        
        $__internal_e7a8dd7af06a2b2e66c527ee6af99a735b4b49bbe3968b5ac058ee1d00e1b10a->leave($__internal_e7a8dd7af06a2b2e66c527ee6af99a735b4b49bbe3968b5ac058ee1d00e1b10a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_03e93f75c94982d8e7f33e4785af0fe2a84043afe6579aaea7bbf8e445143f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e93f75c94982d8e7f33e4785af0fe2a84043afe6579aaea7bbf8e445143f11->enter($__internal_03e93f75c94982d8e7f33e4785af0fe2a84043afe6579aaea7bbf8e445143f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_16b3afac7c55778ec7493c1d9562e6ee2ddece7079cccabf7327bda8d6ab5691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b3afac7c55778ec7493c1d9562e6ee2ddece7079cccabf7327bda8d6ab5691->enter($__internal_16b3afac7c55778ec7493c1d9562e6ee2ddece7079cccabf7327bda8d6ab5691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_16b3afac7c55778ec7493c1d9562e6ee2ddece7079cccabf7327bda8d6ab5691->leave($__internal_16b3afac7c55778ec7493c1d9562e6ee2ddece7079cccabf7327bda8d6ab5691_prof);

        
        $__internal_03e93f75c94982d8e7f33e4785af0fe2a84043afe6579aaea7bbf8e445143f11->leave($__internal_03e93f75c94982d8e7f33e4785af0fe2a84043afe6579aaea7bbf8e445143f11_prof);

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
", "saison/new.html.twig", "/var/www/html/seriestv/app/Resources/views/saison/new.html.twig");
    }
}
