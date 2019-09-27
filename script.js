
function setRandomNumbers () {return Math.floor(Math.random()*500)}

const voteButtons = document.getElementsByClassName('voteButton');

for (let btn of voteButtons) {

    /* Random starting number for counters */
    btn.getElementsByTagName('span')[0].textContent = setRandomNumbers();

    btn.addEventListener('click', event => {
    
        const target = event.target;
        
        let hasVoted = target.classList.contains("true");
        let span = target.getElementsByTagName('span')[0];
        let counter = parseInt(span.textContent);
        
        if (!hasVoted){
            counter++;
            target.classList.add('true');
        }  else{
            counter--;
            target.classList.remove('true');
        }  
        span.textContent = counter;
        
        console.log("-----");
        console.log(hasVoted);
        console.log(counter);
    });
}
   
    
    

