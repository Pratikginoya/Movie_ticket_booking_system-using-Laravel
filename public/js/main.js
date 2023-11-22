document.getElementById("page-title").style.fontSize = "30px";
function set(val){
    var str = document.getElementById(val).innerHTML;
    document.getElementById('location-button').innerHTML = str;
    document.getElementById('location-button').value = str;
    document.getElementById('location-button').name = str;
}
var district = [  
    "Ariyalur",
    "Chennai",
    "Coimbatore",
    "Cuddalore",
    "Dharmapuri",
    "Dindigul",
    "Erode",
    "Kanchipuram",
    "Kanyakumari",
    "Karur",
    "Krishnagiri",
    "Madurai",
    "Nagapattinam",
    "Namakkal",
    "Nilgiris",
    "Perambalur",
    "Pudukkottai",
    "Ramanathapuram",
    "Salem",
    "Sivaganga",
    "Thanjavur",
    "Theni",
    "Thoothukudi (Tuticorin)",
    "Tiruchirappalli",
    "Tirunelveli",
    "Tiruppur",
    "Tiruvallur",
    "Tiruvannamalai",
    "Tiruvarur",
    "Vellore",
    "Viluppuram",
    "Virudhunagar"
 ];
 
for(i=0;i<district.length;i++){
    document.getElementById('location-result').innerHTML += '<li><a onclick="set(this.id)" class="dropdown-item" href="javascript:void(0)" id="dis'+i+'">'+district[i]+'</a></li>';

}












