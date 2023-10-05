function companyCard(id,name,adress,cover,parentNode){
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
            tagsWrapper.className = "flex flex-wrap tag-wrapper";
            for (const[key,value] of Object.entries(activeFilter)){
                if (tagCategorise[key+","+id]==="TRUE"){
                    let tag = tags[id];
                    tagComponent(tag.name,key,tagsWrapper,false,tagsWrapper,true);
                }
            }
            for (const[key,value] of Object.entries(activeSubtag)){
                if (subTagCategorise[key+","+id]==="TRUE"){
                    let tag = subTags[id];
                    tagComponent(tag.name,key,tagsWrapper,true,tagsWrapper,true);
                }
            }
        informations.appendChild(tagsWrapper);

        let coverImg = document.createElement("img");
        coverImg.className = "aspect-square h-24";
        coverImg.src = "src/assets/img/upload/company_cover/"+cover;
    card.appendChild(coverImg);

    parentNode.appendChild(card)
}