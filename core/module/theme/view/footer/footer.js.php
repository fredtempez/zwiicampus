/**
 * This file is part of Zwii.
 *
 * For full copyright and license information, please see the LICENSE
 * file that was distributed with this source code.
 *
 * @author Rémi Jean <remi.jean@outlook.com>
 * @copyright Copyright (C) 2008-2018, Rémi Jean
 * @license CC Attribution-NonCommercial-NoDerivatives 4.0 International
 * @author Frédéric Tempez <frederic.tempez@outlook.com>
 * @copyright Copyright (C) 2018-2025, Frédéric Tempez
 * @link http://zwiicms.fr/
 */
$("input, select").on("change", (function() {
    var e = $("#themeFooterFont :selected").val(),
        o = $("#themeFooterFont :selected").text(),
        t = "@import url('https://fonts.cdnfonts.com/css/" + e + "');",
        i = core.colorVariants($("#themeFooterBackgroundColor").val()),
        r = $("#themeFooterTextColor").val();
    t = "footer {background-color:" + i.normal + ";color:" + r + "}";
    switch (t += "footer a{color:" + r + "}", t += ".editorWysiwyg{background-color:" + i.normal + " !important; color:" + r + " !important;}", t += "footer #footersite > div{margin:" + $("#themeFooterHeight").val() + " 0}", t += "footer #footerbody > div{margin:" + $("#themeFooterHeight").val() + " 0}", t += "#footerSocials{text-align:" + $("#themeFooterSocialsAlign").val() + "}", t += "#footerText > p {text-align:" + $("#themeFooterTextAlign").val() + "}", t += "#footerCopyright{text-align:" + $("#themeFooterCopyrightAlign").val() + "}", t += "footer span, #footerText > p {color:" + $("#themeFooterTextColor").val() + ";font-family:'" + o + "',sans-serif;font-weight:" + $("#themeFooterFontWeight").val() + ";font-size:" + $("#themeFooterFontSize").val() + ";text-transform:" + $("#themeFooterTextTransform").val() + "}", $("#themeFooterMargin").is(":checked") ? t += "footer{padding: 0 20px;}" : t += "footer{padding:0}", $("#themePreview").remove(), $("<style>").attr("type", "text/css").attr("id", "themePreview").text(t).appendTo("footer"), $("#themeFooterPosition").val()) {
        case "hide":
            $("footer").hide();
            break;
        case "site":
            $("footer").show().appendTo("#site"), $("footer > div:first-child").removeAttr("class"), $("footer > div:first-child").addClass("container");
            break;
        case "body":
            $("footer").show().appendTo("body"), $("footer > div:first-child").removeAttr("class"), $("footer > div:first-child").addClass("container-large");
            break
    }
    $("#footerText > p").css("margin-top", "0"), $("#footerText > p").css("margin-bottom", "0")
})), $(".themeFooterContent").on("change", (function() {
    var e = $("#themeFooterPosition").val();
    switch ($("#themeFooterTextPosition").val()) {
        case "hide":
            $("#footerText").hide();
            break;
        default:
            textPosition = $("#themeFooterTextPosition").val(), textPosition = textPosition.substr(0, 1).toUpperCase() + textPosition.substr(1), $("#footerText").show().appendTo("#footer" + e + textPosition);
            break
    }
    switch ($("#themeFooterSocialsPosition").val()) {
        case "hide":
            $("#footerSocials").hide();
            break;
        default:
            socialsPosition = $("#themeFooterSocialsPosition").val(), socialsPosition = socialsPosition.substr(0, 1).toUpperCase() + socialsPosition.substr(1), $("#footerSocials").show().appendTo("#footer" + e + socialsPosition);
            break
    }
    switch ($("#themeFooterCopyrightPosition").val()) {
        case "hide":
            $("#footerCopyright").hide();
            break;
        default:
            copyrightPosition = $("#themeFooterCopyrightPosition").val(), copyrightPosition = copyrightPosition.substr(0, 1).toUpperCase() + copyrightPosition.substr(1), $("#footerCopyright").show().appendTo("#footer" + e + copyrightPosition);
            break
    }
})).trigger("change"), $("#themeFooterTemplate").on("change", (function() {
    var e = $(".themeFooterContent");
    e.empty(), $.each({
        4: {
            hide: "Masqué",
            left: "En haut",
            center: "Au milieu",
            right: "En bas"
        },
        3: {
            hide: "Masqué",
            left: "A gauche",
            center: "Au centre",
            right: "A droite"
        },
        2: {
            hide: "Masqué",
            left: "A gauche",
            right: "A droite"
        },
        1: {
            hide: "Masqué",
            center: "Affiché"
        }
    } [$("#themeFooterTemplate").val()], (function(o, t) {
        e.append($("<option></option>").attr("value", o).text(t))
    }));
    var o = $("#themeFooterPosition").val();
    switch ($("#footerCopyright").hide(), $("#footerText").hide(), $("#footerSocials").hide(), $("#themeFooterTemplate").val()) {
        case "1":
            $("#footer" + o + "Left").css("display", "none"), $("#footer" + o + "Center").removeAttr("class").addClass("col12").css("display", ""), $("#footer" + o + "Right").css("display", "none");
            break;
        case "2":
            $("#footer" + o + "Left").removeAttr("class").addClass("col6").css("display", ""), $("#footer" + o + "Center").css("display", "none").removeAttr("class"), $("#footer" + o + "Right").removeAttr("class").addClass("col6").css("display", "");
            break;
        case "3":
            $("#footer" + o + "Left").removeAttr("class").addClass("col4").css("display", ""), $("#footer" + o + "Center").removeAttr("class").addClass("col4").css("display", ""), $("#footer" + o + "Right").removeAttr("class").addClass("col4").css("display", "");
            break;
        case "4":
            $("#footer" + o + "Left").removeAttr("class").addClass("col12").css("display", ""), $("#footer" + o + "Center").removeAttr("class").addClass("col12").css("display", ""), $("#footer" + o + "Right").removeAttr("class").addClass("col12").css("display", "");
            break
    }
})), $("#themeFooterSocialsPosition").on("change", (function() {
    $(this).prop("selectedIndex") >= 1 && ($("#themeFooterTextPosition").prop("selectedIndex") === $(this).prop("selectedIndex") && ($("#themeFooterTextPosition").prop("selectedIndex", 0), $("#footerText").hide()), $("#themeFooterCopyrightPosition").prop("selectedIndex") === $(this).prop("selectedIndex") && ($("#themeFooterCopyrightPosition").prop("selectedIndex", 0), $("#footerCopyright").hide()))
})).trigger("change"), $("#themeFooterTextPosition").on("change", (function() {
    $(this).prop("selectedIndex") >= 1 && ($("#themeFooterSocialsPosition").prop("selectedIndex") === $(this).prop("selectedIndex") && ($("#themeFooterSocialsPosition").prop("selectedIndex", 0), $("#footerSocials").hide()), $("#themeFooterCopyrightPosition").prop("selectedIndex") === $(this).prop("selectedIndex") && ($("#themeFooterCopyrightPosition").prop("selectedIndex", 0), $("#footerCopyright").hide()))
})).trigger("change"), $("#themeFooterCopyrightPosition").on("change", (function() {
    $(this).prop("selectedIndex") >= 1 && ($("#themeFooterTextPosition").prop("selectedIndex") === $(this).prop("selectedIndex") && ($("#themeFooterTextPosition").prop("selectedIndex", 0), $("#footerText").hide()), $("#themeFooterSocialsPosition").prop("selectedIndex") === $(this).prop("selectedIndex") && ($("#themeFooterSocialsPosition").prop("selectedIndex", 0), $("#footerSocials").hide()))
})).trigger("change"), $("#themeFooterPosition").on("change", (function() {
    "body" === $(this).val() ? $("#themeFooterPositionFixed").slideDown() : $("#themeFooterPositionFixed").slideUp((function() {
        $("#themeFooterFixed").prop("checked", !1).trigger("change")
    }))
})).trigger("change"), $("#themeFooterLoginLink").on("change", (function() {
    $(this).is(":checked") ? $("#footerLoginLink").show() : $("#footerLoginLink").hide()
})).trigger("change"), $("#themefooterDisplayVersion").on("change", (function() {
    $(this).is(":checked") ? $("#footerDisplayVersion").show() : $("#footerDisplayVersion").hide()
})).trigger("change"), $("#themefooterDisplayCopyright").on("change", (function() {
    $(this).is(":checked") ? $("#footerDisplayCopyright").show() : $("#footerDisplayCopyright").hide()
})).trigger("change"), $("#themefooterDisplaySiteMap").on("change", (function() {
    $(this).is(":checked") ? $("#footerDisplaySiteMap").show() : $("#footerDisplaySiteMap").hide()
})).trigger("change"), $("#themeFooterDisplaySearch").on("change", (function() {
    $(this).is(":checked") ? $("#footerDisplaySearch").show() : $("#footerDisplaySearch").hide()
})).trigger("change"), $("#themeFooterDisplayLegal").on("change", (function() {
    $(this).is(":checked") ? $("#footerDisplayLegal").show() : $("#footerDisplayLegal").hide()
})).trigger("change"), $("#configLegalPageId").on("change", (function() {
    0 === $("#configLegalPageId option:selected").index() ? ($("#themeFooterDisplayLegal").prop("checked", !1), $("#themeFooterDisplayLegal").prop("disabled", !0), $("#footerDisplayLegal").hide()) : $("#themeFooterDisplayLegal").prop("disabled", !1)
})).trigger("change"), $("#configSearchPageId").on("change", (function() {
    0 === $("#configSearchPageId option:selected").index() ? ($("#themeFooterDisplaySearch").prop("checked", !1), $("#themeFooterDisplaySearch").prop("disabled", !0), $("#footerDisplaySearch").hide()) : $("#themeFooterDisplaySearch").prop("disabled", !1)
})).trigger("change");