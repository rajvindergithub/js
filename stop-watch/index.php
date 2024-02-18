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
    body{ background-image: linear-gradient(25deg, #f181aa, #d36c76 50%); 
    display: flex; justify-content: center; align-items: center; min-height: 100vh; font-family: sans-serif; }
    .container{ background-color: #FFF; border-radius: 15px; padding: 20px; box-shadow: 0 0 12px rgba(0,0,0,0.1); display: flex; flex-direction: column; align-items: center; }
    .title{ font-size: 30px; margin-bottom: 1.5rem;  }
    .timer{ font-size: 40px; background-color: #efefef; padding: 20px; border-radius: 8px; box-shadow: 0 0 12px rgba(0,0,0,0.1); animation: pulse 1.5s infinite alternate; } 
    @keyframes pulse{
        from{
            transform: scale(1);
        }
        to{    
            transform: scale(1.05);
        }
    }
    
    .timer span{ width: 110px; display: inline-block; text-align: center; }
    
    .control{ display: flex; gap: 1rem;  }
    button{ padding: 0.75rem 1.5rem; font-size: 1rem; background-color: #f25191; border: none; border-radius: 5px; font-weight: 500; color: #FFF; cursor: pointer; transition: 0.3s ease-in-out;    }
    button:hover{
        background-color: #d72a76; 
    }
    
    .stopwatch{
        display: flex; flex-direction: column; align-items: center; gap: 20px; 
    }
    
    #laplist{ list-style: none; margin-left: -30px; padding: 0px; margin: 0px; overflow-y: auto; max-height: 200px; background-color: #eee; width: 100%;  }
    
    #laplist li{ width: 90%; padding: 1rem 0rem 1rem 1rem; border-bottom: 1px solid #e0e0e0;    }
    #laplist li:last-child{ border-bottom: none; }
    .lap-title{ font-size: 1.5rem; text-align: center; }
    .laps{ display: block; width: 100%;  }
    li span{ font-weight: 700}
    
</style>    

<body>
	<div class="container">
        <h1 class="title">Stopwatch Timer</h1>
        <div class="stopwatch">
            <div class="timer">
                <span id="minutes">00</span>
                <span id="seconds">00</span>
                <span id="milliseconds">00</span>
            </div>
            <div class="control">
                <button id="startBtn">Start</button>
                <button id="stopBtn">Stop</button>
                <button id="pauseBtn">Pause</button>
                <button id="resetBtn">Reset</button>
            </div>
            <div class="laps">
                <h2 class="lap-title">Lap Timer</h2>
                <ul id="laplist">
                    <li>Lap 1 : 01:45</li>
                </ul>
            </div>
        </div>
    </div>
</body>
    
    <script type="text/javascript">
      
        const minutesLabel = document.getElementById('minutes');
        const secondsLabel = document.getElementById('seconds');
        const millisecondsLabel = document.getElementById('milliseconds');
        
        const startButton = document.getElementById('startBtn');
        const stopButton = document.getElementById('stopBtn');
        const pauseButton = document.getElementById('pauseBtn');
        const resetButton = document.getElementById('resetBtn');
        
        const lapList = document.getElementById('laplist');
        
        let minutes = 0; 
        let seconds = 0; 
        let milliseconds = 0; 
        let interval;
        
        startButton.addEventListener('click', startTimer);
        stopButton.addEventListener('click', stopTimer);
        pauseButton.addEventListener('click', pauseTimer);
        resetButton.addEventListener('click', resetTimer);
        
        function startTimer(){
            
            interval = setInterval(updateTimer, 10);
     
            startButton.disabled = true; 
        }
        
        function stopTimer(){
            clearInterval(interval);
         
            startButton.disabled = false;  
            addToLapList();
               resetTimerData(); 
        }
        
        function pauseTimer(){
            clearInterval(interval);
            pauseButton.disabled = true; 
        }
        
        function resetTimer(){
           clearInterval(interval);
            resetTimerData(); 
            startButton.disabled = false; 
        }
        
        function updateTimer(){
            milliseconds++; 
            if(milliseconds === 100){
                milliseconds = 0; 
                seconds++; 
                if(seconds === 60){
                    seconds = 0; 
                    minutes++; 
                }
            }
            displayTimer(); 
        }
        
        function displayTimer(){
            millisecondsLabel.textContent = padTime(milliseconds); 
            secondsLabel.textContent = padTime(seconds); 
            minutesLabel.textContent = padTime(minutes); 
        }
        
        function padTime(time){
            return time.toString().padStart(2,0); 
        }
        
        function resetTimerData(){
             minutes = 0; 
            seconds = 0; 
            milliseconds = 0; 
             displayTimer();
        }
        
        function addToLapList(){
            const lapTime = `${padTime(minutes)}: ${padTime(seconds)}: ${padTime(milliseconds)}`;
            const listItem = document.createElement('li');
            
            listItem.innerHTML = `<span>Lap ${lapList.childElementCount+1}: </span>: ${lapTime}`;
             
            lapList.appendChild(listItem);
        }
        
    </script>

</html>