let tagList = [];

function tagClickHandler(i,subTag,id,name,parentNode) {
    if (tagList[i].selected == true){
        tagList[i].selected=false;
        if (!subTag){
            deleteSubTagWrapper(id)
        }
    }
    else{
        tagList[i].selected=true;
        if (!subTag){
            subTagWrapper(name,id,parentNode)
        }
    }
    tagList[i].htmlElement.dataset.selected=tagList[i].selected;
}

function tagComponent(name,id,parentNode,subTag,subTagParentNode,onCard){
    let tag = document.createElement("div");
    let index = tagList.length

    tag.innerText = name;

    tag.className = "text-xs bg-white flex items-center w-fit py-1 px-3 ml-5 mt-2 leading-none rounded-xl data-[selected=true]:bg-[#004a93] data-[selected=true]:text-white data-[not_active]:bg-[#dc2f34] data-[selected=true]:text-white transition-all duration-200 cursor-pointer tag";
    tagList.push({"selected":false,"htmlElement":tag});
    tag.onclick = ()=>{tagClickHandler(index,subTag,id,name,subTagParentNode)};
    parentNode.appendChild(tag);
}

