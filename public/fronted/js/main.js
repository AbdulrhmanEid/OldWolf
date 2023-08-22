let filter=document.querySelector(".bi-filter")
let mostSearched=document.querySelector(".most-searched")
let hideFilter=document.querySelectorAll(".hide-filter")
filter.onclick=function(){
    console.log(hideFilter);
    hideFilter.forEach((e)=>{
        if(e.classList.contains("d-none")){
            e.classList.remove("d-none")
            mostSearched.classList.add("pt-5")
        }
        else {
            e.classList.add("d-none")
            mostSearched.classList.remove("pt-5")
        }
    })
}