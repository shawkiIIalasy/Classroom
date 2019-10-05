function HandleTimeSelect(a){
    $(a).closest(".timepickercontainer").attr("data-value", $(a).text());
    $(a).closest(".timepickercontainer").find("button").first().html($(a).text() + " <i class='caret'></i>");
    $(a).closest(".timepickercontainer").find("li.active").each(function() {$(this).removeClass("active");});
    $(a).parent().addClass("active");
}
function ScrollToActive(btn){
    //console.log("scrolling down "+  $(btn).closest(".timepickercontainer").find(".dropdown-menu").first());
    //$(btn).closest(".timepickercontainer").find(".dropdown-menu").first().scrollTop(600);
    $(btn).closest(".timepickercontainer").find(".dropdown-menu").first().on('show.bs.dropdown', function () {
        $(btn).closest(".timepickercontainer").find(".dropdown-menu").first().scrollTop(600);
        console.log("performing");
        
    });
}
function SetScrollValue(ul){
    $(ul).scrollTop(600);
    console.log("setting scroll");
}
function SetScrollValues(){
   $(".dropdown.focus-active").on("shown.bs.dropdown", function() {$(this).find(".dropdown-menu li.active a").focus();});
}