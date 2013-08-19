<?php

/* SonataMediaBundle:MediaAdmin:list_custom.html.twig */
class __TwigTemplate_f2d8cf5d56482bb064afa9b0fcd1b5c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <div>
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))))), "method"), "html", null, true);
        echo "\" style=\"float: left; margin-right: 6px;\">";
        echo $this->env->getExtension('sonata_media')->thumbnail((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "admin", array("width" => 75, "height" => 60));
        echo "</a>
        <strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "name"), "html", null, true);
        echo "</strong> <br />
        ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "providerName"), array(), "SonataMediaBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "width"), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "height"), "html", null, true);
        echo " <br />
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list_custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  40 => 17,  28 => 14,  52 => 20,  47 => 25,  41 => 23,  37 => 21,  35 => 20,  23 => 12,  20 => 11,  34 => 16,  31 => 15,  29 => 13,  26 => 14,  22 => 12,  19 => 11,);
    }
}
