<?php

/* index.html */
class __TwigTemplate_c46ab31beca99da74ea3202ea2c353a38e43691388ce6d6894d75c4fba6568c5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "index.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
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
        echo "Home";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
";
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        echo twig_include($this->env, $context, "partials/nav.html");
        echo "
";
    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"home\">
    <h1 class=\"presentacion\"> Punto 6 de TP4</h1>
    <h2 class=\"presentacion\"> PAW 2018  ( UNLu )</h2>
</div>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  62 => 14,  55 => 11,  52 => 10,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block title %}Home{% endblock %}

{% block head %}
    {{ parent() }}
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
{% endblock %}

{% block header %}
    {{ include('partials/nav.html') }}
{% endblock %}

{% block main %}
<div class=\"home\">
    <h1 class=\"presentacion\"> Punto 6 de TP4</h1>
    <h2 class=\"presentacion\"> PAW 2018  ( UNLu )</h2>
</div>
{% endblock %}

", "index.html", "C:\\Users\\Maxi\\Desktop\\6\\app\\views\\index.html");
    }
}
