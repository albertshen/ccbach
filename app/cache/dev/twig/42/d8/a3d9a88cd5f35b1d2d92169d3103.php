<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_42d8a3d9a88cd5f35b1d2d92169d3103 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "        <table class=\"table table-bordered table-striped sonata-ba-list\">
            <thead>
                <tr>
                    <th colspan=\"3\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
            echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                // line 25
                echo "                    ";
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")))) {
                    // line 26
                    echo "                        <tr>
                            <td class=\"sonata-ba-list-label\">";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                    echo "</td>
                            <td>
                                <div class=\"btn-group\">
                                    ";
                    // line 30
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 31
                        echo "                                        ";
                        if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                            // line 32
                            echo "                                            <a class=\"btn btn-small\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                            echo "\">
                                                <i class=\"icon-plus\"></i>
                                                ";
                            // line 34
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                            // line 35
                            echo "                                            </a>
                                        ";
                        } else {
                            // line 37
                            echo "                                            <a class=\"btn btn-small dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"icon-plus\"></i>
                                                ";
                            // line 39
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                            // line 40
                            echo "                                                <span class=\"caret\"></span>
                                            </a>
                                            <ul class=\"dropdown-menu\">
                                                ";
                            // line 43
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                            foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                // line 44
                                echo "                                                <li>
                                                    <a href=\"";
                                // line 45
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), "html", null, true);
                                echo "</a>
                                                </li>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 48
                            echo "                                            </ul>
                                        ";
                        }
                        // line 50
                        echo "                                    ";
                    }
                    // line 51
                    echo "                                    ";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                        // line 52
                        echo "                                        <a class=\"btn btn-small\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                        echo "\">
                                            <i class=\"icon-list\"></i>
                                            ";
                        // line 54
                        echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                        // line 55
                        echo "</a>
                                    ";
                    }
                    // line 57
                    echo "                                </div>
                            </td>
                        </tr>
                    ";
                }
                // line 61
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "            </tbody>
        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 62,  139 => 61,  133 => 57,  129 => 55,  127 => 54,  121 => 52,  118 => 51,  115 => 50,  111 => 48,  100 => 45,  97 => 44,  93 => 43,  86 => 39,  78 => 35,  70 => 32,  67 => 31,  56 => 26,  49 => 24,  41 => 19,  36 => 16,  31 => 15,  88 => 40,  82 => 37,  76 => 34,  73 => 27,  69 => 26,  65 => 30,  59 => 27,  53 => 25,  50 => 20,  46 => 19,  42 => 17,  39 => 16,  34 => 15,  28 => 14,);
    }
}
