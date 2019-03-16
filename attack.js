var span = document.createElement("span");
var div = document.createElement("div");
span.style='color:red';
div.style='border:1px solid blue;padding:0.5em;';
div.innerHTML = document.cookie;
span.innerHTML="--javascript loaded from other site.--";
document.body.append(span);
document.body.append(div);

var input = document.getElementsByTagName("input")[0];
if (input){
    input.onkeypress = function(e){
        console.log(e.key);
        if(e.key){
            div.innerHTML = input.value + e.key;
        }else{
            div.innerHTML = input.value;
        }
    }
}

var t_area = document.getElementsByTagName("textarea")[0];
if(t_area){
    t_area.onkeypress = function(e){
        console.log(e.key);
        if(e.key){
            div.innerHTML = t_area.value + e.key;
        }else{
            div.innerHTML = t_area.value;
        }
    }
}
