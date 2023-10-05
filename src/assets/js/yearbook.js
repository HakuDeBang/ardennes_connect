const tagButton = document.querySelectorAll('.tagButton');

tagButton.forEach((button) => {
    button.addEventListener('click', async (event) => {
        event.preventDefault();
        const button = event.target;

        // Changer le style du boutton
        button.dataset.selected = (button.dataset.selected == "true") ? false : true;

        // Récupérer les données filtrées
        let filter = [];
        tagButton.forEach((item) => {
            if (item.dataset.selected == "true") filter.push(item.id);
        })
        companyData = await fetchCompany_tag(filter);
        console.log(companyData);
        if (companyData) {
            // Afficher les données filtrées
            createAndShowCard(companyData)
        } else {
            // Erreur, init du bouton
            button.dataset.selected = (button.dataset.selected == "true") ? false : true;
        }
    })
})

async function fetchCompany_tag(filter) {
    try {
        const response = await fetch('index?action=fetchCompany_tag', {
            method: 'POST',
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({
                filter: filter
            })
        });

        if (!response.ok) {
            throw new Error("Erreur réseau");
        }

        const data = await response.json();
        // console.log(data);

        return data;
    } catch (error) {
        console.error("Erreur:", error);
    }
}

function createAndShowCard(companyData) {
    const cardContainer = document.getElementById('cardList');
    cardContainer.innerHTML = "";
    console.log(typeof companyData)

    companyData.forEach(company => {
        const card = document.createElement('div');
        card.id = company.id; // Assurez-vous que l'ID est défini correctement
        card.classList.add('bg-white', 'flex', 'rounded-md', 'w-full', 'justify-between', 'overflow-hidden');

        // Créez le contenu de la carte en utilisant les données de l'entreprise
        const cardContent = `
          <div class="flex flex-col h-full justify-between p-2">
            <h4 class="font-semibold">${company.name}</h4>
            <p class="font-semibold text-xs">${company.adress}</p>
            <div class="flex flex-wrap">
              ${company.tags.map(nameTag => `
                <span class="bg-darkBlue text-white text-xs font-semibold flex items-center w-fit py-1 px-3 ml-5 mt-2 leading-none rounded-xl">
                  ${nameTag}
                </span>
              `).join('')}
            </div>
          </div>
          <img src="src/assets/img/upload/company_cover/${company.cover}" alt="company image" class="aspect-square h-24" />
        `;

        card.innerHTML = cardContent;
        cardContainer.appendChild(card);
    });
}