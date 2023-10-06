{
    const submitBtnUpdateProfil = document.getElementById("submit");
    const formUpdateProfil = document.getElementById("form-update");
    const alert = document.getElementById("alert");
    const alertTxt=document.getElementById("error_text")

    function submit_new_data(){
        let updateData = new FormData(formUpdateProfil,submitBtnUpdateProfil);
        fetch("?action=updateProfil",{method: 'POST',body:updateData})
            .then(response=>response.json())
            .then(data=>changeAlert(data))
            .catch(error=>console.error(error));
    }

    function changeAlert(newText){
        alert.classList.remove("duration-[3000ms]");
        alert.classList.remove("opacity-0");
        alert.classList.remove("-z-10");
        alert.classList.add("z-30");
        alertTxt.innerHTML=newText;
        setTimeout(()=>{alert.classList.add("duration-[3000ms]");alert.classList.add("opacity-0");setTimeout(()=>{alert.classList.remove("z-20"),alert.classList.add("-z-10")},3000)},1000);
    }

    if (submitBtnUpdateProfil!==null){
        submitBtnUpdateProfil.addEventListener("click",function(click){click.preventDefault();submit_new_data()})
    }
}

