<?php

/* themes/bdd_theme/templates/system/page--front.html.twig */
class __TwigTemplate_e598824e26a0dc3c91206ac85adb4505604d6eadb2e0fc1b548a3e1c943830f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 70, "block" => 71, "set" => 109);
        $filters = array("clean_class" => 76, "t" => 88);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'block', 'set'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 60
        echo "
<div class=\"row row-branding\">
    <div class=\"l-branding\">
        ";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array()), "html", null, true));
        echo "
        <a href=\"https://www.etsy.com/shop/BraindeadDesign\" title=\"Home\" rel=\"home\" class=\"site-logo\">
            <span>Braindead Designs</span>
        </a>
    </div>
</div>
";
        // line 70
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 71
            echo "    ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 108
        echo "
";
        // line 109
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 110
        echo "
";
        // line 112
        $this->displayBlock('main', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 193
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 71
    public function block_navbar($context, array $blocks = array())
    {
        // line 72
        echo "        ";
        // line 73
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 75
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 76
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 79
        echo "        <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
            ";
        // line 80
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 81
            echo "            <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
                ";
        }
        // line 83
        echo "                <div class=\"navbar-header\">
                    ";
        // line 84
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
                    ";
        // line 86
        echo "                    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 87
            echo "                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                            <span class=\"sr-only\">";
            // line 88
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    ";
        }
        // line 94
        echo "                </div>

                ";
        // line 97
        echo "                ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 98
            echo "                    <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
                        ";
            // line 99
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
                    </div>
                ";
        }
        // line 102
        echo "                ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 103
            echo "            </div>
            ";
        }
        // line 105
        echo "        </header>
    ";
    }

    // line 112
    public function block_main($context, array $blocks = array())
    {
        // line 113
        echo "    <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
        <div class=\"row\">

            ";
        // line 117
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 118
            echo "                ";
            $this->displayBlock('header', $context, $blocks);
            // line 123
            echo "            ";
        }
        // line 124
        echo "
            ";
        // line 126
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 127
            echo "                ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 132
            echo "            ";
        }
        // line 133
        echo "
            ";
        // line 135
        echo "            ";
        // line 136
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 137
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 138
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 139
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 140
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 143
        echo "            <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

                ";
        // line 146
        echo "                ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 147
            echo "                    ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 150
            echo "                ";
        }
        // line 151
        echo "
                ";
        // line 153
        echo "                ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 154
            echo "                    ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 157
            echo "                ";
        }
        // line 158
        echo "
                ";
        // line 160
        echo "                ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 161
            echo "                    ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 164
            echo "                ";
        }
        // line 165
        echo "
                ";
        // line 167
        echo "                ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 168
            echo "                    ";
            $this->displayBlock('help', $context, $blocks);
            // line 171
            echo "                ";
        }
        // line 172
        echo "
                ";
        // line 174
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 178
        echo "            </section>

            ";
        // line 181
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 182
            echo "                ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 187
            echo "            ";
        }
        // line 188
        echo "        </div>
    </div>
";
    }

    // line 118
    public function block_header($context, array $blocks = array())
    {
        // line 119
        echo "                    <div class=\"col-sm-12\" role=\"heading\">
                        ";
        // line 120
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
                    </div>
                ";
    }

    // line 127
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 128
        echo "                    <aside class=\"col-sm-3\" role=\"complementary\">
                        ";
        // line 129
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
                    </aside>
                ";
    }

    // line 147
    public function block_highlighted($context, array $blocks = array())
    {
        // line 148
        echo "                        <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
                    ";
    }

    // line 154
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 155
        echo "                        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
                    ";
    }

    // line 161
    public function block_action_links($context, array $blocks = array())
    {
        // line 162
        echo "                        <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
                    ";
    }

    // line 168
    public function block_help($context, array $blocks = array())
    {
        // line 169
        echo "                        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
                    ";
    }

    // line 174
    public function block_content($context, array $blocks = array())
    {
        // line 175
        echo "                    <a id=\"main-content\"></a>
                    ";
        // line 176
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                ";
    }

    // line 182
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 183
        echo "                    <aside class=\"col-sm-3\" role=\"complementary\">
                        ";
        // line 184
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
                    </aside>
                ";
    }

    // line 193
    public function block_footer($context, array $blocks = array())
    {
        // line 194
        echo "        <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
            ";
        // line 195
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
        </footer>
    ";
    }

    public function getTemplateName()
    {
        return "themes/bdd_theme/templates/system/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 195,  379 => 194,  376 => 193,  369 => 184,  366 => 183,  363 => 182,  357 => 176,  354 => 175,  351 => 174,  344 => 169,  341 => 168,  334 => 162,  331 => 161,  324 => 155,  321 => 154,  314 => 148,  311 => 147,  304 => 129,  301 => 128,  298 => 127,  291 => 120,  288 => 119,  285 => 118,  279 => 188,  276 => 187,  273 => 182,  270 => 181,  266 => 178,  263 => 174,  260 => 172,  257 => 171,  254 => 168,  251 => 167,  248 => 165,  245 => 164,  242 => 161,  239 => 160,  236 => 158,  233 => 157,  230 => 154,  227 => 153,  224 => 151,  221 => 150,  218 => 147,  215 => 146,  209 => 143,  207 => 140,  206 => 139,  205 => 138,  204 => 137,  203 => 136,  201 => 135,  198 => 133,  195 => 132,  192 => 127,  189 => 126,  186 => 124,  183 => 123,  180 => 118,  177 => 117,  170 => 113,  167 => 112,  162 => 105,  158 => 103,  155 => 102,  149 => 99,  146 => 98,  143 => 97,  139 => 94,  130 => 88,  127 => 87,  124 => 86,  120 => 84,  117 => 83,  111 => 81,  109 => 80,  104 => 79,  102 => 76,  101 => 75,  100 => 73,  98 => 72,  95 => 71,  89 => 193,  87 => 192,  84 => 191,  82 => 112,  79 => 110,  77 => 109,  74 => 108,  70 => 71,  68 => 70,  59 => 63,  54 => 60,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Front page with navigation, slider, and top branding.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Navigation:
 * - breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - action_links: Actions local to the page, such as \"Add menu\" on the menu
 *   administration interface.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{# Branding #}

<div class=\"row row-branding\">
    <div class=\"l-branding\">
        {{ page.branding }}
        <a href=\"https://www.etsy.com/shop/BraindeadDesign\" title=\"Home\" rel=\"home\" class=\"site-logo\">
            <span>Braindead Designs</span>
        </a>
    </div>
</div>
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
    {% block navbar %}
        {%
        set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
        ]
        %}
        <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
            {% if not navbar_attributes.hasClass(container) %}
            <div class=\"{{ container }}\">
                {% endif %}
                <div class=\"navbar-header\">
                    {{ page.navigation }}
                    {# .btn-navbar is used as the toggle for collapsed navbar content #}
                    {% if page.navigation_collapsible %}
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    {% endif %}
                </div>

                {# Navigation (collapsible) #}
                {% if page.navigation_collapsible %}
                    <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
                        {{ page.navigation_collapsible }}
                    </div>
                {% endif %}
                {% if not navbar_attributes.hasClass(container) %}
            </div>
            {% endif %}
        </header>
    {% endblock %}
{% endif %}

{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}

{# Main #}
{% block main %}
    <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
        <div class=\"row\">

            {# Header #}
            {% if page.header %}
                {% block header %}
                    <div class=\"col-sm-12\" role=\"heading\">
                        {{ page.header }}
                    </div>
                {% endblock %}
            {% endif %}

            {# Sidebar First #}
            {% if page.sidebar_first %}
                {% block sidebar_first %}
                    <aside class=\"col-sm-3\" role=\"complementary\">
                        {{ page.sidebar_first }}
                    </aside>
                {% endblock %}
            {% endif %}

            {# Content #}
            {%
            set content_classes = [
            page.sidebar_first and page.sidebar_second ? 'col-sm-6',
            page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
            page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
            page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
            ]
            %}
            <section{{ content_attributes.addClass(content_classes) }}>

                {# Highlighted #}
                {% if page.highlighted %}
                    {% block highlighted %}
                        <div class=\"highlighted\">{{ page.highlighted }}</div>
                    {% endblock %}
                {% endif %}

                {# Breadcrumbs #}
                {% if breadcrumb %}
                    {% block breadcrumb %}
                        {{ breadcrumb }}
                    {% endblock %}
                {% endif %}

                {# Action Links #}
                {% if action_links %}
                    {% block action_links %}
                        <ul class=\"action-links\">{{ action_links }}</ul>
                    {% endblock %}
                {% endif %}

                {# Help #}
                {% if page.help %}
                    {% block help %}
                        {{ page.help }}
                    {% endblock %}
                {% endif %}

                {# Content #}
                {% block content %}
                    <a id=\"main-content\"></a>
                    {{ page.content }}
                {% endblock %}
            </section>

            {# Sidebar Second #}
            {% if page.sidebar_second %}
                {% block sidebar_second %}
                    <aside class=\"col-sm-3\" role=\"complementary\">
                        {{ page.sidebar_second }}
                    </aside>
                {% endblock %}
            {% endif %}
        </div>
    </div>
{% endblock %}

{% if page.footer %}
    {% block footer %}
        <footer class=\"footer {{ container }}\" role=\"contentinfo\">
            {{ page.footer }}
        </footer>
    {% endblock %}
{% endif %}
";
    }
}
