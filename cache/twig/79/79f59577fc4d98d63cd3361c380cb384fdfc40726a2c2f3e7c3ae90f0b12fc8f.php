<?php

/* partials/base.html.twig */
class __TwigTemplate_51ee4791be006c0727cfe47ad9acc9ed1154d582f021a690afbcd7611631172f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 43
        echo "</head>

<body>

";
        // line 48
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 48)->display($context);
        // line 49
        echo "
<div class=\"container\">
    ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "</div>

<div class=\"footer\">
    <div class=\"container\">
        <p class=\"text-muted\">Mytheme Theme for <a href=\"http://getgrav.org\">Grav</a></p>
    </div>
</div>
</body>
";
        // line 60
        $this->displayBlock('bottom', $context, $blocks);
        // line 61
        echo "</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 9
            echo "            <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\">
        ";
        } else {
            // line 11
            echo "            <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\">
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 14
            echo "            <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
        ";
        }
        // line 16
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">

        <title>";
        // line 18
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>

        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "
    ";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "            ";
        // line 22
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/bootstrap.min.css", 1 => 101), "method");
        // line 23
        echo "
            ";
        // line 25
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/bootstrap-custom.css", 1 => 100), "method");
        // line 26
        echo "
            ";
        // line 27
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
        ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", 1 => 101), "method");
        // line 32
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/bootstrap.min.js"), "method");
        // line 33
        echo "
            ";
        // line 34
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 35
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "method");
            // line 36
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 37
            echo "            ";
        }
        // line 38
        echo "
            ";
        // line 39
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
    }

    // line 60
    public function block_bottom($context, array $blocks = array())
    {
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
        return array (  180 => 60,  175 => 51,  169 => 39,  166 => 38,  163 => 37,  160 => 36,  157 => 35,  155 => 34,  152 => 33,  149 => 32,  146 => 31,  143 => 30,  137 => 27,  134 => 26,  131 => 25,  128 => 23,  125 => 22,  123 => 21,  120 => 20,  115 => 41,  113 => 30,  110 => 29,  108 => 20,  99 => 18,  93 => 16,  87 => 14,  84 => 13,  78 => 11,  72 => 9,  70 => 8,  65 => 5,  62 => 4,  57 => 61,  55 => 60,  45 => 52,  43 => 51,  39 => 49,  37 => 48,  31 => 43,  29 => 4,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     {% block head %}*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         {% if header.description %}*/
/*             <meta name="description" content="{{ header.description }}">*/
/*         {% else %}*/
/*             <meta name="description" content="{{ site.description }}">*/
/*         {% endif %}*/
/*         {% if header.robots %}*/
/*             <meta name="robots" content="{{ header.robots }}">*/
/*         {% endif %}*/
/*         <link rel="icon" type="image/png" href="{{ theme_url }}/images/favicon.png">*/
/* */
/*         <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             {# Bootstrap core CSS #}*/
/*             {% do assets.add('theme://css/bootstrap.min.css',101) %}*/
/* */
/*             {# Custom styles for this theme #}*/
/*             {% do assets.add('theme://css/bootstrap-custom.css',100) %}*/
/* */
/*             {{ assets.css() }}*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             {% do assets.add('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', 101) %}*/
/*             {% do assets.add('theme://js/bootstrap.min.js') %}*/
/* */
/*             {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*                 {% do assets.add('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') %}*/
/*                 {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}*/
/*             {% endif %}*/
/* */
/*             {{ assets.js() }}*/
/*         {% endblock %}*/
/* */
/*     {% endblock head %}*/
/* </head>*/
/* */
/* <body>*/
/* */
/* {# include the header + navigation #}*/
/* {% include 'partials/header.html.twig' %}*/
/* */
/* <div class="container">*/
/*     {% block content %}{% endblock %}*/
/* </div>*/
/* */
/* <div class="footer">*/
/*     <div class="container">*/
/*         <p class="text-muted">Mytheme Theme for <a href="http://getgrav.org">Grav</a></p>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* {% block bottom %}{% endblock %}*/
/* </html>*/
/* */
