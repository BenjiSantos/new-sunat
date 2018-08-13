<?php

/* themes/sunat/templates/views-view-fields--talks.html.twig */
class __TwigTemplate_055b9a479fee14f46966eec14aefc4120aa6d7ef58a5caafa93e39c8dc475d8c extends Twig_Template
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
        $tags = array("if" => 20);
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

        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            echo "    <h3>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h3>
";
        }
        // line 23
        if ((($this->getAttribute(($context["get"] ?? null), "search", array()) || $this->getAttribute(($context["get"] ?? null), "department", array())) || $this->getAttribute(($context["get"] ?? null), "city", array()))) {
            // line 24
            echo "    <p class=\"light\">
        ";
            // line 25
            if ($this->getAttribute(($context["get"] ?? null), "department", array())) {
                // line 26
                echo "            <a href=\"javascript:void(0)\" class=\"badge badge-light\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["intendence"] ?? null), $this->getAttribute(($context["get"] ?? null), "department", array()), array(), "array"), "html", null, true));
                echo "</a>
        ";
            }
            // line 28
            echo "        ";
            if ($this->getAttribute(($context["get"] ?? null), "city", array())) {
                // line 29
                echo "            <a href=\"javascript:void(0)\" class=\"badge badge-light\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["city"] ?? null), $this->getAttribute(($context["get"] ?? null), "city", array()), array(), "array"), "html", null, true));
                echo "</a>
        ";
            }
            // line 31
            echo "    </p>
    <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"container tarjeta\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"container\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-sm-12 info\">
                                        <h2>";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
            echo " <span>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_intendence", array()), "content", array()), "html", null, true));
            echo "</span> <span>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_city", array()), "content", array()), "html", null, true));
            echo "</span></h2>
                                        <p class=\"fecha\">
                                            <span class=\"dia\">";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_date", array()), "content", array()), "html", null, true));
            echo "</span>
                                            <span class=\"mes\">";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_date_1", array()), "content", array()), "html", null, true));
            echo "</span>
                                            <span class=\"anio\">";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_date_2", array()), "content", array()), "html", null, true));
            echo "</span>
                                        </p>
                                        ";
            // line 46
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_description", array()), "content", array()), "html", null, true));
            echo "
                                    </div>
                                    <div class=\"col-sm-12 botonera\">
                                        ";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "view_node", array()), "content", array()), "html", null, true));
            echo "
                                        ";
            // line 50
            if (($context["logged_in"] ?? null)) {
                // line 51
                echo "                                            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "link_flag", array()), "content", array()), "html", null, true));
                echo "
                                        ";
            } else {
                // line 53
                echo "                                            <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"collapse\" data-target=\"#collapseLogin\" aria-expanded=\"false\" aria-controls=\"collapseLogin\">Quiero asistir</button>
                                        ";
            }
            // line 55
            echo "                                    </div>
                                    <input type=\"hidden\" id=\"node_id\" value=\"";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["node"] ?? null), "id", array()), "html", null, true));
            echo "\">

                                    <div class=\"col-12 inf\">
                                        <div class=\"container collapse\" id=\"collapseLogin\">
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    <p class=\"text-center\">Para asistir a una charla debes <a href=\"/user/login\">iniciar sesión</a> si aun no te has registrado, <a href=\"/user/register\">registrate aquí</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
";
        } else {
            // line 75
            echo "    <div class=\"row chat-front\">
                <div class=\"col-sm-12\">
                    <div class=\"container tarjeta\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"container\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-sm-12 col-lg-7 info\">
                                            <h2>";
            // line 83
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
            echo " <span>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_intendence", array()), "content", array()), "html", null, true));
            echo "</span> <span>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_city", array()), "content", array()), "html", null, true));
            echo "</span></h2>
                                            <p class=\"fecha\">
                                                <span class=\"dia\">";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_date", array()), "content", array()), "html", null, true));
            echo "</span>
                                                <span class=\"mes\">";
            // line 86
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_date_1", array()), "content", array()), "html", null, true));
            echo "</span>
                                                <span class=\"anio\">";
            // line 87
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_date_2", array()), "content", array()), "html", null, true));
            echo "</span>
                                            </p>
                                            ";
            // line 89
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_description", array()), "content", array()), "html", null, true));
            echo "
                                        </div>
                                        <div class=\"col-sm-12 botonera\">
                                            ";
            // line 92
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "view_node", array()), "content", array()), "html", null, true));
            echo "
                                            ";
            // line 93
            if (($context["logged_in"] ?? null)) {
                // line 94
                echo "                                                ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "link_flag", array()), "content", array()), "html", null, true));
                echo "
                                            ";
            } else {
                // line 96
                echo "                                                <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"collapse\" data-target=\"#collapseLogin\" aria-expanded=\"false\" aria-controls=\"collapseLogin\">Quiero asistir</button>
                                            ";
            }
            // line 98
            echo "                                        </div>
                                        <input type=\"hidden\" id=\"node_id\" value=\"";
            // line 99
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["node"] ?? null), "id", array()), "html", null, true));
            echo "\">

                                        <div class=\"col-12 inf\">
                                            <div class=\"container collapse\" id=\"collapseLogin\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        <p class=\"text-center\">Para asistir a una charla debes <a href=\"/user/login\">iniciar sesión</a> si aun no te has registrado, <a href=\"/user/register\">registrate aquí</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
";
        }
        // line 118
        echo "


";
    }

    public function getTemplateName()
    {
        return "themes/sunat/templates/views-view-fields--talks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 118,  210 => 99,  207 => 98,  203 => 96,  197 => 94,  195 => 93,  191 => 92,  185 => 89,  180 => 87,  176 => 86,  172 => 85,  163 => 83,  153 => 75,  131 => 56,  128 => 55,  124 => 53,  118 => 51,  116 => 50,  112 => 49,  106 => 46,  101 => 44,  97 => 43,  93 => 42,  84 => 40,  73 => 31,  67 => 29,  64 => 28,  58 => 26,  56 => 25,  53 => 24,  51 => 23,  45 => 21,  43 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/sunat/templates/views-view-fields--talks.html.twig", "/Users/Benji/projects/new-sunat/themes/sunat/templates/views-view-fields--talks.html.twig");
    }
}
