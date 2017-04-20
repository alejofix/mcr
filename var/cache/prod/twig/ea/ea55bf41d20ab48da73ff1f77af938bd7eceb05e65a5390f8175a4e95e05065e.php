<?php

/* FixServicemeBundle:Security:login.html.twig */
class __TwigTemplate_77ce6b9723e75b7ead3acf493fe0f9fc3f60d8862e6fc03edce840d6f1f473d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("neon/base_login.html.twig", "FixServicemeBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "neon/base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"login-header login-caret\">
            <div class=\"login-content\">

                <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("login");
        echo "\" class=\"logo\">
                    <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/images/fix/FINAL_SERVICE-ME.png"), "html", null, true);
        echo "\" alt=\"\" width=\"275\"  />
                </a>

            </div>
        </div>

        <div class=\"login-form\">

            <div class=\"login-content\">

                ";
        // line 18
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 19
            echo "<em>-
                        <i class=\"entypo-traffic-cone\" aria-hidden=\"true\"></i>
                        ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "
                        <i class=\"entypo-traffic-cone\" aria-hidden=\"true\"></i>
                    -</em>
                ";
        } else {
            // line 25
            echo "                    <em>- ¡Bienvenido Estimado Humano!. -</em>";
        }
        // line 27
        echo "

                <form action=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"POST\">

                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\">
                                <i class=\"entypo-user\"></i>
                            </div>

                            <input type=\"text\" class=\"form-control\" name=\"_usuario\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null));
        echo "\" id=\"username\" placeholder=\"Usuario\" autocomplete=\"off\" />

                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\">
                                <i class=\"entypo-key\"></i>
                            </div>

                            <input type=\"password\" class=\"form-control\" name=\"_contrasena\" id=\"password\" placeholder=\"Contraseña\" autocomplete=\"off\" />
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                        </div>
                    </div>



                    <div class=\"form-group\">
                        <button type=\"submit\" value=\"Enviar\" class=\"btn btn-primary btn-block btn-login\">
                            <i class=\"entypo-login\"></i>
                            Ingresar
                        </button>
                    </div>

                    <!-- Implemented in v1.1.4 -->


                </form>

                <div class=\"login-bottom-links\">
                    <a > &copy; MMXVII &#124;<strong>&nbsp;Analistas Mejoramiento &nbsp;</strong>&#124;&nbsp; Módulo MCR&nbsp;&#124;</a>
                </div>

            </div>

        </div>


    ";
    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        // line 80
        echo "

    ";
        // line 82
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "FixServicemeBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 82,  136 => 80,  133 => 79,  100 => 49,  85 => 37,  74 => 29,  70 => 27,  67 => 25,  60 => 21,  56 => 19,  54 => 18,  41 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FixServicemeBundle:Security:login.html.twig", "D:\\xampp\\htdocs\\_fix\\mcr\\src\\Fix\\ServicemeBundle/Resources/views/Security/login.html.twig");
    }
}
