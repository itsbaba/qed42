<?php

/* core/themes/seven/templates/details.html.twig */
class __TwigTemplate_d58216fc3d7b9a1a8a3a3c35088f021461c13569e983818bdcd52bb83cdeacf4 extends Twig_Template
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
        $tags = array("if" => 23, "set" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 22
        echo "<details";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "seven-details"), "method"), "html", null, true));
        echo ">";
        // line 23
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 25
            $context["summary_classes"] = array(0 => "seven-details__summary", 1 => ((            // line 27
(isset($context["required"]) ? $context["required"] : null)) ? ("js-form-required") : ("")), 2 => ((            // line 28
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
            // line 31
            echo "    <summary";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["summary_attributes"]) ? $context["summary_attributes"] : null), "addClass", array(0 => (isset($context["summary_classes"]) ? $context["summary_classes"] : null)), "method"), "html", null, true));
            echo ">";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            // line 33
            echo "</summary>";
        }
        // line 35
        echo "<div class=\"seven-details__wrapper details-wrapper\">
    ";
        // line 36
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 37
            echo "      <div class=\"form-item form-item--error-message\">
        <strong>";
            // line 38
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true));
            echo "</strong>
      </div>
    ";
        }
        // line 41
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 42
            echo "<div class=\"seven-details__description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
            echo "</div>";
        }
        // line 44
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 45
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        }
        // line 47
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true));
        }
        // line 50
        echo "</div>
</details>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 50,  90 => 48,  88 => 47,  85 => 45,  83 => 44,  78 => 42,  76 => 41,  70 => 38,  67 => 37,  65 => 36,  62 => 35,  59 => 33,  57 => 32,  53 => 31,  51 => 28,  50 => 27,  49 => 25,  47 => 23,  43 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override for a details element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the details element.
 * - errors: (optional) Any errors for this details element, may not be set.
 * - title: (optional) The title of the element, may not be set.
 * - description: (optional) The description of the element, may not be set.
 * - children: (optional) The children of the element, may not be set.
 * - value: (optional) The value of the element, may not be set.
 *
 * @see template_preprocess_details()
 */
#}
{#
  Prefix 'details' class to avoid collision with Modernizr.

  @todo Remove prefix after https://www.drupal.org/node/2981732 has been solved.
#}
<details{{ attributes.addClass('seven-details') }}>
  {%- if title -%}
    {%
      set summary_classes = [
        'seven-details__summary',
        required ? 'js-form-required',
        required ? 'form-required',
      ]
    %}
    <summary{{ summary_attributes.addClass(summary_classes) }}>
      {{- title -}}
    </summary>
  {%- endif -%}
  <div class=\"seven-details__wrapper details-wrapper\">
    {% if errors %}
      <div class=\"form-item form-item--error-message\">
        <strong>{{ errors }}</strong>
      </div>
    {% endif %}
    {%- if description -%}
      <div class=\"seven-details__description\">{{ description }}</div>
    {%- endif -%}
    {%- if children -%}
      {{ children }}
    {%- endif -%}
    {%- if value -%}
      {{ value }}
    {%- endif -%}
  </div>
</details>
", "core/themes/seven/templates/details.html.twig", "E:\\xampp\\htdocs\\qed42\\core\\themes\\seven\\templates\\details.html.twig");
    }
}
