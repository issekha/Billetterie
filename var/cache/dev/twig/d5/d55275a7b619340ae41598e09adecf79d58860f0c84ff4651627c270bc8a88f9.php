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
        $__internal_479ddddc0923cf816d40207b99a1531a2f30a958c6c42baa84a877b8ea0faf98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_479ddddc0923cf816d40207b99a1531a2f30a958c6c42baa84a877b8ea0faf98->enter($__internal_479ddddc0923cf816d40207b99a1531a2f30a958c6c42baa84a877b8ea0faf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:index.html.twig"));

        $__internal_d4cf10d907cad881734ee4a01390186ba8bcd9e19478ad9c09ab5b7e5722d9ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4cf10d907cad881734ee4a01390186ba8bcd9e19478ad9c09ab5b7e5722d9ce->enter($__internal_d4cf10d907cad881734ee4a01390186ba8bcd9e19478ad9c09ab5b7e5722d9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_479ddddc0923cf816d40207b99a1531a2f30a958c6c42baa84a877b8ea0faf98->leave($__internal_479ddddc0923cf816d40207b99a1531a2f30a958c6c42baa84a877b8ea0faf98_prof);

        
        $__internal_d4cf10d907cad881734ee4a01390186ba8bcd9e19478ad9c09ab5b7e5722d9ce->leave($__internal_d4cf10d907cad881734ee4a01390186ba8bcd9e19478ad9c09ab5b7e5722d9ce_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f46899c4db963d2022f7fc2b6ae1f768170ca166c454c3503e339a91479d7920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46899c4db963d2022f7fc2b6ae1f768170ca166c454c3503e339a91479d7920->enter($__internal_f46899c4db963d2022f7fc2b6ae1f768170ca166c454c3503e339a91479d7920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_584fdcb24fc056b17d50b3447045f826b15c1de7066f2a2f059c279b9de24ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584fdcb24fc056b17d50b3447045f826b15c1de7066f2a2f059c279b9de24ba1->enter($__internal_584fdcb24fc056b17d50b3447045f826b15c1de7066f2a2f059c279b9de24ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_584fdcb24fc056b17d50b3447045f826b15c1de7066f2a2f059c279b9de24ba1->leave($__internal_584fdcb24fc056b17d50b3447045f826b15c1de7066f2a2f059c279b9de24ba1_prof);

        
        $__internal_f46899c4db963d2022f7fc2b6ae1f768170ca166c454c3503e339a91479d7920->leave($__internal_f46899c4db963d2022f7fc2b6ae1f768170ca166c454c3503e339a91479d7920_prof);

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
