<?php

/* :episode:new.html.twig */
class __TwigTemplate_6e2d0aa42459ca7305642529db636fd79d8c0c9b020dfbeb2d598a9c44b04409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":episode:new.html.twig", 1);
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
        $__internal_89cb55142759a69c00172eaa19b88808cbb0021f90931a596862fcd9a4a507bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89cb55142759a69c00172eaa19b88808cbb0021f90931a596862fcd9a4a507bc->enter($__internal_89cb55142759a69c00172eaa19b88808cbb0021f90931a596862fcd9a4a507bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":episode:new.html.twig"));

        $__internal_13ac3b8b3de8d3db3874b93ae888e7469c5a8a01b3e429d8ae9e26afa1b54f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ac3b8b3de8d3db3874b93ae888e7469c5a8a01b3e429d8ae9e26afa1b54f1b->enter($__internal_13ac3b8b3de8d3db3874b93ae888e7469c5a8a01b3e429d8ae9e26afa1b54f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":episode:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89cb55142759a69c00172eaa19b88808cbb0021f90931a596862fcd9a4a507bc->leave($__internal_89cb55142759a69c00172eaa19b88808cbb0021f90931a596862fcd9a4a507bc_prof);

        
        $__internal_13ac3b8b3de8d3db3874b93ae888e7469c5a8a01b3e429d8ae9e26afa1b54f1b->leave($__internal_13ac3b8b3de8d3db3874b93ae888e7469c5a8a01b3e429d8ae9e26afa1b54f1b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9aa1d2bce7ce14edff5a3d3562e76d2e586e21d73a5e94fcf9013d61e5a76fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9aa1d2bce7ce14edff5a3d3562e76d2e586e21d73a5e94fcf9013d61e5a76fb->enter($__internal_b9aa1d2bce7ce14edff5a3d3562e76d2e586e21d73a5e94fcf9013d61e5a76fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cee268e7dcf1cf98f50cc93e1bedbf05b9e6a1590c7f06c5f12a59e111750a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee268e7dcf1cf98f50cc93e1bedbf05b9e6a1590c7f06c5f12a59e111750a33->enter($__internal_cee268e7dcf1cf98f50cc93e1bedbf05b9e6a1590c7f06c5f12a59e111750a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cee268e7dcf1cf98f50cc93e1bedbf05b9e6a1590c7f06c5f12a59e111750a33->leave($__internal_cee268e7dcf1cf98f50cc93e1bedbf05b9e6a1590c7f06c5f12a59e111750a33_prof);

        
        $__internal_b9aa1d2bce7ce14edff5a3d3562e76d2e586e21d73a5e94fcf9013d61e5a76fb->leave($__internal_b9aa1d2bce7ce14edff5a3d3562e76d2e586e21d73a5e94fcf9013d61e5a76fb_prof);

    }

    public function getTemplateName()
    {
        return ":episode:new.html.twig";
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
", ":episode:new.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/episode/new.html.twig");
    }
}
