<?php

/* turnos.html */
class __TwigTemplate_9b7288c1ae9231c5a87ddbd23ec76326543282f740011af9d7e32f4454ab01e1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "turnos.html", 1);
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
        echo "Lista de Turnos";
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
     <link href=\"public/style.css\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["diagnosticos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["diag"]) {
            // line 18
            echo "     <img src=\"data:image/png;base64,";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diag"], "diagnostico", array()), "html", null, true);
            echo "\">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
<div class=\"verTurnos\">
<h2>Turnos</h2>
<table>
";
        // line 24
        if (($context["turnos"] ?? null)) {
            // line 25
            echo "   <tr class=\"campos\">
        <td> id </td>
        <td> paciente </td>
        <td> email </td>
        <td> telefono </td>
        <td> edad </td>
        <td> talla_calzado</td>
        <td> altura </td>
        <td> fecha_nacimiento</td>
        <td> color_pelo </td>
        <td> fecha_turno </td>
        <td> hora_turno </td>
        <td> ficha </td>
        <td> Eliminación </td>
        <td>Modificación</td>
    </tr>
";
        }
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["turnos"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["turno"]) {
            // line 43
            echo "<tr>
    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "id", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "paciente", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "email", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "telefono", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "edad", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "talla_calzado", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "altura", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "fecha_nacimiento", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "color_pelo", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "fecha_turno", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "hora_turno", array()), "html", null, true);
            echo "</td>
    <td><a href=\"/turnos/ficha?id=";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "id", array()), "html", null, true);
            echo "\">  link </a> </td>
    <td><a href=\"/turnos/eliminar?id=";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "id", array()), "html", null, true);
            echo "\">  Eliminar </a> </td>
    <td><a href=\"/turnos/modificar?id=";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "id", array()), "html", null, true);
            echo "\">  Modificar </a> </td>
    
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "<span>No hay turnos registrados</span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['turno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "turnos.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 63,  178 => 61,  169 => 57,  165 => 56,  161 => 55,  157 => 54,  153 => 53,  149 => 52,  145 => 51,  141 => 50,  137 => 49,  133 => 48,  129 => 47,  125 => 46,  121 => 45,  117 => 44,  114 => 43,  109 => 42,  90 => 25,  88 => 24,  82 => 20,  73 => 18,  69 => 17,  66 => 16,  63 => 15,  54 => 10,  51 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block title %}Lista de Turnos{% endblock %}

{% block header %}
    {{ include('partials/nav.html') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
     <link href=\"public/style.css\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

{% block main %}

{% for diag in diagnosticos %}
     <img src=\"data:image/png;base64,{{diag.diagnostico}}\">
{% endfor %}

<div class=\"verTurnos\">
<h2>Turnos</h2>
<table>
{% if turnos %}
   <tr class=\"campos\">
        <td> id </td>
        <td> paciente </td>
        <td> email </td>
        <td> telefono </td>
        <td> edad </td>
        <td> talla_calzado</td>
        <td> altura </td>
        <td> fecha_nacimiento</td>
        <td> color_pelo </td>
        <td> fecha_turno </td>
        <td> hora_turno </td>
        <td> ficha </td>
        <td> Eliminación </td>
        <td>Modificación</td>
    </tr>
{% endif %}
{% for turno in turnos %}
<tr>
    <td>{{ turno.id }}</td>
    <td>{{ turno.paciente }}</td>
    <td>{{ turno.email }}</td>
    <td>{{ turno.telefono }}</td>
    <td>{{ turno.edad }}</td>
    <td>{{ turno.talla_calzado }}</td>
    <td>{{ turno.altura }}</td>
    <td>{{ turno.fecha_nacimiento }}</td>
    <td>{{ turno.color_pelo }}</td>
    <td>{{ turno.fecha_turno }}</td>
    <td>{{ turno.hora_turno }}</td>
    <td><a href=\"/turnos/ficha?id={{turno.id}}\">  link </a> </td>
    <td><a href=\"/turnos/eliminar?id={{turno.id}}\">  Eliminar </a> </td>
    <td><a href=\"/turnos/modificar?id={{turno.id}}\">  Modificar </a> </td>
    
</tr>
{% else %}
<span>No hay turnos registrados</span>
{% endfor %}
</table>
</div>
{% endblock %}
", "turnos.html", "C:\\Users\\Maxi\\Desktop\\6\\app\\views\\turnos.html");
    }
}
