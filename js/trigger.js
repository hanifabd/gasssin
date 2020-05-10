function opendiv(divpart) {
    var page=document.getElementById(divpart);
    if (!page) return false;
    page.style.display='block';
    page.style.visibility='visible';
    return true;
}

function closediv(divpart) {
    var page=document.getElementById(divpart);
    if (!page) return false;
    page.style.display='none';
    page.style.visibility='hidden';
    return true;
}

function pagechange(frompage, topage) {
    var page=document.getElementById('page_'+frompage);
    if (!page) return false;
    page.style.visibility='hidden';
    page.style.display='none';
  
    page=document.getElementById('page_'+topage);
    if (!page) return false;
    page.style.display='block';
    page.style.visibility='visible';
  
    return true;
}

function divchange(frompage, topage) {
    var page=document.getElementById('div_'+frompage);
    var menu=document.getElementById('menu_'+frompage);
    if (!page) return false;
    page.style.visibility='hidden';
    page.style.display='none';
    menu.classList.remove('active');
  
    page=document.getElementById('div_'+topage);
    var menu=document.getElementById('menu_'+topage);
    if (!page) return false;
    page.style.display='block';
    page.style.visibility='visible';
    menu.classList.add('active');
  
    return true;
}

function animateCSS(element, animationName, callback) {
    const node = document.querySelector(element)
    node.classList.add('animated', animationName)

    function handleAnimationEnd() {
        node.classList.remove('animated', animationName)
        node.removeEventListener('animationend', handleAnimationEnd)

        if (typeof callback === 'function') callback()
    }

    node.addEventListener('animationend', handleAnimationEnd)
}