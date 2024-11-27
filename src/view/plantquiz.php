<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Quiz</title>
    <link href="output.css" rel="stylesheet">
    <style>
        .question-container.hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-light-green text-gray-800">
    <?php include './components/header.html'; ?>
    <div class="container mx-auto p-4 flex justify-center">
        <div class="w-full max-w-2xl">
            <h1 class="text-5xl font-bold text-center mb-6" id="heading">Find Your Perfect Plant</h1>
            <form id="quiz-form" class="bg-white p-6 rounded-lg shadow-md">
                <!-- Question 1 -->
                <div class="question-container" id="question1">
                    <p class="mb-4 text-2xl text-center">How would you describe your plant care level?</p>
                    <div class="flex flex-col items-center">
                        <div class="flex flex-col text-left">
                        <label for="q1A" class="block mb-2 text-xl"><input type="radio" name="q1" id="q1A" class="mr-2"> Beginner: I’ve never had a plant before or I’m still learning.</label>
                        <label for="q1B" class="block mb-2 text-xl"><input type="radio" name="q1" id="q1B" class="mr-2"> I’ve had some success but still learning about different plant types.</label>
                        <label for="q1C" class="block mb-2 text-xl"><input type="radio" name="q1" id="q1C" class="mr-2"> I’ve cared for multiple types of plants and have a green thumb!</label>
                        </div>
                    </div>
                </div>
                
                <!-- Question 2 -->
                <div class="question-container hidden" id="question2">
                    <p class="mb-4 text-2xl text-center">What kind of light does the space receive?</p>
                    <div class="flex flex-col items-center">
                    <div class="flex flex-col text-left">
                        <label for="q2A" class="block mb-2 text-xl"><input type="radio" name="q2" id="q2A" class="mr-2"> 6+ hours of direct sunlight</label>
                        <label for="q2B" class="block mb-2 text-xl"><input type="radio" name="q2" id="q2B" class="mr-2"> 3-6 hours of direct sunlight</label>
                        <label for="q2C" class="block mb-2 text-xl"><input type="radio" name="q2" id="q2C" class="mr-2"> 1-2 hours of direct sunlight</label>
                        <label for="q2D" class="block mb-2 text-xl"><input type="radio" name="q2" id="q2D" class="mr-2"> Very bright indirect sunlight</label>
                        <label for="q2E" class="block mb-2 text-xl"><input type="radio" name="q2" id="q2E" class="mr-2"> Lower light</label>
                        </div>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="question-container hidden" id="question3">
                    <p class="mb-4 text-2xl text-center">What’s the temperature like in your space?</p>
                    <div class="flex flex-col items-center">
                    <div class="flex flex-col text-left">
                        <label for="q3A" class="block mb-2 text-xl"><input type="radio" name="q3" id="q3A" class="mr-2"> Consistently warm (above 75°F)</label>
                        <label for="q3B" class="block mb-2 text-xl"><input type="radio" name="q3" id="q3B" class="mr-2"> Moderate (65-75°F)</label>
                        <label for="q3C" class="block mb-2 text-xl"><input type="radio" name="q3" id="q3C" class="mr-2"> Cooler (Below 65°F)</label>
    </div>          
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="question-container hidden" id="question4">
                    <p class="mb-4 text-2xl text-center">Are there any HVAC vents, drafts, or temperature fluctuations in the space where the plant will live?</p>
                    <div class="flex flex-col items-center">
                        <div class="flex flex-col text-left">
                            <label for="q4A" class="block mb-2 text-xl"><input type="radio" name="q4" id="q4A" class="mr-2"> Yes, there are vents or drafts nearby. Most plants do not like to have vents or drafts!</label>
                            <label for="q4B" class="block mb-2 text-xl"><input type="radio" name="q4" id="q4B" class="mr-2"> No, it’s a stable environment.</label>
                            <label for="q4C" class="block mb-2 text-xl"><input type="radio" name="q4" id="q4C" class="mr-2"> Occasionally, but it’s not extreme.</label>
                        </div>
                    </div>
                </div>

                <!-- Question 5 -->
                <div class="question-container hidden" id="question5">
                    <p class="mb-4 text-2xl text-center">How much time can you dedicate to plant care?</p>
                    <div class="flex flex-col items-center">
                    <div class="flex flex-col text-left">
                        <label for="q5A" class="block mb-2 text-xl"><input type="radio" name="q5" id="q5A" class="mr-2"> Very little, I need something low-maintenance.</label>
                        <label for="q5B" class="block mb-2 text-xl"><input type="radio" name="q5" id="q5B" class="mr-2"> Moderate, I can water weekly and check in occasionally.</label>
                        <label for="q5C" class="block mb-2 text-xl"><input type="radio" name="q5" id="q5C" class="mr-2"> A lot, I enjoy checking on my plants daily and maintaining them.</label>
    </div>
                    </div>
                </div>

                <!-- Question 6 -->
                <div class="question-container hidden" id="question6">
                    <p class="mb-4 text-2xl text-center">Do you prefer a plant that grows:</p>
                    <div class="flex flex-col items-center">
                    <div class="flex flex-col text-left">
                        <label for="q6A" class="block mb-2 text-xl"><input type="radio" name="q6" id="q6A" class="mr-2"> Slowly and steadily</label>
                        <label for="q6B" class="block mb-2 text-xl"><input type="radio" name="q6" id="q6B" class="mr-2"> Fast-growing and full</label>
    </div>
                    </div>
                </div>

                <!-- Question 7 -->
                <div class="question-container hidden" id="question7">
                    <p class="mb-4 text-2xl text-center">Do you prefer a plant that:</p>
                    <div class="flex flex-col items-center">
                    <div class="flex flex-col text-left">
                        <label for="q7A" class="block mb-2 text-xl"><input type="radio" name="q7" id="q7A" class="mr-2"> Stays compact and upright</label>
                        <label for="q7B" class="block mb-2 text-xl"><input type="radio" name="q7" id="q7B" class="mr-2"> Trails or vines down</label>
                        <label for="q7C" class="block mb-2 text-xl"><input type="radio" name="q7" id="q7C" class="mr-2"> Spreads out widely</label>
    </div>
                    </div>
                </div>

                <!-- Question 8 -->
                <div class="question-container hidden" id="question8">
                    <p class="mb-4 text-2xl text-center">Would you like a flowering plant or one with decorative foliage?</p>
                    <div class="flex flex-col items-center">
                    <div class="flex flex-col text-left">
                        <label for="q8A" class="block mb-2 text-xl"><input type="radio" name="q8" id="q8A" class="mr-2"> Flowering</label>
                        <label for="q8B" class="block mb-2 text-xl"><input type="radio" name="q8" id="q8B" class="mr-2"> Decorative foliage (all of them)</label>
                        <label for="q8C" class="block mb-2 text-xl"><input type="radio" name="q8" id="q8C" class="mr-2"> Either one is fine!</label>
    </div>
                    </div>
                </div>

                <!-- Question 9 -->
                <div class="question-container hidden" id="question9">
                    <p class="mb-4 text-2xl text-center">Do you want a plant that purifies the air?</p>
                    <div class="flex flex-col items-center">
                    <div class="flex flex-col text-left">
                        <label for="q9A" class="block mb-2 text-xl"><input type="radio" name="q9" id="q9A" class="mr-2"> Yes, air purification is important.</label>
                        <label for="q9B" class="block mb-2 text-xl"><input type="radio" name="q9" id="q9B" class="mr-2"> It’s a nice bonus, but not essential.</label>
                        <label for="q9C" class="block mb-2 text-xl"><input type="radio" name="q9" id="q9C" class="mr-2"> Not a priority for me.</label>
                    </div>
    </div>
                </div>

                <!-- Question 10 -->
                <div class="question-container hidden" id="question10">
                    <p class="mb-4 text-2xl text-center">Are you worried about pets nibbling on your plants?</p>
                    <div class="flex flex-col items-center">
                    <div class="flex flex-col text-left">
                        <label for="q10A" class="block mb-2 text-xl"><input type="radio" name="q10" id="q10A" class="mr-2"> Yes, I need to make sure that the plant is pet safe!</label>
                        <label for="q10B" class="block mb-2 text-xl"><input type="radio" name="q10" id="q10B" class="mr-2"> No</label>
                    </div>
    </div>
                </div>

                <!-- Button to show the next question -->
                <div class="flex justify-center pt-4 mt-4">
                    <button type="button" id="next-button" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 text-xl">Next</button>
                </div>
            </form>

            <div id="result" class="mt-6 text-center text-2xl font-semibold hidden"></div>

            <div id="resultButton" class="mt-6 text-center text-2xl font-semibold hidden">
            <form action="plantCare.php" method="post">
                <input type="hidden" name="plant" id="plant">
                <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 text-xl">Go to my plant's care page</button>
            </form>
    </div>
            
        </div>
    </div>
</body>
</html>

    <script>
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
                    displayResult(recommendedPlant);
                    break;
                case 2:
                    recommendedPlant = "Cacti";
                    displayResult(recommendedPlant);
                    break;
                case 3:
                    recommendedPlant = "Succulent";
                    displayResult(recommendedPlant);
                    break;
                case 4:
                    recommendedPlant = "Large Leaf Philodendron";
                    displayResult(recommendedPlant);
                    break;
                case 5:
                    recommendedPlant = "Vining Philodendrons and Pothos";
                    displayResult(recommendedPlant);
                    break;
                case 6:
                    recommendedPlant = "Ferns";
                    displayResult(recommendedPlant);
                    break;
                case 7:
                    recommendedPlant = "Philodendrons or Pothos on a Moss Pole";
                    displayResult(recommendedPlant);
                    break;
                case 8:
                    recommendedPlant = "Orchid Cactus"
                    displayResult(recommendedPlant);
                    break;
                case 9:
                    recommendedPlant = "Alocasia";
                    displayResult(recommendedPlant);
                    break;
                case 10:
                    recommendedPlant = "Calathea";
                    displayResult(recommendedPlant);
                    break;
                case 11:
                    recommendedPlant = "Carnivorous Plants";
                    displayResult(recommendedPlant);
                    break;
                case 12:
                    recommendedPlant = "ZZ Plant";
                    displayResult(recommendedPlant);
                    break;
                case 13:
                    recommendedPlant = "String of (Pearls, Bananas, Turtles, etc.)";
                    displayResult(recommendedPlant);
                    break;
                case 14:
                    recommendedPlant = "Fiddle Leaf Fig";
                    displayResult(recommendedPlant);
                    break;
                case 15:
                    recommendedPlant = "Rubber Plant";
                    displayResult(recommendedPlant);
                    break;
                case 16:
                    recommendedPlant = "Aglaonema";
                    displayResult(recommendedPlant);
                    break;
                case 17:
                    recommendedPlant = "Dieffenbachia";
                    displayResult(recommendedPlant);
                    break;
                case 18:
                    recommendedPlant = "Monstera";
                    displayResult(recommendedPlant);
                    break;
                case 19:
                    recommendedPlant = "Hoyas";
                    displayResult(recommendedPlant);
                    break;
                case 20:
                    recommendedPlant = "Dracaena";
                    displayResult(recommendedPlant);
                    break;
            }
            
            

            // Display the result
            function displayResult(recPlant) {
                document.getElementById("next-button").classList.add('hidden');
                document.getElementById("heading").classList.add('hidden');
                document.getElementById("result").classList.remove('hidden');
                document.getElementById("quiz-form").classList.add('hidden');
                document.getElementById("quiz-form").classList.remove('bg-white');
                document.getElementById("plant").value = recPlant;
                console.log(recommendedPlant);
                document.getElementById("result").innerHTML = `Your ideal plant is: ${recPlant}`;
                document.getElementById("resultButton").classList.remove('hidden');
            }
        }

        // Event listener for the "Next" button
        document.getElementById("next-button").addEventListener("click", function() {
            showNextQuestion();
        });

    </script>
</body>
</html>