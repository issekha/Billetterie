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
        $__internal_711ebc21cd290db0c31f6e5a62782e56cf0075573d72b605baf386fc96947999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711ebc21cd290db0c31f6e5a62782e56cf0075573d72b605baf386fc96947999->enter($__internal_711ebc21cd290db0c31f6e5a62782e56cf0075573d72b605baf386fc96947999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b0addc7cd48a4d6a3f32c93641a95f990da5c1d1f80c87e0f9bf1dc755867fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0addc7cd48a4d6a3f32c93641a95f990da5c1d1f80c87e0f9bf1dc755867fe9->enter($__internal_b0addc7cd48a4d6a3f32c93641a95f990da5c1d1f80c87e0f9bf1dc755867fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_711ebc21cd290db0c31f6e5a62782e56cf0075573d72b605baf386fc96947999->leave($__internal_711ebc21cd290db0c31f6e5a62782e56cf0075573d72b605baf386fc96947999_prof);

        
        $__internal_b0addc7cd48a4d6a3f32c93641a95f990da5c1d1f80c87e0f9bf1dc755867fe9->leave($__internal_b0addc7cd48a4d6a3f32c93641a95f990da5c1d1f80c87e0f9bf1dc755867fe9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c79006e459458351d50618ed7d65b70ad4ccef4f585524669f0fbd3c0174b478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c79006e459458351d50618ed7d65b70ad4ccef4f585524669f0fbd3c0174b478->enter($__internal_c79006e459458351d50618ed7d65b70ad4ccef4f585524669f0fbd3c0174b478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e72a792242d27b4b33dab5b0f948ce6f2c47725dedd0d8856c57cada38ad2d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72a792242d27b4b33dab5b0f948ce6f2c47725dedd0d8856c57cada38ad2d49->enter($__internal_e72a792242d27b4b33dab5b0f948ce6f2c47725dedd0d8856c57cada38ad2d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e72a792242d27b4b33dab5b0f948ce6f2c47725dedd0d8856c57cada38ad2d49->leave($__internal_e72a792242d27b4b33dab5b0f948ce6f2c47725dedd0d8856c57cada38ad2d49_prof);

        
        $__internal_c79006e459458351d50618ed7d65b70ad4ccef4f585524669f0fbd3c0174b478->leave($__internal_c79006e459458351d50618ed7d65b70ad4ccef4f585524669f0fbd3c0174b478_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_45060339d54b90ebf047e076e11be041c8dc69805dccaf6dd21d5d040886d315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45060339d54b90ebf047e076e11be041c8dc69805dccaf6dd21d5d040886d315->enter($__internal_45060339d54b90ebf047e076e11be041c8dc69805dccaf6dd21d5d040886d315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_09627f11589bf3d8e689940664bb2a296df5ba0a7de68d1df74ca0a689ee69bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09627f11589bf3d8e689940664bb2a296df5ba0a7de68d1df74ca0a689ee69bb->enter($__internal_09627f11589bf3d8e689940664bb2a296df5ba0a7de68d1df74ca0a689ee69bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_09627f11589bf3d8e689940664bb2a296df5ba0a7de68d1df74ca0a689ee69bb->leave($__internal_09627f11589bf3d8e689940664bb2a296df5ba0a7de68d1df74ca0a689ee69bb_prof);

        
        $__internal_45060339d54b90ebf047e076e11be041c8dc69805dccaf6dd21d5d040886d315->leave($__internal_45060339d54b90ebf047e076e11be041c8dc69805dccaf6dd21d5d040886d315_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1771b7e8da5ef1858e7e0ee177c823bc57f4c2f1c2272e8d410fd191b04b78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1771b7e8da5ef1858e7e0ee177c823bc57f4c2f1c2272e8d410fd191b04b78d->enter($__internal_f1771b7e8da5ef1858e7e0ee177c823bc57f4c2f1c2272e8d410fd191b04b78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8f81f347a7f4c7608d1aa069efd4202392aa72bc8045b1ee502b8bfaf3bf4e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f81f347a7f4c7608d1aa069efd4202392aa72bc8045b1ee502b8bfaf3bf4e05->enter($__internal_8f81f347a7f4c7608d1aa069efd4202392aa72bc8045b1ee502b8bfaf3bf4e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8f81f347a7f4c7608d1aa069efd4202392aa72bc8045b1ee502b8bfaf3bf4e05->leave($__internal_8f81f347a7f4c7608d1aa069efd4202392aa72bc8045b1ee502b8bfaf3bf4e05_prof);

        
        $__internal_f1771b7e8da5ef1858e7e0ee177c823bc57f4c2f1c2272e8d410fd191b04b78d->leave($__internal_f1771b7e8da5ef1858e7e0ee177c823bc57f4c2f1c2272e8d410fd191b04b78d_prof);

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
