const main = document.getElementById('movie-list');
const elemento = document.getElementById('el')
const query = elemento.value;
const burl = 'https://api.themoviedb.org/3';
const key = 'api_key=d3d135192efdf45a33f9e2ebc0a255c9&page=1&query=';
const urlimg = 'https://image.tmdb.org/t/p/w500';

const apiurl = burl + '/search/multi?' + key + query;
const burlj = 'https://api.rawg.io/api/';
const keyj = '5b7882438fe54117bea65320a07493b6&search=';


const apiurlj = burlj + 'games?key=' + keyj + query;






getmovies(apiurl);

function getmovies(url) {
    fetch(url).then(response => response.json()).then(data => {
        console.log(data.results);

        showmovies(data.results);
    })
}

function showmovies(data) {




    data.forEach(movie => {





        var { title, poster_path, name, vote_average, media_type, id } = movie;



        if (title == undefined) {
            title = name;
        }
        if (poster_path != undefined & vote_average > 3) {






            const movieEL = document.createElement('div');
            movieEL.classList.add('movies-boxb')
            movieEL.innerHTML = `
            
            <div class="movies-imgb">
                
            <a href="info.php?titulo=${id}&tipo=${media_type}&name=${title}" >  <img src="${urlimg+poster_path}" alt="${title}"></a>
            </div>
                       <div class="precio"> <a href="perfil.php?tipo=tv&imagen=${urlimg+poster_path}&articulo=${title}"><i class="fa fa-cart-plus" style="color: white; font-weigth: bold;font-size: 1em"></i></a></div>
            <a href="info.php?titulo=${id}&tipo=${media_type}&name=${title}" id="pmovbox" >${title}</a>
            
      </a>
    
        `

            main.appendChild(movieEL);




        }

    });

}








getjuegos(apiurlj);

function getjuegos(urlj) {
    fetch(urlj).then(response => response.json()).then(dataj => {
        console.log(dataj.results);
        showjuegos(dataj.results);
    })
}

function showjuegos(dataj) {




    dataj.forEach(game => {





        var { name, background_image, rating, id } = game;

        if (rating > 2) {

            const movieEL = document.createElement('div');
            movieEL.classList.add('movies-boxb')
            movieEL.innerHTML = `
            
            <div class="movies-imgb">
                
            <a href="info.php?titulo=${id}&tipo=Juego&name=${name}" > <img src="${background_image}" alt=""></a>
            </div>
            <div class="precio"> <a href="perfil.php?tipo=Juego&imagen=${background_image}&articulo=${name}"><i class="fa fa-cart-plus" style="color: white; font-weigth: bold;font-size: 1em"></i></a></div>
            <a href="info.php?titulo=${id}&tipo=Juego&name=${name}" id="pmovbox">${name} (Juego)</a>
            
      </a>

    
        `


            main.appendChild(movieEL);

        }

    });
}