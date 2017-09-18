<?php

/* :serie:edit.html.twig */
class __TwigTemplate_d1eada3ad1c87e9eb81ec3bb32582411c73d3109470d53bd06eccba43ad1001a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":serie:edit.html.twig", 1);
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
        $__internal_909d2a6023f771583d318112bb02bb5ecfd137393fea34b57133e9758c8e8e3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_909d2a6023f771583d318112bb02bb5ecfd137393fea34b57133e9758c8e8e3b->enter($__internal_909d2a6023f771583d318112bb02bb5ecfd137393fea34b57133e9758c8e8e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":serie:edit.html.twig"));

        $__internal_25586fba00bfd87f3a6e9758870682fc8e135d82c10e2ad41899329670d41d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25586fba00bfd87f3a6e9758870682fc8e135d82c10e2ad41899329670d41d16->enter($__internal_25586fba00bfd87f3a6e9758870682fc8e135d82c10e2ad41899329670d41d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":serie:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_909d2a6023f771583d318112bb02bb5ecfd137393fea34b57133e9758c8e8e3b->leave($__internal_909d2a6023f771583d318112bb02bb5ecfd137393fea34b57133e9758c8e8e3b_prof);

        
        $__internal_25586fba00bfd87f3a6e9758870682fc8e135d82c10e2ad41899329670d41d16->leave($__internal_25586fba00bfd87f3a6e9758870682fc8e135d82c10e2ad41899329670d41d16_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcb74a2da01c409448996f6a6c03d9021a4c93decd5a346258bb7392bc586e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb74a2da01c409448996f6a6c03d9021a4c93decd5a346258bb7392bc586e65->enter($__internal_fcb74a2da01c409448996f6a6c03d9021a4c93decd5a346258bb7392bc586e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3a74fb0384d38319fd8b9220428c9c7fbc271df24648fa25b76376afab44aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a74fb0384d38319fd8b9220428c9c7fbc271df24648fa25b76376afab44aae->enter($__internal_e3a74fb0384d38319fd8b9220428c9c7fbc271df24648fa25b76376afab44aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Serie edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>

";
        
        $__internal_e3a74fb0384d38319fd8b9220428c9c7fbc271df24648fa25b76376afab44aae->leave($__internal_e3a74fb0384d38319fd8b9220428c9c7fbc271df24648fa25b76376afab44aae_prof);

        
        $__internal_fcb74a2da01c409448996f6a6c03d9021a4c93decd5a346258bb7392bc586e65->leave($__internal_fcb74a2da01c409448996f6a6c03d9021a4c93decd5a346258bb7392bc586e65_prof);

    }

    public function getTemplateName()
    {
        return ":serie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Serie edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('serie_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>

{% endblock %}
", ":serie:edit.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/serie/edit.html.twig");
    }
}
