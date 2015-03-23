<?php

/* ConcursoEstaticasBundle:Default:ejemplos.html.twig */
class __TwigTemplate_0b12521ee89c1d1cd6e8eb457f5a37f17f09698aa1f70ecedc526fd545076ca1 extends Twig_Template
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
\t\t\t<h1> </h1>
\t\t\t<p>En este documento se muestran algunos ejemplos con código, para familizarizarse con los problemas a resolver durante el concurso:</p>
\t\t\t<hr>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<style type=\"text/css\"> 
\t\t#portapdf { 
\t\t    width: 100%; 
\t\t    height: 100%; 
\t\t    border: 1px solid #484848; 
\t\t    margin: 0 auto; 
\t\t} 
\t\t</style> 
\t\t<div id=\"portapdf\">
\t\t\t<object data=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("EjemplosCONREPRO2015.pdf"), "html", null, true);
        echo "\" type=\"application/pdf\" width=\"100%\" height=\"100%\"></object> 
\t\t</div>
\t\t<div>
\t\t\t<p>Si no puedes ver el documento clic <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("EjemplosCONREPRO2015.pdf"), "html", null, true);
        echo "\">aquí</a>
\t\t\t</p> 
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ConcursoEstaticasBundle:Default:ejemplos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  58 => 20,  39 => 3,  36 => 2,  11 => 1,);
    }
}
