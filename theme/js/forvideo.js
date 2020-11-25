$("body").on("click",".videobutton",function(){
	$(".myvideosrc").attr("src",$(this).attr("src"));
});
$("body").on("click",".photobutton",function(){
	$(".myimgsrc").css("background-image",$(this).css("background-image"));
});