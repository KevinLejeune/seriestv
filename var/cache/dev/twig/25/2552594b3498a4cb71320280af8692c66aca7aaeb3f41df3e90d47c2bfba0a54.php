<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5822d96dc649f46e30dff249a3a71de6a19ae062cb782a290b55e829dac1467e extends Twig_Template
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
        $__internal_dac5b28a6737b7f70a86c27ad9eeb98924b664d7d83043738c83bf1241bd50af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac5b28a6737b7f70a86c27ad9eeb98924b664d7d83043738c83bf1241bd50af->enter($__internal_dac5b28a6737b7f70a86c27ad9eeb98924b664d7d83043738c83bf1241bd50af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_bfe0bfe03924f4842c1e4825f41283c4a8a529cc04b36cde3cd59d2b48384d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe0bfe03924f4842c1e4825f41283c4a8a529cc04b36cde3cd59d2b48384d0e->enter($__internal_bfe0bfe03924f4842c1e4825f41283c4a8a529cc04b36cde3cd59d2b48384d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_dac5b28a6737b7f70a86c27ad9eeb98924b664d7d83043738c83bf1241bd50af->leave($__internal_dac5b28a6737b7f70a86c27ad9eeb98924b664d7d83043738c83bf1241bd50af_prof);

        
        $__internal_bfe0bfe03924f4842c1e4825f41283c4a8a529cc04b36cde3cd59d2b48384d0e->leave($__internal_bfe0bfe03924f4842c1e4825f41283c4a8a529cc04b36cde3cd59d2b48384d0e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_471c9c5ad45c0ab1754c5db7559c246835541bcc99e57166b3c4d7d320d62a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471c9c5ad45c0ab1754c5db7559c246835541bcc99e57166b3c4d7d320d62a0f->enter($__internal_471c9c5ad45c0ab1754c5db7559c246835541bcc99e57166b3c4d7d320d62a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_933639f0f025e15ecb4b8518867df030ec20924adf91e28cc641a6bfc998f9f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933639f0f025e15ecb4b8518867df030ec20924adf91e28cc641a6bfc998f9f5->enter($__internal_933639f0f025e15ecb4b8518867df030ec20924adf91e28cc641a6bfc998f9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_933639f0f025e15ecb4b8518867df030ec20924adf91e28cc641a6bfc998f9f5->leave($__internal_933639f0f025e15ecb4b8518867df030ec20924adf91e28cc641a6bfc998f9f5_prof);

        
        $__internal_471c9c5ad45c0ab1754c5db7559c246835541bcc99e57166b3c4d7d320d62a0f->leave($__internal_471c9c5ad45c0ab1754c5db7559c246835541bcc99e57166b3c4d7d320d62a0f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1935d9913a468b41737805e91858d74a99358011d97209de3cfb6154602b8f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1935d9913a468b41737805e91858d74a99358011d97209de3cfb6154602b8f5->enter($__internal_f1935d9913a468b41737805e91858d74a99358011d97209de3cfb6154602b8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4d89bf979731af6c6e35cd96ab32877fb71a2d1a0b10ce10aee015f87e557af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d89bf979731af6c6e35cd96ab32877fb71a2d1a0b10ce10aee015f87e557af3->enter($__internal_4d89bf979731af6c6e35cd96ab32877fb71a2d1a0b10ce10aee015f87e557af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4d89bf979731af6c6e35cd96ab32877fb71a2d1a0b10ce10aee015f87e557af3->leave($__internal_4d89bf979731af6c6e35cd96ab32877fb71a2d1a0b10ce10aee015f87e557af3_prof);

        
        $__internal_f1935d9913a468b41737805e91858d74a99358011d97209de3cfb6154602b8f5->leave($__internal_f1935d9913a468b41737805e91858d74a99358011d97209de3cfb6154602b8f5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2a9c4b8d4a26496dc26a2e663069a7b21a9727a09b1522f542c9e71f36fcac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a9c4b8d4a26496dc26a2e663069a7b21a9727a09b1522f542c9e71f36fcac5->enter($__internal_c2a9c4b8d4a26496dc26a2e663069a7b21a9727a09b1522f542c9e71f36fcac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b29f9fa46f366ffd65621378242b17f04b57941c0f496bd4a0ff17b745075486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29f9fa46f366ffd65621378242b17f04b57941c0f496bd4a0ff17b745075486->enter($__internal_b29f9fa46f366ffd65621378242b17f04b57941c0f496bd4a0ff17b745075486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b29f9fa46f366ffd65621378242b17f04b57941c0f496bd4a0ff17b745075486->leave($__internal_b29f9fa46f366ffd65621378242b17f04b57941c0f496bd4a0ff17b745075486_prof);

        
        $__internal_c2a9c4b8d4a26496dc26a2e663069a7b21a9727a09b1522f542c9e71f36fcac5->leave($__internal_c2a9c4b8d4a26496dc26a2e663069a7b21a9727a09b1522f542c9e71f36fcac5_prof);

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
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
