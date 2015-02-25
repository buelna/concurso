<?php

/* ConcursoEstaticasBundle:Default:index.html.twig */
class __TwigTemplate_cbfd7787872197caa45deba326f37f706dea98eef24528279e18c6f8e0fccc97 extends Twig_Template
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
        <div class=\"large-12 columns\">
          <img src=\"http://placehold.it/1000x400&text=[img]\">
     
          <hr>
        </div>
      </div>
      <div class=\"row\">

        <div class=\"large-4 columns\">
          <img src=\"http://placehold.it/400x300&text=[img]\">
        </div>
        <div class=\"large-8 columns\">
          <h4>This is a content section.</h4>
          <div class=\"row\">
            <div class=\"large-6 columns\">
              <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
            </div>
            <div class=\"large-6 columns\">
              <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
            </div>
          </div>
        </div>
      </div>
     
     
       
     
      <div class=\"row\">
        <div class=\"large-8 columns\">
          <h4>This is a content section.</h4>
     
          <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
     
          <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
     
        </div>
        <div class=\"large-4 columns\">
          <img src=\"http://placehold.it/400x300&text=[img]\">
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
        return array (  39 => 3,  36 => 2,  11 => 1,);
    }
}
