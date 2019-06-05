<?php

/* partials/nav.html */
class __TwigTemplate_bbe4a72da1951c38efd61304b56a292c1648b28f164ba0c9e609b234455e055b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('nav', $context, $blocks);
    }

    public function block_nav($context, array $blocks = array())
    {
        // line 3
        echo "    <ul class=\"menu\">
        <li class=\"item_menu\"><a href=\"/\">Home</a></li>
        <li class=\"item_menu\"><a href=\"/turnos\">Turnos</a></li>
        <li class=\"item_menu\"><a href=\"/turnos/create\">Solicitar Turno</a></li>
         <li class=\"item_menu\"><a href=\"/about\">Sobre la pagina</a></li>
           
    </ul>
";
    }

    public function getTemplateName()
    {
        return "partials/nav.html";
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  27 => 2,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block nav %}
    <ul class=\"menu\">
        <li class=\"item_menu\"><a href=\"/\">Home</a></li>
        <li class=\"item_menu\"><a href=\"/turnos\">Turnos</a></li>
        <li class=\"item_menu\"><a href=\"/turnos/create\">Solicitar Turno</a></li>
         <li class=\"item_menu\"><a href=\"/about\">Sobre la pagina</a></li>
           
    </ul>
{% endblock %}
", "partials/nav.html", "C:\\Users\\Maxi\\Desktop\\6\\app\\views\\partials\\nav.html");
    }
}
