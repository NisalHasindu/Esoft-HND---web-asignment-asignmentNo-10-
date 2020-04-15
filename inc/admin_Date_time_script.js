setInterval(time,1000);
function time(){
    var date = new Date();
    var year = date.getFullYear();
    var month = date.getMonth();
    var day = date.getDay();
    var hours = date.getHours();
    var minuts = date.getMinutes();
    var seconds = date.getSeconds();

    (hours<10)?hours="0"+hours:hours=hours;
    (minuts<10)?minuts="0"+minuts:minuts=minuts;
    (seconds<10)?seconds="0"+seconds:seconds=seconds;

    var displayDateTime = day+"/"+month+"/"+year+" | "+hours+":"+minuts+":"+seconds;
    document.getElementById("dateTime").innerText = displayDateTime;

}