function musica(){
    document.getElementById("audio").play();
    document.getElementById("video").play();
}
$('*').css('overflow-y','hidden')
$('input.enviar').on('click',function(e) {
    if($('#fname').val() == "soylamejor"){
        $('div.password').css('display','none')
        $('*').css('overflow-y','')
    }
});
