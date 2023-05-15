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

/* registration/confirmation_email.html.twig */
class __TwigTemplate_7fdad9b507830f7fc5d55320f4a8b0fe82d85fd6e4d41eb3913017f9aacb2fcc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional //EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" lang=\"fr\">
<head>
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"x-apple-disable-message-reformatting\">
    <!--[if !mso]><!--><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><!--<![endif]-->
    <title></title>

    <style type=\"text/css\">
        @media only screen and (min-width: 620px) {
            .u-row {
                width: 600px !important;
            }
            .u-row .u-col {
                vertical-align: top;
            }

            .u-row .u-col-100 {
                width: 600px !important;
            }

        }

        @media (max-width: 620px) {
            .u-row-container {
                max-width: 100% !important;
                padding-left: 0px !important;
                padding-right: 0px !important;
            }
            .u-row .u-col {
                min-width: 320px !important;
                max-width: 100% !important;
                display: block !important;
            }
            .u-row {
                width: 100% !important;
            }
            .u-col {
                width: 100% !important;
            }
            .u-col > div {
                margin: 0 auto;
            }
        }
        body {
            margin: 0;
            padding: 0;
        }

        table,
        tr,
        td {
            vertical-align: top;
            border-collapse: collapse;
        }

        p {
            margin: 0;
        }

        .ie-container table,
        .mso-container table {
            table-layout: fixed;
        }

        * {
            line-height: inherit;
        }

        a[x-apple-data-detectors='true'] {
            color: inherit !important;
            text-decoration: none !important;
        }

        @media (max-width: 480px) {
            .hide-mobile {
                max-height: 0px;
                overflow: hidden;
                display: none !important;
            }
        }

        table, td { color: #000000; } #u_body a { color: #0000ee; text-decoration: underline; } @media (max-width: 480px) { #u_content_image_4 .v-container-padding-padding { padding: 21px !important; } #u_content_image_4 .v-src-width { width: auto !important; } #u_content_image_4 .v-src-max-width { max-width: 42% !important; } #u_content_text_deprecated_3 .v-container-padding-padding { padding: 40px 10px 10px !important; } #u_content_menu_1 .v-padding { padding: 5px 10px !important; } #u_content_text_deprecated_4 .v-container-padding-padding { padding: 10px 10px 40px !important; } }
    </style>



    <!--[if !mso]><!--><link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\" type=\"text/css\"><!--<![endif]-->

</head>

<body class=\"clean-body u_body\" style=\"margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #ffffff;color: #000000\">
<!--[if IE]><div class=\"ie-container\"><![endif]-->
<!--[if mso]><div class=\"mso-container\"><![endif]-->
<table id=\"u_body\" style=\"border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #ffffff;width:100%\" cellpadding=\"0\" cellspacing=\"0\">
    <tbody>
    <tr style=\"vertical-align: top\">
        <td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
            <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td align=\"center\" style=\"background-color: #ffffff;\"><![endif]-->


            <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
                <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
                    <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
                        <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-color: transparent;\"><![endif]-->

                        <!--[if (mso)|(IE)]><td align=\"center\" width=\"600\" style=\"width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\" valign=\"top\"><![endif]-->
                        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;\">
                            <div style=\"height: 100%;width: 100% !important;\">
                                <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\"><!--<![endif]-->

                                    <table id=\"u_content_image_4\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
                                        <tbody>
                                        <tr>
                                            <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;\" align=\"left\">

                                                <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                    <tr>
                                                        <td style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\">

                                                            <img align=\"center\" border=\"0\" src=\"https://assets.unlayer.com/projects/160474/1684177060193-logo_snowTricks.png\" alt=\"\" title=\"\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 300px;\" width=\"300\" class=\"v-src-width v-src-max-width\"/>

                                                        </td>
                                                    </tr>
                                                </table>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                            </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                </div>
            </div>



            <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
                <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
                    <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
                        <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-color: transparent;\"><![endif]-->

                        <!--[if (mso)|(IE)]>
                        <td align=\"center\" width=\"600\"
                            style=\"background-color: #ffffff;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"
                            valign=\"top\"><![endif]-->
                        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;\">
                            <div style=\"background-color: #ffffff;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
                                <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->

                                    <table style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
                                        <tbody>
                                        <tr>
                                            <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;\" align=\"left\">

                                                <div>
                                                    <h1>Confirmer mon Email</h1>

                                                    <p>
                                                        Veuillez confirmer votre adresse e-mail en cliquant sur le lien suivant: <br><br>
                                                        <a href=\"";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["signedUrl"]) || array_key_exists("signedUrl", $context) ? $context["signedUrl"] : (function () { throw new RuntimeError('Variable "signedUrl" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "\">Confirmer mon Email</a>.
                                                        Ce lien expirera dans  ";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["expiresAtMessageKey"]) || array_key_exists("expiresAtMessageKey", $context) ? $context["expiresAtMessageKey"] : (function () { throw new RuntimeError('Variable "expiresAtMessageKey" does not exist.', 176, $this->source); })()), (isset($context["expiresAtMessageData"]) || array_key_exists("expiresAtMessageData", $context) ? $context["expiresAtMessageData"] : (function () { throw new RuntimeError('Variable "expiresAtMessageData" does not exist.', 176, $this->source); })()), "VerifyEmailBundle"), "html", null, true);
        echo ".
                                                    </p>
                                                </div>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                            </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                </div>
            </div>



            <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
                <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
                    <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
                        <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-color: transparent;\"><![endif]-->

                        <!--[if (mso)|(IE)]><td align=\"center\" width=\"600\" style=\"background-color: #191919;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
                        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;\">
                            <div style=\"background-color: #191919;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
                                <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->

                                    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                            </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                </div>
            </div>



            <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
                <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
                    <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
                        <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-color: transparent;\"><![endif]-->

                        <!--[if (mso)|(IE)]><td align=\"center\" width=\"600\" style=\"width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
                        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;\">
                            <div style=\"height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
                                <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->

                                    <table id=\"u_content_text_deprecated_3\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
                                        <tbody>
                                        <tr>
                                            <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:60px 80px 10px;font-family:'Open Sans',sans-serif;\" align=\"left\">

                                                <div style=\"line-height: 160%; text-align: center; word-wrap: break-word;\">
                                                    <p style=\"font-size: 14px; line-height: 160%;\">if you have any questions, please email us at <a rel=\"noopener\" href=\"https://www.unlayer.com\" target=\"_blank\">customer.success@unlayer.com</a> or visit our FAQS, you can also chat with a reel live human during our operating hours. They can answer questions about your account</p>
                                                </div>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <table style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
                                        <tbody>
                                        <tr>
                                            <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:20px 0px;font-family:'Open Sans',sans-serif;\" align=\"left\">

                                                <table height=\"0px\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%\">
                                                    <tbody>
                                                    <tr style=\"vertical-align: top\">
                                                        <td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%\">
                                                            <span>&#160;</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <table style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
                                        <tbody>
                                        <tr>
                                            <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;\" align=\"left\">

                                                <div align=\"center\">
                                                    <div style=\"display: table; max-width:187px;\">
                                                        <!--[if (mso)|(IE)]><table width=\"187\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"border-collapse:collapse;\" align=\"center\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:187px;\"><tr><![endif]-->


                                                        <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 15px;\" valign=\"top\"><![endif]-->
                                                        <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px\">
                                                            <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
                                                                    <a href=\"https://www.facebook.com/unlayer\" title=\"Facebook\" target=\"_blank\">
                                                                        <img src=\"https://cdn.tools.unlayer.com/social/icons/rounded/facebook.png\" alt=\"Facebook\" title=\"Facebook\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
                                                                    </a>
                                                                </td></tr>
                                                            </tbody></table>
                                                        <!--[if (mso)|(IE)]></td><![endif]-->

                                                        <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 15px;\" valign=\"top\"><![endif]-->
                                                        <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px\">
                                                            <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
                                                                    <a href=\"https://twitter.com/unlayerapp\" title=\"Twitter\" target=\"_blank\">
                                                                        <img src=\"https://cdn.tools.unlayer.com/social/icons/rounded/twitter.png\" alt=\"Twitter\" title=\"Twitter\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
                                                                    </a>
                                                                </td></tr>
                                                            </tbody></table>
                                                        <!--[if (mso)|(IE)]></td><![endif]-->

                                                        <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 15px;\" valign=\"top\"><![endif]-->
                                                        <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px\">
                                                            <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
                                                                    <a href=\"https://www.linkedin.com/company/unlayer/mycompany/\" title=\"LinkedIn\" target=\"_blank\">
                                                                        <img src=\"https://cdn.tools.unlayer.com/social/icons/rounded/linkedin.png\" alt=\"LinkedIn\" title=\"LinkedIn\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
                                                                    </a>
                                                                </td></tr>
                                                            </tbody></table>
                                                        <!--[if (mso)|(IE)]></td><![endif]-->

                                                        <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 0px;\" valign=\"top\"><![endif]-->
                                                        <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px\">
                                                            <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
                                                                    <a href=\"https://www.instagram.com/unlayer_official/\" title=\"Instagram\" target=\"_blank\">
                                                                        <img src=\"https://cdn.tools.unlayer.com/social/icons/rounded/instagram.png\" alt=\"Instagram\" title=\"Instagram\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
                                                                    </a>
                                                                </td></tr>
                                                            </tbody></table>
                                                        <!--[if (mso)|(IE)]></td><![endif]-->


                                                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <table id=\"u_content_menu_1\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
                                        <tbody>
                                        <tr>
                                            <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;\" align=\"left\">

                                                <div class=\"menu\" style=\"text-align:center\">
                                                    <!--[if (mso)|(IE)]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\"><tr><![endif]-->

                                                    <!--[if (mso)|(IE)]><td style=\"padding:5px 15px\"><![endif]-->

                                                    <a href=\"https://www.unlayer.com\" target=\"_self\" style=\"padding:5px 15px;display:inline-block;color:#000000;font-size:14px;text-decoration:none\"  class=\"v-padding\">
                                                        Home
                                                    </a>

                                                    <!--[if (mso)|(IE)]></td><![endif]-->

                                                    <!--[if (mso)|(IE)]><td style=\"padding:5px 15px\"><![endif]-->
                                                    <span style=\"padding:5px 15px;display:inline-block;color:#000000;font-size:14px;\" class=\"v-padding hide-mobile\">
      |
    </span>
                                                    <!--[if (mso)|(IE)]></td><![endif]-->


                                                    <!--[if (mso)|(IE)]><td style=\"padding:5px 15px\"><![endif]-->

                                                    <a href=\"https://www.unlayer.com\" target=\"_self\" style=\"padding:5px 15px;display:inline-block;color:#000000;font-size:14px;text-decoration:none\"  class=\"v-padding\">
                                                        Page
                                                    </a>

                                                    <!--[if (mso)|(IE)]></td><![endif]-->

                                                    <!--[if (mso)|(IE)]><td style=\"padding:5px 15px\"><![endif]-->
                                                    <span style=\"padding:5px 15px;display:inline-block;color:#000000;font-size:14px;\" class=\"v-padding hide-mobile\">
      |
    </span>
                                                    <!--[if (mso)|(IE)]></td><![endif]-->


                                                    <!--[if (mso)|(IE)]><td style=\"padding:5px 15px\"><![endif]-->

                                                    <a href=\"https://www.unlayer.com\" target=\"_self\" style=\"padding:5px 15px;display:inline-block;color:#000000;font-size:14px;text-decoration:none\"  class=\"v-padding\">
                                                        About Us
                                                    </a>

                                                    <!--[if (mso)|(IE)]></td><![endif]-->

                                                    <!--[if (mso)|(IE)]><td style=\"padding:5px 15px\"><![endif]-->
                                                    <span style=\"padding:5px 15px;display:inline-block;color:#000000;font-size:14px;\" class=\"v-padding hide-mobile\">
      |
    </span>
                                                    <!--[if (mso)|(IE)]></td><![endif]-->


                                                    <!--[if (mso)|(IE)]><td style=\"padding:5px 15px\"><![endif]-->

                                                    <a href=\"https://www.unlayer.com\" target=\"_self\" style=\"padding:5px 15px;display:inline-block;color:#000000;font-size:14px;text-decoration:none\"  class=\"v-padding\">
                                                        Contact US
                                                    </a>

                                                    <!--[if (mso)|(IE)]></td><![endif]-->


                                                    <!--[if (mso)|(IE)]></tr></table><![endif]-->
                                                </div>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <table id=\"u_content_text_deprecated_4\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
                                        <tbody>
                                        <tr>
                                            <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px 10px 60px;font-family:'Open Sans',sans-serif;\" align=\"left\">

                                                <div style=\"line-height: 160%; text-align: center; word-wrap: break-word;\">
                                                    <p style=\"font-size: 14px; line-height: 160%;\">you have received this email as a registered user of <a rel=\"noopener\" href=\"https://www.unlayer.com\" target=\"_blank\">unlayer.com</a></p>
                                                    <p style=\"font-size: 14px; line-height: 160%;\">can <a rel=\"noopener\" href=\"https://www.unlayer.com\" target=\"_blank\">unsubscribe</a> from these emails here.</p>
                                                    <p style=\"font-size: 14px; line-height: 160%;\"> </p>
                                                    <p style=\"font-size: 14px; line-height: 160%;\">2261 Market Street #4667 San Francisco, CA 94114 All rights reserved</p>
                                                </div>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                            </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                </div>
            </div>


            <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
        </td>
    </tr>
    </tbody>
</table>
<!--[if mso]></div><![endif]-->
<!--[if IE]></div><![endif]-->
</body>

</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/confirmation_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 176,  219 => 175,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional //EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" lang=\"fr\">
<head>
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"x-apple-disable-message-reformatting\">
    <!--[if !mso]><!--><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><!--<![endif]-->
    <title></title>

    <style type=\"text/css\">
        @media only screen and (min-width: 620px) {
            .u-row {
                width: 600px !important;
            }
            .u-row .u-col {
                vertical-align: top;
            }

            .u-row .u-col-100 {
                width: 600px !important;
            }

        }

        @media (max-width: 620px) {
            .u-row-container {
                max-width: 100% !important;
                padding-left: 0px !important;
                padding-right: 0px !important;
            }
            .u-row .u-col {
                min-width: 320px !important;
                max-width: 100% !important;
                display: block !important;
            }
            .u-row {
                width: 100% !important;
            }
            .u-col {
                width: 100% !important;
            }
            .u-col > div {
                margin: 0 auto;
            }
        }
        body {
            margin: 0;
            padding: 0;
        }

        table,
        tr,
        td {
            vertical-align: top;
            border-collapse: collapse;
        }

        p {
            margin: 0;
        }

        .ie-container table,
        .mso-container table {
            table-layout: fixed;
        }

        * {
            line-height: inherit;
        }

        a[x-apple-data-detectors='true'] {
            color: inherit !important;
            text-decoration: none !important;
        }

        @media (max-width: 480px) {
            .hide-mobile {
                max-height: 0px;
                overflow: hidden;
                display: none !important;
            }
        }

        table, td { color: #000000; } #u_body a { color: #0000ee; text-decoration: underline; } @media (max-width: 480px) { #u_content_image_4 .v-container-padding-padding { padding: 21px !important; } #u_content_image_4 .v-src-width { width: auto !important; } #u_content_image_4 .v-src-max-width { max-width: 42% !important; } #u_content_text_deprecated_3 .v-container-padding-padding { padding: 40px 10px 10px !important; } #u_content_menu_1 .v-padding { padding: 5px 10px !important; } #u_content_text_deprecated_4 .v-container-padding-padding { padding: 10px 10px 40px !important; } }
    </style>



    <!--[if !mso]><!--><link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\" type=\"text/css\"><!--<![endif]-->

</head>

<body class=\"clean-body u_body\" style=\"margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #ffffff;color: #000000\">
<!--[if IE]><div class=\"ie-container\"><![endif]-->
<!--[if mso]><div class=\"mso-container\"><![endif]-->
<table id=\"u_body\" style=\"border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #ffffff;width:100%\" cellpadding=\"0\" cellspacing=\"0\">
    <tbody>
    <tr style=\"vertical-align: top\">
        <td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
            <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td align=\"center\" style=\"background-color: #ffffff;\"><![endif]-->


            <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
                <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
                    <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
                        <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-color: transparent;\"><![endif]-->

                        <!--[if (mso)|(IE)]><td align=\"center\" width=\"600\" style=\"width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\" valign=\"top\"><![endif]-->
                        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;\">
                            <div style=\"height: 100%;width: 100% !important;\">
                                <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\"><!--<![endif]-->

                                    <table id=\"u_content_image_4\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
                                        <tbody>
                                        <tr>
                                            <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;\" align=\"left\">

                                                <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                                    <tr>
                                                        <td style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\">

                                                            <img align=\"center\" border=\"0\" src=\"https://assets.unlayer.com/projects/160474/1684177060193-logo_snowTricks.png\" alt=\"\" title=\"\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 300px;\" width=\"300\" class=\"v-src-width v-src-max-width\"/>

                                                        </td>
                                                    </tr>
                                                </table>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                            </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                </div>
            </div>



            <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
                <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
                    <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
                        <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-color: transparent;\"><![endif]-->

                        <!--[if (mso)|(IE)]>
                        <td align=\"center\" width=\"600\"
                            style=\"background-color: #ffffff;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"
                            valign=\"top\"><![endif]-->
                        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;\">
                            <div style=\"background-color: #ffffff;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
                                <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->

                                    <table style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
                                        <tbody>
                                        <tr>
                                            <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;\" align=\"left\">

                                                <div>
                                                    <h1>Confirmer mon Email</h1>

                                                    <p>
                                                        Veuillez confirmer votre adresse e-mail en cliquant sur le lien suivant: <br><br>
                                                        <a href=\"{{ signedUrl }}\">Confirmer mon Email</a>.
                                                        Ce lien expirera dans  {{ expiresAtMessageKey|trans(expiresAtMessageData, 'VerifyEmailBundle') }}.
                                                    </p>
                                                </div>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                            </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                </div>
            </div>



            <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
                <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
                    <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
                        <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-color: transparent;\"><![endif]-->

                        <!--[if (mso)|(IE)]><td align=\"center\" width=\"600\" style=\"background-color: #191919;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
                        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;\">
                            <div style=\"background-color: #191919;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
                                <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->

                                    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                            </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                </div>
            </div>



            <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
                <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
                    <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
                        <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-color: transparent;\"><![endif]-->

                        <!--[if (mso)|(IE)]><td align=\"center\" width=\"600\" style=\"width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
                        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;\">
                            <div style=\"height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
                                <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->

                                    <table id=\"u_content_text_deprecated_3\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
                                        <tbody>
                                        <tr>
                                            <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:60px 80px 10px;font-family:'Open Sans',sans-serif;\" align=\"left\">

                                                <div style=\"line-height: 160%; text-align: center; word-wrap: break-word;\">
                                                    <p style=\"font-size: 14px; line-height: 160%;\">if you have any questions, please email us at <a rel=\"noopener\" href=\"https://www.unlayer.com\" target=\"_blank\">customer.success@unlayer.com</a> or visit our FAQS, you can also chat with a reel live human during our operating hours. They can answer questions about your account</p>
                                                </div>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <table style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
                                        <tbody>
                                        <tr>
                                            <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:20px 0px;font-family:'Open Sans',sans-serif;\" align=\"left\">

                                                <table height=\"0px\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%\">
                                                    <tbody>
                                                    <tr style=\"vertical-align: top\">
                                                        <td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%\">
                                                            <span>&#160;</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <table style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
                                        <tbody>
                                        <tr>
                                            <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;\" align=\"left\">

                                                <div align=\"center\">
                                                    <div style=\"display: table; max-width:187px;\">
                                                        <!--[if (mso)|(IE)]><table width=\"187\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"border-collapse:collapse;\" align=\"center\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:187px;\"><tr><![endif]-->


                                                        <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 15px;\" valign=\"top\"><![endif]-->
                                                        <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px\">
                                                            <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
                                                                    <a href=\"https://www.facebook.com/unlayer\" title=\"Facebook\" target=\"_blank\">
                                                                        <img src=\"https://cdn.tools.unlayer.com/social/icons/rounded/facebook.png\" alt=\"Facebook\" title=\"Facebook\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
                                                                    </a>
                                                                </td></tr>
                                                            </tbody></table>
                                                        <!--[if (mso)|(IE)]></td><![endif]-->

                                                        <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 15px;\" valign=\"top\"><![endif]-->
                                                        <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px\">
                                                            <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
                                                                    <a href=\"https://twitter.com/unlayerapp\" title=\"Twitter\" target=\"_blank\">
                                                                        <img src=\"https://cdn.tools.unlayer.com/social/icons/rounded/twitter.png\" alt=\"Twitter\" title=\"Twitter\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
                                                                    </a>
                                                                </td></tr>
                                                            </tbody></table>
                                                        <!--[if (mso)|(IE)]></td><![endif]-->

                                                        <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 15px;\" valign=\"top\"><![endif]-->
                                                        <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px\">
                                                            <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
                                                                    <a href=\"https://www.linkedin.com/company/unlayer/mycompany/\" title=\"LinkedIn\" target=\"_blank\">
                                                                        <img src=\"https://cdn.tools.unlayer.com/social/icons/rounded/linkedin.png\" alt=\"LinkedIn\" title=\"LinkedIn\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
                                                                    </a>
                                                                </td></tr>
                                                            </tbody></table>
                                                        <!--[if (mso)|(IE)]></td><![endif]-->

                                                        <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 0px;\" valign=\"top\"><![endif]-->
                                                        <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px\">
                                                            <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
                                                                    <a href=\"https://www.instagram.com/unlayer_official/\" title=\"Instagram\" target=\"_blank\">
                                                                        <img src=\"https://cdn.tools.unlayer.com/social/icons/rounded/instagram.png\" alt=\"Instagram\" title=\"Instagram\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
                                                                    </a>
                                                                </td></tr>
                                                            </tbody></table>
                                                        <!--[if (mso)|(IE)]></td><![endif]-->


                                                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <table id=\"u_content_menu_1\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
                                        <tbody>
                                        <tr>
                                            <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;\" align=\"left\">

                                                <div class=\"menu\" style=\"text-align:center\">
                                                    <!--[if (mso)|(IE)]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\"><tr><![endif]-->

                                                    <!--[if (mso)|(IE)]><td style=\"padding:5px 15px\"><![endif]-->

                                                    <a href=\"https://www.unlayer.com\" target=\"_self\" style=\"padding:5px 15px;display:inline-block;color:#000000;font-size:14px;text-decoration:none\"  class=\"v-padding\">
                                                        Home
                                                    </a>

                                                    <!--[if (mso)|(IE)]></td><![endif]-->

                                                    <!--[if (mso)|(IE)]><td style=\"padding:5px 15px\"><![endif]-->
                                                    <span style=\"padding:5px 15px;display:inline-block;color:#000000;font-size:14px;\" class=\"v-padding hide-mobile\">
      |
    </span>
                                                    <!--[if (mso)|(IE)]></td><![endif]-->


                                                    <!--[if (mso)|(IE)]><td style=\"padding:5px 15px\"><![endif]-->

                                                    <a href=\"https://www.unlayer.com\" target=\"_self\" style=\"padding:5px 15px;display:inline-block;color:#000000;font-size:14px;text-decoration:none\"  class=\"v-padding\">
                                                        Page
                                                    </a>

                                                    <!--[if (mso)|(IE)]></td><![endif]-->

                                                    <!--[if (mso)|(IE)]><td style=\"padding:5px 15px\"><![endif]-->
                                                    <span style=\"padding:5px 15px;display:inline-block;color:#000000;font-size:14px;\" class=\"v-padding hide-mobile\">
      |
    </span>
                                                    <!--[if (mso)|(IE)]></td><![endif]-->


                                                    <!--[if (mso)|(IE)]><td style=\"padding:5px 15px\"><![endif]-->

                                                    <a href=\"https://www.unlayer.com\" target=\"_self\" style=\"padding:5px 15px;display:inline-block;color:#000000;font-size:14px;text-decoration:none\"  class=\"v-padding\">
                                                        About Us
                                                    </a>

                                                    <!--[if (mso)|(IE)]></td><![endif]-->

                                                    <!--[if (mso)|(IE)]><td style=\"padding:5px 15px\"><![endif]-->
                                                    <span style=\"padding:5px 15px;display:inline-block;color:#000000;font-size:14px;\" class=\"v-padding hide-mobile\">
      |
    </span>
                                                    <!--[if (mso)|(IE)]></td><![endif]-->


                                                    <!--[if (mso)|(IE)]><td style=\"padding:5px 15px\"><![endif]-->

                                                    <a href=\"https://www.unlayer.com\" target=\"_self\" style=\"padding:5px 15px;display:inline-block;color:#000000;font-size:14px;text-decoration:none\"  class=\"v-padding\">
                                                        Contact US
                                                    </a>

                                                    <!--[if (mso)|(IE)]></td><![endif]-->


                                                    <!--[if (mso)|(IE)]></tr></table><![endif]-->
                                                </div>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <table id=\"u_content_text_deprecated_4\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
                                        <tbody>
                                        <tr>
                                            <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px 10px 60px;font-family:'Open Sans',sans-serif;\" align=\"left\">

                                                <div style=\"line-height: 160%; text-align: center; word-wrap: break-word;\">
                                                    <p style=\"font-size: 14px; line-height: 160%;\">you have received this email as a registered user of <a rel=\"noopener\" href=\"https://www.unlayer.com\" target=\"_blank\">unlayer.com</a></p>
                                                    <p style=\"font-size: 14px; line-height: 160%;\">can <a rel=\"noopener\" href=\"https://www.unlayer.com\" target=\"_blank\">unsubscribe</a> from these emails here.</p>
                                                    <p style=\"font-size: 14px; line-height: 160%;\"> </p>
                                                    <p style=\"font-size: 14px; line-height: 160%;\">2261 Market Street #4667 San Francisco, CA 94114 All rights reserved</p>
                                                </div>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                            </div>
                        </div>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                </div>
            </div>


            <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
        </td>
    </tr>
    </tbody>
</table>
<!--[if mso]></div><![endif]-->
<!--[if IE]></div><![endif]-->
</body>

</html>


", "registration/confirmation_email.html.twig", "C:\\wamp64\\www\\SnowTricks\\templates\\registration\\confirmation_email.html.twig");
    }
}
