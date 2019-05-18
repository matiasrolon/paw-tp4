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
        $this->displayBlock('nav', $context, $blocks);
    }

    public function block_nav($context, array $blocks = array())
    {
        // line 2
        echo "    <ul>
        <li><a href=\"/\">Home</a></li>
        <li><a href=\"/about\">Sobre la pagina</a></li>
        <li>Admin Turnos
           <ul>
               <li><a href=\"/turnos\">ver Turnos</a></li>
                <li><a href=\"/turnos/create\">Crear Turnos</a></li>
                <li><a href=\"/turnos/delete\">Eliminar Turno</a></li>
                <li><a href=\"/turnos/modificar\">Modificar Turno</a></li>
           </ul>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "partials/nav.html";
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block nav %}
    <ul>
        <li><a href=\"/\">Home</a></li>
        <li><a href=\"/about\">Sobre la pagina</a></li>
        <li>Admin Turnos
           <ul>
               <li><a href=\"/turnos\">ver Turnos</a></li>
                <li><a href=\"/turnos/create\">Crear Turnos</a></li>
                <li><a href=\"/turnos/delete\">Eliminar Turno</a></li>
                <li><a href=\"/turnos/modificar\">Modificar Turno</a></li>
           </ul>
        </li>
    </ul>
{% endblock %}
", "partials/nav.html", "C:\\Users\\Maxi\\Downloads\\paw-tp4-master\\3\\app\\views\\partials\\nav.html");
    }
}
