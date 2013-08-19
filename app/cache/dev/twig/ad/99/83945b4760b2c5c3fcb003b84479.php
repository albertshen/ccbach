<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_ad9983945b4760b2c5c3fcb003b84479 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  70 => 26,  66 => 25,  50 => 15,  24 => 2,  19 => 1,  43 => 8,  35 => 5,  20 => 1,  647 => 215,  644 => 214,  639 => 209,  632 => 205,  626 => 202,  622 => 200,  620 => 199,  617 => 198,  611 => 196,  609 => 195,  606 => 194,  600 => 192,  598 => 191,  595 => 190,  589 => 188,  587 => 187,  584 => 186,  578 => 184,  576 => 183,  573 => 182,  570 => 181,  565 => 169,  561 => 138,  555 => 137,  546 => 134,  541 => 133,  536 => 132,  533 => 131,  528 => 130,  525 => 129,  519 => 119,  515 => 118,  512 => 117,  504 => 114,  498 => 113,  490 => 111,  487 => 110,  483 => 109,  478 => 107,  475 => 106,  470 => 105,  467 => 104,  464 => 103,  458 => 102,  452 => 120,  449 => 119,  446 => 103,  444 => 102,  440 => 100,  437 => 99,  430 => 95,  424 => 94,  419 => 93,  416 => 92,  409 => 56,  403 => 55,  399 => 54,  394 => 52,  389 => 50,  385 => 49,  381 => 48,  375 => 45,  371 => 43,  365 => 42,  361 => 40,  358 => 39,  352 => 36,  348 => 35,  342 => 32,  338 => 31,  333 => 29,  330 => 28,  327 => 27,  320 => 221,  318 => 214,  313 => 211,  311 => 181,  307 => 180,  304 => 179,  298 => 176,  295 => 175,  293 => 174,  287 => 170,  285 => 169,  280 => 166,  276 => 164,  270 => 162,  267 => 161,  264 => 160,  250 => 159,  244 => 157,  239 => 154,  233 => 152,  225 => 150,  223 => 149,  220 => 148,  217 => 147,  199 => 146,  196 => 145,  194 => 144,  191 => 143,  189 => 142,  184 => 139,  182 => 129,  175 => 124,  172 => 123,  170 => 99,  167 => 98,  165 => 92,  158 => 90,  156 => 89,  144 => 79,  138 => 77,  134 => 75,  131 => 74,  128 => 73,  111 => 71,  107 => 69,  104 => 68,  87 => 67,  81 => 65,  75 => 28,  73 => 62,  68 => 60,  64 => 58,  62 => 24,  59 => 38,  57 => 27,  48 => 20,  46 => 14,  44 => 18,  42 => 12,  40 => 16,  38 => 15,  36 => 14,  34 => 13,  30 => 5,  84 => 66,  76 => 30,  63 => 20,  55 => 15,  49 => 12,  45 => 10,  39 => 8,  37 => 6,  32 => 6,  29 => 3,  26 => 3,);
    }
}
