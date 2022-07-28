<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/vox_theme/templates/system/page.html.twig */
class __TwigTemplate_439232388b2bde8875d37326836b8824 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<section class=\"featured\" id=\"featured\" role=\"complementary\">

    <!-- 
    <div class=\"nid\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_id", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</div>
    <div class=\"title\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</div>
    <div class=\"banner\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_image", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</div>
    <div class=\"banner_path\">";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_image_path", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</div>
    <div class=\"banner_subtitle\">";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_subtitle", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</div>
     -->

    <div class=\"banner\">
        <h1 class=\"title\"> ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo " </h1>
        <img src=\"";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_image", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "\">
        <div class=\"search\">
            <input class=\"search-txt\" type=\"\" name=\"\" placeholder=\"Excample, Mobile App, Website\">
            <input type=\"submit\" name=\"submit\" value=\"Search\">
        </div>
        <div class=\"subtitle\">
            ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_subtitle", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
        </div>
    </div>

   ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
</section>

<section class=\"main\" id=\"main\">
   <main aria-label=\"Site main content\" class=\"content\" id=\"content\" role=\"main\">
     ";
        // line 29
        if (($context["is_front"] ?? null)) {
            // line 30
            echo "            
            <!-- Show Event -->
            <div class=\"events\">
                <h2>Events</h2>
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 35
                echo "                    <div class=\"event\">
                        <div class=\"event-card\">
                            <a href=\"";
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["event"], "url", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "\">
                            <div class=\"event-img\"><img src=\"";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "\"></div>
                            </a>
                            <div class=\"event-title\"><a href=\"";
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["event"], "url", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "</a></div>
                            ";
                // line 41
                echo " 
                            <div class=\"event-body\">";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["event"], "body", [], "any", false, false, true, 42), 42, $this->source));
                echo "</div>
                            ";
                // line 44
                echo "
                            <a href=\"";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["event"], "url", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "\" class=\"btn-detail\"> Detail</a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            </div>

     ";
        } else {
            // line 52
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "
     ";
        }
        // line 54
        echo "
   </main>
   <aside class=\"right--sidebar\" id=\"sidebar\" role=\"complementary\">
     ";
        // line 57
        if (($context["is_front"] ?? null)) {
            // line 58
            echo "        
            <div class=\"data-news\">
                <h2>News</h2>
                ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["news"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 62
                echo "                    <div class=\"news\">
                        <div class=\"event-card\">

                        <a href=\"";
                // line 65
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                echo "\">
                        <div class=\"event-img\"><img src=\"";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "\"></div>
                        </a>
                        <div class=\"event-title\"><a href=\"";
                // line 68
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo "</a></div>
                        ";
                // line 69
                echo " 
                        <div class=\"event-body\">";
                // line 70
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "body", [], "any", false, false, true, 70), 70, $this->source));
                echo "</div>
                        ";
                // line 72
                echo "
                        <a href=\"";
                // line 73
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                echo "\" class=\"btn-detail\"> Detail</a>

                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "            </div>


     ";
        } else {
            // line 82
            echo "        
        <div class=\"related\"><h2>Related Event / News</h2></div>

     ";
        }
        // line 86
        echo "   </aside>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/vox_theme/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 86,  221 => 82,  215 => 78,  204 => 73,  201 => 72,  197 => 70,  194 => 69,  188 => 68,  183 => 66,  179 => 65,  174 => 62,  170 => 61,  165 => 58,  163 => 57,  158 => 54,  152 => 52,  147 => 49,  137 => 45,  134 => 44,  130 => 42,  127 => 41,  121 => 40,  116 => 38,  112 => 37,  108 => 35,  104 => 34,  98 => 30,  96 => 29,  88 => 24,  81 => 20,  72 => 14,  68 => 13,  61 => 9,  57 => 8,  53 => 7,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/vox_theme/templates/system/page.html.twig", "C:\\laragon\\www\\drupal_vox\\web\\themes\\custom\\vox_theme\\templates\\system\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 29, "for" => 34, "autoescape" => 41);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'autoescape'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
