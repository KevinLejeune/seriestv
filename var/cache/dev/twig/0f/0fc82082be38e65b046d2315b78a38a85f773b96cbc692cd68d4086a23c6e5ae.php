<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_8cd5dabb7cddbd7f59e9a5b25cf09cec64bc1b5497841330beb92929706f1da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_1d071a6537450c0aa7ec1262d11306f42db85b241eeab2edc1840b233efcc090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d071a6537450c0aa7ec1262d11306f42db85b241eeab2edc1840b233efcc090->enter($__internal_1d071a6537450c0aa7ec1262d11306f42db85b241eeab2edc1840b233efcc090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_43ffd2697b7c778fe3de895fb16c030a372b3ab87ee473349be0dd2a283da8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ffd2697b7c778fe3de895fb16c030a372b3ab87ee473349be0dd2a283da8de->enter($__internal_43ffd2697b7c778fe3de895fb16c030a372b3ab87ee473349be0dd2a283da8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d071a6537450c0aa7ec1262d11306f42db85b241eeab2edc1840b233efcc090->leave($__internal_1d071a6537450c0aa7ec1262d11306f42db85b241eeab2edc1840b233efcc090_prof);

        
        $__internal_43ffd2697b7c778fe3de895fb16c030a372b3ab87ee473349be0dd2a283da8de->leave($__internal_43ffd2697b7c778fe3de895fb16c030a372b3ab87ee473349be0dd2a283da8de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1372c1b19934836c7f86977600cba6bdc39c9f087e16d6e66687229def4bf9d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1372c1b19934836c7f86977600cba6bdc39c9f087e16d6e66687229def4bf9d0->enter($__internal_1372c1b19934836c7f86977600cba6bdc39c9f087e16d6e66687229def4bf9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a1fac9f2704a4349b46fad02992523745f0fa53e2cf00913fb1e6507875e6427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1fac9f2704a4349b46fad02992523745f0fa53e2cf00913fb1e6507875e6427->enter($__internal_a1fac9f2704a4349b46fad02992523745f0fa53e2cf00913fb1e6507875e6427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a1fac9f2704a4349b46fad02992523745f0fa53e2cf00913fb1e6507875e6427->leave($__internal_a1fac9f2704a4349b46fad02992523745f0fa53e2cf00913fb1e6507875e6427_prof);

        
        $__internal_1372c1b19934836c7f86977600cba6bdc39c9f087e16d6e66687229def4bf9d0->leave($__internal_1372c1b19934836c7f86977600cba6bdc39c9f087e16d6e66687229def4bf9d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
