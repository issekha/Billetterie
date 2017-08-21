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
        $__internal_2ef7ee1ff1c06e82da60d6f8ba3aa645de6261944296e4b1d7118c86e2d19267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef7ee1ff1c06e82da60d6f8ba3aa645de6261944296e4b1d7118c86e2d19267->enter($__internal_2ef7ee1ff1c06e82da60d6f8ba3aa645de6261944296e4b1d7118c86e2d19267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6bfcf0dc2bcf17c6bd8fbbc10ba6f8b8b15d93b30ce5d57b15c4538a583cd1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bfcf0dc2bcf17c6bd8fbbc10ba6f8b8b15d93b30ce5d57b15c4538a583cd1ca->enter($__internal_6bfcf0dc2bcf17c6bd8fbbc10ba6f8b8b15d93b30ce5d57b15c4538a583cd1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ef7ee1ff1c06e82da60d6f8ba3aa645de6261944296e4b1d7118c86e2d19267->leave($__internal_2ef7ee1ff1c06e82da60d6f8ba3aa645de6261944296e4b1d7118c86e2d19267_prof);

        
        $__internal_6bfcf0dc2bcf17c6bd8fbbc10ba6f8b8b15d93b30ce5d57b15c4538a583cd1ca->leave($__internal_6bfcf0dc2bcf17c6bd8fbbc10ba6f8b8b15d93b30ce5d57b15c4538a583cd1ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a32015b6a20cfba149e705aa13c7e574795a657699484e73ec7e256b44885d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a32015b6a20cfba149e705aa13c7e574795a657699484e73ec7e256b44885d48->enter($__internal_a32015b6a20cfba149e705aa13c7e574795a657699484e73ec7e256b44885d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9ce4e9501958e006d8fc65a5c1e68f1f502efa08dba2f26403c1b66842e41d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce4e9501958e006d8fc65a5c1e68f1f502efa08dba2f26403c1b66842e41d27->enter($__internal_9ce4e9501958e006d8fc65a5c1e68f1f502efa08dba2f26403c1b66842e41d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9ce4e9501958e006d8fc65a5c1e68f1f502efa08dba2f26403c1b66842e41d27->leave($__internal_9ce4e9501958e006d8fc65a5c1e68f1f502efa08dba2f26403c1b66842e41d27_prof);

        
        $__internal_a32015b6a20cfba149e705aa13c7e574795a657699484e73ec7e256b44885d48->leave($__internal_a32015b6a20cfba149e705aa13c7e574795a657699484e73ec7e256b44885d48_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e630854884e648a8f511380d9cfbbd47dea489bff9dad10bc0585a8098145aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e630854884e648a8f511380d9cfbbd47dea489bff9dad10bc0585a8098145aaa->enter($__internal_e630854884e648a8f511380d9cfbbd47dea489bff9dad10bc0585a8098145aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1a85cd8278acb6236cea19832e95bf186642a9ab096e7825bc35a518d0083e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a85cd8278acb6236cea19832e95bf186642a9ab096e7825bc35a518d0083e7f->enter($__internal_1a85cd8278acb6236cea19832e95bf186642a9ab096e7825bc35a518d0083e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1a85cd8278acb6236cea19832e95bf186642a9ab096e7825bc35a518d0083e7f->leave($__internal_1a85cd8278acb6236cea19832e95bf186642a9ab096e7825bc35a518d0083e7f_prof);

        
        $__internal_e630854884e648a8f511380d9cfbbd47dea489bff9dad10bc0585a8098145aaa->leave($__internal_e630854884e648a8f511380d9cfbbd47dea489bff9dad10bc0585a8098145aaa_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d29598cb4bf9d88260db9cfe72834ea90251b66b78e2c2d6cd551fc72dbfb4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d29598cb4bf9d88260db9cfe72834ea90251b66b78e2c2d6cd551fc72dbfb4f->enter($__internal_8d29598cb4bf9d88260db9cfe72834ea90251b66b78e2c2d6cd551fc72dbfb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ff66a7024a7a07a1e104eae6dd99cadce7164ac2a8f9c7d366fc5b017af883c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff66a7024a7a07a1e104eae6dd99cadce7164ac2a8f9c7d366fc5b017af883c6->enter($__internal_ff66a7024a7a07a1e104eae6dd99cadce7164ac2a8f9c7d366fc5b017af883c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ff66a7024a7a07a1e104eae6dd99cadce7164ac2a8f9c7d366fc5b017af883c6->leave($__internal_ff66a7024a7a07a1e104eae6dd99cadce7164ac2a8f9c7d366fc5b017af883c6_prof);

        
        $__internal_8d29598cb4bf9d88260db9cfe72834ea90251b66b78e2c2d6cd551fc72dbfb4f->leave($__internal_8d29598cb4bf9d88260db9cfe72834ea90251b66b78e2c2d6cd551fc72dbfb4f_prof);

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
