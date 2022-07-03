window.addEventListener('load', () => {
    const clocks = document.querySelectorAll('p.clock');

    function fmtTimeNormal() {
        let d = new Date()
        return (d.getHours() % 12).toString().padStart(2, 0) + ":" + d.getMinutes().toString().padStart(2, 0) + ":"+ d.getSeconds().toString().padStart(2, 0) //+ (d.getHours >= 12 ? " pm" : " am");
    }

    setInterval(() => {
        clocks.forEach( clock => {
            clock.innerHTML = fmtTimeNormal()
        })
    }, 1000)

})