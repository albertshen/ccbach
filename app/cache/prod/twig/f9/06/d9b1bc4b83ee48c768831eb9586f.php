<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_f906d9b1bc4b83ee48c768831eb9586f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav_menu' => array($this, 'block_sonata_nav_menu'),
            'top_bar_before_nav' => array($this, 'block_top_bar_before_nav'),
            'sonata_top_bar_nav' => array($this, 'block_sonata_top_bar_nav'),
            'top_bar_after_nav' => array($this, 'block_top_bar_after_nav'),
            'notice' => array($this, 'block_notice'),
            'actions' => array($this, 'block_actions'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_side_menu"] = $this->renderBlock("side_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "
        <title>
            ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 62
        if ((!twig_test_empty((isset($context["_title"]) ? $context["_title"] : null)))) {
            // line 63
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : null);
            echo "
            ";
        } else {
            // line 65
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 66
                echo "                    -
                    ";
                // line 67
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 68
                    echo "                        ";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first"))) {
                        // line 69
                        echo "                            &gt;
                        ";
                    }
                    // line 71
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                    echo "
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                ";
            }
            // line 74
            echo "            ";
        }
        // line 75
        echo "        </title>
    </head>
    <body class=\"sonata-bc ";
        // line 77
        if (twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : null))) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\">
        ";
        // line 79
        echo "
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>

                    ";
        // line 89
        if (array_key_exists("admin_pool", $context)) {
            // line 90
            echo "                        <div class=\"navbar-text pull-right\">";
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getTemplate", array(0 => "user_block"), "method"));
            $template->display($context);
            echo "</div>

                        ";
            // line 92
            $this->displayBlock('logo', $context, $blocks);
            // line 98
            echo "
                        ";
            // line 99
            $this->displayBlock('sonata_nav_menu', $context, $blocks);
            // line 123
            echo "                    ";
        }
        // line 124
        echo "                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            ";
        // line 129
        $this->displayBlock('notice', $context, $blocks);
        // line 139
        echo "
            <div class=\"row-fluid\">
                <div class=\"span6\">
                    ";
        // line 142
        if (((!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) || array_key_exists("action", $context))) {
            // line 143
            echo "                        <ul class=\"breadcrumb\">
                            ";
            // line 144
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) {
                // line 145
                echo "                                ";
                if (array_key_exists("action", $context)) {
                    // line 146
                    echo "                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 147
                        echo "                                        ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                            // line 148
                            echo "                                            <li>
                                                ";
                            // line 149
                            if ((!twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "uri")))) {
                                // line 150
                                echo "                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "uri"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                                echo "</a>
                                                ";
                            } else {
                                // line 152
                                echo "                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                                echo "
                                                ";
                            }
                            // line 154
                            echo "                                                <span class=\"divider\">/</span>
                                            </li>
                                        ";
                        } else {
                            // line 157
                            echo "                                            <li class=\"active\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                            echo "</li>
                                        ";
                        }
                        // line 159
                        echo "                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 160
                    echo "                                ";
                }
                // line 161
                echo "                            ";
            } else {
                // line 162
                echo "                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null);
                echo "
                            ";
            }
            // line 164
            echo "                        </ul>
                    ";
        }
        // line 166
        echo "                </div>

                <div class=\"span4 offset2\">
                    ";
        // line 169
        $this->displayBlock('actions', $context, $blocks);
        // line 170
        echo "                </div>
            </div>

            <div class=\"row-fluid\">
                ";
        // line 174
        if ((!twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : null)))) {
            // line 175
            echo "                    <div class=\"sidebar span2\">
                        <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 176
            echo (isset($context["_side_menu"]) ? $context["_side_menu"] : null);
            echo "</div>
                    </div>
                ";
        }
        // line 179
        echo "
                <div class=\"content ";
        // line 180
        echo (((!twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : null)))) ? (" span10") : ("span12"));
        echo "\">
                    ";
        // line 181
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 211
        echo "                </div>
            </div>

            ";
        // line 214
        $this->displayBlock('footer', $context, $blocks);
        // line 221
        echo "        </div>
    </body>
</html>
";
    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 28
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"  />
            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "            <script type=\"text/javascript\">
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 42
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 43
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 45
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.8.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.23.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            ";
        // line 55
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.confirmExit.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>";
        }
        // line 56
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 92
    public function block_logo($context, array $blocks = array())
    {
        // line 93
        echo "                            <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\" class=\"brand\">
                                <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "title"), "html", null, true);
        echo "\" />
                                ";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "title"), "html", null, true);
        echo "
                            </a>
                        ";
    }

    // line 99
    public function block_sonata_nav_menu($context, array $blocks = array())
    {
        // line 100
        echo "                            <div class=\"nav-collapse\">
                                <ul class=\"nav\">
                                    ";
        // line 102
        $this->displayBlock('top_bar_before_nav', $context, $blocks);
        // line 103
        echo "                                    ";
        $this->displayBlock('sonata_top_bar_nav', $context, $blocks);
        // line 119
        echo "                                    ";
        $this->displayBlock('top_bar_after_nav', $context, $blocks);
        // line 120
        echo "                                </ul>
                            </div>
                        ";
    }

    // line 102
    public function block_top_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 103
    public function block_sonata_top_bar_nav($context, array $blocks = array())
    {
        // line 104
        echo "                                        ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 105
            echo "                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 106
                echo "                                                <li class=\"dropdown\">
                                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label_catalogue")), "html", null, true);
                echo " <span class=\"caret\"></span></a>
                                                    <ul class=\"dropdown-menu\">
                                                        ";
                // line 109
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 110
                    echo "                                                            ";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
                        // line 111
                        echo "                                                                <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain")), "html", null, true);
                        echo "</a></li>
                                                            ";
                    }
                    // line 113
                    echo "                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "                                                    </ul>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                                        ";
        }
        // line 118
        echo "                                    ";
    }

    // line 119
    public function block_top_bar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 129
    public function block_notice($context, array $blocks = array())
    {
        // line 130
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 131
            echo "                    ";
            $context["session_var"] = ("sonata_flash_" . (isset($context["notice_level"]) ? $context["notice_level"] : null));
            // line 132
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => (isset($context["session_var"]) ? $context["session_var"] : null)), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 133
                echo "                        <div class=\"alert ";
                echo twig_escape_filter($this->env, ("alert-" . (isset($context["notice_level"]) ? $context["notice_level"] : null)), "html", null, true);
                echo "\">
                            ";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : null), array(), "SonataAdminBundle"), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "            ";
    }

    // line 169
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 181
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 182
        echo "
                        ";
        // line 183
        if ((!twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : null)))) {
            // line 184
            echo "                            <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : null);
            echo "</div>
                        ";
        }
        // line 186
        echo "
                        ";
        // line 187
        if ((!twig_test_empty((isset($context["_content"]) ? $context["_content"] : null)))) {
            // line 188
            echo "                            <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : null);
            echo "</div>
                        ";
        }
        // line 190
        echo "
                        ";
        // line 191
        if ((!twig_test_empty((isset($context["_show"]) ? $context["_show"] : null)))) {
            // line 192
            echo "                            <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : null);
            echo "</div>
                        ";
        }
        // line 194
        echo "
                        ";
        // line 195
        if ((!twig_test_empty((isset($context["_form"]) ? $context["_form"] : null)))) {
            // line 196
            echo "                            <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : null);
            echo "</div>
                        ";
        }
        // line 198
        echo "
                        ";
        // line 199
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : null))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : null))))) {
            // line 200
            echo "                            <div class=\"row-fluid\">
                                <div class=\"sonata-ba-list span10\">
                                    ";
            // line 202
            echo (isset($context["_list_table"]) ? $context["_list_table"] : null);
            echo "
                                </div>
                                <div class=\"sonata-ba-filter span2\">
                                    ";
            // line 205
            echo (isset($context["_list_filters"]) ? $context["_list_filters"] : null);
            echo "
                                </div>
                            </div>
                        ";
        }
        // line 209
        echo "
                    ";
    }

    // line 214
    public function block_footer($context, array $blocks = array())
    {
        // line 215
        echo "                <div class=\"row-fluid\">
                    <div class=\"span2 offset10 pull-right\">
                        <span class=\"label\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" style=\"text-decoration: none; color: black\">Sonata Project</a></span>
                    </div>
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  647 => 215,  644 => 214,  639 => 209,  632 => 205,  626 => 202,  622 => 200,  620 => 199,  617 => 198,  611 => 196,  609 => 195,  606 => 194,  600 => 192,  598 => 191,  595 => 190,  589 => 188,  587 => 187,  584 => 186,  578 => 184,  576 => 183,  573 => 182,  570 => 181,  565 => 169,  561 => 138,  555 => 137,  546 => 134,  541 => 133,  536 => 132,  533 => 131,  528 => 130,  525 => 129,  519 => 119,  515 => 118,  512 => 117,  504 => 114,  498 => 113,  490 => 111,  487 => 110,  483 => 109,  478 => 107,  475 => 106,  470 => 105,  467 => 104,  464 => 103,  458 => 102,  452 => 120,  449 => 119,  446 => 103,  444 => 102,  440 => 100,  437 => 99,  430 => 95,  424 => 94,  419 => 93,  416 => 92,  409 => 56,  403 => 55,  399 => 54,  394 => 52,  389 => 50,  385 => 49,  381 => 48,  375 => 45,  371 => 43,  365 => 42,  361 => 40,  358 => 39,  352 => 36,  348 => 35,  342 => 32,  338 => 31,  333 => 29,  330 => 28,  327 => 27,  320 => 221,  318 => 214,  313 => 211,  311 => 181,  307 => 180,  304 => 179,  298 => 176,  295 => 175,  293 => 174,  287 => 170,  285 => 169,  280 => 166,  276 => 164,  270 => 162,  267 => 161,  264 => 160,  250 => 159,  244 => 157,  239 => 154,  233 => 152,  225 => 150,  223 => 149,  220 => 148,  217 => 147,  199 => 146,  196 => 145,  194 => 144,  191 => 143,  189 => 142,  184 => 139,  182 => 129,  175 => 124,  172 => 123,  170 => 99,  167 => 98,  165 => 92,  158 => 90,  156 => 89,  144 => 79,  138 => 77,  134 => 75,  131 => 74,  128 => 73,  111 => 71,  107 => 69,  104 => 68,  87 => 67,  81 => 65,  75 => 63,  73 => 62,  68 => 60,  64 => 58,  62 => 39,  59 => 38,  57 => 27,  48 => 20,  46 => 19,  44 => 18,  42 => 17,  40 => 16,  38 => 15,  36 => 14,  34 => 13,  30 => 11,  84 => 66,  76 => 30,  63 => 20,  55 => 15,  49 => 12,  45 => 10,  39 => 8,  37 => 7,  32 => 12,  29 => 4,  26 => 3,);
    }
}
