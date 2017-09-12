<?php

/* serie/edit.html.twig */
class __TwigTemplate_e28047a485806e93d93248599c8affeca26a36dfee270b22628da772a3ea0d4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "serie/edit.html.twig", 1);
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
        $__internal_f748ca2f5f70b3b93b138a6dab171cea57a9dd6e3c95a1795417a563036a0688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f748ca2f5f70b3b93b138a6dab171cea57a9dd6e3c95a1795417a563036a0688->enter($__internal_f748ca2f5f70b3b93b138a6dab171cea57a9dd6e3c95a1795417a563036a0688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serie/edit.html.twig"));

        $__internal_5bf34897edca50886de09498bb4e07ae2f7507de6c5cb0f16b64ef786cb3fc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf34897edca50886de09498bb4e07ae2f7507de6c5cb0f16b64ef786cb3fc54->enter($__internal_5bf34897edca50886de09498bb4e07ae2f7507de6c5cb0f16b64ef786cb3fc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serie/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f748ca2f5f70b3b93b138a6dab171cea57a9dd6e3c95a1795417a563036a0688->leave($__internal_f748ca2f5f70b3b93b138a6dab171cea57a9dd6e3c95a1795417a563036a0688_prof);

        
        $__internal_5bf34897edca50886de09498bb4e07ae2f7507de6c5cb0f16b64ef786cb3fc54->leave($__internal_5bf34897edca50886de09498bb4e07ae2f7507de6c5cb0f16b64ef786cb3fc54_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_32032bb1d0654e368b9344fbe40775ef38c3e19348e9e5e2b652973ac91aeaeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32032bb1d0654e368b9344fbe40775ef38c3e19348e9e5e2b652973ac91aeaeb->enter($__internal_32032bb1d0654e368b9344fbe40775ef38c3e19348e9e5e2b652973ac91aeaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ccc75b5fef2d3b483b845f5a4aa1b59d9fe53239706ae1dbc0425c81f32585a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ccc75b5fef2d3b483b845f5a4aa1b59d9fe53239706ae1dbc0425c81f32585a->enter($__internal_7ccc75b5fef2d3b483b845f5a4aa1b59d9fe53239706ae1dbc0425c81f32585a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7ccc75b5fef2d3b483b845f5a4aa1b59d9fe53239706ae1dbc0425c81f32585a->leave($__internal_7ccc75b5fef2d3b483b845f5a4aa1b59d9fe53239706ae1dbc0425c81f32585a_prof);

        
        $__internal_32032bb1d0654e368b9344fbe40775ef38c3e19348e9e5e2b652973ac91aeaeb->leave($__internal_32032bb1d0654e368b9344fbe40775ef38c3e19348e9e5e2b652973ac91aeaeb_prof);

    }

    public function getTemplateName()
    {
        return "serie/edit.html.twig";
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
", "serie/edit.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/serie/edit.html.twig");
    }
}
