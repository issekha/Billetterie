<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0920480bce2627ecd94a394abf3aaa1f6c65e33cafdf6a6f6aa2a2466968148c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b48ce870a9ac6fb4b58254b1d817fa93ed4245ccdac8890369cb36c027144686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b48ce870a9ac6fb4b58254b1d817fa93ed4245ccdac8890369cb36c027144686->enter($__internal_b48ce870a9ac6fb4b58254b1d817fa93ed4245ccdac8890369cb36c027144686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_dda645250f6babd1f38728f28e10f67b983045bfc507611906befd51781e179c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda645250f6babd1f38728f28e10f67b983045bfc507611906befd51781e179c->enter($__internal_dda645250f6babd1f38728f28e10f67b983045bfc507611906befd51781e179c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b48ce870a9ac6fb4b58254b1d817fa93ed4245ccdac8890369cb36c027144686->leave($__internal_b48ce870a9ac6fb4b58254b1d817fa93ed4245ccdac8890369cb36c027144686_prof);

        
        $__internal_dda645250f6babd1f38728f28e10f67b983045bfc507611906befd51781e179c->leave($__internal_dda645250f6babd1f38728f28e10f67b983045bfc507611906befd51781e179c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_03a7a8d4353038cfa6727ee97e26c16e0fab047a8ccde2acba550ee04e4a77d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a7a8d4353038cfa6727ee97e26c16e0fab047a8ccde2acba550ee04e4a77d0->enter($__internal_03a7a8d4353038cfa6727ee97e26c16e0fab047a8ccde2acba550ee04e4a77d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_63225416ced830c90fa9bb2517ed0f298f13a1e20210d094ee25da95438847f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63225416ced830c90fa9bb2517ed0f298f13a1e20210d094ee25da95438847f6->enter($__internal_63225416ced830c90fa9bb2517ed0f298f13a1e20210d094ee25da95438847f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_63225416ced830c90fa9bb2517ed0f298f13a1e20210d094ee25da95438847f6->leave($__internal_63225416ced830c90fa9bb2517ed0f298f13a1e20210d094ee25da95438847f6_prof);

        
        $__internal_03a7a8d4353038cfa6727ee97e26c16e0fab047a8ccde2acba550ee04e4a77d0->leave($__internal_03a7a8d4353038cfa6727ee97e26c16e0fab047a8ccde2acba550ee04e4a77d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6feebf647313db75f240d6996fc0a61225b9388ad144c845aeb497166aa75cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6feebf647313db75f240d6996fc0a61225b9388ad144c845aeb497166aa75cd->enter($__internal_e6feebf647313db75f240d6996fc0a61225b9388ad144c845aeb497166aa75cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9b41646d71d86ab470f5484dc2fd0c606b5645bfefdabb20d10477723aa9625b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b41646d71d86ab470f5484dc2fd0c606b5645bfefdabb20d10477723aa9625b->enter($__internal_9b41646d71d86ab470f5484dc2fd0c606b5645bfefdabb20d10477723aa9625b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9b41646d71d86ab470f5484dc2fd0c606b5645bfefdabb20d10477723aa9625b->leave($__internal_9b41646d71d86ab470f5484dc2fd0c606b5645bfefdabb20d10477723aa9625b_prof);

        
        $__internal_e6feebf647313db75f240d6996fc0a61225b9388ad144c845aeb497166aa75cd->leave($__internal_e6feebf647313db75f240d6996fc0a61225b9388ad144c845aeb497166aa75cd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52cae0440a550f80f619793e834077a17fee5073c55e7bea3d9894c0d931aa53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52cae0440a550f80f619793e834077a17fee5073c55e7bea3d9894c0d931aa53->enter($__internal_52cae0440a550f80f619793e834077a17fee5073c55e7bea3d9894c0d931aa53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5a2c3fe324be0f21a24b6324266d11dbc948be00fb588b494393ddb513d10a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2c3fe324be0f21a24b6324266d11dbc948be00fb588b494393ddb513d10a1d->enter($__internal_5a2c3fe324be0f21a24b6324266d11dbc948be00fb588b494393ddb513d10a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5a2c3fe324be0f21a24b6324266d11dbc948be00fb588b494393ddb513d10a1d->leave($__internal_5a2c3fe324be0f21a24b6324266d11dbc948be00fb588b494393ddb513d10a1d_prof);

        
        $__internal_52cae0440a550f80f619793e834077a17fee5073c55e7bea3d9894c0d931aa53->leave($__internal_52cae0440a550f80f619793e834077a17fee5073c55e7bea3d9894c0d931aa53_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Billetterie\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
