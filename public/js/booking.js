function updateClock(){
    var now = new Date();
    var dname = now.getDay(),
        mo = now.getMonth(),
        dnum = now.getDate(),
        yr = now.getFullYear(),
        hou = now.getHours(),
        min = now.getMinutes(),
        sec = now.getSeconds(),
        pe = "AM";

        if(hou >= 12){
          pe = "PM";
        }
        if(hou == 0){
          hou = 12;
        }
        if(hou > 12){
          hou = hou - 12;
        }

        Number.prototype.pad = function(digits){
          for(var n = this.toString(); n.length < digits; n = 0 + n);
          return n;
        }

        var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
        var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        var ids = ["daynum", "month",  "year", "hour", "minutes", "seconds", "period"];
        var values = [dnum.pad(2), months[mo],  yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
        for(var i = 0; i < ids.length; i++)
        document.getElementById(ids[i]).firstChild.nodeValue = values[i];
  }

  function initClock(){
    updateClock();
    window.setInterval("updateClock()", 1);
  }







let arr = new Set();
function randomNumber(min, max) { // min and max included 
    return Math.floor(Math.random() * (max - min + 1) + min)
}
function load_res() {
    var s = Array.from(arr).sort();
    document.getElementById('res').innerHTML = "";
    if (arr.size > 0) {
        document.getElementById('modal-title').innerHTML = "Selected seats : "+arr.size;
        for (var i =0 ;i<s.length-1;i++) {
            document.getElementById('res').innerHTML += s[i] + ", ";
        }
        document.getElementById('res').innerHTML += s[s.length-1];
    }
    else {
        document.getElementById('modal-title').innerHTML = "No Seats selected";
    }
}

function deselect(name) {
    arr.delete(name);
    document.getElementsByName(name)[0].removeAttribute("style");
    document.getElementsByName(name)[0].setAttribute('onclick', 'select(\'' + name + '\')');
}
function select(name) {
    arr.add(name);
    document.getElementsByName(name)[0].style.backgroundColor = "rgb(93, 150, 7)";
    document.getElementsByName(name)[0].style.color = "white";
    document.getElementsByName(name)[0].setAttribute('onclick', 'deselect(\'' + name + '\')');
}
function generate_table() {
    var total_row = 15;
    var total_seat_per_row = 20;
    var body = document.getElementById('screen');
    var tbl = document.createElement('table');
    tbl.setAttribute('id', 'tbl-screen');
    var tbdy = document.createElement('tbody');
    var tr = document.createElement('tr');
    tr.setAttribute('id', 'heading_row')
    var th = document.createElement('th');
    var h2 = document.createElement('h2');
    h2.setAttribute('id','heading-h2');

    h2.appendChild(document.createTextNode("Screen Facing this side"));
    th.appendChild(h2);
    th.setAttribute('id', 'heading');

    th.setAttribute('colSpan', total_seat_per_row + 2);

    tr.appendChild(th);
    tbdy.appendChild(tr);
    for (var i = 0; i < total_row; i++) {
        var tr = document.createElement('tr');
        var td = document.createElement('td');
        var seatno = String.fromCharCode(i + 65);
        td.appendChild(document.createTextNode(seatno));
        td.setAttribute('id', 'row_no');
        tr.appendChild(td);
        for (var j = 1; j <= total_seat_per_row; j++) {

            if (randomNumber(1, 99) % 50 == 0) {
                var td = document.createElement('td');
                td.setAttribute('id', 'tbl_not_available');
                td.setAttribute('name', seatno + j);

                var img = document.createElement('img');
                img.setAttribute('src', 'images/seat/seat_cross.svg');
                td.appendChild(img);
                td.appendChild(document.createTextNode(j));
                tr.appendChild(td);
            }
            else if (randomNumber(1, 25) % 2 == 0) {
                var td = document.createElement('td');
                td.setAttribute('id', 'tbl_not_available');
                td.setAttribute('name', seatno + j);

                var img = document.createElement('img');
                img.setAttribute('src', 'images/seat/seat_red.svg');
                td.appendChild(img);
                td.appendChild(document.createTextNode(j));
                tr.appendChild(td);
            }
            else {
                var td = document.createElement('td');
                td.setAttribute('id', 'tbl_data');
                td.setAttribute('name', seatno + j);
                td.setAttribute('onclick', 'select(\'' + seatno + j + '\')');
                var img = document.createElement('img');
                img.setAttribute('src', 'images/svg/seat.svg');
                td.appendChild(img);
                td.appendChild(document.createTextNode(j));
                tr.appendChild(td);
            }
            if (parseInt(total_seat_per_row / 2) == j) {
                var td = document.createElement('td');
                td.appendChild(document.createTextNode(""));
                tr.appendChild(td);
            }

        }
        var td = document.createElement('td');
        var seatno = String.fromCharCode(i + 65);
        td.appendChild(document.createTextNode(seatno));
        td.setAttribute('id', 'row_no');
        tr.appendChild(td);

        tbdy.appendChild(tr);
        if (seatno == "C") {
            var tr = document.createElement('tr');
            var td = document.createElement('td');
            td.setAttribute('colspan', total_seat_per_row + 3);
            td.setAttribute('class', 'divider');
            td.appendChild(document.createTextNode("Silver"));
            tr.appendChild(td);
            tbdy.appendChild(tr);
        }
        if (seatno == "K") {
            var tr = document.createElement('tr');
            var td = document.createElement('td');
            td.setAttribute('colspan', total_seat_per_row + 3);
            td.setAttribute('class', 'divider');
            td.appendChild(document.createTextNode("Gold"));
            tr.appendChild(td);
            tbdy.appendChild(tr);
        }
        if (i==total_row-1) {
            var tr = document.createElement('tr');
            var td = document.createElement('td');
            td.setAttribute('colspan', total_seat_per_row + 3);
            td.setAttribute('class', 'divider');
            td.appendChild(document.createTextNode("Platinum"));
            tr.appendChild(td);
            tbdy.appendChild(tr);
        }
    }
    tbl.appendChild(tbdy);
    body.appendChild(tbl);
    var ticket_count = document.querySelectorAll('[id=tbl_data]').length;
    document.getElementById("ticket_available_status").innerHTML = " : " + ticket_count + " / " + total_row * total_seat_per_row;

    if(parseInt((ticket_count/(total_row * total_seat_per_row))*100)==0)
    {
        $("#exampleModal").modal('show');
        document.getElementById("ticket_closed").style.display="block";
        document.getElementById("ticket_close_soon").style.display="none";
    }
    else if(parseInt((ticket_count/(total_row * total_seat_per_row))*100)<20)
    {
        document.getElementById("ticket_closed").style.display="none";
        document.getElementById("ticket_close_soon").style.display="block";
    }
    else
    {
        document.getElementById("ticket_closed").style.display="none";
        document.getElementById("ticket_close_soon").style.display="none";
    }
}
