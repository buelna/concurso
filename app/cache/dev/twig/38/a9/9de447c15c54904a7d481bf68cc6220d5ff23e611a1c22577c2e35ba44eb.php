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
\t\t<div class=\"large-12 columns\" align=\"center\">
\t\t\t<div class=\"large-6 columns\">
\t\t\t\t</br>
\t\t\t\t<h1>Inicio sesion</h1>
\t\t\t\t";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "\t\t\t\t    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 11
        echo "
\t\t\t\t<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
\t\t\t\t    <label for=\"username\">Username:</label>
\t\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

\t\t\t\t    <label for=\"password\">Password:</label>
\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" />

\t\t\t\t    

\t\t\t\t    <button type=\"submit\">login</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"large-6 columns\" align=\"center\">
\t\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("usuario_new");
        echo "\" class=\"button expand\">Registrate</a>
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
        return array (  76 => 25,  62 => 14,  57 => 12,  54 => 11,  48 => 9,  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
