import { questionList } from "../../datas/quizz";

function Quiz() {
  return (
    <div>
      <h3>Question : {questionList["question"]}</h3>
      {questionList["answers"].map(({ label }, index) => (
        <button key={index}>{label}</button>
      ))}
    </div>
  );
}

export default Quiz;
