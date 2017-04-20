<?php

/* FixServicemeBundle:Usuarios:agregar.html.twig */
class __TwigTemplate_f985fb27ce0267431d45ed1355635b9e8cc1530271d7fd16f48b968505a35501 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("neon/base.html.twig", "FixServicemeBundle:Usuarios:agregar.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "neon/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    <div class=\"panel panel-primary\" data-collapsed=\"0\">
    
        <div class=\"panel-heading\">
\t\t\t<div class=\"panel-title\">
        \t   <h3>
                    <span class=\"label label-warning\">Administrador</span> 
                    Nuevo Usuario ";
        // line 13
        echo "                </h3>
\t\t\t</div>
\t\t</div>
        
        <div class=\"panel-body\">
         
         ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("role" => "form", "class" => "form-horizontal form-groups-bordered", "novalidate" => "novalidate")));
        echo "
         \t
         \t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["params"]) {
            if ((($context["name"] != "_token") && ($context["name"] != "submit"))) {
                // line 22
                echo "         \t\t<div class=\"form-group\">
         \t\t\t";
                // line 23
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["params"], 'label', array("label_attr" => array("class" => "col-sm-3 control-label")));
                echo "
                    <div class=\"col-sm-5\">
                        ";
                // line 25
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["params"], 'widget', array("attr" => array("class" => "form-control")));
                echo "
                        <span class=\"text-danger\">";
                // line 26
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["params"], 'errors');
                echo "</span>
                    </div>
                </div>
         \t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['params'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
                <br/>
                <div class=\"col-sm-offset-3 col-sm-5\">
                    ";
        // line 34
        echo "                    <button type=\"submit\" class=\"btn btn-primary btn-icon icon-left\">
                        Crear Usuario<i class=\"entypo-floppy\"></i>
                    </button>
                    <button type=\"reset\" class=\"btn btn-default btn-icon icon-left\">
                        Borrar Formulario<i class=\"entypo-trash\"></i>
                    </button>
                </div>

            
        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
        
        </div>
        
        

     </div>
     
    ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "FixServicemeBundle:Usuarios:agregar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 57,  117 => 55,  114 => 54,  101 => 43,  90 => 34,  85 => 30,  74 => 26,  70 => 25,  65 => 23,  62 => 22,  57 => 21,  52 => 19,  44 => 13,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FixServicemeBundle:Usuarios:agregar.html.twig", "D:\\xampp\\htdocs\\_fix\\mcr\\src\\Fix\\ServicemeBundle/Resources/views/Usuarios/agregar.html.twig");
    }
}
