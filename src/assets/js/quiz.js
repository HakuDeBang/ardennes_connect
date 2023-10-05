const answersUser = {
  answers: [],
  key: [],
};
const question = document.getElementById("question");
const answer = document.getElementById("answers");
handlerButtonAnswers();

async function nextQuestion() {
  const data = await fetchData();
  let answerKey = Object.values(answersUser.key);
  let dataQuestion = data;

  while (answerKey.length != 0) {
    dataQuestion = dataQuestion.answers[answerKey[0]];

    if ("next" in dataQuestion) {
      dataQuestion = dataQuestion.next;
    } else {
      return false;
    }
    answerKey.shift();
  }

  const newQuestion = dataQuestion.question;
  question.innerHTML = newQuestion;

  answer.innerHTML = "";
  const newAnswers = Object.values(dataQuestion.answers);

  newAnswers.forEach((answerData) => {
    // <button type="button" class="px-5 py-2 bg-lightBlue/50 rounded-lg text-xl font-medium"><?= $answer ?></button>

    const button = document.createElement("button");
    button.type = "button";
    button.classList =
      "px-5 py-2 bg-lightBlue/50 rounded-lg text-xl font-medium";
    button.innerHTML = Array.isArray(answerData)
      ? answerData
      : answerData.label;

    answer.appendChild(button);
  });
  handlerButtonAnswers();
  return true;
}

function handlerButtonAnswers() {
  const answerBtn = document.querySelectorAll("#answers button");
  answerBtn.forEach((button, key) => {
    button.addEventListener("click", () => {
      answersUser.answers.push(button.innerHTML);
      answersUser.key.push(key + 1);
      const bool = nextQuestion();
      if (!bool) console.log("end");
    });
  });
}

// Retour
const returnBtn = document.getElementById("return");
returnBtn.addEventListener("click", () => {
  answersUser.key.pop();
  answersUser.answers.pop();
  nextQuestion();
});
// Obtenir les données Json
async function fetchData() {
  try {
    const response = await fetch("src/assets/datas/quizz.json");

    if (!response.ok) {
      throw new Error("Erreur réseau");
    }

    const data = await response.json(); // Convertir la réponse en JSON
    // Faire quelque chose avec les données récupérées
    return data;
  } catch (error) {
    console.error("Erreur:", error);
  }
}
