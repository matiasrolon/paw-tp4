<?php

/* camposErroneos.html */
class __TwigTemplate_757bdfc468fabe6fcc35af2742585d67316d7f96dfbb01df03e954a38935f45a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "camposErroneos.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'head' => array($this, 'block_head'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Turno Reservado";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "partials/nav.html");
        echo "
";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
    <link href=\"public/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
";
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "<h2>Turno NO reservado</h2>
<h3>Los siguientes campos son erroneos: ";
        // line 17
        echo twig_escape_filter($this->env, ($context["errores"] ?? null), "html", null, true);
        echo " </h3>

";
    }

    public function getTemplateName()
    {
        return "camposErroneos.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  66 => 16,  63 => 15,  54 => 10,  51 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block title %}Turno Reservado{% endblock %}

{% block header %}
    {{ include('partials/nav.html') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
    <link href=\"public/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}

{% block main %}
<h2>Turno NO reservado</h2>
<h3>Los siguientes campos son erroneos: {{ errores }} </h3>

{% endblock %}", "camposErroneos.html", "C:\\Users\\Maxi\\Downloads\\paw-tp4-master\\3\\app\\views\\camposErroneos.html");
    }
}
