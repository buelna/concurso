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
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/concursoestaticas/css/orbit.css"), "html", null, true);
        echo "\" />
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body >
      <div class=\"page-wrap\">
          <div class=\"row\">
               <div class=\"large-12 columns\">
                  <img src=\"";
        // line 16
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
        // line 32
        echo $this->env->getExtension('routing')->getPath("inicio");
        echo "\">Inicio</a></li>
                    <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("convocatoria");
        echo "\">Convocatoria</a></li>
                    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("programa");
        echo "\">Programa</a></li>
                    <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("ejemplos");
        echo "\">Ejemplos</a></li>
                    <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("registro");
        echo "\">Pre-Registro</a></li>
                    <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("galeria");
        echo "\">Galería</a></li>
                    <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("contactos");
        echo "\">Contactos</a></li>
                    <li><a href=\"";
        // line 39
        echo (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) ? ($this->env->getExtension('routing')->getPath("logout")) : ($this->env->getExtension('routing')->getPath("login")));
        echo "\" class=\"button\">
                    ";
        // line 40
        echo (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) ? ("Logout") : ("Login"));
        echo "</a></li>
                  </ul>
                </section>
              </nav>
            </div>
          </div>
        </div>
        ";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 50
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
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/concursoestaticas/js/foundation.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/concursoestaticas/js/foundation/foundation.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/concursoestaticas/js/foundation/foundation.dropdown.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/concursoestaticas/js/foundation/foundation.tab.js"), "html", null, true);
        echo "\"></script>
 ";
        // line 69
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/concursoestaticas/js/foundation/foundation.topbar.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/concursoestaticas/js/orbit.js"), "html", null, true);
        echo "\"></script>

<script>
 \$(document).foundation();
\$(document).foundation({
  orbit: {
    animation: 'slide',
    timer_speed: 1000,
    pause_on_hover: true,
    animation_speed: 500,
    navigation_arrows: true,
    variable_height: false,
    bullets: false
  }
});

     \$.fn.pageMe = function(opts){
    var \$this = this,
        defaults = {
            perPage: 20,
            showPrevNext: false,
            hidePageNumbers: false
        },
        settings = \$.extend(defaults, opts);
    
    var listElement = \$this;
    var perPage = 15; 
    var children = listElement.children();
    var pager = \$('.pager');
    
    if (typeof settings.childSelector!=\"undefined\") {
        children = listElement.find(settings.childSelector);
    }
    
    if (typeof settings.pagerSelector!=\"undefined\") {
        pager = \$(settings.pagerSelector);
    }
    
    var numItems = children.size();
    var numPages = Math.ceil(numItems/perPage);

    pager.data(\"curr\",0);
    
    if (settings.showPrevNext){
        \$('<li ><a href=\"#\" class=\"prev_link\" style=\"font-size:20px; font-color:#ffffff;\">«</a></li>').appendTo(pager);
    }
    
    var curr = 0;
    while(numPages > curr && (settings.hidePageNumbers==false)){
        \$('<li style=\"font-size:20px; font-color:#000;\"><a href=\"#\" class=\"page_link\">'+(curr+1)+'</a></li>').appendTo(pager);
        curr++;
    }
    
    if (settings.showPrevNext){
        \$('<li style=\"font-size:20px; font-color:#000;\"><a href=\"#\" class=\"next_link\">»</a></li>').appendTo(pager);
    }
    
    pager.find('.page_link:first').addClass('active');
    pager.find('.prev_link').hide();
    if (numPages<=1) {
        pager.find('.next_link').hide();
    }
    pager.children().eq(1).addClass(\"active\");
    
    children.hide();
    children.slice(0, perPage).show();
    
    pager.find('li .page_link').click(function(){
        var clickedPage = \$(this).html().valueOf()-1;
        goTo(clickedPage,perPage);
        return false;
    });
    pager.find('li .prev_link').click(function(){
        previous();
        return false;
    });
    pager.find('li .next_link').click(function(){
        next();
        return false;
    });
    
    function previous(){
        var goToPage = parseInt(pager.data(\"curr\")) - 1;
        goTo(goToPage);
    }
     
    function next(){
        goToPage = parseInt(pager.data(\"curr\")) + 1;
        goTo(goToPage);
    }
    
    function goTo(page){
        var startAt = page * perPage,
            endOn = startAt + perPage;
        
        children.css('display','none').slice(startAt, endOn).show();
        
        if (page>=1) {
            pager.find('.prev_link').show();
        }
        else {
            pager.find('.prev_link').hide();
        }
        
        if (page<(numPages-1)) {
            pager.find('.next_link').show();
        }
        else {
            pager.find('.next_link').hide();
        }
        
        pager.data(\"curr\",page);
        pager.children().removeClass(\"active\");
        pager.children().eq(page+1).addClass(\"active\");
    
    }
};

\$(document).ready(function(){
    
  \$('#myTable').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:4});
    
});



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

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        // line 48
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
        return array (  304 => 48,  301 => 47,  296 => 9,  290 => 5,  156 => 70,  151 => 69,  147 => 67,  143 => 66,  139 => 65,  135 => 64,  119 => 50,  117 => 47,  107 => 40,  103 => 39,  99 => 38,  95 => 37,  91 => 36,  87 => 35,  83 => 34,  79 => 33,  75 => 32,  56 => 16,  46 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
