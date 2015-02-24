<?php

/* ConcursoEstaticasBundle:Default:contactos.html.twig */
class __TwigTemplate_a6b560634f727a57033616046652011615b574b85e0e463f118002334cd691ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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
\t  \t\tcontacto 1 
\t  \t</div>
\t  \t<div class=\"row\">
\t  \t\tcontacto 2
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
        return array (  31 => 3,  28 => 2,);
    }
}
