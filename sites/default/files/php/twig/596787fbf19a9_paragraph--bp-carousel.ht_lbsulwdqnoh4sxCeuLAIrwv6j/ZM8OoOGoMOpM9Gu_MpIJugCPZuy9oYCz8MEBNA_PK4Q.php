<?php

/* modules/bootstrap_paragraphs/templates/paragraph--bp-carousel.html.twig */
class __TwigTemplate_f728f6d75f353d3cdc0e6ecda947e79f4a230b86da24b5fec8308c84a6478109 extends Twig_Template
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
        $tags = array("if" => 44, "set" => 45, "for" => 171);
        $filters = array("render" => 44, "clean_class" => 144, "merge" => 154, "without" => 167, "first" => 171);
        $functions = array("attach_library" => 40);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('render', 'clean_class', 'merge', 'without', 'first'),
                array('attach_library')
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

        // line 39
        echo "
";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("bootstrap_paragraphs/bootstrap-paragraphs"), "html", null, true));
        echo "

";
        // line 44
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bp_width", array()))) {
            // line 45
            echo "  ";
            $context["layout_width"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bp_width", array()), "#items", array(), "array"), "getString", array(), "method");
            // line 46
            echo "  ";
            $context["layout_width_classes"] = array(0 => ((("paragraph--width--tiny" ==             // line 47
(isset($context["layout_width"]) ? $context["layout_width"] : null))) ? ("paragraph--width--tiny") : ("")), 1 => ((("paragraph--width--narrow" ==             // line 48
(isset($context["layout_width"]) ? $context["layout_width"] : null))) ? ("paragraph--width--narrow") : ("")), 2 => ((("paragraph--width--medium" ==             // line 49
(isset($context["layout_width"]) ? $context["layout_width"] : null))) ? ("paragraph--width--medium") : ("")), 3 => ((("paragraph--width--wide" ==             // line 50
(isset($context["layout_width"]) ? $context["layout_width"] : null))) ? ("paragraph--width--wide") : ("")), 4 => ((("paragraph--width--full" ==             // line 51
(isset($context["layout_width"]) ? $context["layout_width"] : null))) ? ("paragraph--width--full") : ("")));
        }
        // line 55
        echo "
";
        // line 58
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bp_background", array()))) {
            // line 59
            echo "  ";
            $context["layout_background"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bp_background", array()), "#items", array(), "array"), "getString", array(), "method");
            // line 60
            echo "  ";
            $context["layout_background_classes"] = array(0 => ((("paragraph--color paragraph--color--rgba-black-slight" ==             // line 61
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-black-slight") : ("")), 1 => ((("paragraph--color paragraph--color--rgba-black-light" ==             // line 62
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-black-light") : ("")), 2 => ((("paragraph--color paragraph--color--rgba-black-strong" ==             // line 63
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-black-strong") : ("")), 3 => ((("paragraph--color paragraph--color--rgba-blue-slight" ==             // line 64
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-black-strong") : ("")), 4 => ((("paragraph--color paragraph--color--rgba-blue-light" ==             // line 65
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-blue-light") : ("")), 5 => ((("paragraph--color paragraph--color--rgba-blue-strong" ==             // line 66
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-blue-strong") : ("")), 6 => ((("paragraph--color paragraph--color--rgba-bluegrey-slight" ==             // line 67
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-bluegrey-slight") : ("")), 7 => ((("paragraph--color paragraph--color--rgba-bluegrey-light" ==             // line 68
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-bluegrey-light") : ("")), 8 => ((("paragraph--color paragraph--color--rgba-bluegrey-strong" ==             // line 69
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-bluegrey-strong") : ("")), 9 => ((("paragraph--color paragraph--color--rgba-brown-slight" ==             // line 70
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-brown-slight") : ("")), 10 => ((("paragraph--color paragraph--color--rgba-brown-light" ==             // line 71
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-brown-light") : ("")), 11 => ((("paragraph--color paragraph--color--rgba-brown-strong" ==             // line 72
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-brown-strong") : ("")), 12 => ((("paragraph--color paragraph--color--rgba-cyan-slight" ==             // line 73
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-cyan-slight") : ("")), 13 => ((("paragraph--color paragraph--color--rgba-cyan-light" ==             // line 74
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-cyan-light") : ("")), 14 => ((("paragraph--color paragraph--color--rgba-cyan-strong" ==             // line 75
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-cyan-strong") : ("")), 15 => ((("paragraph--color paragraph--color--rgba-green-slight" ==             // line 76
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-green-slight") : ("")), 16 => ((("paragraph--color paragraph--color--rgba-green-light" ==             // line 77
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-green-light") : ("")), 17 => ((("paragraph--color paragraph--color--rgba-green-strong" ==             // line 78
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-green-strong") : ("")), 18 => ((("paragraph--color paragraph--color--rgba-grey-slight" ==             // line 79
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-grey-slight") : ("")), 19 => ((("paragraph--color paragraph--color--rgba-grey-light" ==             // line 80
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-grey-light") : ("")), 20 => ((("paragraph--color paragraph--color--rgba-grey-strong" ==             // line 81
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-grey-strong") : ("")), 21 => ((("paragraph--color paragraph--color--rgba-indigo-slight" ==             // line 82
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-indigo-slight") : ("")), 22 => ((("paragraph--color paragraph--color--rgba-indigo-light" ==             // line 83
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-indigo-light") : ("")), 23 => ((("paragraph--color paragraph--color--rgba-indigo-strong" ==             // line 84
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-indigo-strong") : ("")), 24 => ((("paragraph--color paragraph--color--rgba-lime-slight" ==             // line 85
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-lime-slight") : ("")), 25 => ((("paragraph--color paragraph--color--rgba-lime-light" ==             // line 86
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-lime-light") : ("")), 26 => ((("paragraph--color paragraph--color--rgba-lime-strong" ==             // line 87
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-lime-strong") : ("")), 27 => ((("paragraph--color paragraph--color--rgba-orange-slight" ==             // line 88
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-orange-slight") : ("")), 28 => ((("paragraph--color paragraph--color--rgba-orange-light" ==             // line 89
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-orange-light") : ("")), 29 => ((("paragraph--color paragraph--color--rgba-orange-strong" ==             // line 90
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-orange-strong") : ("")), 30 => ((("paragraph--color paragraph--color--rgba-pink-slight" ==             // line 91
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-pink-slight") : ("")), 31 => ((("paragraph--color paragraph--color--rgba-pink-light" ==             // line 92
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-pink-light") : ("")), 32 => ((("paragraph--color paragraph--color--rgba-pink-strong" ==             // line 93
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-pink-strong") : ("")), 33 => ((("paragraph--color paragraph--color--rgba-purple-slight" ==             // line 94
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-purple-slight") : ("")), 34 => ((("paragraph--color paragraph--color--rgba-purple-light" ==             // line 95
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-purple-light") : ("")), 35 => ((("paragraph--color paragraph--color--rgba-purple-strong" ==             // line 96
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-purple-strong") : ("")), 36 => ((("paragraph--color paragraph--color--rgba-red-slight" ==             // line 97
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-red-slight") : ("")), 37 => ((("paragraph--color paragraph--color--rgba-red-light" ==             // line 98
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-red-light") : ("")), 38 => ((("paragraph--color paragraph--color--rgba-red-strong" ==             // line 99
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-red-strong") : ("")), 39 => ((("paragraph--color paragraph--color--rgba-stylish-slight" ==             // line 100
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-stylish-slight") : ("")), 40 => ((("paragraph--color paragraph--color--rgba-stylish-light" ==             // line 101
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-stylish-light") : ("")), 41 => ((("paragraph--color paragraph--color--rgba-stylish-strong" ==             // line 102
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-stylish-strong") : ("")), 42 => ((("paragraph--color paragraph--color--rgba-teal-slight" ==             // line 103
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-teal-slight") : ("")), 43 => ((("paragraph--color paragraph--color--rgba-teal-light" ==             // line 104
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-teal-light") : ("")), 44 => ((("paragraph--color paragraph--color--rgba-teal-strong" ==             // line 105
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-teal-strong") : ("")), 45 => ((("paragraph--color paragraph--color--rgba-white-slight" ==             // line 106
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-white-slight") : ("")), 46 => ((("paragraph--color paragraph--color--rgba-white-light" ==             // line 107
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-white-light") : ("")), 47 => ((("paragraph--color paragraph--color--rgba-white-strong" ==             // line 108
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-white-strong") : ("")), 48 => ((("paragraph--color paragraph--color--rgba-yellow-slight" ==             // line 109
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-yellow-slight") : ("")), 49 => ((("paragraph--color paragraph--color--rgba-yellow-light" ==             // line 110
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-yellow-light") : ("")), 50 => ((("paragraph--color paragraph--color--rgba-yellow-strong" ==             // line 111
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--rgba-yellow-strong") : ("")), 51 => ((("paragraph--color--transparent" ==             // line 112
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color--transparent") : ("")), 52 => ((("paragraph--color paragraph--color--primary" ==             // line 113
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--primary") : ("")), 53 => ((("paragraph--color paragraph--color--secondary" ==             // line 114
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--secondary") : ("")), 54 => ((("paragraph--color paragraph--color--success" ==             // line 115
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--success") : ("")), 55 => ((("paragraph--color paragraph--color--info" ==             // line 116
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--info") : ("")), 56 => ((("paragraph--color paragraph--color--warning" ==             // line 117
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--warning") : ("")), 57 => ((("paragraph--color paragraph--color--danger" ==             // line 118
(isset($context["layout_background"]) ? $context["layout_background"] : null))) ? ("paragraph--color paragraph--color--danger") : ("")));
        }
        // line 122
        echo "
";
        // line 125
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bp_slide_interval", array()))) {
            // line 126
            echo "  ";
            $context["slide_interval"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bp_slide_interval", array()), "#items", array(), "array"), "getString", array(), "method");
            // line 127
            echo "  ";
            $context["slide_interval_classes"] = array(0 => ((("false" ==             // line 128
(isset($context["slide_interval"]) ? $context["slide_interval"] : null))) ? ("false") : ("")), 1 => ((("1000" ==             // line 129
(isset($context["slide_interval"]) ? $context["slide_interval"] : null))) ? ("1000") : ("")), 2 => ((("2000" ==             // line 130
(isset($context["slide_interval"]) ? $context["slide_interval"] : null))) ? ("2000") : ("")), 3 => ((("3000" ==             // line 131
(isset($context["slide_interval"]) ? $context["slide_interval"] : null))) ? ("3000") : ("")), 4 => ((("4000" ==             // line 132
(isset($context["slide_interval"]) ? $context["slide_interval"] : null))) ? ("4000") : ("")), 5 => ((("5000" ==             // line 133
(isset($context["slide_interval"]) ? $context["slide_interval"] : null))) ? ("5000") : ("")), 6 => ((("6000" ==             // line 134
(isset($context["slide_interval"]) ? $context["slide_interval"] : null))) ? ("6000") : ("")), 7 => ((("7000" ==             // line 135
(isset($context["slide_interval"]) ? $context["slide_interval"] : null))) ? ("7000") : ("")));
        }
        // line 139
        echo "
";
        // line 142
        $context["classes"] = array(0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 144
(isset($context["paragraph"]) ? $context["paragraph"] : null), "bundle", array()))), 2 => ((        // line 145
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")), 3 => "carousel", 4 => "slide");
        // line 150
        echo "
";
        // line 152
        $context["width_field"] = $this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bp_width", array()));
        // line 153
        if ((isset($context["width_field"]) ? $context["width_field"] : null)) {
            // line 154
            echo "  ";
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), (isset($context["layout_width_classes"]) ? $context["layout_width_classes"] : null));
        }
        // line 156
        echo "
";
        // line 158
        $context["background_field"] = $this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bp_background", array()));
        // line 159
        if ((isset($context["background_field"]) ? $context["background_field"] : null)) {
            // line 160
            echo "  ";
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), (isset($context["layout_background_classes"]) ? $context["layout_background_classes"] : null));
        }
        // line 162
        echo "
";
        // line 164
        $context["paragraph_id"] = ("myCarousel-" . $this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "id", array()), "value", array()));
        // line 165
        echo "
";
        // line 167
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "bp_slide_content", "bp_slide_interval", "bp_width", "bp_background"), "html", null, true));
        echo "
<div";
        // line 168
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "setAttribute", array(0 => "id", 1 => (isset($context["paragraph_id"]) ? $context["paragraph_id"] : null)), "method"), "setAttribute", array(0 => "data-interval", 1 => (isset($context["slide_interval_classes"]) ? $context["slide_interval_classes"] : null)), "method"), "setAttribute", array(0 => "data-ride", 1 => "carousel"), "method"), "html", null, true));
        echo ">
  ";
        // line 169
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  <ol class=\"carousel-indicators\">
    ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bp_slide_content", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 172
                echo "      <li class=\"";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "active";
                }
                echo "\" data-slide-to=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["key"], "html", null, true));
                echo "\" data-target=\"#";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["paragraph_id"]) ? $context["paragraph_id"] : null), "html", null, true));
                echo "\"></li>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "  </ol>
  <div class=\"carousel-inner\" role=\"listbox\">
    ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bp_slide_content", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 177
                echo "      <div class=\"paragraph--layout-slideshow__slide-";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ($context["key"] + 1), "html", null, true));
                echo " item carousel-item";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " active";
                }
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["item"], "html", null, true));
                echo "</div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "  </div>
  <a class=\"left carousel-control\" href=\"#";
        // line 180
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["paragraph_id"]) ? $context["paragraph_id"] : null), "html", null, true));
        echo "\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#";
        // line 184
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["paragraph_id"]) ? $context["paragraph_id"] : null), "html", null, true));
        echo "\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/bootstrap_paragraphs/templates/paragraph--bp-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 184,  272 => 180,  269 => 179,  250 => 177,  239 => 176,  235 => 174,  216 => 172,  205 => 171,  200 => 169,  196 => 168,  192 => 167,  189 => 165,  187 => 164,  184 => 162,  180 => 160,  178 => 159,  176 => 158,  173 => 156,  169 => 154,  167 => 153,  165 => 152,  162 => 150,  160 => 145,  159 => 144,  158 => 142,  155 => 139,  152 => 135,  151 => 134,  150 => 133,  149 => 132,  148 => 131,  147 => 130,  146 => 129,  145 => 128,  143 => 127,  140 => 126,  138 => 125,  135 => 122,  132 => 118,  131 => 117,  130 => 116,  129 => 115,  128 => 114,  127 => 113,  126 => 112,  125 => 111,  124 => 110,  123 => 109,  122 => 108,  121 => 107,  120 => 106,  119 => 105,  118 => 104,  117 => 103,  116 => 102,  115 => 101,  114 => 100,  113 => 99,  112 => 98,  111 => 97,  110 => 96,  109 => 95,  108 => 94,  107 => 93,  106 => 92,  105 => 91,  104 => 90,  103 => 89,  102 => 88,  101 => 87,  100 => 86,  99 => 85,  98 => 84,  97 => 83,  96 => 82,  95 => 81,  94 => 80,  93 => 79,  92 => 78,  91 => 77,  90 => 76,  89 => 75,  88 => 74,  87 => 73,  86 => 72,  85 => 71,  84 => 70,  83 => 69,  82 => 68,  81 => 67,  80 => 66,  79 => 65,  78 => 64,  77 => 63,  76 => 62,  75 => 61,  73 => 60,  70 => 59,  68 => 58,  65 => 55,  62 => 51,  61 => 50,  60 => 49,  59 => 48,  58 => 47,  56 => 46,  53 => 45,  51 => 44,  46 => 40,  43 => 39,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Bootstrap Paragraphs template for displaying a Carousel.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   - id: The paragraph ID.
 *   - bundle: The type of the paragraph, for example, \"image\" or \"text\".
 *   - authorid: The user ID of the paragraph author.
 *   - createdtime: Formatted creation date. Preprocess functions can
 *     reformat it by calling format_date() with the desired parameters on
 *     \$variables['paragraph']->getCreatedTime().
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}

{{ attach_library('bootstrap_paragraphs/bootstrap-paragraphs') }}

{# Renders Width field. #}
{# Sets class name from values in database. #}
{% if content.bp_width|render %}
  {% set layout_width = content.bp_width['#items'].getString() %}
  {% set layout_width_classes = [
    'paragraph--width--tiny' == layout_width ? 'paragraph--width--tiny',
    'paragraph--width--narrow' == layout_width ? 'paragraph--width--narrow',
    'paragraph--width--medium' == layout_width ? 'paragraph--width--medium',
    'paragraph--width--wide' == layout_width ? 'paragraph--width--wide',
    'paragraph--width--full' == layout_width ? 'paragraph--width--full',
  ]
  %}
{% endif %}

{# Renders Background field. #}
{# Sets class name from values in database. #}
{% if content.bp_background|render %}
  {% set layout_background = content.bp_background['#items'].getString() %}
  {% set layout_background_classes = [
    'paragraph--color paragraph--color--rgba-black-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-black-slight',
    'paragraph--color paragraph--color--rgba-black-light' == layout_background ? 'paragraph--color paragraph--color--rgba-black-light',
    'paragraph--color paragraph--color--rgba-black-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-black-strong',
    'paragraph--color paragraph--color--rgba-blue-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-black-strong',
    'paragraph--color paragraph--color--rgba-blue-light' == layout_background ? 'paragraph--color paragraph--color--rgba-blue-light',
    'paragraph--color paragraph--color--rgba-blue-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-blue-strong',
    'paragraph--color paragraph--color--rgba-bluegrey-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-bluegrey-slight',
    'paragraph--color paragraph--color--rgba-bluegrey-light' == layout_background ? 'paragraph--color paragraph--color--rgba-bluegrey-light',
    'paragraph--color paragraph--color--rgba-bluegrey-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-bluegrey-strong',
    'paragraph--color paragraph--color--rgba-brown-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-brown-slight',
    'paragraph--color paragraph--color--rgba-brown-light' == layout_background ? 'paragraph--color paragraph--color--rgba-brown-light',
    'paragraph--color paragraph--color--rgba-brown-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-brown-strong',
    'paragraph--color paragraph--color--rgba-cyan-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-cyan-slight',
    'paragraph--color paragraph--color--rgba-cyan-light' == layout_background ? 'paragraph--color paragraph--color--rgba-cyan-light',
    'paragraph--color paragraph--color--rgba-cyan-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-cyan-strong',
    'paragraph--color paragraph--color--rgba-green-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-green-slight',
    'paragraph--color paragraph--color--rgba-green-light' == layout_background ? 'paragraph--color paragraph--color--rgba-green-light',
    'paragraph--color paragraph--color--rgba-green-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-green-strong',
    'paragraph--color paragraph--color--rgba-grey-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-grey-slight',
    'paragraph--color paragraph--color--rgba-grey-light' == layout_background ? 'paragraph--color paragraph--color--rgba-grey-light',
    'paragraph--color paragraph--color--rgba-grey-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-grey-strong',
    'paragraph--color paragraph--color--rgba-indigo-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-indigo-slight',
    'paragraph--color paragraph--color--rgba-indigo-light' == layout_background ? 'paragraph--color paragraph--color--rgba-indigo-light',
    'paragraph--color paragraph--color--rgba-indigo-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-indigo-strong',
    'paragraph--color paragraph--color--rgba-lime-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-lime-slight',
    'paragraph--color paragraph--color--rgba-lime-light' == layout_background ? 'paragraph--color paragraph--color--rgba-lime-light',
    'paragraph--color paragraph--color--rgba-lime-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-lime-strong',
    'paragraph--color paragraph--color--rgba-orange-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-orange-slight',
    'paragraph--color paragraph--color--rgba-orange-light' == layout_background ? 'paragraph--color paragraph--color--rgba-orange-light',
    'paragraph--color paragraph--color--rgba-orange-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-orange-strong',
    'paragraph--color paragraph--color--rgba-pink-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-pink-slight',
    'paragraph--color paragraph--color--rgba-pink-light' == layout_background ? 'paragraph--color paragraph--color--rgba-pink-light',
    'paragraph--color paragraph--color--rgba-pink-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-pink-strong',
    'paragraph--color paragraph--color--rgba-purple-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-purple-slight',
    'paragraph--color paragraph--color--rgba-purple-light' == layout_background ? 'paragraph--color paragraph--color--rgba-purple-light',
    'paragraph--color paragraph--color--rgba-purple-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-purple-strong',
    'paragraph--color paragraph--color--rgba-red-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-red-slight',
    'paragraph--color paragraph--color--rgba-red-light' == layout_background ? 'paragraph--color paragraph--color--rgba-red-light',
    'paragraph--color paragraph--color--rgba-red-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-red-strong',
    'paragraph--color paragraph--color--rgba-stylish-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-stylish-slight',
    'paragraph--color paragraph--color--rgba-stylish-light' == layout_background ? 'paragraph--color paragraph--color--rgba-stylish-light',
    'paragraph--color paragraph--color--rgba-stylish-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-stylish-strong',
    'paragraph--color paragraph--color--rgba-teal-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-teal-slight',
    'paragraph--color paragraph--color--rgba-teal-light' == layout_background ? 'paragraph--color paragraph--color--rgba-teal-light',
    'paragraph--color paragraph--color--rgba-teal-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-teal-strong',
    'paragraph--color paragraph--color--rgba-white-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-white-slight',
    'paragraph--color paragraph--color--rgba-white-light' == layout_background ? 'paragraph--color paragraph--color--rgba-white-light',
    'paragraph--color paragraph--color--rgba-white-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-white-strong',
    'paragraph--color paragraph--color--rgba-yellow-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-yellow-slight',
    'paragraph--color paragraph--color--rgba-yellow-light' == layout_background ? 'paragraph--color paragraph--color--rgba-yellow-light',
    'paragraph--color paragraph--color--rgba-yellow-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-yellow-strong',
    'paragraph--color--transparent' == layout_background ? 'paragraph--color--transparent',
    'paragraph--color paragraph--color--primary' == layout_background ? 'paragraph--color paragraph--color--primary',
    'paragraph--color paragraph--color--secondary' == layout_background ? 'paragraph--color paragraph--color--secondary',
    'paragraph--color paragraph--color--success' == layout_background ? 'paragraph--color paragraph--color--success',
    'paragraph--color paragraph--color--info' == layout_background ? 'paragraph--color paragraph--color--info',
    'paragraph--color paragraph--color--warning' == layout_background ? 'paragraph--color paragraph--color--warning',
    'paragraph--color paragraph--color--danger' == layout_background ? 'paragraph--color paragraph--color--danger',
  ]
  %}
{% endif %}

{# Renders Slide Interval field. #}
{# Converts database values to classes supplied by template. #}
{% if content.bp_slide_interval|render %}
  {% set slide_interval = content.bp_slide_interval['#items'].getString() %}
  {% set slide_interval_classes = [
    'false' == slide_interval ? 'false',
    '1000' == slide_interval ? '1000',
    '2000' == slide_interval ? '2000',
    '3000' == slide_interval ? '3000',
    '4000' == slide_interval ? '4000',
    '5000' == slide_interval ? '5000',
    '6000' == slide_interval ? '6000',
    '7000' == slide_interval ? '7000',
  ]
  %}
{% endif %}

{# The template default set classes. #}
{%
set classes = [
'paragraph',
'paragraph--type--' ~ paragraph.bundle|clean_class,
view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
'carousel',
'slide',
]
%}

{# Merges Width field with classes. #}
{% set width_field = content.bp_width|render %}
{% if width_field %}
  {% set classes = classes|merge(layout_width_classes) %}
{% endif %}

{# Merges Background field with classes. #}
{% set background_field = content.bp_background|render %}
{% if background_field %}
  {% set classes = classes|merge(layout_background_classes) %}
{% endif %}

{# Sets Unique ID for Carousel from Paragraph ID. #}
{% set paragraph_id = 'myCarousel-' ~ paragraph.id.value %}

{# Prints Carousel template. #}
{{ content|without('bp_slide_content','bp_slide_interval', 'bp_width', 'bp_background') }}
<div{{ attributes.addClass(classes).setAttribute('id', paragraph_id).setAttribute('data-interval', slide_interval_classes).setAttribute('data-ride', 'carousel') }}>
  {{ title_suffix }}
  <ol class=\"carousel-indicators\">
    {% for key, item in content.bp_slide_content if key|first != '#' %}
      <li class=\"{% if loop.first %}active{% endif %}\" data-slide-to=\"{{ key }}\" data-target=\"#{{ paragraph_id }}\"></li>
    {% endfor %}
  </ol>
  <div class=\"carousel-inner\" role=\"listbox\">
    {% for key, item in content.bp_slide_content if key|first != '#' %}
      <div class=\"paragraph--layout-slideshow__slide-{{ key + 1 }} item carousel-item{% if loop.first %} active{% endif %}\">{{ item }}</div>
    {% endfor %}
  </div>
  <a class=\"left carousel-control\" href=\"#{{ paragraph_id }}\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#{{ paragraph_id }}\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
";
    }
}
