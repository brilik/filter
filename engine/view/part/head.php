<!DOCTYPE html>
<html lang="en">

<head>
    <meta <?php bloginfo('charset'); ?> />
    <title>Home page</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/style.min.css?1571232338518" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/assets/img/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/assets/img/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/assets/img/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?= get_template_directory_uri(); ?>/assets/img/favicons/site.webmanifest" />
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/assets/img/favicons/favicon.ico" />
    <meta name="msapplication-TileColor" content="#ffc40d" />
    <meta name="msapplication-config" content="<?= get_template_directory_uri(); ?>/assets/img/favicons/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" />
    <?php wp_head(); ?>
    <script>
        /** For wordpres start */
        function pushParam(e, type){
            // document.location.href = document.location.href + type+"="+e.value;
            var url = document.location.href;
            var param = document.location.search;

            if(document.location.search.search(type.toString()) !== -1){
                var newType = getUrlParameter(type);
                console.log(newType);
                param = param.replace(newType, newType + ',' + e.value);
            }
            
            console.log(param);
        }

        function updateURL(e, type) {
            if (history.pushState) {
                var baseUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
                var url = document.querySelector('#айдишникПоля').value + 'кодированный прибавка';
                var newUrl = baseUrl + '?' + type + '=' + e.value;

                history.pushState(null, null, newUrl);
                return newUrl;
            }
            else {
                console.warn('History API не поддерживается');
            }
        }

        function getUrlParameter(sParam) {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        };
        /** for wordpres eof */
    </script>
</head>

<body <?php body_class('page page--home'); ?>>