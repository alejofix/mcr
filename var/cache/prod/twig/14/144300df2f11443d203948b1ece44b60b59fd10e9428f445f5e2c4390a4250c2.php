<?php

/* neon/base_login.html.twig */
class __TwigTemplate_7cf03475b2ab2ce71e6836bf71168de96a30756413e2e8f74605e0f0b17d23b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">

    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <meta name=\"ServiceMe\" content=\"APP Mejoramiento\" />
        <meta name=\"author\" content=\"jorge.montenegro.t@claro.com.co\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\"/>

        <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/images/favicon/favicon4-03-03.png"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/css/font-icons/entypo/css/entypo.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/css/bootstrap.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/css/neon-core.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/css/neon-theme.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/css/neon-forms.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/css/custom.css"), "html", null, true);
        echo "\"/>

        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
        <script>\$.noConflict();</script>
    </head>

    <body class=\"page-body login-page login-form-fall\">
        <!-- This is needed when you send requests via Ajax -->
        <script type=\"text/javascript\">
            var baseurl = '';
        </script>

        <div class=\"login-container\">

            <!-- Contenido Principal  -->
            ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "            <!-- -->

        </div>

        ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "
    </body>
</html>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "MCR | Login ";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        // line 43
        echo "        <!-- Bottom scripts (common) -->
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/gsap/main-gsap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/joinable.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/resizeable.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/neon-api.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/neon-login.js"), "html", null, true);
        echo "\"></script>
        <!-- JavaScripts initializations and stuff -->
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/neon-custom.js"), "html", null, true);
        echo "\"></script>
        <!-- Demo Settings -->
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/neon-demo.js"), "html", null, true);
        echo "\"></script>
            <style>
                .errortext {
                    color: red;
                }
            </style>
        ";
    }

    public function getTemplateName()
    {
        return "neon/base_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 55,  157 => 53,  152 => 51,  148 => 50,  144 => 49,  140 => 48,  136 => 47,  132 => 46,  128 => 45,  124 => 44,  121 => 43,  118 => 42,  113 => 37,  107 => 13,  100 => 62,  98 => 42,  92 => 38,  90 => 37,  74 => 24,  69 => 22,  65 => 21,  61 => 20,  57 => 19,  53 => 18,  49 => 17,  45 => 16,  40 => 14,  36 => 13,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "neon/base_login.html.twig", "D:\\xampp\\htdocs\\_fix\\mcr\\app\\Resources\\views\\neon\\base_login.html.twig");
    }
}
