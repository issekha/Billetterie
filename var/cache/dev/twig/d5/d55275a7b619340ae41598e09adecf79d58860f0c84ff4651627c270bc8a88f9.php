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
        $__internal_906616123b055028439c4ba71cfa5e4c6c9c0eadc320441af9e47c4d84ef1e46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_906616123b055028439c4ba71cfa5e4c6c9c0eadc320441af9e47c4d84ef1e46->enter($__internal_906616123b055028439c4ba71cfa5e4c6c9c0eadc320441af9e47c4d84ef1e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:index.html.twig"));

        $__internal_cde2942cf47c5513cc7e047a1c084c541ffd39045937f1c14faeadd069732eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde2942cf47c5513cc7e047a1c084c541ffd39045937f1c14faeadd069732eef->enter($__internal_cde2942cf47c5513cc7e047a1c084c541ffd39045937f1c14faeadd069732eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_906616123b055028439c4ba71cfa5e4c6c9c0eadc320441af9e47c4d84ef1e46->leave($__internal_906616123b055028439c4ba71cfa5e4c6c9c0eadc320441af9e47c4d84ef1e46_prof);

        
        $__internal_cde2942cf47c5513cc7e047a1c084c541ffd39045937f1c14faeadd069732eef->leave($__internal_cde2942cf47c5513cc7e047a1c084c541ffd39045937f1c14faeadd069732eef_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_09e20499f582a6f564f520da594cceff353e4fbfc0a9131780d8db24443f5a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e20499f582a6f564f520da594cceff353e4fbfc0a9131780d8db24443f5a70->enter($__internal_09e20499f582a6f564f520da594cceff353e4fbfc0a9131780d8db24443f5a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_430baae11e28b3c105a0d7d07cac9c9a238ac53346a7e0f027e4fb26bb27eb8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430baae11e28b3c105a0d7d07cac9c9a238ac53346a7e0f027e4fb26bb27eb8f->enter($__internal_430baae11e28b3c105a0d7d07cac9c9a238ac53346a7e0f027e4fb26bb27eb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_430baae11e28b3c105a0d7d07cac9c9a238ac53346a7e0f027e4fb26bb27eb8f->leave($__internal_430baae11e28b3c105a0d7d07cac9c9a238ac53346a7e0f027e4fb26bb27eb8f_prof);

        
        $__internal_09e20499f582a6f564f520da594cceff353e4fbfc0a9131780d8db24443f5a70->leave($__internal_09e20499f582a6f564f520da594cceff353e4fbfc0a9131780d8db24443f5a70_prof);

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
\t\t\t\t\t<p>Commandez vos billets en 4 étapes</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t <a href=\"{{ path('app_louvre_order') }}\" class=\"btn btn-primary\">Commander</a>
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
