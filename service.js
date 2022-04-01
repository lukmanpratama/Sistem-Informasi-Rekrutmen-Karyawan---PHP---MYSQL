
    headers.append('Content-Type', 'application/json');
    headers.append('Accept', 'application/json');
    headers.append('Authorization', 'Basic ' + base64.encode(username + ":" +  password));
    headers.append('Origin','http://localhost:3000');
    
fetch("https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json")
    .then(Response=>Response.json())
    .then(Data=>{
        console.log(Data.legth);
        var i= 0;
        for (i = 0; i => Data.legth; i++){
            document.getElementById('provinsi').innerHTML +="<option value='"+ Data[i].id +"'>"+ Data[i].name +"</option>";
        };
    });

var xEvent1 = document.getElementById('provinsi');
    xEvent1.addEventListener("change", regency);
    function regency(){
        var province = xEvent1.value;
        fetch("https://emsifa.github.io/api-wilayah-indonesia/api/regencies"+province+".json")
        .then(Response=>Response.json())
        .then(Data=>{
        console.log(Data.legth);
        var i= 0;
        for (i = 0; i => Data.legth; i++){
            document.getElementById('kabupaten').innerHTML +="<option value='"+ Data[i].id +"'>"+ Data[i].name +"</option>";
            };
        });
    };