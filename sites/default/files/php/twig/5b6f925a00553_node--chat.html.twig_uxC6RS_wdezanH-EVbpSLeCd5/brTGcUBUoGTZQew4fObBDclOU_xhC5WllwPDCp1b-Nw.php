<?php

/* themes/sunat/templates/node--chat.html.twig */
class __TwigTemplate_d3e1d161c0aba134661e8e67f3062c6a78ddf3ecf510f4df626dca3109b38886 extends Twig_Template
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
        $tags = array("set" => 102, "trans" => 103, "if" => 111);
        $filters = array("date" => 87, "raw" => 91, "format_date" => 102);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'trans', 'if'),
                array('date', 'raw', 'format_date'),
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

        // line 75
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  <div class=\"row\">
          <h1 class=\"light\">";
        // line 77
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "</h1>
          <div class=\"col-12 sup\">
            <div class=\"container tarjeta\">
              <div class=\"row\">
                <div class=\"col\">
                  <div class=\"container\">
                    <div class=\"row align-items-center\">
                      <div class=\"col-sm-12 col-lg-7 info\">
                        <h2><span>";
        // line 85
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["city"] ?? null), $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_intendence", array()), "value", array()), array(), "array"), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["intendence"] ?? null), $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_intendence", array()), "value", array()), array(), "array"), "html", null, true));
        echo "</span></h2>
                        <p class=\"fecha\">
                          <span class=\"dia\">";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_date", array()), "value", array()), "d"), "html", null, true));
        echo "</span> 
                          <span class=\"mes\">";
        // line 88
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_date", array()), "value", array()), "M"), "html", null, true));
        echo "</span> 
                          <span class=\"anio\">";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_date", array()), "value", array()), "Y"), "html", null, true));
        echo "</span>
                        </p>
                        ";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_description", array()), "value", array())));
        echo "
                        <table class=\"table table-striped datable\">
                          <thead>
                            <tr>
                              <th>Intendencia:</th>
                              <th>";
        // line 96
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["intendence"] ?? null), $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_intendence", array()), "value", array()), array(), "array"), "html", null, true));
        echo "</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Fecha:</td>
                              ";
        // line 102
        $context["date_field"] = call_user_func_array($this->env->getFilter('format_date')->getCallable(), array(twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_date", array()), "value", array()), "U"), "chat_date"));
        // line 103
        echo "                              ";
        echo t("<td>@date_field</td>", array("@date_field" =>         // line 104
($context["date_field"] ?? null), ));
        // line 106
        echo "                            </tr>
                            <tr>
                              <td>Hora:</td>
                              <td>";
        // line 109
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), array(twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_date", array()), "value", array()), "U"), "chat_time")), "html", null, true));
        echo "</td>
                            </tr>
                            ";
        // line 111
        if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_address", array()), "value", array())) {
            // line 112
            echo "                            <tr>
                              <td>Lugar:</td>
                              <td>";
            // line 114
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_address", array()), "value", array()), "html", null, true));
            echo "</td>
                            </tr>
                            ";
        }
        // line 117
        echo "                          </tbody>
                        </table>
                          ";
        // line 119
        if (($context["logged_in"] ?? null)) {
            // line 120
            echo "                              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_calification", array()), "html", null, true));
            echo "
                              ";
            // line 121
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_calification", array()), "value", array()), "html", null, true));
            echo "
                          ";
        } else {
            // line 123
            echo "                            <span></span>
                          ";
        }
        // line 125
        echo "                      </div>
                      <div class=\"col-sm-12 col-lg-5 detalle\">
                        <h3>";
        // line 127
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["intendence"] ?? null), $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_intendence", array()), "value", array()), array(), "array"), "html", null, true));
        echo "</h3>
                        <p><strong>";
        // line 128
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_quota", array()), "value", array()), "html", null, true));
        echo " disponibles</strong> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_quota", array()), "value", array()), "html", null, true));
        echo " cupos en total</p>
                        ";
        // line 129
        if (($context["logged_in"] ?? null)) {
            // line 130
            echo "                          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "flag_assistance", array()), "html", null, true));
            echo "
                        ";
        } else {
            // line 132
            echo "                          <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"collapse\" data-target=\"#collapseLogin\" aria-expanded=\"false\" aria-controls=\"collapseLogin\">Quiero asistir</button>
                        ";
        }
        // line 134
        echo "                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <input type=\"hidden\" id=\"node_id\" value=\"";
        // line 141
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
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/sunat/templates/node--chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 141,  173 => 134,  169 => 132,  163 => 130,  161 => 129,  155 => 128,  151 => 127,  147 => 125,  143 => 123,  138 => 121,  133 => 120,  131 => 119,  127 => 117,  121 => 114,  117 => 112,  115 => 111,  110 => 109,  105 => 106,  103 => 104,  101 => 103,  99 => 102,  90 => 96,  82 => 91,  77 => 89,  73 => 88,  69 => 87,  60 => 85,  49 => 77,  43 => 75,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/sunat/templates/node--chat.html.twig", "/Users/Benji/projects/new-sunat/themes/sunat/templates/node--chat.html.twig");
    }
}
