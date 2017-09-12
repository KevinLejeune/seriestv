<?php

/* saison/edit.html.twig */
class __TwigTemplate_7400048f3d043f13d3a6fbe738e9229385a57378846d0aca44e950ebf584b759 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "saison/edit.html.twig", 1);
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
        $__internal_b23beb7c2b6773433449d05d4ad03937dec2ddc2bec60d42526390f8e923f17c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23beb7c2b6773433449d05d4ad03937dec2ddc2bec60d42526390f8e923f17c->enter($__internal_b23beb7c2b6773433449d05d4ad03937dec2ddc2bec60d42526390f8e923f17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saison/edit.html.twig"));

        $__internal_84325009b02a5218ba4f8e4bcae01c280bd78ed0c97618fde5d6cac8db7a3bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84325009b02a5218ba4f8e4bcae01c280bd78ed0c97618fde5d6cac8db7a3bd9->enter($__internal_84325009b02a5218ba4f8e4bcae01c280bd78ed0c97618fde5d6cac8db7a3bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saison/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b23beb7c2b6773433449d05d4ad03937dec2ddc2bec60d42526390f8e923f17c->leave($__internal_b23beb7c2b6773433449d05d4ad03937dec2ddc2bec60d42526390f8e923f17c_prof);

        
        $__internal_84325009b02a5218ba4f8e4bcae01c280bd78ed0c97618fde5d6cac8db7a3bd9->leave($__internal_84325009b02a5218ba4f8e4bcae01c280bd78ed0c97618fde5d6cac8db7a3bd9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f5e7ebc8c1111ff1b3eb32af8a647cb2bbd4f57b35eb49a841f1e66d85f711a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5e7ebc8c1111ff1b3eb32af8a647cb2bbd4f57b35eb49a841f1e66d85f711a->enter($__internal_6f5e7ebc8c1111ff1b3eb32af8a647cb2bbd4f57b35eb49a841f1e66d85f711a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76ffc327dc56e6e5791df7cc4b7c76614c275d88e0cf61aa3cc32ac4831ef3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ffc327dc56e6e5791df7cc4b7c76614c275d88e0cf61aa3cc32ac4831ef3e2->enter($__internal_76ffc327dc56e6e5791df7cc4b7c76614c275d88e0cf61aa3cc32ac4831ef3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_76ffc327dc56e6e5791df7cc4b7c76614c275d88e0cf61aa3cc32ac4831ef3e2->leave($__internal_76ffc327dc56e6e5791df7cc4b7c76614c275d88e0cf61aa3cc32ac4831ef3e2_prof);

        
        $__internal_6f5e7ebc8c1111ff1b3eb32af8a647cb2bbd4f57b35eb49a841f1e66d85f711a->leave($__internal_6f5e7ebc8c1111ff1b3eb32af8a647cb2bbd4f57b35eb49a841f1e66d85f711a_prof);

    }

    public function getTemplateName()
    {
        return "saison/edit.html.twig";
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
", "saison/edit.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/saison/edit.html.twig");
    }
}
