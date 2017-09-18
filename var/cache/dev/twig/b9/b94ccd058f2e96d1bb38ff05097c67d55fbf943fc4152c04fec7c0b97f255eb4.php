<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_9c73dd7088a3784e6baed922fef0174c312499d7da8fd69eb3463049c30a2a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_4826a22da8db1eedb9ec3d0bf7fc6f431a76c2027b235cb09d84c7265f1358ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4826a22da8db1eedb9ec3d0bf7fc6f431a76c2027b235cb09d84c7265f1358ce->enter($__internal_4826a22da8db1eedb9ec3d0bf7fc6f431a76c2027b235cb09d84c7265f1358ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_8f39dc1d0215a60b6709889a9d53e827c76f5105ba47afcaede31ad633efb01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f39dc1d0215a60b6709889a9d53e827c76f5105ba47afcaede31ad633efb01c->enter($__internal_8f39dc1d0215a60b6709889a9d53e827c76f5105ba47afcaede31ad633efb01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4826a22da8db1eedb9ec3d0bf7fc6f431a76c2027b235cb09d84c7265f1358ce->leave($__internal_4826a22da8db1eedb9ec3d0bf7fc6f431a76c2027b235cb09d84c7265f1358ce_prof);

        
        $__internal_8f39dc1d0215a60b6709889a9d53e827c76f5105ba47afcaede31ad633efb01c->leave($__internal_8f39dc1d0215a60b6709889a9d53e827c76f5105ba47afcaede31ad633efb01c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4ff306958a6155dac885548328f8dad2dbde95fb6657077f46d6e0727b2c0b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ff306958a6155dac885548328f8dad2dbde95fb6657077f46d6e0727b2c0b3->enter($__internal_a4ff306958a6155dac885548328f8dad2dbde95fb6657077f46d6e0727b2c0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b09f0ea951805245227499c30384123ba8f79208f50d56ebc465112f55ae5601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09f0ea951805245227499c30384123ba8f79208f50d56ebc465112f55ae5601->enter($__internal_b09f0ea951805245227499c30384123ba8f79208f50d56ebc465112f55ae5601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b09f0ea951805245227499c30384123ba8f79208f50d56ebc465112f55ae5601->leave($__internal_b09f0ea951805245227499c30384123ba8f79208f50d56ebc465112f55ae5601_prof);

        
        $__internal_a4ff306958a6155dac885548328f8dad2dbde95fb6657077f46d6e0727b2c0b3->leave($__internal_a4ff306958a6155dac885548328f8dad2dbde95fb6657077f46d6e0727b2c0b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
