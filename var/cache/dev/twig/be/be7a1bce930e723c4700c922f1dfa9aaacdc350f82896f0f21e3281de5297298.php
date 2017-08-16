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
        $__internal_1d29c403fdfa3cb6d3949a87efc6c387beceb49f405378bab2dc78a023107a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d29c403fdfa3cb6d3949a87efc6c387beceb49f405378bab2dc78a023107a05->enter($__internal_1d29c403fdfa3cb6d3949a87efc6c387beceb49f405378bab2dc78a023107a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fd2eb111cf73cd3d83ef019804337468487470f579d7836bfa450de48a4c310d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2eb111cf73cd3d83ef019804337468487470f579d7836bfa450de48a4c310d->enter($__internal_fd2eb111cf73cd3d83ef019804337468487470f579d7836bfa450de48a4c310d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d29c403fdfa3cb6d3949a87efc6c387beceb49f405378bab2dc78a023107a05->leave($__internal_1d29c403fdfa3cb6d3949a87efc6c387beceb49f405378bab2dc78a023107a05_prof);

        
        $__internal_fd2eb111cf73cd3d83ef019804337468487470f579d7836bfa450de48a4c310d->leave($__internal_fd2eb111cf73cd3d83ef019804337468487470f579d7836bfa450de48a4c310d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b22b6b12ee3b9b1a1fe8123caa77bf3f0a324a377e3b7d33507a8b13b977a94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b22b6b12ee3b9b1a1fe8123caa77bf3f0a324a377e3b7d33507a8b13b977a94->enter($__internal_1b22b6b12ee3b9b1a1fe8123caa77bf3f0a324a377e3b7d33507a8b13b977a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_680a7914ac81246ac6ba4de639946f42a1095b961dda38fbbaf688b13abca95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680a7914ac81246ac6ba4de639946f42a1095b961dda38fbbaf688b13abca95e->enter($__internal_680a7914ac81246ac6ba4de639946f42a1095b961dda38fbbaf688b13abca95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_680a7914ac81246ac6ba4de639946f42a1095b961dda38fbbaf688b13abca95e->leave($__internal_680a7914ac81246ac6ba4de639946f42a1095b961dda38fbbaf688b13abca95e_prof);

        
        $__internal_1b22b6b12ee3b9b1a1fe8123caa77bf3f0a324a377e3b7d33507a8b13b977a94->leave($__internal_1b22b6b12ee3b9b1a1fe8123caa77bf3f0a324a377e3b7d33507a8b13b977a94_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0445741df2452fb73308ebd790e9db6aeafdf2c53b20c8a46e1ab1bbbce38699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0445741df2452fb73308ebd790e9db6aeafdf2c53b20c8a46e1ab1bbbce38699->enter($__internal_0445741df2452fb73308ebd790e9db6aeafdf2c53b20c8a46e1ab1bbbce38699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f738760fc2ebadbe9b4bc1efe0f07a7f28a41658e4ee63c94059e9662c360d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f738760fc2ebadbe9b4bc1efe0f07a7f28a41658e4ee63c94059e9662c360d2e->enter($__internal_f738760fc2ebadbe9b4bc1efe0f07a7f28a41658e4ee63c94059e9662c360d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f738760fc2ebadbe9b4bc1efe0f07a7f28a41658e4ee63c94059e9662c360d2e->leave($__internal_f738760fc2ebadbe9b4bc1efe0f07a7f28a41658e4ee63c94059e9662c360d2e_prof);

        
        $__internal_0445741df2452fb73308ebd790e9db6aeafdf2c53b20c8a46e1ab1bbbce38699->leave($__internal_0445741df2452fb73308ebd790e9db6aeafdf2c53b20c8a46e1ab1bbbce38699_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5317c9dbc20228613bcb1c3c1be91b22caddecfcbe7bae495da06ab9c4912e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5317c9dbc20228613bcb1c3c1be91b22caddecfcbe7bae495da06ab9c4912e6e->enter($__internal_5317c9dbc20228613bcb1c3c1be91b22caddecfcbe7bae495da06ab9c4912e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1c43b5fe87636474a4d55d17bb2c8eeaf4baa33b5e3b47b4a04919e17341dc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c43b5fe87636474a4d55d17bb2c8eeaf4baa33b5e3b47b4a04919e17341dc13->enter($__internal_1c43b5fe87636474a4d55d17bb2c8eeaf4baa33b5e3b47b4a04919e17341dc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1c43b5fe87636474a4d55d17bb2c8eeaf4baa33b5e3b47b4a04919e17341dc13->leave($__internal_1c43b5fe87636474a4d55d17bb2c8eeaf4baa33b5e3b47b4a04919e17341dc13_prof);

        
        $__internal_5317c9dbc20228613bcb1c3c1be91b22caddecfcbe7bae495da06ab9c4912e6e->leave($__internal_5317c9dbc20228613bcb1c3c1be91b22caddecfcbe7bae495da06ab9c4912e6e_prof);

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
