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
        $__internal_d99eb24face326f29c02e0ee8eb4cbb056657245b651e0ea54e0fc86e6c23868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99eb24face326f29c02e0ee8eb4cbb056657245b651e0ea54e0fc86e6c23868->enter($__internal_d99eb24face326f29c02e0ee8eb4cbb056657245b651e0ea54e0fc86e6c23868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:index.html.twig"));

        $__internal_b86ea4d308d2a4f6bdd05065f4a0bddb2ce493515f5b7cb875fd0fe06b182d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86ea4d308d2a4f6bdd05065f4a0bddb2ce493515f5b7cb875fd0fe06b182d85->enter($__internal_b86ea4d308d2a4f6bdd05065f4a0bddb2ce493515f5b7cb875fd0fe06b182d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d99eb24face326f29c02e0ee8eb4cbb056657245b651e0ea54e0fc86e6c23868->leave($__internal_d99eb24face326f29c02e0ee8eb4cbb056657245b651e0ea54e0fc86e6c23868_prof);

        
        $__internal_b86ea4d308d2a4f6bdd05065f4a0bddb2ce493515f5b7cb875fd0fe06b182d85->leave($__internal_b86ea4d308d2a4f6bdd05065f4a0bddb2ce493515f5b7cb875fd0fe06b182d85_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ffb42cdcbfbe664b3de5fdd58a8dc3143251c5ece9e0270c680415765ed25263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb42cdcbfbe664b3de5fdd58a8dc3143251c5ece9e0270c680415765ed25263->enter($__internal_ffb42cdcbfbe664b3de5fdd58a8dc3143251c5ece9e0270c680415765ed25263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_482ba4d14baa2602914d6c7001bd0bb26e85bf3c3f35590423c8568b39699e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482ba4d14baa2602914d6c7001bd0bb26e85bf3c3f35590423c8568b39699e8e->enter($__internal_482ba4d14baa2602914d6c7001bd0bb26e85bf3c3f35590423c8568b39699e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_482ba4d14baa2602914d6c7001bd0bb26e85bf3c3f35590423c8568b39699e8e->leave($__internal_482ba4d14baa2602914d6c7001bd0bb26e85bf3c3f35590423c8568b39699e8e_prof);

        
        $__internal_ffb42cdcbfbe664b3de5fdd58a8dc3143251c5ece9e0270c680415765ed25263->leave($__internal_ffb42cdcbfbe664b3de5fdd58a8dc3143251c5ece9e0270c680415765ed25263_prof);

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
