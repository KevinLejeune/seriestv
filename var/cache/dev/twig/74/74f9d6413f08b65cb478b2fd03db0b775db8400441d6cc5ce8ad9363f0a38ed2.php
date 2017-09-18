<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb39a7468cd9f10b7c36d6f938ae87d2f517859c64820f496837ac04642d093c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_633195746a935bf15e7bdca91dd21422547554c5715503ba9aaafb4c9aef923c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633195746a935bf15e7bdca91dd21422547554c5715503ba9aaafb4c9aef923c->enter($__internal_633195746a935bf15e7bdca91dd21422547554c5715503ba9aaafb4c9aef923c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_8accb33e2e315d2aaac043284ae9998a3414fd2b79a6c29dba4a3d9d08d422e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8accb33e2e315d2aaac043284ae9998a3414fd2b79a6c29dba4a3d9d08d422e1->enter($__internal_8accb33e2e315d2aaac043284ae9998a3414fd2b79a6c29dba4a3d9d08d422e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_633195746a935bf15e7bdca91dd21422547554c5715503ba9aaafb4c9aef923c->leave($__internal_633195746a935bf15e7bdca91dd21422547554c5715503ba9aaafb4c9aef923c_prof);

        
        $__internal_8accb33e2e315d2aaac043284ae9998a3414fd2b79a6c29dba4a3d9d08d422e1->leave($__internal_8accb33e2e315d2aaac043284ae9998a3414fd2b79a6c29dba4a3d9d08d422e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
