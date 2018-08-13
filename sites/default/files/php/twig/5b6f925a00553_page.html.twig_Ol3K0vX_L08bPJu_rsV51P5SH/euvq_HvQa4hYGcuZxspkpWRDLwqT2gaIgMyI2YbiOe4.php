<?php

/* themes/sunat/templates/page.html.twig */
class __TwigTemplate_c8c35705ed7a8aff27bc080abffbb64d9953b911a175c49f00253bb1bc44fcca extends Twig_Template
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
        $tags = array("if" => 55);
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

        // line 48
        echo "<div class=\"interfaz\">
  <header class=\"cabecera\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
        echo "\"><img src=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logo"] ?? null), "html", null, true));
        echo "\" alt=\"SUNAT -charlas\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        ";
        // line 55
        if (($context["logged_in"] ?? null)) {
            // line 56
            echo "        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
    \t\t\t<ul class=\"navbar-nav\">
      \t\t\t\t<li class=\"nav-item dropdown\">
        \t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 59
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["user"] ?? null), "displayname", array()), "html", null, true));
            echo "</a>
        \t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
          \t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Mis Charlas</a>
          \t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Mis datos</a>
          \t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 63
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
            echo "user/logout\">Cerrar sesión</a>
        \t\t\t\t</div>
      \t\t\t\t</li>
    \t\t\t</ul>
  \t\t\t</div>
        ";
        } else {
            // line 69
            echo "        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
          <ul class=\"navbar-nav\">
              <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
            // line 72
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
            echo "user/login\">Iniciar sesión</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"btn btn-primary\" href=\"";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
            echo "user/register\">Regístrate</a>
              </li>
          </ul>
        </div>
        ";
        }
        // line 80
        echo "    </nav>
  </header>
  <main class=\"interna\">
    <div class=\"main-wrap\">
      <div class=\"container-full\">
        <div class=\"row\">
              ";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        </div>
      </div>
    </div>
  </main>
  ";
        // line 94
        echo "  <footer class=\"footer\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-lg-3\">
          <h2>Enlaces de Interés</h2>
          <ul>
            <li>Plan Operativo Anticorrupción</li>
            <li>Comisión Especial de Discapacidad del Congreso</li>
            <li>Ventanilla Única de Comercio Exterior</li>
          </ul>
        </div>
        <div class=\"col-sm-5 col-lg-2\">
          <h2>Atención virtual</h2>
          <ul>
            <li>Consulta de Aduanas</li>
            <li>Quejas y sugerencias</li>
          </ul>
        </div>
        <div class=\"col-sm-1 col-lg-1\">
          &nbsp;
        </div>
        <div class=\"col-sm-8 col-lg-3\">
          <h2>Central de consultas</h2>
          <ul>
            <li>Desde teléfono fijo a: <br><strong>0-801-12-100</strong> (Al costo de una llamada local)</li>
            <li>Desde celulares: <br><strong>(01) 315-0730</strong></li>
            <li>Horario de atención telefónica: <br>
              De Lunes a Viernes:<br>
              <strong>08:30 a.m. a 06:00 p.m.</strong><br>
              Sábados:<br>
              <strong>09:00 a.m. a 01:00 p.m.</strong>
            </li>
          </ul>
        </div>
        <div class=\"col logo\">
          <img src=\"";
        // line 129
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logo_footer"] ?? null), "html", null, true));
        echo "\" alt=\"SUNAT\">
        </div>
      </div>
    </div>
  </footer>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/sunat/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 129,  115 => 94,  107 => 86,  99 => 80,  91 => 75,  85 => 72,  80 => 69,  71 => 63,  64 => 59,  59 => 56,  57 => 55,  48 => 51,  43 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/sunat/templates/page.html.twig", "/Users/Benji/projects/new-sunat/themes/sunat/templates/page.html.twig");
    }
}
