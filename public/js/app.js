function AppModule() {
    function search(q) {
        fetch('api.php?q='+q).then(function(response) {
            return response.json();
        }).then(function(body) {
            var resultsContainer = document.getElementById("results");
            for (var i=0; i < body.length; i++) {
                output = "";
                output += "<img src='";
                output += body[i].url;
                output += "'>";
                resultsContainer.innerHTML += output;
            }
        });
    }

    return {
        search: search,
    }
}

