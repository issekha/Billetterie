<?php

/* AppLouvreBundle:App:index.html.twig */
class __TwigTemplate_e652e4c2965a36023467cbc9921dbc3ee0e73303fa63e5d438790c445d4972b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppLouvreBundle::layout.html.twig", "AppLouvreBundle:App:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppLouvreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8343216ab4812758903a2b7fa1719a50aab29b8fe767dd6757492b56627572e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8343216ab4812758903a2b7fa1719a50aab29b8fe767dd6757492b56627572e4->enter($__internal_8343216ab4812758903a2b7fa1719a50aab29b8fe767dd6757492b56627572e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:index.html.twig"));

        $__internal_0482c1904b504e52a5136ef7f0e16a9c4c07541463eb328f98c014ca75126c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0482c1904b504e52a5136ef7f0e16a9c4c07541463eb328f98c014ca75126c0c->enter($__internal_0482c1904b504e52a5136ef7f0e16a9c4c07541463eb328f98c014ca75126c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8343216ab4812758903a2b7fa1719a50aab29b8fe767dd6757492b56627572e4->leave($__internal_8343216ab4812758903a2b7fa1719a50aab29b8fe767dd6757492b56627572e4_prof);

        
        $__internal_0482c1904b504e52a5136ef7f0e16a9c4c07541463eb328f98c014ca75126c0c->leave($__internal_0482c1904b504e52a5136ef7f0e16a9c4c07541463eb328f98c014ca75126c0c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_756da95025c148c60f372cfcf7a9267c361bcd993a4be94a2f16e45a22212f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_756da95025c148c60f372cfcf7a9267c361bcd993a4be94a2f16e45a22212f72->enter($__internal_756da95025c148c60f372cfcf7a9267c361bcd993a4be94a2f16e45a22212f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_91fed1ac2e36a5a2a222d70d347c8d968fac045435f9ceacbb9c608711760aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91fed1ac2e36a5a2a222d70d347c8d968fac045435f9ceacbb9c608711760aff->enter($__internal_91fed1ac2e36a5a2a222d70d347c8d968fac045435f9ceacbb9c608711760aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t";
        // line 5
        echo "\t<div class=\"view\">
\t\t<div class=\"jumbotron\">
\t\t\t<div class=\"container text-center\">
\t\t\t\t<h1>Espace Billetterie</h1>
\t\t\t\t<p>Evitez les files d'attentes en 4 étapes</p>
\t\t\t\t<p>
\t\t\t\t\t <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_louvre_order");
        echo "\" class=\"btn btn-primary\">COMMENCER</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_91fed1ac2e36a5a2a222d70d347c8d968fac045435f9ceacbb9c608711760aff->leave($__internal_91fed1ac2e36a5a2a222d70d347c8d968fac045435f9ceacbb9c608711760aff_prof);

        
        $__internal_756da95025c148c60f372cfcf7a9267c361bcd993a4be94a2f16e45a22212f72->leave($__internal_756da95025c148c60f372cfcf7a9267c361bcd993a4be94a2f16e45a22212f72_prof);

    }

    public function getTemplateName()
    {
        return "AppLouvreBundle:App:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppLouvreBundle::layout.html.twig\" %}

{% block content %}
\t{#Texte d accueille #}
\t<div class=\"view\">
\t\t<div class=\"jumbotron\">
\t\t\t<div class=\"container text-center\">
\t\t\t\t<h1>Espace Billetterie</h1>
\t\t\t\t<p>Evitez les files d'attentes en 4 étapes</p>
\t\t\t\t<p>
\t\t\t\t\t <a href=\"{{ path('app_louvre_order') }}\" class=\"btn btn-primary\">COMMENCER</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "AppLouvreBundle:App:index.html.twig", "C:\\wamp64\\www\\Billetterie\\src\\App\\LouvreBundle/Resources/views/App/index.html.twig");
    }
}
