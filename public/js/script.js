// // header("Access-Control-Allow-Headers: Authorization, Content-Type");
// // header("Access-Control-Allow-Origin: *");
// // header('content-type: application/json; charset=utf-8');
// fetch("https://api.kawalcorona.com/indonesia")
// .then(Response => Response.json())
// .then(Response => console.log(Response));
$.ajax({
    url: 'https://api.kawalcorona.com/indonesia',
    success: results => {
        console.log(results);
    }
});