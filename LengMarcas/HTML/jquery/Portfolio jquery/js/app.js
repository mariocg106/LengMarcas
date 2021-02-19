let doc = $(document);
        
    doc.ready(iniciar);

    function iniciar() {
        console.log('documento iniciado'); 
        $("main").load("html/home.html")
        let opcion = $("header #menu nav a").on('click', mostrarMenu);
        let home = $("header #home").on('click', mostrarMenu)
        let navicon = $("header #navicon").on('click', mostrarNavPrincipal)

    }

    function mostrarMenu() {
        console.log('clickeado'); 
    
        let id = $(this).attr('id');
        console.log(id);
        let ruta = "html/"+id+".html";
        $("header #menu nav").removeClass("active");
        $(this).siblings().removeClass("active");
        $(this).addClass('active')
        console.log(ruta);
    
        $("main").load(ruta)
    }