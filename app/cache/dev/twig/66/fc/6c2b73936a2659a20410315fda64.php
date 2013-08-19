<?php

/* SonataMediaBundle:Provider:view_image.html.twig */
class __TwigTemplate_66fc6c2b73936a2659a20410315fda64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<img ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " />
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,  251 => 105,  241 => 101,  233 => 98,  229 => 96,  225 => 95,  218 => 91,  212 => 88,  205 => 84,  198 => 80,  194 => 79,  184 => 74,  177 => 72,  173 => 71,  168 => 69,  163 => 66,  158 => 64,  153 => 63,  147 => 61,  145 => 60,  140 => 58,  134 => 55,  130 => 54,  124 => 51,  120 => 50,  114 => 47,  110 => 46,  104 => 43,  100 => 42,  94 => 39,  90 => 38,  84 => 35,  80 => 34,  77 => 33,  69 => 30,  65 => 28,  63 => 27,  57 => 24,  53 => 22,  51 => 21,  46 => 19,  38 => 17,  35 => 16,  29 => 14,);
    }
}
