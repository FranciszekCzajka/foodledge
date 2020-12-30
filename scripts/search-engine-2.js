$(".query-2").click(function () {
    $('.navbar input[type="text"]').on("keyup input click mouseenter focus", function () {
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".search-list-2");
        if (Cookies.get("lang") == 0) {
            if (inputVal.length) {
                $.get("scripts/script-pl.php", { term: inputVal }).done(function (data) {
                    resultDropdown.html(data);
                });
            } else {
                resultDropdown.empty();
            }
        } else {
            if (inputVal.length) {
                $.get("scripts/script-eng.php", { term: inputVal }).done(function (data) {
                    resultDropdown.html(data);
                });
            } else {
                resultDropdown.empty();
            }
        }
    });
});
