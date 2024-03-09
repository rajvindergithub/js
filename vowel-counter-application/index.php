<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<title>Vowel Counter Application</title>
	<meta name="author" content="Your Name">
	<meta name="description" content="Example description">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="">
	<link rel="icon" type="image/x-icon" href=""/>
</head>
    
    <style type="text/css">
        body{ font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background: linear-gradient(to right, #33001b, #ff0084);}
        .container{ background-color: rgba(255,255,255,0.2); backdrop-filter: blur(10px); box-shadow: 0px 0px 10px rgba(0,0,0,0.2); border-radius: 10px; padding: 20px; display: flex; flex-direction: column; align-content: center; animation: neonGlow 1s infinite alternate;  }
        h1{ color: #FFF; font-size: 36px; margin-bottom: 20px;}
        textarea{ width: 400px; height: 250px; margin: 10px auto; display: block; font-size: 24px; padding: 20px; color: rgba(0,0,0,1); border: 1px solid #ddd; border-radius: 5px; resize: none; animation: slideIn 1s ease;  }
        
        button{
            padding: 15px 30px; display: block; width: 300px; margin: auto; font-size: 20px; font-weight: bold; background-color: #4caf50; color: #FFF; border: none; border-radius: 5px; text-transform: uppercase; cursor: pointer; transition: background-color 0.3s ease; 
        }
        
        button:hover{
            background-color: #33022b; 
        }
        
        #result{
            font-size: 20px; 
            margin-top: 20px; 
            color: azure;
            font-weight: bold; 
        }
        
        @keyframes slideIn{
            from{
                opacity: 0; 
                transform: translateY(-20px);
            }
            to{
                opacity: 1; 
                transform: translateY(0px; )
            }
        }
        
        @keyframes neonGlow{
            from{
                box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
            }
            
            to{
                box-shadow: 0px 0px 20px #e61380, 0px 0px 30px #cd1c78, 0px 0px 40px #ff0084 ;
                
            }
        }
        
    </style>

<body>
	<div class="container">
        <h1>Vowel Checker</h1>
        <textarea id="inputText" placeholder="Enter your text ..."></textarea>
        <button onclick="checkVowels(); ">Count Vowel</button>
        <p id="result">Result</p>
    </div>
</body>
    
<script type="text/javascript">
    function checkVowels(){
        let text = document.getElementById('inputText').value;
        let vewelCount = 0; 
        
        text = text.toLowerCase(); 
        
        for(let i=0; i < text.length; i++){
           let char = text.charAt(i); 
            
            if(isVowels(char)){
                vewelCount++; 
            }
            
        }
        
        console.log(vewelCount);
        
        const result = document.getElementById('result');
        
        result.textContent = "Total Vowels: "+ vewelCount; 
        
    }
    
    function isVowels(char){
        const vowels = ['a','e','i','o','u'];
        return vowels.includes(char);
    }
    
  
    
</script>    

</html>