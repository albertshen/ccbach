<?php

/* SonataAdminBundle:Button:acl_button.html.twig */
class __TwigTemplate_c7fa11aa3f1a192a88e36a0869676b57 extends Twig_Template
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
        if (((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-user\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:acl_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 15,  24 => 13,  22 => 12,  19 => 11,  692 => 207,  686 => 204,  683 => 203,  681 => 202,  675 => 199,  665 => 198,  660 => 196,  648 => 194,  645 => 193,  642 => 192,  634 => 187,  631 => 186,  614 => 184,  597 => 183,  592 => 181,  587 => 180,  584 => 179,  581 => 178,  575 => 174,  571 => 172,  569 => 171,  564 => 170,  547 => 168,  530 => 167,  526 => 166,  521 => 165,  518 => 164,  515 => 163,  512 => 162,  509 => 161,  507 => 160,  504 => 159,  495 => 154,  491 => 152,  489 => 151,  486 => 150,  484 => 149,  481 => 148,  477 => 128,  471 => 126,  465 => 124,  462 => 123,  459 => 122,  452 => 143,  446 => 141,  444 => 140,  441 => 139,  435 => 136,  432 => 135,  430 => 134,  425 => 132,  414 => 130,  411 => 129,  409 => 122,  400 => 121,  395 => 118,  389 => 115,  386 => 114,  384 => 113,  380 => 112,  375 => 110,  368 => 109,  365 => 108,  362 => 107,  352 => 101,  346 => 99,  340 => 97,  338 => 96,  330 => 94,  327 => 93,  319 => 90,  307 => 87,  289 => 81,  286 => 80,  282 => 79,  274 => 77,  269 => 75,  243 => 65,  238 => 64,  236 => 63,  228 => 59,  223 => 58,  208 => 57,  203 => 56,  197 => 54,  191 => 50,  184 => 47,  157 => 41,  152 => 38,  146 => 34,  139 => 31,  121 => 29,  118 => 28,  115 => 27,  107 => 24,  95 => 20,  90 => 18,  87 => 17,  81 => 15,  79 => 14,  76 => 13,  52 => 107,  47 => 75,  44 => 74,  42 => 62,  39 => 61,  34 => 53,  291 => 82,  283 => 131,  277 => 78,  271 => 127,  265 => 125,  259 => 123,  256 => 122,  254 => 68,  251 => 120,  239 => 112,  233 => 62,  227 => 105,  221 => 102,  215 => 99,  207 => 96,  205 => 95,  200 => 55,  194 => 89,  188 => 86,  183 => 84,  178 => 45,  176 => 82,  173 => 42,  156 => 73,  151 => 72,  149 => 36,  141 => 67,  136 => 60,  128 => 58,  123 => 30,  120 => 56,  112 => 26,  110 => 25,  104 => 23,  98 => 21,  92 => 19,  86 => 43,  72 => 192,  70 => 33,  67 => 178,  62 => 159,  59 => 158,  54 => 147,  51 => 24,  38 => 17,  361 => 96,  358 => 95,  353 => 93,  349 => 100,  344 => 91,  341 => 90,  333 => 95,  331 => 87,  328 => 86,  321 => 91,  316 => 83,  314 => 82,  311 => 89,  305 => 79,  303 => 139,  297 => 84,  294 => 136,  288 => 72,  284 => 70,  281 => 69,  278 => 68,  272 => 76,  266 => 64,  263 => 71,  261 => 62,  258 => 61,  255 => 60,  250 => 67,  247 => 66,  242 => 31,  224 => 27,  217 => 25,  210 => 97,  193 => 23,  189 => 21,  186 => 20,  181 => 100,  177 => 98,  175 => 43,  170 => 58,  167 => 78,  165 => 54,  161 => 75,  144 => 33,  138 => 61,  132 => 59,  129 => 44,  125 => 43,  122 => 42,  116 => 40,  114 => 39,  101 => 22,  84 => 16,  78 => 40,  75 => 39,  64 => 177,  61 => 13,  57 => 148,  40 => 6,  37 => 54,  35 => 16,  32 => 13,  29 => 11,  23 => 1,  97 => 37,  94 => 36,  88 => 32,  83 => 29,  80 => 41,  77 => 27,  74 => 26,  71 => 25,  69 => 191,  66 => 15,  63 => 22,  55 => 18,  49 => 106,  46 => 21,  43 => 20,  12 => 34,);
    }
}
