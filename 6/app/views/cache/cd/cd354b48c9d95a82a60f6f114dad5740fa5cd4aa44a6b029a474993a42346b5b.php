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
        echo "Lista de Tareas";
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
        echo "<h2>Turnos</h2>
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
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["turnos"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["turno"]) {
            // line 31
            echo "<tr>
    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "id", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "paciente", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "email", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "telefono", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "edad", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "talla_calzado", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "altura", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "fecha_nacimiento", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "color_pelo", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "fecha_turno", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "hora_turno", array()), "html", null, true);
            echo "</td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "<span>No hay turnos registrados</span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['turno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</table>
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
        return array (  145 => 47,  138 => 45,  130 => 42,  126 => 41,  122 => 40,  118 => 39,  114 => 38,  110 => 37,  106 => 36,  102 => 35,  98 => 34,  94 => 33,  90 => 32,  87 => 31,  82 => 30,  65 => 15,  62 => 14,  54 => 10,  51 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block title %}Lista de Tareas{% endblock %}

{% block header %}
    {{ include('partials/nav.html') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
{% endblock %}

{% block main %}
<h2>Turnos</h2>
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
", "turnos.html", "C:\\Users\\Maxi\\Downloads\\paw-tp4-master\\3\\app\\views\\turnos.html");
    }
}
