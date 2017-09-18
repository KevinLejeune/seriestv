<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_9a2149ac2c040d3388c79b803fca7cd9813f0477c1f0d35ecd25f1f3a45af415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc9cc0c96ef2c79bab0c0daf1b27ed5c58529821bcfa63d3e9fac6da3acf5a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc9cc0c96ef2c79bab0c0daf1b27ed5c58529821bcfa63d3e9fac6da3acf5a21->enter($__internal_dc9cc0c96ef2c79bab0c0daf1b27ed5c58529821bcfa63d3e9fac6da3acf5a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_12bf4a88d7d42a4886c639f0ccaa5c00d824540a813d2849777e02916a5f15cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bf4a88d7d42a4886c639f0ccaa5c00d824540a813d2849777e02916a5f15cf->enter($__internal_12bf4a88d7d42a4886c639f0ccaa5c00d824540a813d2849777e02916a5f15cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc9cc0c96ef2c79bab0c0daf1b27ed5c58529821bcfa63d3e9fac6da3acf5a21->leave($__internal_dc9cc0c96ef2c79bab0c0daf1b27ed5c58529821bcfa63d3e9fac6da3acf5a21_prof);

        
        $__internal_12bf4a88d7d42a4886c639f0ccaa5c00d824540a813d2849777e02916a5f15cf->leave($__internal_12bf4a88d7d42a4886c639f0ccaa5c00d824540a813d2849777e02916a5f15cf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd2d996cddec85fabaa59160d69999e0e6cd746b45ea0477a62a351eeba129bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd2d996cddec85fabaa59160d69999e0e6cd746b45ea0477a62a351eeba129bb->enter($__internal_dd2d996cddec85fabaa59160d69999e0e6cd746b45ea0477a62a351eeba129bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b6baffb28e0b98b70a170c139aa0cf799ef364a5414a135e3f20d932f4800c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6baffb28e0b98b70a170c139aa0cf799ef364a5414a135e3f20d932f4800c6c->enter($__internal_b6baffb28e0b98b70a170c139aa0cf799ef364a5414a135e3f20d932f4800c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_b6baffb28e0b98b70a170c139aa0cf799ef364a5414a135e3f20d932f4800c6c->leave($__internal_b6baffb28e0b98b70a170c139aa0cf799ef364a5414a135e3f20d932f4800c6c_prof);

        
        $__internal_dd2d996cddec85fabaa59160d69999e0e6cd746b45ea0477a62a351eeba129bb->leave($__internal_dd2d996cddec85fabaa59160d69999e0e6cd746b45ea0477a62a351eeba129bb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
