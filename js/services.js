function loadService(serviceType) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("services-detail").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "services/" + serviceType + ".php", true);
    xhttp.send();
}

function loadDefault() {
    var htmlstring = document.getElementById("services-detail").innerHTML;
    htmlstring = (htmlstring.trim) ? htmlstring.trim() : htmlstring.replace(/^\s+/,'');
    
    if (htmlstring == '') {
        loadService('elderly-service');
    }

}