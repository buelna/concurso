<?php

/* ConcursoEstaticasBundle:Default:index.html.twig */
class __TwigTemplate_82111dbe89902123782c73c726dfcc3c200146eee03dfe1f23ff7b7d0e7aadd8 extends Twig_Template
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
        echo "      <div class=\"row\">
        <div class=\"large-12 columns\" align=\"center\">
          <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("banner_concurso2015.jpg"), "html", null, true);
        echo "\">
          <br/>
          <br/>
          <br/>
          <br/>
          <hr>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-4 columns\">
         
        </div>
        <div class=\"large-8 columns\">
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-8 columns\">
         
        </div>
        <div class=\"large-4 columns\">
          
        </div>
      </div>
    
       
";
    }

    public function getTemplateName()
    {
        return "ConcursoEstaticasBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }
}
