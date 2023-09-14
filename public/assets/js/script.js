let actualities = document.getElementsByClassName('actualities');
let limit = 3;

    for (var i = 0; i < actualities.length; i++) {
        actualities[i].addEventListener('change', function() {
            var checkedCount = document.querySelectorAll('.actualities:checked').length;

            if (checkedCount > limit) {
                this.checked = false;
            }
        });
    }



// partie changement de thème 
let btnChangeTheme = document.getElementById('theme-btn');
let body = document.getElementsByTagName('body')[0];

let light_theme_class = 'lightMode';


//Fonction local storage 
//permet d'ajouter l'item theme (light theme) au local storage
function setThemeToLocalStorage(theme) {
    localStorage.setItem('theme', theme);
}

//permet de charger l'item theme à partir du local storage
function loadThemeFromLocalStorage() {
    const theme = localStorage.getItem('theme');
    if (theme === light_theme_class) {
        body.classList.add(light_theme_class);
    }
}

btnChangeTheme.addEventListener('click', function(e) {
    e.preventDefault();
    if (body.classList.contains(light_theme_class)) {
        body.classList.remove(light_theme_class);
        //ici l'item theme est supprimé si l'utilisateur choisit le thème sombre
        localStorage.removeItem('theme');
    } else {
        body.classList.add(light_theme_class);
        //ici le choix du thème clair est défini
        setThemeToLocalStorage(light_theme_class);
    }
    
});

window.addEventListener('load', loadThemeFromLocalStorage);