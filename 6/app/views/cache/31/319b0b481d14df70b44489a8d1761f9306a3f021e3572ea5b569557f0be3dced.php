<?php

/* turnos.create.html */
class __TwigTemplate_7b3e0caffec5a531b0fc795c9a578ca417ada05f66460f68a6f53387a5a2961b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "turnos.create.html", 1);
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
        echo "Crear Tarea Nueva";
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
        echo "<h2>Reservar Turno</h2>
<form action=\"/turnos/validate\" method=\"POST\">
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
       
    <input type=\"submit\" name=\"Enviar\">
    <input  class=\"controls\" type=\"reset\" value=\"Resetear\">
</form>
";
    }

    public function getTemplateName()
    {
        return "turnos.create.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  62 => 14,  54 => 10,  51 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block title %}Crear Tarea Nueva{% endblock %}

{% block header %}
    {{ include('partials/nav.html') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
{% endblock %}

{% block main %}
<h2>Reservar Turno</h2>
<form action=\"/turnos/validate\" method=\"POST\">
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
       
    <input type=\"submit\" name=\"Enviar\">
    <input  class=\"controls\" type=\"reset\" value=\"Resetear\">
</form>
{% endblock %}
", "turnos.create.html", "C:\\Users\\Maxi\\Downloads\\paw-tp4-master\\3\\app\\views\\turnos.create.html");
    }
}
