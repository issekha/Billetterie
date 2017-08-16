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
        $__internal_876b772668f8d1eee6feecd99cd4e04ff3aa284522b1294f3bf3c6bde3b9f7b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876b772668f8d1eee6feecd99cd4e04ff3aa284522b1294f3bf3c6bde3b9f7b6->enter($__internal_876b772668f8d1eee6feecd99cd4e04ff3aa284522b1294f3bf3c6bde3b9f7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4135da0d44857a4c6f9354b766023c2fd8aa17813f41a9301e958c8fd6a56cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4135da0d44857a4c6f9354b766023c2fd8aa17813f41a9301e958c8fd6a56cd7->enter($__internal_4135da0d44857a4c6f9354b766023c2fd8aa17813f41a9301e958c8fd6a56cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_876b772668f8d1eee6feecd99cd4e04ff3aa284522b1294f3bf3c6bde3b9f7b6->leave($__internal_876b772668f8d1eee6feecd99cd4e04ff3aa284522b1294f3bf3c6bde3b9f7b6_prof);

        
        $__internal_4135da0d44857a4c6f9354b766023c2fd8aa17813f41a9301e958c8fd6a56cd7->leave($__internal_4135da0d44857a4c6f9354b766023c2fd8aa17813f41a9301e958c8fd6a56cd7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_35dd2f55015efb5befb764d641eb59e5c71d13ebfeb4907bb5c063e927ca591a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35dd2f55015efb5befb764d641eb59e5c71d13ebfeb4907bb5c063e927ca591a->enter($__internal_35dd2f55015efb5befb764d641eb59e5c71d13ebfeb4907bb5c063e927ca591a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_158a656ac879b414ef2b299197964cf5a8a256885f8ac39db16137c005d3f6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158a656ac879b414ef2b299197964cf5a8a256885f8ac39db16137c005d3f6ff->enter($__internal_158a656ac879b414ef2b299197964cf5a8a256885f8ac39db16137c005d3f6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_158a656ac879b414ef2b299197964cf5a8a256885f8ac39db16137c005d3f6ff->leave($__internal_158a656ac879b414ef2b299197964cf5a8a256885f8ac39db16137c005d3f6ff_prof);

        
        $__internal_35dd2f55015efb5befb764d641eb59e5c71d13ebfeb4907bb5c063e927ca591a->leave($__internal_35dd2f55015efb5befb764d641eb59e5c71d13ebfeb4907bb5c063e927ca591a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5d66fa8bfebedea6a4f969d8eed115d910a229b0a6f75811ba5b587d786fea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d66fa8bfebedea6a4f969d8eed115d910a229b0a6f75811ba5b587d786fea3->enter($__internal_b5d66fa8bfebedea6a4f969d8eed115d910a229b0a6f75811ba5b587d786fea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77cc1dc081ac4d799aefde10e4795b2b8835e2be1a88a225941da1b16ff00ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cc1dc081ac4d799aefde10e4795b2b8835e2be1a88a225941da1b16ff00ab1->enter($__internal_77cc1dc081ac4d799aefde10e4795b2b8835e2be1a88a225941da1b16ff00ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_77cc1dc081ac4d799aefde10e4795b2b8835e2be1a88a225941da1b16ff00ab1->leave($__internal_77cc1dc081ac4d799aefde10e4795b2b8835e2be1a88a225941da1b16ff00ab1_prof);

        
        $__internal_b5d66fa8bfebedea6a4f969d8eed115d910a229b0a6f75811ba5b587d786fea3->leave($__internal_b5d66fa8bfebedea6a4f969d8eed115d910a229b0a6f75811ba5b587d786fea3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2187970d6ba03d534de5682eb39d95f7c5e78714257f98e1b6a5fbc17ae7f472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2187970d6ba03d534de5682eb39d95f7c5e78714257f98e1b6a5fbc17ae7f472->enter($__internal_2187970d6ba03d534de5682eb39d95f7c5e78714257f98e1b6a5fbc17ae7f472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9dabac4691d931f239b124c3189208094187fad448c08b309b37007ccf197860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dabac4691d931f239b124c3189208094187fad448c08b309b37007ccf197860->enter($__internal_9dabac4691d931f239b124c3189208094187fad448c08b309b37007ccf197860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9dabac4691d931f239b124c3189208094187fad448c08b309b37007ccf197860->leave($__internal_9dabac4691d931f239b124c3189208094187fad448c08b309b37007ccf197860_prof);

        
        $__internal_2187970d6ba03d534de5682eb39d95f7c5e78714257f98e1b6a5fbc17ae7f472->leave($__internal_2187970d6ba03d534de5682eb39d95f7c5e78714257f98e1b6a5fbc17ae7f472_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\try\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
