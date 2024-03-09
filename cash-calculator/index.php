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

<body>
  <div class="container">
            <div class="row">
                <input type="number" id="et2000" class="cash-input" placeholder="2000 Notes" />
                <span id="txt2000" class="cash-text"></span>
            </div>
            <div class="row">
                <input type="number" id="et500" class="cash-input" placeholder="500 Notes" />
                <span id="txt500" class="cash-text"></span>
            </div>
            <div class="row">
                <input type="number" id="et200" class="cash-input" placeholder="200 Notes" />
                <span id="txt200" class="cash-text"></span>
            </div>
              <div class="row">
                <input type="number" id="et100" class="cash-input" placeholder="100 Notes" />
                <span id="txt100" class="cash-text"></span>
            </div>
             <div class="row">
                <input type="number" id="et50" class="cash-input" placeholder="50 Notes" />
                <span id="txt50" class="cash-text"></span>
            </div>
            <div class="row">
                <input type="number" id="et20" class="cash-input" placeholder="20 Notes" />
                <span id="txt20" class="cash-text"></span>
            </div>
             <div class="row">
                <input type="number" id="et10" class="cash-input" placeholder="10 Notes" />
                <span id="txt10" class="cash-text"></span>
            </div>
             <div class="row">
                <input type="number" id="et5" class="cash-input" placeholder="5 Notes" />
                <span id="txt5" class="cash-text"></span>
            </div>
             <div class="row">
                <input type="number" id="et2" class="cash-input" placeholder="2 Notes" />
                <span id="txt2" class="cash-text"></span>
            </div>
             <div class="row">
                <input type="number" id="et1" class="cash-input" placeholder="1 Notes" />
                <span id="txt1" class="cash-text"></span>
            </div>
            <div class="row">
                <button id="btnReset">Reset</button>
            </div>
            
            <div class="row result-part">
                <span id="txtFinalCash">Total Cash: 0</span>
                <span id="txtFinalCashInWords">Zero</span>
            </div>
            
        </div>
	
    
</body>

    <script type="text/javascript">
        console.log('a');
        document.addEventListener("DOMContentLoaded", () => {
            const et2000 = document.getElementById('et2000');
            const et500 = document.getElementById('et500');
            const et200 = document.getElementById('et200');
            const et100 = document.getElementById('et100');
            const et50 = document.getElementById('et50');
            const et20 = document.getElementById('et20');
            const et10 = document.getElementById('et10');
            const et5 = document.getElementById('et5');
            const et2 = document.getElementById('et2');
            const et1 = document.getElementById('et1');
            
            const txt2000 = document.getElementById('txt2000');
            const txt500 = document.getElementById('txt500');
            const txt200 = document.getElementById('txt200');
            const txt100 = document.getElementById('txt100');
            const txt50 = document.getElementById('txt50');
            const txt20 = document.getElementById('txt20');
            const txt10 = document.getElementById('txt10');
            const txt5 = document.getElementById('txt5');
            const txt2 = document.getElementById('txt2');
            const txt1 = document.getElementById('txt1');
            
            const txtFinalCash = document.getElementById('txtFinalCash');
            const txtFinalCashInWords = document.getElementById('txtFinalCashInWords');
            const btnReset = document.getElementById('btnReset');
            
            const cashInputs = [et2000,et500,et200,et100,et50,et20,et10,et5,et2,et1]; 
            const cashTexts = [txt2000,txt500,txt200,txt100,txt50,txt20,txt10,txt5,txt2,txt1]; 
            
            cashInputs.forEach((input, index) =>{
                input.addEventListener('input', () => {
                    cashCalculate(index);
                });
            });
            
            function cashCalculate(index){
                const denominations = [2000,500,200,100,50,20,10,5,2,1]; 
                const rowValue = cashInputs[index].value * denominations[index]; 
                cashTexts[index].textContent = rowValue.toFixed(0); 
                
            }
            
        });
    </script>
    
</html>