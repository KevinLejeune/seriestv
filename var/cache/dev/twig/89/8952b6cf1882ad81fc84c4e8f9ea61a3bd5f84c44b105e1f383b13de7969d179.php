<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_8cf4ee99b467970b4e888fd93f7769d1f846b4d6133688821280d0a0701d7f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_da0df5c90dd267e887d3adf22ebefa26b18e9219e916d967c86439948f7fe4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0df5c90dd267e887d3adf22ebefa26b18e9219e916d967c86439948f7fe4cb->enter($__internal_da0df5c90dd267e887d3adf22ebefa26b18e9219e916d967c86439948f7fe4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_de54cfd77d613c61bb1164b2326b55ddb6c741c03cd2f883d2273417596dabc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de54cfd77d613c61bb1164b2326b55ddb6c741c03cd2f883d2273417596dabc3->enter($__internal_de54cfd77d613c61bb1164b2326b55ddb6c741c03cd2f883d2273417596dabc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da0df5c90dd267e887d3adf22ebefa26b18e9219e916d967c86439948f7fe4cb->leave($__internal_da0df5c90dd267e887d3adf22ebefa26b18e9219e916d967c86439948f7fe4cb_prof);

        
        $__internal_de54cfd77d613c61bb1164b2326b55ddb6c741c03cd2f883d2273417596dabc3->leave($__internal_de54cfd77d613c61bb1164b2326b55ddb6c741c03cd2f883d2273417596dabc3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63faaef00806e117d199911b3316d157ffdbbd1154a3c7a5ff333a267db8135b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63faaef00806e117d199911b3316d157ffdbbd1154a3c7a5ff333a267db8135b->enter($__internal_63faaef00806e117d199911b3316d157ffdbbd1154a3c7a5ff333a267db8135b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1b88ed40c68c8729afe36df5e7d3637e07b15561ae3e8f1c7b9d6bf37c77e2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b88ed40c68c8729afe36df5e7d3637e07b15561ae3e8f1c7b9d6bf37c77e2e5->enter($__internal_1b88ed40c68c8729afe36df5e7d3637e07b15561ae3e8f1c7b9d6bf37c77e2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_1b88ed40c68c8729afe36df5e7d3637e07b15561ae3e8f1c7b9d6bf37c77e2e5->leave($__internal_1b88ed40c68c8729afe36df5e7d3637e07b15561ae3e8f1c7b9d6bf37c77e2e5_prof);

        
        $__internal_63faaef00806e117d199911b3316d157ffdbbd1154a3c7a5ff333a267db8135b->leave($__internal_63faaef00806e117d199911b3316d157ffdbbd1154a3c7a5ff333a267db8135b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
