<?php

/* ::base.html.twig */
class __TwigTemplate_6024a47ce03be2759b435a1ad091b25045fffd31cb478395118de374b56420bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("caii.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/concursoestaticas/css/foundation.css"), "html", null, true);
        echo "\" />
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body >
        <div class=\"row\">
             <div class=\"large-12 columns\">
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("banner_oficial.jpg"), "html", null, true);
        echo "\">
             </div>
        </div>
        <div class=\"row\">

        <div class=\"large-12 columns\">
          <ul class=\"button-group left\">
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\" class=\"button\">Inicio</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("convocatoria");
        echo "\" class=\"button\">Convocatoria</a></li>
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("programa");
        echo "\" class=\"button\">Programa</a></li>
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ejemplos");
        echo "\" class=\"button\">Ejemplos</a></li>
            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("registro");
        echo "\" class=\"button\">Registro</a></li>
            <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("contactos");
        echo "\" class=\"button\">Contactos</a></li>
          </ul>
        </div>
      </div>
      ";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "
      <footer class=\"row\" >
        <div class=\"large-12 columns\">
          <hr/>
          <div class=\"row\">
            <div class=\"large-5 columns\">
              <p>© Copyright no one at all. Go to town.</p>
            </div>
            <div class=\"large-7 columns\">
              
            </div>
          </div>
        </div>
      </footer>
    
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 31,  122 => 30,  117 => 8,  111 => 5,  90 => 33,  88 => 30,  81 => 26,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  61 => 21,  51 => 14,  42 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
