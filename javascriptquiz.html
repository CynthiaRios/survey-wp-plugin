//HTML divs to hold quiz and generate the results
<div id="quiz"></div>
<button id="submit">Get Results</button>
<div id="results"></div>

//function to generate the quiz
function generateQuiz(questions, questionsHolder, resultsContainer, submission) { //framework outer function to generate quiz
	
	function displayQuestions(questions, questionHolder) {
		var output=[]; 
		var answerChoices;
		
		for (var i=0; i < questions.length; i++) {
			//resets answers list
			answers=[];
			
			//goes over letter in element [i] of answer choices
			for (letter in questions[i].answers) {
				//creates button for answer choice
				//radio button (in HTML)- only allows user to choose 1 option out of a set of diff option
				answers.push(
					'<label>'
						+'<input type="radio" name="question'+i+'" value="'+letter+'">'
						+ questions[i].answers[letter] 
					+ '</label>'
				);
			}
			
			
			//combine our output list into one string of html and put it on the page
			questionHolder.innerHTML = output.join('');
		
		}
	}
	
	function displayResults (questions, questionHolder, answerHolder) {
		//set place where answers are held
		var answerz=questionHolder.querySelectorAll('.answers');
		
		//keep track of user's answers and store
		var useranswer='';
		var correct=0;
		var user_storage = []; //array which stores user's previous answers
		
		//loop that goes thru each question
		for (var i=0; i < questions.length; i++) {
		
		//picks out user's answer
		useranswer=(answerHolder[i].querySelector('input[name=question'+i+']:checked')||{}).value;
		
		//if (answer is correct)
		if (userAnswer==questions[i].correctAnswers) {
			correct++;
			
			//colors correct answers green (idk if this is useful for y'all but it might be when testing)
			answerz[i].style.color='darkgreen';
		}
		
		//if answer is blank/wrong color the thingy red
		else {
			answerz[i].style.color='red';
		}
		
		}
	}
	
	//display the questions
	displayQuestions(questions, questionHolder);
	
	//show results when user clicks a button, also stores results?
	submitButton.onclick=function(){
		displayResults(questions, questionHolder, answerHolder);
	}
	
}


//set up/initialize the questions
var hungerQuestions = [
{
	//question 1
	question: "How many people in the world are considered food insecure?",
	
	answers: {
		a: "820 Million",
		b: "375 Million",
		c: "947 Million",
		d: "50 Million"
	},
	
	//question 2
	question: "What percent of those facing hunger are women and girls?",
	
	answers: {
		a: "35%",
		b: "60%",
		c: "73%",
		d: "52%"
	},
	
	//question 3
	question: "On average, many tons of food is wasted around the world annually.",
	
	answers: {
		a: "730 Million",
		b: "800,000",
		c: "1.3 Billion",
		d: "250 Million"
	},
	
	//question 4
	question: "What Pathway to End Hunger are you most interested in learning more about?"
	
	answers: {
		a: "Nourishing Lives",
		b: "Empowering Communities",
		c: "Responding to Emergencies",
		d: "Growing the Movement"
	}
	
}

var questionHolder = document.getElementById('quiz');
var answerHolder = document.getElementById('results');
var submitButton = document.getElementById('submit');

generateQuiz(hungerQuestions, questionHolder, answerHolder, submitButton);




]