<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_b9c0ced69419466fc75d7b4fd567106e extends Twig_Template
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
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  70 => 26,  66 => 25,  50 => 15,  24 => 2,  19 => 1,  43 => 8,  35 => 5,  20 => 1,  647 => 215,  644 => 214,  639 => 209,  632 => 205,  626 => 202,  622 => 200,  620 => 199,  617 => 198,  611 => 196,  609 => 195,  606 => 194,  600 => 192,  598 => 191,  595 => 190,  589 => 188,  587 => 187,  584 => 186,  578 => 184,  576 => 183,  573 => 182,  570 => 181,  565 => 169,  561 => 138,  555 => 137,  546 => 134,  541 => 133,  536 => 132,  533 => 131,  528 => 130,  525 => 129,  519 => 119,  515 => 118,  512 => 117,  504 => 114,  498 => 113,  490 => 111,  487 => 110,  483 => 109,  478 => 107,  475 => 106,  470 => 105,  467 => 104,  464 => 103,  458 => 102,  452 => 120,  449 => 119,  446 => 103,  444 => 102,  440 => 100,  437 => 99,  430 => 95,  424 => 94,  419 => 93,  416 => 92,  409 => 56,  403 => 55,  399 => 54,  394 => 52,  389 => 50,  385 => 49,  381 => 48,  375 => 45,  371 => 43,  365 => 42,  361 => 40,  358 => 39,  352 => 36,  348 => 35,  342 => 32,  338 => 31,  333 => 29,  330 => 28,  327 => 27,  320 => 221,  318 => 214,  313 => 211,  311 => 181,  307 => 180,  304 => 179,  298 => 176,  295 => 175,  293 => 174,  287 => 170,  285 => 169,  280 => 166,  276 => 164,  270 => 162,  267 => 161,  264 => 160,  250 => 159,  244 => 157,  239 => 154,  233 => 152,  225 => 150,  223 => 149,  220 => 148,  217 => 147,  199 => 146,  196 => 145,  194 => 144,  191 => 143,  189 => 142,  184 => 139,  182 => 129,  175 => 124,  172 => 123,  170 => 99,  167 => 98,  165 => 92,  158 => 90,  156 => 89,  144 => 79,  138 => 77,  134 => 75,  131 => 74,  128 => 73,  111 => 71,  107 => 69,  104 => 68,  87 => 67,  81 => 65,  75 => 28,  73 => 62,  68 => 60,  64 => 58,  62 => 24,  59 => 38,  57 => 27,  48 => 20,  46 => 14,  44 => 18,  42 => 12,  40 => 16,  38 => 15,  36 => 14,  34 => 13,  30 => 5,  84 => 66,  76 => 30,  63 => 20,  55 => 15,  49 => 12,  45 => 10,  39 => 8,  37 => 6,  32 => 6,  29 => 3,  26 => 3,);
    }
}
