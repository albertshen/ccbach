<?php

/* SonataMediaBundle:MediaAdmin:view.html.twig */
class __TwigTemplate_95184f079d0b72686f24aa23959cf53c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:action.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "name"), "html", null, true);
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "name"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")), "html", null, true);
        echo ")</h2>

    <h3>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.media_preview", array(), "SonataMediaBundle"), "html", null, true);
        echo "</h3>
    <div>
        ";
        // line 21
        echo $this->env->getExtension('sonata_media')->media((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")), array());
        // line 22
        echo "    </div>

    <h3>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.informations", array(), "SonataMediaBundle"), "html", null, true);
        echo "</h3>

    <table>
        ";
        // line 27
        if (((isset($context["pixlr"]) ? $context["pixlr"] : $this->getContext($context, "pixlr")) && $this->getAttribute((isset($context["pixlr"]) ? $context["pixlr"] : $this->getContext($context, "pixlr")), "isEditable", array(0 => (isset($context["media"]) ? $context["media"] : $this->getContext($context, "media"))), "method"))) {
            // line 28
            echo "            <tr>
                <td></td>
                <td><a class=\"btn\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_media_pixlr_open_editor", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.edit_with_pixlr", array(), "SonataMediaBundle"), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        // line 33
        echo "        <tr>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.size", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "size"), "html", null, true);
        echo "</td>
        <tr>
        <tr>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.width", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "width"), "html", null, true);
        echo "</td>
        <tr>
        <tr>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.height", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "height"), "html", null, true);
        echo "</td>
        <tr>
        <tr>
            <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.content_type", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "contenttype"), "html", null, true);
        echo "</td>
        <tr>
        <tr>
            <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.copyright", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "copyright"), "html", null, true);
        echo "</td>
        <tr>
        <tr>
            <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.author_name", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "authorname"), "html", null, true);
        echo "</td>
        <tr>
        <tr>
            <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cdn", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td>
                ";
        // line 60
        if ($this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "cdnisflushable")) {
            // line 61
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.to_be_flushed", array(), "SonataMediaBundle"), "html", null, true);
            echo "
                ";
        } else {
            // line 63
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.flushed_at", array(), "SonataMediaBundle"), "html", null, true);
            echo "
                    ";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "cdnflushat")), "html", null, true);
            echo "
                 ";
        }
        // line 66
        echo "            </td>
        <tr>
        <tr>
            <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.protected_download_url", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td>
                <input type=\"text\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_media_download", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media"))))), "html", null, true);
        echo "\" style=\"width:500px\"/>
                <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_media_download", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media"))))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.test_protected_url", array(), "SonataMediaBundle"), "html", null, true);
        echo "</a>
                <br />
                <span class=\"label warning\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.protected_download_url_notice", array(), "SonataMediaBundle"), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["security"]) ? $context["security"] : $this->getContext($context, "security")), "description"), "html", null, true);
        echo "
            </td>
        <tr>

        <tr>
            <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.public_url", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td><input type=\"text\" value=\"";
        // line 80
        echo $this->env->getExtension('sonata_media')->path((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")));
        echo "\" style=\"width:500px\"/></td>
        <tr>
    </table>

    <h3>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.formats", array(), "SonataMediaBundle"), "html", null, true);
        echo "</h3>
    <table>
        <tr>
            <td>
                <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "view", 1 => array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media"))), "format" => "reference")), "method"), "html", null, true);
        echo "\">reference</a>
            </td>
            <td>
                <input type=\"text\" value=\"";
        // line 91
        echo $this->env->getExtension('sonata_media')->path((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "reference");
        echo "\"  style=\"width:500px\" />
            </td>
        </tr>

        ";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formats"]) ? $context["formats"] : $this->getContext($context, "formats")));
        foreach ($context['_seq'] as $context["name"] => $context["format"]) {
            // line 96
            echo "            <tr>
                <td>
                    <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "view", 1 => array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media"))), "format" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</a>
                </td>
                <td>
                    <input type=\"text\" value=\"";
            // line 101
            echo $this->env->getExtension('sonata_media')->path((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            echo "\"  style=\"width:500px\"/>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 105,  241 => 101,  233 => 98,  229 => 96,  225 => 95,  218 => 91,  212 => 88,  205 => 84,  198 => 80,  194 => 79,  184 => 74,  177 => 72,  173 => 71,  168 => 69,  163 => 66,  158 => 64,  153 => 63,  147 => 61,  145 => 60,  140 => 58,  134 => 55,  130 => 54,  124 => 51,  120 => 50,  114 => 47,  110 => 46,  104 => 43,  100 => 42,  94 => 39,  90 => 38,  84 => 35,  80 => 34,  77 => 33,  69 => 30,  65 => 28,  63 => 27,  57 => 24,  53 => 22,  51 => 21,  46 => 19,  38 => 17,  35 => 16,  29 => 14,);
    }
}
