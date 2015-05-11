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
\t\t";
        // line 4
        $context["i"] = 0;
        // line 5
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lista"]) ? $context["lista"] : $this->getContext($context, "lista")));
        foreach ($context['_seq'] as $context["_key"] => $context["dir"]) {
            // line 6
            echo "\t\t\t";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
                // line 7
                echo "\t\t\t\t<div class=\"large-6 columns\">
\t\t\t\t\t<img src='";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["dir"]), "html", null, true);
                echo "' >
\t\t\t\t</div>
\t\t\t";
                // line 10
                $context["i"] = 1;
                // line 11
                echo "\t\t\t";
            } else {
                // line 12
                echo "\t\t\t\t<div class=\"large-6 columns\">
\t\t\t\t\t<img src='";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["dir"]), "html", null, true);
                echo "' >
\t\t\t\t</div>
\t\t\t";
                // line 15
                $context["i"] = 0;
                // line 16
                echo "\t\t\t";
            }
            // line 17
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
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
        return array (  84 => 18,  78 => 17,  75 => 16,  73 => 15,  68 => 13,  65 => 12,  62 => 11,  60 => 10,  55 => 8,  52 => 7,  49 => 6,  44 => 5,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
