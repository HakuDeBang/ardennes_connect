// subTagList = {};

// function subTagWrapper(name,id,parentNode){
//     let atLeastOneSubTag = false;
//     for (const [key,value] of Object.entries(subTags)){
//         if (value.parentTag == id){
//             atLeastOneSubTag = true;
//         }
//     }
//     if (atLeastOneSubTag){
//         let mainWrapper = document.createElement("div");
//         mainWrapper.className = "ml-5";
//         if (!filterIsOpened){
//             mainWrapper.classList.add("hidden");
//         }
//             let title = document.createElement("span");
//             title.className = "font-semibold border-b-2 border-b-black border-solid";
//         mainWrapper.appendChild(title)
//             let subTagsWrapper = document.createElement("div");
//             subTagsWrapper.className = "flex flex-wrap";
//         mainWrapper.appendChild(subTagsWrapper)
        
//             title.innerText = name

//             for (const [key,value] of Object.entries(subTags)){
//                 if (value.parentTag == id){
//                     tagComponent(value.name,key,subTagsWrapper,true);
//                 }
//             }

//         subTagList[id]=mainWrapper;
//         parentNode.appendChild(mainWrapper);
//     }
// }

// function deleteSubTagWrapper(id){
//     let atLeastOneSubTag = false;
//     for (const [key,value] of Object.entries(subTags)){
//         if (value.parentTag == id){
//             atLeastOneSubTag = true;
//         }
//     }
//     if (atLeastOneSubTag){
//         subTagList[id].remove();
//         delete subTagList[id];
//     }
// }