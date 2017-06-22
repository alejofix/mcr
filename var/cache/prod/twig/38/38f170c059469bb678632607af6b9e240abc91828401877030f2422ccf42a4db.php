<?php

/* FixServicemeBundle:Formularios/Motivo:2.html.twig */
class __TwigTemplate_648ba7ac81f275fa4a6e2040b7322b2ed66b5c92aaa652c089826eace5528842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("formularios/base.html.twig", "FixServicemeBundle:Formularios/Motivo:2.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "formularios/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Formulario Mejoramiento Internet
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">

                                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("role" => "form", "class" => "form-horizontal form-groups-bordered", "novalidate" => "novalidate")));
        echo "

                                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["params"]) {
            if ((($context["name"] != "_token") && ($context["name"] != "submit"))) {
                // line 19
                echo "
                                    <div class=\"form-group\">
                                        ";
                // line 21
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["params"], 'label', array("label_attr" => array("class" => "col-sm-3 control-label")));
                echo "
                                        <div class=\"col-sm-5\">
                                            ";
                // line 23
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["params"], 'widget');
                echo "
                                            <span class=\"text-danger\">";
                // line 24
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["params"], 'errors');
                echo "</span>
                                        </div>
                                    </div>

                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['params'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
                                <br/>
                                <div class=\"col-sm-offset-3 col-sm-5\">
                                    <button type=\"submit\" class=\"btn btn-default\">Guardar</button>
                                </div>

                                ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
    }

    public function getTemplateName()
    {
        return "FixServicemeBundle:Formularios/Motivo:2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 49,  104 => 48,  89 => 35,  81 => 29,  69 => 24,  65 => 23,  60 => 21,  56 => 19,  51 => 18,  46 => 16,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FixServicemeBundle:Formularios/Motivo:2.html.twig", "D:\\xampp\\htdocs\\mcr\\src\\Fix\\ServicemeBundle/Resources/views/Formularios/Motivo/2.html.twig");
    }
}
