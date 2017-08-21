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
        $__internal_e77c71dfca62eaea515c57749e767653c048c6b4112cf2f2dbdce007c1657b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77c71dfca62eaea515c57749e767653c048c6b4112cf2f2dbdce007c1657b3f->enter($__internal_e77c71dfca62eaea515c57749e767653c048c6b4112cf2f2dbdce007c1657b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3085476d7d9eee125fb793192a864c0f8837402bd36053f5cfd2a7bc30c3878d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3085476d7d9eee125fb793192a864c0f8837402bd36053f5cfd2a7bc30c3878d->enter($__internal_3085476d7d9eee125fb793192a864c0f8837402bd36053f5cfd2a7bc30c3878d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e77c71dfca62eaea515c57749e767653c048c6b4112cf2f2dbdce007c1657b3f->leave($__internal_e77c71dfca62eaea515c57749e767653c048c6b4112cf2f2dbdce007c1657b3f_prof);

        
        $__internal_3085476d7d9eee125fb793192a864c0f8837402bd36053f5cfd2a7bc30c3878d->leave($__internal_3085476d7d9eee125fb793192a864c0f8837402bd36053f5cfd2a7bc30c3878d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f60485dc64ef38ded5387b86e6a96a46c518bffca74767647ab92e5af4116b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60485dc64ef38ded5387b86e6a96a46c518bffca74767647ab92e5af4116b46->enter($__internal_f60485dc64ef38ded5387b86e6a96a46c518bffca74767647ab92e5af4116b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_04d3b3a4366a79ca745916208eab909016ef7aec7d62433f4cb524192b89d9ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d3b3a4366a79ca745916208eab909016ef7aec7d62433f4cb524192b89d9ba->enter($__internal_04d3b3a4366a79ca745916208eab909016ef7aec7d62433f4cb524192b89d9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_04d3b3a4366a79ca745916208eab909016ef7aec7d62433f4cb524192b89d9ba->leave($__internal_04d3b3a4366a79ca745916208eab909016ef7aec7d62433f4cb524192b89d9ba_prof);

        
        $__internal_f60485dc64ef38ded5387b86e6a96a46c518bffca74767647ab92e5af4116b46->leave($__internal_f60485dc64ef38ded5387b86e6a96a46c518bffca74767647ab92e5af4116b46_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dbf41603e6b07fe0f6a9e0199bb4e5cb37c8cf6ec5e89c9391f87ec078083ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf41603e6b07fe0f6a9e0199bb4e5cb37c8cf6ec5e89c9391f87ec078083ddf->enter($__internal_dbf41603e6b07fe0f6a9e0199bb4e5cb37c8cf6ec5e89c9391f87ec078083ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_029f5defdc103855a1cf3889b2bb63c7473d6d5412fbcbdf4d7771c3b5f8ec17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029f5defdc103855a1cf3889b2bb63c7473d6d5412fbcbdf4d7771c3b5f8ec17->enter($__internal_029f5defdc103855a1cf3889b2bb63c7473d6d5412fbcbdf4d7771c3b5f8ec17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_029f5defdc103855a1cf3889b2bb63c7473d6d5412fbcbdf4d7771c3b5f8ec17->leave($__internal_029f5defdc103855a1cf3889b2bb63c7473d6d5412fbcbdf4d7771c3b5f8ec17_prof);

        
        $__internal_dbf41603e6b07fe0f6a9e0199bb4e5cb37c8cf6ec5e89c9391f87ec078083ddf->leave($__internal_dbf41603e6b07fe0f6a9e0199bb4e5cb37c8cf6ec5e89c9391f87ec078083ddf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_857e6f617c7f0c957316be3e74ead32580905b12af2a664548e7c91c8d0eb5b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857e6f617c7f0c957316be3e74ead32580905b12af2a664548e7c91c8d0eb5b7->enter($__internal_857e6f617c7f0c957316be3e74ead32580905b12af2a664548e7c91c8d0eb5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4189bc76978d6c1a0a0527c1dff3cbc031a5fd1260d33cce6559ad5a09e0dac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4189bc76978d6c1a0a0527c1dff3cbc031a5fd1260d33cce6559ad5a09e0dac4->enter($__internal_4189bc76978d6c1a0a0527c1dff3cbc031a5fd1260d33cce6559ad5a09e0dac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4189bc76978d6c1a0a0527c1dff3cbc031a5fd1260d33cce6559ad5a09e0dac4->leave($__internal_4189bc76978d6c1a0a0527c1dff3cbc031a5fd1260d33cce6559ad5a09e0dac4_prof);

        
        $__internal_857e6f617c7f0c957316be3e74ead32580905b12af2a664548e7c91c8d0eb5b7->leave($__internal_857e6f617c7f0c957316be3e74ead32580905b12af2a664548e7c91c8d0eb5b7_prof);

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
