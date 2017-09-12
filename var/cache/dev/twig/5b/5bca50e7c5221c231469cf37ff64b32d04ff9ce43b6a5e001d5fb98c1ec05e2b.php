<?php

/* people/new.html.twig */
class __TwigTemplate_bd929df2a557a5cf61387b38e0a384826c31a378e19632f3f4a006d9255c8310 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "people/new.html.twig", 1);
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
        $__internal_37a5f25c0a48ccf15728f6c067db6394f2c31fd3e08dbad910f8668f805d55d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a5f25c0a48ccf15728f6c067db6394f2c31fd3e08dbad910f8668f805d55d6->enter($__internal_37a5f25c0a48ccf15728f6c067db6394f2c31fd3e08dbad910f8668f805d55d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "people/new.html.twig"));

        $__internal_ec4506b39fb5e3de3942c620d510f473eda7806f2ba5ae3eb94935157f63aeb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4506b39fb5e3de3942c620d510f473eda7806f2ba5ae3eb94935157f63aeb8->enter($__internal_ec4506b39fb5e3de3942c620d510f473eda7806f2ba5ae3eb94935157f63aeb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "people/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37a5f25c0a48ccf15728f6c067db6394f2c31fd3e08dbad910f8668f805d55d6->leave($__internal_37a5f25c0a48ccf15728f6c067db6394f2c31fd3e08dbad910f8668f805d55d6_prof);

        
        $__internal_ec4506b39fb5e3de3942c620d510f473eda7806f2ba5ae3eb94935157f63aeb8->leave($__internal_ec4506b39fb5e3de3942c620d510f473eda7806f2ba5ae3eb94935157f63aeb8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_48253b360d419c79e18c76bc50575e982de1883d0b7b7caddd60bd45523869c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48253b360d419c79e18c76bc50575e982de1883d0b7b7caddd60bd45523869c0->enter($__internal_48253b360d419c79e18c76bc50575e982de1883d0b7b7caddd60bd45523869c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a1a197474b59037918b16135c209ba56abf2517b19a3be1b51e79233a79fa26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1a197474b59037918b16135c209ba56abf2517b19a3be1b51e79233a79fa26->enter($__internal_6a1a197474b59037918b16135c209ba56abf2517b19a3be1b51e79233a79fa26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a1a197474b59037918b16135c209ba56abf2517b19a3be1b51e79233a79fa26->leave($__internal_6a1a197474b59037918b16135c209ba56abf2517b19a3be1b51e79233a79fa26_prof);

        
        $__internal_48253b360d419c79e18c76bc50575e982de1883d0b7b7caddd60bd45523869c0->leave($__internal_48253b360d419c79e18c76bc50575e982de1883d0b7b7caddd60bd45523869c0_prof);

    }

    public function getTemplateName()
    {
        return "people/new.html.twig";
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
", "people/new.html.twig", "/var/www/html/seriestv/app/Resources/views/people/new.html.twig");
    }
}
