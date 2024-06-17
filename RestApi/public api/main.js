function searchMovie() {
  $("#movie").html("");
  $.ajax({
    url: "https://omdbapi.com",
    type: "get",
    dataType: "json",
    data: {
      apiKey: "e141a18e",
      s: $("#search-input").val(),
    },
    success: function (result) {
      $("#title").html($("#search-input").val());
      if (result.Response == "True") {
        let movies = result.Search;

        $.each(movies, function (i, data) {
          $("#movie").append(
            `
                <div class="p-2 text-center">
                        <img src=" ` +
              data.Poster +
              ` " alt="">
                        <h3 class="text-red-600 font-bold text-2xl">
                            ` +
              data.Title +
              `
                        </h3>
                        <p>
                            ` +
              data.Year +
              `
                        </p>
                </div>
            `
          );

          $("#search-input").val("");
        });
      } else {
        $("#movie-list").html(
          `<h1 class="text-center text-2xl">` + result.Error + `</h1>`
        );
      }
    },
  });
}

$("#search-button").on("click", function () {
  searchMovie();
});

$("#search-input").on("keyup", function (key) {
  if (key.which === 13) {
    searchMovie();
  }
});
