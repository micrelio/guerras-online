//script cambio de div
function cambio() {
  $(document).ready(function () {
    $("#cambio").on("click", function () {
      $("#veteranos").toggle();
    });
    $("#cambio").on("click", function () {
      $("#coliders").toggle();
    });
    $("#cambio").toggle(
      // Primer click
      function (e) {
        $("#veteranos").slideUp();
        $("#veteranos").slideDown();
        $(this).text("ver coliders...");
        e.preventDefault();
      }, // Separamos las dos funciones con una coma
      // Segundo click
      function (e) {
        $("#veteranos").slideUp();
        $(this).text("Ver veteranos...");
        e.preventDefault();
      }
    );
  });
  $(window).resize(function () {
    var w = $(window).width();
    if (w > 320 && menu.is(":hidden")) {
      menu.removeAttr("style");
    }
  });
}
//----------------
// SCRIPT DE desplegable
function desplegable() {
  jQuery.fn.animateAuto = function (prop, speed, callback) {
    var elem, height, width;
    return this.each(function (i, el) {
      (el = jQuery(el)),
        (elem = el
          .clone()
          .css({ height: "auto", width: "auto" })
          .appendTo("body"));
      (height = elem.css("height")), (width = elem.css("width")), elem.remove();
      if (prop === "height") el.animate({ height: height }, speed, callback);
      else if (prop === "width") el.animate({ width: width }, speed, callback);
      else if (prop === "both")
        el.animate({ width: width, height: height }, speed, callback);
    });
  };
  $(window).ready(function () {
    $("h2").click(function () {
      if ($(this).next().hasClass("desplegado")) {
        $(this).next().removeClass("desplegado").animate({ height: 0 }, 500);
      } else {
        $(this).next().addClass("desplegado").animateAuto("height", 500);
      }
    });
  });
}
//----------------
//reproductor de video
function Reproducir(id) {
  var in1 =
    '<iframe title="YouTube video player" width="400" height="225" src="http://www.youtube.com/embed/';
  var in2 = '" frameborder="0" allowfullscreen></iframe>';
  var ids = [
    /* ataques primeros  kai cami (0)*/ "JZ_BrikVJ5M?feature=player_detailpage&rel=0",
    /* (1)ataques primeros 2 kai cami*/ "K_pG8NprQ4s?feature=player_detailpage&rel=0",
    /* (2)Guerra aniv bg parte 3*/ "E28_gN0yWYc?feature=player_detailpage&rel=0",
    /* (3)Guerra 1er aniversario bad girls*/ "mXiSsjy9IlI?feature=player_detailpage&rel=0",
    /*(4) ataque de entrenamiento con pitufos */ "1eRZaxbxJbg?feature=player_detailpage&rel=0",
    /*(5) Ataque QueenWalking Lavalon*/ "qnmHaftbLEo?feature=player_detailpage&rel=0",
    /*(6)ataque de entrenamiento 2*/ "E7eVy6mqYC4?feature=player_detailpage&rel=0",
    /* (7)gran ataque de mamba de llas 1000 estrellas*/ "NYmqHMMmndg?feature=player_detailpage&rel=0",
  ];
  for (i = 0; i < ids.length; i++) {
    if (id === i) {
      document.getElementById("rep").innerHTML = in1 + ids[i] + in2;
    }
  }
}
//----------------
//hora de españa
function horaespaña() {
  var clock24_58764 = new clock24(
    "58764",
    60,
    "%hh:%nn %W  <!--, %dd %M %yyyy-->",
    "es"
  );
  clock24_58764.daylight("ES");
  clock24_58764.refresh();
}
//----------------
//hora de usa
function horausa() {
  var clock24_86371 = new clock24(
    "86371",
    -300,
    "%hh:%nn %W <!--, %dd %M %yyyy--> ",
    "es"
  );
  clock24_86371.daylight("US");
  clock24_86371.refresh();
}
//----------------
//hora de mexico
function horamexico() {
  var clock24_90267 = new clock24(
    "90267",
    -360,
    "%hh:%nn %W <!--, %dd %M %yyyy-->",
    "es"
  );
  clock24_90267.daylight("MX");
  clock24_90267.refresh();
}
//----------------
