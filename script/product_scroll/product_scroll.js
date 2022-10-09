
function horizontal_scroll(target, right = true) {
    if(!right) {
        select(target).scrollBy({left: 300, behaviour: 'smooth'});
        return false;
    }

    select(target).scrollBy({left: -300, behaviour: 'smooth'})
    return true;


}