<?php

/* turnoModificar.html */
class __TwigTemplate_567dce8240a44dab44300f40d6f44213413ac6afd692da2a3c0680790592faa3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "turnoModificar.html", 1);
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
        echo "Crear Nuevo Turno";
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
        if ( !twig_test_empty(($context["errores"] ?? null))) {
            // line 17
            echo "  <section class=\"camposErroneos\">
      <div class=\"tituloCamposErroneos\"> Campos Erroneos: </div>
      ";
            // line 19
            if ((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["errores"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["paciente"] ?? null) : null)) {
                // line 20
                echo "        <div> <b>Paciente: </b> ";
                echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["errores"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["paciente"] ?? null) : null), "html", null, true);
                echo " </div>
      ";
            }
            // line 22
            echo "      ";
            if ((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["errores"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["edad"] ?? null) : null)) {
                // line 23
                echo "        <div> <b>Edad: </b> ";
                echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["errores"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["edad"] ?? null) : null), "html", null, true);
                echo " </div>
      ";
            }
            // line 25
            echo "      ";
            if ((($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["errores"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["email"] ?? null) : null)) {
                // line 26
                echo "        <div> <b>Email: </b> ";
                echo twig_escape_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["errores"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["email"] ?? null) : null), "html", null, true);
                echo " </div>
      ";
            }
            // line 28
            echo "      ";
            if ((($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = ($context["errores"] ?? null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["talla_calzado"] ?? null) : null)) {
                // line 29
                echo "        <div> <b>Talla Calzado: </b> ";
                echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = ($context["errores"] ?? null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["talla_calzado"] ?? null) : null), "html", null, true);
                echo " </div>
      ";
            }
            // line 31
            echo "      ";
            if ((($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = ($context["errores"] ?? null)) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["altura"] ?? null) : null)) {
                // line 32
                echo "        <div> <b>Altura: </b> ";
                echo twig_escape_filter($this->env, (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = ($context["errores"] ?? null)) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866["altura"] ?? null) : null), "html", null, true);
                echo " </div>
      ";
            }
            // line 34
            echo "      ";
            if ((($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = ($context["errores"] ?? null)) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f["fecha_nacimiento"] ?? null) : null)) {
                // line 35
                echo "        <div> <b>Fecha de Nacimiento: </b> ";
                echo twig_escape_filter($this->env, (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = ($context["errores"] ?? null)) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7["fecha_nacimiento"] ?? null) : null), "html", null, true);
                echo " </div>
      ";
            }
            // line 37
            echo "      ";
            if ((($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = ($context["errores"] ?? null)) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289["color_pelo"] ?? null) : null)) {
                // line 38
                echo "        <div> <b>Color de pelo: </b> ";
                echo twig_escape_filter($this->env, (($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = ($context["errores"] ?? null)) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18["color_pelo"] ?? null) : null), "html", null, true);
                echo " </div>
      ";
            }
            // line 40
            echo "      ";
            if ((($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = ($context["errores"] ?? null)) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018["fecha_turno"] ?? null) : null)) {
                // line 41
                echo "        <div> <b>Fecha turno: </b> ";
                echo twig_escape_filter($this->env, (($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 = ($context["errores"] ?? null)) && is_array($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413) || $__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 instanceof ArrayAccess ? ($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413["fecha_turno"] ?? null) : null), "html", null, true);
                echo " </div>
      ";
            }
            // line 43
            echo "      ";
            if ((($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 = ($context["errores"] ?? null)) && is_array($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7) || $__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 instanceof ArrayAccess ? ($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7["hora_turno"] ?? null) : null)) {
                // line 44
                echo "        <div> <b>Hora turno: </b> ";
                echo twig_escape_filter($this->env, (($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c = ($context["errores"] ?? null)) && is_array($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c) || $__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c instanceof ArrayAccess ? ($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c["hora_turno"] ?? null) : null), "html", null, true);
                echo " </div>
      ";
            }
            // line 46
            echo "      ";
            if ((($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 = ($context["errores"] ?? null)) && is_array($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40) || $__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 instanceof ArrayAccess ? ($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40["diagnostico"] ?? null) : null)) {
                // line 47
                echo "        <div> <b>Diagnostico: </b> ";
                echo twig_escape_filter($this->env, (($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 = ($context["errores"] ?? null)) && is_array($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79) || $__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 instanceof ArrayAccess ? ($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79["diagnostico"] ?? null) : null), "html", null, true);
                echo " </div>
      ";
            }
            // line 49
            echo "  </section>
";
        }
        // line 51
        echo "
<h2>Modificar Turno</h2>
<form action=\"/turnos/validateM\" method=\"POST\" enctype=\"multipart/form-data\">
   
    <section class=\"fieldsPaciente\">
        <div class=\"field\">
        <label for=\"id\"> ID:
            <input type=\"text\" name=\"id\" readonly= \"readonly\" required value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "id", array()), "html", null, true);
        echo "\">
        </label>
    </div>
       
       <div class=\"field\">
        <label for=\"paciente\"> Nombre paciente:
            <input type=\"text\" name=\"paciente\" required value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "paciente", array()), "html", null, true);
        echo "\">
        </label>
    </div>
    <div class=\"field\">
        <label for=\"email\">   email:
            <input type=\"email\" name=\"email\" required value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "email", array()), "html", null, true);
        echo "\">
        </label>
    </div>
    <div class=\"field\">
        <label for=\"telefono\">   telefono:
            <input type=\"text\" name=\"telefono\" required value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "telefono", array()), "html", null, true);
        echo "\">
        </label>
    </div>

      <div class=\"field\">
        <label for=\"edad\" >Edad:
            <input name=\"edad\" type=\"number\" min=0 max=130 value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "edad", array()), "html", null, true);
        echo "\">
        </label>
      </div>
      <div class=\"field\">
        <label for=\"talla_calzado\" >Talla de calzado:
                <input name=\"talla_calzado\" type=\"number\" min=20 max=50 value=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "talla_calzado", array()), "html", null, true);
        echo "\">
        </label>
      </div>
      <div class=\"field\">
        <label for=\"altura\" >Altura (cm):
            <input name=\"altura\" type=\"number\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "altura", array()), "html", null, true);
        echo "\">
        </label>
      </div>
      <div class=\"field\">
        <label for=\"fecha_nacimiento\">fecha de nacimiento:
            <input name=\"fecha_nacimiento\" type=\"date\" required=\"required\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "fecha_nacimiento", array()), "html", null, true);
        echo "\">
        </label>
      </div>
      <div class=\"field\">
        <label for=\"color_pelo\" >Color de pelo:
            <select name=\"color_pelo\"\">
             <option value=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "color_pelo", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "color_pelo", array()), "html", null, true);
        echo "</option>\"
              <option  value=\"marron\">marrón</option>
              <option  value=\"negro\">negro</option>
              <option  value=\"amarillo\">amarillo</option>
              <option  value=\"rojo\" >rojo</option>
              <option  value=\"calvo\">calvo</option>
            </select>
        </label>
      </div>
    </section>

    <section class=\"fieldsTurno\">
    <div class=\"field\">
        <label for=\"fecha_turno\"> fecha turno:
            <input type=\"date\" name=\"fecha_turno\" required value=\"";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "fecha_turno", array()), "html", null, true);
        echo "\">
        </label>
    </div>
    <div class=\"field\">
        <label for=\"hora_turno\">   hora turno:
            <input type=\"time\" name=\"hora_turno\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turnoX"] ?? null), "hora_turno", array()), "html", null, true);
        echo "\" >
        </label>
    </div>

    </section>

    <section class=\"botonesForm\">
        <input type=\"submit\" name=\"Enviar\">
        <input  class=\"controls\" type=\"reset\" value=\"Resetear\">
    </section>
</form>
";
    }

    public function getTemplateName()
    {
        return "turnoModificar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 120,  260 => 115,  241 => 101,  232 => 95,  224 => 90,  216 => 85,  208 => 80,  199 => 74,  191 => 69,  183 => 64,  174 => 58,  165 => 51,  161 => 49,  155 => 47,  152 => 46,  146 => 44,  143 => 43,  137 => 41,  134 => 40,  128 => 38,  125 => 37,  119 => 35,  116 => 34,  110 => 32,  107 => 31,  101 => 29,  98 => 28,  92 => 26,  89 => 25,  83 => 23,  80 => 22,  74 => 20,  72 => 19,  68 => 17,  66 => 16,  63 => 15,  54 => 10,  51 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block title %}Crear Nuevo Turno{% endblock %}

{% block header %}
    {{ include('partials/nav.html') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
    <link href=\"public/style.css\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

{% block main %}
{% if errores is not empty %}
  <section class=\"camposErroneos\">
      <div class=\"tituloCamposErroneos\"> Campos Erroneos: </div>
      {% if errores['paciente'] %}
        <div> <b>Paciente: </b> {{ errores['paciente'] }} </div>
      {% endif %}
      {% if errores['edad'] %}
        <div> <b>Edad: </b> {{ errores['edad'] }} </div>
      {% endif %}
      {% if errores['email'] %}
        <div> <b>Email: </b> {{ errores['email'] }} </div>
      {% endif %}
      {% if errores['talla_calzado'] %}
        <div> <b>Talla Calzado: </b> {{ errores['talla_calzado'] }} </div>
      {% endif %}
      {% if errores['altura'] %}
        <div> <b>Altura: </b> {{ errores['altura'] }} </div>
      {% endif %}
      {% if errores['fecha_nacimiento'] %}
        <div> <b>Fecha de Nacimiento: </b> {{ errores['fecha_nacimiento'] }} </div>
      {% endif %}
      {% if errores['color_pelo'] %}
        <div> <b>Color de pelo: </b> {{ errores['color_pelo'] }} </div>
      {% endif %}
      {% if errores['fecha_turno'] %}
        <div> <b>Fecha turno: </b> {{ errores['fecha_turno'] }} </div>
      {% endif %}
      {% if errores['hora_turno'] %}
        <div> <b>Hora turno: </b> {{ errores['hora_turno'] }} </div>
      {% endif %}
      {% if errores['diagnostico'] %}
        <div> <b>Diagnostico: </b> {{ errores['diagnostico'] }} </div>
      {% endif %}
  </section>
{% endif %}

<h2>Modificar Turno</h2>
<form action=\"/turnos/validateM\" method=\"POST\" enctype=\"multipart/form-data\">
   
    <section class=\"fieldsPaciente\">
        <div class=\"field\">
        <label for=\"id\"> ID:
            <input type=\"text\" name=\"id\" readonly= \"readonly\" required value=\"{{ turnoX.id }}\">
        </label>
    </div>
       
       <div class=\"field\">
        <label for=\"paciente\"> Nombre paciente:
            <input type=\"text\" name=\"paciente\" required value=\"{{ turnoX.paciente }}\">
        </label>
    </div>
    <div class=\"field\">
        <label for=\"email\">   email:
            <input type=\"email\" name=\"email\" required value=\"{{ turnoX.email }}\">
        </label>
    </div>
    <div class=\"field\">
        <label for=\"telefono\">   telefono:
            <input type=\"text\" name=\"telefono\" required value=\"{{ turnoX.telefono }}\">
        </label>
    </div>

      <div class=\"field\">
        <label for=\"edad\" >Edad:
            <input name=\"edad\" type=\"number\" min=0 max=130 value=\"{{ turnoX.edad }}\">
        </label>
      </div>
      <div class=\"field\">
        <label for=\"talla_calzado\" >Talla de calzado:
                <input name=\"talla_calzado\" type=\"number\" min=20 max=50 value=\"{{ turnoX.talla_calzado }}\">
        </label>
      </div>
      <div class=\"field\">
        <label for=\"altura\" >Altura (cm):
            <input name=\"altura\" type=\"number\" value=\"{{ turnoX.altura }}\">
        </label>
      </div>
      <div class=\"field\">
        <label for=\"fecha_nacimiento\">fecha de nacimiento:
            <input name=\"fecha_nacimiento\" type=\"date\" required=\"required\" value=\"{{ turnoX.fecha_nacimiento }}\">
        </label>
      </div>
      <div class=\"field\">
        <label for=\"color_pelo\" >Color de pelo:
            <select name=\"color_pelo\"\">
             <option value=\"{{turnoX.color_pelo}}\">{{turnoX.color_pelo}}</option>\"
              <option  value=\"marron\">marrón</option>
              <option  value=\"negro\">negro</option>
              <option  value=\"amarillo\">amarillo</option>
              <option  value=\"rojo\" >rojo</option>
              <option  value=\"calvo\">calvo</option>
            </select>
        </label>
      </div>
    </section>

    <section class=\"fieldsTurno\">
    <div class=\"field\">
        <label for=\"fecha_turno\"> fecha turno:
            <input type=\"date\" name=\"fecha_turno\" required value=\"{{ turnoX.fecha_turno }}\">
        </label>
    </div>
    <div class=\"field\">
        <label for=\"hora_turno\">   hora turno:
            <input type=\"time\" name=\"hora_turno\" value=\"{{ turnoX.hora_turno }}\" >
        </label>
    </div>

    </section>

    <section class=\"botonesForm\">
        <input type=\"submit\" name=\"Enviar\">
        <input  class=\"controls\" type=\"reset\" value=\"Resetear\">
    </section>
</form>
{% endblock %}
", "turnoModificar.html", "C:\\Users\\Maxi\\Downloads\\PAWTP4(2)\\paw-tp4-master\\4 - copia\\app\\views\\turnoModificar.html");
    }
}
