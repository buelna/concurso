<?php

/* ConcursoEstaticasBundle:Default:contactos.html.twig */
class __TwigTemplate_a6b560634f727a57033616046652011615b574b85e0e463f118002334cd691ec extends Twig_Template
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
        echo "\t<div class=\"row\" >
\t  <div class=\"small-3 small-centered columns\">
\t  \t<div class=\"row\">
\t  \t\t<h1>contacto 1</h1> 
\t  \t</div>
\t  \t<div class=\"row\">
\t  \t\t<h1>contacto 2</h1>
\t  \t</div>
\t  </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ConcursoEstaticasBundle:Default:contactos.html.twig";
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
