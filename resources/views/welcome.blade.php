<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

    <meta name="application-name" content="Filament" />
    <meta name="csrf-token" content="30vGLjaEDZNzJ1GNXPfT9b8ICMqV8qeO7aCvpIKx" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>SRPS - Study Program Repository System
    </title>


    <meta property="og:title" content="SRPS - Study Program Repository System" />

    <meta property="og:description" content="SRPS - Study Program Repository System" />
    <meta name="description" content="SRPS - Study Program Repository System" />


    <meta property="og:type" content="website" />

    <meta property="og:site_name" content="SRPS" />

    <meta property="og:image" content="https://filamentphp.com/images/og.jpg" />


    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="filamentphp" />
    <meta name="twitter:title" content="SRPS - Study Program Repository System" />
    <meta name="twitter:description" content="SRPS - Study Program Repository System" />
    <meta name="twitter:image" content="https://filamentphp.com/images/og.jpg" />

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png?v=w1dBNxT7Wg" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png?v=w1dBNxT7Wg" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png?v=w1dBNxT7Wg" />
    <link rel="manifest" href="/favicon/site.webmanifest?v=w1dBNxT7Wg" />
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg?v=w1dBNxT7Wg" color="#fdae4b" />
    <link rel="shortcut icon" href="/favicon/favicon.ico?v=w1dBNxT7Wg" />
    <meta name="msapplication-TileColor" content="#ffc40d" />
    <meta name="msapplication-config" content="/favicon/browserconfig.xml?v=w1dBNxT7Wg" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Fonts -->
    <style>
        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvlstaylfyeg-idwvojmves-hwyprsibzgmwbygaxxn.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvlstaylfyeg-idwvojmves-hwyprsibjgmwbygaxxn.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvlstaylfyeg-idwvojmves-hwyprsiypgmwbygaq.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 200;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypbczdbaddzsqyur0jg.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 200;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypbczdbeddzsqyur0jg.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 200;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypbczdb8ddzsqyuq.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypdmwdbaddzsqyur0jg.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypdmwdbeddzsqyur0jg.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypdmwdb8ddzsqyuq.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvnstaylfyeg-idwvojmves-hwynxcsyjiheh6qaa.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvnstaylfyeg-idwvojmves-hwynxysyjiheh6qaa.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvnstaylfyeg-idwvojmves-hwynxgsyjiheh4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypysxdbaddzsqyur0jg.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypysxdbeddzsqyur0jg.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypysxdb8ddzsqyuq.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 600;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypac2dbaddzsqyur0jg.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 600;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypac2dbeddzsqyur0jg.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 600;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypac2db8ddzsqyuq.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypcm3dbaddzsqyur0jg.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypcm3dbeddzsqyur0jg.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypcm3db8ddzsqyuq.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 800;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypd80dbaddzsqyur0jg.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 800;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypd80dbeddzsqyur0jg.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 800;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypd80db8ddzsqyuq.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypfs1dbaddzsqyur0jg.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypfs1dbeddzsqyur0jg.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvkstaylfyeg-idwvojmves-hwypfs1db8ddzsqyuq.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvnstaylfyeg-idwvojmves-hrunxcsyjiheh6qaa.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvnstaylfyeg-idwvojmves-hrunxysyjiheh6qaa.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvnstaylfyeg-idwvojmves-hrunxgsyjiheh4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-ht4jg86rb0jcbaouuu.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-ht4jg87rb0jcbaouuu.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-ht4jg81rb0jcbao.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-hscj286rb0jcbaouuu.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-hscj287rb0jcbaouuu.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-hscj281rb0jcbao.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvpstaylfyeg-idwvojmves-hw4bxoyz7ajsh8.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvpstaylfyeg-idwvojmves-hw5bxoyz7ajsh8.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvpstaylfyeg-idwvojmves-hw3bxoyz7aj.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-htejm86rb0jcbaouuu.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-htejm87rb0jcbaouuu.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-htejm81rb0jcbao.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-htoiw86rb0jcbaouuu.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-htoiw87rb0jcbaouuu.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-htoiw81rb0jcbao.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-hsmig86rb0jcbaouuu.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-hsmig87rb0jcbaouuu.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-hsmig81rb0jcbao.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-hsqi286rb0jcbaouuu.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-hsqi287rb0jcbaouuu.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-hsqi281rb0jcbao.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-hs0im86rb0jcbaouuu.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-hs0im87rb0jcbaouuu.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Be Vietnam Pro';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sbevietnamprov11qdvmstaylfyeg-idwvojmves-hs0im81rb0jcbao.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: 'DM Sans';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sdmsansv15rp2wp2ywxg089uriczasexd86j3t9jz86mvyykk58ufivuw4aw.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'DM Sans';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sdmsansv15rp2wp2ywxg089uriczasexd86j3t9jz86mvyyky58ufivuw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: 'DM Sans';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sdmsansv15rp2wp2ywxg089uriczasexd86j3t9jz86mvyykk58ufivuw4aw.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'DM Sans';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sdmsansv15rp2wp2ywxg089uriczasexd86j3t9jz86mvyyky58ufivuw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: 'DM Sans';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sdmsansv15rp2wp2ywxg089uriczasexd86j3t9jz86mvyykk58ufivuw4aw.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'DM Sans';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sdmsansv15rp2wp2ywxg089uriczasexd86j3t9jz86mvyyky58ufivuw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: 'DM Sans';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sdmsansv15rp2yp2ywxg089urii5-g4vlh9vod8cmcqbu6-k6z9mxgju0.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'DM Sans';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sdmsansv15rp2yp2ywxg089urii5-g4vlh9vod8cmcqbu0-k6z9mxg.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: 'DM Sans';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sdmsansv15rp2yp2ywxg089urii5-g4vlh9vod8cmcqbu6-k6z9mxgju0.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'DM Sans';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sdmsansv15rp2yp2ywxg089urii5-g4vlh9vod8cmcqbu0-k6z9mxg.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: 'DM Sans';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sdmsansv15rp2yp2ywxg089urii5-g4vlh9vod8cmcqbu6-k6z9mxgju0.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'DM Sans';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sdmsansv15rp2yp2ywxg089urii5-g4vlh9vod8cmcqbu0-k6z9mxg.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: 'JetBrains Mono';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sjetbrainsmonov20tdby2o-fleeny0fzhsfku5wu4zr3e-bx0pnt8rd8ykxtn1otk6othhvawv8.woff) format('woff');
            unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'JetBrains Mono';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sjetbrainsmonov20tdby2o-fleeny0fzhsfku5wu4zr3e-bx0pnt8rd8ykxtplotk6othhvawv8.woff) format('woff');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek */
        @font-face {
            font-family: 'JetBrains Mono';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sjetbrainsmonov20tdby2o-fleeny0fzhsfku5wu4zr3e-bx0pnt8rd8ykxtovotk6othhvawv8.woff) format('woff');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        /* vietnamese */
        @font-face {
            font-family: 'JetBrains Mono';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sjetbrainsmonov20tdby2o-fleeny0fzhsfku5wu4zr3e-bx0pnt8rd8ykxtnvotk6othhvawv8.woff) format('woff');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'JetBrains Mono';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sjetbrainsmonov20tdby2o-fleeny0fzhsfku5wu4zr3e-bx0pnt8rd8ykxtnfotk6othhvawv8.woff) format('woff');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'JetBrains Mono';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/sjetbrainsmonov20tdby2o-fleeny0fzhsfku5wu4zr3e-bx0pnt8rd8ykxtolotk6othhva.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Kalam';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/skalamv17ya9dr0wd4kddmthqocfhsckaj7g.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+20F0, U+25CC, U+A830-A839, U+A8E0-A8FF, U+11B00-11B09;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Kalam';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/skalamv17ya9dr0wd4kddmthfocfhsckaj7g.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Kalam';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/skalamv17ya9dr0wd4kddmthrocfhscka.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: 'Kalam';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/skalamv17ya9qr0wd4kddmtdqhtlnkiqqtbgstvy.woff2) format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+20F0, U+25CC, U+A830-A839, U+A8E0-A8FF, U+11B00-11B09;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Kalam';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/skalamv17ya9qr0wd4kddmtdqhtlckiqqtbgstvy.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Kalam';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/skalamv17ya9qr0wd4kddmtdqhtlmkiqqtbgs.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/slexendv23wlptgwvfavdoq2-f94zlcfv0bz1wc9wrzlhnficrceswgqsp.woff) format('woff');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/slexendv23wlptgwvfavdoq2-f94zlcfv0bz1wc9wrzllnficrceswgqsp.woff) format('woff');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/slexendv23wlptgwvfavdoq2-f94zlcfv0bz1wc9wrzldnficrceswgg.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: 'Roboto Mono';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/srobotomonov23l0xudf4xlvmf-bfr8bxmihjhg45mwggefl0-7pq-sew-aji8sjqtq4y.woff) format('woff');
            unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Roboto Mono';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/srobotomonov23l0xudf4xlvmf-bfr8bxmihjhg45mwggefl0-7pq-qow-aji8sjqtq4y.woff) format('woff');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek */
        @font-face {
            font-family: 'Roboto Mono';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/srobotomonov23l0xudf4xlvmf-bfr8bxmihjhg45mwggefl0-7pq-r-w-aji8sjqtq4y.woff) format('woff');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Roboto Mono';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/srobotomonov23l0xudf4xlvmf-bfr8bxmihjhg45mwggefl0-7pq-s-w-aji8sjqtq4y.woff) format('woff');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Roboto Mono';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/srobotomonov23l0xudf4xlvmf-bfr8bxmihjhg45mwggefl0-7pq-suw-aji8sjqtq4y.woff) format('woff');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Roboto Mono';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://filamentphp.com/storage/fonts/733076f3e5/srobotomonov23l0xudf4xlvmf-bfr8bxmihjhg45mwggefl0-7pq-row-aji8sjqt.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <!-- Livewire Styles -->
    <style>
        [wire\:loading],
        [wire\:loading\.delay],
        [wire\:loading\.inline-block],
        [wire\:loading\.inline],
        [wire\:loading\.block],
        [wire\:loading\.flex],
        [wire\:loading\.table],
        [wire\:loading\.grid],
        [wire\:loading\.inline-flex] {
            display: none;
        }

        [wire\:loading\.delay\.none],
        [wire\:loading\.delay\.shortest],
        [wire\:loading\.delay\.shorter],
        [wire\:loading\.delay\.short],
        [wire\:loading\.delay\.default],
        [wire\:loading\.delay\.long],
        [wire\:loading\.delay\.longer],
        [wire\:loading\.delay\.longest] {
            display: none;
        }

        [wire\:offline] {
            display: none;
        }

        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }

        :root {
            --livewire-progress-bar-color: #2299dd;
        }

        [x-cloak] {
            display: none;
        }
    </style>
    <link rel="preload" as="style" href="https://filamentphp.com/build/assets/app-f07375c1.css" />
    <link rel="stylesheet" href="https://filamentphp.com/build/assets/app-f07375c1.css" data-navigate-track="reload" />
    <!-- Scripts -->
    <script src="/livewire/livewire.js?id=2f6e5d4d" data-csrf="30vGLjaEDZNzJ1GNXPfT9b8ICMqV8qeO7aCvpIKx"
        data-uri="/livewire/update" data-navigate-once="true"></script>
    <link rel="preload" as="style" href="https://filamentphp.com/build/assets/app-ee6910b3.css" />
    <link rel="modulepreload" href="https://filamentphp.com/build/assets/app-1af4f4dd.js" />
    <link rel="stylesheet" href="https://filamentphp.com/build/assets/app-ee6910b3.css" data-navigate-track="reload" />
    <script type="module" src="https://filamentphp.com/build/assets/app-1af4f4dd.js" data-navigate-track="reload">
    </script>
</head>

<body
    class="relative min-h-screen overflow-x-clip bg-cream font-vietnam text-midnight antialiased selection:bg-stone-500/10">
    <div id="docsearch" class="hidden"></div>

    <nav x-cloak x-data="{}" x-ref="nav" x-init="
        () => {
            if (reducedMotion) return
            const navTimeline = gsap
                .timeline({
                    paused: true,
                })
                .fromTo(
                    $refs.nav.querySelectorAll('.gsap-fadein'),
                    {
                        autoAlpha: 0,
                        y: -10,
                    },
                    {
                        autoAlpha: 1,
                        y: 0,
                        duration: 0.5,
                        stagger: 0.05,
                    },
                )

            if ($refs.nav.querySelectorAll('.gsap-popout').length) {
                navTimeline.fromTo(
                    $refs.nav.querySelectorAll('.gsap-popout'),
                    {
                        autoAlpha: 0,
                        y: -30,
                        rotate: 360,
                    },
                    {
                        autoAlpha: 1,
                        y: 0,
                        rotate: -45,
                        duration: 0.6,
                        ease: 'back.out(1.5)',
                    },
                    '<0.2',
                )
            }

            navTimeline.play()
        }
    "
        class="relative mx-auto flex max-w-8xl items-center justify-between overflow-x-clip px-8 py-10 sm:overflow-x-visible">

        <img src="https://filamentphp.com/build/assets/background-blob-0170dc56.svg" alt="Blob"
            class="absolute -top-[10rem,clamp(50vw),40rem] right-0 z-[-100] lg:-right-[10rem]" />


        <button x-data="{}" aria-controls="main-menu" aria-haspopup="true"
            x-on:click.prevent="$store.sidebar.isOpen = ! $store.sidebar.isOpen"
            x-on:click.away="$store.sidebar.isOpen = false" class="transition duration-300 hover:scale-110 lg:hidden">
            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <span class="sr-only">Toggle Menu</span>
        </button>


        <a href="/" class="group/filament gsap-fadein relative">
            <div class="text-black">
                <svg fill="currentColor" viewBox="0 0 128 26"
                    class="h-auto w-24 overflow-visible min-[400px]:w-28 md:w-36">

                    <path
                        class="transition duration-300 will-change-transform group-hover/filament:-translate-x-[1.2rem] motion-reduce:transition-none"
                        d="M4.97547 25.0814C5.22893 23.8838 5.47136 22.7255 5.70278 21.6063C5.89563 20.6736 6.11143 19.6399 6.3502 18.5051L6.49621 17.8122L7.67688 12.1042H12.199L12.9924 8.32689H8.2649C8.29796 8.15901 8.34755 7.90998 8.41367 7.57982C8.47979 7.24965 8.53489 6.97265 8.57897 6.74881C8.75529 5.88702 9.07486 5.24068 9.5377 4.80978C10.0005 4.37889 10.6397 4.16344 11.4552 4.16344C11.918 4.16344 12.3753 4.2194 12.8271 4.33132C13.2789 4.44325 13.7087 4.59993 14.1165 4.80139L15.3066 0.772252C14.954 0.615563 14.5435 0.47846 14.0751 0.360944C13.6068 0.243427 13.1136 0.153891 12.5957 0.0923344C12.0778 0.0307782 11.5598 0 11.0419 0C10.2264 0 9.44403 0.0979305 8.69468 0.293791C7.94532 0.489652 7.26209 0.819818 6.64498 1.28429C6.02787 1.74876 5.49065 2.37831 5.03332 3.17295C4.576 3.96758 4.22612 4.95808 3.98368 6.14444C3.8294 6.8943 3.66135 7.70853 3.47952 8.5871L3.53341 8.32689H0.793431L0 12.1042H2.7438L2.70361 12.2966C2.63044 12.6453 2.55815 12.9905 2.48674 13.3321L2.38029 13.8418C2.20397 14.6868 2.04419 15.4562 1.90093 16.1501L1.5538 17.8289C1.26728 19.2168 1.00556 20.4731 0.768636 21.5979C0.531709 22.7227 0.292026 23.8838 0.0495894 25.0814H4.97547Z"
                        fill="black" />

                    <path
                        class="transition duration-300 will-change-transform group-hover/filament:scale-90 motion-reduce:transition-none"
                        d="M19.0468 8.29404L18.5751 9.50848L20.7854 11.0626C20.9046 11.1457 20.9681 11.3013 20.9506 11.4576L20.9429 11.5045L20.7943 12.1851C20.7569 12.3565 20.627 12.4804 20.4737 12.4907L18.5227 12.6217L20.1912 13.785C20.3103 13.8681 20.3739 14.0236 20.3564 14.18L20.3487 14.2269L20.2001 14.9075C20.1627 15.0789 20.0328 15.2028 19.8795 15.2131L17.9285 15.3444L19.597 16.5074C19.7161 16.5905 19.7797 16.746 19.7622 16.9024L19.7545 16.9493L19.6059 17.6299C19.5685 17.8013 19.4385 17.9252 19.2853 17.9355L17.3346 18.0667L19.0028 19.2298C19.1219 19.3129 19.1855 19.4684 19.168 19.6248L19.1602 19.6717L19.0117 20.3523C18.9743 20.5237 18.8443 20.6476 18.6911 20.6579L16.7403 20.789L18.4086 21.9522C18.5277 22.0353 18.5913 22.1908 18.5738 22.3472L18.566 22.3941L18.4175 23.0747C18.3801 23.2461 18.2501 23.37 18.0969 23.3803L15.3609 23.6216L15.0204 25.0814H12.8359L13.5114 22.3993C13.5488 22.2279 13.6787 22.104 13.832 22.0937L15.7828 21.962L14.1145 20.7994C13.9954 20.7163 13.9318 20.5607 13.9493 20.4044L13.957 20.3575L14.1056 19.6769C14.143 19.5055 14.2729 19.3816 14.4262 19.3713L16.3767 19.2397L14.7087 18.077C14.5896 17.9939 14.526 17.8384 14.5435 17.682L14.5513 17.6351L14.6998 16.9545C14.7372 16.7831 14.8672 16.6592 15.0204 16.6489L16.971 16.5174L15.3029 15.3546C15.1838 15.2715 15.1202 15.116 15.1377 14.9596L15.1455 14.9127L15.294 14.2321C15.3314 14.0607 15.4614 13.9368 15.6146 13.9265L17.5652 13.7951L15.8971 12.6322C15.778 12.5491 15.7144 12.3936 15.7319 12.2372L15.7397 12.1903L15.8882 11.5097C15.9256 11.3383 16.0556 11.2144 16.2088 11.2041L18.1595 11.0728L16.4913 9.90977C16.3722 9.82672 16.3086 9.67117 16.3262 9.51478L16.3339 9.46791L16.6376 8.38675L19.0468 8.29404ZM20.7269 0.151123C21.6226 0.151123 22.2863 0.456106 22.7179 1.06607C23.1496 1.67604 23.2791 2.40632 23.1064 3.25692C22.9122 4.23063 22.5102 4.88816 21.9005 5.22952C21.2907 5.57087 20.5326 5.74155 19.6261 5.74155C18.7412 5.74155 18.0749 5.47574 17.627 4.94412C17.1792 4.4125 17.0524 3.65424 17.2466 2.66934C17.4301 1.77397 17.832 1.13043 18.4526 0.738706C19.0731 0.346984 19.8312 0.151123 20.7269 0.151123Z"
                        fill="black" />

                    <path
                        class="transition duration-300 will-change-transform group-hover/filament:translate-x-3 motion-reduce:transition-none"
                        d="M27.1244 21.6063C26.893 22.7255 26.656 23.8838 26.4136 25.0814H21.4712C21.7246 23.8838 21.9671 22.7227 22.1985 21.5979C22.4299 20.4731 22.6944 19.2167 22.9919 17.8289L24.9094 8.52834C25.2069 7.16291 25.4934 5.81427 25.7689 4.48241C26.0444 3.15056 26.3199 1.81311 26.5954 0.470059L31.6205 0.0335693C31.345 1.35423 31.0612 2.71127 30.7692 4.10468C30.4772 5.49809 30.1714 6.96705 29.8518 8.51155L27.9178 17.8121C27.6203 19.2223 27.3558 20.487 27.1244 21.6063Z"
                        fill="black" />

                    <path
                        class="transition duration-300 will-change-transform group-hover/filament:translate-x-3 motion-reduce:transition-none"
                        d="M40.1595 7.8736C41.7464 7.8736 43.0522 8.14221 44.0771 8.67943C45.1019 9.21665 45.8127 9.9805 46.2094 10.971C46.6061 11.9615 46.6557 13.1395 46.3582 14.5049C46.248 15.0645 46.1323 15.6325 46.011 16.2089C45.8898 16.7853 45.7631 17.3868 45.6309 18.0136L45.3333 19.4238C45.157 20.2632 44.9724 21.1474 44.7796 22.0763C44.5867 23.0053 44.3746 24.0069 44.1432 25.0814H39.8785L40.0934 22.8486H39.7132C39.3055 23.4417 38.8564 23.9314 38.366 24.3175C37.8756 24.7036 37.3439 24.9946 36.7709 25.1905C36.1979 25.3864 35.5807 25.4843 34.9195 25.4843C33.8727 25.4843 32.9966 25.2241 32.2913 24.7036C31.586 24.1832 31.0957 23.4921 30.8202 22.6303C30.5447 21.7685 30.5171 20.8284 30.7375 19.8099C30.9028 19.0265 31.17 18.3717 31.5392 17.8457C31.9084 17.3197 32.3547 16.8888 32.8781 16.553C33.4016 16.2173 33.9801 15.9515 34.6137 15.7556C35.2474 15.5597 35.9058 15.4114 36.5891 15.3107L41.7629 14.4881C41.8731 13.9845 41.8318 13.5452 41.6389 13.1702C41.4461 12.7953 41.1017 12.5043 40.6058 12.2973C40.1099 12.0902 39.4763 11.9867 38.7049 11.9867C38.3082 11.9867 37.8866 12.0175 37.4403 12.079C36.994 12.1406 36.5284 12.2301 36.0436 12.3476C35.5587 12.4651 35.06 12.6106 34.5476 12.7841C34.0352 12.9576 33.509 13.1618 32.969 13.3969L33.7459 8.9984C34.1426 8.8641 34.5945 8.73259 35.1014 8.60388C35.6083 8.47517 36.1428 8.35486 36.7048 8.24294C37.2668 8.13102 37.8426 8.04148 38.4321 7.97433C39.0217 7.90718 39.5975 7.8736 40.1595 7.8736ZM41.1513 16.7545C40.997 16.8664 40.8097 16.9755 40.5893 17.0819C40.3689 17.1882 40.0658 17.2945 39.6801 17.4008C39.2944 17.5072 38.771 17.6331 38.1098 17.7786C37.68 17.8793 37.2888 17.9968 36.9362 18.1311C36.5835 18.2654 36.2915 18.4557 36.0601 18.7019C35.8287 18.9481 35.6744 19.2671 35.5973 19.6588C35.4871 20.2744 35.5918 20.7529 35.9113 21.0942C36.2309 21.4356 36.6662 21.6062 37.2172 21.6062C37.6139 21.6062 38.0134 21.5195 38.4156 21.346C38.8178 21.1726 39.2035 20.9235 39.5727 20.599C39.9419 20.2744 40.2807 19.8883 40.5893 19.4406L41.1513 16.7545ZM65.1814 10.8634C65.0078 10.0209 64.6549 9.34892 64.1227 8.84731C63.4339 8.19817 62.4724 7.8736 61.2382 7.8736C60.4778 7.8736 59.7478 8.0079 59.048 8.27651C58.3482 8.54512 57.7036 8.91166 57.114 9.37613C56.5245 9.8406 56.0258 10.3582 55.6181 10.929H55.2048L55.5519 8.07506L51.3864 8.32688C51.0999 9.72589 50.8189 11.0773 50.5434 12.3812C50.2679 13.6851 50.009 14.9414 49.7665 16.1501L49.4194 17.8289C49.1219 19.2167 48.8574 20.4731 48.626 21.5979C48.3945 22.7227 48.1521 23.8838 47.8987 25.0814H52.8411C53.0835 23.8838 53.3204 22.731 53.5518 21.623C53.7833 20.515 54.0312 19.3343 54.2957 18.0808L55.0065 14.6056C55.3591 14.1915 55.7145 13.8222 56.0726 13.4976C56.4308 13.173 56.8055 12.9156 57.1967 12.7254C57.5879 12.5351 58.0039 12.44 58.4447 12.44C59.2161 12.44 59.7092 12.7449 59.9241 13.3549C60.139 13.9649 60.1417 14.7735 59.9324 15.7808L59.453 18.0975C59.1885 19.351 58.9461 20.5262 58.7257 21.623C58.5053 22.7199 58.2683 23.8726 58.0149 25.0814H62.9408C63.1942 23.8838 63.4394 22.7227 63.6764 21.5979C63.9133 20.4731 64.175 19.2167 64.4615 17.8289C64.5938 17.1798 64.7232 16.553 64.85 15.9487C64.9767 15.3443 65.0896 14.8071 65.1888 14.337L65.1654 14.4463L65.2003 14.4074C65.4366 14.1475 65.6754 13.905 65.9166 13.6799L66.098 13.5144C66.4616 13.1898 66.8391 12.9296 67.2303 12.7337C67.6215 12.5379 68.0375 12.44 68.4783 12.44C69.2496 12.44 69.7428 12.7449 69.9577 13.3549C70.1726 13.9649 70.1753 14.7735 69.9659 15.7808L69.4866 18.0975C69.2331 19.3622 68.9934 20.5402 68.7675 21.6314C68.5416 22.7227 68.3019 23.8726 68.0485 25.0814H72.9909C73.2333 23.8838 73.4703 22.7255 73.7017 21.6062C73.9331 20.487 74.1976 19.2279 74.4951 17.8289C74.6273 17.1798 74.7568 16.553 74.8836 15.9487C75.0103 15.3443 75.1232 14.8071 75.2224 14.337C75.6412 12.3784 75.5089 10.8115 74.8257 9.63635C74.1425 8.46118 72.9578 7.8736 71.2718 7.8736C70.5114 7.8736 69.7786 8.0107 69.0733 8.28491C68.3681 8.55911 67.7151 8.93125 67.1145 9.40132C66.514 9.87138 65.9988 10.403 65.569 10.9962H65.2065L65.1814 10.8634ZM86.5493 7.8736C88.2795 7.8736 89.69 8.19257 90.781 8.83052C91.8719 9.46847 92.6103 10.3638 92.9959 11.5166C93.3816 12.6694 93.3872 14.0124 93.0125 15.5458C92.9243 15.9151 92.8334 16.262 92.7397 16.5866C92.6695 16.83 92.5946 17.0672 92.515 17.298L92.4339 17.5267H82.3145L82.3113 17.593C82.288 18.2334 82.3811 18.7905 82.5904 19.2643C82.9045 19.975 83.4252 20.5066 84.1525 20.8592C84.8798 21.2117 85.7724 21.388 86.8303 21.388C87.2932 21.388 87.8083 21.346 88.3759 21.2621C88.9434 21.1782 89.5082 21.0494 90.0702 20.876C90.6322 20.7025 91.1501 20.4814 91.624 20.2128L90.9628 24.477C90.6652 24.6561 90.2575 24.824 89.7396 24.9807C89.2216 25.1373 88.6238 25.2661 87.9461 25.3668C87.2684 25.4675 86.5383 25.5179 85.7559 25.5179C83.7723 25.5179 82.1166 25.1289 80.7887 24.3511C79.4608 23.5733 78.5241 22.468 77.9786 21.0355C77.4331 19.6029 77.3588 17.9017 77.7555 15.9319C78.0861 14.309 78.6481 12.8932 79.4415 11.6845C80.2349 10.4758 81.2322 9.53842 82.4334 8.87249C83.6346 8.20656 85.0065 7.8736 86.5493 7.8736ZM86.6485 11.4159C86.0865 11.4159 85.5383 11.567 85.0038 11.8692C84.4693 12.1713 83.9927 12.6414 83.574 13.2794C83.3227 13.6621 83.1072 14.1114 82.9273 14.6271L82.8777 14.7744L88.8514 14.6478L88.8702 14.5036C88.9521 13.767 88.8452 13.1071 88.5494 12.5239C88.1748 11.7852 87.5411 11.4159 86.6485 11.4159ZM99.102 25.0814C99.3445 23.8838 99.5814 22.7338 99.8128 21.6314C100.044 20.529 100.292 19.3455 100.557 18.0808L101.267 14.6056C101.62 14.1915 101.981 13.8222 102.35 13.4976C102.719 13.173 103.105 12.9156 103.507 12.7254C103.909 12.5351 104.347 12.44 104.821 12.44C105.692 12.44 106.243 12.7449 106.474 13.3549C106.706 13.9649 106.711 14.7735 106.491 15.7808L106.011 18.0975C105.758 19.351 105.518 20.5262 105.292 21.623C105.067 22.7199 104.827 23.8726 104.573 25.0814H109.516C109.769 23.8838 110.014 22.7227 110.251 21.5979C110.488 20.4731 110.745 19.2167 111.02 17.8289C111.163 17.1798 111.298 16.553 111.425 15.9487C111.552 15.3443 111.665 14.8071 111.764 14.337C112.172 12.3784 112.028 10.8115 111.334 9.63635C110.64 8.46118 109.4 7.8736 107.615 7.8736C106.832 7.8736 106.08 8.0079 105.359 8.27651C104.637 8.54512 103.978 8.91166 103.383 9.37613C102.788 9.8406 102.287 10.3582 101.879 10.929H101.466L101.813 8.07506L97.6474 8.32688C97.3609 9.72589 97.0799 11.0801 96.8044 12.3896C96.5289 13.6991 96.2699 14.9526 96.0275 16.1501L95.6804 17.8289C95.3938 19.2056 95.1321 20.4591 94.8952 21.5895C94.6583 22.7199 94.4131 23.8838 94.1596 25.0814H99.102ZM120.965 25.5347C121.362 25.5347 121.791 25.4983 122.254 25.4255C122.717 25.3528 123.15 25.2577 123.552 25.1401C123.954 25.0226 124.271 24.8855 124.502 24.7288L125.031 20.6158C124.601 20.9179 124.174 21.1306 123.75 21.2537C123.326 21.3768 122.937 21.4384 122.585 21.4384C121.78 21.4384 121.232 21.1586 120.94 20.599C120.648 20.0394 120.618 19.2223 120.849 18.1479L122.097 12.1042H127.015L127.808 8.32688H122.884L122.917 8.16949C122.989 7.83058 123.057 7.50308 123.123 7.18699L123.188 6.87471C123.359 6.05209 123.527 5.25186 123.692 4.47401C123.858 3.69617 124.028 2.87075 124.205 1.99777L119.147 2.88754C118.915 3.99555 118.692 5.06999 118.477 6.11085C118.348 6.73537 118.208 7.40219 118.058 8.11132L118.012 8.32688H115.345L114.551 12.1042H117.227L117.206 12.2058L117.146 12.4987C116.97 13.3661 116.802 14.1775 116.642 14.933C116.483 15.6885 116.331 16.4159 116.188 17.1154C116.044 17.8149 115.896 18.5284 115.741 19.2559C115.444 20.6773 115.477 21.8525 115.841 22.7814C116.204 23.7104 116.83 24.4015 117.717 24.8547C118.604 25.308 119.687 25.5347 120.965 25.5347Z"
                        fill="black" />
                </svg>


                <div
                    class="absolute -left-2 -top-3.5 -z-10 opacity-0 transition duration-300 will-change-transform group-hover/filament:opacity-100 motion-reduce:transition-none min-[400px]:-left-1 md:-left-px md:-top-2.5">
                    <svg width="37" height="52" class="scale-[.65] min-[400px]:scale-75 md:scale-100" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="18.697" cy="17.903" r="12.731" class="text-yellow-400" fill="currentColor" />
                        <path
                            d="M12.287 51.322a.992.992 0 0 1-.983-.842 1.003 1.003 0 0 1 .672-1.107l11.732-3.871a1.064 1.064 0 0 0 .147-1.952 1.05 1.05 0 0 0-.804-.06l-7.764 2.56a3.03 3.03 0 0 1-2.3-.2 3.054 3.054 0 0 1-1.498-1.767 3.072 3.072 0 0 1 .167-2.314c.356-.72.98-1.27 1.736-1.53l11.415-3.765c1.064-1.526 2.293-3.003 3.484-4.435 3.457-4.154 6.725-8.077 6.725-13.448 0-9.15-7.407-16.593-16.511-16.593S1.987 9.443 1.987 18.593c0 5.37 3.266 9.294 6.725 13.448 1.264 1.519 2.571 3.09 3.678 4.715a1.003 1.003 0 0 1-.612 1.551.99.99 0 0 1-1.029-.422c-1.053-1.546-2.272-3.01-3.563-4.562C3.653 29.078 0 24.69 0 18.593 0 8.34 8.299 0 18.5 0S37 8.34 37 18.593c0 6.097-3.653 10.485-7.186 14.73-1.29 1.551-2.51 3.016-3.563 4.562a.995.995 0 0 1-.511.385l-11.731 3.871c-.262.09-.477.281-.6.53a1.065 1.065 0 0 0 .46 1.412c.246.128.532.153.796.07l7.768-2.56a3.029 3.029 0 0 1 2.3.2 3.054 3.054 0 0 1 1.498 1.767 3.072 3.072 0 0 1-.168 2.314c-.355.72-.98 1.27-1.735 1.53l-11.732 3.871a.975.975 0 0 1-.31.047Z"
                            fill="#000" />
                        <path
                            d="M11.568 38.32a.992.992 0 0 1-.981-.842 1.005 1.005 0 0 1 .67-1.107l4.236-1.397a.99.99 0 0 1 1.255.639 1.004 1.004 0 0 1-.635 1.261l-4.235 1.396a1 1 0 0 1-.31.05Z"
                            fill="#000" />
                    </svg>
                </div>
            </div>
        </a>


        {{-- <div class="flex items-center justify-end gap-8 font-semibold sm:gap-14">
            <a href="https://filamentphp.com/docs"
                class="hidden transition duration-300 hover:opacity-100 focus:text-butter motion-reduce:transition-none lg:block text-evening opacity-80">
                <div class="gsap-fadein">Documentation</div>
            </a>

            <a href="https://filamentphp.com/plugins"
                class="group/nav-link relative hidden text-evening transition duration-300 hover:opacity-100 focus:text-butter motion-reduce:transition-none lg:block opacity-80">
                <div class="gsap-fadein">Plugins</div>

            </a>

            <a href="https://filamentphp.com/content"
                class="group/nav-link relative hidden text-evening transition duration-300 hover:opacity-100 focus:text-butter motion-reduce:transition-none lg:block opacity-80">
                <div class="gsap-fadein">Content</div>

            </a>

            <a href="https://filamentphp.com/consulting"
                class="group/nav-link relative hidden text-evening transition duration-300 hover:opacity-100 focus:text-butter motion-reduce:transition-none lg:block opacity-80">
                <div class="gsap-fadein">Consulting</div>

            </a>

            <a href="https://shop.filamentphp.com"
                class="group/nav-link relative hidden text-evening opacity-80 transition duration-300 hover:opacity-100 focus:text-butter motion-reduce:transition-none lg:block">
                <div class="gsap-fadein">Shop</div>
            </a> --}}


            {{-- <div class="group/github relative">

                <a href="https://github.com/filamentphp/filament" target="_blank"
                    class="peer text-evening opacity-80 transition delay-75 duration-300 group-hover/github:opacity-100 motion-reduce:transition-none">
                    <div class="gsap-fadein">
                        <svg fill="currentColor" viewBox="0 0 29 29" class="h-7 w-7">
                            <path fill-rule="evenodd"
                                d="M1372.32,16.8097415 C1372.32,23.1517351 1376.33105,28.5314586 1381.89427,30.4295626 C1382.59472,30.5617425 1382.84997,30.1184991 1382.84997,29.7378209 C1382.84997,29.3976778 1382.83794,28.4944483 1382.83107,27.296898 C1378.9369,28.1639984 1378.11527,25.3723581 1378.11527,25.3723581 C1377.47841,23.7139404 1376.56052,23.2724594 1376.56052,23.2724594 C1375.2894,22.3824478 1376.65678,22.4000718 1376.65678,22.4000718 C1378.06198,22.5014098 1378.80111,23.8796059 1378.80111,23.8796059 C1380.04989,26.0729117 1382.07819,25.4393292 1382.87576,25.071869 C1383.00296,24.144847 1383.36478,23.5121457 1383.76443,23.1534975 C1380.6558,22.7913244 1377.38731,21.5594074 1377.38731,16.0589595 C1377.38731,14.4921866 1377.93306,13.2100411 1378.82861,12.207236 C1378.68422,11.8441818 1378.20379,10.384034 1378.96612,8.40838451 C1378.96612,8.40838451 1380.14099,8.02241909 1382.8156,9.87998785 C1383.93202,9.56099359 1385.13009,9.40237767 1386.32043,9.39620927 C1387.50991,9.40237767 1388.70712,9.56099359 1389.82526,9.87998785 C1392.49815,8.02241909 1393.6713,8.40838451 1393.6713,8.40838451 C1394.43535,10.384034 1393.95492,11.8441818 1393.81139,12.207236 C1394.70866,13.2100411 1395.25011,14.4921866 1395.25011,16.0589595 C1395.25011,21.5735066 1391.97647,22.7869184 1388.85838,23.1420419 C1389.3603,23.5852853 1389.80808,24.4611977 1389.80808,25.8006211 C1389.80808,27.7189926 1389.79089,29.2672603 1389.79089,29.7378209 C1389.79089,30.1220239 1390.04356,30.5687921 1390.75347,30.4286814 C1396.31239,28.5261714 1400.32,23.1499727 1400.32,16.8097415 C1400.32,8.8815887 1394.05118,2.455 1386.31871,2.455 C1378.58882,2.455 1372.32,8.8815887 1372.32,16.8097415 Z"
                                transform="translate(-1372 -2)"></path>
                        </svg>
                    </div>
                </a>


                <div
                    class="invisible absolute right-1/2 top-7 -translate-y-2 translate-x-1/3 p-3 opacity-0 transition delay-75 duration-300 hover:visible hover:translate-y-0 hover:opacity-100 peer-hover:visible peer-hover:translate-y-0 peer-hover:opacity-100 motion-reduce:transition-none min-[1400px]:translate-x-1/2">
                    <div
                        class="flex items-center justify-center gap-2 whitespace-nowrap rounded-xl bg-cream py-2.5 pl-2.5 pr-4 shadow-xl shadow-black/5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="scale-90 text-butter" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M9.153 5.408C10.42 3.136 11.053 2 12 2c.947 0 1.58 1.136 2.847 3.408l.328.588c.36.646.54.969.82 1.182c.28.213.63.292 1.33.45l.636.144c2.46.557 3.689.835 3.982 1.776c.292.94-.546 1.921-2.223 3.882l-.434.507c-.476.557-.715.836-.822 1.18c-.107.345-.071.717.001 1.46l.066.677c.253 2.617.38 3.925-.386 4.506c-.766.582-1.918.051-4.22-1.009l-.597-.274c-.654-.302-.981-.452-1.328-.452c-.347 0-.674.15-1.329.452l-.595.274c-2.303 1.06-3.455 1.59-4.22 1.01c-.767-.582-.64-1.89-.387-4.507l.066-.676c.072-.744.108-1.116 0-1.46c-.106-.345-.345-.624-.821-1.18l-.434-.508c-1.677-1.96-2.515-2.941-2.223-3.882c.293-.941 1.523-1.22 3.983-1.776l.636-.144c.699-.158 1.048-.237 1.329-.45c.28-.213.46-.536.82-1.182l.328-.588Z" />
                        </svg>
                        <div class="text-sm text-evening">
                            20.3k
                            Stars
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </nav>

    <button x-data="{}" x-show="$store.sidebar.isOpen" x-transition.opacity x-on:click="$store.sidebar.isOpen = false"
        x-cloak type="button" aria-hidden="true"
        class="fixed inset-0 z-[999] h-full w-full bg-black/50 focus:outline-none lg:hidden"></button>

    {{-- <aside x-data="{}" x-cloak :aria-hidden="$store.sidebar.isOpen.toString()"
        :class="$store.sidebar.isOpen ? '-translate-x-0' : '-translate-x-full'"
        class="fixed inset-y-0 left-0 z-[1000] w-full max-w-[19rem] transform space-y-8 overflow-y-auto bg-cream p-8 transition-transform duration-500 ease-in-out">
        <a href="/"
            class="inline-block p-2 transition duration-300 will-change-transform hover:scale-105 motion-reduce:transition-none">
            <div class="text-black">
                <svg fill="currentColor" viewBox="0 0 128 26" class="h-auto w-32">

                    <path
                        d="M4.97547 25.0814C5.22893 23.8838 5.47136 22.7255 5.70278 21.6063C5.89563 20.6736 6.11143 19.6399 6.3502 18.5051L6.49621 17.8122L7.67688 12.1042H12.199L12.9924 8.32689H8.2649C8.29796 8.15901 8.34755 7.90998 8.41367 7.57982C8.47979 7.24965 8.53489 6.97265 8.57897 6.74881C8.75529 5.88702 9.07486 5.24068 9.5377 4.80978C10.0005 4.37889 10.6397 4.16344 11.4552 4.16344C11.918 4.16344 12.3753 4.2194 12.8271 4.33132C13.2789 4.44325 13.7087 4.59993 14.1165 4.80139L15.3066 0.772252C14.954 0.615563 14.5435 0.47846 14.0751 0.360944C13.6068 0.243427 13.1136 0.153891 12.5957 0.0923344C12.0778 0.0307782 11.5598 0 11.0419 0C10.2264 0 9.44403 0.0979305 8.69468 0.293791C7.94532 0.489652 7.26209 0.819818 6.64498 1.28429C6.02787 1.74876 5.49065 2.37831 5.03332 3.17295C4.576 3.96758 4.22612 4.95808 3.98368 6.14444C3.8294 6.8943 3.66135 7.70853 3.47952 8.5871L3.53341 8.32689H0.793431L0 12.1042H2.7438L2.70361 12.2966C2.63044 12.6453 2.55815 12.9905 2.48674 13.3321L2.38029 13.8418C2.20397 14.6868 2.04419 15.4562 1.90093 16.1501L1.5538 17.8289C1.26728 19.2168 1.00556 20.4731 0.768636 21.5979C0.531709 22.7227 0.292026 23.8838 0.0495894 25.0814H4.97547Z"
                        fill="black" />

                    <path
                        d="M19.0468 8.29404L18.5751 9.50848L20.7854 11.0626C20.9046 11.1457 20.9681 11.3013 20.9506 11.4576L20.9429 11.5045L20.7943 12.1851C20.7569 12.3565 20.627 12.4804 20.4737 12.4907L18.5227 12.6217L20.1912 13.785C20.3103 13.8681 20.3739 14.0236 20.3564 14.18L20.3487 14.2269L20.2001 14.9075C20.1627 15.0789 20.0328 15.2028 19.8795 15.2131L17.9285 15.3444L19.597 16.5074C19.7161 16.5905 19.7797 16.746 19.7622 16.9024L19.7545 16.9493L19.6059 17.6299C19.5685 17.8013 19.4385 17.9252 19.2853 17.9355L17.3346 18.0667L19.0028 19.2298C19.1219 19.3129 19.1855 19.4684 19.168 19.6248L19.1602 19.6717L19.0117 20.3523C18.9743 20.5237 18.8443 20.6476 18.6911 20.6579L16.7403 20.789L18.4086 21.9522C18.5277 22.0353 18.5913 22.1908 18.5738 22.3472L18.566 22.3941L18.4175 23.0747C18.3801 23.2461 18.2501 23.37 18.0969 23.3803L15.3609 23.6216L15.0204 25.0814H12.8359L13.5114 22.3993C13.5488 22.2279 13.6787 22.104 13.832 22.0937L15.7828 21.962L14.1145 20.7994C13.9954 20.7163 13.9318 20.5607 13.9493 20.4044L13.957 20.3575L14.1056 19.6769C14.143 19.5055 14.2729 19.3816 14.4262 19.3713L16.3767 19.2397L14.7087 18.077C14.5896 17.9939 14.526 17.8384 14.5435 17.682L14.5513 17.6351L14.6998 16.9545C14.7372 16.7831 14.8672 16.6592 15.0204 16.6489L16.971 16.5174L15.3029 15.3546C15.1838 15.2715 15.1202 15.116 15.1377 14.9596L15.1455 14.9127L15.294 14.2321C15.3314 14.0607 15.4614 13.9368 15.6146 13.9265L17.5652 13.7951L15.8971 12.6322C15.778 12.5491 15.7144 12.3936 15.7319 12.2372L15.7397 12.1903L15.8882 11.5097C15.9256 11.3383 16.0556 11.2144 16.2088 11.2041L18.1595 11.0728L16.4913 9.90977C16.3722 9.82672 16.3086 9.67117 16.3262 9.51478L16.3339 9.46791L16.6376 8.38675L19.0468 8.29404ZM20.7269 0.151123C21.6226 0.151123 22.2863 0.456106 22.7179 1.06607C23.1496 1.67604 23.2791 2.40632 23.1064 3.25692C22.9122 4.23063 22.5102 4.88816 21.9005 5.22952C21.2907 5.57087 20.5326 5.74155 19.6261 5.74155C18.7412 5.74155 18.0749 5.47574 17.627 4.94412C17.1792 4.4125 17.0524 3.65424 17.2466 2.66934C17.4301 1.77397 17.832 1.13043 18.4526 0.738706C19.0731 0.346984 19.8312 0.151123 20.7269 0.151123Z"
                        fill="black" />

                    <path
                        d="M27.1244 21.6063C26.893 22.7255 26.656 23.8838 26.4136 25.0814H21.4712C21.7246 23.8838 21.9671 22.7227 22.1985 21.5979C22.4299 20.4731 22.6944 19.2167 22.9919 17.8289L24.9094 8.52834C25.2069 7.16291 25.4934 5.81427 25.7689 4.48241C26.0444 3.15056 26.3199 1.81311 26.5954 0.470059L31.6205 0.0335693C31.345 1.35423 31.0612 2.71127 30.7692 4.10468C30.4772 5.49809 30.1714 6.96705 29.8518 8.51155L27.9178 17.8121C27.6203 19.2223 27.3558 20.487 27.1244 21.6063Z"
                        fill="black" />

                    <path
                        d="M40.1595 7.8736C41.7464 7.8736 43.0522 8.14221 44.0771 8.67943C45.1019 9.21665 45.8127 9.9805 46.2094 10.971C46.6061 11.9615 46.6557 13.1395 46.3582 14.5049C46.248 15.0645 46.1323 15.6325 46.011 16.2089C45.8898 16.7853 45.7631 17.3868 45.6309 18.0136L45.3333 19.4238C45.157 20.2632 44.9724 21.1474 44.7796 22.0763C44.5867 23.0053 44.3746 24.0069 44.1432 25.0814H39.8785L40.0934 22.8486H39.7132C39.3055 23.4417 38.8564 23.9314 38.366 24.3175C37.8756 24.7036 37.3439 24.9946 36.7709 25.1905C36.1979 25.3864 35.5807 25.4843 34.9195 25.4843C33.8727 25.4843 32.9966 25.2241 32.2913 24.7036C31.586 24.1832 31.0957 23.4921 30.8202 22.6303C30.5447 21.7685 30.5171 20.8284 30.7375 19.8099C30.9028 19.0265 31.17 18.3717 31.5392 17.8457C31.9084 17.3197 32.3547 16.8888 32.8781 16.553C33.4016 16.2173 33.9801 15.9515 34.6137 15.7556C35.2474 15.5597 35.9058 15.4114 36.5891 15.3107L41.7629 14.4881C41.8731 13.9845 41.8318 13.5452 41.6389 13.1702C41.4461 12.7953 41.1017 12.5043 40.6058 12.2973C40.1099 12.0902 39.4763 11.9867 38.7049 11.9867C38.3082 11.9867 37.8866 12.0175 37.4403 12.079C36.994 12.1406 36.5284 12.2301 36.0436 12.3476C35.5587 12.4651 35.06 12.6106 34.5476 12.7841C34.0352 12.9576 33.509 13.1618 32.969 13.3969L33.7459 8.9984C34.1426 8.8641 34.5945 8.73259 35.1014 8.60388C35.6083 8.47517 36.1428 8.35486 36.7048 8.24294C37.2668 8.13102 37.8426 8.04148 38.4321 7.97433C39.0217 7.90718 39.5975 7.8736 40.1595 7.8736ZM41.1513 16.7545C40.997 16.8664 40.8097 16.9755 40.5893 17.0819C40.3689 17.1882 40.0658 17.2945 39.6801 17.4008C39.2944 17.5072 38.771 17.6331 38.1098 17.7786C37.68 17.8793 37.2888 17.9968 36.9362 18.1311C36.5835 18.2654 36.2915 18.4557 36.0601 18.7019C35.8287 18.9481 35.6744 19.2671 35.5973 19.6588C35.4871 20.2744 35.5918 20.7529 35.9113 21.0942C36.2309 21.4356 36.6662 21.6062 37.2172 21.6062C37.6139 21.6062 38.0134 21.5195 38.4156 21.346C38.8178 21.1726 39.2035 20.9235 39.5727 20.599C39.9419 20.2744 40.2807 19.8883 40.5893 19.4406L41.1513 16.7545ZM65.1814 10.8634C65.0078 10.0209 64.6549 9.34892 64.1227 8.84731C63.4339 8.19817 62.4724 7.8736 61.2382 7.8736C60.4778 7.8736 59.7478 8.0079 59.048 8.27651C58.3482 8.54512 57.7036 8.91166 57.114 9.37613C56.5245 9.8406 56.0258 10.3582 55.6181 10.929H55.2048L55.5519 8.07506L51.3864 8.32688C51.0999 9.72589 50.8189 11.0773 50.5434 12.3812C50.2679 13.6851 50.009 14.9414 49.7665 16.1501L49.4194 17.8289C49.1219 19.2167 48.8574 20.4731 48.626 21.5979C48.3945 22.7227 48.1521 23.8838 47.8987 25.0814H52.8411C53.0835 23.8838 53.3204 22.731 53.5518 21.623C53.7833 20.515 54.0312 19.3343 54.2957 18.0808L55.0065 14.6056C55.3591 14.1915 55.7145 13.8222 56.0726 13.4976C56.4308 13.173 56.8055 12.9156 57.1967 12.7254C57.5879 12.5351 58.0039 12.44 58.4447 12.44C59.2161 12.44 59.7092 12.7449 59.9241 13.3549C60.139 13.9649 60.1417 14.7735 59.9324 15.7808L59.453 18.0975C59.1885 19.351 58.9461 20.5262 58.7257 21.623C58.5053 22.7199 58.2683 23.8726 58.0149 25.0814H62.9408C63.1942 23.8838 63.4394 22.7227 63.6764 21.5979C63.9133 20.4731 64.175 19.2167 64.4615 17.8289C64.5938 17.1798 64.7232 16.553 64.85 15.9487C64.9767 15.3443 65.0896 14.8071 65.1888 14.337L65.1654 14.4463L65.2003 14.4074C65.4366 14.1475 65.6754 13.905 65.9166 13.6799L66.098 13.5144C66.4616 13.1898 66.8391 12.9296 67.2303 12.7337C67.6215 12.5379 68.0375 12.44 68.4783 12.44C69.2496 12.44 69.7428 12.7449 69.9577 13.3549C70.1726 13.9649 70.1753 14.7735 69.9659 15.7808L69.4866 18.0975C69.2331 19.3622 68.9934 20.5402 68.7675 21.6314C68.5416 22.7227 68.3019 23.8726 68.0485 25.0814H72.9909C73.2333 23.8838 73.4703 22.7255 73.7017 21.6062C73.9331 20.487 74.1976 19.2279 74.4951 17.8289C74.6273 17.1798 74.7568 16.553 74.8836 15.9487C75.0103 15.3443 75.1232 14.8071 75.2224 14.337C75.6412 12.3784 75.5089 10.8115 74.8257 9.63635C74.1425 8.46118 72.9578 7.8736 71.2718 7.8736C70.5114 7.8736 69.7786 8.0107 69.0733 8.28491C68.3681 8.55911 67.7151 8.93125 67.1145 9.40132C66.514 9.87138 65.9988 10.403 65.569 10.9962H65.2065L65.1814 10.8634ZM86.5493 7.8736C88.2795 7.8736 89.69 8.19257 90.781 8.83052C91.8719 9.46847 92.6103 10.3638 92.9959 11.5166C93.3816 12.6694 93.3872 14.0124 93.0125 15.5458C92.9243 15.9151 92.8334 16.262 92.7397 16.5866C92.6695 16.83 92.5946 17.0672 92.515 17.298L92.4339 17.5267H82.3145L82.3113 17.593C82.288 18.2334 82.3811 18.7905 82.5904 19.2643C82.9045 19.975 83.4252 20.5066 84.1525 20.8592C84.8798 21.2117 85.7724 21.388 86.8303 21.388C87.2932 21.388 87.8083 21.346 88.3759 21.2621C88.9434 21.1782 89.5082 21.0494 90.0702 20.876C90.6322 20.7025 91.1501 20.4814 91.624 20.2128L90.9628 24.477C90.6652 24.6561 90.2575 24.824 89.7396 24.9807C89.2216 25.1373 88.6238 25.2661 87.9461 25.3668C87.2684 25.4675 86.5383 25.5179 85.7559 25.5179C83.7723 25.5179 82.1166 25.1289 80.7887 24.3511C79.4608 23.5733 78.5241 22.468 77.9786 21.0355C77.4331 19.6029 77.3588 17.9017 77.7555 15.9319C78.0861 14.309 78.6481 12.8932 79.4415 11.6845C80.2349 10.4758 81.2322 9.53842 82.4334 8.87249C83.6346 8.20656 85.0065 7.8736 86.5493 7.8736ZM86.6485 11.4159C86.0865 11.4159 85.5383 11.567 85.0038 11.8692C84.4693 12.1713 83.9927 12.6414 83.574 13.2794C83.3227 13.6621 83.1072 14.1114 82.9273 14.6271L82.8777 14.7744L88.8514 14.6478L88.8702 14.5036C88.9521 13.767 88.8452 13.1071 88.5494 12.5239C88.1748 11.7852 87.5411 11.4159 86.6485 11.4159ZM99.102 25.0814C99.3445 23.8838 99.5814 22.7338 99.8128 21.6314C100.044 20.529 100.292 19.3455 100.557 18.0808L101.267 14.6056C101.62 14.1915 101.981 13.8222 102.35 13.4976C102.719 13.173 103.105 12.9156 103.507 12.7254C103.909 12.5351 104.347 12.44 104.821 12.44C105.692 12.44 106.243 12.7449 106.474 13.3549C106.706 13.9649 106.711 14.7735 106.491 15.7808L106.011 18.0975C105.758 19.351 105.518 20.5262 105.292 21.623C105.067 22.7199 104.827 23.8726 104.573 25.0814H109.516C109.769 23.8838 110.014 22.7227 110.251 21.5979C110.488 20.4731 110.745 19.2167 111.02 17.8289C111.163 17.1798 111.298 16.553 111.425 15.9487C111.552 15.3443 111.665 14.8071 111.764 14.337C112.172 12.3784 112.028 10.8115 111.334 9.63635C110.64 8.46118 109.4 7.8736 107.615 7.8736C106.832 7.8736 106.08 8.0079 105.359 8.27651C104.637 8.54512 103.978 8.91166 103.383 9.37613C102.788 9.8406 102.287 10.3582 101.879 10.929H101.466L101.813 8.07506L97.6474 8.32688C97.3609 9.72589 97.0799 11.0801 96.8044 12.3896C96.5289 13.6991 96.2699 14.9526 96.0275 16.1501L95.6804 17.8289C95.3938 19.2056 95.1321 20.4591 94.8952 21.5895C94.6583 22.7199 94.4131 23.8838 94.1596 25.0814H99.102ZM120.965 25.5347C121.362 25.5347 121.791 25.4983 122.254 25.4255C122.717 25.3528 123.15 25.2577 123.552 25.1401C123.954 25.0226 124.271 24.8855 124.502 24.7288L125.031 20.6158C124.601 20.9179 124.174 21.1306 123.75 21.2537C123.326 21.3768 122.937 21.4384 122.585 21.4384C121.78 21.4384 121.232 21.1586 120.94 20.599C120.648 20.0394 120.618 19.2223 120.849 18.1479L122.097 12.1042H127.015L127.808 8.32688H122.884L122.917 8.16949C122.989 7.83058 123.057 7.50308 123.123 7.18699L123.188 6.87471C123.359 6.05209 123.527 5.25186 123.692 4.47401C123.858 3.69617 124.028 2.87075 124.205 1.99777L119.147 2.88754C118.915 3.99555 118.692 5.06999 118.477 6.11085C118.348 6.73537 118.208 7.40219 118.058 8.11132L118.012 8.32688H115.345L114.551 12.1042H117.227L117.206 12.2058L117.146 12.4987C116.97 13.3661 116.802 14.1775 116.642 14.933C116.483 15.6885 116.331 16.4159 116.188 17.1154C116.044 17.8149 115.896 18.5284 115.741 19.2559C115.444 20.6773 115.477 21.8525 115.841 22.7814C116.204 23.7104 116.83 24.4015 117.717 24.8547C118.604 25.308 119.687 25.5347 120.965 25.5347Z"
                        fill="black" />
                </svg>
            </div>
        </a>
        <ul class="-mx-3 select-none space-y-2">
            <li>
                <a href="https://filamentphp.com"
                    class="group/sidebar-link block w-full rounded-lg px-4 py-2 transition duration-300 bg-merino font-black">
                    <div class="transition duration-300">
                        Home
                    </div>
                </a>
            </li>
            <li>
                <a href="https://filamentphp.com/docs"
                    class="group/sidebar-link block w-full rounded-lg px-4 py-2 transition duration-300 font-medium hover:bg-merino">
                    <div class="transition duration-300 group-hover/sidebar-link:translate-x-1">
                        Documentation
                    </div>
                </a>
            </li>
            <li>
                <a href="https://filamentphp.com/plugins"
                    class="group/sidebar-link block w-full rounded-lg px-4 py-2 transition duration-300 font-medium hover:bg-merino">
                    <div class="transition duration-300 group-hover/sidebar-link:translate-x-1">
                        Plugins
                    </div>
                </a>
            </li>
            <li>
                <a href="https://filamentphp.com/content"
                    class="group/sidebar-link block w-full rounded-lg px-4 py-2 transition duration-300 font-medium hover:bg-merino">
                    <div class="transition duration-300 group-hover/sidebar-link:translate-x-1">
                        Content
                    </div>
                </a>
            </li>
            <li>
                <a href="https://filamentphp.com/consulting"
                    class="group/sidebar-link block w-full rounded-lg px-4 py-2 transition duration-300 font-medium hover:bg-merino">
                    <div class="transition duration-300 group-hover/sidebar-link:translate-x-1">
                        Consulting
                    </div>
                </a>
            </li>
            <li>
                <a href="https://shop.filamentphp.com"
                    class="group/sidebar-link block w-full rounded-lg px-4 py-2 font-medium transition duration-300 hover:bg-merino">
                    <div class="transition duration-300 group-hover/sidebar-link:translate-x-1">
                        Shop
                    </div>
                </a>
            </li>
            <li>
                <a href="https://filamentphp.com/team"
                    class="group/sidebar-link block w-full rounded-lg px-4 py-2 transition duration-300 font-medium hover:bg-merino">
                    <div class="transition duration-300 group-hover/sidebar-link:translate-x-1">
                        Meet Our Team
                    </div>
                </a>
            </li>
            <li>
                <a target="_blank" href="https://status.filamentphp.com"
                    class="group/sidebar-link block w-full rounded-lg px-4 py-2 font-medium transition duration-300 hover:bg-merino">
                    <div class="transition duration-300 group-hover/sidebar-link:translate-x-1">
                        Status
                    </div>
                </a>
            </li>
            <li>
                <a target="_blank" href="https://github.com/filamentphp/filament/discussions/new"
                    class="group/sidebar-link block w-full rounded-lg px-4 py-2 font-medium transition duration-300 hover:bg-merino">
                    <div class="transition duration-300 group-hover/sidebar-link:translate-x-1">
                        Help
                    </div>
                </a>
            </li>
            <li>
                <a href="https://github.com/filamentphp/filament?sponsor=1"
                    class="group/sidebar-link block w-full rounded-lg px-4 py-2 font-medium transition duration-300 hover:bg-merino">
                    <div class="transition duration-300 group-hover/sidebar-link:translate-x-1">
                        Sponsor
                    </div>
                </a>
            </li>
        </ul>

        <div class="flex flex-wrap items-center gap-3.5 text-hurricane">
            <a target="_blank" href="https://twitter.com/filamentphp"
                class="group/twitter-link relative grid h-[2.6rem] w-[2.6rem] place-items-center rounded-xl bg-merino hover:text-black motion-reduce:transition-none">
                <svg width="40" height="40"
                    class="scale-[.6] transition duration-300 group-hover/twitter-link:scale-0 group-hover/twitter-link:opacity-0"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M37.02 9.427c-1.272.562-2.62.932-4.002 1.096a6.991 6.991 0 0 0 3.064-3.856 13.935 13.935 0 0 1-4.425 1.691 6.97 6.97 0 0 0-11.877 6.357A19.79 19.79 0 0 1 5.412 7.432a6.947 6.947 0 0 0-.944 3.505 6.973 6.973 0 0 0 3.1 5.801 6.947 6.947 0 0 1-3.156-.871v.084a6.975 6.975 0 0 0 5.591 6.837 7.008 7.008 0 0 1-3.15.12 6.975 6.975 0 0 0 6.514 4.842 13.99 13.99 0 0 1-10.32 2.887A19.719 19.719 0 0 0 13.73 33.77c12.823 0 19.833-10.622 19.833-19.834 0-.3-.006-.603-.02-.901a14.17 14.17 0 0 0 3.477-3.608Z"
                        fill="currentColor" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                    class="absolute right-1/2 top-1/2 -translate-y-1/2 translate-x-1/2 scale-0 opacity-0 transition duration-300 group-hover/twitter-link:scale-100 group-hover/twitter-link:opacity-100"
                    fill="none">
                    <path
                        d="M12.6182 0.80542H15.0592L9.72628 6.90056L16 15.1947H11.0877L7.24026 10.1643L2.83789 15.1947H0.395405L6.09945 8.67524L0.0810547 0.80542H5.11803L8.5958 5.40334L12.6182 0.80542ZM11.7614 13.7336H13.114L4.38307 2.18974H2.9316L11.7614 13.7336Z"
                        fill="currentColor" />
                </svg>
            </a>
            <a target="_blank" href="https://filamentphp.com/discord"
                class="grid h-[2.6rem] w-[2.6rem] place-items-center rounded-xl bg-merino transition duration-300 hover:text-black motion-reduce:transition-none">
                <svg class="w-[1.3rem]" fill="none" viewBox="0 0 71 55" aria-hidden="true">
                    <g clip-path="url(#clip0)">
                        <path
                            d="M60.1045 4.8978C55.5792 2.8214 50.7265 1.2916 45.6527 0.41542C45.5603 0.39851 45.468 0.440769 45.4204 0.525289C44.7963 1.6353 44.105 3.0834 43.6209 4.2216C38.1637 3.4046 32.7345 3.4046 27.3892 4.2216C26.905 3.0581 26.1886 1.6353 25.5617 0.525289C25.5141 0.443589 25.4218 0.40133 25.3294 0.41542C20.2584 1.2888 15.4057 2.8186 10.8776 4.8978C10.8384 4.9147 10.8048 4.9429 10.7825 4.9795C1.57795 18.7309 -0.943561 32.1443 0.293408 45.3914C0.299005 45.4562 0.335386 45.5182 0.385761 45.5576C6.45866 50.0174 12.3413 52.7249 18.1147 54.5195C18.2071 54.5477 18.305 54.5139 18.3638 54.4378C19.7295 52.5728 20.9469 50.6063 21.9907 48.5383C22.0523 48.4172 21.9935 48.2735 21.8676 48.2256C19.9366 47.4931 18.0979 46.6 16.3292 45.5858C16.1893 45.5041 16.1781 45.304 16.3068 45.2082C16.679 44.9293 17.0513 44.6391 17.4067 44.3461C17.471 44.2926 17.5606 44.2813 17.6362 44.3151C29.2558 49.6202 41.8354 49.6202 53.3179 44.3151C53.3935 44.2785 53.4831 44.2898 53.5502 44.3433C53.9057 44.6363 54.2779 44.9293 54.6529 45.2082C54.7816 45.304 54.7732 45.5041 54.6333 45.5858C52.8646 46.6197 51.0259 47.4931 49.0921 48.2228C48.9662 48.2707 48.9102 48.4172 48.9718 48.5383C50.038 50.6034 51.2554 52.5699 52.5959 54.435C52.6519 54.5139 52.7526 54.5477 52.845 54.5195C58.6464 52.7249 64.529 50.0174 70.6019 45.5576C70.6551 45.5182 70.6887 45.459 70.6943 45.3942C72.1747 30.0791 68.2147 16.7757 60.1968 4.9823C60.1772 4.9429 60.1437 4.9147 60.1045 4.8978ZM23.7259 37.3253C20.2276 37.3253 17.3451 34.1136 17.3451 30.1693C17.3451 26.225 20.1717 23.0133 23.7259 23.0133C27.308 23.0133 30.1626 26.2532 30.1066 30.1693C30.1066 34.1136 27.28 37.3253 23.7259 37.3253ZM47.3178 37.3253C43.8196 37.3253 40.9371 34.1136 40.9371 30.1693C40.9371 26.225 43.7636 23.0133 47.3178 23.0133C50.9 23.0133 53.7545 26.2532 53.6986 30.1693C53.6986 34.1136 50.9 37.3253 47.3178 37.3253Z"
                            fill="currentColor" />
                    </g>
                </svg>
            </a>
            <a target="_blank" href="https://github.com/filamentphp/filament"
                class="grid h-[2.6rem] w-[2.6rem] place-items-center rounded-xl bg-merino transition duration-300 hover:text-black motion-reduce:transition-none">
                <svg class="w-[1.6rem]" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </aside> --}}

    <div x-cloak x-data="{}"
        class="mx-auto w-full max-w-screen-lg overflow-x-clip px-5 pt-20 min-[550px]:px-10 sm:overflow-x-visible">
        <div class="relative flex items-start justify-center min-[550px]:justify-start lg:gap-40 xl:justify-between">

            <div class="min-[500px]:pl-10 sm:shrink-0 sm:pl-14 xl:pl-0">

                <div class="relative translate-x-10 text-3xl font-black italic min-[500px]:translate-x-0 lg:text-4xl"
                    x-data="{}" x-init="
                    () => {
                        if (reducedMotion) return
                        gsap.timeline()
                            .fromTo(
                                $refs.supercar,
                                {
                                    autoAlpha: 1,
                                    x: -450,
                                },
                                {
                                    autoAlpha: 0,
                                    x: 0,
                                    duration: 1.1,
                                    ease: 'circ.in',
                                },
                            )
                            .fromTo(
                                $refs.accelerated,
                                {
                                    autoAlpha: 0,
                                    x: -100,
                                },
                                {
                                    autoAlpha: 1,
                                    x: 0,
                                    duration: 0.5,
                                    ease: 'circ.out',
                                },
                                '>-0.1',
                            )
                            .fromTo(
                                $refs.shadow,
                                {
                                    autoAlpha: 0,
                                    x: -100,
                                },
                                {
                                    autoAlpha: 1,
                                    x: 0,
                                    duration: 0.7,
                                    ease: 'circ.out',
                                },
                                '<0.01',
                            )
                            .fromTo(
                                $refs.line1,
                                {
                                    autoAlpha: 0,
                                    x: -50,
                                },
                                {
                                    autoAlpha: 1,
                                    x: 0,
                                    duration: 0.3,
                                    ease: 'circ.out',
                                },
                                '<0.2',
                            )
                            .fromTo(
                                $refs.line2,
                                {
                                    autoAlpha: 0,
                                    x: -50,
                                },
                                {
                                    autoAlpha: 1,
                                    x: 0,
                                    duration: 0.3,
                                    ease: 'circ.out',
                                },
                                '<0.02',
                            )
                            .fromTo(
                                $refs.line3,
                                {
                                    autoAlpha: 0,
                                    x: -50,
                                },
                                {
                                    autoAlpha: 1,
                                    x: 0,
                                    duration: 0.3,
                                    ease: 'circ.out',
                                },
                                '<0.02',
                            )
                    }
                ">

                    <div x-ref="accelerated"
                        class="bg-gradient-to-r from-[#FFB46F] to-[#B9C0B9] bg-clip-text text-transparent">
                        Website
                    </div>


                    <div x-ref="shadow" class="absolute -left-2 top-1 -z-10 select-none text-[#FFEFE1]">
                        Website
                    </div>


                    <div class="absolute -left-12 top-1/2 -translate-y-1/2 space-y-1">
                        <div class="translate-x-5">
                            <div x-ref="line1"
                                class="h-0.5 w-7 rounded-full bg-gradient-to-r from-transparent to-[#FFC089]"></div>
                        </div>
                        <div>
                            <div x-ref="line2"
                                class="h-0.5 w-10 rounded-full bg-gradient-to-r from-transparent to-[#FFC089]"></div>
                        </div>
                        <div class="-translate-x-4">
                            <div x-ref="line3"
                                class="h-0.5 w-12 rounded-full bg-gradient-to-r from-transparent to-[#FFC089]"></div>
                        </div>
                    </div>


                    <div class="absolute right-0 top-1/2 -translate-y-1/2">
                        <img x-ref="supercar" src="https://filamentphp.com/build/assets/supercar-fe85e4de.webp"
                            alt="Car" class="w-28 opacity-0" />
                    </div>
                </div>


                <div class="group/header pt-3" x-data="{}" x-init="
                    () => {
                        if (reducedMotion) return
                        gsap.fromTo(
                            $refs.title,
                            {
                                autoAlpha: 0,
                                x: 20,
                            },
                            {
                                autoAlpha: 1,
                                x: 0,
                                duration: 0.5,
                            },
                        )
                        gsap.fromTo(
                            $refs.description,
                            {
                                autoAlpha: 0,
                                x: -20,
                            },
                            {
                                autoAlpha: 1,
                                x: 0,
                                duration: 0.5,
                            },
                        )
                        gsap.fromTo(
                            $refs.star1,
                            {
                                autoAlpha: 0,
                                scale: 0,
                                rotate: 200,
                                x: 50,
                            },
                            {
                                autoAlpha: 1,
                                scale: 1,
                                rotate: 0,
                                x: 0,
                                duration: 0.8,
                                ease: 'expo.out',
                            },
                        )
                        gsap.fromTo(
                            $refs.star2,
                            {
                                autoAlpha: 0,
                                scale: 0,
                                rotate: -200,
                                x: -60,
                            },
                            {
                                autoAlpha: 1,
                                scale: 1,
                                rotate: 0,
                                x: 0,
                                duration: 0.8,
                                ease: 'expo.out',
                            },
                        )
                    }
                ">
                    <div class="relative space-y-3 font-black">

                        <div x-ref="title">
                            <div class="relative max-w-fit text-6xl lg:text-7xl">
                                SPRS


                                <div
                                    class="absolute -right-7 -top-5 -translate-x-1 rotate-12 text-rose-500 opacity-0 duration-200 ease-out group-hover/header:translate-x-0 group-hover/header:opacity-100 motion-reduce:transition-none min-[500px]:-right-5 min-[500px]:-top-7">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M2 9.137C2 14 6.02 16.591 8.962 18.911C10 19.729 11 20.5 12 20.5s2-.77 3.038-1.59C17.981 16.592 22 14 22 9.138c0-4.863-5.5-8.312-10-3.636C7.5.825 2 4.274 2 9.137Z" />
                                    </svg>
                                </div>
                                <div
                                    class="absolute -right-12 top-2 -translate-x-1 -rotate-12 text-rose-500 opacity-0 transition delay-75 duration-200 ease-out group-hover/header:translate-x-0 group-hover/header:opacity-100 motion-reduce:transition-none min-[500px]:-right-10 min-[500px]:top-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="scale-75" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M2 9.137C2 14 6.02 16.591 8.962 18.911C10 19.729 11 20.5 12 20.5s2-.77 3.038-1.59C17.981 16.592 22 14 22 9.138c0-4.863-5.5-8.312-10-3.636C7.5.825 2 4.274 2 9.137Z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="text-4xl lg:text-5xl">
                                Study Program
                                <br />
                                Repository System
                                <span class="inline-block -translate-x-2 text-butter">
                                    .
                                </span>
                            </div>
                        </div>


                        <div x-ref="star1" class="absolute -left-14 top-1 lg:-left-20">
                            <svg width="31" height="31" fill="none"
                                class="hidden scale-75 min-[450px]:block min-[500px]:scale-100"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m17.664 29.354 3.06-8.755 8.679-3.27a2.183 2.183 0 0 0-.05-4.092l-8.754-3.06-3.27-8.679a2.183 2.183 0 0 0-4.092.05l-3.06 8.754-8.68 3.27a2.183 2.183 0 0 0 .05 4.092l8.755 3.06 3.27 8.679a2.183 2.183 0 0 0 4.092-.05Zm-5.325-9.391a2.142 2.142 0 0 0-1.325-1.294l-8.741-3.06 8.665-3.27a2.143 2.143 0 0 0 1.294-1.325l3.06-8.741 3.27 8.665a2.142 2.142 0 0 0 1.325 1.294l8.74 3.06-8.664 3.27a2.141 2.141 0 0 0-1.294 1.325l-3.06 8.741-3.27-8.665Z"
                                    fill="#0F033A" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative pt-5">

                        <div x-ref="description" class="text-xl font-medium leading-normal opacity-90 lg:text-2xl">
                            Kumpulan sumber daya akademik terorganisir
                            <br />
                            dengan baik. Platform ideal untuk proyek
                            <br />
                            berikutnya di program studi.
                        </div>


                        <div x-ref="star2" class="absolute -right-10 top-1 min-[500px]:right-10 lg:-right-5">
                            <svg width="31" height="31" fill="none" class="hidden scale-[0.65] min-[450px]:block"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m17.664 29.354 3.06-8.755 8.679-3.27a2.183 2.183 0 0 0-.05-4.092l-8.754-3.06-3.27-8.679a2.183 2.183 0 0 0-4.092.05l-3.06 8.754-8.68 3.27a2.183 2.183 0 0 0 .05 4.092l8.755 3.06 3.27 8.679a2.183 2.183 0 0 0 4.092-.05Zm-5.325-9.391a2.142 2.142 0 0 0-1.325-1.294l-8.741-3.06 8.665-3.27a2.143 2.143 0 0 0 1.294-1.325l3.06-8.741 3.27 8.665a2.142 2.142 0 0 0 1.325 1.294l8.74 3.06-8.664 3.27a2.141 2.141 0 0 0-1.294 1.325l-3.06 8.741-3.27-8.665Z"
                                    fill="#0F033A" />
                            </svg>
                        </div>
                    </div>
                </div>


                <div x-data="{}" x-init="
                    () => {
                        if (reducedMotion) return
                        gsap.fromTo(
                            $refs.getstarted,
                            {
                                autoAlpha: 0,
                                x: -10,
                                y: 10,
                            },
                            {
                                autoAlpha: 1,
                                x: 0,
                                y: 0,
                                duration: 0.5,
                            },
                        )
                        gsap.fromTo(
                            $refs.discord,
                            {
                                autoAlpha: 0,
                                x: 10,
                                y: -10,
                            },
                            {
                                autoAlpha: 1,
                                x: 0,
                                y: 0,
                                duration: 0.5,
                            },
                        )
                    }
                " class="flex flex-col gap-5 pt-10 text-white min-[500px]:flex-row min-[500px]:items-center">
                    <a x-ref="getstarted" href="http://127.0.0.1:8000/admin/login" class="group relative block">

                        <div
                            class="flex items-center justify-center gap-3 rounded-bl-3xl rounded-tr-3xl bg-midnight px-9 py-4 transition duration-200 will-change-transform group-hover:-translate-y-0.5 group-hover:translate-x-0.5 motion-reduce:transition-none">
                            <div>Sign In</div>
                            <div
                                class="transition duration-300 will-change-transform group-hover:translate-x-1 motion-reduce:transition-none">
                                <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 12.992h2.5m13.5 0-6-6m6 6-6 6m6-6H9.5" stroke="#fff" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>


                        <div
                            class="absolute inset-0 -z-10 h-full w-full -translate-x-1.5 translate-y-1.5 rounded-bl-3xl rounded-tr-3xl bg-butter transition duration-300 will-change-transform group-hover:-translate-x-2 group-hover:translate-y-2 group-hover:bg-rose-300 motion-reduce:transition-none">
                        </div>
                    </a>
                </div>


                <div x-data="{}" x-init="
                    () => {
                        if (reducedMotion) return
                        gsap.fromTo(
                            $refs.arrow,
                            {
                                autoAlpha: 0,
                                x: -10,
                            },
                            {
                                autoAlpha: 1,
                                x: 0,
                                duration: 0.5,
                                ease: 'circ.out',
                                delay: 0.2,
                            },
                        )
                    }
                " class="hidden -translate-x-16 pt-2 min-[500px]:block lg:-translate-x-32">
                    <img x-ref="arrow" src="https://filamentphp.com/build/assets/decoration-up-arrow-red-5661465e.svg"
                        alt="Up arrow" class="w-32" />
                </div>
            </div>


            <div class="absolute -top-10 right-10 -z-10 hidden min-[500px]:block md:relative md:right-auto md:top-auto">
                <div x-data="{}" x-init="
                    () => {
                        if (reducedMotion) return
                        gsap.timeline()
                            .fromTo(
                                $refs.rocket,
                                {
                                    autoAlpha: 0,
                                    scale: 0.9,
                                    x: -50,
                                    y: 50,
                                },
                                {
                                    autoAlpha: 1,
                                    scale: 1,
                                    x: 0,
                                    y: 0,
                                    duration: 0.8,
                                    ease: 'circ.out',
                                },
                            )
                            .to($refs.rocket, {
                                keyframes: {
                                    x: [0, 20],
                                    y: [0, -20],
                                },
                                duration: 5,
                                repeat: -1,
                                yoyo: true,
                            })
                        gsap.timeline()
                            .fromTo(
                                $refs.circle1,
                                {
                                    autoAlpha: 0,
                                    scale: 0,
                                },
                                {
                                    autoAlpha: 1,
                                    scale: 1,
                                    duration: 0.7,
                                    ease: 'back.out',
                                },
                            )
                            .fromTo(
                                $refs.circle2,
                                {
                                    autoAlpha: 0,
                                    scale: 0,
                                },
                                {
                                    autoAlpha: 1,
                                    scale: 1,
                                    duration: 0.7,
                                    ease: 'back.out',
                                },
                                '<0.1',
                            )
                    }
                " class="relative">

                    <div class="w-32 min-[550px]:w-40 md:w-60 lg:w-80">
                        <img x-ref="rocket" src="https://filamentphp.com/build/assets/components-3d-f020c42d.webp"
                            alt="Prodi" class="w-full" />
                    </div>


                    <div x-ref="circle1"
                        class="absolute -right-4 bottom-0 hidden h-3 w-3 rounded-full bg-[#FFCEA0] min-[550px]:block md:h-4 md:w-4">
                    </div>
                    <div x-ref="circle2"
                        class="absolute -bottom-20 right-20 hidden h-5 w-5 rounded-full bg-[#FFE69A] min-[550px]:block md:h-7 md:w-7">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div x-cloak x-data="{}" class="mx-auto w-full max-w-screen-lg px-10 pt-40 lg:px-5">
        <div x-data="{}" x-init="
            () => {
                if (reducedMotion) return
                gsap.timeline({
                    delay: 0.2,
                    scrollTrigger: {
                        trigger: $refs.header,
                        start: 'top bottom',
                    },
                })
                    .fromTo(
                        $refs.header,
                        {
                            autoAlpha: 0,
                        },
                        {
                            autoAlpha: 1,
                            duration: 0.7,
                            ease: 'circ.out',
                        },
                    )
                    .fromTo(
                        $refs.mockup,
                        {
                            autoAlpha: 0,
                        },
                        {
                            autoAlpha: 1,
                            duration: 0.7,
                            ease: 'circ.out',
                        },
                        '>-0.5',
                    )
            }
        " class="flex flex-col items-center justify-center gap-20 md:flex-row md:gap-10 lg:justify-between">

        </div>
    </div>

    </div>
    </div>
    </div>
    </footer>
</body>

</html>