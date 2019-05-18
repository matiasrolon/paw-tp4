<?php

/* turnos.modificar.html */
class __TwigTemplate_6ec57d7621c2fed1b4c0c3092f425686c4567e8e4fa9ed57ff03b93228747ca2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "turnos.modificar.html", 1);
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
        echo "<h2>Turnos modificar</h2>
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

<form action=\"/turnos/validateCambio\" method=\"POST\">
   <div class=\"field\">
        <label for=\"id\"> ID de turno a modificar:
            <input type=\"number\" name=\"id\" required >
        </label>
    <div class=\"field\">
        <label for=\"paciente\"> Nombre paciente:
            <input type=\"text\" name=\"paciente\" required >
        </label>
    </div>
    <div class=\"field\">
        <label for=\"email\">   email:
            <input type=\"email\" name=\"email\" required >
        </label>
    </div>
    <div class=\"field\">
        <label for=\"telefono\">   telefono:
            <input type=\"text\" name=\"telefono\" required >
        </label>
    </div>
    
      <div class=\"field\">
        <label for=\"edad\" >Edad: 
            <input name=\"edad\" type=\"number\" min=0 max=130>
        </label>
      </div>
      <div class=\"field\">
        <label for=\"talla_calzado\" >Talla de calzado: 
                <input name=\"talla_calzado\" type=\"number\" min=20 max=50>
        </label>
      </div>
      <div class=\"field\">
        <label for=\"altura\" >Altura: 
            <input name=\"altura\" type=\"number\">
        </label>
      </div>
      <div class=\"field\">
        <label for=\"fecha_nacimiento\">fecha de nacimiento: 
            <input name=\"fecha_nacimiento\" type=\"date\" required=\"required\">
        </label>
      </div>
      <div class=\"field\">
        <label for=\"color_pelo\" >Color de pelo: 
            <select name=\"color_pelo\">
              <option  value=\"marron\">Marrón</option>
              <option  value=\"negro\">Negro</option>
              <option  value=\"amarillo\">Amarillo</option>
              <option  value=\"rojo\">Rojo</option>
              <option  value=\"calvo\">Calvo</option>
            </select>
        </label>
      </div>
    
    <div class=\"field\">
        <label for=\"fecha_turno\"> fecha:
            <input type=\"date\" name=\"fecha_turno\" required >
        </label>
    </div>
    <div class=\"field\">
        <label for=\"hora_turno\">   hora:
            <input type=\"time\" name=\"hora_turno\" >
        </label>
    </div> 
    </div>
    <input type=\"submit\" name=\"Enviar\">
</form>


";
    }

    public function getTemplateName()
    {
        return "turnos.modificar.html";
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

{% block title %}Eliminar turno{% endblock %}

{% block header %}
    {{ include('partials/nav.html') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
{% endblock %}

{% block main %}
<h2>Turnos modificar</h2>
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

<form action=\"/turnos/validateCambio\" method=\"POST\">
   <div class=\"field\">
        <label for=\"id\"> ID de turno a modificar:
            <input type=\"number\" name=\"id\" required >
        </label>
    <div class=\"field\">
        <label for=\"paciente\"> Nombre paciente:
            <input type=\"text\" name=\"paciente\" required >
        </label>
    </div>
    <div class=\"field\">
        <label for=\"email\">   email:
            <input type=\"email\" name=\"email\" required >
        </label>
    </div>
    <div class=\"field\">
        <label for=\"telefono\">   telefono:
            <input type=\"text\" name=\"telefono\" required >
        </label>
    </div>
    
      <div class=\"field\">
        <label for=\"edad\" >Edad: 
            <input name=\"edad\" type=\"number\" min=0 max=130>
        </label>
      </div>
      <div class=\"field\">
        <label for=\"talla_calzado\" >Talla de calzado: 
                <input name=\"talla_calzado\" type=\"number\" min=20 max=50>
        </label>
      </div>
      <div class=\"field\">
        <label for=\"altura\" >Altura: 
            <input name=\"altura\" type=\"number\">
        </label>
      </div>
      <div class=\"field\">
        <label for=\"fecha_nacimiento\">fecha de nacimiento: 
            <input name=\"fecha_nacimiento\" type=\"date\" required=\"required\">
        </label>
      </div>
      <div class=\"field\">
        <label for=\"color_pelo\" >Color de pelo: 
            <select name=\"color_pelo\">
              <option  value=\"marron\">Marrón</option>
              <option  value=\"negro\">Negro</option>
              <option  value=\"amarillo\">Amarillo</option>
              <option  value=\"rojo\">Rojo</option>
              <option  value=\"calvo\">Calvo</option>
            </select>
        </label>
      </div>
    
    <div class=\"field\">
        <label for=\"fecha_turno\"> fecha:
            <input type=\"date\" name=\"fecha_turno\" required >
        </label>
    </div>
    <div class=\"field\">
        <label for=\"hora_turno\">   hora:
            <input type=\"time\" name=\"hora_turno\" >
        </label>
    </div> 
    </div>
    <input type=\"submit\" name=\"Enviar\">
</form>


{% endblock %}
", "turnos.modificar.html", "C:\\Users\\Maxi\\Downloads\\paw-tp4-master\\3\\app\\views\\turnos.modificar.html");
    }
}
