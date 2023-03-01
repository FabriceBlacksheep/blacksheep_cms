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

/* agence/_form.html.twig */
class __TwigTemplate_d6d7c2586df537d87ca07e369a8b3213 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "




";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
<br/>

<div class=\"row\">

<div class=\"col-3\">
<label/>Responsable de l'Agence</label>
";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, false, false, 14), 'row');
        echo "
<br/>
</div>
<div class=\"col-6\">
<br/>
";
        // line 20
        echo "<button type=\"button\" id=\"userAdd\" class=\"btn btn-primary\">
  <i class=\"fa fa-user\"></i> Ajouter un utilisateur
</button>
<br/>
</div>

</div>



<div class=\"row\">

<div class=\"col-3\">

";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 34), 'row');
        echo "





</div>

<div class=\"col-3\">
";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_EN", [], "any", false, false, false, 43), 'row');
        echo "

</div>

<div class=\"col-3\">
";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_DE", [], "any", false, false, false, 48), 'row');
        echo "

</div>

<div class=\"col-3\">
";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_NL", [], "any", false, false, false, 53), 'row');
        echo "

</div>



<div class=\"col-4\">

";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "idLocpro", [], "any", false, false, false, 61), 'row');
        echo "


</div>

<div class=\"col-4\">

";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 68), 'row');
        echo "


</div>

<div class=\"col-4\">

";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 75), 'row');
        echo "


</div>


<div class=\"col-12\">
<br/>
<label>Description</label>
<br/>
<div class=\"accordion\" id=\"accordionExample\">
  <div class=\"accordion-item\">
    <h2 class=\"accordion-header\" id=\"headingOne\">
      <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
        Description Française
      </button>
    </h2>
    <div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
      <div class=\"accordion-body\">

     ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 95), 'row');
        echo "
      </div>
    </div>
  </div>
  <div class=\"accordion-item\">
    <h2 class=\"accordion-header\" id=\"headingTwo\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
       Description Anglaise
      </button>
    </h2>
    <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
      <div class=\"accordion-body\">
       ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_EN", [], "any", false, false, false, 107), 'row');
        echo "
      </div>
    </div>
  </div>
  <div class=\"accordion-item\">
    <h2 class=\"accordion-header\" id=\"headingThree\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
        Description Allemande
      </button>
    </h2>
    <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
      <div class=\"accordion-body\">
        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_DE", [], "any", false, false, false, 119), 'row');
        echo "

      </div>
    </div>
  </div>
    <div class=\"accordion-item\">
    <h2 class=\"accordion-header\" id=\"headingFour\">
      <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
        Description Néerlandaise
      </button>
    </h2>
    <div id=\"collapseFour\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFour\" data-bs-parent=\"#accordionExample\">
      <div class=\"accordion-body\">
        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_NL", [], "any", false, false, false, 132), 'row');
        echo "

      </div>
    </div>
  </div>
</div>
<br/>

<div class=\"col-12\">

";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visuel", [], "any", false, false, false, 142), 'row');
        echo "

    <div class=\"row\">
        <div class=\"col-xs-6 col-md-3\">
            <img src=\"\" class=\"img-responsive\" id=\"image\" alt=\"\">
        </div>
    </div>



";
        // line 153
        echo "<form>
    <div class=\"form-group\">
        <div class=\"col-sm-10\">
            ";
        // line 157
        echo "
        </div>
        <div class=\"col-sm-2\">
            <button id=\"mLaunch\" type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#myModal\">
                <span class=\"glyphicon glyphicon-folder-open\">MEDIA</span>
            </button>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-6 col-md-3\">
            <img src=\"\" class=\"img-responsive\" id=\"image\" alt=\"\">
        </div>
    </div>
</form>


<br/>
</div>

<div class=\"row\">

<div class=\"col-3\">


";
        // line 182
        echo "
";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "longitude", [], "any", false, false, false, 183), 'row');
        echo "



</div>

<div class=\"col-3\">


";
        // line 193
        echo "
";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "latitude", [], "any", false, false, false, 194), 'row');
        echo "



</div>




<div class=\"col-3\">


";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "horaires", [], "any", false, false, false, 206), 'row');
        echo "

</div>
<div class=\"col-3\">


";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 212), 'row');
        echo "

</div>


";
        // line 218
        echo "<div class=\"col-12\">
<br/>
";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", false, false, false, 220), 'row');
        echo "
</div>

";
        // line 224
        echo "



</div>
    <button class=\"btn btn-sm btn-success mt-2\">";
        // line 229
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
";
        // line 231
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

 <!-- Modal -->
    <div class=\"modal  fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                </div>
                <div class=\"modal-body\">
                    <iframe id=\"myframe\" src=\"";
        // line 240
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_media");
        echo "\" width=\"100%\" height=\"500\"
                            frameborder=\"0\"></iframe>
                </div>
            </div>
        </div>
    </div>


<script>
    \$(document).ready(function () {



    // btn userAdd click
    \$('#userAdd').click(function () {

       location.href = \"";
        // line 256
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\";

    });








// detect if modal is closed
        \$('#myModal').on('hidden.bs.modal', function () {

          // get value of localstorage
            var path = localStorage.getItem('url');

            path = 'http://127.0.0.1:8000'+path

            // set value of path to input
            \$('#path').val(path);

            // set value of path to image

                // Get a reference to our file input
    const fileInput = document.querySelector('input[type=\"file\"]');

    // Create a new File object
    const myFile = new File(['Hello World!'], path, {
        //type image png jpg
        type: 'image/png',


        lastModified: new Date(),
    });



    // Now let's create a DataTransfer to get a FileList
    const dataTransfer = new DataTransfer();
    dataTransfer.items.add(myFile);
    fileInput.files = dataTransfer.files;



        });



    });
</script>
";
    }

    public function getTemplateName()
    {
        return "agence/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 256,  346 => 240,  334 => 231,  330 => 229,  323 => 224,  317 => 220,  313 => 218,  305 => 212,  296 => 206,  281 => 194,  278 => 193,  266 => 183,  263 => 182,  237 => 157,  232 => 153,  219 => 142,  206 => 132,  190 => 119,  175 => 107,  160 => 95,  137 => 75,  127 => 68,  117 => 61,  106 => 53,  98 => 48,  90 => 43,  78 => 34,  62 => 20,  54 => 14,  44 => 7,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "agence/_form.html.twig", "C:\\laragon2\\www\\BLACKSHEEP_CMS\\app_bs\\templates\\agence\\_form.html.twig");
    }
}
