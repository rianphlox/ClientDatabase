const score = document.querySelector('#score')
    let grade;
    score.onchange = (e) => {
      e.preventDefault();
      scoreValue = score.value
      let grade;
      if (scoreValue > 0 && scoreValue < 45) {
        grade = 'F'
      } else if (scoreValue >= 45 && scoreValue < 50) {
        grade = 'D'
      } else if (scoreValue >= 50 && scoreValue < 60) {
        grade = 'C'
      } else if (scoreValue >= 60 && scoreValue < 70) {
        grade = 'B'
      } else {
        grade = 'A';
      }
      
      document.querySelector('#grade').value = grade;
      
    }