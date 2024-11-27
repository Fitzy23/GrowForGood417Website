// Initialize plant scores
let plant1 = 0, plant2 = 0, plant3 = 0, plant4 = 0, plant5 = 0, plant6 = 0, plant7 = 0, plant8 = 0, plant9 = 0, plant10 = 0, plant11 = 0, plant12 = 0, plant13 = 0, plant14 = 0, plant15 = 0, plant16 = 0, plant17 = 0, plant18 = 0, plant19 = 0, plant20 = 0;  
console.log(plant1,plant2,plant3,plant4,plant5,plant6,plant7,plant8,plant9,plant10,plant11,plant12,plant13,plant14,plant15,plant16,plant17,plant18,plant19,plant20);
// Keep track of the current question number
let currentQuestion = 1;
const totalQuestions = 10; 

// Function to show the next question
function showNextQuestion() {
    // Hide the current question and add to the plant values
    // Question 1
    if (currentQuestion == 1){
        if (document.getElementById("q1A").checked) {
            plant1 += 1;
            plant2 += 1;
            plant3 += 1;
            plant5 += 1;
            plant12 += 1;
            plant17 += 1;
            plant18 += 1;
            plant19 += 1;
            plant20 += 1;
        } else if (document.getElementById("q1B").checked) {
            plant4 += 1;
            plant7 += 1;
            plant8 += 1;
            plant9 += 1;
            plant13 += 1;
            plant14 += 1;
            plant15 += 1;
            plant16 +=1;
        } else if (document.getElementById("q1C").checked) {
            plant6 += 1;
            plant10 += 1;
            plant11 += 1;
        }
        console.log(plant1,plant2,plant3,plant4,plant5,plant6,plant7,plant8,plant9,plant10,plant11,plant12,plant13,plant14,plant15,plant16,plant17,plant18,plant19,plant20);

    }

    // Question 2
    else if (currentQuestion == 2){
        if (document.getElementById("q2A").checked) {
            plant2 += 1;
            plant3 += 1;
        }
        else if (document.getElementById("q2B").checked){
            plant1 += 1;
            plant2 += 1;
            plant3 += 1;
        }
        else if (document.getElementById("q2C").checked){
            plant1 += 1;
            plant3 += 1;
            plant4 += 1;
            plant5 += 1;
            plant7 += 1;
            plant8 += 1;
            plant14 += 1;
            plant15 += 1;
            plant18 += 1;
            plant19 += 1;
        }
        else if (document.getElementById("q2D").checked){
            plant1 += 1;
            plant4 += 1;
            plant5 += 1;
            plant6 += 1;
            plant7 += 1;
            plant8 += 1;   
            plant9 += 1;
            plant10 += 1;
            plant11 += 1;
            plant12 += 1;
            plant13 += 1;
            plant14 += 1;
            plant15 += 1;
            plant16 += 1;
            plant17 += 1;
            plant18 += 1;
            plant19 += 1;
            plant20 += 1;
        }
        else if (document.getElementById("q2E").checked){
            plant1 += 1;
            plant10 += 1;
            plant11 += 1;
            plant12 += 1;
            plant19 += 1;
        }
    }
    
    //Question 3
    else if (currentQuestion == 3){
        if (document.getElementById("q3A").checked){
            //Idk yet
        }
        else if (document.getElementById("q3B").checked){
            //Idk yet
        }
        else if (document.getElementById("q3C").checked){
            //Idk yet
        }
    }
    
    //Question 4
    else if (currentQuestion == 4){
        if (document.getElementById("q4A").checked){
            //Idk yet
        }
        else if (document.getElementById("q4B").checked){
            //Idk yet
        }
        else if (document.getElementById("q4C").checked){
            //Idk yet
        }
    }

    else if (currentQuestion == 5){
        if (document.getElementById("q5A").checked){
            plant1 += 1;
            plant2 += 1;
            plant3 += 1;
            plant8 += 1;
            plant12 += 1;
            plant13 += 1;
            plant19 += 1;
            plant20 += 1;
        }
        else if (document.getElementById("q5B").checked){
            plant4 += 1;
            plant5 += 1;
            plant6 += 1;
            plant7 += 1;
            plant9 += 1;
            plant10 += 1;
            plant14 += 1;
            plant15 += 1;
            plant16 += 1;
            plant17 += 1;
            plant18 += 1;
        }
        else if (document.getElementById("q5C").checked){
            plant11 += 1;
        }
    }

    //Question 6
    else if (currentQuestion == 6){
        if (document.getElementById("q6A").checked){
            plant1 += 1;
            plant2 += 1;
            plant3 += 1;
            plant4 += 1;
            plant6 += 1;
            plant8 += 1;
            plant10 += 1;
            plant12 += 1;
            plant13 += 1;
            plant14 += 1;
            plant15 += 1;
            plant16 += 1;
            plant19 += 1;
            plant20 += 1;
        }
        else if (document.getElementById("q6B").checked){
            plant5 += 1;
            plant7 += 1;
            plant9 += 1;
            plant11 += 1;
            plant17 += 1;
            plant18 += 1;
        }
    }

    //Question 7
    else if (currentQuestion == 7){
        if (document.getElementById("q7A").checked){
            plant1 += 1;
            plant2 += 1;
            plant4 += 1;
            plant7 += 1;
            plant9 += 1;
            plant10 += 1;
            plant12 += 1;
            plant14 += 1;
            plant15 += 1;
            plant16 += 1;
            plant17 += 1;
            plant18 += 1;
            plant20 += 1;
        }
        else if (document.getElementById("q7B").checked){
            plant5 += 1;
            plant8 += 1;
            plant11 += 1;
            plant13 += 1;
            plant19 += 1;
        }
        else if (document.getElementById("q7C").checked){
            plant1 += 1;
            plant2 += 1;
            plant3 += 1;
            plant6 += 1;
            plant10 += 1;
            plant11 += 1;
        }
    }

    //Question8
    else if (currentQuestion == 8){
        if (document.getElementById("q8A").checked){
            plant1 += 1;
            plant2 += 1;
            plant3 += 1;
            plant8 += 1;
            plant19 += 1;
        }
        else if (document.getElementById("q8B").checked){
            plant1 += 1;
            plant2 += 1;
            plant3 += 1;
            plant4 += 1;
            plant5 += 1;
            plant6 += 1;
            plant7 += 1;
            plant8 += 1;
            plant9 += 1;
            plant10 += 1;
            plant11 += 1;
            plant12 += 1;
            plant13 += 1;
            plant14 += 1;
            plant15 += 1;
            plant16 += 1;
            plant17 += 1;
            plant18 += 1;
            plant19 += 1;
            plant20 += 1;
        }
        else if (document.getElementById("q8C").checked){
            plant1 += 1;
            plant2 += 1;
            plant3 += 1;
            plant4 += 1;
            plant5 += 1;
            plant6 += 1;
            plant7 += 1;
            plant8 += 1;
            plant9 += 1;
            plant10 += 1;
            plant11 += 1;
            plant12 += 1;
            plant13 += 1;
            plant14 += 1;
            plant15 += 1;
            plant16 += 1;
            plant17 += 1;
            plant18 += 1;
            plant19 += 1;
            plant20 += 1;
        }
    }

    //Question 9
    else if (currentQuestion ==9){
        if (document.getElementById("q9A").checked){
            plant1 += 1;
            plant5 += 1;
            plant6 += 1;
            plant7 += 1;
            plant8 += 1;
            plant12 += 1;
            plant14 += 1;
            plant15 += 1;
            plant18 += 1;
        }
        else if (document.getElementById("q9B").checked){
            //nothing happens
        }
        else if (document.getElementById("q9C").checked){
            //nothing happens
        }
    }

    //Question 10
    else if (currentQuestion == 10){
        if (document.getElementById("q10A").checked){
            plant2 += 10;
            plant6 += 10;
            plant8 += 10;
            plant10 += 10;
            plant11 += 10;
            plant19 += 10;
        }
        else if (document.getElementById("q10B").checked){
            //nothing happens
        }
    }
    document.getElementById(`question${currentQuestion}`).classList.add('hidden');
    currentQuestion++;


    // Show the next question
    if (currentQuestion <= totalQuestions) {
        document.getElementById(`question${currentQuestion}`).classList.remove('hidden');
    } else {
        // If there are no more questions, calculate the result
        calculateResult();
    }
}

// Function to calculate the result
function calculateResult() {
    //find plant with highest score
    console.log(plant1,plant2,plant3,plant4,plant5,plant6,plant7,plant8,plant9,plant10,plant11,plant12,plant13,plant14,plant15,plant16,plant17,plant18,plant19,plant20);
    plantScoreArray = [
        plant1, plant2, plant3, plant4, plant5, plant6, plant7, plant8, plant9, plant10, plant11, plant12, plant13, plant14, plant15, plant16, plant17, plant18, plant19, plant20
    ]
    let maxPlant = 0;
    let max = 0;
    let recommendedPlant = "";
    for (let i = 1; i < plantScoreArray.length; i++){
        if (plantScoreArray[i] > max){
            max = plantScoreArray[i];
            maxPlant = i+1;
            console.log("The value in maxplant is currently: " + maxPlant);
        }
    }
    console.log("The value in maxplant is currently: " + maxPlant);
    switch(maxPlant){
        case 1:
            recommendedPlant = "Snake Plant";
            break;
        case 2:
            recommendedPlant = "Cacti";
            break;
        case 3:
            recommendedPlant = "Succulent";
            break;
        case 4:
            recommendedPlant = "Large Leaf Philodendron";
            break;
        case 5:
            recommendedPlant = "Vining Philodendrons and Pothos";
            break;
        case 6:
            recommendedPlant = "Ferns";
            break;
        case 7:
            recommendedPlant = "Philodendrons or Pothos on a Moss Pole";
            break;
        case 8:
            recommendedPlant = "Orchid Cactus"
            break;
        case 9:
            recommendedPlant = "Alocasia";
            break;
        case 10:
            recommendedPlant = "Calathea";
            break;
        case 11:
            recommendedPlant = "Carnivorous Plants";
            break;
        case 12:
            recommendedPlant = "ZZ Plant";
            break;
        case 13:
            recommendedPlant = "String of (Pearls, Bananas, Turtles, etc.)";
            break;
        case 14:
            recommendedPlant = "Fiddle Leaf Fig";
            break;
        case 15:
            recommendedPlant = "Rubber Plant";
            break;
        case 16:
            recommendedPlant = "Aglaonema";
            break;
        case 17:
            recommendedPlant = "Dieffenbachia";
            break;
        case 18:
            recommendedPlant = "Monstera";
            break;
        case 19:
            recommendedPlant = "Hoyas";
            break;
        case 20:
            recommendedPlant = "Dracaena";
            break;
    }
    
    

    // Display the result
    document.getElementById("next-button").classList.add('hidden');
    document.getElemenyById("heading").classList.add('hidden');
    document.getElementById("result").classList.remove('hidden');
    document.getElementById("quiz-form").classList.add('hidden');
    document.getElementById("plant").value = recommendedPlant;
    console.log(recommendedPlant);
    document.getElementById("result").innerHTML = `Your ideal plant is: ${recommendedPlant}`;
}

// Event listener for the "Next" button
document.getElementById("next-button").addEventListener("click", function() {
    showNextQuestion();
});
