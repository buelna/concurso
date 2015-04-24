<?php

/* ConcursoEstaticasBundle:Default:login.html.twig */
class __TwigTemplate_38a99de447c15c54904a7d481bf68cc6220d5ff23e611a1c22577c2e35ba44eb extends Twig_Template
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
\t\t<div class=\"large_12 columns\">
\t\t\t<h1 align=\"center\">Instrucciones para pre-registar el equipo</h1>
\t\t\t<p>
\t\t\t1.- Crear un nuevo usuario en la plataforma (un usuario por equipo).<br>
\t\t\t2.- Ingresar al sistema con tu correo electronico como usuario y tu contraseña.<br>
\t\t\t3.- Crear el equipo, asignar un nombre de equipo y la preparatoria de procedencia.<br>
\t\t\t4.- Agregar los tres alumnos que integraran el equipo.<br>
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"large-12 columns\" align=\"center\">
\t\t\t<div class=\"large-6 columns\">
\t\t\t\t</br>
\t\t\t\t<h1>Inicio de sesi&oacuten</h1>
\t\t\t\t";
        // line 19
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 20
            echo "\t\t\t\t    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 22
        echo "
\t\t\t\t<form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class=\"forms\">
\t\t\t\t    <input placeholder=\"Email\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Password\"  />

\t\t\t\t    

\t\t\t\t    <button type=\"submit\" class=\"btn-blue width-100\">Iniciar sesi&oacuten</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"large-6 columns\" align=\"center\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<br/>
\t\t\t\t\t<img align=\"center\" height=\"75%\" width=\"75%\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("banner_concurso2015.jpg"), "html", null, true);
        echo "\">
\t\t          <hr>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("usuario_new");
        echo "\" class=\"button expand\">Reg&iacutestrate</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<hr>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ConcursoEstaticasBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 40,  87 => 36,  72 => 24,  68 => 23,  65 => 22,  59 => 20,  57 => 19,  39 => 3,  36 => 2,  11 => 1,);
    }
}
