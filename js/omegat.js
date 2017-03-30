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
            //console.log(popoverId);
            return $(popoverId).html();
        }
    });

     var quoteCarousel = $('#quote-carousel');
     if (quoteCarousel.length) {
             quoteCarousel.carousel({ pause: true, interval: 4000, });
     }

    // Download Selector Wizard
    var downloadWizard = $('#download-wizard');
    if (downloadWizard.length) {

        // Default platform selection
        //if (navigator && navigator.platform) {
        //    var platform = navigator.platform;

        //    if (platform.match(/^Win/i)) {
        //        $('#optWindows').prop('checked', true);
        //    } else if (platform.match(/^Linux/i)) {
        //        $('#optLinux').prop('checked', true);
        //    } else if (platform.match(/^Mac/i)) {
        //        $('#optOsx').prop('checked', true);
        //    }
        //}

        var showTab = function (tabName) {
            $('#download-wizard a[href="#tab-' + tabName + '"]').tab('show');
        };

        // Reset radio buttons when one of the pill is clicked.
        $('#download-wizard a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            var target = $(e.target).attr('href');
            $(target + ' input').attr('checked', false);
        });

        showTab('install-type');

        // Automatically move to the next question
        $('.radio', downloadWizard).change(function () {
            var sel = {
                type: $('input[name=optType]:checked').val(),
                os: $('input[name=optOS]:checked').val(),
                jre: $('input[name=optJRE]:checked').val(),
                version: $('input[name=optVersion]:checked').val(),
            };

            //console.log(sel);

            var currentTab = '';
            try {
                currentTab = $(this).parent().attr('id').replace(/^tab-/, '');
                navigateWizard(currentTab, sel);
                findBestVersion(sel);
            } catch (e) {
                //console.log(e);
                //console.log(this);
            }

        });

        var navigateWizard = function (currentTab, sel) {
            if (currentTab == 'install-type') {
                showTab('version');
            } else if (currentTab == ('version')) {
                if (sel.type != 'webstart') {
                    showTab('operating-system');
                }
            } else if (currentTab == 'operating-system') {
                if (sel.os == 'windows') {
                    $('.with-windows-jre').show();
                    $('.with-linux-jre').hide();
                } else {
                    $('.with-windows-jre').hide();
                    $('.with-linux-jre').show();
                }
                if (sel.os == 'linux' || sel.os == 'windows') {
                    // No 64bits in Standard versions
                    if (sel.version == 'standard') {
                        $('.jre32').show();
                        $('.jre64').hide();
                        $('.jrelatest').show();
                    } else {
                        $('.jre32').hide();
                        $('.jre64').show();
                        $('.jrelatest').hide();
                    }
                    showTab('jre');
                }
            }
        };

        var findBestVersion = function (sel) {
            //var state = downloadWizard.data('state');

            var type = sel.type;
            var os = sel.os;
            var jre = sel.jre;
            var version = sel.version;

            if (os == 'other') {
                os = 'linux';
                jre = 'nojre';
            }

            var result = [version, os, jre].join('_');
            if (type == 'webstart') {
                result = [version, type].join('_');
            } else if (os == 'osx') {
                result = [version, os, 'signed'].join('_');
            }

            console.log('best version: ' + result);

            if ($('#' + result).length) {
                $('#wizard-result').show();
            } else {
                $('#wizard-result').hide();
            }

            var btnLink = $('.version-download', $('#' + result)).attr('href') || '#';

            var resultName = [$('#' + version).text(), $('.version-name', $('#' + result)).text()].join(' - ');

            $('#wizard-result-version').html(resultName);
            $('#wizard-result-version').attr('href', '#' + result);
            $('#wizard-result-btn').attr('href', btnLink);

            // OS X Signed / Unsigned
            if (os == 'osx') {
                debugger;
                var unsignedHref = $('a', '#' + result.replace(/_signed$/, '_unsigned')).attr('href');
                $('#wizard-result-unsigned').attr('href', unsignedHref);
                $('#wizard-result-osx').show();
            }
            else {
                $('#wizard-result-osx').hide();
            }

        };

        // if we came on this page with the #selector anchor, open the selector at the beginning
        if (window.location.hash == '#selector') {
            $('#download-wizard').collapse();
        }
    }

});
