<?php

/* @atoms/01-homepage-banner/homepage-banner.twig */
class __TwigTemplate_f4cde46fa47d159696f2582410938afaf9ede470e8b3c30e841d73e26b4db643 extends Twig_Template
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
        $tags = array("if" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
        if ((isset($context["data"]) ? $context["data"] : null)) {
            // line 2
            echo "\t<div class=\"banner-wrapper\">
\t\t<a href=\"";
            // line 3
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "banner_link", array()), "html", null, true));
            echo "\"><img src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "banner_image", array()), "html", null, true));
            echo "\"></a>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@atoms/01-homepage-banner/homepage-banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data %}
\t<div class=\"banner-wrapper\">
\t\t<a href=\"{{ data.banner_link }}\"><img src=\"{{ data.banner_image }}\"></a>
\t</div>
{% endif %}", "@atoms/01-homepage-banner/homepage-banner.twig", "E:\\xampp\\htdocs\\qed42\\themes\\custom\\qed42theme\\pattern-lab\\source\\_patterns\\00-atoms\\01-homepage-banner\\homepage-banner.twig");
    }
}
