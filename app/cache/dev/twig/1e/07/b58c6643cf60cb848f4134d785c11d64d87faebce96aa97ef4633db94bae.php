<?php

/* ConcursoEstaticasBundle:Default:registro.html.twig */
class __TwigTemplate_1e07b58c6643cf60cb848f4134d785c11d64d87faebce96aa97ef4633db94bae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "\t<div class=\"row\">
\t\t<div class=\"large-12 columns\">

\t\t\t<!--Datos de usuario:</br>
\t\t\tNombre: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "</br>
\t\t\tEmail: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "email", array()), "html", null, true);
        echo "</br>-->
\t\t\t</br>
\t\t\t</br>
\t\t\t<h2 class=\"subheader\">Equipo</h2>
\t\t\t";
        // line 12
        if ((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos"))) {
            // line 13
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) ? $context["equipos"] : $this->getContext($context, "equipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
                // line 14
                echo "\t\t\t\t\t<div class=\"large-6 columns\">
\t\t\t\t\t\tNombre del equipo</br>
\t\t\t\t\t\t";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "nombre", array()), "html", null, true);
                echo "</br></br>
\t\t\t\t\t\tPreparatoria de procedencia</br>
\t\t\t\t\t\t";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipo"], "preparatoria", array()), "html", null, true);
                echo " </br>
\t\t\t\t\t\t<a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipo_delete", array("id" => $this->getAttribute($context["equipo"], "id", array()))), "html", null, true);
                echo "\" class=\"button alert\">Eliminar equipo</a>
\t\t\t\t\t\t<a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipo_edit", array("id" => $this->getAttribute($context["equipo"], "id", array()))), "html", null, true);
                echo "\" class=\"button success\">Editar equipo</a>
\t\t\t\t\t</div>\t
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t

\t\t\t\t<div class=\"large-12 columns\">
                
 \t\t              <table>
\t\t                <thead>
\t\t                  <tr>
\t\t                    <th>Nombre</th>
\t\t                    <th>Semestre</th>
\t\t                    <th>CURP</th>
\t\t                    <th>Email</th>
\t\t                    <th></th>
\t\t                  </tr>
\t\t                </thead>
\t\t                <tbody>
\t\t\t\t\t\t\t";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) ? $context["alumnos"] : $this->getContext($context, "alumnos")));
            foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
                // line 38
                echo "\t\t                     \t <tr>
\t\t                              <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellidoPaterno", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellidoMaterno", array()), "html", null, true);
                echo "</td>
\t\t                              <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "semestre", array()), "html", null, true);
                echo "</td>
\t\t                              <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "curp", array()), "html", null, true);
                echo "</td>
\t\t                              <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "email", array()), "html", null, true);
                echo "</td>
\t\t                              <td>
\t\t                                  <ul>
\t\t                                      <li>
\t\t                                            <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alumno_delete", array("id" => $this->getAttribute($context["alumno"], "id", array()))), "html", null, true);
                echo "\">delete</a>
\t\t                                      </li>
\t\t                                      <li>
\t\t                                            <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alumno_edit", array("id" => $this->getAttribute($context["alumno"], "id", array()))), "html", null, true);
                echo "\">edit</a>
\t\t                                      </li>
\t\t                                  </ul>
\t\t                              </td>    
\t\t                              
\t\t                          </tr>
\t\t                      
\t\t                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
\t\t                </tbody>
\t\t              </table>
\t                  <div class=\"btn-group\">
\t                     <a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("alumno_new");
            echo "\"><button class=\"btn btn-success\">Agregar alumno <i class=\"icon-plus icon-white\"></i></button></a>
\t                 </div>        
\t                
\t                
\t            </div>



\t\t\t";
        } else {
            // line 70
            echo "\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("equipo_new");
            echo "\" class=\"button expand\">Crea tu equipo</a>
\t\t\t";
        }
        // line 72
        echo "
\t\t\t\t\t\t
\t\t\t    <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>
\t\t\t
\t\t\t
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ConcursoEstaticasBundle:Default:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 74,  180 => 72,  174 => 70,  162 => 61,  156 => 57,  142 => 49,  136 => 46,  129 => 42,  125 => 41,  121 => 40,  113 => 39,  110 => 38,  106 => 37,  89 => 22,  80 => 20,  76 => 19,  72 => 18,  67 => 16,  63 => 14,  58 => 13,  56 => 12,  49 => 8,  45 => 7,  39 => 3,  36 => 2,  11 => 1,);
    }
}
