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
        $__internal_1b2364d841e37685bddb05d5b923ae3239a192224eb87b75e08204b19cdd31c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2364d841e37685bddb05d5b923ae3239a192224eb87b75e08204b19cdd31c5->enter($__internal_1b2364d841e37685bddb05d5b923ae3239a192224eb87b75e08204b19cdd31c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:index.html.twig"));

        $__internal_cff79a910729841d9e42f3c3dfd05548b463108b84b28f8460263e8848f0a6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff79a910729841d9e42f3c3dfd05548b463108b84b28f8460263e8848f0a6bb->enter($__internal_cff79a910729841d9e42f3c3dfd05548b463108b84b28f8460263e8848f0a6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b2364d841e37685bddb05d5b923ae3239a192224eb87b75e08204b19cdd31c5->leave($__internal_1b2364d841e37685bddb05d5b923ae3239a192224eb87b75e08204b19cdd31c5_prof);

        
        $__internal_cff79a910729841d9e42f3c3dfd05548b463108b84b28f8460263e8848f0a6bb->leave($__internal_cff79a910729841d9e42f3c3dfd05548b463108b84b28f8460263e8848f0a6bb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7101d3a4ade90a909259947ecfb6b43313ab651d3a340adadd73d90b56ce7af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7101d3a4ade90a909259947ecfb6b43313ab651d3a340adadd73d90b56ce7af5->enter($__internal_7101d3a4ade90a909259947ecfb6b43313ab651d3a340adadd73d90b56ce7af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_67db144417d8acdee302e668d6e6493916b6b2fe87a479ea4a99113d805d51a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67db144417d8acdee302e668d6e6493916b6b2fe87a479ea4a99113d805d51a4->enter($__internal_67db144417d8acdee302e668d6e6493916b6b2fe87a479ea4a99113d805d51a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_67db144417d8acdee302e668d6e6493916b6b2fe87a479ea4a99113d805d51a4->leave($__internal_67db144417d8acdee302e668d6e6493916b6b2fe87a479ea4a99113d805d51a4_prof);

        
        $__internal_7101d3a4ade90a909259947ecfb6b43313ab651d3a340adadd73d90b56ce7af5->leave($__internal_7101d3a4ade90a909259947ecfb6b43313ab651d3a340adadd73d90b56ce7af5_prof);

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
