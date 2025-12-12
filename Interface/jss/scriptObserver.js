const observer = new IntersectionObserver((entries) =>{
    entries.forEach((entry) =>{
        if(entry.isIntersecting){
            console.log(entry.target)
            entry.target.classList.add("show");
        }
        else{
            entry.target.classList.remove("show");
        }
    })
}, {})
const paraEle = document.querySelectorAll(".para");
paraEle.forEach(el => observer.observe(el));

/*----------*/

const observer1 = new IntersectionObserver((entries) =>{
    entries.forEach((entry) =>{
        if(entry.isIntersecting){
            console.log(entry.target)
            entry.target.classList.add("show1")
        }
    })
}, {})
const aniZEle = document.querySelectorAll(".aniZ")
aniZEle.forEach(el => observer1.observe(el));