<?php

/* :saison:edit.html.twig */
class __TwigTemplate_bc3fcbd1c1b118221a4df4e5bc62f0e08b24ce773440b36b439eeac9753a464a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":saison:edit.html.twig", 1);
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
        $__internal_76b3c720de5096d5722a56c0bbd9c8326b02494a4adefa675761ca3925ddd929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b3c720de5096d5722a56c0bbd9c8326b02494a4adefa675761ca3925ddd929->enter($__internal_76b3c720de5096d5722a56c0bbd9c8326b02494a4adefa675761ca3925ddd929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":saison:edit.html.twig"));

        $__internal_39315d63055ca7d6fa7290ba58d40abd29f96e7cc4394959854fd741f3bb884e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39315d63055ca7d6fa7290ba58d40abd29f96e7cc4394959854fd741f3bb884e->enter($__internal_39315d63055ca7d6fa7290ba58d40abd29f96e7cc4394959854fd741f3bb884e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":saison:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76b3c720de5096d5722a56c0bbd9c8326b02494a4adefa675761ca3925ddd929->leave($__internal_76b3c720de5096d5722a56c0bbd9c8326b02494a4adefa675761ca3925ddd929_prof);

        
        $__internal_39315d63055ca7d6fa7290ba58d40abd29f96e7cc4394959854fd741f3bb884e->leave($__internal_39315d63055ca7d6fa7290ba58d40abd29f96e7cc4394959854fd741f3bb884e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f67211f1e7ca06a998aed9d4b5a0e5514a5c0c8ee5a77a88dfb10eade418dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f67211f1e7ca06a998aed9d4b5a0e5514a5c0c8ee5a77a88dfb10eade418dd4->enter($__internal_4f67211f1e7ca06a998aed9d4b5a0e5514a5c0c8ee5a77a88dfb10eade418dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27c7dcf90f7deeb01ec89cd6479247f582bfd2dc7bcc2ff0f29ced751e2f6019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c7dcf90f7deeb01ec89cd6479247f582bfd2dc7bcc2ff0f29ced751e2f6019->enter($__internal_27c7dcf90f7deeb01ec89cd6479247f582bfd2dc7bcc2ff0f29ced751e2f6019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Saison edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("saison_index");
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
        
        $__internal_27c7dcf90f7deeb01ec89cd6479247f582bfd2dc7bcc2ff0f29ced751e2f6019->leave($__internal_27c7dcf90f7deeb01ec89cd6479247f582bfd2dc7bcc2ff0f29ced751e2f6019_prof);

        
        $__internal_4f67211f1e7ca06a998aed9d4b5a0e5514a5c0c8ee5a77a88dfb10eade418dd4->leave($__internal_4f67211f1e7ca06a998aed9d4b5a0e5514a5c0c8ee5a77a88dfb10eade418dd4_prof);

    }

    public function getTemplateName()
    {
        return ":saison:edit.html.twig";
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
    <h1>Saison edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('saison_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":saison:edit.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/saison/edit.html.twig");
    }
}
