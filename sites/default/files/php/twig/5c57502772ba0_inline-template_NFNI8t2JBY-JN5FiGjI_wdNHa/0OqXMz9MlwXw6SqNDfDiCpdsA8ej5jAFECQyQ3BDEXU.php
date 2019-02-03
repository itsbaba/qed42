<?php

/* {# inline_template_start #}<div class="news-body col-md-8 col-sm-12">
<div class= "description">{{ body }}</div>
<div class="category">{{ field_category_news_or_blog }}</div>
<i class="fa fa-pencil news-icon {{ field_icon_color }}" aria-hidden="true"></i>
</div>
 */
class __TwigTemplate_dae525231227228437f0f2a192e5822e1e1a62b16542e7aeb51a39f6dc4b6118 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<div class=\"news-body col-md-8 col-sm-12\">
<div class= \"description\">";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "</div>
<div class=\"category\">";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_category_news_or_blog"]) ? $context["field_category_news_or_blog"] : null), "html", null, true));
        echo "</div>
<i class=\"fa fa-pencil news-icon ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_icon_color"]) ? $context["field_icon_color"] : null), "html", null, true));
        echo "\" aria-hidden=\"true\"></i>
</div>
";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"news-body col-md-8 col-sm-12\">
<div class= \"description\">{{ body }}</div>
<div class=\"category\">{{ field_category_news_or_blog }}</div>
<i class=\"fa fa-pencil news-icon {{ field_icon_color }}\" aria-hidden=\"true\"></i>
</div>
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  55 => 3,  51 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}<div class=\"news-body col-md-8 col-sm-12\">
<div class= \"description\">{{ body }}</div>
<div class=\"category\">{{ field_category_news_or_blog }}</div>
<i class=\"fa fa-pencil news-icon {{ field_icon_color }}\" aria-hidden=\"true\"></i>
</div>
", "{# inline_template_start #}<div class=\"news-body col-md-8 col-sm-12\">
<div class= \"description\">{{ body }}</div>
<div class=\"category\">{{ field_category_news_or_blog }}</div>
<i class=\"fa fa-pencil news-icon {{ field_icon_color }}\" aria-hidden=\"true\"></i>
</div>
", "");
    }
}
