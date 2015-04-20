<?php

/* RegistroBundle:Equipo:new.html.twig */
class __TwigTemplate_a60605ca902dd0e141784e1f6e959168458063acb60b19ef77e22652daf30733 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"row\">
        <div class=\"large-12 columns\" >
            </br></br>
            <h1 align=\"center\">Creación de equipo</h1></br>

            <div class=\"large-6 columns\" >

    \t    \t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("equipo_new"), "method" => "POST"));
        echo " 
                        \t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idUsuario", array()), 'errors');
        echo "
                            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'label', array("label" => "Nombre del equipo"));
        echo "
                            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'widget');
        echo "
                            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preparatoria", array()), 'label', array("label" => "Preparatoria de procedencia"));
        echo "
                            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preparatoria", array()), 'widget');
        echo "
                            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lenguaje", array()), 'label', array("label" => "Lenguaje de programación"));
        echo "
                            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lenguaje", array()), 'widget');
        echo "
                            <p hidden>
                            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idUsuario", array()), 'widget');
        echo "</p>
                            <br>
                            <button type=\"submit\" class=\"btn-blue width-50\" >Guardar</button>
                             <br>
                    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    \t\t</div>
    \t</div>
    </div>    
     
";
    }

    public function getTemplateName()
    {
        return "RegistroBundle:Equipo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  81 => 20,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  39 => 4,  36 => 3,  11 => 1,);
    }
}
