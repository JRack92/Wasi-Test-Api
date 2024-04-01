const id_company = 12187774;
const wasi = "4S5J_vW2T_ZJ1u_PvKR";

let url = `https://api.wasi.co/v1/location/all-countries?id_company=${id_company}&wasi_token=${wasi}`;
console.log(url);

// fetch(
//   "https://api.wasi.co/v1/property/search?id_company=12187774&wasi_token=4S5J_vW2T_ZJ1u_PvKR"
// )
//   .then((response) => response.json())
//   .then((json) => console.log(json));

fetch(
  "https://jsonplaceholder.typicode.com/posts"
)
  .then((response) => response.json())
  .then((json) => console.log(json));

// async function logMovies() {
//   const response = await fetch(
//     "https://api.wasi.co/v1/property/search?id_company=12187774&wasi_token=4S5J_vW2T_ZJ1u_PvKR"
//   );
//   const movies = await response.json();
//   console.log(movies);
// }
