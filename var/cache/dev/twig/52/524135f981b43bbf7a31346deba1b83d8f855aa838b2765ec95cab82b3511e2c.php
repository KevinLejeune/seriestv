<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_02d845a49bdd57a4be066814fe8a9768b23f387ad2777b19ef633ba46046768f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b5aef5da1591e3d67230c7a45e7f594404d77390a8b86b7eb888cb394c354d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5aef5da1591e3d67230c7a45e7f594404d77390a8b86b7eb888cb394c354d7->enter($__internal_4b5aef5da1591e3d67230c7a45e7f594404d77390a8b86b7eb888cb394c354d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_ccfbb8e77fc844f6ee741f9ba7275dda0c2110e06714087b44bd582e7bc4d1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfbb8e77fc844f6ee741f9ba7275dda0c2110e06714087b44bd582e7bc4d1a8->enter($__internal_ccfbb8e77fc844f6ee741f9ba7275dda0c2110e06714087b44bd582e7bc4d1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b5aef5da1591e3d67230c7a45e7f594404d77390a8b86b7eb888cb394c354d7->leave($__internal_4b5aef5da1591e3d67230c7a45e7f594404d77390a8b86b7eb888cb394c354d7_prof);

        
        $__internal_ccfbb8e77fc844f6ee741f9ba7275dda0c2110e06714087b44bd582e7bc4d1a8->leave($__internal_ccfbb8e77fc844f6ee741f9ba7275dda0c2110e06714087b44bd582e7bc4d1a8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7eea71cc9aa4b9fba510e57353c60e9d61ea0019e588778ffbf4729ea37fcfc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eea71cc9aa4b9fba510e57353c60e9d61ea0019e588778ffbf4729ea37fcfc2->enter($__internal_7eea71cc9aa4b9fba510e57353c60e9d61ea0019e588778ffbf4729ea37fcfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d67021018cd278f64a2c7aea5d5ccc06fe53701b47bdabc22c2b7410610bd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d67021018cd278f64a2c7aea5d5ccc06fe53701b47bdabc22c2b7410610bd4f->enter($__internal_2d67021018cd278f64a2c7aea5d5ccc06fe53701b47bdabc22c2b7410610bd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2d67021018cd278f64a2c7aea5d5ccc06fe53701b47bdabc22c2b7410610bd4f->leave($__internal_2d67021018cd278f64a2c7aea5d5ccc06fe53701b47bdabc22c2b7410610bd4f_prof);

        
        $__internal_7eea71cc9aa4b9fba510e57353c60e9d61ea0019e588778ffbf4729ea37fcfc2->leave($__internal_7eea71cc9aa4b9fba510e57353c60e9d61ea0019e588778ffbf4729ea37fcfc2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e41134799aace4d07840597cd34f7045fa525955aed9a9ff75bd8315b81d373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e41134799aace4d07840597cd34f7045fa525955aed9a9ff75bd8315b81d373->enter($__internal_3e41134799aace4d07840597cd34f7045fa525955aed9a9ff75bd8315b81d373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad72316a525721aff3cda0f02dd6cffffc9e05a47d3f66a797cefdcabba39ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad72316a525721aff3cda0f02dd6cffffc9e05a47d3f66a797cefdcabba39ca9->enter($__internal_ad72316a525721aff3cda0f02dd6cffffc9e05a47d3f66a797cefdcabba39ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ad72316a525721aff3cda0f02dd6cffffc9e05a47d3f66a797cefdcabba39ca9->leave($__internal_ad72316a525721aff3cda0f02dd6cffffc9e05a47d3f66a797cefdcabba39ca9_prof);

        
        $__internal_3e41134799aace4d07840597cd34f7045fa525955aed9a9ff75bd8315b81d373->leave($__internal_3e41134799aace4d07840597cd34f7045fa525955aed9a9ff75bd8315b81d373_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
