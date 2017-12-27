jQuery(document).ready(function () {
    adjust();

    jQuery('a').click(function () {
        return false;
    });
});

jQuery(document).resize(function () {
    adjust();
});

function adjust() {
    let tid = jQuery('.stretchto');
    for (let i = 0; i < tid.length; i++) {
        let titem = jQuery(tid[i]);
        let t = jQuery('#' + titem.attr('target'));
        let theight = t.height();
        titem.height(theight);
        t.parent().height(theight);
    }
}