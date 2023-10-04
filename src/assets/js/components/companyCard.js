function companyCard(id,name,adress,cover,parentNode){
    console.log({"id":id,
                 "nom":name,
                 "adresse":adress,
                 "cover":cover})
    let card = document.createElement("div");
    card.dataset.id = id
    card.className = "bg-white flex rounded-md w-full justify-between overflow-hidden";
    
        let informations = document.createElement("div");
        informations.classList = "flex flex-col h-full justify-between pb-2 ml-2";
    card.appendChild(informations);

            let companyContactDetails = document.createElement("div");
            companyContactDetails.className="flex flex-col";
                let companyName = document.createElement("span");
                companyName.className = "font-semibold";
                companyName.innerText = name;
            companyContactDetails.appendChild(companyName);
        

                let companyAdress = document.createElement("span");
                companyAdress.className = "font-semibold text-xs";
                companyAdress.innerText = adress;
            companyContactDetails.appendChild(companyAdress);
        informations.appendChild(companyContactDetails);
        
            let tagsWrapper = document.createElement("div");
            tagsWrapper.className = "flex flex-wrap";
        informations.appendChild(tagsWrapper);

        let coverImg = document.createElement("img");
        coverImg.className = "aspect-square h-24";
        coverImg.src = "../assets/img/upload/company_cover/"+cover;
    card.appendChild(coverImg);

    parentNode.appendChild(card)
}