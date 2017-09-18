<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ddbd517106433870c1648854a6afeadd58b2cc4e2a3d776bd94ad89ca1cd9b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e471d396cafd841588e5f7bf08b05ea5a9667b9c5fb7a8ae070a869f52744f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e471d396cafd841588e5f7bf08b05ea5a9667b9c5fb7a8ae070a869f52744f9->enter($__internal_2e471d396cafd841588e5f7bf08b05ea5a9667b9c5fb7a8ae070a869f52744f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_4604311adba3738462bcf644f3323ff0a938c1c86fc5027afafda677f8ab48b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4604311adba3738462bcf644f3323ff0a938c1c86fc5027afafda677f8ab48b7->enter($__internal_4604311adba3738462bcf644f3323ff0a938c1c86fc5027afafda677f8ab48b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e471d396cafd841588e5f7bf08b05ea5a9667b9c5fb7a8ae070a869f52744f9->leave($__internal_2e471d396cafd841588e5f7bf08b05ea5a9667b9c5fb7a8ae070a869f52744f9_prof);

        
        $__internal_4604311adba3738462bcf644f3323ff0a938c1c86fc5027afafda677f8ab48b7->leave($__internal_4604311adba3738462bcf644f3323ff0a938c1c86fc5027afafda677f8ab48b7_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3bbdba9925785463330bd800c3f30a281f4e69ee515894536f8d8044f4dcc363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bbdba9925785463330bd800c3f30a281f4e69ee515894536f8d8044f4dcc363->enter($__internal_3bbdba9925785463330bd800c3f30a281f4e69ee515894536f8d8044f4dcc363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_86d483ef4804656c7165d45dadbf0146234d0f3c6bdc3c9ab326ea3fba3df5b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d483ef4804656c7165d45dadbf0146234d0f3c6bdc3c9ab326ea3fba3df5b8->enter($__internal_86d483ef4804656c7165d45dadbf0146234d0f3c6bdc3c9ab326ea3fba3df5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_86d483ef4804656c7165d45dadbf0146234d0f3c6bdc3c9ab326ea3fba3df5b8->leave($__internal_86d483ef4804656c7165d45dadbf0146234d0f3c6bdc3c9ab326ea3fba3df5b8_prof);

        
        $__internal_3bbdba9925785463330bd800c3f30a281f4e69ee515894536f8d8044f4dcc363->leave($__internal_3bbdba9925785463330bd800c3f30a281f4e69ee515894536f8d8044f4dcc363_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fa2bacd15e92c61358de3e182081b99511007e6685c4cab394bb14ce1bc3f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa2bacd15e92c61358de3e182081b99511007e6685c4cab394bb14ce1bc3f99->enter($__internal_7fa2bacd15e92c61358de3e182081b99511007e6685c4cab394bb14ce1bc3f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7282661fc0394ba6dca2f268fd3270a507a0c5ee9975ba13948c3cb487ff62bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7282661fc0394ba6dca2f268fd3270a507a0c5ee9975ba13948c3cb487ff62bf->enter($__internal_7282661fc0394ba6dca2f268fd3270a507a0c5ee9975ba13948c3cb487ff62bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7282661fc0394ba6dca2f268fd3270a507a0c5ee9975ba13948c3cb487ff62bf->leave($__internal_7282661fc0394ba6dca2f268fd3270a507a0c5ee9975ba13948c3cb487ff62bf_prof);

        
        $__internal_7fa2bacd15e92c61358de3e182081b99511007e6685c4cab394bb14ce1bc3f99->leave($__internal_7fa2bacd15e92c61358de3e182081b99511007e6685c4cab394bb14ce1bc3f99_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
