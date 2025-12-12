let text = document.getElementById('text');
let leaf1 = document.getElementById('leaf1');
let leaf2 = document.getElementById('leaf2');
let behind = document.getElementById('behind');
let under1 = document.getElementById('under1');
let under2 = document.getElementById('under2');
let under3 = document.getElementById('under3');

const page1 = document.getElementById('surface2');

window.addEventListener('scroll', () => {
    let value = window.scrollY;
    let maxScroll = page1.offsetHeight;

    if(value <= maxScroll ){
        text.style.marginTop = value * 1.5 + 'px';
        leaf1.style.top = value * -0.3 + 'px';
        leaf1.style.left = value * -0.3 + 'px';
        leaf2.style.top = value * -0.3 + 'px';
        leaf2.style.left = value * 0.3 + 'px';
        under1.style.left = value * -0.3 + 'px';
        under2.style.left = value * 0.3 + 'px';
        under3.style.left = value * 0.3 + 'px';
        behind.style.top = value * 0.3 + 'px';
    }
    else{
        text.style.marginTop = maxScroll * 1 + 'px';
    }
});


/*------*/


const imgs = document.querySelectorAll(".aniZSpec");

let lastScroll = window.scrollY;

window.addEventListener("scroll", () => {
    const scrollingDown = window.scrollY > lastScroll;
    const scrollingUp = window.scrollY < lastScroll;
    
    lastScroll = window.scrollY;

    imgs.forEach(img => {
        const rect = img.getBoundingClientRect();
        const imgCenter = rect.top + rect.height / 2;
        const screenCenter = window.innerHeight / 2;

        const distance = Math.abs(imgCenter - screenCenter);
        let calculatedScale = 1.0 - distance / 2000; 
        if (calculatedScale > 1.0) calculatedScale = 1.0; 
        if (calculatedScale < 0.7) calculatedScale = 0.7;
        
        let finalScale = calculatedScale;
        const maxScaleReached = parseFloat(img.dataset.maxScale || 0.7);
        
        if (scrollingDown) {
            if (calculatedScale > maxScaleReached) {
                finalScale = calculatedScale;
                img.dataset.maxScale = finalScale.toFixed(2); 
            } else {
                finalScale = maxScaleReached;
            }
        } 
        
        else if (scrollingUp) {
            if (calculatedScale === 0.7) {
                finalScale = 0.7;
                img.dataset.maxScale = 0.7;
            } else {
                 finalScale = maxScaleReached;
            }
        }
        if (finalScale > 1.0) finalScale = 1.0; 
        if (finalScale < 0.7) finalScale = 0.7;
        img.style.transform = `scaleX(${finalScale})`;
    });
});