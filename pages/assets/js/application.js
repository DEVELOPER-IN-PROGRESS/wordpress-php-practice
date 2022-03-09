let isIconClicked = false ;
let headerAccordion = document.querySelectorAll('.ni-header__accordion');
let listElems = document.querySelectorAll('.ni-navmenu__nav-li');

function hamBurger(x) {
     x.classList.toggle("change");
    openCloseMenu();
}

function closeSideBar(){
    let x = document.getElementById('hamburgerMenu');
    hamBurger(x) ;
}

function openCloseMenu(){
     isIconClicked = !isIconClicked ;

     if(isIconClicked){
       document.getElementById('navmenu2').classList.toggle('ni-header__sidebar--active');
     }

     else{
       document.getElementById('navmenu2').classList.remove('ni-header__sidebar--active');
        closePanels();
    }
}

function closePanels(){
    let accordion = document.querySelectorAll('.ni-header__accordion-panel');
    accordion.forEach( (elem) => {
        if(elem.style.display == 'block'){
            elem.style.display = 'none' ;
        }
        else if(elem.style.maxHeight != null){
            elem.style.maxHeight = null ;
        }
    })
}

function niAccordion(){
       closePanels();
   let  panel = this.nextElementSibling;
   console.log(panel);
        panel.style.display = 'block';
         if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
          panel.style.display = 'none';

        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
          panel.style.display = 'block' ;
        }
}

function niDropdown(){
    let content = this.children[2];
    content.style.display = 'block' ;
    content.style.opacity = 1 ;

}

function niCloseDropdown(){
    let content = this.children[2];
    content.style.display = 'none' ;
}

function headerMenu(){
     let length = window.innerWidth ;
    if(length> 767 && length < 992){
       let linklist = document.querySelectorAll('.ni-navmenu__nav-a');
       let dropDownList = document.querySelectorAll('.ni-header__accordion-panel');

       linklist.forEach( (item) =>{
        item.addEventListener('click' , (e)=> {e.preventDefault() ; } )
       item.href='#'
    })

    }

}



headerAccordion.forEach( (el) => el.addEventListener('click', niAccordion ) )
window.addEventListener( 'DOMContentLoaded' , headerMenu) ;
//listElems.forEach( (el) => el.addEventListener('mouseover', niDropdown ) )
//listElems.forEach( (el) => el.addEventListener('mouseout', niCloseDropdown ) )
