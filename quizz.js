document.addEventListener("DOMContentLoaded", function() {
    // Definierar quizzdatan, nedan kommer quizzfrågorna
    var quizData = [
        {
            question: "Who has starred the most movies in hollywood?",
            options: ["Robert De Niro", "Danny Trejo", "Angelina Jolie", "Eric Roberts"],
            correctAnswer: "Eric Roberts"
        },
        {
            question: "Who is the main character in Troy (2004)?",
            options: ["Brad Pitt", "Jackie Chan", "Sherzad", "Robert Deniro"],
            correctAnswer: "Brad Pitt"
        },
        {
            question: "How much is the net worth of Hollywood 2023?",
            options: ["27 Billion$", "111 Billion$", "43 Billion$", "88 Billion$"],
            correctAnswer: "43 Billion$"
        },
        {
            question: "The head of what kind of animal is beheaded in an infamous scene from The Godfather?",
            options: ["A dog", "A sheep", "A horse", "A donkey"],
            correctAnswer: "A horse"
        },
        {
            question: "When was Avatar 1 released?",
            options: ["2013", "2008", "2009", "2011"],
            correctAnswer: "2009"
        }
        
    ];

    var currentQuestion = 0;
    var score = 0;

    // Kopplar scriptet till elementen på html
    var startButton = document.getElementById("startButton");
    var questionContainer = document.getElementById("questionContainer");
    var questionText = document.getElementById("questionText");
    var optionsContainer = document.getElementById("options");
    var submitAnswerButton = document.getElementById("submitAnswerButton");
    var resultContainer = document.getElementById("resultContainer");
    var scoreDisplay = document.getElementById("score");

    // Startar quizzen när man klickar på knappen
    startButton.addEventListener("click", function() {
        startButton.style.display = "none";
        showQuestion();
    });

    function showQuestion() {
        questionContainer.style.display = "block";
    
        var question = quizData[currentQuestion];
    
        questionText.textContent = question.question;
    
        var optionsHtml = "";
        for (var i = 0; i < question.options.length; i++) {
            optionsHtml += "<label><input type='radio' name='answer' value='" + i + "'> " + question.options[i] + "</label><br>";
        }
        optionsContainer.innerHTML = optionsHtml;

        submitAnswerButton.removeEventListener("click", submitAnswer);
        submitAnswerButton.addEventListener("click", submitAnswer);

    }

    function submitAnswer() {
        var selectedOption = document.querySelector("input[name='answer']:checked");

        if (selectedOption) {
            var selectedAnswer = parseInt(selectedOption.value);

            if (selectedAnswer === quizData[currentQuestion].correctAnswer) {
                score++;
            }

            currentQuestion++;

            if (currentQuestion < quizData.length) {
                showQuestion();
            } else {
                showResult();
            }
        }
    }

    function showResult() {
        questionContainer.style.display = "none";
        resultContainer.style.display = "block";

        scoreDisplay.textContent = "Your score: " + score + " out of " + quizData.length;
    }
});
