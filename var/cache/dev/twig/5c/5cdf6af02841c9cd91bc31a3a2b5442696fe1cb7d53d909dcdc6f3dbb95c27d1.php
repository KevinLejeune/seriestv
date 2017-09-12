<?php

/* episode/edit.html.twig */
class __TwigTemplate_9868dd49244e0f8fdd6956893bd9b8bddecdbdb8c620057e3e902a414ec251e1 extends Twig_Template
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
        $__internal_3c24f619c9131e267b80d8077fc623c6ac0ff388c1d668fb90b86bb855cedd00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c24f619c9131e267b80d8077fc623c6ac0ff388c1d668fb90b86bb855cedd00->enter($__internal_3c24f619c9131e267b80d8077fc623c6ac0ff388c1d668fb90b86bb855cedd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/edit.html.twig"));

        $__internal_901aee522e404e47002adcd34b200fb06f820bf25c4dc7246df1dd313e5829b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901aee522e404e47002adcd34b200fb06f820bf25c4dc7246df1dd313e5829b0->enter($__internal_901aee522e404e47002adcd34b200fb06f820bf25c4dc7246df1dd313e5829b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c24f619c9131e267b80d8077fc623c6ac0ff388c1d668fb90b86bb855cedd00->leave($__internal_3c24f619c9131e267b80d8077fc623c6ac0ff388c1d668fb90b86bb855cedd00_prof);

        
        $__internal_901aee522e404e47002adcd34b200fb06f820bf25c4dc7246df1dd313e5829b0->leave($__internal_901aee522e404e47002adcd34b200fb06f820bf25c4dc7246df1dd313e5829b0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5733c767934c582a2e4f54a0f20392f64623b68cf4f70177f896b650155914a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5733c767934c582a2e4f54a0f20392f64623b68cf4f70177f896b650155914a->enter($__internal_d5733c767934c582a2e4f54a0f20392f64623b68cf4f70177f896b650155914a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a461b764ea79f0067cc81101f278b4d85371fdd5688bec7fb75fca0c99fe6f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a461b764ea79f0067cc81101f278b4d85371fdd5688bec7fb75fca0c99fe6f7b->enter($__internal_a461b764ea79f0067cc81101f278b4d85371fdd5688bec7fb75fca0c99fe6f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a461b764ea79f0067cc81101f278b4d85371fdd5688bec7fb75fca0c99fe6f7b->leave($__internal_a461b764ea79f0067cc81101f278b4d85371fdd5688bec7fb75fca0c99fe6f7b_prof);

        
        $__internal_d5733c767934c582a2e4f54a0f20392f64623b68cf4f70177f896b650155914a->leave($__internal_d5733c767934c582a2e4f54a0f20392f64623b68cf4f70177f896b650155914a_prof);

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
", "episode/edit.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/episode/edit.html.twig");
    }
}
