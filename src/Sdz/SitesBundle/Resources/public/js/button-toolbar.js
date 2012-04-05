$(function() {
    $( "#site-new_page-button" ).button({
        icons: {
            primary: "ui-icon-document"
        },
        text: false
    });
    
    
    $( "#site-plus-menu-button" ).button({
        icons: {
            secondary: "ui-icon-triangle-1-s"
        }
    }).click(function() {
        var menu = $( this ).parent().next().show().position({
            my: "left top",
            at: "left bottom",
            of: this
        });
        $( document ).one( "click", function() {
                menu.hide();
        });
        return false;
    })
    .parent()
        .buttonset()
        .next()
            .hide()
            .menu();
    
    $( "#site-sharing-button" ).button({
        icons: {
            primary: "ui-icon-gear"
        }
    });
    
    
});

