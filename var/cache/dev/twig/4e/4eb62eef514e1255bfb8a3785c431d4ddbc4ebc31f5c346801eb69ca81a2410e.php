<?php

/* AppLouvreBundle:App:confirm.html.twig */
class __TwigTemplate_64f2f3c1c6f02c7f9258792c7156ec2fbb51167a8a50eebeff13c3739b82981d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppLouvreBundle::layout.html.twig", "AppLouvreBundle:App:confirm.html.twig", 1);
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
        $__internal_d0cb5dae51194d3fccb832dfa4fca61b2fdff059e400fec30c09b67afde90a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0cb5dae51194d3fccb832dfa4fca61b2fdff059e400fec30c09b67afde90a72->enter($__internal_d0cb5dae51194d3fccb832dfa4fca61b2fdff059e400fec30c09b67afde90a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:confirm.html.twig"));

        $__internal_4f1047925c535620c21b92627f3a5a04a9c734eb464f5bc6d9add308044789ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1047925c535620c21b92627f3a5a04a9c734eb464f5bc6d9add308044789ac->enter($__internal_4f1047925c535620c21b92627f3a5a04a9c734eb464f5bc6d9add308044789ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0cb5dae51194d3fccb832dfa4fca61b2fdff059e400fec30c09b67afde90a72->leave($__internal_d0cb5dae51194d3fccb832dfa4fca61b2fdff059e400fec30c09b67afde90a72_prof);

        
        $__internal_4f1047925c535620c21b92627f3a5a04a9c734eb464f5bc6d9add308044789ac->leave($__internal_4f1047925c535620c21b92627f3a5a04a9c734eb464f5bc6d9add308044789ac_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_71390b06b523cca253289299c2bf1ed53abf76a7df2fb8b7bbcfccc0d69a665c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71390b06b523cca253289299c2bf1ed53abf76a7df2fb8b7bbcfccc0d69a665c->enter($__internal_71390b06b523cca253289299c2bf1ed53abf76a7df2fb8b7bbcfccc0d69a665c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a24243c0dfbc969f19b88a4b4750a3803aed95604ba3a37eda69c59c8c7c7edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24243c0dfbc969f19b88a4b4750a3803aed95604ba3a37eda69c59c8c7c7edf->enter($__internal_a24243c0dfbc969f19b88a4b4750a3803aed95604ba3a37eda69c59c8c7c7edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
\t<h1><strong>Etape 4:</strong> Confirmation de votre commande </h1> 
\t
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "
\t\t\t<div class=\"alert alert-success\" >
\t\t\t  ";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t
\t";
        // line 15
        echo "\t<div class=\"jumbotron\">
\t\t<div class=\"container text-center\">
\t\t\t<h1>Merci pour votre achat</h1>
\t\t\t<p>Vous allez recevoir vos billets par email</p>
\t\t\t<p>
\t\t\t\t <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_louvre_homePage");
        echo "\" class=\"btn btn-primary\">Accueil</a>
\t\t\t\t <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_louvre_order");
        echo "\" class=\"btn btn-info\">Re-Commander</a>
\t\t\t</p>
\t\t</div>
\t</div>
\t\t
";
        
        $__internal_a24243c0dfbc969f19b88a4b4750a3803aed95604ba3a37eda69c59c8c7c7edf->leave($__internal_a24243c0dfbc969f19b88a4b4750a3803aed95604ba3a37eda69c59c8c7c7edf_prof);

        
        $__internal_71390b06b523cca253289299c2bf1ed53abf76a7df2fb8b7bbcfccc0d69a665c->leave($__internal_71390b06b523cca253289299c2bf1ed53abf76a7df2fb8b7bbcfccc0d69a665c_prof);

    }

    public function getTemplateName()
    {
        return "AppLouvreBundle:App:confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  81 => 20,  74 => 15,  71 => 13,  62 => 10,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

\t<h1><strong>Etape 4:</strong> Confirmation de votre commande </h1> 
\t
\t{% for flashMessage in app.session.flashbag.get('success') %}

\t\t\t<div class=\"alert alert-success\" >
\t\t\t  {{ flashMessage }}
\t\t\t</div>
\t{% endfor %}
\t
\t{#Texte confirmation #}
\t<div class=\"jumbotron\">
\t\t<div class=\"container text-center\">
\t\t\t<h1>Merci pour votre achat</h1>
\t\t\t<p>Vous allez recevoir vos billets par email</p>
\t\t\t<p>
\t\t\t\t <a href=\"{{ path('app_louvre_homePage') }}\" class=\"btn btn-primary\">Accueil</a>
\t\t\t\t <a href=\"{{ path('app_louvre_order') }}\" class=\"btn btn-info\">Re-Commander</a>
\t\t\t</p>
\t\t</div>
\t</div>
\t\t
{% endblock %}", "AppLouvreBundle:App:confirm.html.twig", "C:\\wamp64\\www\\Billetterie\\src\\App\\LouvreBundle/Resources/views/App/confirm.html.twig");
    }
}
