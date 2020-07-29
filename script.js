let linksMenu = document.querySelectorAll('nav li a')

let loca = location.pathname
    for(let link of linksMenu){
       let  linkS = String(link.href)
            if(linkS.includes(loca) ){
                link.parentElement.classList.add('ativo')
               
            }
      
}