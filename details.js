(async() => {    
    let url = new URL(window.location.href);

    let res = await fetch("detailsdata.php?name="+url.searchParams.get("name")+"&time="+url.searchParams.get("time")).then((d) => d.json());
   
    for(let row of res){
        row.unfreePercent = Math.floor((1 - row.free/row.total) * 100)
    }

    let cv = document.querySelector("#chart canvas");
    let ctx = cv.getContext("2d");


    let label = 'Auslastung in % ';
    switch(url.searchParams.get("time")){
      case 'ALL':
        label += "gesamte Zeit"
        break;
        case '1J':
        label += "des letzten Jahres"
        break;
        case '1M':
        label += "des letzten Monats"
        break;
        case '1W':
        label += "der letzten Woche"
        break;
        case '24H':
        label += "der letzten 24H"
        break;
    }

    const config = {
        type: 'line',
        data: {
            labels: res.map((e) => e.created_at),
            datasets: [{
              label,
              data: res.map((e) => e.unfreePercent),
              fill: false,
              tension: 0.1
            }]
          },
          options: {
            responsive: true,
            scales: {
                y:{
                    max: 100,
                    min: 0
                }
            }
          }
      };
   
      new Chart(ctx, config);



      let buttons = document.querySelectorAll("#buttons div");

      for(let btn of buttons){
        if(btn.innerText === url.searchParams.get("time")){
            btn.classList.add("selected-item");
        }
        btn.addEventListener("click", () => {
            window.location.assign("?name="+url.searchParams.get("name")+"&time="+btn.innerText);
        })
      }
})()
