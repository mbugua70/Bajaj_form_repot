const selectEls = document.getElementById("sub_1_15");
const ownerOne = document.getElementById("ownerone");
const ownerTwo = document.getElementById("ownertwo");

selectEls.addEventListener("input",function(){
    valueOne = $("#yes_recommend").val()
    valueTwo = $("#no_recommend").val();

    if($("#sub_1_15").val() !== "" || undefined){
        if($("#sub_1_15").val() === valueOne ){
            ownerOne.style.display = "block";
            ownerTwo.style.display = "none"
          }else{
            ownerOne.style.display = "none";
            ownerTwo.style.display = "block";
          }
    }else{
        ownerOne.style.display = "none";
        ownerTwo.style.display = "none";
    }


    },false);