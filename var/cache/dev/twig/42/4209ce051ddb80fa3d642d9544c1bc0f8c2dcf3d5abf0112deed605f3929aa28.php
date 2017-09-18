<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c6d98632d4052ab5d69d8296de4d5a45bccb0c9aad8d3dc088a13097861e3386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_67e0572f54a0973f0a6a95fb478947dfd9069322b4744918ef585d60f7df1dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e0572f54a0973f0a6a95fb478947dfd9069322b4744918ef585d60f7df1dca->enter($__internal_67e0572f54a0973f0a6a95fb478947dfd9069322b4744918ef585d60f7df1dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_176baabac36e4efceb6423b96da911b5869c9c7580e381e7b41c59a7ef608ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176baabac36e4efceb6423b96da911b5869c9c7580e381e7b41c59a7ef608ff2->enter($__internal_176baabac36e4efceb6423b96da911b5869c9c7580e381e7b41c59a7ef608ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67e0572f54a0973f0a6a95fb478947dfd9069322b4744918ef585d60f7df1dca->leave($__internal_67e0572f54a0973f0a6a95fb478947dfd9069322b4744918ef585d60f7df1dca_prof);

        
        $__internal_176baabac36e4efceb6423b96da911b5869c9c7580e381e7b41c59a7ef608ff2->leave($__internal_176baabac36e4efceb6423b96da911b5869c9c7580e381e7b41c59a7ef608ff2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6f5176a7c92526350a94f1902825252a24ba75f6a39c5fa829abe2a9cd32aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f5176a7c92526350a94f1902825252a24ba75f6a39c5fa829abe2a9cd32aa4->enter($__internal_d6f5176a7c92526350a94f1902825252a24ba75f6a39c5fa829abe2a9cd32aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_15f0c7373c14e95903523eac48de46e876af8422ce0a3c98defcc057ccae3821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f0c7373c14e95903523eac48de46e876af8422ce0a3c98defcc057ccae3821->enter($__internal_15f0c7373c14e95903523eac48de46e876af8422ce0a3c98defcc057ccae3821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_15f0c7373c14e95903523eac48de46e876af8422ce0a3c98defcc057ccae3821->leave($__internal_15f0c7373c14e95903523eac48de46e876af8422ce0a3c98defcc057ccae3821_prof);

        
        $__internal_d6f5176a7c92526350a94f1902825252a24ba75f6a39c5fa829abe2a9cd32aa4->leave($__internal_d6f5176a7c92526350a94f1902825252a24ba75f6a39c5fa829abe2a9cd32aa4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
