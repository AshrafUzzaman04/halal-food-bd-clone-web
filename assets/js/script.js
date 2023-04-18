// quantity increases and decrease js

var value;

$(".increase").click(function () {
  value = $("#quantity").val();

  if (value < 9999) {
    value++;

    $("#quantity").val(value);
  }
});

$(".decrease").click(function () {
  value = $("#quantity").val();

  if (value > 1) {
    value--;

    $("#quantity").val(value);
  }
});
