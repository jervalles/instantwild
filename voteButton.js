
function setRandomNumbers (num) {return Math.floor(Math.random()*num)};

const voteButtons = document.querySelectorAll('article button');

for (let btn of voteButtons) {

    /* Random starting number for counters */
    btn.querySelector('span').textContent = setRandomNumbers(500);

    btn.addEventListener('click', (event) => {
    
        const target = event.currentTarget; 
        
        let span = target.querySelector('span'); // conteneur du compteur
        
        let buttonDuo = target.parentNode.querySelectorAll('button') ;
        
        let globalHasVoted = false;  
        buttonDuo.forEach( e => {if (e.classList.contains("hasVoted")) {globalHasVoted = true} });        // check si il y a un vote sur le post
        
        let hasVoted = target.classList.contains('hasVoted') 
        
        if (!globalHasVoted) { //       si il n'y a auccun vote sur le post
            span.textContent ++ ; 
            target.classList.add('hasVoted');
            
        }  else if (hasVoted) { //      si il y a un vote sur le post     et qu'il est sur le boutton d'ou vient le clic
            span.textContent -- ; 
            target.classList.remove('hasVoted');

        } else  {    //                 si il y a un vote sur le post     et qu'il est sur l'autre boutton
            buttonDuo.forEach(e=>{   
                if (e.classList.contains('hasVoted')){
                    e.querySelector('span').textContent-- ;
                };
            });
            span.textContent ++ ; 
            buttonDuo.forEach(e=>e.classList.toggle('hasVoted')) ;
        }
        
        
    });
};
   
    
    

