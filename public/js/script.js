//navbar transition
window.addEventListener('scroll', function () {
    var navbar = document.querySelector('.navbar');

    if (window.scrollY > 50) {
        navbar.classList.add('transparent');
    } else {
        navbar.classList.remove('transparent');
    }
});

function popup(mylink, windowname) {
    if (! window.focus)return true;
    var href;
    if (typeof(mylink) == 'string') href=mylink;
    else href=mylink.href;
    window.open(href, windowname, 'width=400,height=200,scrollbars=yes');
    return false;
}