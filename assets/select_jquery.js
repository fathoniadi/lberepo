$(document).ready(function() {
// Initializing arrays with bidangminat names.
var AJK = [{
display: "IoT",value: "IoT"},
{display: "Computer Networking", value: "Computer-Networking"}];
var MI = [{}];
var LP = [{}];
// Function executes on change of first select option field.
$("#lbe").change(function() {
var select = $("#lbe option:selected").val();
switch (select) {
case "AJK":
bidangminat(AJK);
break;
case "MI":
bidangminat(MI);
break;
case "LP":
bidangminat(LP);
break;
default:
$("#bidangminat").empty();
$("#bidangminat").append("<option>--Select--</option>");
break;
}
});

function lbe(arr) {
$("#lbe").empty(); //To reset cities
$("#lbe").append("<option>--Select--</option>");
$(arr).each(function(i) { //to list cities
$("#lbe").append("<option value=\"" + arr[i].value + "\">" + arr[i].display + "</option>")
});
}
// Function To List out Cities in Second Select tags
function bidangminat(arr) {
$("#bidangminat").empty(); //To reset cities
$("#bidangminat").append("<option>--Select--</option>");
$(arr).each(function(i) { //to list cities
$("#bidangminat").append("<option value=\"" + arr[i].value + "\">" + arr[i].display + "</option>")
});
}


});