<?php

/* eliminar-ficha.html */
class __TwigTemplate_ce664f391a6918a9d4628186b73be8ef8eac97172e26e589bb7ec3abc99cfa4d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "eliminar-ficha.html", 1);
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
         <link href=\"public/style.css\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "      <h2>Informacion del turno </h2>
<div class=\"turno\">
  <section class=\"fieldsPaciente\">
      <dic class=\"class\">
          <label> 
               <b>ID:</b>
                ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "id", array()), "html", null, true);
        echo "
            </label>

      </dic>
       <div class=\"field\">
            <label> 
               <b>Paciente:</b>
                ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "paciente", array()), "html", null, true);
        echo "
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> tel: </b>
                ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "telefono", array()), "html", null, true);
        echo "
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> email: </b>
            ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "email", array()), "html", null, true);
        echo "
            </label>
        </div>
        <br>
        <div class=\"field\">
            <label>  <b> edad: </b>
                ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "edad", array()), "html", null, true);
        echo "
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> talla de calzado: </b>
            ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "talla_calzado", array()), "html", null, true);
        echo "
            </label>
        </div>

        <div class=\"field\">
            <label>  <b> altura: </b>
            ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "altura", array()), "html", null, true);
        echo "
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> Fecha de Nacimiento: </b>
            ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "fecha_nacimiento", array()), "html", null, true);
        echo "
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> Color de pelo: </b>
            ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "color_pelo", array()), "html", null, true);
        echo "
            </label>
        </div>
     </section>
     
    <section class=\"fieldsTurno\">       
        <div class=\"field\">
            <label> <b> fecha del turno: </b>
                        ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "fecha_turno", array()), "html", null, true);
        echo "
            </label>
        </div>
        <div class=\"field\">
            <label>  <b> hora del turno: </b>
                    ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "hora_turno", array()), "html", null, true);
        echo "
            </label>
        </div>
        <br>
        <div class=\"field imagen\">
            <label>  <b> diagnostico: </b> </label>
            <div> <img src=\"data:image/png;base64,";
        // line 85
        echo twig_escape_filter($this->env, ($context["diag"] ?? null), "html", null, true);
        echo "\"></div>
        </div>
    </section>      
    
    <section class=\"botonesForm\">
        <a class=\"controls\" href=\"/turnos/delete?id=";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "id", array()), "html", null, true);
        echo "\">CONFIRMAR</a>
        <a class=\"controls\" href=\"/turnos\">CANCELAR</a>
    </section>
    
</div>    
";
    }

    public function getTemplateName()
    {
        return "eliminar-ficha.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 90,  170 => 85,  161 => 79,  153 => 74,  142 => 66,  134 => 61,  126 => 56,  117 => 50,  109 => 45,  100 => 39,  92 => 34,  84 => 29,  74 => 22,  66 => 16,  63 => 15,  54 => 10,  51 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
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
         <link href=\"public/style.css\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

{% block main %}
      <h2>Informacion del turno </h2>
<div class=\"turno\">
  <section class=\"fieldsPaciente\">
      <dic class=\"class\">
          <label> 
               <b>ID:</b>
                {{turnoX.id}}
            </label>

      </dic>
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
        <br>
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
     </section>
     
    <section class=\"fieldsTurno\">       
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
        <br>
        <div class=\"field imagen\">
            <label>  <b> diagnostico: </b> </label>
            <div> <img src=\"data:image/png;base64,{{diag}}\"></div>
        </div>
    </section>      
    
    <section class=\"botonesForm\">
        <a class=\"controls\" href=\"/turnos/delete?id={{turnoX.id}}\">CONFIRMAR</a>
        <a class=\"controls\" href=\"/turnos\">CANCELAR</a>
    </section>
    
</div>    
{% endblock %}", "eliminar-ficha.html", "C:\\Users\\Maxi\\Desktop\\6\\app\\views\\eliminar-ficha.html");
    }
}
