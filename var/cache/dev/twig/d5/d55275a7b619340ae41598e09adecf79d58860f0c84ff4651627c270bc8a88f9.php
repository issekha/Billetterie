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
        $__internal_71d324bd28f744203bdf868b90a96a96b7a544210588aa885b8d1d07ed3cb6ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d324bd28f744203bdf868b90a96a96b7a544210588aa885b8d1d07ed3cb6ed->enter($__internal_71d324bd28f744203bdf868b90a96a96b7a544210588aa885b8d1d07ed3cb6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:index.html.twig"));

        $__internal_a0d93095d5de0426e526f452898bca7baf6a8a44557bf07e7009eefee866eacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d93095d5de0426e526f452898bca7baf6a8a44557bf07e7009eefee866eacb->enter($__internal_a0d93095d5de0426e526f452898bca7baf6a8a44557bf07e7009eefee866eacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71d324bd28f744203bdf868b90a96a96b7a544210588aa885b8d1d07ed3cb6ed->leave($__internal_71d324bd28f744203bdf868b90a96a96b7a544210588aa885b8d1d07ed3cb6ed_prof);

        
        $__internal_a0d93095d5de0426e526f452898bca7baf6a8a44557bf07e7009eefee866eacb->leave($__internal_a0d93095d5de0426e526f452898bca7baf6a8a44557bf07e7009eefee866eacb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3df6918a1d817ba368719b99472df1d6efd2bf124fbefff5d90dc1e8ef23ff00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df6918a1d817ba368719b99472df1d6efd2bf124fbefff5d90dc1e8ef23ff00->enter($__internal_3df6918a1d817ba368719b99472df1d6efd2bf124fbefff5d90dc1e8ef23ff00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_30d0b529375e91f3fed2e1ac79806c3f3f1b36ca98d80c9764db77e1b7fb7a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d0b529375e91f3fed2e1ac79806c3f3f1b36ca98d80c9764db77e1b7fb7a84->enter($__internal_30d0b529375e91f3fed2e1ac79806c3f3f1b36ca98d80c9764db77e1b7fb7a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div class=\"view\">
\t\t\t<!--Intro content-->
\t\t\t<div class=\"jumbotron\">
\t\t\t\t<div class=\"container text-center\">
\t\t\t\t\t<h1>Espace Billetterie</h1>
\t\t\t\t\t<p>Commandez vos billets en 4 étapes</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_louvre_order");
        echo "\" class=\"btn btn-primary\">Commander</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

";
        
        $__internal_30d0b529375e91f3fed2e1ac79806c3f3f1b36ca98d80c9764db77e1b7fb7a84->leave($__internal_30d0b529375e91f3fed2e1ac79806c3f3f1b36ca98d80c9764db77e1b7fb7a84_prof);

        
        $__internal_3df6918a1d817ba368719b99472df1d6efd2bf124fbefff5d90dc1e8ef23ff00->leave($__internal_3df6918a1d817ba368719b99472df1d6efd2bf124fbefff5d90dc1e8ef23ff00_prof);

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
        return array (  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
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

<div class=\"view\">
\t\t\t<!--Intro content-->
\t\t\t<div class=\"jumbotron\">
\t\t\t\t<div class=\"container text-center\">
\t\t\t\t\t<h1>Espace Billetterie</h1>
\t\t\t\t\t<p>Commandez vos billets en 4 étapes</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t <a href=\"{{ path('app_louvre_order') }}\" class=\"btn btn-primary\">Commander</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

{% endblock %}
", "AppLouvreBundle:App:index.html.twig", "C:\\wamp64\\www\\try\\src\\App\\LouvreBundle/Resources/views/App/index.html.twig");
    }
}
