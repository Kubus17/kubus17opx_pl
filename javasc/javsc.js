var now = new Date();
var d = now.getDay();
var nd = now.getDate();
var mm = now.getMonth();
var y = now.getFullYear();
var dzien = ["niedziela", "poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota"];
var mies = ["styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "pażdziernik", "listopad", "grudzień"];
document.getElementById("nag").innerHTML = 'Mamy dzisiaj: ' + dzien[d] + ' ' + nd + ' ' + mies[mm] + ' ' + y;
