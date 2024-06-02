let positions = [
    {
        name: "Andreasstrasse 65",
        x: 185,
        y: 100
    },{
        name: "Winterthurerstrasse 181",
        x: 130,
        y: 110
    },{
        name: "Förrlibuckstrasse 151",
        x: 180,
        y: 115
    },{
        name: "Bullingerstrasse 73",
        x: 110,
        y: 135
    },{
        name: "Gessnerallee 14",
        x: 220,
        y: 160
    },{
        name: "Uraniastrasse 3",
        x: 190,
        y: 170
    },{
        name: "Rämistrasse 22a",
        x: 185,
        y: 190
    },{
        name: "Badenerstrasse 420",
        x: 100,
        y: 120
    },{
        name: "Riesbachstrasse 7",
        x: 110,
        y: 120
    },
    {
        name: "Sophie-Täuber-Strasse 4",
        x: 160,
        y: 140
    },
]

function hoverPoint(entry){
    let selectedHead = document.querySelector(".selected .head");
    selectedHead.innerText = entry.free + " SPACES";
    let selectedText = document.querySelector(".selected .selected-text");
    selectedText.innerHTML = `${entry.name}<br/>${entry.total-entry.free}/${entry.total}`
}

function clickPoint(entry){
    window.location.assign("details.php?name="+entry.name+"&time=ALL");
}

(async() => {
    let data = await fetch("maindata.php").then((r) => r.json());
    console.log(data);

    let points = document.getElementById("points");

    for(let point of positions){
        let pt = document.createElement("div");
        pt.style.left = point.x+"px";
        pt.style.top = point.y+"px";


        let dataEntry = data.find((d) => d.name === point.name);
        if(dataEntry){
            pt.addEventListener("mouseover", () => hoverPoint(dataEntry));
            pt.addEventListener("click", () => clickPoint(dataEntry));
            points.appendChild(pt);
        }
    }
})()



