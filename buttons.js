window.addEventListener('load', () => {
    let li = document.querySelectorAll('.counter ul li');
    li.forEach( (l, i) => {
        l.addEventListener('click', () => {
            console.log(`Clicked: ${i + 1}`)
        })
    })
}, false)