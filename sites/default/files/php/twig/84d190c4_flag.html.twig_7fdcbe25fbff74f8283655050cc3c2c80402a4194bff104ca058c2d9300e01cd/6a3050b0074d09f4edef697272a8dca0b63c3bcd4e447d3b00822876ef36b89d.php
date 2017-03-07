<?php

/* modules/flag/templates/flag.html.twig */
class __TwigTemplate_cc29971029d18377c99571bd767d74d49b028f7d19f9ad2488d88f28e1ffc95e extends Twig_Template
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
        $tags = array("spaceless" => 14, "if" => 19, "set" => 20);
        $filters = array();
        $functions = array("attach_library" => 16);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless', 'if', 'set'),
                array(),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

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
        ob_start();
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("flag/flag.link"), "html", null, true));
        echo "

";
        // line 19
        if (((isset($context["action"]) ? $context["action"] : null) == "unflag")) {
            // line 20
            echo "    ";
            $context["action_class"] = "action-unflag";
        } else {
            // line 22
            echo "    ";
            $context["action_class"] = "action-flag";
        }
        // line 24
        echo "
";
        // line 26
        $context["classes"] = array(0 => "flag", 1 => ("flag-" . $this->getAttribute(        // line 28
(isset($context["flag"]) ? $context["flag"] : null), "id", array(), "method")), 2 => ((("flag-" . $this->getAttribute(        // line 29
(isset($context["flag"]) ? $context["flag"] : null), "id", array(), "method")) . "-") . $this->getAttribute((isset($context["flaggable"]) ? $context["flaggable"] : null), "id", array(), "method")), 3 =>         // line 30
(isset($context["action_class"]) ? $context["action_class"] : null));
        // line 32
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        // line 33
        echo "
";
        // line 35
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "setAttribute", array(0 => "rel", 1 => "nofollow"), "method");
        // line 36
        echo "
<a";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</a>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/flag/templates/flag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 37,  75 => 36,  73 => 35,  70 => 33,  68 => 32,  66 => 30,  65 => 29,  64 => 28,  63 => 26,  60 => 24,  56 => 22,  52 => 20,  50 => 19,  45 => 16,  43 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for flag links.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the link element.*/
/*  * - title: The flag link title.*/
/*  * - action: 'flag' or 'unflag'*/
/*  * - flag: The flag object.*/
/*  * - flaggable: The flaggable entity.*/
/*  *//* */
/* #}*/
/* {% spaceless %}*/
/* {# Attach the flag CSS library.#}*/
/* {{ attach_library('flag/flag.link') }}*/
/* */
/* {# Depending on the flag action, set the appropriate action class. #}*/
/* {% if action == 'unflag' %}*/
/*     {% set action_class = 'action-unflag' %}*/
/* {% else %}*/
/*     {% set action_class = 'action-flag' %}*/
/* {% endif %}*/
/* */
/* {# Set the remaining Flag CSS classes. #}*/
/* {% set classes = [*/
/* 'flag',*/
/* 'flag-' ~ flag.id(),*/
/* 'flag-' ~ flag.id() ~ '-' ~ flaggable.id(),*/
/* action_class*/
/* ] %}*/
/* {% set attributes = attributes.addClass(classes) %}*/
/* */
/* {# Set nofollow to prevent search bots from crawling anonymous flag links #}*/
/* {% set attributes = attributes.setAttribute('rel', 'nofollow') %}*/
/* */
/* <a{{ attributes }}>{{ title }}</a>*/
/* {% endspaceless %}*/
/* */
