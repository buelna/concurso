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
\t\t\t";
        // line 6
        echo "\t\t\t<h1 align=\"center\">Registro suspendido hasta nuevo aviso</h1>
\t\t\t";
        // line 13
        echo "\t\t\t
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"large-12 columns\" align=\"center\">
\t\t\t<div class=\"large-6 columns\">
\t\t\t\t</br>
\t\t\t\t";
        // line 34
        echo "\t\t\t</div>
\t\t\t<div class=\"large-6 columns\" align=\"center\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<br/>
\t\t\t\t\t<img align=\"center\" height=\"75%\" width=\"75%\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("banner_concurso2015.jpg"), "html", null, true);
        echo "\">
\t\t          <hr>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 43
        echo "\t\t\t\t</div>
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
        return array (  68 => 43,  61 => 38,  55 => 34,  46 => 13,  43 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
