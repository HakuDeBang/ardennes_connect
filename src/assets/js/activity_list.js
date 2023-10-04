let filterIsOpened = false;
let activeFilter = [];

document.addEventListener("DOMContentLoaded", () => {
    let filterWrapper = document.getElementById("filter-wrapper");
    let header = document.getElementById("header")

    for (const [key,value] of Object.entries(tags)){
        tagComponent(value.name,key,filterWrapper,false,header,false)
    }
    
    // récupération des cartes de companies
    {
        let activityList = document.getElementById("activity_list")

        function showCompanies(filter){
            for (const[key,value] of Object.entries(company)){
                companyCard(key,value.name,value.adress,value.cover,activityList);
            }
        }

        showCompanies();
    }

    // gestion du menu de filtres
    {
        let filterIcon = document.getElementById("filter-icon");
        
        filterIcon.addEventListener("click",()=>{filterIconClickHandler()});

        function filterIconClickHandler(){
            toggleSubTags();
            filterIcon.classList.toggle("rotate-90");
            filterWrapper.classList.toggle("flex-wrap")
            filterWrapper.classList.toggle("overflow-x-scroll")
        }

        function toggleSubTags(){
            if (filterIsOpened){
                for (const [key,value] of Object.entries(subTagList)){
                    value.classList.add("hidden")
                }
                filterIsOpened = false;
            }
            else{
                for (const [key,value] of Object.entries(subTagList)){
                    value.classList.remove("hidden")
                }
                filterIsOpened = true;
            }
        }
    }

    
});