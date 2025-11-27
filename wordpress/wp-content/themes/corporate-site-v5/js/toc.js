function smoothScroll(range) {
    var position = 0;
    var progress = 0;
    var easeOut = (p) => {
        return p * (4 - p);
    }
    var move = () => {
        progress++;
        position = range * easeOut(progress / 100);
        window.scrollTo(0, position);
        if (position < range) {
            requestAnimationFrame(move);
        }
    }

    requestAnimationFrame(move);
}

document.addEventListener("DOMContentLoaded",()=>{
    var ToC = Array.from(document.querySelectorAll('.toc__list a'));
    ToC.forEach(conts => {
        conts.addEventListener('click', event => {
            event.preventDefault();
            var loc = event.target.getAttribute('href').slice(1);
            var span = document.getElementById(loc);
            var py = span.parentNode.getBoundingClientRect().top + window.pageYOffset - 90;
            smoothScroll(py);
        })
    })
})