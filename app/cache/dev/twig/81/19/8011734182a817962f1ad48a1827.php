<?php

/* SonataAdminBundle:CRUD:list__action_view.html.twig */
class __TwigTemplate_81198011734182a817962f1ad48a1827 extends Twig_Template
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
";
        // line 12
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method")) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn view_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"icon-zoom-in\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 15,  24 => 13,  51 => 17,  69 => 34,  67 => 33,  64 => 31,  62 => 30,  59 => 29,  54 => 26,  43 => 21,  36 => 18,  33 => 17,  44 => 18,  40 => 17,  28 => 14,  52 => 25,  47 => 16,  41 => 20,  37 => 21,  35 => 20,  23 => 12,  20 => 11,  34 => 16,  31 => 16,  29 => 15,  26 => 14,  22 => 12,  19 => 11,);
    }
}
