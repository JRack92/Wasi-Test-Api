const id_company = 12187774;
const wasi = "4S5J_vW2T_ZJ1u_PvKR";

let url = `https://api.wasi.co/v1/location/all-countries?id_company=${id_company}&wasi_token=${wasi}`;
console.log(url);

let test = fetch("https://api.wasi.co/v1/property/search?id_company=12187774&wasi_token=4S5J_vW2T_ZJ1u_PvKR");
console.log(test);

async function logMovies() {
  const response = await fetch(
    "https://api.wasi.co/v1/property/search?id_company=12187774&wasi_token=4S5J_vW2T_ZJ1u_PvKR"
  );
  const movies = await response.json();
  console.log(movies);
}

logMovies();
