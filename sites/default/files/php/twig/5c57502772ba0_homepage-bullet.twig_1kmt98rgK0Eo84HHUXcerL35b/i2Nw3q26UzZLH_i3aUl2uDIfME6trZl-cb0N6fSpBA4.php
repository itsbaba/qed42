<?php

/* @atoms/02-homepage-bullet/homepage-bullet.twig */
class __TwigTemplate_256d37a960c2e741e883ec6d6f143ec2024cf1ca67cbc2c5f0f0afdb0b4586eb extends Twig_Template
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
        $filters = array("raw" => 5);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('raw'),
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
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "bullet_value", array())) {
            // line 2
            echo "\t<div class=\"bullet-wrapper container\">
\t\t<h2 class=\"bullet-title\">Please go through below bullet points</h2>
\t\t<div class=\"bullet-points\">
\t\t\t";
            // line 5
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "bullet_value", array())));
            echo "
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@atoms/02-homepage-bullet/homepage-bullet.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data.bullet_value %}
\t<div class=\"bullet-wrapper container\">
\t\t<h2 class=\"bullet-title\">Please go through below bullet points</h2>
\t\t<div class=\"bullet-points\">
\t\t\t{{ data.bullet_value|raw }}
\t\t</div>
\t</div>
{% endif %}", "@atoms/02-homepage-bullet/homepage-bullet.twig", "E:\\xampp\\htdocs\\qed42\\themes\\custom\\qed42theme\\pattern-lab\\source\\_patterns\\00-atoms\\02-homepage-bullet\\homepage-bullet.twig");
    }
}
