<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b3e431b273a7a606642996a29d9054426547fde99bb3f83f9fd43e30fcc79afb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7044f747f2b27c8d55725c9ef24a3f2aebceb18043ca00f4688ee81b8305c0a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7044f747f2b27c8d55725c9ef24a3f2aebceb18043ca00f4688ee81b8305c0a9->enter($__internal_7044f747f2b27c8d55725c9ef24a3f2aebceb18043ca00f4688ee81b8305c0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_9f4ea1ab1ec5a38d2b7863dfa1eca17e07895a2a5a11b7589129c4fb0afb3598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4ea1ab1ec5a38d2b7863dfa1eca17e07895a2a5a11b7589129c4fb0afb3598->enter($__internal_9f4ea1ab1ec5a38d2b7863dfa1eca17e07895a2a5a11b7589129c4fb0afb3598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7044f747f2b27c8d55725c9ef24a3f2aebceb18043ca00f4688ee81b8305c0a9->leave($__internal_7044f747f2b27c8d55725c9ef24a3f2aebceb18043ca00f4688ee81b8305c0a9_prof);

        
        $__internal_9f4ea1ab1ec5a38d2b7863dfa1eca17e07895a2a5a11b7589129c4fb0afb3598->leave($__internal_9f4ea1ab1ec5a38d2b7863dfa1eca17e07895a2a5a11b7589129c4fb0afb3598_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\Billetterie\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
