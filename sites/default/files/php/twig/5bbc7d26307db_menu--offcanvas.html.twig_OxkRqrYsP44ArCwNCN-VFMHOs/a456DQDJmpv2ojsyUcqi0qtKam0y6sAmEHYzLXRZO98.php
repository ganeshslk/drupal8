<?php

/* themes/uikit/templates/navigation/menu--offcanvas.html.twig */
class __TwigTemplate_25686ef91d702ae6f2d02157096f6a7ccc62e50ceaa9ccea36375e244763469d extends Twig_Template
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
        $tags = array("import" => 26, "macro" => 34, "if" => 36, "set" => 38, "for" => 47);
        $filters = array();
        $functions = array("link" => 52);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'set', 'for'),
                array(),
                array('link')
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

        // line 26
        $context["menus"] = $this;
        // line 27
        echo "
";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0)));
        echo "

";
    }

    // line 34
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 35
            echo "  ";
            $context["menus"] = $this;
            // line 36
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 37
                echo "    ";
                // line 38
                $context["classes"] = array(0 => (((                // line 39
($context["menu_level"] ?? null) == 0)) ? ("uk-nav") : ("")), 1 => (((                // line 40
($context["menu_level"] ?? null) == 0)) ? ("uk-nav-default") : ("")), 2 => (((                // line 41
($context["menu_level"] ?? null) == 0)) ? ("uk-nav-parent-icon") : ("")), 3 => (((                // line 42
($context["menu_level"] ?? null) > 0)) ? ("uk-nav-sub") : ("")));
                // line 45
                echo "
    <ul";
                // line 46
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
                if ((($context["menu_level"] ?? null) == 0)) {
                    echo " uk-nav";
                }
                echo ">
    ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 48
                    echo "      ";
                    $context["item_classes"] = array(0 => (($this->getAttribute($context["item"], "below", array())) ? ("uk-parent") : ("")));
                    // line 49
                    echo "      ";
                    if ($this->getAttribute($context["item"], "display_item", array())) {
                        // line 50
                        echo "        <li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["item_classes"] ?? null)), "method"), "html", null, true));
                        echo ">
          ";
                        // line 51
                        if (($this->getAttribute($context["item"], "has_url", array()) || $this->getAttribute($context["item"], "is_external", array()))) {
                            // line 52
                            echo "            ";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                            echo "
          ";
                        } else {
                            // line 54
                            echo "            <a href=\"#\">";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                            echo "</a>
          ";
                        }
                        // line 56
                        echo "          ";
                        if ($this->getAttribute($context["item"], "below", array())) {
                            // line 57
                            echo "            ";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), $this->getAttribute(($context["attributes"] ?? null), "removeClass", array(0 => ($context["classes"] ?? null)), "method"), (($context["menu_level"] ?? null) + 1))));
                            echo "
          ";
                        }
                        // line 59
                        echo "        ";
                    }
                    // line 60
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "    </ul>

  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/uikit/templates/navigation/menu--offcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 62,  134 => 60,  131 => 59,  125 => 57,  122 => 56,  116 => 54,  110 => 52,  108 => 51,  103 => 50,  100 => 49,  97 => 48,  93 => 47,  86 => 46,  83 => 45,  81 => 42,  80 => 41,  79 => 40,  78 => 39,  77 => 38,  75 => 37,  72 => 36,  69 => 35,  55 => 34,  48 => 32,  45 => 27,  43 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/uikit/templates/navigation/menu--offcanvas.html.twig", "C:\\xampp\\htdocs\\drupal8\\themes\\uikit\\templates\\navigation\\menu--offcanvas.html.twig");
    }
}
