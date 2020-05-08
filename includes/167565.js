$(document).ready(function (result) {

    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('id') != null) {
        //done // New API readSingleMovie
        // Post API (AJAX), Send urlPramas.get('id') 
        //done // Query " 'Select * from movie where id = '.$_POST['id']"

        $.ajax({
            type: 'POST',
            url: 'http://localhost/project/php/api/readSinglemovie.php',
            data: {"id" : urlParams.get('id')},
            success: function(data){
                $movie = data.data[0];
                //To DO
            }
            
        });
        
         let container2 = document.getElementById("container2");

            let div1 = document.createElement("div");
            div1.className = "film";

            let div2 = document.createElement("div");
            div2.className = "film-img";
            div1.appendChild(div2);

            let img = document.createElement("img");
            img = new Image();
            img.src = result.data[i].image;
            img.height = 255;
            img.width = 205;


            //send
            let a = document.createElement("a");

            a.href = "moviePage.php?id=" + result.data[i].id;

            a.appendChild(img);

            div2.appendChild(a);

            let title = document.createElement("div");
            title.className = "text";

            let header = document.createElement("h2");
            header.className = "film-title";
            header.innerHTML = result.data[i].name;

            title.appendChild(header);

            div1.appendChild(title);



    }
    
                   

    $.get("http://localhost/project/php/api/readMovie.php", function (result) {
        for (let i = 0; i < result.data.length; i++) {

            let container = document.getElementById("container");

            let div1 = document.createElement("div");
            div1.className = "film";

            let div2 = document.createElement("div");
            div2.className = "film-img";
            div1.appendChild(div2);

            let img = document.createElement("img");
            img = new Image();
            img.src = result.data[i].image;
            img.height = 255;
            img.width = 205;


            //send
            let a = document.createElement("a");

            a.href = "moviePage.php?id=" + result.data[i].id;

            a.appendChild(img);

            div2.appendChild(a);

            let title = document.createElement("div");
            title.className = "text";

            let header = document.createElement("h2");
            header.className = "film-title";
            header.innerHTML = result.data[i].name;

            title.appendChild(header);

            div1.appendChild(title);

            let ratingDiv = document.createElement("div");
            ratingDiv.className = "rating";

            var rating = result.data[i].rate;
            for (let i = 0; i < 5; i++) {
                let star = document.createElement("span");
                star.className = "fa fa-star checked";
                if (rating == 0) {
                    star.style.color = "grey";
                } else {
                    star.style.color = "gold";
                    rating--;
                }

                ratingDiv.appendChild(star);

            }

            div1.appendChild(ratingDiv);

            container.appendChild(div1);

        }
    });

});


