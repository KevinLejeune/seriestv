<?php

/* episode/new.html.twig */
class __TwigTemplate_8ba92793e1d0dc125a9f29f6a6fc213b942e09d23231b9d419019594574543c5 extends Twig_Template
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
        $__internal_c470128dbf4e9e79af8759beb4c340e0a2d5d06d8233e9b1e67e79f70a78c9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c470128dbf4e9e79af8759beb4c340e0a2d5d06d8233e9b1e67e79f70a78c9f8->enter($__internal_c470128dbf4e9e79af8759beb4c340e0a2d5d06d8233e9b1e67e79f70a78c9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/new.html.twig"));

        $__internal_dba143dc943f94d23f8e54b26f72c56176f1a893f939a86c8d8cf85ffd20204b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba143dc943f94d23f8e54b26f72c56176f1a893f939a86c8d8cf85ffd20204b->enter($__internal_dba143dc943f94d23f8e54b26f72c56176f1a893f939a86c8d8cf85ffd20204b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c470128dbf4e9e79af8759beb4c340e0a2d5d06d8233e9b1e67e79f70a78c9f8->leave($__internal_c470128dbf4e9e79af8759beb4c340e0a2d5d06d8233e9b1e67e79f70a78c9f8_prof);

        
        $__internal_dba143dc943f94d23f8e54b26f72c56176f1a893f939a86c8d8cf85ffd20204b->leave($__internal_dba143dc943f94d23f8e54b26f72c56176f1a893f939a86c8d8cf85ffd20204b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a70dc370e39876d8c858bfc53d899759777e8753676f4375f7b924c3ee06a0cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70dc370e39876d8c858bfc53d899759777e8753676f4375f7b924c3ee06a0cb->enter($__internal_a70dc370e39876d8c858bfc53d899759777e8753676f4375f7b924c3ee06a0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8984d2af6dd4ac5b4999ae674f8793811215192942c48d2f412f19e2be87fc1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8984d2af6dd4ac5b4999ae674f8793811215192942c48d2f412f19e2be87fc1e->enter($__internal_8984d2af6dd4ac5b4999ae674f8793811215192942c48d2f412f19e2be87fc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8984d2af6dd4ac5b4999ae674f8793811215192942c48d2f412f19e2be87fc1e->leave($__internal_8984d2af6dd4ac5b4999ae674f8793811215192942c48d2f412f19e2be87fc1e_prof);

        
        $__internal_a70dc370e39876d8c858bfc53d899759777e8753676f4375f7b924c3ee06a0cb->leave($__internal_a70dc370e39876d8c858bfc53d899759777e8753676f4375f7b924c3ee06a0cb_prof);

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
", "episode/new.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/episode/new.html.twig");
    }
}
