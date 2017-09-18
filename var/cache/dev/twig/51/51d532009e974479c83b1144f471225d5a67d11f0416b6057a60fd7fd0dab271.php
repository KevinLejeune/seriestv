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
        $__internal_f175d16ea633806ad05f1fe46f437056e8f5dc564d96b2e7f135d734115d3d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f175d16ea633806ad05f1fe46f437056e8f5dc564d96b2e7f135d734115d3d36->enter($__internal_f175d16ea633806ad05f1fe46f437056e8f5dc564d96b2e7f135d734115d3d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_246c9af354021fd35da154acab43f279abdf7588eb2ea17efae781bcba2c9a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246c9af354021fd35da154acab43f279abdf7588eb2ea17efae781bcba2c9a39->enter($__internal_246c9af354021fd35da154acab43f279abdf7588eb2ea17efae781bcba2c9a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_f175d16ea633806ad05f1fe46f437056e8f5dc564d96b2e7f135d734115d3d36->leave($__internal_f175d16ea633806ad05f1fe46f437056e8f5dc564d96b2e7f135d734115d3d36_prof);

        
        $__internal_246c9af354021fd35da154acab43f279abdf7588eb2ea17efae781bcba2c9a39->leave($__internal_246c9af354021fd35da154acab43f279abdf7588eb2ea17efae781bcba2c9a39_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a9ee68bdf96e122dd75ab086ec425a245ce2aca922ce653f7ed1b36d0e403f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a9ee68bdf96e122dd75ab086ec425a245ce2aca922ce653f7ed1b36d0e403f2->enter($__internal_4a9ee68bdf96e122dd75ab086ec425a245ce2aca922ce653f7ed1b36d0e403f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1be7eeb2c17689cb3f5f81825cb833e576ca36841774dc40405918f7f17fece1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be7eeb2c17689cb3f5f81825cb833e576ca36841774dc40405918f7f17fece1->enter($__internal_1be7eeb2c17689cb3f5f81825cb833e576ca36841774dc40405918f7f17fece1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1be7eeb2c17689cb3f5f81825cb833e576ca36841774dc40405918f7f17fece1->leave($__internal_1be7eeb2c17689cb3f5f81825cb833e576ca36841774dc40405918f7f17fece1_prof);

        
        $__internal_4a9ee68bdf96e122dd75ab086ec425a245ce2aca922ce653f7ed1b36d0e403f2->leave($__internal_4a9ee68bdf96e122dd75ab086ec425a245ce2aca922ce653f7ed1b36d0e403f2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f66de9c1f832c6cc1c5ed3b615174172b7dcf7cd94ddc666d0d3536139cf6b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f66de9c1f832c6cc1c5ed3b615174172b7dcf7cd94ddc666d0d3536139cf6b74->enter($__internal_f66de9c1f832c6cc1c5ed3b615174172b7dcf7cd94ddc666d0d3536139cf6b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cbbdbb65945c7845d6d8f8c8ec53b6e19c52cc9ac4b4626bcadd353a3f898b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbdbb65945c7845d6d8f8c8ec53b6e19c52cc9ac4b4626bcadd353a3f898b1c->enter($__internal_cbbdbb65945c7845d6d8f8c8ec53b6e19c52cc9ac4b4626bcadd353a3f898b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cbbdbb65945c7845d6d8f8c8ec53b6e19c52cc9ac4b4626bcadd353a3f898b1c->leave($__internal_cbbdbb65945c7845d6d8f8c8ec53b6e19c52cc9ac4b4626bcadd353a3f898b1c_prof);

        
        $__internal_f66de9c1f832c6cc1c5ed3b615174172b7dcf7cd94ddc666d0d3536139cf6b74->leave($__internal_f66de9c1f832c6cc1c5ed3b615174172b7dcf7cd94ddc666d0d3536139cf6b74_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_93d34f73ca54a17bc906fe6dfae3547114449944341dded75df19910b9bd56df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d34f73ca54a17bc906fe6dfae3547114449944341dded75df19910b9bd56df->enter($__internal_93d34f73ca54a17bc906fe6dfae3547114449944341dded75df19910b9bd56df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d2b43092645bb63493d3f738cbc2a55cb98bc69978000b3b0cce6f3c9ce4553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2b43092645bb63493d3f738cbc2a55cb98bc69978000b3b0cce6f3c9ce4553->enter($__internal_9d2b43092645bb63493d3f738cbc2a55cb98bc69978000b3b0cce6f3c9ce4553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9d2b43092645bb63493d3f738cbc2a55cb98bc69978000b3b0cce6f3c9ce4553->leave($__internal_9d2b43092645bb63493d3f738cbc2a55cb98bc69978000b3b0cce6f3c9ce4553_prof);

        
        $__internal_93d34f73ca54a17bc906fe6dfae3547114449944341dded75df19910b9bd56df->leave($__internal_93d34f73ca54a17bc906fe6dfae3547114449944341dded75df19910b9bd56df_prof);

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
