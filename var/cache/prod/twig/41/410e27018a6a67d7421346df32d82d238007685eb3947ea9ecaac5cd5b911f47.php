<?php

/* formularios/base.html.twig */
class __TwigTemplate_7d4510b7f18fcd11f9662e7bf09089de92db6e731b396b5763346800eeea385c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es-CO\">

    <head>
    
        <meta charset=\"utf-8\"/>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <meta name=\"author\" content=\"alejo_fix\"/>
        <meta name=\"author\" content=\"jorge.montenegro.t@claro.com.co\"/>
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    

        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/images/favicon/favicon4-03-03.png"), "html", null, true);
        echo "\" />
    
    </head>

    <body>
    
            <!-- Contenido  -->
            ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "

    
        ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    
    </body>

</html>
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "MCR | Formularios ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "            <!-- Bootstrap Core CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/bootstrap/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <!-- MetisMenu CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/bootstrap/vendor/metisMenu/metisMenu.min.css"), "html", null, true);
        echo "\" />
            <!-- Custom CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/bootstrap/dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" />
            <!-- Morris Charts CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/bootstrap/vendor/morrisjs/morris.css"), "html", null, true);
        echo "\" />
            <!-- Custom Fonts -->
            <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/bootstrap/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
            <!-- sweetalert -->
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/sweetalert/dist/sweetalert.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        // line 37
        echo "            ";
    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        // line 42
        echo "
            <!-- jQuery -->
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/bootstrap/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/bootstrap/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Metis Menu Plugin JavaScript -->
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/bootstrap/vendor/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Morris Charts JavaScript -->
            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/bootstrap/vendor/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/bootstrap/vendor/morrisjs/morris.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/bootstrap/data/morris-data.js"), "html", null, true);
        echo "\"></script>
            <!-- Custom Theme JavaScript -->
            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/bootstrap/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "formularios/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 54,  153 => 52,  149 => 51,  145 => 50,  140 => 48,  135 => 46,  130 => 44,  126 => 42,  123 => 41,  119 => 37,  116 => 36,  110 => 26,  105 => 24,  100 => 22,  95 => 20,  90 => 18,  85 => 16,  82 => 15,  79 => 14,  73 => 11,  65 => 56,  63 => 41,  58 => 38,  56 => 36,  46 => 29,  43 => 28,  41 => 14,  35 => 11,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "formularios/base.html.twig", "D:\\xampp\\htdocs\\mcr\\app\\Resources\\views\\formularios\\base.html.twig");
    }
}
