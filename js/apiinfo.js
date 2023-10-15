const main = document.getElementById('mainn');
const input = document.getElementById('tit');
const inputipo = document.getElementById('tip');
const id = input.value;
const tip = inputipo.value;
const burl = 'https://api.themoviedb.org/3';
const key = '?api_key=d3d135192efdf45a33f9e2ebc0a255c9';

const mandart = burl + '/tv/' + id + key + '&language=es';
const consult = 'https://imdb-api.com/es/API/Title/';
const keyyy = 'k_wk0v7xj8/';

const mandarm = burl + '/movie/' + id + key + '&language=es';

const urlimg = 'https://image.tmdb.org/t/p/w300/';


const burlj = 'https://api.rawg.io/api/games/';
const keyj = '?key=5b7882438fe54117bea65320a07493b6';
const mandarj = burlj + id + keyj





if (tip == "Juego") {
    getjuegos(mandarj);
} else if (tip == "movie") {
    getmovies(mandarm);
} else if (tip == "tv") {
    getseries(mandart);
}



function getmovies(url) {
    fetch(url).then(response => response.json()).then(data => {
        console.log(data);
        showinfo(data);
    })
}

function getjuegos(url) {
    fetch(url).then(response => response.json()).then(data => {
        console.log(data);
        showinfoj(data);
    })
}

function getseries(url) {
    fetch(url).then(response => response.json()).then(data => {
        console.log(data);
        showinfot(data);
    })
}


function showinfo(data) {
    var {
        title,
        poster_path,
        release_date,
        genres,
        overview,
        production_countries,
        production_companies,
        vote_average,
        tagline,
        original_language
    } = data;





    const movieEL = document.createElement('div');
    movieEL.classList.add('movies-boxc')
    movieEL.innerHTML = `
    
            <div class="movies-imgc">
                
                <img src="${urlimg+ poster_path}" alt="${title}">
                
            </div>
            <div class="derecha">
            <h1>Titulo:  ${title}</h1>
          <h3>Idioma:  ${original_language}</h3>
          <h3>Género:  ${ genres[0]["name"]}</h3>
          <h3>Año:  ${release_date}</h3>
          <h3>País:  ${production_countries[0]["name"]}</h3>
          <h3>Compañía:  ${production_companies[0]["name"]}</h3>
          <h3>Síntesis:  ${tagline}</h3>
          <h3>Valoración:  ${vote_average} <i class="fa fa-star" style="color: yellow;"></i></h3>
          
            </div>
           
          <p><strong>Descripcion:</strong>  ${overview}</p>
          
          
          
    
        `

    main.appendChild(movieEL);


}

function showinfot(data) {
    var {
        name,
        poster_path,
        first_air_date,
        number_of_seasons,
        overview,
        origin_country,
        vote_average,
    } = data;







    const movieEL = document.createElement('div');
    movieEL.classList.add('movies-boxc')
    movieEL.innerHTML = `
    
            <div class="movies-imgc">
                
                <img src="${urlimg + poster_path}" alt="${name}">
                
            </div>
            <div class="derecha">
            <h1>Titulo:  ${name}</h1>
          <h3>Pais:  ${origin_country}</h3>
          <h3>Estreno:  ${first_air_date}</h3>
          <h3>Temporadas: ${number_of_seasons}</h3>
          <h3>Valoración:  ${vote_average} <i class="fa fa-star" style="color: yellow;"></i></h3>
          
            </div>
           
          <p><strong>Descripcion:</strong>  ${overview}</p>
          
          
          
    
        `

    main.appendChild(movieEL);


}


function showinfoj(data) {

    var { name, background_image, released, description_raw, rating } = data;




    const movieEL = document.createElement('div');
    movieEL.classList.add('movies-boxc')
    movieEL.innerHTML = `
        
                <div class="movies-imgc">
                    
                    <img src="${background_image}" alt="${name}" >
                    
                </div>
                <div class="derecha">
                <h1>Titulo:  ${name}</h1>
              <h3>Tipo:  Videojuego</h3>
              <h3>Lanzamiento:  ${released}</h3>
             
              <h3>Rating:  ${rating}/5 <i class="fa fa-star" style="color: yellow;"></i></h3>
              
                </div>
               
              <p style="float: left; width: 90%" translate="yes"><strong>Descripcion:</strong>  ${description_raw}</p>
              
              
              
        
            `

    main.appendChild(movieEL);

}