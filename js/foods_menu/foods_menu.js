const page1 = document.getElementById("p1")
const page2 = document.getElementById("p2")

const b = document.getElementById("back")
const f = document.getElementById("forw")

b.addEventListener("click", function(){
    if(page1.style.display === "block") {
        page1.style.display = "none"
        page2.style.display = "block"
    } else {
        page1.style.display = "block"
        page2.style.display = "none"
    }
})

f.addEventListener("click", function(){
    if(page1.style.display === "block") {
        page2.style.display = "block"
        page1.style.display = "none"
    } else {
        page2.style.display = "none"
        page1.style.display = "block"
    }
})