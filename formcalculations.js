

 var cake_prices = new Array();
 cake_prices["Round6"]=1500;
 cake_prices["Round8"]=2500;
 cake_prices["Round10"]=3500;
 cake_prices["Round12"]=4000;
 
 //Set up an associative array 
 //The keys represent the filling type
 //The value represents the cost of the filling i.e. Lemon filling is $5,Dobash filling is $9
 //We use this this array when the user selects a filling from the form
 var filling_prices= new Array();
 filling_prices["None"]=0;
 filling_prices["Whip"]=500;
 filling_prices["Mocha"]=300;
 filling_prices["Caramel"]=400;
 filling_prices["Shot"]=500;
 
	 
	 
// getCakeSizePrice() finds the price based on the size of the cake.
// Here, we need to take user's the selection from radio button selection
function getCakeSizePrice()
{  
    var cakeSizePrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the cake the user Chooses name=selectedCake":
    var selectedCake = theForm.elements["selectedcake"];
    //Here since there are 4 radio buttons selectedCake.length = 4
    //We loop through each radio buttons
    for(var i = 0; i < selectedCake.length; i++)
    {
        //if the radio button is checked
        if(selectedCake[i].checked)
        {
            //we set cakeSizePrice to the value of the selected radio button
            //i.e. if the user choose the 8" cake we set it to 25
            //by using the cake_prices array
            //We get the selected Items value
            //For example cake_prices["Round8".value]"
            cakeSizePrice = cake_prices[selectedCake[i].value];
            //If we get a match then we break out of this loop
            //No reason to continue if we get a match
            break;
        }
    }
    //We return the cakeSizePrice
    return cakeSizePrice;
}

//This function finds the filling price based on the 
//drop down selection
function getFillingPrice()
{
    var cakeFillingPrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling = theForm.elements["filling"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice = filling_prices[selectedFilling.value];

    //finally we return cakeFillingPrice
    return cakeFillingPrice;
}

//candlesPrice() finds the candles price based on a check box selection
function candlesPrice()
{
    var candlePrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the checkbox id="includecandles"
    var includeCandles = theForm.elements["includecandles"];

    //If they checked the box set candlePrice to 5
    if(includeCandles.checked==true)
    {
        candlePrice=500;
    }
    //finally we return the candlePrice
    return candlePrice;
}

function insciptionPrice()
{
    //This local variable will be used to decide whether or not to charge for the inscription
    //If the user checked the box this value will be 20
    //otherwise it will remain at 0
    var inscriptionPrice=0;
    //Get a refernce to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the checkbox id="includeinscription"
    var includeInscription = theForm.elements["includeinscription"];
    //If they checked the box set inscriptionPrice to 0
    if(includeInscription.checked==true){
        inscriptionPrice=0;
    }
    //finally we return the inscriptionPrice
    return inscriptionPrice;
}
        
function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var cakePrice = getCakeSizePrice() + getFillingPrice() + candlesPrice() + insciptionPrice();
    
    //display the result
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "총 결제 금액은 "+cakePrice +"원 입니다.";

}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}


//시계

/* ********** 시계 보여주기 ********** */
function show_time(){
    var time = document.getElementById( "time" );
    
    // 1000ms 단위로 시간 갱신 시키기
    window.setInterval("get_current_time()", 1000); 
    get_current_time();
    }
    
    
    /* ********** 현재 시간 가져오기 ********** */
    function get_current_time(){
    var time = document.getElementById( "time" );
     var now = new Date();
    var week = new Array("일","월","화","수","목","금","토");
    
    
    var clock = now.getFullYear() + "년 ";
    clock += (now.getMonth() + 1) + "월 ";
    clock += now.getDate() + "일 ";
    clock += week[now.getDay()] + "요일 ";
    
    
    clock += now.getHours() + "시 ";
    clock += now.getMinutes() + "분 ";
    
    
    time.innerHTML= clock;
    }

//계산기
    function addOutput(num) {
        var display = document.getElementById("display");
        display.value = display.value + num;
      }
       
      function calculate() {
        var display = document.getElementById("display");
        var result = eval(display.value);
        var displayResult = document.getElementById("result");
        displayResult.value = result;
      }
       
      function reset() {
        var display = document.getElementById("display");
        display.value = "";
        var displayResult = document.getElementById("result");
        displayResult.value = "";
      }
       
      function del() {
        var display = documnet.getElementById("display");
        display.value = display.value.substring(0, display.value.length - 1);
      }