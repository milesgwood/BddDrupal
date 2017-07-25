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
        $tags = array("if" => 70, "block" => 71, "set" => 111);
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slider", array()), "html", null, true));
        echo "

";
        // line 111
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 112
        echo "
";
        // line 114
        $this->displayBlock('main', $context, $blocks);
        // line 193
        echo "
";
        // line 196
        echo "    ";
        // line 197
        echo "        ";
        // line 198
        echo "            ";
        // line 199
        echo "        ";
        // line 200
        echo "    ";
        // line 202
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 203
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

    // line 114
    public function block_main($context, array $blocks = array())
    {
        // line 115
        echo "    <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
        <div class=\"row\">

            ";
        // line 119
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 120
            echo "                ";
            $this->displayBlock('header', $context, $blocks);
            // line 125
            echo "            ";
        }
        // line 126
        echo "
            ";
        // line 128
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 129
            echo "                ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 134
            echo "            ";
        }
        // line 135
        echo "
            ";
        // line 137
        echo "            ";
        // line 138
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 139
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 140
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 141
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 142
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 145
        echo "            <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

                ";
        // line 148
        echo "                ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 149
            echo "                    ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 152
            echo "                ";
        }
        // line 153
        echo "
                ";
        // line 155
        echo "                ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 156
            echo "                    ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 159
            echo "                ";
        }
        // line 160
        echo "
                ";
        // line 162
        echo "                ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 163
            echo "                    ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 166
            echo "                ";
        }
        // line 167
        echo "
                ";
        // line 169
        echo "                ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 170
            echo "                    ";
            $this->displayBlock('help', $context, $blocks);
            // line 173
            echo "                ";
        }
        // line 174
        echo "
                ";
        // line 176
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 180
        echo "            </section>

            ";
        // line 183
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 184
            echo "                ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 189
            echo "            ";
        }
        // line 190
        echo "        </div>
    </div>
";
    }

    // line 120
    public function block_header($context, array $blocks = array())
    {
        // line 121
        echo "                    <div class=\"col-sm-12\" role=\"heading\">
                        ";
        // line 122
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
                    </div>
                ";
    }

    // line 129
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 130
        echo "                    <aside class=\"col-sm-3\" role=\"complementary\">
                        ";
        // line 131
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
                    </aside>
                ";
    }

    // line 149
    public function block_highlighted($context, array $blocks = array())
    {
        // line 150
        echo "                        <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
                    ";
    }

    // line 156
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 157
        echo "                        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
                    ";
    }

    // line 163
    public function block_action_links($context, array $blocks = array())
    {
        // line 164
        echo "                        <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
                    ";
    }

    // line 170
    public function block_help($context, array $blocks = array())
    {
        // line 171
        echo "                        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
                    ";
    }

    // line 176
    public function block_content($context, array $blocks = array())
    {
        // line 177
        echo "                    <a id=\"main-content\"></a>
                    ";
        // line 178
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                ";
    }

    // line 184
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 185
        echo "                    <aside class=\"col-sm-3\" role=\"complementary\">
                        ";
        // line 186
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
                    </aside>
                ";
    }

    // line 203
    public function block_footer($context, array $blocks = array())
    {
        // line 204
        echo "        <footer class=\"footer\" role=\"contentinfo\">
            ";
        // line 205
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
        return array (  397 => 205,  394 => 204,  391 => 203,  384 => 186,  381 => 185,  378 => 184,  372 => 178,  369 => 177,  366 => 176,  359 => 171,  356 => 170,  349 => 164,  346 => 163,  339 => 157,  336 => 156,  329 => 150,  326 => 149,  319 => 131,  316 => 130,  313 => 129,  306 => 122,  303 => 121,  300 => 120,  294 => 190,  291 => 189,  288 => 184,  285 => 183,  281 => 180,  278 => 176,  275 => 174,  272 => 173,  269 => 170,  266 => 169,  263 => 167,  260 => 166,  257 => 163,  254 => 162,  251 => 160,  248 => 159,  245 => 156,  242 => 155,  239 => 153,  236 => 152,  233 => 149,  230 => 148,  224 => 145,  222 => 142,  221 => 141,  220 => 140,  219 => 139,  218 => 138,  216 => 137,  213 => 135,  210 => 134,  207 => 129,  204 => 128,  201 => 126,  198 => 125,  195 => 120,  192 => 119,  185 => 115,  182 => 114,  177 => 105,  173 => 103,  170 => 102,  164 => 99,  161 => 98,  158 => 97,  154 => 94,  145 => 88,  142 => 87,  139 => 86,  135 => 84,  132 => 83,  126 => 81,  124 => 80,  119 => 79,  117 => 76,  116 => 75,  115 => 73,  113 => 72,  110 => 71,  104 => 203,  102 => 202,  100 => 200,  98 => 199,  96 => 198,  94 => 197,  92 => 196,  89 => 193,  87 => 114,  84 => 112,  82 => 111,  77 => 109,  74 => 108,  70 => 71,  68 => 70,  59 => 63,  54 => 60,);
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

{{ page.slider }}

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

{#Take the footer out of a containter#}
{#{% if page.footer %}#}
    {#{% block footer %}#}
        {#<footer class=\"footer {{ container }}\" role=\"contentinfo\">#}
            {#{{ page.footer }}#}
        {#</footer>#}
    {#{% endblock %}#}
{#{% endif %}#}
{% if page.footer %}
    {% block footer %}
        <footer class=\"footer\" role=\"contentinfo\">
            {{ page.footer }}
        </footer>
    {% endblock %}
{% endif %}";
    }
}
