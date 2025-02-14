document.getElementById("checkParent").addEventListener("click",function(){
    var checkParent = document.getElementById("checkParent");
    if(checkParent.checked == true){
        document.getElementById("parentCategory").style.display = "block";
    }else{
        document.getElementById("parentCategory").style.display = "none";
    }
});
window.addEventListener("load",function(){
    var url = this.window.location.href;
    
    console.log(url);
})