var search = document.querySelector('#search')
let table = document.querySelector("#tbody");

search.addEventListener("keyup", function(){

    let form = new FormData();
    form.append("search", "POST");
    form.append("name", search.value);

    fetch("searchPromo.php",{
        method: "POST",
        body: form
    }).then((res=>{
        return res.json();
    })).then((data)=>{
        console.log(data)
        table.innerHTML = "";
        for(var i = 0; i < data.length; i++){
            table.innerHTML += `
            <tr>
                <td>${data[i]["name"]}</td>
                <td>
                <a href='editPromo.php?id_edit=${data[i]["id"]}'>Edit</a>
                <a href='showPromo.php?id_delete=${data[i]["id"]}'> Delete</a>
                </td>
            </tr>
            `;
        }
})
})