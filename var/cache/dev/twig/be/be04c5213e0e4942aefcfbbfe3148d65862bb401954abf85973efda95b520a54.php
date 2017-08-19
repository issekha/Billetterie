<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c009938afcf06bc67a2938392d54e5cd8b8058fb64a135549e68bbf3c0511645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9f152c9882d06208b89f7695759144d870ce4f00ac3ada22ae6bef44a8df6503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f152c9882d06208b89f7695759144d870ce4f00ac3ada22ae6bef44a8df6503->enter($__internal_9f152c9882d06208b89f7695759144d870ce4f00ac3ada22ae6bef44a8df6503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d0a7754e89e132de5f7b361ce78c1857fb4b52ccdb068951aaab7729830be603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a7754e89e132de5f7b361ce78c1857fb4b52ccdb068951aaab7729830be603->enter($__internal_d0a7754e89e132de5f7b361ce78c1857fb4b52ccdb068951aaab7729830be603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f152c9882d06208b89f7695759144d870ce4f00ac3ada22ae6bef44a8df6503->leave($__internal_9f152c9882d06208b89f7695759144d870ce4f00ac3ada22ae6bef44a8df6503_prof);

        
        $__internal_d0a7754e89e132de5f7b361ce78c1857fb4b52ccdb068951aaab7729830be603->leave($__internal_d0a7754e89e132de5f7b361ce78c1857fb4b52ccdb068951aaab7729830be603_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bc86e5665732963bdfa94785dabe71001db2df0997febb5b7cc9184e2719cadd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc86e5665732963bdfa94785dabe71001db2df0997febb5b7cc9184e2719cadd->enter($__internal_bc86e5665732963bdfa94785dabe71001db2df0997febb5b7cc9184e2719cadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_32e5948226f0dc155e7a2bec9f81230f6b630f3a007ad3585a7ddc5d90f7d27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e5948226f0dc155e7a2bec9f81230f6b630f3a007ad3585a7ddc5d90f7d27f->enter($__internal_32e5948226f0dc155e7a2bec9f81230f6b630f3a007ad3585a7ddc5d90f7d27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_32e5948226f0dc155e7a2bec9f81230f6b630f3a007ad3585a7ddc5d90f7d27f->leave($__internal_32e5948226f0dc155e7a2bec9f81230f6b630f3a007ad3585a7ddc5d90f7d27f_prof);

        
        $__internal_bc86e5665732963bdfa94785dabe71001db2df0997febb5b7cc9184e2719cadd->leave($__internal_bc86e5665732963bdfa94785dabe71001db2df0997febb5b7cc9184e2719cadd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_929e5a4fd1b66b9ef069f43e01d18a549eb980b4ea7419c12d1d2e1f53b6ee72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_929e5a4fd1b66b9ef069f43e01d18a549eb980b4ea7419c12d1d2e1f53b6ee72->enter($__internal_929e5a4fd1b66b9ef069f43e01d18a549eb980b4ea7419c12d1d2e1f53b6ee72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_09d83575abdbecd38cae7d0d9250e7a0dcdb4324b2686ec8779009f65827f9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d83575abdbecd38cae7d0d9250e7a0dcdb4324b2686ec8779009f65827f9ac->enter($__internal_09d83575abdbecd38cae7d0d9250e7a0dcdb4324b2686ec8779009f65827f9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_09d83575abdbecd38cae7d0d9250e7a0dcdb4324b2686ec8779009f65827f9ac->leave($__internal_09d83575abdbecd38cae7d0d9250e7a0dcdb4324b2686ec8779009f65827f9ac_prof);

        
        $__internal_929e5a4fd1b66b9ef069f43e01d18a549eb980b4ea7419c12d1d2e1f53b6ee72->leave($__internal_929e5a4fd1b66b9ef069f43e01d18a549eb980b4ea7419c12d1d2e1f53b6ee72_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3fabf1f7fb4f2afa27c23010a943f08fe82004e8a6757b3257460d8fceeaca65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fabf1f7fb4f2afa27c23010a943f08fe82004e8a6757b3257460d8fceeaca65->enter($__internal_3fabf1f7fb4f2afa27c23010a943f08fe82004e8a6757b3257460d8fceeaca65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_81967208ca473b7974ecacefcbb043088ac9233bafb65efc58e16d00e7ab5e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81967208ca473b7974ecacefcbb043088ac9233bafb65efc58e16d00e7ab5e64->enter($__internal_81967208ca473b7974ecacefcbb043088ac9233bafb65efc58e16d00e7ab5e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_81967208ca473b7974ecacefcbb043088ac9233bafb65efc58e16d00e7ab5e64->leave($__internal_81967208ca473b7974ecacefcbb043088ac9233bafb65efc58e16d00e7ab5e64_prof);

        
        $__internal_3fabf1f7fb4f2afa27c23010a943f08fe82004e8a6757b3257460d8fceeaca65->leave($__internal_3fabf1f7fb4f2afa27c23010a943f08fe82004e8a6757b3257460d8fceeaca65_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Billetterie\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
