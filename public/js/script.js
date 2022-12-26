function toggle(source){
    let checkboxes=document.getElementsByName(option_a);
    let option=checkboxes.length;
    console.log(option);
    for(var i=0; i<option;i++){
     checkboxes[i].checked=true;
    }
     }
