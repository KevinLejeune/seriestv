<?php

/* :people:new.html.twig */
class __TwigTemplate_bd929df2a557a5cf61387b38e0a384826c31a378e19632f3f4a006d9255c8310 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":people:new.html.twig", 1);
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
        $__internal_8bf25c0cd00cc504e4d97d54a57680877b95b52b67878bc40f99ea7374d3e1fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf25c0cd00cc504e4d97d54a57680877b95b52b67878bc40f99ea7374d3e1fb->enter($__internal_8bf25c0cd00cc504e4d97d54a57680877b95b52b67878bc40f99ea7374d3e1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":people:new.html.twig"));

        $__internal_d7040ed031286c678f3b18f5b22adf67839b01527cc1feec5a58656a3964d437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7040ed031286c678f3b18f5b22adf67839b01527cc1feec5a58656a3964d437->enter($__internal_d7040ed031286c678f3b18f5b22adf67839b01527cc1feec5a58656a3964d437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":people:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bf25c0cd00cc504e4d97d54a57680877b95b52b67878bc40f99ea7374d3e1fb->leave($__internal_8bf25c0cd00cc504e4d97d54a57680877b95b52b67878bc40f99ea7374d3e1fb_prof);

        
        $__internal_d7040ed031286c678f3b18f5b22adf67839b01527cc1feec5a58656a3964d437->leave($__internal_d7040ed031286c678f3b18f5b22adf67839b01527cc1feec5a58656a3964d437_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_19fb05def119c94e3ad8e48e559ea6a83cad9a7f84cbc9bb7e0cea60cf457b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19fb05def119c94e3ad8e48e559ea6a83cad9a7f84cbc9bb7e0cea60cf457b3c->enter($__internal_19fb05def119c94e3ad8e48e559ea6a83cad9a7f84cbc9bb7e0cea60cf457b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_327862829486792d7730d9a7f5cb8b2f00ff8d9269a0910451463f93b0a9edaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327862829486792d7730d9a7f5cb8b2f00ff8d9269a0910451463f93b0a9edaf->enter($__internal_327862829486792d7730d9a7f5cb8b2f00ff8d9269a0910451463f93b0a9edaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Person creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_327862829486792d7730d9a7f5cb8b2f00ff8d9269a0910451463f93b0a9edaf->leave($__internal_327862829486792d7730d9a7f5cb8b2f00ff8d9269a0910451463f93b0a9edaf_prof);

        
        $__internal_19fb05def119c94e3ad8e48e559ea6a83cad9a7f84cbc9bb7e0cea60cf457b3c->leave($__internal_19fb05def119c94e3ad8e48e559ea6a83cad9a7f84cbc9bb7e0cea60cf457b3c_prof);

    }

    public function getTemplateName()
    {
        return ":people:new.html.twig";
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
    <h1>Person creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('people_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":people:new.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/people/new.html.twig");
    }
}
