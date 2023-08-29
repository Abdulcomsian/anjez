// const Questions = [
//   {
//     q: "What is the largest planet in our solar system?",
//     a: [
//       { text: "Earth", isCorrect: false },
//       { text: "Saturn", isCorrect: false },
//       { text: "Jupiter", isCorrect: true },
//       { text: "Mars", isCorrect: false },
//     ],
//   },
//   {
//     q: "What is the capital of Thailand?",
//     a: [
//       { text: "Lampang", isCorrect: false },
//       { text: "Phuket", isCorrect: false },
//       { text: "Ayutthaya", isCorrect: false },
//       { text: "Bangkok", isCorrect: true },
//     ],
//   },
//   {
//     q: "Which animal is known for its black and white stripes?",
//     a: [
//       { text: "Lion", isCorrect: false },
//       { text: "Tiger", isCorrect: false },
//       { text: "Zebra", isCorrect: true },
//       { text: "Giraffe", isCorrect: false },
//     ],
//   },
// ];

let currQuestion = 0;
let score = 0;

function loadQues() {
  const question = document.getElementById("ques");
  const opt = document.getElementById("opt");

  const currQuesNum = currQuestion + 1;
  const totalQuesNum = Questions.length;

  document.getElementById("currQuesNum").textContent = currQuesNum;
  document.getElementById("totalQuesNum").textContent = totalQuesNum;

  question.textContent = Questions[currQuestion].q;
  opt.innerHTML = "";

  for (let i = 0; i < Questions[currQuestion].a.length; i++) {
    const choicesdiv = document.createElement("div");
    choicesdiv.classList.add("option");

    const choice = document.createElement("input");
    const choiceLabel = document.createElement("label");

    choice.type = "radio";
    choice.name = "answer";
    choice.value = i;

    choice.addEventListener("click", function () {
      const allChoices = document.querySelectorAll(".option");
      allChoices.forEach((choice) => {
        choice.style.borderColor = "#E5E7EB";
      });
      this.parentElement.style.borderColor = "#7E5BF6";
    });

    choiceLabel.textContent = Questions[currQuestion].a[i].text;

    choicesdiv.appendChild(choice);
    choicesdiv.appendChild(choiceLabel);
    opt.appendChild(choicesdiv);
  }

  const submitBtn = document.getElementById("btn");
  if (currQuestion < Questions.length - 1) {
    submitBtn.textContent = "Next Question";
  } else {
    submitBtn.textContent = "Finish";
  }
}

loadQues();

function loadScore() {
  const totalScore = document.getElementById("score");
  totalScore.style.display = "block";
  totalScore.innerHTML = "<h2>Congratulations!</h2>";
  totalScore.innerHTML += " <p> You answered </p> ";
  totalScore.innerHTML += "<h2> " + score + " / " + Questions.length + "</h2>";
  totalScore.innerHTML += " <h3> question correct </h3>";

  const modalBody = document.querySelector(".modal-body");
  const questionHeading = modalBody.querySelector("h5");
  const questionNumber = modalBody.querySelector("p");
  questionHeading.remove();
  questionNumber.remove();

  modalBody.insertBefore(totalScore, modalBody.firstChild);
}





// function restartQuiz() {
//   currQuestion = 0;
//   score = 0;
//   const modalBody = document.querySelector(".modal-body");
//   modalBody.innerHTML = `
//         <div class="d-flex flex-column">
//             <h5>Answer the questions below</h5>
//             <p class="m-auto"><span id="currQuesNum"></span> / <span id="totalQuesNum"></span></p>
//             <div class="question m-auto" id="ques"></div>
//         </div>
//         <div class="options mt-5" id="opt"></div>
//         <div class="modal-footer d-flex justify-content-center mb-5">
//             <button onclick="checkAns()" id="btn"></button>
//             <div class="button-container">
//                 <button class="quiz-button" id="restartBtn" onclick="restartQuiz()" style="display: none;">Restart Quiz</button>
//                 <button class="quiz-button" id="restartBtn2" style="display: none;"><a href="/student-content.html">Back to Home</a></button>
//             </div>
//             <div id="score" style="display: none;"></div>
//             <script src="/quiz.js"></script>
//         </div>
//     `;

//   const totalScore = document.getElementById("score");
//   totalScore.innerHTML = "";
//   loadQues();
// }


