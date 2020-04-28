<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* list.html.php */
class __TwigTemplate_fc45871fcbd9b9608c1c0b483982f0b33d895fc1fb0bd16a5711f09ed346768d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list.html.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list.html.php"));

        // line 1
        echo "<!DOCTYPE html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Einkaufsliste M151</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"\">

    <!-- BootstrapCDN-->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
</head>
<body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1>Einkaufsliste</h1>

                <table class=\"table\">
                    <tr>
                        <th>#</th>
                        <th>Anzahl</th>
                        <th>Name</th>
                        <th>Bearbeiten</th>
                        <th>Löschen</th>
                    </tr>

                    <?php
                        foreach (\$items as \$item) {
                            ?>
                            <tr>
                                <td><?php echo \$item[0] ?></td>
                                <td><?php echo \$item[1] ?></td>
                                <td><?php echo \$item[2] ?></td>
                                <td><a href=\"/list?edit=<?php echo \$item[0] ?>\" class=\"btn btn-info\">Bearbeiten</a></td>
                                <td><a href=\"/delete/<?php echo \$item[0] ?>\" class=\"btn btn-danger\">X</a></td>
                            </tr>
                            <?php
                        }
                    ?>
                </table>

                <form action=\"/add\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"count\">Anzahl</label>
                        <input type=\"number\" class=\"form-control\" id=\"count\" name=\"count\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"name\">Name</label>
                        <input type=\"number\" class=\"form-control\" id=\"name\" name=\"name\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Hinzufügen</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "list.html.php";
    }

    public function getDebugInfo()
    {
        return array (  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Einkaufsliste M151</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"\">

    <!-- BootstrapCDN-->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
</head>
<body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1>Einkaufsliste</h1>

                <table class=\"table\">
                    <tr>
                        <th>#</th>
                        <th>Anzahl</th>
                        <th>Name</th>
                        <th>Bearbeiten</th>
                        <th>Löschen</th>
                    </tr>

                    <?php
                        foreach (\$items as \$item) {
                            ?>
                            <tr>
                                <td><?php echo \$item[0] ?></td>
                                <td><?php echo \$item[1] ?></td>
                                <td><?php echo \$item[2] ?></td>
                                <td><a href=\"/list?edit=<?php echo \$item[0] ?>\" class=\"btn btn-info\">Bearbeiten</a></td>
                                <td><a href=\"/delete/<?php echo \$item[0] ?>\" class=\"btn btn-danger\">X</a></td>
                            </tr>
                            <?php
                        }
                    ?>
                </table>

                <form action=\"/add\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"count\">Anzahl</label>
                        <input type=\"number\" class=\"form-control\" id=\"count\" name=\"count\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"name\">Name</label>
                        <input type=\"number\" class=\"form-control\" id=\"name\" name=\"name\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Hinzufügen</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>", "list.html.php", "/var/www/Symfony/app/Resources/views/list.html.php");
    }
}
