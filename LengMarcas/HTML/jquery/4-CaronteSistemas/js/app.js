Skip to content
Why GitHub? 
Team
Enterprise
Explore 
Marketplace
Pricing 
Search

Sign in
Sign up
Adrxking
/
DiarioDeClase
100
Code
Issues
Pull requests
Actions
Projects
Security
Insights
DiarioDeClase/jQuery/JS/app.js /
@Adrxking
Adrxking jQuery clase
Latest commit 94c65be 7 days ago
 History
 1 contributor
35 lines (28 sloc)  1.05 KB
  
    let doc = $(document);
        /* al cargar completamente la página en la RAM se ejecuta la función iniciar */
    doc.ready(iniciar);

    function iniciar() {
        console.log('documento iniciado'); /* debug */
        $("main").load("html/home.html")
        let opcion = $("header #header-content nav a").on('click', mostrarMenu);
        let home = $("header #home").on('click', mostrarMenu)
        let navicon = $("header #navicon").on('click', mostrarNavPrincipal)

    }

function mostrarNavPrincipal() {
    console.log('Navicon');
    $("header #header-content nav").slideToggle();
}

function mostrarMenu() {
    console.log('clickeado'); /* debug */

    let id = $(this).attr('id');
    console.log(id);
    let ruta = "html/"+id+".html";
    let estilo = '<link rel="stylesheet" href="css/'+id+'.css">';
    $("head").append(estilo);
    $(estilo).remove()

    /*$("header #header-content nav a").removeClass("active");*/
    $(this).siblings().removeClass("active");
    $(this).addClass('active')
    console.log(ruta);

    $("main").load(ruta)
}

