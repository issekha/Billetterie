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
        $__internal_a001169b8cba59a602d9118e150c6db7901b79acae552b564526e345feabac65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a001169b8cba59a602d9118e150c6db7901b79acae552b564526e345feabac65->enter($__internal_a001169b8cba59a602d9118e150c6db7901b79acae552b564526e345feabac65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0ce289f5dfef826a6d5bb4c5075dabc0ca1e2d59ade5f3a346660d6b83525d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce289f5dfef826a6d5bb4c5075dabc0ca1e2d59ade5f3a346660d6b83525d89->enter($__internal_0ce289f5dfef826a6d5bb4c5075dabc0ca1e2d59ade5f3a346660d6b83525d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a001169b8cba59a602d9118e150c6db7901b79acae552b564526e345feabac65->leave($__internal_a001169b8cba59a602d9118e150c6db7901b79acae552b564526e345feabac65_prof);

        
        $__internal_0ce289f5dfef826a6d5bb4c5075dabc0ca1e2d59ade5f3a346660d6b83525d89->leave($__internal_0ce289f5dfef826a6d5bb4c5075dabc0ca1e2d59ade5f3a346660d6b83525d89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f06e998a543ce1b4b7f28b883ce9d07a1463950e87ca3431c230d7e1579db3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f06e998a543ce1b4b7f28b883ce9d07a1463950e87ca3431c230d7e1579db3e->enter($__internal_0f06e998a543ce1b4b7f28b883ce9d07a1463950e87ca3431c230d7e1579db3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_746f58b2801e325acc531c04c562cf1d52fb8c3e639908a369538bb6df7402e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746f58b2801e325acc531c04c562cf1d52fb8c3e639908a369538bb6df7402e7->enter($__internal_746f58b2801e325acc531c04c562cf1d52fb8c3e639908a369538bb6df7402e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_746f58b2801e325acc531c04c562cf1d52fb8c3e639908a369538bb6df7402e7->leave($__internal_746f58b2801e325acc531c04c562cf1d52fb8c3e639908a369538bb6df7402e7_prof);

        
        $__internal_0f06e998a543ce1b4b7f28b883ce9d07a1463950e87ca3431c230d7e1579db3e->leave($__internal_0f06e998a543ce1b4b7f28b883ce9d07a1463950e87ca3431c230d7e1579db3e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c90493989507cbb0daca7e09da45a090177fd74c6fbe6a83373f0a1b9f70adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c90493989507cbb0daca7e09da45a090177fd74c6fbe6a83373f0a1b9f70adb->enter($__internal_0c90493989507cbb0daca7e09da45a090177fd74c6fbe6a83373f0a1b9f70adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_10f0bd6329243a44eb84800ea4293dd2cb069399bd5737284404ac048f16d274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f0bd6329243a44eb84800ea4293dd2cb069399bd5737284404ac048f16d274->enter($__internal_10f0bd6329243a44eb84800ea4293dd2cb069399bd5737284404ac048f16d274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_10f0bd6329243a44eb84800ea4293dd2cb069399bd5737284404ac048f16d274->leave($__internal_10f0bd6329243a44eb84800ea4293dd2cb069399bd5737284404ac048f16d274_prof);

        
        $__internal_0c90493989507cbb0daca7e09da45a090177fd74c6fbe6a83373f0a1b9f70adb->leave($__internal_0c90493989507cbb0daca7e09da45a090177fd74c6fbe6a83373f0a1b9f70adb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94f2d5eb9e7f7d0cc16cee7cea1ad63af41f73b22cf5631e7533c06aaac081bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f2d5eb9e7f7d0cc16cee7cea1ad63af41f73b22cf5631e7533c06aaac081bb->enter($__internal_94f2d5eb9e7f7d0cc16cee7cea1ad63af41f73b22cf5631e7533c06aaac081bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7926510c1f30d3c2b3bc61b817af9dabf9f944f254494fbe17769a4848f1add3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7926510c1f30d3c2b3bc61b817af9dabf9f944f254494fbe17769a4848f1add3->enter($__internal_7926510c1f30d3c2b3bc61b817af9dabf9f944f254494fbe17769a4848f1add3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7926510c1f30d3c2b3bc61b817af9dabf9f944f254494fbe17769a4848f1add3->leave($__internal_7926510c1f30d3c2b3bc61b817af9dabf9f944f254494fbe17769a4848f1add3_prof);

        
        $__internal_94f2d5eb9e7f7d0cc16cee7cea1ad63af41f73b22cf5631e7533c06aaac081bb->leave($__internal_94f2d5eb9e7f7d0cc16cee7cea1ad63af41f73b22cf5631e7533c06aaac081bb_prof);

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
