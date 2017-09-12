<?php

/* episode/edit.html.twig */
class __TwigTemplate_d4845555c9831284e9b5944a7592d958485b59e42e282dabf842cc06a9a67831 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "episode/edit.html.twig", 1);
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
        $__internal_27e3b54c528f1e5084c6b9c857271805825c60e817b97772e3cc1c0492ca6894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e3b54c528f1e5084c6b9c857271805825c60e817b97772e3cc1c0492ca6894->enter($__internal_27e3b54c528f1e5084c6b9c857271805825c60e817b97772e3cc1c0492ca6894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/edit.html.twig"));

        $__internal_7b10126291b8d209ad9016137dea92df168e6f3c1feff812c792aca88a848eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b10126291b8d209ad9016137dea92df168e6f3c1feff812c792aca88a848eaf->enter($__internal_7b10126291b8d209ad9016137dea92df168e6f3c1feff812c792aca88a848eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27e3b54c528f1e5084c6b9c857271805825c60e817b97772e3cc1c0492ca6894->leave($__internal_27e3b54c528f1e5084c6b9c857271805825c60e817b97772e3cc1c0492ca6894_prof);

        
        $__internal_7b10126291b8d209ad9016137dea92df168e6f3c1feff812c792aca88a848eaf->leave($__internal_7b10126291b8d209ad9016137dea92df168e6f3c1feff812c792aca88a848eaf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4f81df31882467243899edd22c9dd00d2231bf19d0c68fc6b0cf3cdeded0960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f81df31882467243899edd22c9dd00d2231bf19d0c68fc6b0cf3cdeded0960->enter($__internal_a4f81df31882467243899edd22c9dd00d2231bf19d0c68fc6b0cf3cdeded0960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d12e8ae1542619e15d8f93085d02bcdd756654ec6e5d00bc37ecb077a74ef05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d12e8ae1542619e15d8f93085d02bcdd756654ec6e5d00bc37ecb077a74ef05->enter($__internal_7d12e8ae1542619e15d8f93085d02bcdd756654ec6e5d00bc37ecb077a74ef05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Episode edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episode_index");
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
        
        $__internal_7d12e8ae1542619e15d8f93085d02bcdd756654ec6e5d00bc37ecb077a74ef05->leave($__internal_7d12e8ae1542619e15d8f93085d02bcdd756654ec6e5d00bc37ecb077a74ef05_prof);

        
        $__internal_a4f81df31882467243899edd22c9dd00d2231bf19d0c68fc6b0cf3cdeded0960->leave($__internal_a4f81df31882467243899edd22c9dd00d2231bf19d0c68fc6b0cf3cdeded0960_prof);

    }

    public function getTemplateName()
    {
        return "episode/edit.html.twig";
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
    <h1>Episode edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('episode_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "episode/edit.html.twig", "/var/www/html/seriestv/app/Resources/views/episode/edit.html.twig");
    }
}
