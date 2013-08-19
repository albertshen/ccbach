<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_f2cba7216124c659cceda5284ceca679 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "editable")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 17
            echo "    ";
            if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                // line 18
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "value" => 0, "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <i class=\"icon-ok-circle\"></i>&nbsp;";
                // line 20
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
                // line 21
                echo "</a>
    ";
            } else {
                // line 23
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "value" => 1, "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <i class=\"icon-ban-circle\"></i>&nbsp;";
                // line 25
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
                // line 26
                echo "</a>
    ";
            }
        } else {
            // line 29
            echo "    ";
            if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                // line 30
                echo "        <i class=\"icon-ok-circle\"></i>&nbsp;";
                // line 31
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            } else {
                // line 33
                echo "        <i class=\"icon-ban-circle\"></i>&nbsp;";
                // line 34
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 34,  67 => 33,  64 => 31,  62 => 30,  59 => 29,  54 => 26,  43 => 21,  36 => 18,  33 => 17,  44 => 18,  40 => 17,  28 => 14,  52 => 25,  47 => 23,  41 => 20,  37 => 21,  35 => 20,  23 => 12,  20 => 11,  34 => 16,  31 => 16,  29 => 15,  26 => 14,  22 => 12,  19 => 11,);
    }
}
