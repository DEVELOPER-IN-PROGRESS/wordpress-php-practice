alert('js load');

let color = document.getElementById('favcolor').value ;
let checked = document.getElementById('checked').value ;


console.log(color);

 if(checked){
     document.body.style.color = `${color} !important`  ;
 }

