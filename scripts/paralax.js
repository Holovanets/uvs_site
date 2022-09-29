$(".prl").mousemove(function (e) {
  var width = $(this).width() / 2;
  var height = $(this).height() / 2;
  var amountMovedX1 = ((width - e.pageX) * -1) / 16;
  var amountMovedY1 = ((height - e.pageY) * -1) / 16;

  var amountMovedX2 = (width - e.pageX) / 40;
  var amountMovedY2 = (height - e.pageY) / 30;

  var amountMovedX3 = (width - e.pageX) / 30;
  var amountMovedY3 = (height - e.pageY) / 60;

  $(".shapes1").css("marginLeft", amountMovedX1);
  $(".shapes1").css("marginTop", amountMovedY1);

  $(".shapes2").css("marginLeft", amountMovedX2);
  $(".shapes2").css("marginTop", amountMovedY2);

  $(".shapes3").css("marginLeft", amountMovedX3);
  $(".shapes3").css("marginTop", amountMovedY3);
});