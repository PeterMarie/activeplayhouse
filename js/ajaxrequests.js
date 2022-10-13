
        function ajax(url, cFunction) {
            if (window.XMLHttpRequest) {
                // code for modern browsers
                xhttp = new XMLHttpRequest();
            } else {
                // code for old IE browsers
                xhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                cFunction(this);
                }
            };
            xhttp.open("GET", url, true);
           /* xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");*/
            xhttp.send();
        }

        function ajaxpost(url, cFunction, formData){
            var xhr = new XMLHttpRequest();
            xhr.open("POST", url);
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    cFunction(this);
                }
            };
            xhr.send(formData);
        }

/* Controller functions */ 
    function find_referrer(e){
        var id = document.getElementById('ref_id').value;
        if(id.length > 5){
            if(isNaN(id)){
                document.getElementById('referrer_result').innerHTML = "<span style= \"color: red;\"> REFERRER NOT FOUND </span> " ;
                document.getElementById('submit_button').disabled = "disabled";
            } else {
                document.getElementById('referrer_result').innerHTML = "<i style= \"color: darkgray;\"> searching... </i> " ;
                var url = "../getreferrer.php?ref_id=".concat(id);
                ajax(url, show_referrer);
            }
        }
    }

/* Action functions */
    function show_referrer(response){
        var data = JSON.parse(response.responseText);
        if(data['status'] == 'success'){
            document.getElementById('referrer_result').innerHTML = "<span style= \"color: darkgreen; font-size: 90%; text-shadow: 1px 1px black;\">".concat(data['name'], "</span>");
            document.getElementById('submit_button').disabled = "";
        } else {
            document.getElementById('referrer_result').innerHTML = "<span style= \"color: red;\"> REFERRER NOT FOUND </span> " ;
            document.getElementById('submit_button').disabled = "disabled";
        }
    }