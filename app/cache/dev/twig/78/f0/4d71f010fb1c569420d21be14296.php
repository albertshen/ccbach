<?php

/* SonataMediaBundle:MediaAdmin:list.html.twig */
class __TwigTemplate_78f04d71f010fb1c569420d21be14296 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig");

        $this->blocks = array(
            'preview' => array($this, 'block_preview'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_preview($context, array $blocks = array())
    {
        // line 16
        echo "
    <ul class=\"nav nav-pills\">
        <li><a><strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_context", array(), "SonataMediaBundle"), "html", null, true);
        echo "</strong></a></li>
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["media_pool"]) ? $context["media_pool"] : $this->getContext($context, "media_pool")), "contexts"));
        foreach ($context['_seq'] as $context["name"] => $context["context"]) {
            // line 20
            echo "            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "providers")) == 0)) {
                // line 21
                echo "                ";
                $context["urlParams"] = array("context" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 22
                echo "            ";
            } else {
                // line 23
                echo "                ";
                $context["urlParams"] = array("context" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "provider" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "providers"), 0, array(), "array"));
                // line 24
                echo "            ";
            }
            // line 25
            echo "
            ";
            // line 26
            if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context"))) {
                // line 27
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["urlParams"]) ? $context["urlParams"] : $this->getContext($context, "urlParams"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 29
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["urlParams"]) ? $context["urlParams"] : $this->getContext($context, "urlParams"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 31
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
        ";
        // line 33
        $context["providers"] = $this->getAttribute((isset($context["media_pool"]) ? $context["media_pool"] : $this->getContext($context, "media_pool")), "getProviderNamesByContext", array(0 => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context")), "method");
        // line 34
        echo "
        ";
        // line 35
        if ((twig_length_filter($this->env, (isset($context["providers"]) ? $context["providers"] : $this->getContext($context, "providers"))) > 1)) {
            // line 36
            echo "            <li><a><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_provider", array(), "SonataMediaBundle"), "html", null, true);
            echo "</strong></a></li>

            ";
            // line 38
            if ((!$this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "provider"))) {
                // line 39
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context"), "provider" => null)), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.all_providers", array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 41
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context"), "provider" => null)), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.all_providers", array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 43
            echo "
            ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["providers"]) ? $context["providers"] : $this->getContext($context, "providers")));
            foreach ($context['_seq'] as $context["_key"] => $context["provider_name"]) {
                // line 45
                echo "                ";
                if (($this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "provider") == (isset($context["provider_name"]) ? $context["provider_name"] : $this->getContext($context, "provider_name")))) {
                    // line 46
                    echo "                    <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context"), "provider" => (isset($context["provider_name"]) ? $context["provider_name"] : $this->getContext($context, "provider_name")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["provider_name"]) ? $context["provider_name"] : $this->getContext($context, "provider_name")), array(), "SonataMediaBundle"), "html", null, true);
                    echo "</a></li>
                ";
                } else {
                    // line 48
                    echo "                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context"), "provider" => (isset($context["provider_name"]) ? $context["provider_name"] : $this->getContext($context, "provider_name")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["provider_name"]) ? $context["provider_name"] : $this->getContext($context, "provider_name")), array(), "SonataMediaBundle"), "html", null, true);
                    echo "</a></li>
                ";
                }
                // line 50
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        ";
        }
        // line 52
        echo "    </ul>

";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 52,  151 => 51,  145 => 50,  137 => 48,  129 => 46,  126 => 45,  122 => 44,  119 => 43,  111 => 41,  103 => 39,  101 => 38,  95 => 36,  93 => 35,  90 => 34,  88 => 33,  85 => 32,  79 => 31,  71 => 29,  63 => 27,  61 => 26,  58 => 25,  55 => 24,  52 => 23,  49 => 22,  46 => 21,  43 => 20,  39 => 19,  35 => 18,  31 => 16,  28 => 15,);
    }
}
