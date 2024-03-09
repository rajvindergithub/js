<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<title>Example Title</title>
	<meta name="author" content="Your Name">
	<meta name="description" content="Example description">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="">
	<link rel="icon" type="image/x-icon" href=""/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <style type="text/css">
        *{ margin: 0px; padding: 0px; box-sizing: border-box; font-family: Arial, sans-serif; }
        
        body{ display: flex; justify-content: center; align-items: center; min-height: 100vh; background: linear-gradient(to right, #4e54c8, #8f95fb); }
    
        .container{ max-width: 500px; width: 100%; border-radius: 5px; padding: 40px 30px; background-color: #FFF; box-shadow: 2px 2px 10px rgba(0,0,0,0.1); }
        
        .container h1{ text-align: center; font-weight: bold; margin-bottom: 36px; color: #333; text-decoration: underline; }
        
        .inputBox{ position: relative; margin-bottom: 5px; }
        .inputBox span{ position: absolute; top: 50%; right: 12px; transform: translateY(-50%); color: #333; font-size: 20px; cursor: pointer; }
        .passBox{ width: 100%; height: 40px; padding: 8px; border: none; border-radius: 4px; font-size: 16px; font-weight: 700; background-color: rgba(0,0,0,0.15);  }
        .row{ display: flex; justify-content: space-between; margin-bottom: 15px; margin-top: 15px; }
        .getBtn{ width: 100%; padding: 12px 0px; border: none; border-radius: 4px; font-size: 16px; font-weight: bold; color: #fff; background-color: #3162cb; cursor: pointer; margin-top: 30px; }
        .getBtn:hover{ background-color: #1d1e20; }
        
        input[type="range"]{ width: 100%; margin-top: 10px; }
        
        #sliderValue{ margin-right: 7px; }
        
        .pass-indicator{ width: 100%; height: 4px; position: relative; background-color: rgba(0,0,0,0.25); border-radius: 25px; }
        
    </style>
    
</head>

<body>
	
    <div class="container">
        <h1>Password Generator</h1>
        <div class="inputBox">
            <input type="text" class="passBox" id="passBox" disabled />
            <span class="material-symbols-outlined">content_copy</span>
        </div>
        <div class="pass-indicator" id="passIndicator"></div>
        
        <input type="range" min="1" max="30" value="6" step="1" id="inputSlider" />
        
        <div class="row">
            <p>Password length</p>
            <span id="sliderValue"></span>
        </div>
        
        
        <div class="row">
            <label for="numbers">Include Lowercase letter (a-z)</label>
            <input type="checkbox" name="lowercase" id="lowercase" checked />
        </div>
        
         <div class="row">
            <label for="numbers">Include Lowercase letter (A-Z)</label>
            <input type="checkbox" name="uppercase" id="uppercase" checked />
        </div>
        
         <div class="row">
            <label for="numbers">Include Numbers letter (a-z)</label>
            <input type="checkbox" name="numbers" id="numbers" checked />
        </div>
        
         <div class="row">
            <label for="numbers">Include Symbols (@-*)</label>
            <input type="checkbox" name="symbols" id="symbols" />
        </div>
        
        <button class="getBtn" id="getBtn">Generate Password</button>
        
    </div>
    
</body>
    
    <script type="text/javascript">
        const inputSlider = document.getElementById("inputSlider");
        const sliderValue = document.getElementById("sliderValue");
        const passBox = document.getElementById("passBox");
        
        const lowercaseEl = document.getElementById("lowercase");
        const uppercaseEl = document.getElementById("uppercase");
        const numbersEl = document.getElementById("numbers");
        const symbolsEl = document.getElementById("symbols");
        
        const generateBtn = document.getElementById("getBtn");
        const copyBtn = document.getElementById("copyIcon");
        const passIndicator = document.getElementById("passIndicator");
    
        const lowercaseLetters = "abcdefghijklmnopqrstuvwxyz";
        const uppercaseLetters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        const numbers = "012345679";
        const symbols = "!@#$%^&*()_+{}[]\\:;':/?.><,?/";
        
        
        sliderValue.textContent = inputSlider.value;     
        
        inputSlider.addEventListener("input", () => {
            sliderValue.textContent = inputSlider.value; 
            generatePassword();
        });
        
       function generatePassword(){
           const length = inputSlider.value; 
           let characters = "";
           let password = "";
           
           
           characters += lowercaseEl.checked ? lowercaseLetters : "";
           characters += uppercaseEl.checked ? uppercaseLetters : "";
           characters += numbersEl.checked ? numbers : "";
           characters += symbolsEl.checked ? symbols : "";
           
//           console.log(characters);
        
           for(let i = 0; i < length; i++){
               password += characters.charAt(Math.floor(Math.random() * characters.length));
                
           }
           console.log(password);
        }
        
    </script>
    

</html>