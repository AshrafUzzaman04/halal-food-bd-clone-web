// quantity increases and decrease js

var value;

$(".increase").click(function () {
  value = $("#quantity").val();
  value++;

  $("#quantity").val(value);
});

$(".decrease").click(function () {
  value = $("#quantity").val();
  value--;

  if (value > 0) {
    $("#quantity").val(value);
  }
});
