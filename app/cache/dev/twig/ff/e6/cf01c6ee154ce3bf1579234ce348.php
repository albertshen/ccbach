<?php

/* SonataAdminBundle:Button:create_button.html.twig */
class __TwigTemplate_ffe6cf01c6ee154ce3bf1579234ce348 extends Twig_Template
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
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                // line 14
                echo "        <a class=\"btn sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"icon-plus\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <span class=\"btn-group sonata-action-element\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-plus\"></i>
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 26
                    echo "                    <li>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            </ul>
        </span>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 27,  38 => 18,  33 => 16,  22 => 12,  19 => 11,  1352 => 388,  1343 => 387,  1341 => 386,  1338 => 385,  1322 => 381,  1315 => 380,  1313 => 379,  1310 => 378,  1287 => 374,  1262 => 373,  1260 => 372,  1257 => 371,  1245 => 366,  1240 => 365,  1238 => 364,  1235 => 363,  1226 => 357,  1220 => 355,  1217 => 354,  1212 => 353,  1210 => 352,  1207 => 351,  1200 => 346,  1191 => 344,  1187 => 343,  1184 => 342,  1181 => 341,  1179 => 340,  1176 => 339,  1168 => 335,  1166 => 334,  1163 => 333,  1157 => 329,  1151 => 327,  1148 => 326,  1146 => 325,  1143 => 324,  1134 => 319,  1132 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1097 => 313,  1094 => 312,  1091 => 311,  1089 => 310,  1086 => 309,  1079 => 305,  1075 => 304,  1070 => 303,  1068 => 302,  1065 => 301,  1058 => 296,  1055 => 295,  1047 => 290,  1044 => 289,  1042 => 288,  1039 => 287,  1031 => 282,  1027 => 281,  1023 => 280,  1020 => 279,  1018 => 278,  1015 => 277,  1007 => 273,  1005 => 269,  1003 => 268,  1000 => 267,  995 => 263,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  949 => 250,  946 => 249,  943 => 248,  941 => 247,  938 => 246,  930 => 240,  927 => 239,  925 => 238,  922 => 237,  914 => 233,  911 => 232,  909 => 231,  906 => 230,  894 => 226,  891 => 225,  888 => 224,  885 => 223,  883 => 222,  880 => 221,  872 => 217,  869 => 216,  867 => 215,  864 => 214,  856 => 210,  853 => 209,  851 => 208,  848 => 207,  840 => 203,  837 => 202,  835 => 201,  832 => 200,  824 => 196,  821 => 195,  819 => 194,  816 => 193,  808 => 189,  805 => 188,  803 => 187,  800 => 186,  792 => 182,  789 => 181,  787 => 180,  784 => 179,  776 => 175,  774 => 174,  771 => 173,  763 => 169,  760 => 168,  758 => 167,  755 => 166,  747 => 162,  744 => 161,  742 => 160,  740 => 159,  737 => 158,  730 => 153,  720 => 152,  715 => 151,  712 => 150,  706 => 148,  703 => 147,  701 => 146,  698 => 145,  690 => 139,  688 => 138,  687 => 137,  686 => 136,  685 => 135,  680 => 134,  674 => 132,  671 => 131,  669 => 130,  666 => 129,  657 => 123,  653 => 122,  649 => 121,  645 => 120,  640 => 119,  634 => 117,  631 => 116,  629 => 115,  626 => 114,  610 => 110,  608 => 109,  605 => 108,  589 => 104,  587 => 103,  584 => 102,  567 => 98,  555 => 96,  548 => 93,  546 => 92,  538 => 90,  520 => 89,  518 => 88,  515 => 87,  506 => 82,  494 => 78,  492 => 77,  487 => 76,  481 => 74,  471 => 72,  469 => 71,  461 => 70,  450 => 64,  433 => 60,  428 => 59,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  400 => 47,  390 => 43,  385 => 41,  377 => 37,  374 => 36,  371 => 35,  368 => 34,  366 => 33,  355 => 27,  350 => 26,  342 => 23,  337 => 22,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  290 => 5,  273 => 377,  266 => 363,  263 => 362,  258 => 351,  255 => 350,  253 => 339,  250 => 338,  248 => 333,  243 => 324,  240 => 323,  238 => 309,  235 => 308,  233 => 301,  230 => 300,  225 => 295,  217 => 286,  212 => 276,  207 => 266,  202 => 263,  194 => 245,  191 => 243,  189 => 237,  186 => 236,  179 => 221,  174 => 214,  171 => 213,  169 => 207,  166 => 206,  164 => 200,  149 => 179,  146 => 178,  139 => 166,  134 => 158,  116 => 113,  114 => 108,  109 => 102,  106 => 101,  99 => 68,  96 => 67,  91 => 56,  86 => 46,  81 => 40,  76 => 31,  69 => 13,  66 => 12,  64 => 3,  54 => 26,  26 => 2,  20 => 1,  344 => 24,  340 => 95,  338 => 94,  335 => 21,  321 => 92,  315 => 90,  312 => 89,  295 => 88,  288 => 4,  285 => 3,  282 => 83,  280 => 82,  277 => 81,  264 => 72,  259 => 70,  254 => 69,  252 => 68,  249 => 67,  227 => 298,  220 => 287,  215 => 277,  199 => 262,  196 => 52,  190 => 50,  187 => 49,  184 => 230,  181 => 229,  178 => 46,  176 => 220,  173 => 44,  161 => 199,  158 => 37,  143 => 29,  140 => 28,  131 => 157,  124 => 129,  121 => 128,  118 => 21,  110 => 18,  102 => 17,  80 => 9,  73 => 7,  60 => 3,  53 => 80,  48 => 67,  42 => 8,  34 => 41,  32 => 35,  29 => 34,  27 => 14,  24 => 13,  564 => 178,  553 => 176,  549 => 175,  541 => 91,  536 => 170,  530 => 168,  528 => 167,  522 => 163,  513 => 160,  509 => 159,  503 => 81,  500 => 80,  496 => 156,  491 => 154,  484 => 75,  476 => 150,  473 => 149,  470 => 148,  466 => 134,  463 => 133,  459 => 69,  456 => 68,  453 => 130,  449 => 123,  445 => 122,  442 => 62,  437 => 61,  426 => 58,  422 => 101,  415 => 97,  411 => 96,  406 => 95,  403 => 48,  391 => 83,  388 => 42,  384 => 106,  382 => 94,  378 => 92,  376 => 82,  373 => 81,  370 => 80,  365 => 135,  363 => 32,  357 => 126,  353 => 124,  351 => 121,  348 => 120,  343 => 117,  329 => 116,  320 => 115,  303 => 114,  298 => 113,  296 => 112,  292 => 87,  287 => 108,  284 => 107,  281 => 385,  278 => 384,  276 => 378,  271 => 371,  268 => 370,  265 => 74,  260 => 360,  245 => 332,  242 => 68,  239 => 67,  222 => 294,  219 => 65,  216 => 64,  210 => 267,  204 => 264,  201 => 58,  197 => 246,  193 => 51,  188 => 54,  182 => 53,  170 => 52,  168 => 51,  165 => 50,  162 => 49,  159 => 193,  156 => 192,  153 => 35,  150 => 45,  147 => 44,  144 => 173,  141 => 172,  138 => 41,  136 => 165,  132 => 38,  123 => 33,  115 => 30,  112 => 19,  104 => 87,  98 => 15,  94 => 57,  92 => 138,  89 => 47,  87 => 74,  84 => 41,  82 => 10,  77 => 8,  74 => 20,  68 => 30,  65 => 5,  62 => 24,  59 => 23,  56 => 81,  50 => 25,  45 => 9,  40 => 7,  37 => 43,  154 => 186,  151 => 185,  145 => 50,  137 => 27,  129 => 145,  126 => 144,  122 => 44,  119 => 114,  111 => 107,  103 => 39,  101 => 86,  95 => 36,  93 => 35,  90 => 34,  88 => 12,  85 => 32,  79 => 32,  71 => 19,  63 => 14,  61 => 2,  58 => 25,  55 => 24,  52 => 23,  49 => 22,  46 => 21,  43 => 21,  39 => 19,  35 => 5,  31 => 4,  28 => 3,);
    }
}
