<?php

/* themes/sunat/templates/page--front.html.twig */
class __TwigTemplate_5ba15ad64e4467769c1e45bc8876181cbf46a3f9b8fbede9d50921dc99a511bb extends Twig_Template
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
        $tags = array("if" => 56);
        $filters = array();
        $functions = array("path" => 63);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('path')
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
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
        echo "\"><img src=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logo"] ?? null), "html", null, true));
        echo "\" alt=\"SUNAT -charlas\"></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            ";
        // line 56
        if (($context["logged_in"] ?? null)) {
            // line 57
            echo "                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Hola ";
            // line 60
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["user"] ?? null), "displayname", array()), "html", null, true));
            echo "</a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                <a class=\"dropdown-item\" href=\"";
            // line 62
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
            echo "charlas-subscritas\">Mis Charlas</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 63
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("entity.user.edit_form", array("user" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true));
            echo "\">Mis datos</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 64
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.logout", array("user" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true));
            echo "\">Cerrar sesión</a>
                            </div>
                        </li>
                    </ul>
                </div>
            ";
        } else {
            // line 70
            echo "                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
            // line 73
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login", array("user" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true));
            echo "\">Iniciar sesión</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"btn btn-primary\" href=\"";
            // line 76
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register", array("user" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true));
            echo "\">Regístrate</a>
                        </li>
                    </ul>
                </div>
            ";
        }
        // line 81
        echo "        </nav>
    </header>

    <main class=\"inicio\">
        <div class=\"search-wrap\">
            <div class=\"container\">
                <div class=\"row justify-content-end\">
                    <div class=\"buscador col-sm-12 col-lg-10\">
                        <form class=\"container-full\" action=\"";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["current_path"] ?? null), "html", null, true));
        echo "\" method=\"GET\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col-sm-3 col-md-2\">
                                    <p>Busco una charla sobre:</p>
                                </div>
                                <div class=\"col-sm-9 col-md-4\">
                                    <input type=\"text\" name=\"search\" placeholder=\"palabra clave, ej.: PYMEs\" required>
                                </div>
                                <div class=\"col-sm-4 col-md-2\">
                                    <select name=\"department\" id=\"department\">
                                        <option value=\"all\">Departamento</option>
                                        <option value=\"1\">Lima</option>
                                        <option value=\"2\">Arequipa</option>
                                        <option value=\"3\">Cuzco</option>
                                        <option value=\"4\">Ica</option>
                                    </select>
                                </div>
                                <div class=\"col-sm-4 col-md-2\">
                                    <select name=\"city\" id=\"city\">
                                        <option value=\"all\">Ciudad</option>
                                        <option value=\"1\">Lima</option>
                                        <option value=\"2\">Abancay</option>
                                        <option value=\"3\">Andahuaylas</option>
                                        <option value=\"4\">Arequipa</option>
                                        <option value=\"5\">Ayacucho</option>
                                        <option value=\"6\">Chimbote</option>
                                        <option value=\"7\">Cajamarca</option>
                                        <option value=\"8\">Callao</option>
                                    </select>
                                </div>
                                <div class=\"col-sm-4 col-md-2\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-block\">Buscar</button>
                                </div>
                            </div>
                        </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 129
        if (((($this->getAttribute(($context["get"] ?? null), "search", array()) == false) || ($this->getAttribute(($context["get"] ?? null), "department", array()) == false)) || ($this->getAttribute(($context["get"] ?? null), "city", array()) == false))) {
            // line 130
            echo "            <div class=\"hero-wrap\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-5 imagen\">
                            aqui la imagen
                        </div>
                        <div class=\"col-7 copy\">
                            <h2>En este sitio web encontrarás lo relacionado a...</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo obcaecati, id, mollitia dolorum quas ratione facere quibusdam quae fugit sunt accusantium doloremque atque consectetur voluptas rem sit voluptatum laboriosam commodi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"main-wrap\">
                <div class=\"container-full\">
                    <h1 class=\"light\">Charlas</h1>
                    ";
            // line 146
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
                </div>
            </div>

        ";
        } else {
            // line 151
            echo "            <div class=\"main-wrap --buscador\">
                <div class=\"container-full\">
                    <h1 class=\"light\">Resultado de búsqueda</h1>
                    ";
            // line 154
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
                </div>
            </div>
        ";
        }
        // line 158
        echo "    </main>
    <footer class=\"footer\">
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
        // line 194
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logo_footer"] ?? null), "html", null, true));
        echo "\" alt=\"SUNAT\">
                </div>
            </div>
        </div>
    </footer>
    <script>
        \$('.popover-dismiss').popover({
            trigger: 'focus'
        })
    </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/sunat/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 194,  199 => 158,  192 => 154,  187 => 151,  179 => 146,  161 => 130,  159 => 129,  116 => 89,  106 => 81,  98 => 76,  92 => 73,  87 => 70,  78 => 64,  74 => 63,  70 => 62,  65 => 60,  60 => 57,  58 => 56,  49 => 52,  43 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/sunat/templates/page--front.html.twig", "/Users/Benji/projects/new-sunat/themes/sunat/templates/page--front.html.twig");
    }
}
