var inpPrice = document.getElementById("inpPrice");


 var  inpTaxes = document.getElementById("inpTaxes");
 var  inpAds = document.getElementById("inpAds");
 var  inpDiscount = document.getElementById("inpDiscount");
 var  total = document.getElementById("total");
 


 inpPrice.onkeyup = ()=>{
     total.innerHTML = +inpPrice.value + +inpTaxes.value + +inpAds.value - inpDiscount.value;
    total.style.background = "green";
}

 inpTaxes.onkeyup = (e)=>{
    if(inpPrice != null && inpPrice.value != 0){
      total.innerHTML = +inpPrice.value + +inpTaxes.value + +inpAds.value - inpDiscount.value;
    }
}

 inpAds.onkeyup = ()=>{
    if(inpPrice != null && inpPrice.value != 0){
      total.innerHTML = +inpPrice.value + +inpTaxes.value + +inpAds.value - inpDiscount.value;
    }
}

 inpDiscount.onkeyup = ()=>{
    if(inpPrice != null && inpPrice.value != 0){
      total.innerHTML = +inpPrice.value + +inpTaxes.value + +inpAds.value - inpDiscount.value;
    }
}


function hello(){
  console.log("test");
}