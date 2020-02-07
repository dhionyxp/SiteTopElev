// jQuery.fn.toggleText = function(a,b) {

//     return   this.html(this.html().replace(new RegExp("("+a+"|"+b+")"),function(x){return(x==a)?b:a;}));
    
//     }

//     this.button = document.getElementById("maisservico")
    
//     $(document).ready(function(){
    
//     $('.tgl').before('<button>Mais</button>');
    
//     $('.tgl').css('display', 'none')
    
//     $('button', '#box-toggle').click(function() {
    
//     $(this).next().slideToggle('slow')
    
//     .siblings('.tgl:visible').slideToggle('fast');
    
//     // aqui começa o funcionamento do plugin
    
//     $(this).toggleText('Mais','Menos')
    
//     .siblings('span').next('.tgl:visible').prev()
    
//     .toggleText('Mais','Menos')
    
//     });
    
// })
{

    var button = document.getElementById('maisservicos');
    var a1 = document.getElementById('MudarRobson');
    var a2  = document.getElementById('MudarMarco');

    button.onclick = () =>{
        Mudarestado('minhaDiv');
    } 

    function Mudarestado(el) {
        var display = document.getElementById(el).style.display || "none";
        

        if(display == "none"){
            document.getElementById(el).style.display = 'block';
            button.textContent = 'Menos Serviços';
        }
        else{
            document.getElementById(el).style.display = 'none';
            button.textContent = 'Mais Serviços';
        }
    }

    function Mudarestadoo(el) {
        var display = document.getElementById(el).style.display || "none";
        

        if(display == "none"){
            document.getElementById(el).style.display = 'block';
            if(el == 'minhaDiv2')
                a2.textContent = 'Ler Menos';
            else
                a1.textContent = 'Ler Menos';
        }
        else{
            document.getElementById(el).style.display = 'none';
            if(el == 'minhaDiv2')
                a2.textContent = 'Ler Mais';
            else
                a1.textContent = 'Ler Mais';
        }
        // else if(display == "none" && el == "minhaDiv3"){
        //     document.getElementById(el).style.display = 'none';
        //     a1.textContent = 'Ler Mais';
        // }
        // else if(display == "block" && el == "minhaDiv3"){
        //     document.getElementById(el).style.display = 'none';
        //     a1.textContent = 'Ler Mais';
        // }
    }
}