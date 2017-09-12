<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_869428d87480c732bf8daf836b9677f3709464583133d0df868e9985481dc6a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869428d87480c732bf8daf836b9677f3709464583133d0df868e9985481dc6a2->enter($__internal_869428d87480c732bf8daf836b9677f3709464583133d0df868e9985481dc6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_750e82ca67bfbe80bda36b9e42440ff119d0c47e4c2e6278f6b2a95a825068fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750e82ca67bfbe80bda36b9e42440ff119d0c47e4c2e6278f6b2a95a825068fb->enter($__internal_750e82ca67bfbe80bda36b9e42440ff119d0c47e4c2e6278f6b2a95a825068fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_869428d87480c732bf8daf836b9677f3709464583133d0df868e9985481dc6a2->leave($__internal_869428d87480c732bf8daf836b9677f3709464583133d0df868e9985481dc6a2_prof);

        
        $__internal_750e82ca67bfbe80bda36b9e42440ff119d0c47e4c2e6278f6b2a95a825068fb->leave($__internal_750e82ca67bfbe80bda36b9e42440ff119d0c47e4c2e6278f6b2a95a825068fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d10ec2675f0b8e566f4cf13f07df6a04f1ddcbf947d22bfbfca6b504a32d510e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10ec2675f0b8e566f4cf13f07df6a04f1ddcbf947d22bfbfca6b504a32d510e->enter($__internal_d10ec2675f0b8e566f4cf13f07df6a04f1ddcbf947d22bfbfca6b504a32d510e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a22b734475f868ac624cc89e2d8f5f237af552d9c17cba4d812968ea0e06865a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22b734475f868ac624cc89e2d8f5f237af552d9c17cba4d812968ea0e06865a->enter($__internal_a22b734475f868ac624cc89e2d8f5f237af552d9c17cba4d812968ea0e06865a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a22b734475f868ac624cc89e2d8f5f237af552d9c17cba4d812968ea0e06865a->leave($__internal_a22b734475f868ac624cc89e2d8f5f237af552d9c17cba4d812968ea0e06865a_prof);

        
        $__internal_d10ec2675f0b8e566f4cf13f07df6a04f1ddcbf947d22bfbfca6b504a32d510e->leave($__internal_d10ec2675f0b8e566f4cf13f07df6a04f1ddcbf947d22bfbfca6b504a32d510e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6b275957c27b17ffa7885b23af9b488fa5701470b28d5b0fa3ace588a698a11b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b275957c27b17ffa7885b23af9b488fa5701470b28d5b0fa3ace588a698a11b->enter($__internal_6b275957c27b17ffa7885b23af9b488fa5701470b28d5b0fa3ace588a698a11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9214aa6fce2c262e0f79efc32e7ed5f57280286983bedd432d30b5c77dbbea96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9214aa6fce2c262e0f79efc32e7ed5f57280286983bedd432d30b5c77dbbea96->enter($__internal_9214aa6fce2c262e0f79efc32e7ed5f57280286983bedd432d30b5c77dbbea96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9214aa6fce2c262e0f79efc32e7ed5f57280286983bedd432d30b5c77dbbea96->leave($__internal_9214aa6fce2c262e0f79efc32e7ed5f57280286983bedd432d30b5c77dbbea96_prof);

        
        $__internal_6b275957c27b17ffa7885b23af9b488fa5701470b28d5b0fa3ace588a698a11b->leave($__internal_6b275957c27b17ffa7885b23af9b488fa5701470b28d5b0fa3ace588a698a11b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_80440cebb4774106049c60505f0b9756e2aefc358db9050a846d53ce3bf0bc6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80440cebb4774106049c60505f0b9756e2aefc358db9050a846d53ce3bf0bc6a->enter($__internal_80440cebb4774106049c60505f0b9756e2aefc358db9050a846d53ce3bf0bc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94d27d60778d1d630679d5ff6f73f81b0a4f97ee9d9831fbac82120c33a23408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d27d60778d1d630679d5ff6f73f81b0a4f97ee9d9831fbac82120c33a23408->enter($__internal_94d27d60778d1d630679d5ff6f73f81b0a4f97ee9d9831fbac82120c33a23408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_94d27d60778d1d630679d5ff6f73f81b0a4f97ee9d9831fbac82120c33a23408->leave($__internal_94d27d60778d1d630679d5ff6f73f81b0a4f97ee9d9831fbac82120c33a23408_prof);

        
        $__internal_80440cebb4774106049c60505f0b9756e2aefc358db9050a846d53ce3bf0bc6a->leave($__internal_80440cebb4774106049c60505f0b9756e2aefc358db9050a846d53ce3bf0bc6a_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_871c670192223b6a5f1e57244418667cc0f73bf661e8f77a62950a56b3b92668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871c670192223b6a5f1e57244418667cc0f73bf661e8f77a62950a56b3b92668->enter($__internal_871c670192223b6a5f1e57244418667cc0f73bf661e8f77a62950a56b3b92668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d2616426ab5f50a3d865c91a1f2183572acc8256c53a516e7f5377420ed2216b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2616426ab5f50a3d865c91a1f2183572acc8256c53a516e7f5377420ed2216b->enter($__internal_d2616426ab5f50a3d865c91a1f2183572acc8256c53a516e7f5377420ed2216b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "            <script type=\"text/javascript\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_d2616426ab5f50a3d865c91a1f2183572acc8256c53a516e7f5377420ed2216b->leave($__internal_d2616426ab5f50a3d865c91a1f2183572acc8256c53a516e7f5377420ed2216b_prof);

        
        $__internal_871c670192223b6a5f1e57244418667cc0f73bf661e8f77a62950a56b3b92668->leave($__internal_871c670192223b6a5f1e57244418667cc0f73bf661e8f77a62950a56b3b92668_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 13,  121 => 12,  104 => 11,  87 => 6,  69 => 5,  57 => 15,  54 => 12,  52 => 11,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script type=\"text/javascript\" href=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/seriestv/app/Resources/views/base.html.twig");
    }
}
