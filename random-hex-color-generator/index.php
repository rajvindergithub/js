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
</head>
<style type="text/css">
    
    @import url('https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap');
        
    body{ margin: 0px; padding: 0px; font-family: 'Arial'; }
    
    h1{ text-align: center; text-decoration: underline; }
    
    .container{
        display: flex; 
        flex-wrap: wrap;
        justify-content: center; 
    }
    
    .color-container{
        background-color: rgba(15,70,70);
        width: 25%; height: 250px;
        color: #FFF; 
       
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-size: 3rem;  
         font-family: "Source Code Pro", monospace;
         text-shadow: 0px 2px 0px rgba(0,0,0,0.25); 
        letter-spacing: -4px; 
    }
    
    button{ background-color: #000; border: none; border-radius: 3px; padding: 8px 10px; margin-top: 15px; transition: background-color 0.3s; cursor: pointer; color: #FFF;}
    button:hover{
        background-color: #bcbcbc; 
    }
    
    </style>
<body>
 
   <section id="randomColorGenerator">
       
       <h1>Random Color Generator</h1>
       
       <div class="container">
<!--
           <div class="color-container">
                <span>#efefef</span>
               <button>Copy</button>
           </div>
-->
        </div>
       
    </section>
    
</body>
    
<script type="text/javascript">
    const containerEl = document.querySelector(".container");
    
    for(var i = 0; i < 500; i++){
        
      const colorContainerEl = document.createElement('div');
        colorContainerEl.classList.add('color-container');
        
        const colorCodeEl = document.createElement('span');
        colorCodeEl.classList.add("color-code");
         colorContainerEl.appendChild( colorCodeEl);
        
        const copyButtonEl = document.createElement("button");
        copyButtonEl.classList.add('button_1');
        copyButtonEl.innerText = "Copy"; 
        colorContainerEl.appendChild(copyButtonEl);
        
     containerEl.appendChild(colorContainerEl);    
        
    }
    


    
    function randomColor(){
         
        const chars = "0123456789ABCDEF";
        
        const colorCodeLength = 6; 
        let colorCode = ""; 
        
        for(let i = 0; i < colorCodeLength; i++){
            
            const randomNum = Math.floor(Math.random() * chars.length); 
            colorCode += chars.substring(randomNum, randomNum+1); 
             
        }
         console.log(colorCode); 
        
        return colorCode; 
        
    }
    
    const mainColorContainerEls = document.querySelectorAll(".color-container");
     
    generateColor(); 
    
    function generateColor(){
        
        for(let i=0; i < mainColorContainerEls.length; i++ ){
            const colorContainerEl = mainColorContainerEls[i];
            const newColorCode = randomColor();
            var colorCodeEl = colorContainerEl.querySelector('.color-code');
            
            colorContainerEl.style.backgroundColor = "#" + newColorCode;
           
            colorCodeEl.innerText = "#" + newColorCode;
            
        }
        
    }
    
    mainColorContainerEls.forEach((colorContainerEL) => {
        
        const copyButtonEL = colorContainerEL.querySelector('button');
        const colorCodeEl = colorContainerEL.querySelector('.color-code');
         
        copyButtonEL.addEventListener('click', () => {
            const colorCode = colorCodeEl.innerText; 
            copyClipBoard(colorCode);
        });
        
    });
    
    
    function copyClipBoard(codeCodeHex){
        alert(codeCodeHex);
    }
    
</script>    

</html>