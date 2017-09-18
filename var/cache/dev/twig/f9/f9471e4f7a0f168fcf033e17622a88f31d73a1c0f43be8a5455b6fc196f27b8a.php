<?php

/* :episode:edit.html.twig */
class __TwigTemplate_d4845555c9831284e9b5944a7592d958485b59e42e282dabf842cc06a9a67831 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":episode:edit.html.twig", 1);
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
        $__internal_aaaf5094719d72d02e933d06d5c1d8aa89db8adc31f1c66822b74dea1b267d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaaf5094719d72d02e933d06d5c1d8aa89db8adc31f1c66822b74dea1b267d31->enter($__internal_aaaf5094719d72d02e933d06d5c1d8aa89db8adc31f1c66822b74dea1b267d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":episode:edit.html.twig"));

        $__internal_8faf6204174695f94006313333212bc03f421305840974a2a6a2addccf299c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8faf6204174695f94006313333212bc03f421305840974a2a6a2addccf299c69->enter($__internal_8faf6204174695f94006313333212bc03f421305840974a2a6a2addccf299c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":episode:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaaf5094719d72d02e933d06d5c1d8aa89db8adc31f1c66822b74dea1b267d31->leave($__internal_aaaf5094719d72d02e933d06d5c1d8aa89db8adc31f1c66822b74dea1b267d31_prof);

        
        $__internal_8faf6204174695f94006313333212bc03f421305840974a2a6a2addccf299c69->leave($__internal_8faf6204174695f94006313333212bc03f421305840974a2a6a2addccf299c69_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d33095e75ec5bc17ecb2a502b78886bffcfda9b0114090bb8611b3065f134917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33095e75ec5bc17ecb2a502b78886bffcfda9b0114090bb8611b3065f134917->enter($__internal_d33095e75ec5bc17ecb2a502b78886bffcfda9b0114090bb8611b3065f134917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2ab2a56c3d01391384c6a8135bbf8eb502a468783c25048a33b09a6dc0db5dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ab2a56c3d01391384c6a8135bbf8eb502a468783c25048a33b09a6dc0db5dc->enter($__internal_b2ab2a56c3d01391384c6a8135bbf8eb502a468783c25048a33b09a6dc0db5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b2ab2a56c3d01391384c6a8135bbf8eb502a468783c25048a33b09a6dc0db5dc->leave($__internal_b2ab2a56c3d01391384c6a8135bbf8eb502a468783c25048a33b09a6dc0db5dc_prof);

        
        $__internal_d33095e75ec5bc17ecb2a502b78886bffcfda9b0114090bb8611b3065f134917->leave($__internal_d33095e75ec5bc17ecb2a502b78886bffcfda9b0114090bb8611b3065f134917_prof);

    }

    public function getTemplateName()
    {
        return ":episode:edit.html.twig";
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
", ":episode:edit.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/episode/edit.html.twig");
    }
}
