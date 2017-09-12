<?php

/* episode/new.html.twig */
class __TwigTemplate_6e2d0aa42459ca7305642529db636fd79d8c0c9b020dfbeb2d598a9c44b04409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "episode/new.html.twig", 1);
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
        $__internal_41333c9465e3dde420c008f19ec303bb7f311f3f501c645aa7722d1834bf8ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41333c9465e3dde420c008f19ec303bb7f311f3f501c645aa7722d1834bf8ef2->enter($__internal_41333c9465e3dde420c008f19ec303bb7f311f3f501c645aa7722d1834bf8ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/new.html.twig"));

        $__internal_09ab07ad195be5e5dcbe4fe870de8bf852849666adc47f6327cba03b94159396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ab07ad195be5e5dcbe4fe870de8bf852849666adc47f6327cba03b94159396->enter($__internal_09ab07ad195be5e5dcbe4fe870de8bf852849666adc47f6327cba03b94159396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41333c9465e3dde420c008f19ec303bb7f311f3f501c645aa7722d1834bf8ef2->leave($__internal_41333c9465e3dde420c008f19ec303bb7f311f3f501c645aa7722d1834bf8ef2_prof);

        
        $__internal_09ab07ad195be5e5dcbe4fe870de8bf852849666adc47f6327cba03b94159396->leave($__internal_09ab07ad195be5e5dcbe4fe870de8bf852849666adc47f6327cba03b94159396_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a1ae9dab80f1371b73d9ea37f0b46b64fd3ace0c3dc1f0a2916f6988030e761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a1ae9dab80f1371b73d9ea37f0b46b64fd3ace0c3dc1f0a2916f6988030e761->enter($__internal_2a1ae9dab80f1371b73d9ea37f0b46b64fd3ace0c3dc1f0a2916f6988030e761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2720dbd17050a8dc756ee43044befb14ed7a7c787e5dee646944644dfd9415e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2720dbd17050a8dc756ee43044befb14ed7a7c787e5dee646944644dfd9415e6->enter($__internal_2720dbd17050a8dc756ee43044befb14ed7a7c787e5dee646944644dfd9415e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Episode creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episode_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2720dbd17050a8dc756ee43044befb14ed7a7c787e5dee646944644dfd9415e6->leave($__internal_2720dbd17050a8dc756ee43044befb14ed7a7c787e5dee646944644dfd9415e6_prof);

        
        $__internal_2a1ae9dab80f1371b73d9ea37f0b46b64fd3ace0c3dc1f0a2916f6988030e761->leave($__internal_2a1ae9dab80f1371b73d9ea37f0b46b64fd3ace0c3dc1f0a2916f6988030e761_prof);

    }

    public function getTemplateName()
    {
        return "episode/new.html.twig";
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
    <h1>Episode creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('episode_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "episode/new.html.twig", "/var/www/html/seriestv/app/Resources/views/episode/new.html.twig");
    }
}
