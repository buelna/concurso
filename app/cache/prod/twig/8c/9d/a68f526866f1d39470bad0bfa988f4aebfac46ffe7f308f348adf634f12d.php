<?php

/* ConcursoEstaticasBundle:Default:galeria.html.twig */
class __TwigTemplate_8c9da68f526866f1d39470bad0bfa988f4aebfac46ffe7f308f348adf634f12d extends Twig_Template
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
\t<section  class=\"section_light\">
\t\t<div class=\"row\"><br>
\t\t\t<div class=\"orbit-container\">
\t\t\t\t<ul class=\"example-orbit\" data-orbit >
\t\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listas"]) ? $context["listas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 9
            echo "\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["lista"]);
            foreach ($context['_seq'] as $context["_key"] => $context["dir"]) {
                // line 10
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<img src='";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["dir"]), "html", null, true);
                echo "' >
\t\t\t\t\t\t\t<!-- <div class=\"orbit-caption\">
\t\t\t\t                Caption One.
\t\t\t\t            </div>-->
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dir'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</section>
\t\t";
        // line 38
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "ConcursoEstaticasBundle:Default:galeria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 38,  76 => 18,  70 => 17,  58 => 11,  55 => 10,  50 => 9,  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
