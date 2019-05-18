<?php

/* turnos.delete.html */
class __TwigTemplate_731ee2aaf806b1fa1ef0e0d0e5cb00df84b2378c226b55db5d5e5a8ab7fc39c3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "turnos.delete.html", 1);
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
        echo "Eliminar turno";
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
        echo "<h2>Turnos eliminar</h2>

<form action=\"/turnos/borrar\" method=\"POST\">
   <div class=\"field\">
        <label for=\"paciente\"> ID a eliminar:
            <input type=\"number\" name=\"id\" required >
        </label>
    </div>
    <input type=\"submit\" name=\"Enviar\">
</form>

<table>
<tr>
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
</tr>
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["turnos"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["turno"]) {
            // line 41
            echo "<tr>
    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "id", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "paciente", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "email", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "telefono", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "edad", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "talla_calzado", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "altura", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "fecha_nacimiento", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "color_pelo", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "fecha_turno", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "hora_turno", array()), "html", null, true);
            echo "</td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "<span>No hay turnos registrados</span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['turno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "turnos.delete.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 57,  148 => 55,  140 => 52,  136 => 51,  132 => 50,  128 => 49,  124 => 48,  120 => 47,  116 => 46,  112 => 45,  108 => 44,  104 => 43,  100 => 42,  97 => 41,  92 => 40,  65 => 15,  62 => 14,  54 => 10,  51 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block title %}Eliminar turno{% endblock %}

{% block header %}
    {{ include('partials/nav.html') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
{% endblock %}

{% block main %}
<h2>Turnos eliminar</h2>

<form action=\"/turnos/borrar\" method=\"POST\">
   <div class=\"field\">
        <label for=\"paciente\"> ID a eliminar:
            <input type=\"number\" name=\"id\" required >
        </label>
    </div>
    <input type=\"submit\" name=\"Enviar\">
</form>

<table>
<tr>
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
</tr>
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
</tr>
{% else %}
<span>No hay turnos registrados</span>
{% endfor %}
</table>
{% endblock %}
", "turnos.delete.html", "C:\\Users\\Maxi\\Downloads\\paw-tp4-master\\3\\app\\views\\turnos.delete.html");
    }
}
