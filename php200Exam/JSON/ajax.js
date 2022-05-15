/*
let xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200){
        console.log(this.responseText);
        data = JSON.parse(this.responseText);
        console.log(data.student);
    }
};
xhttp.open("POST", "http://localhost:7070/student.json",true);
xhttp.send();
*/

function emailCheck() {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if(this.readyState == 200 && this.status == 4){
            result = JSON.parse(this.responseText).result;
            if(result == 'none'){
                document.getElementById('status').innerText = '사용 가능';
            }else{
                document.getElementById('status').innerText = '사용 불가';
            }
        }
    };
    emailAddress = document.getElementById('emailAddress').value;
    xhttp.open("POST", "./server.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("email="+emailAddress);
}
