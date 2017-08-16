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
        $__internal_a8c181b96caaa5ba759ac7aa02c13d59ddcc172274b3fc6f00e5659e1bd22e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c181b96caaa5ba759ac7aa02c13d59ddcc172274b3fc6f00e5659e1bd22e20->enter($__internal_a8c181b96caaa5ba759ac7aa02c13d59ddcc172274b3fc6f00e5659e1bd22e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1edb5f5bcc3c375550acb2209d800f71fccd1c9df0c7bb7830833d9d34289635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1edb5f5bcc3c375550acb2209d800f71fccd1c9df0c7bb7830833d9d34289635->enter($__internal_1edb5f5bcc3c375550acb2209d800f71fccd1c9df0c7bb7830833d9d34289635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8c181b96caaa5ba759ac7aa02c13d59ddcc172274b3fc6f00e5659e1bd22e20->leave($__internal_a8c181b96caaa5ba759ac7aa02c13d59ddcc172274b3fc6f00e5659e1bd22e20_prof);

        
        $__internal_1edb5f5bcc3c375550acb2209d800f71fccd1c9df0c7bb7830833d9d34289635->leave($__internal_1edb5f5bcc3c375550acb2209d800f71fccd1c9df0c7bb7830833d9d34289635_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1156fbab546c6de0c24e8216540431ff83ceb46b0cd9acb7f3517cc29e0da3bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1156fbab546c6de0c24e8216540431ff83ceb46b0cd9acb7f3517cc29e0da3bf->enter($__internal_1156fbab546c6de0c24e8216540431ff83ceb46b0cd9acb7f3517cc29e0da3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2db64e117afc90e863053b3bc415f717e541f3bda8aa10738190c567a5a8483a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db64e117afc90e863053b3bc415f717e541f3bda8aa10738190c567a5a8483a->enter($__internal_2db64e117afc90e863053b3bc415f717e541f3bda8aa10738190c567a5a8483a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2db64e117afc90e863053b3bc415f717e541f3bda8aa10738190c567a5a8483a->leave($__internal_2db64e117afc90e863053b3bc415f717e541f3bda8aa10738190c567a5a8483a_prof);

        
        $__internal_1156fbab546c6de0c24e8216540431ff83ceb46b0cd9acb7f3517cc29e0da3bf->leave($__internal_1156fbab546c6de0c24e8216540431ff83ceb46b0cd9acb7f3517cc29e0da3bf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2dda3dffcab4f7fdd508e579387195f4bad6569c43af8db33e3f63348811d10a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dda3dffcab4f7fdd508e579387195f4bad6569c43af8db33e3f63348811d10a->enter($__internal_2dda3dffcab4f7fdd508e579387195f4bad6569c43af8db33e3f63348811d10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_24aa57ac8cbeca45ad73fae8d018210e211aff8c85df5f71bcf6e92d5d196eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24aa57ac8cbeca45ad73fae8d018210e211aff8c85df5f71bcf6e92d5d196eb1->enter($__internal_24aa57ac8cbeca45ad73fae8d018210e211aff8c85df5f71bcf6e92d5d196eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_24aa57ac8cbeca45ad73fae8d018210e211aff8c85df5f71bcf6e92d5d196eb1->leave($__internal_24aa57ac8cbeca45ad73fae8d018210e211aff8c85df5f71bcf6e92d5d196eb1_prof);

        
        $__internal_2dda3dffcab4f7fdd508e579387195f4bad6569c43af8db33e3f63348811d10a->leave($__internal_2dda3dffcab4f7fdd508e579387195f4bad6569c43af8db33e3f63348811d10a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_792aa1100b4f749516e199fb3b48ee1dfd5d4a613bf4d99fe9c1676bc5d8d4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792aa1100b4f749516e199fb3b48ee1dfd5d4a613bf4d99fe9c1676bc5d8d4e9->enter($__internal_792aa1100b4f749516e199fb3b48ee1dfd5d4a613bf4d99fe9c1676bc5d8d4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8f2ed72dec39b138d5694506e373cb24972556eb13b5328fdf301379898bdd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2ed72dec39b138d5694506e373cb24972556eb13b5328fdf301379898bdd3a->enter($__internal_8f2ed72dec39b138d5694506e373cb24972556eb13b5328fdf301379898bdd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8f2ed72dec39b138d5694506e373cb24972556eb13b5328fdf301379898bdd3a->leave($__internal_8f2ed72dec39b138d5694506e373cb24972556eb13b5328fdf301379898bdd3a_prof);

        
        $__internal_792aa1100b4f749516e199fb3b48ee1dfd5d4a613bf4d99fe9c1676bc5d8d4e9->leave($__internal_792aa1100b4f749516e199fb3b48ee1dfd5d4a613bf4d99fe9c1676bc5d8d4e9_prof);

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
