/*============= ACORDEON INPUT CARD ============*/
const cardContent = document.getElementsByClassName("content"),
    cardHeader = document.querySelectorAll('.card__header')

function toogleCard(){
    let itemClass = this.parentNode.className

    for(i = 0; i < cardContent.length; i++){
        cardContent[i].className = 'content card__close'
    }
    if(itemClass === 'content card__close'){
        this.parentNode.className = 'content card__open'
    }
}

cardHeader.forEach((el)=>{
    el.addEventListener('click', toogleCard)
})
