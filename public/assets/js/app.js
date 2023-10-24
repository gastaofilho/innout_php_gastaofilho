
(function () {
    const menuToggle = document.querySelector('.menu-toogle')
    menuToggle.onclick = function (e) {
        const body = document.querySelector('body')
        body.classList.toggle('hide-sidebar')
    }
})()



function activateClock() {
    const activateClock = document.querySelector('[active-clock]')
    if (!activateClock) return

    function addOneSecond(hours, minutes, seconds) {
        const d = new Date()

        d.setHours(parseInt(hours))
        d.setMinutes(parseInt(minutes))
        d.setSeconds(parseInt(seconds) + 1)

        const h = `${d.getHours()}`.padStart(2, 0)
        const m = `${d.getMinutes()}`.padStart(2, 0)
        const s = `${d.getSeconds()}`.padStart(2, 0)

        return `${h}:${m}:${s}`
    }

    setInterval(function () {
        const parts = activateClock.innerHTML.split(':')
        activateClock.innerHTML = addOneSecond(...parts)
    }, 1000)
}

activateClock()