<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_a7ed7cfbd4dd05640009ff01fe08cab1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"editable\">
        <h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 5
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices"))) > 0)) {
            // line 8
            echo "    <div class=\"readonly\">
        <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 12
                echo "            <li>";
                echo twig_escape_filter($this->env, (isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  26 => 2,  20 => 1,  344 => 97,  340 => 95,  338 => 94,  335 => 93,  321 => 92,  315 => 90,  312 => 89,  295 => 88,  288 => 85,  285 => 84,  282 => 83,  280 => 82,  277 => 81,  264 => 72,  259 => 70,  254 => 69,  252 => 68,  249 => 67,  227 => 60,  220 => 56,  215 => 54,  199 => 53,  196 => 52,  190 => 50,  187 => 49,  184 => 48,  181 => 47,  178 => 46,  176 => 45,  173 => 44,  161 => 38,  158 => 37,  143 => 29,  140 => 28,  131 => 25,  124 => 23,  121 => 22,  118 => 21,  110 => 18,  102 => 17,  80 => 9,  73 => 7,  60 => 3,  53 => 80,  48 => 67,  42 => 8,  34 => 41,  32 => 35,  29 => 34,  27 => 3,  24 => 2,  564 => 178,  553 => 176,  549 => 175,  541 => 172,  536 => 170,  530 => 168,  528 => 167,  522 => 163,  513 => 160,  509 => 159,  503 => 158,  500 => 157,  496 => 156,  491 => 154,  484 => 152,  476 => 150,  473 => 149,  470 => 148,  466 => 134,  463 => 133,  459 => 132,  456 => 131,  453 => 130,  449 => 123,  445 => 122,  442 => 121,  437 => 104,  426 => 102,  422 => 101,  415 => 97,  411 => 96,  406 => 95,  403 => 94,  391 => 83,  388 => 82,  384 => 106,  382 => 94,  378 => 92,  376 => 82,  373 => 81,  370 => 80,  365 => 135,  363 => 130,  357 => 126,  353 => 124,  351 => 121,  348 => 120,  343 => 117,  329 => 116,  320 => 115,  303 => 114,  298 => 113,  296 => 112,  292 => 87,  287 => 108,  284 => 107,  281 => 80,  278 => 79,  276 => 78,  271 => 76,  268 => 73,  265 => 74,  260 => 71,  245 => 69,  242 => 68,  239 => 67,  222 => 66,  219 => 65,  216 => 64,  210 => 60,  204 => 59,  201 => 58,  197 => 56,  193 => 51,  188 => 54,  182 => 53,  170 => 52,  168 => 51,  165 => 50,  162 => 49,  159 => 48,  156 => 36,  153 => 35,  150 => 45,  147 => 44,  144 => 43,  141 => 42,  138 => 41,  136 => 40,  132 => 38,  123 => 33,  115 => 30,  112 => 19,  104 => 143,  98 => 15,  94 => 139,  92 => 138,  89 => 137,  87 => 74,  84 => 73,  82 => 10,  77 => 8,  74 => 28,  68 => 6,  65 => 5,  62 => 24,  59 => 23,  56 => 81,  50 => 11,  45 => 9,  40 => 7,  37 => 43,  154 => 52,  151 => 51,  145 => 50,  137 => 27,  129 => 24,  126 => 34,  122 => 44,  119 => 32,  111 => 41,  103 => 39,  101 => 142,  95 => 36,  93 => 35,  90 => 34,  88 => 12,  85 => 32,  79 => 63,  71 => 29,  63 => 14,  61 => 26,  58 => 25,  55 => 24,  52 => 23,  49 => 22,  46 => 21,  43 => 16,  39 => 19,  35 => 5,  31 => 4,  28 => 3,);
    }
}
