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
    $("header #header-content nav a").removeClass("active");
    $(this).siblings().removeClass("active");
    $(this).addClass('active')
    console.log(ruta);

    $("main").load(ruta)
}
