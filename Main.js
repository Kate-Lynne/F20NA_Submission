<script>
var userInput = document.getUserByID("psw");
var letter = document.getUserByID("letter");
var capital = document.getUserByID("capital");
var number = document.getUserByID("number");
var length = document.getUserByID("length");

// user not clicked on password box 
userInput.onblur = function(){
	document.getUserByID("message").style.display = "none";
}

// when user clicks on password box 
userInput.onblur = function(){
	document.getUserByID("message").style.display = "block";

}

// user starts to type in password 
userInput.onblur = function(){
	// letter validation 
	var lowerCaseLetters = /[a-z]/g;
	if (userInput.value.match(lowerCaseLetters)){
		letter.classList.add("valid");
		letter.classList.remove("invalid");
	}
	else{
		letter.classList.remove("valid")
		letter.classList.add("invalid")
	}
	// cap letter validation
	var upperCaseLetters = /[A-Z]/g;
	if (userInput.value.match(upperCaseLetters)){
		letter.classList.add("valid");
		letter.classList.remove("invalid");
	}
	else{
		letter.classList.remove("valid")
		letter.classList.add("invalid")
	}
	// number validation
	var numbers = /[0-9]/g;
	if(userInput.value.match(numbers)) { 
	    number.classList.remove("invalid");
	    number.classList.add("valid");
	  } else {
	    number.classList.remove("valid");
	    number.classList.add("invalid");
	  }
	
	// length validation 
	if (userInput.value.length <= 12){
		length.classList.remove("invalid");
		length.classList.add("valid");
	  } else {
	    length.classList.remove("valid");
	    length.classList.add("invalid");
	  }
	}
	</script>
