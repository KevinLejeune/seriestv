<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb1d841f6fce35bb4595a49fee8896ee3718bbdb92908eff76aaeb6d380d5b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1d841f6fce35bb4595a49fee8896ee3718bbdb92908eff76aaeb6d380d5b8d->enter($__internal_cb1d841f6fce35bb4595a49fee8896ee3718bbdb92908eff76aaeb6d380d5b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2b179d3d4c290100f921c7256e54276b99b3c26825b8b3d3ef88b8766cb1d355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b179d3d4c290100f921c7256e54276b99b3c26825b8b3d3ef88b8766cb1d355->enter($__internal_2b179d3d4c290100f921c7256e54276b99b3c26825b8b3d3ef88b8766cb1d355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb1d841f6fce35bb4595a49fee8896ee3718bbdb92908eff76aaeb6d380d5b8d->leave($__internal_cb1d841f6fce35bb4595a49fee8896ee3718bbdb92908eff76aaeb6d380d5b8d_prof);

        
        $__internal_2b179d3d4c290100f921c7256e54276b99b3c26825b8b3d3ef88b8766cb1d355->leave($__internal_2b179d3d4c290100f921c7256e54276b99b3c26825b8b3d3ef88b8766cb1d355_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd70f9d90c4dc0125c9f7330255328a952ef8f3e171279182d82673081f74bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd70f9d90c4dc0125c9f7330255328a952ef8f3e171279182d82673081f74bfd->enter($__internal_dd70f9d90c4dc0125c9f7330255328a952ef8f3e171279182d82673081f74bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_466aa65cc0112f056969997244ecee0f3bacddc300c54336ec241f155fd33b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466aa65cc0112f056969997244ecee0f3bacddc300c54336ec241f155fd33b9a->enter($__internal_466aa65cc0112f056969997244ecee0f3bacddc300c54336ec241f155fd33b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_466aa65cc0112f056969997244ecee0f3bacddc300c54336ec241f155fd33b9a->leave($__internal_466aa65cc0112f056969997244ecee0f3bacddc300c54336ec241f155fd33b9a_prof);

        
        $__internal_dd70f9d90c4dc0125c9f7330255328a952ef8f3e171279182d82673081f74bfd->leave($__internal_dd70f9d90c4dc0125c9f7330255328a952ef8f3e171279182d82673081f74bfd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_08775b00fb053d95ef8ebd8a633d9206533b4ce6d875cec7833611ee43acd5b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08775b00fb053d95ef8ebd8a633d9206533b4ce6d875cec7833611ee43acd5b8->enter($__internal_08775b00fb053d95ef8ebd8a633d9206533b4ce6d875cec7833611ee43acd5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3eba1b2e1dc960d1e5e50c7c158b700f5400de3704b600d9f02414dad9d44796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eba1b2e1dc960d1e5e50c7c158b700f5400de3704b600d9f02414dad9d44796->enter($__internal_3eba1b2e1dc960d1e5e50c7c158b700f5400de3704b600d9f02414dad9d44796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3eba1b2e1dc960d1e5e50c7c158b700f5400de3704b600d9f02414dad9d44796->leave($__internal_3eba1b2e1dc960d1e5e50c7c158b700f5400de3704b600d9f02414dad9d44796_prof);

        
        $__internal_08775b00fb053d95ef8ebd8a633d9206533b4ce6d875cec7833611ee43acd5b8->leave($__internal_08775b00fb053d95ef8ebd8a633d9206533b4ce6d875cec7833611ee43acd5b8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_93a3433097f776980d08fa31e1a8dcc6f292c238e384868d78dd814b869722b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a3433097f776980d08fa31e1a8dcc6f292c238e384868d78dd814b869722b2->enter($__internal_93a3433097f776980d08fa31e1a8dcc6f292c238e384868d78dd814b869722b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bfa2e2f8d4777dbcb1b7cb176f5d6072c734deb16d1c608c72254bfe51e6fdcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa2e2f8d4777dbcb1b7cb176f5d6072c734deb16d1c608c72254bfe51e6fdcc->enter($__internal_bfa2e2f8d4777dbcb1b7cb176f5d6072c734deb16d1c608c72254bfe51e6fdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_bfa2e2f8d4777dbcb1b7cb176f5d6072c734deb16d1c608c72254bfe51e6fdcc->leave($__internal_bfa2e2f8d4777dbcb1b7cb176f5d6072c734deb16d1c608c72254bfe51e6fdcc_prof);

        
        $__internal_93a3433097f776980d08fa31e1a8dcc6f292c238e384868d78dd814b869722b2->leave($__internal_93a3433097f776980d08fa31e1a8dcc6f292c238e384868d78dd814b869722b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
