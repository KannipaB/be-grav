<?php

/* partials/base.html.twig */
class __TwigTemplate_d19d10730666f4e209727e4a001cc3260ca3919de3c2e66fa94f5c14bc541f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>

    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 30
        echo "</head>
<body>

    ";
        // line 33
        $this->displayBlock('showcase', $context, $blocks);
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "
    ";
        // line 39
        $this->displayBlock('footer', $context, $blocks);
        // line 40
        echo "
    ";
        // line 41
        $this->displayBlock('bottom', $context, $blocks);
        // line 47
        echo "</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "        <meta charset=\"utf-8\"/>
        <title>";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
        ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\"/>
        <link rel=\"canonical\" href=\"";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\"/>

        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

    ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 101), "method");
        // line 16
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bootstrap.css", 1 => 100), "method");
        // line 17
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/line-icon/style.css"), "method");
        // line 18
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/main.css"), "method");
        // line 19
        echo "        ";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 24
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/bootstrap.min.js", 1 => 100), "method");
        // line 25
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/main.js"), "method");
        // line 26
        echo "        ";
    }

    // line 33
    public function block_showcase($context, array $blocks = array())
    {
    }

    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "        </section>
    ";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 41
    public function block_bottom($context, array $blocks = array())
    {
        // line 42
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
        <script>

        </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 42,  174 => 41,  169 => 39,  164 => 35,  159 => 36,  157 => 35,  152 => 34,  145 => 33,  141 => 26,  138 => 25,  135 => 24,  132 => 23,  129 => 22,  125 => 19,  122 => 18,  119 => 17,  116 => 16,  113 => 15,  110 => 14,  102 => 27,  100 => 22,  94 => 20,  92 => 14,  87 => 12,  83 => 11,  80 => 10,  78 => 9,  70 => 8,  67 => 7,  64 => 6,  58 => 47,  56 => 41,  53 => 40,  51 => 39,  48 => 38,  45 => 33,  40 => 30,  38 => 6,  32 => 3,  29 => 2,  27 => 1,);
    }
}
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getActive ?: theme_config.default_lang }}">*/
/* <head>*/
/* */
/*     {% block head %}*/
/*         <meta charset="utf-8"/>*/
/*         <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/*         {% include 'partials/metadata.html.twig' %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*         <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png', true) }}"/>*/
/*         <link rel="canonical" href="{{ page.url(true, true) }}"/>*/
/* */
/*         {% block stylesheets %}*/
/*             {% do assets.addCss('theme://css/font-awesome.min.css',101) %}*/
/*             {% do assets.addCss('theme://css/bootstrap.css',100) %}*/
/*             {% do assets.addCss('theme://css/line-icon/style.css') %}*/
/*             {% do assets.addCss('theme://css-compiled/main.css') %}*/
/*         {% endblock %}*/
/*         {{ assets.css() }}*/
/* */
/*         {% block javascripts %}*/
/*             {% do assets.addJs('jquery',101) %}*/
/*             {% do assets.addJs('theme://js/bootstrap.min.js',100) %}*/
/*             {% do assets.addJs('theme://js/main.js') %}*/
/*         {% endblock %}*/
/*         {{ assets.js() }}*/
/* */
/*     {% endblock head %}*/
/* </head>*/
/* <body>*/
/* */
/*     {% block showcase %}{% endblock %}{% block body %}*/
/*         <section id="body" class="{{ class }}">*/
/*             {% block content %}{% endblock %}*/
/*         </section>*/
/*     {% endblock %}*/
/* */
/*     {% block footer %}{% endblock %}*/
/* */
/*     {% block bottom %}*/
/*         {{ assets.js('bottom') }}*/
/*         <script>*/
/* */
/*         </script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
