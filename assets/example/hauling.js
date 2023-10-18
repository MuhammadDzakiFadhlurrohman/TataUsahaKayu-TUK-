const petak = document.getElementById("Petak");
const kontraktor_harvest = document.getElementById("KontraktorHarvest");
const spk_harvest = document.getElementById("SPKHarvest");
const kontraktor_hauling = document.getElementById("KontraktorHauling");
const spk_hauling = document.getElementById("SPKHauling");
const tanggal_hauling = document.getElementById("TanggalHauling");
const jenis_kayu = document.getElementById("JenisKayu");
const sortimen = document.getElementById("Sortimen");
const no_tumpukan = document.getElementById("NoTumpukan");
const no_batang = document.getElementById("NoBatang");
const panjang = document.getElementById("Panjang");
const lebar = document.getElementById("Lebar");
const tinggi = document.getElementById("Tinggi");
const operator = document.getElementById("Operator");
const driver = document.getElementById("Driver");
const trip = document.getElementById("Trip");
const scaler = document.getElementById("Scaler");
const pengawas = document.getElementById("Pengawas");

const data = '[{"id" : 1,"no_petak" : 456,"contractor_harvest" :  "SW. Ilham","spk_harvest" : "12/SPK/HR/SIS/..","contractor_hauling" : "SW.Ilham","spk_hauling" : "12/SPK/HL/SIS/..","hauling_date" : "05/14/2022","jenis" : "Accasia (HTI)","sortimen" : 2.8,"tumpukan" : "W55","no_batang" : "Null","diameter" : "Null","p" : "6.30","l" : "2.80","t" : "1.55","operator" : "Frans. K","no_alat" : "E.009","driver" : "Sutris","no_truck" : "LT. 19","no_trip" : 1,"scaler" : "Wahit","pengawas" : "Rizal"},{"id" : 2,"no_petak" : 222,"contractor_harvest" :  "PT. DDD","spk_harvest" : "11/SPK/HR/SIS/..","contractor_hauling" : "SW.Ilham","spk_hauling" : "12/SPK/HL/SIS/..","hauling_date" : "05/13/2022","jenis" : "RC (MWH)","sortimen" : 4.2,"tumpukan" : "Null","no_batang" : "C3342","diameter" : 60,"p" : "4.2","l" : "Null","t" : "Null","operator" : "Jito", "no_alat" : "E.007","driver" : "Eko","no_truck" : "LT. 78","no_trip" : 3,"scaler" : "Joko","pengawas" : "Rizal"}]';

hauling = JSON.parse(data);

function editFun(id) {
    // console.log(hauling[id]);
    petak.value = hauling[id].no_petak;
    kontraktor_harvest.value = hauling[id].contractor_harvest;
    spk_harvest.value = hauling[id].spk_harvest;
    kontraktor_hauling.value = hauling[id].contractor_hauling;
    spk_hauling.value = hauling[id].spk_hauling;
    tanggal_hauling.value = hauling[id].hauling_date;
    jenis_kayu.value = hauling[id].jenis;
    sortimen.value = hauling[id].sortimen;
    no_tumpukan.value = hauling[id].tumpukan;
    no_batang.value = hauling[id].no_batang;
    panjang.value = hauling[id].p;
    lebar.value = hauling[id].l;
    tinggi.value = hauling[id].t;
    operator.value = hauling[id].operator;
    driver.value = hauling[id].driver;
    trip.value = hauling[id].no_trip;
    scaler.value = hauling[id].scaler;
    pengawas.value = hauling[id].pengawas;
}