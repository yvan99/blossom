// Provinces
let provinces = null;
let districts = null;
let sectors = null;
//let cells     = null;
//let villages  = null;
///let loader =document.getElementById("loader");
/*
getting provinces;

*/
const provinceHandler = () => {
    let provinceOptions = `<option  disabled selected  value=''>--- Select Province ---</option>`;
    fetch("https://rwanda.p.rapidapi.com/provinces", {
        method: "GET",
        headers: {
            "x-rapidapi-host": "rwanda.p.rapidapi.com",
            "x-rapidapi-key":
                "0793f1c577mshb8d850d30ff48a2p12d00bjsn9e97682b8a23",
        },
    })
        .then((response) => response.json())
        .then((res) => {
            provinces = res.data;
            const transformedProvinces = Object.values(provinces);

            for (var i = 0; i < transformedProvinces.length; i++) {
                provinceOptions += `<option class="province" value='${transformedProvinces[i]}'>${transformedProvinces[i]}</option>`;

                document.getElementById("provinces").innerHTML =
                    provinceOptions;
            }
        })
        .catch((err) => {
            console.log(err);
        });
};
provinceHandler();

const districtHandler = () => {
    let districtOptions;
    let selectedprovince = document.querySelector("#provinces").value;
    districtOptions += `<option  disabled selected  value=''> --- Select District --- </option>`;
    if (selectedprovince) {
        fetch(`https://rwanda.p.rapidapi.com/districts?p=${selectedprovince}`, {
            method: "GET",
            headers: {
                "x-rapidapi-host": "rwanda.p.rapidapi.com",
                "x-rapidapi-key":
                    "0793f1c577mshb8d850d30ff48a2p12d00bjsn9e97682b8a23",
            },
        })
            .then((response) => response.json())
            .then((res) => {
                const districts = res.data;
                //loader.show();
                const transformedDistricts = Object.values(districts);
                for (var i = 0; i < transformedDistricts.length; i++) {
                    districtOptions += `<option  value='${transformedDistricts[i]}'>${transformedDistricts[i]}</option>`;
                    document.getElementById("districts").innerHTML =
                        districtOptions;
                }
            })
            .catch((err) => {
                console.log(err);
            });
    }
};

districtHandler();

