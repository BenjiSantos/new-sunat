<?php

/* themes/sunat/templates/form--user-login-form.html.twig */
class __TwigTemplate_4969d71e05c173730311550b3f413ae96c754692e12bf4bea04165d7347f280a extends Twig_Template
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
        echo "<div class=\"login-block row justify-content-center align-items-center\">
    <div class=\"col-sm-12 col-md-4\">
        <div class=\"form login-form\">
            <h2>Inicia sesión</h2>
            <form ";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
                ";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "messages", array()), "html", null, true));
        echo "
                <fieldset>
                    <div id=\"error_messages\"></div>
                    <div class=\"form-group\">
                        ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "name", array()), "html", null, true));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "pass", array()), "html", null, true));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["element"] ?? null), "actions", array()), "submit", array()), "html", null, true));
        echo "
                    </div>
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <div class=\"form-check\">
                                <input id=\"show_password\" class=\"show_password form-check-input\" type=\"checkbox\" />
                                <label class=\"password-toggle\" for=\"show_password\">Recuérdame</label>
                            </div>
                        </div>
                        <div class=\"col-6 text-right form-check\">
                            <a href=\"";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
        echo "user/password\" class=\"forgot-password\">Olvidé mi contraseña</a>
                        </div>
                    </div>
                    ";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "form_build_id", array()), "html", null, true));
        echo " ";
        // line 30
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "form_id", array()), "html", null, true));
        echo " ";
        // line 31
        echo "                </fieldset>

                <fieldset>
                    <h3>Aún no tengo usuario</h3>
                    <div class=\"form-group\">
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
        echo "user/register\" class=\"btn btn-secondary btn-block\">Quiero registrarme</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/sunat/templates/form--user-login-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  98 => 31,  94 => 30,  91 => 29,  85 => 26,  72 => 16,  66 => 13,  60 => 10,  53 => 6,  49 => 5,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/sunat/templates/form--user-login-form.html.twig", "/Users/Benji/projects/new-sunat/themes/sunat/templates/form--user-login-form.html.twig");
    }
}
