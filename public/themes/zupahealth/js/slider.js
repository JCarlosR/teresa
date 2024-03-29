$(document).ready(function() {
    $('#rev-slider1').show().revolution({
        startwidth:1170,
        startheight:750,
        fullWidth:"on",
        dottedOverlay: "none",
        delay: 5000,
        navigation: {
            keyboardNavigation: "on",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            onHoverStop: "off",
            touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
            },
            arrows: {
                style: "metis",
                enable: true,
                hide_onmobile: true,
                hide_under: 768,
                hide_onleave: false,
                tmp: '',
                left: {
                    h_align: "left",
                    v_align: "center",
                    h_offset: 0,
                    v_offset: 0
                },
                right: {
                    h_align: "right",
                    v_align: "center",
                    h_offset: 0,
                    v_offset: 0
                }
            },
        },
        responsiveLevels: [1240,1024,778,480],
        gridwidth: [1240,1024,778,480],
        gridheight: [868,768,960,720],
    });

    $('#rev-slider2').show().revolution({
        startwidth:1170,
        startheight:810,
        fullWidth:"on",
        dottedOverlay: "none",
        delay: 5000,
        navigation: {
            keyboardNavigation: "on",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            onHoverStop: "off",
            touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
            },
            arrows: {
                style: "metis",
                enable: true,
                hide_onmobile: true,
                hide_under: 768,
                hide_onleave: false,
                tmp: '',
                left: {
                    h_align: "left",
                    v_align: "center",
                    h_offset: 0,
                    v_offset: 0
                },
                right: {
                    h_align: "right",
                    v_align: "center",
                    h_offset: 0,
                    v_offset: 0
                }
            },
        },
        responsiveLevels: [1240,1024,778,480],
        gridwidth: [1240,1024,778,480],
        gridheight: [868,768,960,720],
    });
});