<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_34c3a0643dfc7d72a581e0e6090842eda852bb909c6261b5861c9eda5e28b623 extends Twig_Template
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
        $__internal_893a0d50f0c0e4a9e3f80981af9cc014c76a9c302c82dd8b4f7622f82a3b6cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893a0d50f0c0e4a9e3f80981af9cc014c76a9c302c82dd8b4f7622f82a3b6cd8->enter($__internal_893a0d50f0c0e4a9e3f80981af9cc014c76a9c302c82dd8b4f7622f82a3b6cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_5154228616a79e507ea7e914b677ce807ae58af5e8f9ea5923ebce5dc8c7da15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5154228616a79e507ea7e914b677ce807ae58af5e8f9ea5923ebce5dc8c7da15->enter($__internal_5154228616a79e507ea7e914b677ce807ae58af5e8f9ea5923ebce5dc8c7da15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_893a0d50f0c0e4a9e3f80981af9cc014c76a9c302c82dd8b4f7622f82a3b6cd8->leave($__internal_893a0d50f0c0e4a9e3f80981af9cc014c76a9c302c82dd8b4f7622f82a3b6cd8_prof);

        
        $__internal_5154228616a79e507ea7e914b677ce807ae58af5e8f9ea5923ebce5dc8c7da15->leave($__internal_5154228616a79e507ea7e914b677ce807ae58af5e8f9ea5923ebce5dc8c7da15_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8517ed52c47063cd95332ae7418f521035b682aed01ad2098d941e6c4b7ad8f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8517ed52c47063cd95332ae7418f521035b682aed01ad2098d941e6c4b7ad8f5->enter($__internal_8517ed52c47063cd95332ae7418f521035b682aed01ad2098d941e6c4b7ad8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_69e02c211ff16ee12a74d638d5b900562f4ea833540b043d918622bef8cdaabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e02c211ff16ee12a74d638d5b900562f4ea833540b043d918622bef8cdaabb->enter($__internal_69e02c211ff16ee12a74d638d5b900562f4ea833540b043d918622bef8cdaabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_69e02c211ff16ee12a74d638d5b900562f4ea833540b043d918622bef8cdaabb->leave($__internal_69e02c211ff16ee12a74d638d5b900562f4ea833540b043d918622bef8cdaabb_prof);

        
        $__internal_8517ed52c47063cd95332ae7418f521035b682aed01ad2098d941e6c4b7ad8f5->leave($__internal_8517ed52c47063cd95332ae7418f521035b682aed01ad2098d941e6c4b7ad8f5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f92fadae44300f5d2a21fc133b0e02faf3c19f40a2b6ee139500c78fc9899446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92fadae44300f5d2a21fc133b0e02faf3c19f40a2b6ee139500c78fc9899446->enter($__internal_f92fadae44300f5d2a21fc133b0e02faf3c19f40a2b6ee139500c78fc9899446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_706355baef25b1be6ede0595f623df85b809493ecaea7bd6d1aeaa79a77ffd9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706355baef25b1be6ede0595f623df85b809493ecaea7bd6d1aeaa79a77ffd9f->enter($__internal_706355baef25b1be6ede0595f623df85b809493ecaea7bd6d1aeaa79a77ffd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_706355baef25b1be6ede0595f623df85b809493ecaea7bd6d1aeaa79a77ffd9f->leave($__internal_706355baef25b1be6ede0595f623df85b809493ecaea7bd6d1aeaa79a77ffd9f_prof);

        
        $__internal_f92fadae44300f5d2a21fc133b0e02faf3c19f40a2b6ee139500c78fc9899446->leave($__internal_f92fadae44300f5d2a21fc133b0e02faf3c19f40a2b6ee139500c78fc9899446_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f00d8e11a4da23a82d2cc8e23297ba3c3013709d8d8e6884c4f8a79df8afd429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00d8e11a4da23a82d2cc8e23297ba3c3013709d8d8e6884c4f8a79df8afd429->enter($__internal_f00d8e11a4da23a82d2cc8e23297ba3c3013709d8d8e6884c4f8a79df8afd429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2964afe77209c3cfff1299fcb27365fd54657a36ddf0e8cc48495e162ec7b113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2964afe77209c3cfff1299fcb27365fd54657a36ddf0e8cc48495e162ec7b113->enter($__internal_2964afe77209c3cfff1299fcb27365fd54657a36ddf0e8cc48495e162ec7b113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2964afe77209c3cfff1299fcb27365fd54657a36ddf0e8cc48495e162ec7b113->leave($__internal_2964afe77209c3cfff1299fcb27365fd54657a36ddf0e8cc48495e162ec7b113_prof);

        
        $__internal_f00d8e11a4da23a82d2cc8e23297ba3c3013709d8d8e6884c4f8a79df8afd429->leave($__internal_f00d8e11a4da23a82d2cc8e23297ba3c3013709d8d8e6884c4f8a79df8afd429_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
