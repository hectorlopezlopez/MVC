axios.get('http://api.generadordni.es/v2/profiles/person')
  .then(function (response) {
    // función que se ejecutará al recibir una respuesta
    console.log(response);
  })
  .catch(function (error) {
    // función para capturar el error
    console.log(error);
  })
  .then(function () {
    // función que siempre se ejecuta
  });



// fetch("http://api.generadordni.es/v2/profiles/person", {
//   method: "GET",
//   headers: {
//       "Content-type": "application/json"
//   }
// })
// .then(response => response.json())
// .then(data => console.log(data))
// .catch(error => console.error("Error al consumir la API:", error));
