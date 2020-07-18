$(() => {

    function slideOut() {
        setTimeout(() => {
            $("#response").slideUp("slow", () => { });
        }, 2000);
    }

    $("#response").hide();

    $(".list ul").sortable({
        opacity: 0.8, cursor: 'move', update: function () {
            var order = $(this).sortable("serialize") + '&update=update';
            $.post("update-list.php", order, (theResponse) => {
                $("#response").html(theResponse);
                $("#response").slideDown('slow');
                slideOut();
            })
        }
    })

})