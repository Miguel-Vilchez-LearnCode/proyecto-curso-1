const buscador = document.getElementById('buscador');

buscador.addEventListener('keyup', ()=>{
    const texto = buscador.value.toLowerCase();
    const filas = document.querySelectorAll('table tbody tr');

    filas.forEach(fila =>{
        const columnas = fila.querySelectorAll('td');
        let condicional = true;

        columnas.forEach(columna =>{
            if (columna.textContent.toLowerCase().includes(texto)) {
                condicional = false;
            }
        })

        if (condicional) {
            fila.style.display = 'none';
        }
        else if(!condicional){
            fila.style.display = '';
        }
    })
})

// const botonTema = document.getElementById('boton-tema');
// const body = document.body;
// let textoBoton = botonTema.textContent;

// botonTema.addEventListener('click', () => {
//     if(botonTema.classList.contains('tema-oscuro')){
//         body.style.backgroundColor = '#333';
//         botonTema.textContent = 'Aclarecer';
//         botonTema.classList.remove('tema-oscuro');
//         botonTema.classList.add('tema-claro'); 
//     }
//     else if(botonTema.classList.contains('tema-claro')){
//         body.style.backgroundColor = '#fff';
//         botonTema.textContent = 'Oscurecer';
//         botonTema.classList.remove('tema-claro');
//         botonTema.classList.add('tema-oscuro');
//     }
// });

// document.addEventListener('DOMContentLoaded', ()=> {
//     const filterSelect = document.getElementById('select');

//     filterSelect.addEventListener('change', ()=> {
//         const selectedValue = filterSelect.value;
//         const rows = document.querySelectorAll('table tbody tr');
//         rows.forEach(row => {

//             const sections = row.querySelectorAll('.seccion');

//             sections.forEach(section =>{
//                 if (selectedValue === 'no' || section.textContent.includes(selectedValue)) {
//                     row.style.display = '';
//                 } else {
//                     row.style.display = 'none';
//                 }
//             })
            
//         });
//     });
// });

const dropdown_content = document.querySelector('.dropdown');
const dropdown = document.querySelector('.avatar-perfil');

dropdown.addEventListener('click', ()=>{
    if (dropdown_content.style.display === 'none') {
        dropdown_content.style.display = '';
    }
    else{
        dropdown_content.style.display = 'none';
    }
})

