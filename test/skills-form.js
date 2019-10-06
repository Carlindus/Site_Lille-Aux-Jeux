document.addEventListener("DOMContentLoaded", onLoad);

function onLoad(){
	// Initialisation du formulaire...
	var skillsForm = document.querySelector(".skills-forms");

	if(skillsForm != null){
		document.querySelector(".button-skills-quizz").addEventListener("click", launchQuizz);

		var forms = document.querySelectorAll(".skills-forms form");
		forms.forEach(function(form){
			form.addEventListener("submit", nextForm);
		});

		var checkboxes = document.querySelectorAll("[data-check-maxresponse] input[type='checkbox']");
		checkboxes.forEach(function (checkbox){
			checkbox.addEventListener('change', checkMaxAnswers);
		});

	}
}
// Vérification du nombre de checkboxes
function checkMaxAnswers(event){
	var checkGroup = this.closest(".question-input");
	var checkboxesChecked = checkGroup.querySelectorAll(":checked");
	var maxAnswers = checkGroup.getAttribute('data-check-maxResponse');
	if ( checkboxesChecked.length> maxAnswers){
	this.checked = false;}
}

function launchQuizz(){
	document.querySelector(".button-skills-quizz").style.display = "none";
	displayQuizzForm(0);
}

function displayQuizzForm(index){
	document.querySelector("[data-skillForm='" + index + "']").style.display = "block";
	window.scrollTo(0,0);
}

// Calcul du nombre de points
function getTotalPoints(){
	var responsesPoints = document.querySelectorAll(".question-input [data-points]");
	var responsesMultiples = document.querySelectorAll(".question-input [data-multiple]");
	var total = 0;
  var ponderator = 1;

	responsesPoints.forEach(function(responsePoint){
		if(responsePoint.checked){
			var score = responsePoint.getAttribute("data-points");
      total = total + parseInt(score) ;
		}});

	responsesMultiples.forEach(function(multiple){
		if(multiple.checked){
			var multiplicator = multiple.getAttribute("data-multiple");
      ponderator = ponderator * parseFloat(multiplicator);
	}});

	var	finalPoints = total * ponderator;

  return finalPoints;
}

// Fonction affichage des résultats
function checkResults(){
	var totpoints = getTotalPoints();
	var points = Math.ceil(totpoints)

	var ok = false;

	if(points >= 50){
		ok = true;
	}

	return {
		isCapable: ok,
		points: points
	};
}

function displayResults(){
	var results = document.querySelector(".results");

	var quizzResults = checkResults();
	results.querySelector(".total-points").innerText = quizzResults.points + "pts sur 100";

	if(quizzResults.isCapable){
		results.querySelector(".result[data-success='true']").style.display = "block";
	}else{
		results.querySelector(".result[data-success='false']").style.display = "block";
	}

	results.style.display = "block";
}


function nextForm(event){
	event.preventDefault();

	var isFormValid = checkForm(this);

	document.querySelector(".skills-forms-error").style.display = "none";
	// Validation du formulaire
	if(isFormValid){

		var currentFormIndex = this.getAttribute("data-skillForm");
		currentFormIndex = parseInt(currentFormIndex);

		this.style.display = "none";

		// Affichage du formulaire suivant
		var nextFormIndex = currentFormIndex + 1;
		var isLast = isLastQuizzForm(nextFormIndex);

		if(isLast){
			displayResults();
		}else{
			displayQuizzForm(currentFormIndex + 1);
		}
	}else{
		window.scrollTo(0,0);
		document.querySelector(".skills-forms-error").style.display = "block";
	}
}

  // Dernier formulaire
function isLastQuizzForm(index){
	var forms = document.querySelectorAll(".skills-forms form");

	if(index > forms.length - 1){
		return true;
	}else{
		return false;
	}
}

 // Vérification de la validation du formulaire
function checkForm(form){
	var requiredInputsGroup = form.querySelectorAll("[data-check-group]");
	var isValid = true;

	requiredInputsGroup.forEach(function(inputGroup){
		var checkedElement = inputGroup.querySelectorAll(":checked");
		if(checkedElement.length <= 0){
			isValid = false;
		}
	});

	return isValid;
}
