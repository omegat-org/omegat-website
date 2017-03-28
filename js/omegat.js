/*jshint bitwise:true, browser:true, camelcase:true, curly:true, devel:false, eqeqeq:false, forin:true, immed:true, indent:4, newcap:true, noarg:true, noempty:true, nonew:true, jquery:true, quotmark:true, regexp:false, strict:true, trailing:true, undef:true, unused:true */
$(document).ready(function () {
    'use strict';
    //var siteLang = $('html').attr('lang');

    // TODO Show a language selection modal dialog if it's the first time visiting the site.
    //$('#modalLanguageSelector').modal();

    // Popover on download table
    $('[rel=popover][data-platform]').popover({
        html: true,
        placement: 'bottom',
        content: function () {
            var popoverId = '#popover_content_' + $(this).data('platform');
            console.log(popoverId);
            return $(popoverId).html();
        }
    });

    // Download Selector Wizard
    $('#download-wizard').bootstrapWizard({
        onInit: function () {
            if (navigator && navigator.platform) {
                var platform = navigator.platform;

                if (platform.match(/^Win/i)) {
                    $('#optWindows').prop('checked', true);
                } else if (platform.match(/^Linux/i)) {
                    $('#optLinux').prop('checked', true);
                } else if (platform.match(/^Mac/i)) {
                    $('#optOsx').prop('checked', true);
                }
            }
        },
        //onTabClick: function (tab, navigation, index) {
        onTabClick: function () {
            return false;
        },
        onNext: function (tab, navigation, index) {
            var type = $('input[name=optType]:checked').val();
            var os = $('input[name=optOS]:checked').val();
            var jre = $('input[name=optJRE]:checked').val();
            var version = $('input[name=optVersion]:checked').val();
            if (index == 1) {
                // If Web Start is selected, jump to the Latest/Standard tab
                if (type == 'webstart') {
                    $('#download-wizard').bootstrapWizard('show', 4);
                    return false;
                }
            }
            if (index == 2) {
                // If OS X is selected, jump to the Latest/Standard tab
                if (os == 'osx') {
                    $('#download-wizard').bootstrapWizard('show', 4);
                    return false;
                }
            } else if (index == 4) {
                var result = [version, os, jre].join('_');
                if (type == 'webstart') {
                    result = [version, type].join('_');
                } else if (os == 'osx') {
                    result = [version, os, 'signed'].join('_');
                }

                //console.log(result);

                var btnLink = $('.version-download', $('#' + result)).attr('href') || '#';

                var resultName = [$('#' + version).text(), $('.version-name', $('#' + result)).text()].join(' - ');

                $('#wizard-result').html(resultName);
                $('#wizard-result').attr('href', '#' + result);
                $('#wizard-result-btn').attr('href', btnLink);
            }
        }
    });

    $('.nextEnable').removeClass('disabled');
});
