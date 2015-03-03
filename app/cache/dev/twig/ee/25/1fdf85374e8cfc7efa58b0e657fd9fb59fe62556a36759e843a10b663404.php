<?php

/* RegistroBundle:Equipo:edit.html.twig */
class __TwigTemplate_ee251fdf85374e8cfc7efa58b0e657fd9fb59fe62556a36759e843a10b663404 extends Twig_Template
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
        echo "    <div class=\"row\">
        <div class=\"large-12 columns\" >
            </br></br>
            <h1 align=\"center\">Editar equipo</h1></br>

    \t\t<div class=\"large-6 columns\" >
        \t\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("equipo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "method" => "PUT"));
        echo " 
                    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label" => "Nombre del equipo"));
        echo "
                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preparatoria", array()), 'label', array("label" => "Preparatoria de procedencia"));
        echo "
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preparatoria", array()), 'widget');
        echo "
                    <br>
                    <p hidden>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idUsuario", array()), 'widget');
        echo "</p>
                    <button type=\"submit\" class=\"btn-blue width-50\" >Guardar</button>
                     <br>
                ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    \t\t</div>
    \t</div> 
    </div>        

        
";
    }

    public function getTemplateName()
    {
        return "RegistroBundle:Equipo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  68 => 16,  63 => 14,  59 => 13,  55 => 12,  51 => 11,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
