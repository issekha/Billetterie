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
        $__internal_d5be5254d71e27dcc0ddb40a4ded83c1420a37eef813f2a18bf5d350c42146b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5be5254d71e27dcc0ddb40a4ded83c1420a37eef813f2a18bf5d350c42146b0->enter($__internal_d5be5254d71e27dcc0ddb40a4ded83c1420a37eef813f2a18bf5d350c42146b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:index.html.twig"));

        $__internal_59028a82cda9c43130043eca7db26b3f4b8d497fb41f14f73c50e0f285b6914a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59028a82cda9c43130043eca7db26b3f4b8d497fb41f14f73c50e0f285b6914a->enter($__internal_59028a82cda9c43130043eca7db26b3f4b8d497fb41f14f73c50e0f285b6914a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5be5254d71e27dcc0ddb40a4ded83c1420a37eef813f2a18bf5d350c42146b0->leave($__internal_d5be5254d71e27dcc0ddb40a4ded83c1420a37eef813f2a18bf5d350c42146b0_prof);

        
        $__internal_59028a82cda9c43130043eca7db26b3f4b8d497fb41f14f73c50e0f285b6914a->leave($__internal_59028a82cda9c43130043eca7db26b3f4b8d497fb41f14f73c50e0f285b6914a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_12f6cba572bf28fda9f7aa2805a072e37092136dabb734bf45be57b105b23728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f6cba572bf28fda9f7aa2805a072e37092136dabb734bf45be57b105b23728->enter($__internal_12f6cba572bf28fda9f7aa2805a072e37092136dabb734bf45be57b105b23728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2094e796cd9941c54d46c43339ebb23f0c391c47a492b8aed13f107cbc74fafe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2094e796cd9941c54d46c43339ebb23f0c391c47a492b8aed13f107cbc74fafe->enter($__internal_2094e796cd9941c54d46c43339ebb23f0c391c47a492b8aed13f107cbc74fafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div class=\"view\">
\t\t\t<!--Intro content-->
\t\t\t<div class=\"jumbotron\">
\t\t\t\t<div class=\"container text-center\">
\t\t\t\t\t<h1>Espace Billetterie</h1>
\t\t\t\t\t<p>Evitez les files d'attentes en 4 étapes</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_louvre_order");
        echo "\" class=\"btn btn-primary\">COMMENCER</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "      
      <div class=\"alert alert-success\" >
          ";
            // line 21
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
";
        
        $__internal_2094e796cd9941c54d46c43339ebb23f0c391c47a492b8aed13f107cbc74fafe->leave($__internal_2094e796cd9941c54d46c43339ebb23f0c391c47a492b8aed13f107cbc74fafe_prof);

        
        $__internal_12f6cba572bf28fda9f7aa2805a072e37092136dabb734bf45be57b105b23728->leave($__internal_12f6cba572bf28fda9f7aa2805a072e37092136dabb734bf45be57b105b23728_prof);

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
        return array (  85 => 24,  76 => 21,  72 => 19,  68 => 18,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t\t<p>Evitez les files d'attentes en 4 étapes</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t <a href=\"{{ path('app_louvre_order') }}\" class=\"btn btn-primary\">COMMENCER</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

{% for flashMessage in app.session.flashbag.get('success') %}
      
      <div class=\"alert alert-success\" >
          {{ flashMessage }}
      </div>
{% endfor %}

{% endblock %}
", "AppLouvreBundle:App:index.html.twig", "C:\\wamp64\\www\\Billetterie\\src\\App\\LouvreBundle/Resources/views/App/index.html.twig");
    }
}
