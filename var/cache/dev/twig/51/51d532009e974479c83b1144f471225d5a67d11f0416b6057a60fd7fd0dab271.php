<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_998feb2a94b3307fb4980b02a4dfc1163f2e31e3a4aad4011c77072fee00be5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_998feb2a94b3307fb4980b02a4dfc1163f2e31e3a4aad4011c77072fee00be5a->enter($__internal_998feb2a94b3307fb4980b02a4dfc1163f2e31e3a4aad4011c77072fee00be5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_970b0cf17f14e9d588bd0ed47134e27608b435a1b60e1728ba729fefa5d48726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970b0cf17f14e9d588bd0ed47134e27608b435a1b60e1728ba729fefa5d48726->enter($__internal_970b0cf17f14e9d588bd0ed47134e27608b435a1b60e1728ba729fefa5d48726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_998feb2a94b3307fb4980b02a4dfc1163f2e31e3a4aad4011c77072fee00be5a->leave($__internal_998feb2a94b3307fb4980b02a4dfc1163f2e31e3a4aad4011c77072fee00be5a_prof);

        
        $__internal_970b0cf17f14e9d588bd0ed47134e27608b435a1b60e1728ba729fefa5d48726->leave($__internal_970b0cf17f14e9d588bd0ed47134e27608b435a1b60e1728ba729fefa5d48726_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_41b7834d26e8df9f9241f2849e36fadcb88d349ff70f055c520b825ea26a8f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b7834d26e8df9f9241f2849e36fadcb88d349ff70f055c520b825ea26a8f31->enter($__internal_41b7834d26e8df9f9241f2849e36fadcb88d349ff70f055c520b825ea26a8f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_59c8d5b2ef47a19e39eed863a681e24d80e034f5eb34900f0e49b26c375a1696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c8d5b2ef47a19e39eed863a681e24d80e034f5eb34900f0e49b26c375a1696->enter($__internal_59c8d5b2ef47a19e39eed863a681e24d80e034f5eb34900f0e49b26c375a1696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_59c8d5b2ef47a19e39eed863a681e24d80e034f5eb34900f0e49b26c375a1696->leave($__internal_59c8d5b2ef47a19e39eed863a681e24d80e034f5eb34900f0e49b26c375a1696_prof);

        
        $__internal_41b7834d26e8df9f9241f2849e36fadcb88d349ff70f055c520b825ea26a8f31->leave($__internal_41b7834d26e8df9f9241f2849e36fadcb88d349ff70f055c520b825ea26a8f31_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_996bb9a54aad129763a85ed2f53220bb4155b3051cac834f8f3ab2b254b69909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_996bb9a54aad129763a85ed2f53220bb4155b3051cac834f8f3ab2b254b69909->enter($__internal_996bb9a54aad129763a85ed2f53220bb4155b3051cac834f8f3ab2b254b69909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a36a6a2aa0c13e880289725412617bc43bcbf89b94355144d0a5b9d4cab5d1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36a6a2aa0c13e880289725412617bc43bcbf89b94355144d0a5b9d4cab5d1c7->enter($__internal_a36a6a2aa0c13e880289725412617bc43bcbf89b94355144d0a5b9d4cab5d1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a36a6a2aa0c13e880289725412617bc43bcbf89b94355144d0a5b9d4cab5d1c7->leave($__internal_a36a6a2aa0c13e880289725412617bc43bcbf89b94355144d0a5b9d4cab5d1c7_prof);

        
        $__internal_996bb9a54aad129763a85ed2f53220bb4155b3051cac834f8f3ab2b254b69909->leave($__internal_996bb9a54aad129763a85ed2f53220bb4155b3051cac834f8f3ab2b254b69909_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfa54caa59d2003eb6b4cd6ff077c2d376774ba31ee8bf0f6126a06d072ebb46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa54caa59d2003eb6b4cd6ff077c2d376774ba31ee8bf0f6126a06d072ebb46->enter($__internal_bfa54caa59d2003eb6b4cd6ff077c2d376774ba31ee8bf0f6126a06d072ebb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8d6325bce9d1a66452bde6a1d425ef2d1d9ce0d8fd42287c65e17de445ebe9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d6325bce9d1a66452bde6a1d425ef2d1d9ce0d8fd42287c65e17de445ebe9a->enter($__internal_a8d6325bce9d1a66452bde6a1d425ef2d1d9ce0d8fd42287c65e17de445ebe9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a8d6325bce9d1a66452bde6a1d425ef2d1d9ce0d8fd42287c65e17de445ebe9a->leave($__internal_a8d6325bce9d1a66452bde6a1d425ef2d1d9ce0d8fd42287c65e17de445ebe9a_prof);

        
        $__internal_bfa54caa59d2003eb6b4cd6ff077c2d376774ba31ee8bf0f6126a06d072ebb46->leave($__internal_bfa54caa59d2003eb6b4cd6ff077c2d376774ba31ee8bf0f6126a06d072ebb46_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
