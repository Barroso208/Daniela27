function musica(){
    document.getElementById("audio").play();
    document.getElementById("video").play();
}


let password;
const xhr = new XMLHttpRequest();
xhr.onload = function(){
    if(xhr.status === 200){
        responseObject = JSON.parse(xhr.responseText);
        password = JSON.parse(this.responseText);
        $('*').css('overflow-y','hidden')
        $('input.enviar').on('click',function(e) {
        if($('#fname').val() == password.contraseña){
            $('div.password').css('display','none')
            $('*').css('overflow-y','')
    }
});
    }
}
xhr.open('GET','json.json',true);
xhr.send();






