<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_5b474e81990800c4427fdf9fd9122806 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "html", null, true);
            echo "

        ";
            // line 5
            if (($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"))) {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"), "route"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"), "parameters"), array("_switch_user" => "_exit"))), "html", null, true);
                echo "\">(exit)</a>
        ";
            }
            // line 8
            echo "
        - <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getUrl("sonata_user_admin_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  35 => 5,  20 => 1,  647 => 215,  644 => 214,  639 => 209,  632 => 205,  626 => 202,  622 => 200,  620 => 199,  617 => 198,  611 => 196,  609 => 195,  606 => 194,  600 => 192,  598 => 191,  595 => 190,  589 => 188,  587 => 187,  584 => 186,  578 => 184,  576 => 183,  573 => 182,  570 => 181,  565 => 169,  561 => 138,  555 => 137,  546 => 134,  541 => 133,  536 => 132,  533 => 131,  528 => 130,  525 => 129,  519 => 119,  515 => 118,  512 => 117,  504 => 114,  498 => 113,  490 => 111,  487 => 110,  483 => 109,  478 => 107,  475 => 106,  470 => 105,  467 => 104,  464 => 103,  458 => 102,  452 => 120,  449 => 119,  446 => 103,  444 => 102,  440 => 100,  437 => 99,  430 => 95,  424 => 94,  419 => 93,  416 => 92,  409 => 56,  403 => 55,  399 => 54,  394 => 52,  389 => 50,  385 => 49,  381 => 48,  375 => 45,  371 => 43,  365 => 42,  361 => 40,  358 => 39,  352 => 36,  348 => 35,  342 => 32,  338 => 31,  333 => 29,  330 => 28,  327 => 27,  320 => 221,  318 => 214,  313 => 211,  311 => 181,  307 => 180,  304 => 179,  298 => 176,  295 => 175,  293 => 174,  287 => 170,  285 => 169,  280 => 166,  276 => 164,  270 => 162,  267 => 161,  264 => 160,  250 => 159,  244 => 157,  239 => 154,  233 => 152,  225 => 150,  223 => 149,  220 => 148,  217 => 147,  199 => 146,  196 => 145,  194 => 144,  191 => 143,  189 => 142,  184 => 139,  182 => 129,  175 => 124,  172 => 123,  170 => 99,  167 => 98,  165 => 92,  158 => 90,  156 => 89,  144 => 79,  138 => 77,  134 => 75,  131 => 74,  128 => 73,  111 => 71,  107 => 69,  104 => 68,  87 => 67,  81 => 65,  75 => 63,  73 => 62,  68 => 60,  64 => 58,  62 => 39,  59 => 38,  57 => 27,  48 => 20,  46 => 9,  44 => 18,  42 => 17,  40 => 16,  38 => 15,  36 => 14,  34 => 13,  30 => 11,  84 => 66,  76 => 30,  63 => 20,  55 => 15,  49 => 12,  45 => 10,  39 => 8,  37 => 6,  32 => 12,  29 => 3,  26 => 2,);
    }
}
