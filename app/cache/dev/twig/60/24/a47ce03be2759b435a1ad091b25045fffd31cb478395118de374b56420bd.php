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
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/concursoestaticas/css/foundation.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/concursoestaticas/css/kube.css"), "html", null, true);
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
      <div class=\"page-wrap\">
          <div class=\"row\">
               <div class=\"large-12 columns\">
                  <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("banner_oficial.jpg"), "html", null, true);
        echo "\">
               </div>
          </div>
          <div class=\"row\">

          <div class=\"large-12 columns\">
            <div class=\"contain-to-grid\">
              <nav class=\"top-bar\" data-topbar>
                <ul class=\"title-area\">
                  <li class=\"name\">
                    <h1><a href=\"\"></a></h1>
                  </li>
                  <li class=\"toggle-topbar menu-icon\"><a href=\"#\">Menu</a></li>
                </ul>
                <section class=\"top-bar-section\">
                  <ul class=\"left\">
                    <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\">Inicio</a></li>
                    <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("convocatoria");
        echo "\">Convocatoria</a></li>
                    <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("programa");
        echo "\">Programa</a></li>
                    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("ejemplos");
        echo "\">Ejemplos</a></li>
                    <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("registro");
        echo "\">Pre-Registro</a></li>
                    <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("galeria");
        echo "\">Galería</a></li>
                    <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("contactos");
        echo "\">Contactos</a></li>
                    <li><a href=\"";
        // line 38
        echo (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) ? ($this->env->getExtension('routing')->getPath("logout")) : ($this->env->getExtension('routing')->getPath("login")));
        echo "\" class=\"button\">
                    ";
        // line 39
        echo (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) ? ("Logout") : ("Login"));
        echo "</a></li>
                  </ul>
                </section>
              </nav>
            </div>
          </div>
        </div>
        ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "      </div>
      <footer class=\"site-footer\" >
        <div class=\"large-12 columns\">
          <hr/>
          <div class=\"row\">
            <div class=\"large-5 columns\">
              <p>© Copyright.</p>
            </div>
            <div class=\"large-7 columns\">
              
            </div>
          </div>
        </div>
      </footer>
  <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/concursoestaticas/js/foundation.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/concursoestaticas/js/foundation/foundation.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/concursoestaticas/js/foundation/foundation.dropdown.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/concursoestaticas/js/foundation/foundation.tab.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/concursoestaticas/js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/concursoestaticas/js/foundation/foundation.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/concursoestaticas/js/foundation/foundation.topbar.js"), "html", null, true);
        echo "\"></script>
  <script>
    \$(document).foundation();
  </script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenido!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
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
        return array (  180 => 47,  177 => 46,  172 => 8,  166 => 5,  155 => 69,  151 => 68,  147 => 67,  143 => 66,  139 => 65,  135 => 64,  131 => 63,  115 => 49,  113 => 46,  103 => 39,  99 => 38,  95 => 37,  91 => 36,  87 => 35,  83 => 34,  79 => 33,  75 => 32,  71 => 31,  52 => 15,  42 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
