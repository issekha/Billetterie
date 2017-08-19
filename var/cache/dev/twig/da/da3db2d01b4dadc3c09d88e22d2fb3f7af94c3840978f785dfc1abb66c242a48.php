<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_44b814acee18a20fa813f5b47a7edc272c237f0d3094c8f2c37c3ba7b1319eb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_221a602d70d8e025b852091e7b7c9556dea98c0382571ccb1a73a24ae702dce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221a602d70d8e025b852091e7b7c9556dea98c0382571ccb1a73a24ae702dce3->enter($__internal_221a602d70d8e025b852091e7b7c9556dea98c0382571ccb1a73a24ae702dce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6dfe3d973c5f9a858f195adf70bf4ce6e1df268ca8dc6278f80e855a75bee1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dfe3d973c5f9a858f195adf70bf4ce6e1df268ca8dc6278f80e855a75bee1e5->enter($__internal_6dfe3d973c5f9a858f195adf70bf4ce6e1df268ca8dc6278f80e855a75bee1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_221a602d70d8e025b852091e7b7c9556dea98c0382571ccb1a73a24ae702dce3->leave($__internal_221a602d70d8e025b852091e7b7c9556dea98c0382571ccb1a73a24ae702dce3_prof);

        
        $__internal_6dfe3d973c5f9a858f195adf70bf4ce6e1df268ca8dc6278f80e855a75bee1e5->leave($__internal_6dfe3d973c5f9a858f195adf70bf4ce6e1df268ca8dc6278f80e855a75bee1e5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38d9f65f804a0e80158c409531de746a387153253908b4fa5b0dc87488b5fc39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d9f65f804a0e80158c409531de746a387153253908b4fa5b0dc87488b5fc39->enter($__internal_38d9f65f804a0e80158c409531de746a387153253908b4fa5b0dc87488b5fc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e8a5229e8f6972fd3a9f23d2caaeaf0a9b4d5caf4901f9dd36eddd9687d755f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a5229e8f6972fd3a9f23d2caaeaf0a9b4d5caf4901f9dd36eddd9687d755f4->enter($__internal_e8a5229e8f6972fd3a9f23d2caaeaf0a9b4d5caf4901f9dd36eddd9687d755f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e8a5229e8f6972fd3a9f23d2caaeaf0a9b4d5caf4901f9dd36eddd9687d755f4->leave($__internal_e8a5229e8f6972fd3a9f23d2caaeaf0a9b4d5caf4901f9dd36eddd9687d755f4_prof);

        
        $__internal_38d9f65f804a0e80158c409531de746a387153253908b4fa5b0dc87488b5fc39->leave($__internal_38d9f65f804a0e80158c409531de746a387153253908b4fa5b0dc87488b5fc39_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d56d53223d93eb3e596d4902b16dab9637aa986b0d164a6c08172f98d77be4df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56d53223d93eb3e596d4902b16dab9637aa986b0d164a6c08172f98d77be4df->enter($__internal_d56d53223d93eb3e596d4902b16dab9637aa986b0d164a6c08172f98d77be4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_36feab5e00a1d2f435ef72d358f044c6d664b53366d33c3cb8ba2d2ff85a7ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36feab5e00a1d2f435ef72d358f044c6d664b53366d33c3cb8ba2d2ff85a7ed5->enter($__internal_36feab5e00a1d2f435ef72d358f044c6d664b53366d33c3cb8ba2d2ff85a7ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_36feab5e00a1d2f435ef72d358f044c6d664b53366d33c3cb8ba2d2ff85a7ed5->leave($__internal_36feab5e00a1d2f435ef72d358f044c6d664b53366d33c3cb8ba2d2ff85a7ed5_prof);

        
        $__internal_d56d53223d93eb3e596d4902b16dab9637aa986b0d164a6c08172f98d77be4df->leave($__internal_d56d53223d93eb3e596d4902b16dab9637aa986b0d164a6c08172f98d77be4df_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_59291890a68dbc81241c80fb7a556c1c42fc6189d268c3eac9da8f92dd4fad38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59291890a68dbc81241c80fb7a556c1c42fc6189d268c3eac9da8f92dd4fad38->enter($__internal_59291890a68dbc81241c80fb7a556c1c42fc6189d268c3eac9da8f92dd4fad38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9bc45c9ebcb661c0b7b760b4c51f26e42d9f50a38cb0465c100f07b57d3769d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9bc45c9ebcb661c0b7b760b4c51f26e42d9f50a38cb0465c100f07b57d3769d->enter($__internal_b9bc45c9ebcb661c0b7b760b4c51f26e42d9f50a38cb0465c100f07b57d3769d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b9bc45c9ebcb661c0b7b760b4c51f26e42d9f50a38cb0465c100f07b57d3769d->leave($__internal_b9bc45c9ebcb661c0b7b760b4c51f26e42d9f50a38cb0465c100f07b57d3769d_prof);

        
        $__internal_59291890a68dbc81241c80fb7a556c1c42fc6189d268c3eac9da8f92dd4fad38->leave($__internal_59291890a68dbc81241c80fb7a556c1c42fc6189d268c3eac9da8f92dd4fad38_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Billetterie\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
