<?php

/* ConcursoEstaticasBundle:Default:convocatoria.html.twig */
class __TwigTemplate_6ca70506bed454c1d5d198504e1781202621d705e4ca4f430d8e18169d23b6f8 extends Twig_Template
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
        echo "<div class=\"page-wrap\">
\t<div class=\"row\" >
\t  <div class=\"small-3 small-centered columns\">
\t  \t<div class=\"row\">
\t  \t\tcontacto 1 
\t  \t</div>
\t  \t<div class=\"row\">
\t  \t\tcontacto 2
\t  \t</div>
\t  </div>
\t</div>
</div>\t
";
    }

    public function getTemplateName()
    {
        return "ConcursoEstaticasBundle:Default:convocatoria.html.twig";
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
