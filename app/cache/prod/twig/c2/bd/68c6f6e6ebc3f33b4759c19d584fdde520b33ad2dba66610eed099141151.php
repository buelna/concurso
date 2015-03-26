<?php

/* ConcursoEstaticasBundle:Default:programa.html.twig */
class __TwigTemplate_c2bd68c6f6e6ebc3f33b4759c19d584fdde520b33ad2dba66610eed099141151 extends Twig_Template
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
\t\t<div class=\"large-12 columns\" align=\"center\">
\t\t\t<h1> Programa</h1>
\t\t\t<hr>
\t\t</div>
\t</div>
\t<div class=\"row\">
        <div class=\"large-2 columns\">
            <strong>8:00-8:30hrs.</strong><br/>
        </div>
        <div class=\"large-10 columns\">
        \t<p>Inscripción de participantes<br/>
\t\t\tLugar: Sala audiovisual edificio “U” planta baja.</p>
\t\t\t<hr>
        </div>
  \t</div>
\t<div class=\"row\">
        <div class=\"large-2 columns\">
            <strong>8:45hrs.</strong><br/>
        </div>
        <div class=\"large-10 columns\">
        \t<p>Ceremonia de inauguración<br/>
\t\t\tLugar: Sala audiovisual edificio “U” planta baja.</p>
\t\t\t<hr>
        </div>
  \t</div>
\t<div class=\"row\">
        <div class=\"large-2 columns\">
            <strong>9:00-12:00hrs.</strong><br/>
        </div>
        <div class=\"large-10 columns\">
        \t<p>Concurso de programación<br/>
\t\t\tLugar: Laboratorios del edificio “G”.</p>
\t\t\t<hr>
        </div>
  \t</div>
\t<div class=\"row\">
        <div class=\"large-2 columns\">
            <strong>12:30hrs.</strong><br/>
        </div>
        <div class=\"large-10 columns\">
        \t<p>Premiación y Clausura<br/>
\t\t\tLugar: Sala audiovisual del edificio “D”.</p>
\t\t\t<hr>
        </div>
  \t</div>
";
    }

    public function getTemplateName()
    {
        return "ConcursoEstaticasBundle:Default:programa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  36 => 2,  11 => 1,);
    }
}
