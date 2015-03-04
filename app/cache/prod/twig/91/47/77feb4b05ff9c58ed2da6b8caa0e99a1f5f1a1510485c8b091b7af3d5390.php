<?php

/* RegistroBundle:Default:index.html.twig */
class __TwigTemplate_914777feb4b05ff9c58ed2da6b8caa0e99a1f5f1a1510485c8b091b7af3d5390 extends Twig_Template
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
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'article' => array($this, 'block_article'),
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
        echo "\t";
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "\t";
        $this->displayBlock('id', $context, $blocks);
        // line 5
        echo "\t\t";
        $this->displayBlock('article', $context, $blocks);
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Formulario de acceso";
    }

    // line 4
    public function block_id($context, array $blocks = array())
    {
        echo "usuario";
    }

    // line 5
    public function block_article($context, array $blocks = array())
    {
        // line 6
        echo "\t\t";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 7
            echo "\t\t\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 9
        echo "\t\t\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("usuario_login_check");
        echo "\" method=\"post\">
\t\t\t\t<label for=\"username\">Usuario:</label>
\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\" />
\t\t\t\t<label for=\"password\">Contraseña:</label>
\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t\t\t\t<input type=\"submit\" name=\"login\" value=\"Acceder\" />
\t\t\t</form>
\t";
    }

    public function getTemplateName()
    {
        return "RegistroBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 11,  77 => 9,  71 => 7,  68 => 6,  65 => 5,  59 => 4,  53 => 3,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  11 => 1,);
    }
}
