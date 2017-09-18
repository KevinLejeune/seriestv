<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d599e78673aafc722f9d52a3cf6838097ef8d784a9466cf99558947bb9d65088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_ff1b15f1112faa36da48446853dac665ce9db9d988627bcbfa0beee144a9aa96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff1b15f1112faa36da48446853dac665ce9db9d988627bcbfa0beee144a9aa96->enter($__internal_ff1b15f1112faa36da48446853dac665ce9db9d988627bcbfa0beee144a9aa96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_0093854d6f71862739c8d63b902b057f237413a7d75950b55002f2ba3448ec89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0093854d6f71862739c8d63b902b057f237413a7d75950b55002f2ba3448ec89->enter($__internal_0093854d6f71862739c8d63b902b057f237413a7d75950b55002f2ba3448ec89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff1b15f1112faa36da48446853dac665ce9db9d988627bcbfa0beee144a9aa96->leave($__internal_ff1b15f1112faa36da48446853dac665ce9db9d988627bcbfa0beee144a9aa96_prof);

        
        $__internal_0093854d6f71862739c8d63b902b057f237413a7d75950b55002f2ba3448ec89->leave($__internal_0093854d6f71862739c8d63b902b057f237413a7d75950b55002f2ba3448ec89_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a55514891c3204f27a4e75c227ccc81025073ff804c30ea670d9c8401c216652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55514891c3204f27a4e75c227ccc81025073ff804c30ea670d9c8401c216652->enter($__internal_a55514891c3204f27a4e75c227ccc81025073ff804c30ea670d9c8401c216652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c22144b3092f31c48e0c7cf2d9a37b3ad5b74ace7faf8be01677252057196931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22144b3092f31c48e0c7cf2d9a37b3ad5b74ace7faf8be01677252057196931->enter($__internal_c22144b3092f31c48e0c7cf2d9a37b3ad5b74ace7faf8be01677252057196931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_c22144b3092f31c48e0c7cf2d9a37b3ad5b74ace7faf8be01677252057196931->leave($__internal_c22144b3092f31c48e0c7cf2d9a37b3ad5b74ace7faf8be01677252057196931_prof);

        
        $__internal_a55514891c3204f27a4e75c227ccc81025073ff804c30ea670d9c8401c216652->leave($__internal_a55514891c3204f27a4e75c227ccc81025073ff804c30ea670d9c8401c216652_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
