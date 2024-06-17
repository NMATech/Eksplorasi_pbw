$.getJSON("data/mixue.json", function (data) {
  let iceCream = data.icecream;
  let realFruit = data.RealFruitTea;
  let milkTea = data.MilkTea;

  $.each(iceCream, function (i, data) {
    $("#icecream").append(
      '<div class="p-2 text-center"><img src="./img/' +
        data.photo +
        '" alt=""><h3 class="text-red-600 font-bold text-2xl">' +
        data.Name +
        "(" +
        data.Price / 1000 +
        "K)</h3><p>" +
        data.Desk +
        "</p></div>"
    );
  });
});
