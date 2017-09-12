<?php

/* people_type/new.html.twig */
class __TwigTemplate_78d47b9184e929acedbf0e696ae391291d3b9dcc3cc8882930343abcfecb8dd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "people_type/new.html.twig", 1);
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
        $__internal_a79d078cb1e8de264c8a7c3a1e4fe386785a8111232657d234e79cec5c50b19a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79d078cb1e8de264c8a7c3a1e4fe386785a8111232657d234e79cec5c50b19a->enter($__internal_a79d078cb1e8de264c8a7c3a1e4fe386785a8111232657d234e79cec5c50b19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "people_type/new.html.twig"));

        $__internal_230bae730113614295969ec636c49db492bf934f892ade95f897b7656254790c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230bae730113614295969ec636c49db492bf934f892ade95f897b7656254790c->enter($__internal_230bae730113614295969ec636c49db492bf934f892ade95f897b7656254790c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "people_type/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a79d078cb1e8de264c8a7c3a1e4fe386785a8111232657d234e79cec5c50b19a->leave($__internal_a79d078cb1e8de264c8a7c3a1e4fe386785a8111232657d234e79cec5c50b19a_prof);

        
        $__internal_230bae730113614295969ec636c49db492bf934f892ade95f897b7656254790c->leave($__internal_230bae730113614295969ec636c49db492bf934f892ade95f897b7656254790c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a09a8f84b3133fa221b37d318c8a356ded38b9e35062ba46f50d9b7a005e9019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a09a8f84b3133fa221b37d318c8a356ded38b9e35062ba46f50d9b7a005e9019->enter($__internal_a09a8f84b3133fa221b37d318c8a356ded38b9e35062ba46f50d9b7a005e9019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e5c4087c04478d23444a42e357edd6268c295174ec6a8502a322f5de2144d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5c4087c04478d23444a42e357edd6268c295174ec6a8502a322f5de2144d52->enter($__internal_8e5c4087c04478d23444a42e357edd6268c295174ec6a8502a322f5de2144d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>People_type creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_type_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8e5c4087c04478d23444a42e357edd6268c295174ec6a8502a322f5de2144d52->leave($__internal_8e5c4087c04478d23444a42e357edd6268c295174ec6a8502a322f5de2144d52_prof);

        
        $__internal_a09a8f84b3133fa221b37d318c8a356ded38b9e35062ba46f50d9b7a005e9019->leave($__internal_a09a8f84b3133fa221b37d318c8a356ded38b9e35062ba46f50d9b7a005e9019_prof);

    }

    public function getTemplateName()
    {
        return "people_type/new.html.twig";
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
    <h1>People_type creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('people_type_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "people_type/new.html.twig", "/var/www/html/seriestv/app/Resources/views/people_type/new.html.twig");
    }
}
