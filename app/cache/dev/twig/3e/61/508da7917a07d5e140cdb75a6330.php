<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_3e61508da7917a07d5e140cdb75a6330 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
