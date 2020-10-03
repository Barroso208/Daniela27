function musica(){
    document.getElementById("audio").play();
    document.getElementById("video").play();
}



const xhr = new XMLHttpRequest();
xhr.onload = function(){
    if(xhr.status === 200){
        hajksdfhas = JSON.parse(this.responseText);
        $('*').css('overflow-y','hidden')
        $('input.enviar').on('click',function(e) {
        if($('#fname').val() == hajksdfhas.contraseña){
            $('div.password').css('display','none')
            $('*').css('overflow-y','')
    }
});
    }
}
xhr.open('GET','json.json',true);
xhr.send();






