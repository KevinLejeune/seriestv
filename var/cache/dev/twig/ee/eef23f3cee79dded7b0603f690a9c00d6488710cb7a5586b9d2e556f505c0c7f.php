<?php

/* :people_type:new.html.twig */
class __TwigTemplate_78d47b9184e929acedbf0e696ae391291d3b9dcc3cc8882930343abcfecb8dd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":people_type:new.html.twig", 1);
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
        $__internal_966d8a67f01d983f7b0b3ebfb82e3fa95f0dab12d3cbe9bcb3da909453832adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_966d8a67f01d983f7b0b3ebfb82e3fa95f0dab12d3cbe9bcb3da909453832adb->enter($__internal_966d8a67f01d983f7b0b3ebfb82e3fa95f0dab12d3cbe9bcb3da909453832adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":people_type:new.html.twig"));

        $__internal_3c0bc81769e0ce492f68331aacc1359fff07cfc67e32b2de48dd197c4827a128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0bc81769e0ce492f68331aacc1359fff07cfc67e32b2de48dd197c4827a128->enter($__internal_3c0bc81769e0ce492f68331aacc1359fff07cfc67e32b2de48dd197c4827a128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":people_type:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_966d8a67f01d983f7b0b3ebfb82e3fa95f0dab12d3cbe9bcb3da909453832adb->leave($__internal_966d8a67f01d983f7b0b3ebfb82e3fa95f0dab12d3cbe9bcb3da909453832adb_prof);

        
        $__internal_3c0bc81769e0ce492f68331aacc1359fff07cfc67e32b2de48dd197c4827a128->leave($__internal_3c0bc81769e0ce492f68331aacc1359fff07cfc67e32b2de48dd197c4827a128_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33dae930eda721966160332c6948133aa074aad21569e144844fc6b938cfdacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33dae930eda721966160332c6948133aa074aad21569e144844fc6b938cfdacc->enter($__internal_33dae930eda721966160332c6948133aa074aad21569e144844fc6b938cfdacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_385d8f50fc6bb18174845eb4ca6e081fbc1c5d9096b7fd1773814c1a37a752eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385d8f50fc6bb18174845eb4ca6e081fbc1c5d9096b7fd1773814c1a37a752eb->enter($__internal_385d8f50fc6bb18174845eb4ca6e081fbc1c5d9096b7fd1773814c1a37a752eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_385d8f50fc6bb18174845eb4ca6e081fbc1c5d9096b7fd1773814c1a37a752eb->leave($__internal_385d8f50fc6bb18174845eb4ca6e081fbc1c5d9096b7fd1773814c1a37a752eb_prof);

        
        $__internal_33dae930eda721966160332c6948133aa074aad21569e144844fc6b938cfdacc->leave($__internal_33dae930eda721966160332c6948133aa074aad21569e144844fc6b938cfdacc_prof);

    }

    public function getTemplateName()
    {
        return ":people_type:new.html.twig";
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
", ":people_type:new.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/people_type/new.html.twig");
    }
}
