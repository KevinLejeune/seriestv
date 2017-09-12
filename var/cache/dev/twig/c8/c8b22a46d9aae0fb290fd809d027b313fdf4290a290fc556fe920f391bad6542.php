<?php

/* base.html.twig */
class __TwigTemplate_47fd51b039e5f4fb7e336b9f260737cefed48cbce97d781ee1d74e5c39c4c062 extends Twig_Template
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
        $__internal_2774f53e93ddf90020e3ed3255e2b16ccba02cc3a35f4cd1ddd158a0f4bc65e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2774f53e93ddf90020e3ed3255e2b16ccba02cc3a35f4cd1ddd158a0f4bc65e0->enter($__internal_2774f53e93ddf90020e3ed3255e2b16ccba02cc3a35f4cd1ddd158a0f4bc65e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a97861b0d74886ac4a2cc236663e31dff262e3c5d5d7c10cd3f2ef527b897277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97861b0d74886ac4a2cc236663e31dff262e3c5d5d7c10cd3f2ef527b897277->enter($__internal_a97861b0d74886ac4a2cc236663e31dff262e3c5d5d7c10cd3f2ef527b897277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-datepicker/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_2774f53e93ddf90020e3ed3255e2b16ccba02cc3a35f4cd1ddd158a0f4bc65e0->leave($__internal_2774f53e93ddf90020e3ed3255e2b16ccba02cc3a35f4cd1ddd158a0f4bc65e0_prof);

        
        $__internal_a97861b0d74886ac4a2cc236663e31dff262e3c5d5d7c10cd3f2ef527b897277->leave($__internal_a97861b0d74886ac4a2cc236663e31dff262e3c5d5d7c10cd3f2ef527b897277_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3418fdc6cc15444bbdbdd59bd662b347ba0c74830cddadc00a5a660871d2c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3418fdc6cc15444bbdbdd59bd662b347ba0c74830cddadc00a5a660871d2c77->enter($__internal_c3418fdc6cc15444bbdbdd59bd662b347ba0c74830cddadc00a5a660871d2c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_393fde5b422bf45898529ce28bc0c5341a38b83e9ec8551191ad69e9bf6e1f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393fde5b422bf45898529ce28bc0c5341a38b83e9ec8551191ad69e9bf6e1f97->enter($__internal_393fde5b422bf45898529ce28bc0c5341a38b83e9ec8551191ad69e9bf6e1f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_393fde5b422bf45898529ce28bc0c5341a38b83e9ec8551191ad69e9bf6e1f97->leave($__internal_393fde5b422bf45898529ce28bc0c5341a38b83e9ec8551191ad69e9bf6e1f97_prof);

        
        $__internal_c3418fdc6cc15444bbdbdd59bd662b347ba0c74830cddadc00a5a660871d2c77->leave($__internal_c3418fdc6cc15444bbdbdd59bd662b347ba0c74830cddadc00a5a660871d2c77_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_171908df2a1b2b1e5d7fd77cd00f941c75bf1516fffa2a1b72f1ecd3a38f54b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_171908df2a1b2b1e5d7fd77cd00f941c75bf1516fffa2a1b72f1ecd3a38f54b5->enter($__internal_171908df2a1b2b1e5d7fd77cd00f941c75bf1516fffa2a1b72f1ecd3a38f54b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e93b8192f40caae58f3b1e0890464b9f57ce0eb7717977623efa84b498e6f5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93b8192f40caae58f3b1e0890464b9f57ce0eb7717977623efa84b498e6f5f3->enter($__internal_e93b8192f40caae58f3b1e0890464b9f57ce0eb7717977623efa84b498e6f5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e93b8192f40caae58f3b1e0890464b9f57ce0eb7717977623efa84b498e6f5f3->leave($__internal_e93b8192f40caae58f3b1e0890464b9f57ce0eb7717977623efa84b498e6f5f3_prof);

        
        $__internal_171908df2a1b2b1e5d7fd77cd00f941c75bf1516fffa2a1b72f1ecd3a38f54b5->leave($__internal_171908df2a1b2b1e5d7fd77cd00f941c75bf1516fffa2a1b72f1ecd3a38f54b5_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a90370f1f8abb13797e7d3ab8c971d4e95c36a81dc36f9e7b2dcf35eabb4d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a90370f1f8abb13797e7d3ab8c971d4e95c36a81dc36f9e7b2dcf35eabb4d4d->enter($__internal_5a90370f1f8abb13797e7d3ab8c971d4e95c36a81dc36f9e7b2dcf35eabb4d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb2a45380ef84cef08c379150aa6ac197ebaee6335b82d65a4be4aaacc562772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2a45380ef84cef08c379150aa6ac197ebaee6335b82d65a4be4aaacc562772->enter($__internal_bb2a45380ef84cef08c379150aa6ac197ebaee6335b82d65a4be4aaacc562772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bb2a45380ef84cef08c379150aa6ac197ebaee6335b82d65a4be4aaacc562772->leave($__internal_bb2a45380ef84cef08c379150aa6ac197ebaee6335b82d65a4be4aaacc562772_prof);

        
        $__internal_5a90370f1f8abb13797e7d3ab8c971d4e95c36a81dc36f9e7b2dcf35eabb4d4d->leave($__internal_5a90370f1f8abb13797e7d3ab8c971d4e95c36a81dc36f9e7b2dcf35eabb4d4d_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f24e475f0290e5ba103b3ea68ebc6ba6a843ba1d164307c32be6a63d6a1bf9d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f24e475f0290e5ba103b3ea68ebc6ba6a843ba1d164307c32be6a63d6a1bf9d8->enter($__internal_f24e475f0290e5ba103b3ea68ebc6ba6a843ba1d164307c32be6a63d6a1bf9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6c94d94dd0158450bef5b4ad5cafdc4cbf8ad5735d5862450c6c832c7a06f11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c94d94dd0158450bef5b4ad5cafdc4cbf8ad5735d5862450c6c832c7a06f11f->enter($__internal_6c94d94dd0158450bef5b4ad5cafdc4cbf8ad5735d5862450c6c832c7a06f11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            
        ";
        
        $__internal_6c94d94dd0158450bef5b4ad5cafdc4cbf8ad5735d5862450c6c832c7a06f11f->leave($__internal_6c94d94dd0158450bef5b4ad5cafdc4cbf8ad5735d5862450c6c832c7a06f11f_prof);

        
        $__internal_f24e475f0290e5ba103b3ea68ebc6ba6a843ba1d164307c32be6a63d6a1bf9d8->leave($__internal_f24e475f0290e5ba103b3ea68ebc6ba6a843ba1d164307c32be6a63d6a1bf9d8_prof);

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
        return array (  146 => 17,  137 => 16,  120 => 15,  103 => 6,  85 => 5,  73 => 19,  70 => 16,  68 => 15,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <script type=\"text/javascript\" src=\"{{ asset('jquery-min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}\"></script>
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/base.html.twig");
    }
}
