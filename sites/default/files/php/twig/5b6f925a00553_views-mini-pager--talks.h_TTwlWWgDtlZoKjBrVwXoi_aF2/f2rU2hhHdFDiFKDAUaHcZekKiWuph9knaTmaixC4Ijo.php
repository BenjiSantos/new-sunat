<?php

/* themes/sunat/templates/views-mini-pager--talks.html.twig */
class __TwigTemplate_3ebbc72afaf7dc965c4030f0ba57866f2b6259f10faca87346b16c24eab296ce extends Twig_Template
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
        $tags = array("if" => 14, "trans" => 26);
        $filters = array("t" => 18);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('t'),
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

        // line 14
        if (($this->getAttribute(($context["items"] ?? null), "previous", array()) || $this->getAttribute(($context["items"] ?? null), "next", array()))) {
            // line 15
            echo "<div class=\"row justify-content-end\">
    <div class=\"col-5\">
      <nav role=\"navigation\" aria-labelledby=\"pagination-heading\">
            <h4 class=\"visually-hidden\">";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination")));
            echo "</h4>
            <ul class=\"js-pager__items pagination justify-content-end\">
                 <li class=\"page-item ";
            // line 20
            if (($this->getAttribute(($context["items"] ?? null), "previous", array()) == false)) {
                echo "disabled";
            }
            echo "\">
                    <a class=\"page-link\" href=\"";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", array()), "href", array()), "html", null, true));
            echo "\" tabindex=\"-1\">&larr;</a>
                 </li>
                ";
            // line 23
            if ($this->getAttribute(($context["items"] ?? null), "current", array())) {
                // line 24
                echo "
                    <li class=\"page-item active\">
                        ";
                // line 26
                echo t("<a class=\"page-link\" href=\"\">@items.current</a>", array("@items.current" => $this->getAttribute(                // line 27
($context["items"] ?? null), "current", array()), ));
                // line 29
                echo "                    </li>
                ";
            }
            // line 31
            echo "                <li class=\"page-item ";
            if (($this->getAttribute(($context["items"] ?? null), "next", array()) == false)) {
                echo "disabled";
            }
            echo "\">
                    <a class=\"page-link\" href=\"";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", array()), "href", array()), "html", null, true));
            echo "\">&rarr;</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/sunat/templates/views-mini-pager--talks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 32,  79 => 31,  75 => 29,  73 => 27,  72 => 26,  68 => 24,  66 => 23,  61 => 21,  55 => 20,  50 => 18,  45 => 15,  43 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/sunat/templates/views-mini-pager--talks.html.twig", "/Users/Benji/projects/new-sunat/themes/sunat/templates/views-mini-pager--talks.html.twig");
    }
}
