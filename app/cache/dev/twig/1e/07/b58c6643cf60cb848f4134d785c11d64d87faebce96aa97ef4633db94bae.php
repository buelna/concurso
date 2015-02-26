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
\t\t<div class=\"large-12 columns\" align=\"center\">
\t\t\t<h1> En construcción...</h1>
\t\t\tDatos de usuario:</br>
\t\t\tNombre: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "</br>
\t\t\tNombre: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "email", array()), "html", null, true);
        echo "
\t\t\t<div>
\t\t\t    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>
\t\t\t</div>
\t\t\t<hr>
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
        return array (  54 => 10,  49 => 8,  45 => 7,  39 => 3,  36 => 2,  11 => 1,);
    }
}
