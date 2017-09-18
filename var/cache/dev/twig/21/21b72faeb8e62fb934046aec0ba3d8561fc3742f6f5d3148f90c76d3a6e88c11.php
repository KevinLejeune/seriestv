<?php

/* :people:edit.html.twig */
class __TwigTemplate_cdffbcda34d4999054026bdd760353925cf247986d53416f54873e2a4ee1f02b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":people:edit.html.twig", 1);
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
        $__internal_2f171c65b9f8b152d80b09956c3bd1a194d455634fcf4598ea5eba9a66f86564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f171c65b9f8b152d80b09956c3bd1a194d455634fcf4598ea5eba9a66f86564->enter($__internal_2f171c65b9f8b152d80b09956c3bd1a194d455634fcf4598ea5eba9a66f86564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":people:edit.html.twig"));

        $__internal_45e138ab6ef7225de995636703cfa132f80f7ed9270080ff9041d48af0107aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e138ab6ef7225de995636703cfa132f80f7ed9270080ff9041d48af0107aa7->enter($__internal_45e138ab6ef7225de995636703cfa132f80f7ed9270080ff9041d48af0107aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":people:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f171c65b9f8b152d80b09956c3bd1a194d455634fcf4598ea5eba9a66f86564->leave($__internal_2f171c65b9f8b152d80b09956c3bd1a194d455634fcf4598ea5eba9a66f86564_prof);

        
        $__internal_45e138ab6ef7225de995636703cfa132f80f7ed9270080ff9041d48af0107aa7->leave($__internal_45e138ab6ef7225de995636703cfa132f80f7ed9270080ff9041d48af0107aa7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a34768aa767a11eb5b1de7d1f22147ed205af724f4498551a7e4490b53142f49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34768aa767a11eb5b1de7d1f22147ed205af724f4498551a7e4490b53142f49->enter($__internal_a34768aa767a11eb5b1de7d1f22147ed205af724f4498551a7e4490b53142f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_35f6e782d10d3b596b92e9fb3479de292aea805a3b4cdffd67bf6ee789d9b11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f6e782d10d3b596b92e9fb3479de292aea805a3b4cdffd67bf6ee789d9b11d->enter($__internal_35f6e782d10d3b596b92e9fb3479de292aea805a3b4cdffd67bf6ee789d9b11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Person edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_index");
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
        
        $__internal_35f6e782d10d3b596b92e9fb3479de292aea805a3b4cdffd67bf6ee789d9b11d->leave($__internal_35f6e782d10d3b596b92e9fb3479de292aea805a3b4cdffd67bf6ee789d9b11d_prof);

        
        $__internal_a34768aa767a11eb5b1de7d1f22147ed205af724f4498551a7e4490b53142f49->leave($__internal_a34768aa767a11eb5b1de7d1f22147ed205af724f4498551a7e4490b53142f49_prof);

    }

    public function getTemplateName()
    {
        return ":people:edit.html.twig";
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
    <h1>Person edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('people_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":people:edit.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/people/edit.html.twig");
    }
}
