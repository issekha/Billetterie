<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_93b21a747fbd9b8a9dcecf9988d0b78ca01ed8081878e165b7d55a02e159bfd4 extends Twig_Template
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
        $__internal_3fd3f94d90ef00417a6f5a105e41fe31c6e0ebf43db69a6a159488dcb288bb90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd3f94d90ef00417a6f5a105e41fe31c6e0ebf43db69a6a159488dcb288bb90->enter($__internal_3fd3f94d90ef00417a6f5a105e41fe31c6e0ebf43db69a6a159488dcb288bb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_df8b2e2785d349a80f166fa8aae6d2b98eb2d98e05c3173a536a433b1bb19475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8b2e2785d349a80f166fa8aae6d2b98eb2d98e05c3173a536a433b1bb19475->enter($__internal_df8b2e2785d349a80f166fa8aae6d2b98eb2d98e05c3173a536a433b1bb19475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_3fd3f94d90ef00417a6f5a105e41fe31c6e0ebf43db69a6a159488dcb288bb90->leave($__internal_3fd3f94d90ef00417a6f5a105e41fe31c6e0ebf43db69a6a159488dcb288bb90_prof);

        
        $__internal_df8b2e2785d349a80f166fa8aae6d2b98eb2d98e05c3173a536a433b1bb19475->leave($__internal_df8b2e2785d349a80f166fa8aae6d2b98eb2d98e05c3173a536a433b1bb19475_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\Billetterie\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
