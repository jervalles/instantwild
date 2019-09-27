
function setRandomNumbers () {return Math.floor(Math.random()*500)};

const voteButtons = document.querySelectorAll('article button');

for (let btn of voteButtons) {

    /* Random starting number for counters */
    btn.querySelector('span').textContent = setRandomNumbers();

    btn.addEventListener('click', (event) => {
    
        const target = event.currentTarget;
        
        let span = target.querySelector('span');
        
        
        // let counter = span.textContent;
        let hasVoted = target.classList.contains("hasVoted");

        if (!hasVoted){
            span.textContent ++ ; 
            target.classList.add('hasVoted');
        }  else{
            span.textContent -- ;
            target.classList.remove('hasVoted');
        }  
        
        
    });
};
   
    
    

