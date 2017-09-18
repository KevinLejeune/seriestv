<?php

/* :serie:new.html.twig */
class __TwigTemplate_31e03c222604e6b6315bcba0f4da3df70c0d8240dc04e8485b1054933a41d4da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":serie:new.html.twig", 1);
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
        $__internal_821edcad86e6b4cc57721ab14766e61602e1b526847805d5c383dc3ba2b41f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821edcad86e6b4cc57721ab14766e61602e1b526847805d5c383dc3ba2b41f37->enter($__internal_821edcad86e6b4cc57721ab14766e61602e1b526847805d5c383dc3ba2b41f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":serie:new.html.twig"));

        $__internal_ffa9beefca9870a9a691708dbf5b894a142ccf88929909fc33fc5dc362757f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa9beefca9870a9a691708dbf5b894a142ccf88929909fc33fc5dc362757f24->enter($__internal_ffa9beefca9870a9a691708dbf5b894a142ccf88929909fc33fc5dc362757f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":serie:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_821edcad86e6b4cc57721ab14766e61602e1b526847805d5c383dc3ba2b41f37->leave($__internal_821edcad86e6b4cc57721ab14766e61602e1b526847805d5c383dc3ba2b41f37_prof);

        
        $__internal_ffa9beefca9870a9a691708dbf5b894a142ccf88929909fc33fc5dc362757f24->leave($__internal_ffa9beefca9870a9a691708dbf5b894a142ccf88929909fc33fc5dc362757f24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a03836860567148d9430988e79ef6d4217f9ca7801b6a7e32369b1737e4e398f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03836860567148d9430988e79ef6d4217f9ca7801b6a7e32369b1737e4e398f->enter($__internal_a03836860567148d9430988e79ef6d4217f9ca7801b6a7e32369b1737e4e398f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f668f1d1ed81fb7b9bfafd2026936ff129004e1fafa21b94e54af77ab7ed898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f668f1d1ed81fb7b9bfafd2026936ff129004e1fafa21b94e54af77ab7ed898->enter($__internal_8f668f1d1ed81fb7b9bfafd2026936ff129004e1fafa21b94e54af77ab7ed898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Serie creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
    <script>
        \$(document).ready(function() {
            // configure the bootstrap datepicker
            \$('.js-datepicker').datepicker({
                format: 'dd-mm-yyyy'
            });
        });
    </script>
";
        
        $__internal_8f668f1d1ed81fb7b9bfafd2026936ff129004e1fafa21b94e54af77ab7ed898->leave($__internal_8f668f1d1ed81fb7b9bfafd2026936ff129004e1fafa21b94e54af77ab7ed898_prof);

        
        $__internal_a03836860567148d9430988e79ef6d4217f9ca7801b6a7e32369b1737e4e398f->leave($__internal_a03836860567148d9430988e79ef6d4217f9ca7801b6a7e32369b1737e4e398f_prof);

    }

    public function getTemplateName()
    {
        return ":serie:new.html.twig";
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
    <h1>Serie creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('serie_index') }}\">Back to the list</a>
        </li>
    </ul>
    <script>
        \$(document).ready(function() {
            // configure the bootstrap datepicker
            \$('.js-datepicker').datepicker({
                format: 'dd-mm-yyyy'
            });
        });
    </script>
{% endblock %}
", ":serie:new.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/serie/new.html.twig");
    }
}
