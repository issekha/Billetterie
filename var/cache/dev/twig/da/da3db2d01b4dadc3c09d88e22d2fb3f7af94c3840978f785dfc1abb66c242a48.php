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
        $__internal_27fd7454e05dceb443b794107d56f56cf453c9fe135b971c708ca661a4d75aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27fd7454e05dceb443b794107d56f56cf453c9fe135b971c708ca661a4d75aba->enter($__internal_27fd7454e05dceb443b794107d56f56cf453c9fe135b971c708ca661a4d75aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5fb5a59a96dc6dafec8dba051a2f4ae14a8b634efadb9ba81845229d97fde8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb5a59a96dc6dafec8dba051a2f4ae14a8b634efadb9ba81845229d97fde8ed->enter($__internal_5fb5a59a96dc6dafec8dba051a2f4ae14a8b634efadb9ba81845229d97fde8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27fd7454e05dceb443b794107d56f56cf453c9fe135b971c708ca661a4d75aba->leave($__internal_27fd7454e05dceb443b794107d56f56cf453c9fe135b971c708ca661a4d75aba_prof);

        
        $__internal_5fb5a59a96dc6dafec8dba051a2f4ae14a8b634efadb9ba81845229d97fde8ed->leave($__internal_5fb5a59a96dc6dafec8dba051a2f4ae14a8b634efadb9ba81845229d97fde8ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_47b2a27e52e182d742f7f2248607540e4d5ed0819cdeac34a8eb007f7cbb9f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b2a27e52e182d742f7f2248607540e4d5ed0819cdeac34a8eb007f7cbb9f24->enter($__internal_47b2a27e52e182d742f7f2248607540e4d5ed0819cdeac34a8eb007f7cbb9f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7a0a135295b414302e02a7339ff48641fe43fac4667568c94b5594c35b9a654c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0a135295b414302e02a7339ff48641fe43fac4667568c94b5594c35b9a654c->enter($__internal_7a0a135295b414302e02a7339ff48641fe43fac4667568c94b5594c35b9a654c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7a0a135295b414302e02a7339ff48641fe43fac4667568c94b5594c35b9a654c->leave($__internal_7a0a135295b414302e02a7339ff48641fe43fac4667568c94b5594c35b9a654c_prof);

        
        $__internal_47b2a27e52e182d742f7f2248607540e4d5ed0819cdeac34a8eb007f7cbb9f24->leave($__internal_47b2a27e52e182d742f7f2248607540e4d5ed0819cdeac34a8eb007f7cbb9f24_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_96aa55bdb79e1e9f8755f9f8ed0ef36cf7167483f12ac9539ddc9131563dfeb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96aa55bdb79e1e9f8755f9f8ed0ef36cf7167483f12ac9539ddc9131563dfeb5->enter($__internal_96aa55bdb79e1e9f8755f9f8ed0ef36cf7167483f12ac9539ddc9131563dfeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7058da5b2766d8eb9892e8334ec5c2392a0aff664a4fbc6ed3eae280ce99fa67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7058da5b2766d8eb9892e8334ec5c2392a0aff664a4fbc6ed3eae280ce99fa67->enter($__internal_7058da5b2766d8eb9892e8334ec5c2392a0aff664a4fbc6ed3eae280ce99fa67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7058da5b2766d8eb9892e8334ec5c2392a0aff664a4fbc6ed3eae280ce99fa67->leave($__internal_7058da5b2766d8eb9892e8334ec5c2392a0aff664a4fbc6ed3eae280ce99fa67_prof);

        
        $__internal_96aa55bdb79e1e9f8755f9f8ed0ef36cf7167483f12ac9539ddc9131563dfeb5->leave($__internal_96aa55bdb79e1e9f8755f9f8ed0ef36cf7167483f12ac9539ddc9131563dfeb5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_53926f77d07fcc210db50527a65191152344d3b52a9b13b458b1a928ffd9dcd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53926f77d07fcc210db50527a65191152344d3b52a9b13b458b1a928ffd9dcd0->enter($__internal_53926f77d07fcc210db50527a65191152344d3b52a9b13b458b1a928ffd9dcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a94ce7333a6ef2ef8e5065a7d1cded6a8e32074c021a614672a9bc283ac27013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94ce7333a6ef2ef8e5065a7d1cded6a8e32074c021a614672a9bc283ac27013->enter($__internal_a94ce7333a6ef2ef8e5065a7d1cded6a8e32074c021a614672a9bc283ac27013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a94ce7333a6ef2ef8e5065a7d1cded6a8e32074c021a614672a9bc283ac27013->leave($__internal_a94ce7333a6ef2ef8e5065a7d1cded6a8e32074c021a614672a9bc283ac27013_prof);

        
        $__internal_53926f77d07fcc210db50527a65191152344d3b52a9b13b458b1a928ffd9dcd0->leave($__internal_53926f77d07fcc210db50527a65191152344d3b52a9b13b458b1a928ffd9dcd0_prof);

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
