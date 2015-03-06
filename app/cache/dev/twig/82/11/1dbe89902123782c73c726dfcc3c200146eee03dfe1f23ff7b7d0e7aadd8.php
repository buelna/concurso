<?php

/* ConcursoEstaticasBundle:Default:index.html.twig */
class __TwigTemplate_82111dbe89902123782c73c726dfcc3c200146eee03dfe1f23ff7b7d0e7aadd8 extends Twig_Template
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
        echo "      <div class=\"row\">
        <div class=\"large-12 columns\" align=\"center\">
          <br/>
          <img align=\"center\" height=\"75%\" width=\"75%\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("banner_concurso2015.jpg"), "html", null, true);
        echo "\">
          <hr>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-12 columns\">
            <strong>¿Quiénes pueden participar?</strong><br/>
            <p>Estudiantes que cursen el sexto semestre de bachillerato y que no tengan materias reprobadas.</p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-12 columns\">
            <strong>¿En qué consiste? </strong><br/>
            <p>Resolver problemas mediante algún lenguaje de programación.</p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-12 columns\">
            <strong>¿Cuándo se llevara a cabo?</strong><br/>
            <p>El viernes 17 de Abril del 2015.</p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-12 columns\">
            <strong>¿En dónde?</strong><br/>
            <p>En las instalaciones del Instituto Tecnológico de Mexicali.</p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-12 columns\">
            <strong>¿Cuáles son los premios?</strong><br/>
            <p>Una tableta a cada integrante del equipo ganador del primer lugar. Una memoria USB de 32GB a cada integrante del equipo ganador del segundo lugar. Beca de inscripción en el ITM a los integrantes de los equipos ganadores de los primeros tres lugares.</p>
        </div>
      </div>
";
    }

    public function getTemplateName()
    {
        return "ConcursoEstaticasBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
