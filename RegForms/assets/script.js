/* let input = document.querySelector('.int')
input.addEventListener("click",()=>{
    if(document.body.style.backgroundColor == "lightblue")
    {
        document.body.style.backgroundColor = "#aa89bd"
    }
    else
    {
        document.body.style.backgroundColor = "lightblue";
    }
})*/

animation.onclick = function () {
    let start = Date.now();

    let timer = setInterval(function () {
        let timePassed = Date.now() - start;
        animation.style.left = timePassed / 5 + 'px';
        animation.style.backgroundColor = 'red';
        if (timePassed > 5000) {
            clearInterval(timer)
            animation.style.backgroundColor = 'blueviolet';
        }
        ;
    }, 20);
}






