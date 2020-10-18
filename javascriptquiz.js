
var myQuestions = [
    {
        question: "How many people in the world are considered food insecure",
        answers: {
            a: "820 Million",
            b: "375 Million",
            c: "947 Million",
            d: "50  Million"
        },
        correctAnswer: 'a'
        },

        {
        question: "What percent of those facing hunger are women and girls?",
        answers: {
           a: "35%",
            b: "60%",
            c: "73%",
            d: "52%"
        },
        correctAnswer: 'b'
        },

          {
        question: "On average, how many tons of food is wasted around the world annually?",
        answers: {
           a: "730 Million",
            b: "800,000",
            c: "1.3 Billion",
            d: "250 Million"
        },
        correctAnswer: 'c'
        },

         {
        question: "What Pathway to End Hunger are you most interested in learning more about?",
        answers: {
            a: "Nourishing Lives",
            b: "Empowering Communities",
            c: "Responding to Emergencies",
            d: "Growing the Movement"
        },

        },
];

var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');

generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);

function generateQuiz(questions, quizContainer, resultsContainer, submitButton){

    function showQuestions(questions, quizContainer){
        // store the output and the answer choices
        var output = [];
        var answers;

        // for each question
        for(var i=0; i<questions.length; i++){

            // first reset the list of answers
            answers = [];


            for(letter in questions[i].answers){

                answers.push(
                    '<label>'
                        + '<input type="radio" name="question'+i+'" value="'+letter+'">'
                        + letter + ': '
                        + questions[i].answers[letter]
                    + '</label>'
                );
            }

            // add this question and its answers to the output
            output.push(
                '<div class="question">' + questions[i].question + '</div>'
                + '<div class="answers">' + answers.join('') + '</div>'
            );
        }

        // finally combine our output list into one string of html and put it on the page
        quizContainer.innerHTML = output.join('');
    }


    function showResults(questions, quizContainer, resultsContainer){


        var answerContainers = quizContainer.querySelectorAll('.answers');

        // keep track of user's answers
        var userAnswer = '';
        var numCorrect = 0;


        for(var i=0; i<questions.length; i++){



            // find selected answer
            userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']:checked')||{}).value;

             //for 4th question

        if (i=questions.length-1){ //on question 4
            	if(userAnswer=='a'){
            		window.open("https://www.riseagainsthunger.org/how-we-work/nourishing-lives/");

            	}

            	else if(userAnswer=='b'){
            		window.open("https://www.riseagainsthunger.org/how-we-work/responding-to-crisis/");

            	}
            	else if(userAnswer=='c'){
            		window.open("https://www.riseagainsthunger.org/how-we-work/empowering-communities/");

            	}
            	else if(userAnswer=='d'){
            		window.open("https://www.riseagainsthunger.org/take-action/");

            	}


            } //end of last question check



            // if answer is correct
            if(userAnswer===questions[i].correctAnswer){
                // add to the number of correct answers
                numCorrect++;

                // color the answers green
                answerContainers[i].style.color = 'lightgreen';
            }

            // if answer is wrong or blank
            else{
                // color the answers red
                answerContainers[i].style.color = 'red';
            }

        } //end of for loop

        resultsContainer.innerHTML = numCorrect + ' out of ' + questions.length;
    }

    // show questions asap
    showQuestions(questions, quizContainer);

    // on submit, show results
    submitButton.onclick = function(){
        showResults(questions, quizContainer, resultsContainer);
    }

}
