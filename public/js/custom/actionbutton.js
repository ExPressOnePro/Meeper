var open = false;
var anims = [];

function animsClear() {
    anims.forEach((anim) => {
        anim.pause();
    });
    anims.length = 0;
}

function animOpacity(duration, delay, id, value) {
    anims.push(anime({
        targets: id,
        opacity: {
            value: value,
            duration: duration,
            delay: delay,
            easing: 'easeOutQuad'
        }
    }));
}

function animTranslate(duration, delay, id, value) {
    anims.push(anime({
        targets: id,
        transform: {
            value: `translate(${value})`,
            duration: duration,
            delay: delay,
            easing: 'easeOutQuad'
        }
    }));
}
function animD(duration, delay, id, value, elasticity = 500) {
    anims.push(anime({
        targets: id,
        d: {
            value: value,
            duration: duration,
            delay: delay,
            elasticity: elasticity
        }
    }));
}

function animIn() {
    animOpacity(200,   0,   '#email',  0);
    animOpacity(200,   0,   '#email-inner', 0);
    animOpacity(200,   100, '#folder', 0);
    animOpacity(200,   200, '#avatar-bottom', 0);
    animOpacity(200,   200, '#avatar-top', 0);
    animTranslate(500, 0,   '#Cart', 0);
    animD(600, 500,         '#Cart', 'm 34.375006,27.987201 c 2.303078,0.04067 3.854253,-0.0033 5,0 0.364497,1.222094 0.546431,1.704391 1.125,3.25 3.391069,0.01436 19.535488,-0.263276 22.125,-0.25 1.214512,0.357026 1.561133,1.021162 1.25,1.875 -1.342383,2.478837 -4.287154,8.228521 -5.625,10.375 -0.462846,0.990229 -1.061388,1.240493 -1.875,1.5 -2.501112,0.07201 -8.596273,-0.151537 -11.00628,-0.16161 -0.722507,1.208677 -1.09597,1.739215 -2.24372,3.41161 2.789749,0.01615 15.057608,0.165772 17.5,0.125 -0.02636,1.271728 -0.04765,1.107636 0,2.5 -3.82735,0.01736 -13.369127,0.13224 -17.125,0.25 -2.803589,0.02845 -3.783148,-1.63083 -3.375,-3 1.029626,-1.766918 1.292287,-2.057075 3,-5.25 -1.604787,-3.130425 -4.72048,-9.368671 -6,-11.875 -1.37327,-0.0063 -2.071862,0.08551 -2.75,0.125 -0.02189,-0.898014 0.04067,-1.915672 0,-2.875 z')
    animTranslate(500, 0,   '#Cart-fw', 0);
    animD(600, 510,         '#Cart-fw', 'm 61.032946,55.451511 a 2.9000001,2.9000001 0 0 1 -2.9,2.9 2.9000001,2.9000001 0 0 1 -2.9,-2.9 2.9000001,2.9000001 0 0 1 2.9,-2.9 2.9000001,2.9000001 0 0 1 2.9,2.9 z')
    animTranslate(500, 0,   '#Cart-bw', 0);
    animD(600, 520,         '#Cart-bw', 'm 46.272086,55.451511 a 2.9000001,2.9000001 0 0 1 -2.9,2.9 2.9000001,2.9000001 0 0 1 -2.9,-2.9 2.9000001,2.9000001 0 0 1 2.9,-2.9 2.9000001,2.9000001 0 0 1 2.9,2.9 z')
    animTranslate(500, 0,   '#map', 0);
    animD(600, 550,         '#map', 'm 137.475,57.362201 c 4.22441,-1.838363 6.09949,-2.657535 9.25,-4 3.68084,1.574351 5.56874,2.168449 8.625,3.625 3.05626,-1.460265 5.25774,-2.093247 8.375,-3.25 0.0237,-5.134229 -0.30309,-17.895031 -0.25,-24.375 -2.77534,1.298206 -5.18791,2.497254 -8.125,3.875 -3.29065,-1.53907 -5.77562,-2.452491 -8.875,-3.875 -3.45294,1.31753 -5.50987,2.0328 -8.875,3.25 -0.006,4.752734 -0.10677,21.196674 -0.125,24.75 z')
    animTranslate(500, 0,   '#map-inner', 0);
    animD(600, 560,         '#map-inner', 'm 146.6,32.237201 c -0.0212,3.555932 0.0964,14.621965 0,18.375 3.52755,1.454938 5.25573,2.057797 8.25,3.25 -0.0109,-8.000185 0.0746,-13.523293 0,-18 -3.07982,-1.559891 -5.31195,-2.319573 -8.25,-3.625 z')
    animTranslate(500, 0,   '#printer-top', 0);
    animD(600, 600,         '#printer-top', 'm 243.59828,30.557846 c -0.0775,2.729166 0,3.10266 0,5.83363 4.23177,0.07752 13.35751,0.07752 17.32411,0 -0.0109,-2.287224 -0.0993,-3.192853 0,-5.83363 -3.9666,-0.07752 -10.61747,-0.07752 -17.32411,0 z')
    animTranslate(500, 0,   '#printer-bottom', 0);
    animD(600, 610,         '#printer-bottom', 'm 237.85304,51.947826 c -0.0168,-0.847123 0,-3.131891 -0.009,-4.642491 -0.005,-1.5106 0.0306,-3.009558 0.009,-5.080219 0.2386,-1.06054 0.39689,-3.413696 3.53554,-3.725116 1.30362,0.03642 4.7634,0.0709 6.95196,0.06328 4.03628,-0.02448 4.93813,-0.06069 8.30682,-0.02025 2.02758,-0.03503 5.07003,0.01201 7.01508,-0.04299 3.20177,0.295151 3.04813,2.544676 3.35876,3.371556 -0.0215,2.118707 -0.0336,3.894861 -0.0344,5.443824 0,1.548963 0.01,2.933235 0.0344,4.455676 -1.89583,-0.04871 -3.80331,0.0026 -6.18719,0 -0.0858,2.56066 -0.0368,3.749064 0,6.54073 -2.01455,-0.01838 -4.92106,-0.008 -8.0141,0.0017 -3.09304,0.0098 -6.37259,0.01894 -9.13324,-0.0017 0.003,-2.78125 0,-3.512763 0,-6.45235 -2.07764,0.06562 -1.86061,0.0369 -3.22617,0.0442 -1.36557,0.0073 -1.48581,0.0074 -2.60746,0.04415 z')
    animTranslate(500, 0,   '#printer-light', 0);
    animD(600, 620,         '#printer-light', 'm 264.2768,43.574976 c 0,0.897463 -0.72754,1.625 -1.625,1.625 -0.89746,0 -1.625,-0.727537 -1.625,-1.625 0,-0.897463 0.72754,-1.625 1.625,-1.625 1.02246,0 1.625,0.727537 1.625,1.625 z')
    animTranslate(500, 0,   '#printer-page', 0);
    animD(600, 630,         '#printer-page', 'm 246.5268,47.949966 c -0.085,3.009423 -0.2083,4.844046 -0.125,7 2.73495,0.03463 8.91399,0.132583 11.875,0 -0.0442,-2.43068 -0.0349,-4.238967 0,-7.25 -2.61673,-0.09422 -9.54363,0.157393 -11.75,0.25 z')
    animTranslate(500, 0,   '#X1', 0);
    animD(600, 650,         '#X1', 'm 362.09747,30.804538 c 0.97935,0.979343 0.31925,3.216278 -0.23571,3.771241 -0.55496,0.554962 -6.63403,6.589841 -10.01734,10.017344 -3.4717,3.339115 -9.46239,9.462382 -10.01735,10.017345 -0.55497,0.554962 -2.79189,1.215043 -3.77124,0.2357 -0.97935,-0.979343 -0.31926,-3.216272 0.2357,-3.771234 0.55496,-0.554963 6.67824,-6.501453 10.01735,-10.017345 3.4275,-3.383309 9.46237,-9.462382 10.01734,-10.017344 0.55497,-0.554963 2.7919,-1.21505 3.77125,-0.235707 z')
    animTranslate(500, 0,   '#X2', 0);
    animD(600, 660,         '#X2', 'm 337.88681,31.039541 c 0.97934,-0.979343 3.21628,-0.319259 3.77124,0.235702 0.55496,0.554962 6.70033,6.61194 10.01734,10.017346 3.31702,3.405407 9.46239,9.462386 10.01735,10.017347 0.55496,0.55496 1.21505,2.791893 0.2357,3.771236 -0.97934,0.979342 -3.49375,0.04178 -3.77123,-0.235702 -0.27748,-0.277481 -8.30356,-8.259436 -10.01735,-10.017347 -1.66959,-1.713716 -9.46238,-9.462385 -10.01735,-10.017346 -0.55496,-0.554961 -1.21504,-2.791893 -0.2357,-3.771236 z')
}

function animOut() {
    animOpacity(200,   660, '#email', 1);
    animOpacity(200,   660, '#email-inner', 1);
    animOpacity(200,   560,  '#folder', 1);
    animOpacity(200,   460,  '#avatar-bottom', 1);
    animOpacity(200,   460,  '#avatar-top', 1);
    animTranslate(500, 360,  '#Cart', 285);
    animD(800, 150,          '#Cart', 'm 53,40 c 0,0.414214 -0.08395,0.80882 -0.235755,1.167735 -0.151808,0.358915 -0.371478,0.682139 -0.642925,0.953585 -0.271446,0.271447 -0.59467,0.491117 -0.953585,0.642925 -0.358915,0.151808 -0.753521,0.235755 -1.167735,0.235755 -0.414214,0 -0.80882,-0.08395 -1.167735,-0.235755 -0.358915,-0.151808 -0.682139,-0.371478 -0.953585,-0.642925 -0.271447,-0.271446 -0.491117,-0.59467 -0.642925,-0.953585 -0.151808,-0.358915 -0.235755,-0.753521 -0.235755,-1.167735 0,-0.414214 0.08395,-0.80882 0.235755,-1.167735 0.151808,-0.358915 0.371478,-0.682139 0.642925,-0.953585 0.271446,-0.271447 0.59467,-0.491117 0.953585,-0.642925 0.358915,-0.151808 0.753521,-0.235755 1.167735,-0.235755 0.414214,0 0.80882,0.08395 1.167735,0.235755 0.358915,0.151808 0.682139,0.371478 0.953585,0.642925 0.271447,0.271446 0.491117,0.59467 0.642925,0.953585 0.151808,0.358915 0.235755,0.753521 0.235755,1.167735 z', 0)
    animTranslate(500, 360,  '#Cart-fw', 285);
    animD(800, 150,          '#Cart-fw', 'm 53,40 a 3,3 0 0 1 -3,3 3,3 0 0 1 -3,-3 3,3 0 0 1 3,-3 3,3 0 0 1 3,3 z', 0)
    animTranslate(500, 360,  '#Cart-bw', 285);
    animD(800, 100,          '#Cart-bw', 'm 53,40 a 3,3 0 0 1 -3,3 3,3 0 0 1 -3,-3 3,3 0 0 1 3,-3 3,3 0 0 1 3,3 z', 0)
    animTranslate(500, 360,  '#map', 197);
    animD(800, 100,          '#map', 'm 147,40 c 0,0.828427 0.33579,1.578427 0.87868,2.12132 0.54289,0.542894 1.29289,0.87868 2.12132,0.87868 0.82843,0 1.57843,-0.335786 2.12132,-0.87868 0.54289,-0.542893 0.87868,-1.292893 0.87868,-2.12132 0,-0.828427 -0.33579,-1.578427 -0.87868,-2.12132 -0.54289,-0.542894 -1.29289,-0.87868 -2.12132,-0.87868 -0.82843,0 -1.57843,0.335786 -2.12132,0.87868 -0.54289,0.542893 -0.87868,1.292893 -0.87868,2.12132 z', 0)
    animTranslate(500, 360,  '#map-inner', 197);
    animD(800, 100,          '#map-inner', 'm 153.34998,49.275572 c 0,1.656854 -1.34315,3 -3,3 -1.65685,0 -3,-1.343146 -3,-3 0,-1.656854 1.34315,-3 3,-3 1.70105,0.04419 2.95581,1.343146 3,3 z', 0)
    animTranslate(500, 360,  '#printer-top', 95);
    animD(800, 50,           '#printer-top', 'm 255.255,40 c 0,1.656854 -1.34315,3 -3,3 -1.65685,0 -3,-1.343146 -3,-3 0,-1.656854 1.34215,-3 2.999,-3 1.65685,0 3.001,1.343146 3.001,3 z', 0)
    animTranslate(500, 360,  '#printer-bottom', 95);
    animD(800, 50,           '#printer-bottom', 'm 249.25533,40 c -0.011,0.414214 0.084,0.797771 0.23576,1.167735 0.16285,0.347866 0.37147,0.671089 0.64292,0.953585 0.24935,0.216204 0.57257,0.457971 0.95358,0.642925 0.30368,0.118662 0.70933,0.213658 1.16774,0.235755 0.41421,-0.03315 0.80882,-0.106047 1.16774,-0.235755 0.36996,-0.184954 0.75947,-0.426721 0.99777,-0.676071 0.2162,-0.238301 0.41377,-0.484184 0.59873,-0.920439 0.12971,-0.314721 0.24681,-0.742472 0.23576,-1.167735 0,-0.336874 -0.106,-0.764626 -0.23576,-1.167735 -0.17614,-0.34344 -0.34918,-0.645378 -0.64292,-0.953585 -0.19411,-0.216204 -0.56152,-0.457971 -0.95358,-0.642925 -0.30368,-0.107614 -0.68172,-0.246804 -1.16774,-0.235755 -0.40317,-0.01105 -0.83092,0.095 -1.16774,0.235755 -0.41415,0.173906 -0.72634,0.415673 -0.95358,0.642925 -0.30459,0.315642 -0.45796,0.572573 -0.64292,0.953585 -0.15181,0.392061 -0.24681,0.786667 -0.23576,1.167735 z', 0)
    animTranslate(500, 360,  '#printer-light', 95);
    animD(800, 50,           '#printer-light', 'm 255.255,49.099998 c 0,1.656854 -1.34315,3 -3,3 -1.65685,0 -3,-1.343146 -3,-3 0,-1.656854 1.34315,-2.96875 3,-3 1.65685,0 3,1.343146 3,3 z', 0)
    animTranslate(500, 360,  '#printer-page', 95);
    animD(800, 50,           '#printer-page', 'm 255.255,49.099998 c 0,1.789437 -1.34315,3 -3,3 -1.65685,0 -3,-1.343146 -3,-3 0,-1.656854 1.34315,-3 3,-3 1.74524,-0.04419 3,1.343146 3,3 z', 0)
    animTranslate(500, 360,  '#X1', 9);
    animD(800, 0,            '#X1', 'm 353,40 c 0,0.828427 -0.33579,1.578427 -0.87868,2.12132 -0.54289,0.542894 -1.29289,0.87868 -2.12132,0.87868 -0.82843,0 -1.57843,-0.335786 -2.12132,-0.87868 -0.54289,-0.542893 -0.87868,-1.292893 -0.87868,-2.12132 0,-0.828427 0.33554,-1.578427 0.87818,-2.12132 0.54264,-0.542894 1.29239,-0.87868 2.12082,-0.87868 0.82843,0 1.57868,0.335786 2.12182,0.87868 0.54314,0.542893 0.87918,1.292893 0.87918,2.12132 z', 0)
    animTranslate(500, 360,  '#X2', 9);
    animD(800, 0,            '#X2', 'm 353,40 c 0,0.828427 -0.33579,1.578427 -0.87868,2.12132 -0.54289,0.542894 -1.29289,0.87868 -2.12132,0.87868 -0.82843,0 -1.57843,-0.335786 -2.12132,-0.87868 -0.54289,-0.542893 -0.87868,-1.292893 -0.87868,-2.12132 0,-0.828427 0.33554,-1.578427 0.87818,-2.12132 0.54264,-0.542894 1.29239,-0.87868 2.12082,-0.87868 0.82843,0 1.57868,0.335786 2.12182,0.87868 0.54314,0.542893 0.87918,1.292893 0.87918,2.12132 z', 0)
}

function click() {
    animsClear();
    if (open) {
        animOut();
    } else {
        animIn();
    }
    open = !open;
}
