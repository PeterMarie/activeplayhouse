
    function autoResizeDiv(){
        document.getElementById('fullbody').style.height = window.innerHeight +'px';
        }
    window.onload = autoResizeDiv;
    window.onresize = autoResizeDiv;

    if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
 } else {
    // code for old IE browsers
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
}