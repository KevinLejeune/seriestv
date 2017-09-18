<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_d2a768e8d244a97ac1918d04e896b3a8a41bffdfe8b3a479c42fa239c0c9fbac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f33d3cb364b1f7fc1268f0582af68fa761f03d3f40060f6f6a435db30c69af2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f33d3cb364b1f7fc1268f0582af68fa761f03d3f40060f6f6a435db30c69af2->enter($__internal_8f33d3cb364b1f7fc1268f0582af68fa761f03d3f40060f6f6a435db30c69af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_eea992f84c1f773b4a58c0588753a2881deddfe4e15758acbc143ff178d325de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea992f84c1f773b4a58c0588753a2881deddfe4e15758acbc143ff178d325de->enter($__internal_eea992f84c1f773b4a58c0588753a2881deddfe4e15758acbc143ff178d325de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8f33d3cb364b1f7fc1268f0582af68fa761f03d3f40060f6f6a435db30c69af2->leave($__internal_8f33d3cb364b1f7fc1268f0582af68fa761f03d3f40060f6f6a435db30c69af2_prof);

        
        $__internal_eea992f84c1f773b4a58c0588753a2881deddfe4e15758acbc143ff178d325de->leave($__internal_eea992f84c1f773b4a58c0588753a2881deddfe4e15758acbc143ff178d325de_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_86018962d2787e350f5e9a84eb87556c41cc6d39ca41301bd68f915a69e355c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86018962d2787e350f5e9a84eb87556c41cc6d39ca41301bd68f915a69e355c3->enter($__internal_86018962d2787e350f5e9a84eb87556c41cc6d39ca41301bd68f915a69e355c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8367f8813100c05840829aed624715a7769a9e212b6cf399bde517d3c2553d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8367f8813100c05840829aed624715a7769a9e212b6cf399bde517d3c2553d20->enter($__internal_8367f8813100c05840829aed624715a7769a9e212b6cf399bde517d3c2553d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_8367f8813100c05840829aed624715a7769a9e212b6cf399bde517d3c2553d20->leave($__internal_8367f8813100c05840829aed624715a7769a9e212b6cf399bde517d3c2553d20_prof);

        
        $__internal_86018962d2787e350f5e9a84eb87556c41cc6d39ca41301bd68f915a69e355c3->leave($__internal_86018962d2787e350f5e9a84eb87556c41cc6d39ca41301bd68f915a69e355c3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_74df63fb696bb3cf0f7d6c1f3530659e335894b27aab36d058c7f2436b0c147b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74df63fb696bb3cf0f7d6c1f3530659e335894b27aab36d058c7f2436b0c147b->enter($__internal_74df63fb696bb3cf0f7d6c1f3530659e335894b27aab36d058c7f2436b0c147b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4411aba5e9fd69de38de16f977e56639be94a6b6f84b5eacb4d60cb02bb3c9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4411aba5e9fd69de38de16f977e56639be94a6b6f84b5eacb4d60cb02bb3c9ae->enter($__internal_4411aba5e9fd69de38de16f977e56639be94a6b6f84b5eacb4d60cb02bb3c9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4411aba5e9fd69de38de16f977e56639be94a6b6f84b5eacb4d60cb02bb3c9ae->leave($__internal_4411aba5e9fd69de38de16f977e56639be94a6b6f84b5eacb4d60cb02bb3c9ae_prof);

        
        $__internal_74df63fb696bb3cf0f7d6c1f3530659e335894b27aab36d058c7f2436b0c147b->leave($__internal_74df63fb696bb3cf0f7d6c1f3530659e335894b27aab36d058c7f2436b0c147b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0dadde2e2990493a0a481fd6c1fc85a3b2db8475041515aac3a05edb66d4c6c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dadde2e2990493a0a481fd6c1fc85a3b2db8475041515aac3a05edb66d4c6c7->enter($__internal_0dadde2e2990493a0a481fd6c1fc85a3b2db8475041515aac3a05edb66d4c6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_549becfd33ac7fb69e92bcf11e1a174b515469cbdd0d749aa168c962c0d9fa02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549becfd33ac7fb69e92bcf11e1a174b515469cbdd0d749aa168c962c0d9fa02->enter($__internal_549becfd33ac7fb69e92bcf11e1a174b515469cbdd0d749aa168c962c0d9fa02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_549becfd33ac7fb69e92bcf11e1a174b515469cbdd0d749aa168c962c0d9fa02->leave($__internal_549becfd33ac7fb69e92bcf11e1a174b515469cbdd0d749aa168c962c0d9fa02_prof);

        
        $__internal_0dadde2e2990493a0a481fd6c1fc85a3b2db8475041515aac3a05edb66d4c6c7->leave($__internal_0dadde2e2990493a0a481fd6c1fc85a3b2db8475041515aac3a05edb66d4c6c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
