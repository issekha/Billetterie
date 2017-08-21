<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_eb7bdbf1eee789fdf65300a23e06e5e6fdf3101e22609929a23d7d1b337c0665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7870b0493b4c3d25d5ccb1ede2863e9cb225c2a0edd51f86622478117f146701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7870b0493b4c3d25d5ccb1ede2863e9cb225c2a0edd51f86622478117f146701->enter($__internal_7870b0493b4c3d25d5ccb1ede2863e9cb225c2a0edd51f86622478117f146701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_39aafb9490bca66347fc1fa0120b4a203a4a5f14d97ae70937d3d6caf9ba09b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39aafb9490bca66347fc1fa0120b4a203a4a5f14d97ae70937d3d6caf9ba09b7->enter($__internal_39aafb9490bca66347fc1fa0120b4a203a4a5f14d97ae70937d3d6caf9ba09b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7870b0493b4c3d25d5ccb1ede2863e9cb225c2a0edd51f86622478117f146701->leave($__internal_7870b0493b4c3d25d5ccb1ede2863e9cb225c2a0edd51f86622478117f146701_prof);

        
        $__internal_39aafb9490bca66347fc1fa0120b4a203a4a5f14d97ae70937d3d6caf9ba09b7->leave($__internal_39aafb9490bca66347fc1fa0120b4a203a4a5f14d97ae70937d3d6caf9ba09b7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6a95764ba4479964414546199990750529c976a16b97f685fb91ba4fa0e536ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a95764ba4479964414546199990750529c976a16b97f685fb91ba4fa0e536ba->enter($__internal_6a95764ba4479964414546199990750529c976a16b97f685fb91ba4fa0e536ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_df5e7b72790db6c91c3a6df20904d93aba4d463071dce00e348970464ebb03d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5e7b72790db6c91c3a6df20904d93aba4d463071dce00e348970464ebb03d2->enter($__internal_df5e7b72790db6c91c3a6df20904d93aba4d463071dce00e348970464ebb03d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_df5e7b72790db6c91c3a6df20904d93aba4d463071dce00e348970464ebb03d2->leave($__internal_df5e7b72790db6c91c3a6df20904d93aba4d463071dce00e348970464ebb03d2_prof);

        
        $__internal_6a95764ba4479964414546199990750529c976a16b97f685fb91ba4fa0e536ba->leave($__internal_6a95764ba4479964414546199990750529c976a16b97f685fb91ba4fa0e536ba_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Billetterie\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
