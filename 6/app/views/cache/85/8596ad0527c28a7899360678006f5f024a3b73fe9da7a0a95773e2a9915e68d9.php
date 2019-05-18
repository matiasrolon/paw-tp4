<?php

/* turnoReservado.html */
class __TwigTemplate_92051c49a20e3c250b8ff8bf0d370d3f61e62539e56aab0b1cabf260d5b96807 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "turnoReservado.html", 1);
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
";
    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        // line 15
        echo "<h2>Turno reservado: </h2>

 <div class=\"turno\">
   <div class=\"field\">
        <label> 
           <b>Paciente:</b>
            ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "paciente", array()), "html", null, true);
        echo "
        </label>
    </div>
    <div class=\"field\">
        <label>  <b> tel: </b>
            ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "telefono", array()), "html", null, true);
        echo "
        </label>
    </div>
    <div class=\"field\">
        <label>  <b> email: </b>
        ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "email", array()), "html", null, true);
        echo "
        </label>
    </div>
    <div class=\"field\">
        <label>  <b> edad: </b>
            ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "edad", array()), "html", null, true);
        echo "
        </label>
    </div>
    <div class=\"field\">
        <label>  <b> talla de calzado: </b>
        ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "talla_calzado", array()), "html", null, true);
        echo "
        </label>
    </div>
    <div class=\"field\">
        <label>  <b> altura: </b>
        ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "altura", array()), "html", null, true);
        echo "
        </label>
    </div>
    <div class=\"field\">
        <label>  <b> Fecha de Nacimiento: </b>
        ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "fecha_nacimiento", array()), "html", null, true);
        echo "
        </label>
    </div>
    <div class=\"field\">
        <label>  <b> Color de pelo: </b>
        ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "color_pelo", array()), "html", null, true);
        echo "
        </label>
    </div>
    <div class=\"field\">
        <label> <b> fecha del turno: </b>
                    ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "fecha_turno", array()), "html", null, true);
        echo "
        </label>
    </div>
    <div class=\"field\">
        <label>  <b> hora del turno: </b>
                ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "hora_turno", array()), "html", null, true);
        echo "
        </label>
    </div>
</div>    
<h3>Gracias por atenderse con nosotros. </h3>

";
    }

    public function getTemplateName()
    {
        return "turnoReservado.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 66,  137 => 61,  129 => 56,  121 => 51,  113 => 46,  105 => 41,  97 => 36,  89 => 31,  81 => 26,  73 => 21,  65 => 15,  62 => 14,  54 => 10,  51 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
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
{% endblock %}

{% block main %}
<h2>Turno reservado: </h2>

 <div class=\"turno\">
   <div class=\"field\">
        <label> 
           <b>Paciente:</b>
            {{turnoX.paciente}}
        </label>
    </div>
    <div class=\"field\">
        <label>  <b> tel: </b>
            {{turnoX.telefono}}
        </label>
    </div>
    <div class=\"field\">
        <label>  <b> email: </b>
        {{turnoX.email}}
        </label>
    </div>
    <div class=\"field\">
        <label>  <b> edad: </b>
            {{turnoX.edad}}
        </label>
    </div>
    <div class=\"field\">
        <label>  <b> talla de calzado: </b>
        {{turnoX.talla_calzado}}
        </label>
    </div>
    <div class=\"field\">
        <label>  <b> altura: </b>
        {{turnoX.altura}}
        </label>
    </div>
    <div class=\"field\">
        <label>  <b> Fecha de Nacimiento: </b>
        {{turnoX.fecha_nacimiento}}
        </label>
    </div>
    <div class=\"field\">
        <label>  <b> Color de pelo: </b>
        {{turnoX.color_pelo}}
        </label>
    </div>
    <div class=\"field\">
        <label> <b> fecha del turno: </b>
                    {{turnoX.fecha_turno}}
        </label>
    </div>
    <div class=\"field\">
        <label>  <b> hora del turno: </b>
                {{turnoX.hora_turno}}
        </label>
    </div>
</div>    
<h3>Gracias por atenderse con nosotros. </h3>

{% endblock %}", "turnoReservado.html", "C:\\Users\\Maxi\\Downloads\\paw-tp4-master\\3\\app\\views\\turnoReservado.html");
    }
}
