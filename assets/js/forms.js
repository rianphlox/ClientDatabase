// <!-- javascript for init -->
// function showNotification(from, align){
//     color = 'primary';

//     $.notify({
//         icon: "nc-icon nc-bell-55",
//         message: "Welcome to <b>Paper Dashboard 2</b> - a beautiful freebie for every web developer."

//       },{
//           type: color,
//           timer: 8000,
//           placement: {
//               from: from,
//               align: align
//           }
//       });
// }


var forms = document.querySelectorAll('._form')
forms.forEach(form => {
    form.addEventListener('submit', e => {
        e.preventDefault();
        fetch('../req/add.php', {
            method: "POST",
            body: new FormData(form)
        })
        .then(res => res.json())
        .then(data => {
            demo.showNotification('top','right', data.msgClass, data.msg)
            setTimeout(() => {
                form.reset()
            }, 1000);
            
        })
        .catch(err =>console.log(err))
    })
})
// var forms = document.querySelectorAll('._form')
// forms.forEach(form => {
//     form.addEventListener('submit', e => {
//         e.preventDefault();
//         fetch('../req/add.php', {
//             method: "POST",
//             body: new FormData(form)
//         })
//         .then(res => res.json())
//         .then(data => console.log(data))
//         .catch(err =>console.log(err))
//     })
// })

// const score = document.querySelector('#score')
//     let grade;
//     score.onchange = (e) => {
//       e.preventDefault();
//       scoreValue = score.value
//       let grade;
    //   if (scoreValue > 0 && scoreValue < 45) {
    //     grade = 'F'
    //   } else if (scoreValue >= 45 && scoreValue < 50) {
    //     grade = 'D'
    //   } else if (scoreValue >= 50 && scoreValue < 60) {
    //     grade = 'C'
    //   } else if (scoreValue >= 60 && scoreValue < 70) {
    //     grade = 'B'
    //   } else {
    //     grade = 'A';
    //   }
      
//       document.querySelector('#grade').value = grade;
      
//     }

