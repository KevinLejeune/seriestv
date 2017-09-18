<?php

/* :saison:new.html.twig */
class __TwigTemplate_e749e80e823a77ee748ec7ee6d570b088c2f4565240d75499271abbfdb7ff8cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":saison:new.html.twig", 1);
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
        $__internal_a36291e2199644dde67f6728293fe4797cc6ef927e39558736961ac74981d955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36291e2199644dde67f6728293fe4797cc6ef927e39558736961ac74981d955->enter($__internal_a36291e2199644dde67f6728293fe4797cc6ef927e39558736961ac74981d955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":saison:new.html.twig"));

        $__internal_143b3f08ce54f6e360db168467177d1bf1b0e98fdae8d0c71ba51c630eaff739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143b3f08ce54f6e360db168467177d1bf1b0e98fdae8d0c71ba51c630eaff739->enter($__internal_143b3f08ce54f6e360db168467177d1bf1b0e98fdae8d0c71ba51c630eaff739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":saison:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a36291e2199644dde67f6728293fe4797cc6ef927e39558736961ac74981d955->leave($__internal_a36291e2199644dde67f6728293fe4797cc6ef927e39558736961ac74981d955_prof);

        
        $__internal_143b3f08ce54f6e360db168467177d1bf1b0e98fdae8d0c71ba51c630eaff739->leave($__internal_143b3f08ce54f6e360db168467177d1bf1b0e98fdae8d0c71ba51c630eaff739_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_69ad635d4e610ea600402ce2851d37e30204a24031ac54ac52658c20f62cc0ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ad635d4e610ea600402ce2851d37e30204a24031ac54ac52658c20f62cc0ef->enter($__internal_69ad635d4e610ea600402ce2851d37e30204a24031ac54ac52658c20f62cc0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92d31baebf11957c823c2fe6dbbf4b1ab799b68e96473d263552b1e611f49612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d31baebf11957c823c2fe6dbbf4b1ab799b68e96473d263552b1e611f49612->enter($__internal_92d31baebf11957c823c2fe6dbbf4b1ab799b68e96473d263552b1e611f49612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Saison creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("saison_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_92d31baebf11957c823c2fe6dbbf4b1ab799b68e96473d263552b1e611f49612->leave($__internal_92d31baebf11957c823c2fe6dbbf4b1ab799b68e96473d263552b1e611f49612_prof);

        
        $__internal_69ad635d4e610ea600402ce2851d37e30204a24031ac54ac52658c20f62cc0ef->leave($__internal_69ad635d4e610ea600402ce2851d37e30204a24031ac54ac52658c20f62cc0ef_prof);

    }

    public function getTemplateName()
    {
        return ":saison:new.html.twig";
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
    <h1>Saison creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('saison_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":saison:new.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/saison/new.html.twig");
    }
}
