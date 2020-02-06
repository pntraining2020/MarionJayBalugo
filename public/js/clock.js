var $ = function(id) { return document.getElementById(id); }; // function to initialise getElementById and use it with $ on script.

var currentTime = function() {
    
    var date = new Date(); // initialise date fucntion to variable date
    var hours = clockHr(date.getHours());  // get current hr and conver that to 12hr clock to show 24hr clock just remove clockHr function
    var minute = singleDigit(date.getMinutes());// get current minute and check for signle digit value
    var seconds = singleDigit(date.getSeconds());// get current second and check for signle digit value
    
    var ampm = date.getHours()>=12 ? "PM":"AM";
    
    $("hrs").innerHTML=hours;
    $("min").innerHTML=minute;
    $("sec").innerHTML=seconds;
    $("ampm").innerHTML=ampm;

};

var singleDigit = function(num) { // function to check for single digit. If yes then it will add 0 before that.
    if (num < 10) {    return "0" + num; }
    else { return num; }
};

var clockHr = function(hrs) { // function to convert clock into 12 hr clock
    if (hrs > 12) {    return hrs-12; }
    else { return singleDigit(hrs); }
};

window.onload = function() {

    currentTime(); // will display the clock as soon page load.
    setInterval(currentTime,500); // change the time ever half second
    
    
};