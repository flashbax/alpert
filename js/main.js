function check(x) {
    elements = document.getElementsByClassName(x);
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.backgroundColor="blue";
    }
}