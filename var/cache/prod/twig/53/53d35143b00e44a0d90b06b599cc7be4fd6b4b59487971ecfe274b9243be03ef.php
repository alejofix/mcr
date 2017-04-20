<?php

/* neon/base.html.twig */
class __TwigTemplate_95f05e5022ad1d0e916c09097a404a1f362f305502c8ea269edd3adf65081187 extends Twig_Template
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
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "        
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
        <script>\$.noConflict();</script>
   
    </head>
    
    <body class=\"page-body\">
        
        <div class=\"page-container\">
        
            <!-- header & menu  -->
             <div class=\"sidebar-menu\">
            \t<div class=\"sidebar-menu-inner\">
            
            \t\t<!-- Header -->
            \t\t<header class=\"logo-env\">
            \t\t  
                      ";
        // line 45
        echo twig_include($this->env, $context, "neon/body/header.html.twig");
        echo "\t
            \t\t
                    </header>
            
            \t\t<!-- Menú Lateral -->
            \t\t<ul id=\"main-menu\" class=\"main-menu\">
                    
                      ";
        // line 52
        echo twig_include($this->env, $context, "neon/body/menulateral.html.twig");
        echo "  
            
            \t\t</ul>
            
            \t</div>
            </div>       
            <!-- header & menu fin  -->
            
            <!-- contenido -->
            <div class=\"main-content\">
                
                <!-- menu superior -->
                <div class=\"row\">
                
                    <!-- Menú Usuario --> 
                    <div class=\"col-md-6 col-sm-8 clearfix\">
                    
                        ";
        // line 69
        echo twig_include($this->env, $context, "neon/body/menuusuario.html.twig");
        echo "
                    
                    </div>\t\t
                    <!--menu Cesión  -->
            \t\t<div class=\"col-md-6 col-sm-4 clearfix hidden-xs\">
                        
                        ";
        // line 75
        echo twig_include($this->env, $context, "neon/body/menucesion.html.twig");
        echo "
        
            \t\t</div>\t\t
                
                </div>
                <!-- menu superior end -->
                
                <hr />
                <div class=\"row\">
            <!-- Contenido Principal  -->\t\t
                        ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "            <!-- --> 
                </div>
                
                
                
                <!-- Footer --> 
                ";
        // line 92
        echo twig_include($this->env, $context, "neon/body/footer.html.twig");
        echo "
                
            
            </div>
            
            <!-- Chat --> 
            ";
        // line 98
        echo twig_include($this->env, $context, "neon/body/chat.html.twig");
        echo "
            
            
            <!-- contenido fin -->
        
        </div>
        
        ";
        // line 105
        $this->displayBlock('javascripts', $context, $blocks);
        // line 144
        echo "        
    </body>
    
</html>";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "MCR | ServiceMe ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/images/favicon/favicon4-03-03.png"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/css/font-icons/entypo/css/entypo.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/css/bootstrap.css"), "html", null, true);
        echo "\"/>    
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/css/neon-core.css"), "html", null, true);
        echo "\"/>    
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/css/neon-theme.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/css/neon-forms.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/css/custom.css"), "html", null, true);
        echo "\"/>
                    
     \t";
    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        // line 106
        echo "        
        <!-- Imported styles on this page -->
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\"></script>
        <!-- Bottom scripts (common) -->
        <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/gsap/main-gsap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/joinable.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/resizeable.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/neon-api.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    \t<!-- Imported scripts on this page -->
    \t<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/rickshaw/vendor/d3.v3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/rickshaw/rickshaw.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/morris.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/toastr.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/neon-chat.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    \t<!-- JavaScripts initializations and stuff -->
    \t<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/neon-custom.js"), "html", null, true);
        echo "\"></script>
    \t<!-- Demo Settings -->
        <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/neon-demo.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/sweetalert/dist/sweetalert.css"), "html", null, true);
        echo "\"/>
    \t<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/sweetalert/dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
      \t<!-- -->
            <style>
                .errortext {
                    color: red;
                }
            </style>
        ";
    }

    public function getTemplateName()
    {
        return "neon/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 136,  312 => 135,  308 => 134,  303 => 132,  298 => 130,  294 => 129,  290 => 128,  286 => 127,  282 => 126,  278 => 125,  274 => 124,  270 => 123,  266 => 122,  262 => 121,  258 => 120,  254 => 119,  249 => 117,  245 => 116,  241 => 115,  237 => 114,  233 => 113,  229 => 112,  225 => 111,  220 => 109,  216 => 108,  212 => 106,  209 => 105,  204 => 85,  197 => 25,  193 => 24,  189 => 23,  185 => 22,  181 => 21,  177 => 20,  173 => 19,  169 => 18,  166 => 17,  163 => 16,  157 => 14,  150 => 144,  148 => 105,  138 => 98,  129 => 92,  121 => 86,  119 => 85,  106 => 75,  97 => 69,  77 => 52,  67 => 45,  48 => 29,  45 => 28,  43 => 16,  38 => 14,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "neon/base.html.twig", "D:\\xampp\\htdocs\\_fix\\mcr\\app\\Resources\\views\\neon\\base.html.twig");
    }
}
