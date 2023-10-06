let filterIsOpened = false;
let activeFilter = {};
let activeSubtag = {};

function showCompanies(filter, parentNode) {
    parentNode.replaceChildren();
    for (const [key, value] of Object.entries(company)) {
        if (Object.keys(activeFilter).length != 0) {
            for (const [cle, valeur] of Object.entries(activeFilter)) {
                if (tagCategorise[cle + "," + key] === "TRUE") {
                    if (Object.keys(activeSubtag).length != 0) {
                        for (const [cle2, valeur2] of Object.entries(activeSubtag)) {
                            if (subTagCategorise[cle2 + "," + key] === "TRUE") {
                                companyCard(key, value.name, value.adress, value.cover, parentNode);
                            }
                        }
                    }
                    else {
                        companyCard(key, value.name, value.adress, value.cover, parentNode);
                    }
                }
            }
        }
        else {
            companyCard(key, value.name, value.adress, value.cover, parentNode);
        }
    }
}

// document.addEventListener("DOMContentLoaded", () => {
//     let filterWrapper = document.getElementById("filter-wrapper");
//     let header = document.getElementById("header");

//     // for (const [key, value] of Object.entries(tags)) {
//     //     tagComponent(value.name, key, filterWrapper, false, header, false)
//     // }

//     // récupération des cartes de companies
//     // {
//     //     let activityList = document.getElementById("activity_list")

//     //     showCompanies(activeFilter,activityList);
//     // }

//     // gestion du menu de filtres
//     // {
//         // let filterIcon = document.getElementById("filter-icon");

//         // filterIcon.addEventListener("click", () => { filterIconClickHandler() });

//         // function filterIconClickHandler() {
//         //     toggleSubTags();
//         //     if (filterIcon.className.includes("opened")) {
//         //         filterIcon.classList.add("closed");
//         //         filterIcon.classList.remove("opened");
//         //     }
//         //     else {
//         //         filterIcon.classList.add("opened");
//         //         filterIcon.classList.remove("closed");
//         //     }
//         //     filterIcon.querySelectorAll("circle").forEach(elt => { ; elt.classList.toggle("scale-0") });
//         //     filterIcon.querySelectorAll("circle").forEach(elt => { ; elt.classList.toggle("delay-700") })
//         //     filterWrapper.classList.toggle("flex-wrap")
//         //     filterWrapper.classList.toggle("overflow-x-scroll")
//         // }

//         //     function toggleSubTags() {
//         //         if (filterIsOpened) {
//         //             for (const [key, value] of Object.entries(subTagList)) {
//         //                 value.classList.add("hidden")
//         //             }
//         //             filterIsOpened = false;
//         //         }
//         //         else {
//         //             for (const [key, value] of Object.entries(subTagList)) {
//         //                 value.classList.remove("hidden")
//         //             }
//         //             filterIsOpened = true;
//         //         }
//         //     }
//         // }


//     // }
//     );