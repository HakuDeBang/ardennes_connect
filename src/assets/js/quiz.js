async function fetchData() {
    try {
        const response = await fetch('src/assets/datas/quizz.json');

        if (!response.ok) {
            throw new Error('Erreur réseau');
        }

        const data = await response.json(); // Convertir la réponse en JSON
        // Faire quelque chose avec les données récupérées

        const questionElement = document.getElementById('question');
        const answersElement = document.getElementById('answers');

        questionElement.innerHTML = data.question;
        console.log(data.answers);

        data.answers.forEach(answer => {
            const button = document.createElement('button');
            button.innerHTML = data.answers[i].label
            answersElement.insertAdjacentHTML('beforeend', button)
            console.log(button);
        });

    } catch (error) {
        console.error('Erreur:', error);
    }
}


fetchData();
