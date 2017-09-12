<?php

/* serie/new.html.twig */
class __TwigTemplate_6446be7e1825a5a2508aedde6974b9ae088dc720eaebc8bcb01e5c4bd8a52691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "serie/new.html.twig", 1);
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
        $__internal_96093297df67520bf6df39339f84ad2d37282c079f96e4d9a3c25fc92af375ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96093297df67520bf6df39339f84ad2d37282c079f96e4d9a3c25fc92af375ca->enter($__internal_96093297df67520bf6df39339f84ad2d37282c079f96e4d9a3c25fc92af375ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serie/new.html.twig"));

        $__internal_1379d2489814671528b74cc25ea9908bea7aa750c4cd0c11154d31d0efd889e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1379d2489814671528b74cc25ea9908bea7aa750c4cd0c11154d31d0efd889e5->enter($__internal_1379d2489814671528b74cc25ea9908bea7aa750c4cd0c11154d31d0efd889e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serie/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96093297df67520bf6df39339f84ad2d37282c079f96e4d9a3c25fc92af375ca->leave($__internal_96093297df67520bf6df39339f84ad2d37282c079f96e4d9a3c25fc92af375ca_prof);

        
        $__internal_1379d2489814671528b74cc25ea9908bea7aa750c4cd0c11154d31d0efd889e5->leave($__internal_1379d2489814671528b74cc25ea9908bea7aa750c4cd0c11154d31d0efd889e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2519ff486ce68a38f157506b367a86ff5cd0729e83918e4922540fdd1318023d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2519ff486ce68a38f157506b367a86ff5cd0729e83918e4922540fdd1318023d->enter($__internal_2519ff486ce68a38f157506b367a86ff5cd0729e83918e4922540fdd1318023d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b67c58ec58c2e891fa532e0c9f8243705f229e05ef732a1481cb412b5249706b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67c58ec58c2e891fa532e0c9f8243705f229e05ef732a1481cb412b5249706b->enter($__internal_b67c58ec58c2e891fa532e0c9f8243705f229e05ef732a1481cb412b5249706b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b67c58ec58c2e891fa532e0c9f8243705f229e05ef732a1481cb412b5249706b->leave($__internal_b67c58ec58c2e891fa532e0c9f8243705f229e05ef732a1481cb412b5249706b_prof);

        
        $__internal_2519ff486ce68a38f157506b367a86ff5cd0729e83918e4922540fdd1318023d->leave($__internal_2519ff486ce68a38f157506b367a86ff5cd0729e83918e4922540fdd1318023d_prof);

    }

    public function getTemplateName()
    {
        return "serie/new.html.twig";
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
", "serie/new.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/serie/new.html.twig");
    }
}
