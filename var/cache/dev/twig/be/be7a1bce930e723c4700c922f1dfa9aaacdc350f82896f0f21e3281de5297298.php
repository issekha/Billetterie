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
        $__internal_71de11075a5899a0af6b2c3bb1ec8fd68f8c96c2e5073dd79e2c18e7634ccd48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71de11075a5899a0af6b2c3bb1ec8fd68f8c96c2e5073dd79e2c18e7634ccd48->enter($__internal_71de11075a5899a0af6b2c3bb1ec8fd68f8c96c2e5073dd79e2c18e7634ccd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_00c8d92e62e0838f36705874618d0314ee8048d78fa3b0a0ed536ee8c346d04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c8d92e62e0838f36705874618d0314ee8048d78fa3b0a0ed536ee8c346d04b->enter($__internal_00c8d92e62e0838f36705874618d0314ee8048d78fa3b0a0ed536ee8c346d04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71de11075a5899a0af6b2c3bb1ec8fd68f8c96c2e5073dd79e2c18e7634ccd48->leave($__internal_71de11075a5899a0af6b2c3bb1ec8fd68f8c96c2e5073dd79e2c18e7634ccd48_prof);

        
        $__internal_00c8d92e62e0838f36705874618d0314ee8048d78fa3b0a0ed536ee8c346d04b->leave($__internal_00c8d92e62e0838f36705874618d0314ee8048d78fa3b0a0ed536ee8c346d04b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b0e53ea32de8e21a6affd956b294eee30b41f4c0e1fc813cceebe26ad795401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0e53ea32de8e21a6affd956b294eee30b41f4c0e1fc813cceebe26ad795401->enter($__internal_9b0e53ea32de8e21a6affd956b294eee30b41f4c0e1fc813cceebe26ad795401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8cc806bc02af110add2c8e4fc6406ebcba5b60dedf97baa01912153085d7eaba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc806bc02af110add2c8e4fc6406ebcba5b60dedf97baa01912153085d7eaba->enter($__internal_8cc806bc02af110add2c8e4fc6406ebcba5b60dedf97baa01912153085d7eaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8cc806bc02af110add2c8e4fc6406ebcba5b60dedf97baa01912153085d7eaba->leave($__internal_8cc806bc02af110add2c8e4fc6406ebcba5b60dedf97baa01912153085d7eaba_prof);

        
        $__internal_9b0e53ea32de8e21a6affd956b294eee30b41f4c0e1fc813cceebe26ad795401->leave($__internal_9b0e53ea32de8e21a6affd956b294eee30b41f4c0e1fc813cceebe26ad795401_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ced9f5e096dfde996daa4777fa92b13063ac6aab0c307cfa9e42b42147ab5696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced9f5e096dfde996daa4777fa92b13063ac6aab0c307cfa9e42b42147ab5696->enter($__internal_ced9f5e096dfde996daa4777fa92b13063ac6aab0c307cfa9e42b42147ab5696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6194945072f3231be42aed5f73ec92f071fa2c5eefd206a2656ce7868cfb1fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6194945072f3231be42aed5f73ec92f071fa2c5eefd206a2656ce7868cfb1fb5->enter($__internal_6194945072f3231be42aed5f73ec92f071fa2c5eefd206a2656ce7868cfb1fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6194945072f3231be42aed5f73ec92f071fa2c5eefd206a2656ce7868cfb1fb5->leave($__internal_6194945072f3231be42aed5f73ec92f071fa2c5eefd206a2656ce7868cfb1fb5_prof);

        
        $__internal_ced9f5e096dfde996daa4777fa92b13063ac6aab0c307cfa9e42b42147ab5696->leave($__internal_ced9f5e096dfde996daa4777fa92b13063ac6aab0c307cfa9e42b42147ab5696_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7624aa11e54a43b608ca70812b7c7f2545b667047372cc5349776a8d66ec593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7624aa11e54a43b608ca70812b7c7f2545b667047372cc5349776a8d66ec593->enter($__internal_c7624aa11e54a43b608ca70812b7c7f2545b667047372cc5349776a8d66ec593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_41b85c8019d86cd044154708e273410a88dd6f7b36c76d68553b4c8d33fe2a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b85c8019d86cd044154708e273410a88dd6f7b36c76d68553b4c8d33fe2a35->enter($__internal_41b85c8019d86cd044154708e273410a88dd6f7b36c76d68553b4c8d33fe2a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_41b85c8019d86cd044154708e273410a88dd6f7b36c76d68553b4c8d33fe2a35->leave($__internal_41b85c8019d86cd044154708e273410a88dd6f7b36c76d68553b4c8d33fe2a35_prof);

        
        $__internal_c7624aa11e54a43b608ca70812b7c7f2545b667047372cc5349776a8d66ec593->leave($__internal_c7624aa11e54a43b608ca70812b7c7f2545b667047372cc5349776a8d66ec593_prof);

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
