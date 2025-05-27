import './bootstrap';




//            Script para el reloj digital

const reloj_digital = document.querySelector("#Reloj");
let formato24 = true;

function hora_actual(){

    const fecha = new Date();
    let horas = actualizar_reloj(fecha.getHours());
    let minutos = actualizar_reloj(fecha.getMinutes());
    let segundos = actualizar_reloj(fecha.getSeconds());

    if (formato24){

        reloj_digital.innerText = `${horas}: ${minutos}: ${segundos}`;

    }else{

        const amPm = horas >= 12 ? "PM" : "AM";

        horas = horas % 12 || 12; // Convertir a formato de 12 horas
        reloj_digital.innerText = `${horas}: ${minutos}: ${segundos} ${amPm}`;
    }

    setTimeout(hora_actual, 1000);
};


// Función para agregar un cero delante de los números menores a 10
function actualizar_reloj(numero) {
  return numero < 10 ? "0" + numero : numero;
}

hora_actual();

const formato24btn = document.querySelector("#Formato24");
const formato12btn = document.querySelector("#Formato12");

formato24btn.addEventListener("click", function() {
    formato24 = true;
});

formato12btn.addEventListener("click", function(){
    formato24 = false;
});





//        Manejador para cerrar el banner de publicidad

document.getElementById("cerrar").addEventListener("click", function() {
  const banner = document.querySelector(".banner-publicidad");
  banner.style.display = "none";
});



//             script para las noticias



const noticias = [
      {
        titulo: "Acuerdo histórico en el atletismo nacional: Maratón de Santiago vuelve a ser federado",
        categoria: "deportes",
        cuerpo: `El Maratón de Santiago ha recuperado su certificación oficial gracias a un acuerdo entre 
          la Federación Atlética de Chile (Fedachi) y la productora Prokart. Este hito permite que 
          los tiempos registrados en la competencia sean válidos para clasificaciones internacionales, 
          beneficiando a atletas que buscan marcas oficiales.`,
        imagen: 'img/maraton.png'
      },
      {
        titulo: "El Real Valladolid hará la pretemporada en Chile y jugará dos partidos ante el Colo Colo",
        categoria: "deportes",
        cuerpo: `El club español Real Valladolid ha anunciado que llevará a cabo su pretemporada en Chile durante julio, 
          disputando dos partidos amistosos contra Colo Colo en conmemoración del centenario del equipo chileno.`,
        imagen: "img/futbol.png"
  
      },
  
      {
          titulo: "Copa Chile 2025: Deportes Santa Cruz se enfrentará este fin de semana a Ñublense",
          categoria: "deportes",
          cuerpo: `Deportes Santa Cruz se prepara para recibir a Ñublense en la cuarta fecha de la Copa Chile Coca Cola Sin 
          Azúcar 2025. El partido se disputará el sábado 22 de marzo a las 20:00 horas.`,
          imagen: "img/futbol2.png"
      },
  
      
  
      {
        titulo: "Desempleo en Chile llega al 8,4% en trimestre móvil a febrero: agencia estatal INE",
        categoria: "negocios",
        cuerpo:`Según datos del Instituto Nacional de Estadísticas (INE), la tasa de desempleo en 
          Chile alcanzó el 8,4% en el trimestre móvil hasta febrero de 2025. Este indicador 
          muestra una disminución de 0,1 puntos porcentuales en comparación con el mismo período 
          del año anterior, pero un aumento de 0,4 puntos respecto al trimestre anterior. 
          La ocupación aumentó un 0,9%, mientras que la fuerza laboral creció un 0,8%.`,
        imagen: "img/desempleo.png"
      },
  
      {
          titulo: "Banco Central de Chile eleva estimación de crecimiento económico a entre 1,75-2,75% para 2025",
          categoria: "negocios",
          cuerpo:`El Banco Central de Chile ha actualizado sus estimaciones, proyectando un crecimiento 
          económico para 2025 en el rango de 1,75% a 2,75%. Esta revisión se basa en un dinamismo 
          superior al esperado a finales de 2024 e inicios de 2025. Además, se prevé que la inflación 
          alcance el 4,5% a mediados de año, descendiendo a 3,8% en diciembre.`,
          imagen: "img/bancoCentral.png"
      },
  
      {
          titulo: "Mujeres lideran innovación en la industria salmonera chilena",
          categoria: "negocios",
          cuerpo:`En Chile, las mujeres están transformando la industria de la salmonicultura, tradicionalmente 
          dominada por hombres. Según el Reporte de Impacto Sostenible de 2024 del Consejo del Salmón, 
          4,327 mujeres ocupan diversos roles en este sector, desde operativas hasta directivas. 
          La creciente integración femenina ha impulsado mejoras en eficiencia, innovación y 
          sostenibilidad. Iniciativas como RedMusa, creada en 2023 para capacitar y conectar a mujeres 
          en la industria, han sido fundamentales en este cambio. Este avance destaca el compromiso 
          con la igualdad de género y el desarrollo sostenible en el ámbito empresarial chileno.`,
          imagen: "img/mujeres.png"
      },
  
      {
        titulo: "Chile se reúne con funcionarios de la CPI por asesinato de disidente venezolano vinculado al Tren de Aragua",
        categoria: "relevante",
        cuerpo: `Las autoridades chilenas se reunieron con representantes de la Corte Penal Internacional (CPI) 
          para abordar el asesinato de Ronald Ojeda, exteniente y disidente venezolano. Ojeda fue 
          secuestrado en su residencia en Santiago por individuos que se hicieron pasar por policías y 
          posteriormente asesinado, presuntamente por el grupo criminal Tren de Aragua con posibles 
          vínculos al gobierno venezolano. El fiscal nacional de Chile, Ángel Valencia, indicó que el 
          crimen tuvo motivaciones políticas y que se proporcionará a la CPI evidencia que conecte esta 
          investigación con una pesquisa en curso sobre violaciones de derechos humanos por parte de 
          funcionarios venezolanos.`,
        imagen: "img/noticiaCPI.png"
      },
  
      {
          titulo: "Fiscal Roberto Garrido compara grupos de la Macrozona Sur con el Tren de Aragua​",
          categoria: "relevante",
          cuerpo: `El fiscal Roberto Garrido ha señalado que los grupos que operan en la Macrozona Sur de Chile presentan 
          comportamientos similares a los del Tren de Aragua, una organización criminal de origen venezolano. 
          Garrido destacó que estas bandas han evolucionado de actos de violencia rural a actividades de crimen 
          organizado, incluyendo robos, tráfico de drogas y extorsión, sin una finalidad política clara. Esta 
          transformación ha generado preocupación por el aumento de la criminalidad en la región y la 
          dificultad para identificar a los responsables debido a la falta de testigos y pruebas concretas.`,
          imagen: "img/fiscal.png"
      },
  
      {
          titulo: "No hay lugar para políticas de “motosierra” en Chile, dice Boric",
          categoria: "relevante",
          cuerpo: `El presidente chileno Gabriel Boric Font subrayó en la jornada inaugural de la reunión anual del 
          Banco Interamericano de Desarrollo (BID) en Santiago la importancia de priorizar proyectos a 
          largo plazo y mantener la estabilidad institucional. Boric enfatizó que es preferible evitar 
          reformas drásticas y cortoplacistas, aludiendo indirectamente a políticas implementadas por 
          otros líderes regionales.`,
          imagen: "img/boric.png"
        
      },
    ];
    
    





window.addEventListener("DOMContentLoaded", function(){



      
// para Actualizar el contador de noticias 
function actualizarContador() {
  const totalNoticias = document.querySelectorAll('[data-articulo="true"]').length;
  const contadorElemento = document.getElementById("contadorNoticias");

  if (contadorElemento) {
    contadorElemento.textContent = `${totalNoticias} artículo${totalNoticias !== 1 ? 's' : ''}`;
  }
}
     

  // Detectar la categoria para cargar el contenido correcto de cada pagina 
 function obtenerCategoriaPorPagina() {
    const path = window.location.pathname.toLowerCase();
  
    if (path.includes("/deportes")) return "deportes";
    if (path.includes("/negocios")) return "negocios";
    if (path.includes("/noticias")) return "relevante";
 }
  
  
  // Cargar noticias en tarjetas
  function cargarNoticias()  {
    const categoria = obtenerCategoriaPorPagina();
    const contenedor = document.getElementById("news-container");
  
    const noticiasFiltradas = noticias.filter(n => n.categoria === categoria);
  
     noticiasFiltradas.forEach((noticia, index) => {
    const columna = document.createElement("div");
    columna.setAttribute("data-articulo", "true");
    
    //para que la primera noticia sea mas grande 
    if (index === 0) {
      columna.classList.add("column", "is-two-thirds");
    
      // las otras mas pequeñas
    } else {
      columna.classList.add("column", "is-one-third");
    }

    // muestra el destacado encima de la primera noticia, index === 0
    let destacadoHTML;
    if (index === 0) {
       destacadoHTML = `
          <div class="notification is-danger has-text-centered py-2">
          <strong class="is-size-5">Destacado</strong>
          </div>`;
    } else {
       destacadoHTML = "";
    }


    const tarjeta = `
  ${destacadoHTML}
  <div class="card ${index === 0 ? 'has-background-light is-large-mobile highlighted-card' : ''}>
    <div class="card-image">
      <figure class="image" style="height: 400px; overflow: hidden;"> <!-- Ajuste de altura de la imagen -->
        <img src="${noticia.imagen}" alt="${noticia.titulo}" style="object-fit: cover; height: 100%; width: 100%;"> 
      </figure>
    </div>
    <div class="card-content">
      <p class="title is-5">${noticia.titulo}</p>
      <p>${noticia.cuerpo}</p>
    </div>
    <footer class="card-footer">
      <p class="card-footer-item has-text-info has-text-weight-semibold">
        Categoría: ${noticia.categoria.charAt(0).toUpperCase() + noticia.categoria.slice(1)}
      </p>
    </footer>
  </div>
  `;

    columna.innerHTML = tarjeta;
    contenedor.appendChild(columna);

  });

 
  actualizarContador();

}


// Ejecutar al cargar
window.onload = cargarNoticias;



});





// Manejador para mostrar/ocultar el formulario de agregar noticia
  document.getElementById("subirNoticia").addEventListener("click", function() {
    const formulario = document.getElementById("Formulario");
    
    const estaOculto = (formulario.style.display === "none" || formulario.style.display === "");

    formulario.style.display = estaOculto ? "block" : "none";
    subirNoticia.innerText = estaOculto ? "Cerrar formulario" : "Sube tu Noticia.";

    // Cambiar el color del botón según el estado
    if (estaOculto) {
    subirNoticia.classList.remove("is-primary"); // remueve clase establecida por defecto en el boton
    subirNoticia.classList.add("is-danger"); // agrega clase de peligro para que se ponga rojo
  } else {
    subirNoticia.classList.remove("is-danger");
    subirNoticia.classList.add("is-primary");
  }
  });





  //       script para subir noticia del formulario 


  // Manejador para enviar el formulario
  document.getElementById("newsForm").addEventListener("submit", function(event) {
    
    event.preventDefault(); // Prevenir el comportamiento por defecto del formulario

    // Obtener los valores del formulario
    const titulo = document.getElementById("titulo").value;
    const categoria = document.getElementById("categoria").value;
    const imagen = document.getElementById("imagen").files[0];
    const cuerpo = document.getElementById("cuerpo").value;

    // Validar si la imagen fue seleccionada
    if (!imagen) {
      alert("Por favor, selecciona una imagen.");
      return;
    }

    // Crear un lector de archivos para mostrar la imagen
    const reader = new FileReader();
    
    
    reader.onload = function(e) {
    const imageSrc = e.target.result;

      // HTML de la noticia con la estructura de tarjeta
      const newsCard = document.createElement("div");
      newsCard.classList.add("column", "is-4");
      newsCard.setAttribute("data-articulo", "true");

      newsCard.innerHTML = `
      <div class="card" >
        <div class="card-image" style="height: 400px; overflow: hidden; width: 100%;">
          <figure class="image" style="height: 100%; margin: 0;">

            <!-- "object-fit: contain" Ajusta sin recortar, puede dejar espacios vacíos -->
           <img src="${imageSrc}" alt="${titulo}" style="width: 100%; height: 100%; object-fit: contain; display: block; background-color: #eee;">

          </figure>
        </div>
        <div class="card-content">
          <p class="title is-5">${titulo}</p>
          <p>${cuerpo}</p>
        </div>
        <footer class="card-footer">
          <p class="card-footer-item has-text-info has-text-weight-semibold">
            Categoría: ${categoria.charAt(0).toUpperCase() + categoria.slice(1)}
          </p>
        </footer>
      </div>
    `;
      // Agregar la nueva tarjeta al contenedor de noticias (dentro de #newsSection)
      const newsSection = document.getElementById("news-container");
      newsSection.appendChild(newsCard);
     
    


      document.getElementById("newsForm").reset(); // Limpia el formulario
      document.getElementById("Formulario").style.display = "none"; // Ocultar el formulario nuevamente
      document.getElementById("subirNoticia").innerText = "Sube tu Noticia."; // Cambiar el texto del botón nuevamente
      document.getElementById("subirNoticia").classList.remove("is-danger"); // remueve clase de peligro
      document.getElementById("subirNoticia").classList.add("is-primary"); // agrega is primary para que se ponga azul nuevamente

     
    };

     // Leer la imagen seleccionada
     reader.readAsDataURL(imagen);


     // solucion sencilla para sumar 1 a los articulos al precionar enviar 

     const contadorElemento = document.getElementById("contadorNoticias");
     const numeroActual = parseInt(contadorElemento.textContent); // se obtiene el número actual
     const nuevoNumero = numeroActual + 1;
     contadorElemento.textContent = `${nuevoNumero} artículos`;
    
  });


   