function Percentage(){

    //to retrieve the value for each element 
    var sm1 = parseFloat(document.getElementById('midsem').value);
    var sm2 = parseFloat(document.getElementById('endsem').value);

     //to calculate the students percentage
     var percent1 = (sm1/50)*60;
     var percent2 = (sm2/50)*40;

     var totalmark = percent1 + percent2;

     //to display the values into the table in html page
    document.getElementById('outputdiv').innerHTML=totalmark.toFixed(2);
    document.getElementById('outputdiv2').innerHTML=percent1.toFixed(2);
    document.getElementById('outputdiv3').innerHTML=percent2.toFixed(2);



}