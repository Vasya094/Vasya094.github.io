var video = document.querySelector("#myvideo")
var btnPlay = document.querySelector("#play_button")

function playVid() {
  video.play()
  btnPlay.style.visibility = "hidden"
}

video.addEventListener("pause", () => {
  btnPlay.style.visibility = "visible"
})
video.addEventListener("play", () => {
  btnPlay.style.visibility = "hidden"
})

btnPlay.addEventListener("click", playVid)

function gi() {
  for (const video of document.querySelectorAll("video")) {
    video.controls = false
    video.addEventListener("mouseover", () => {
      video.controls = "controls"
    })
    video.addEventListener("mouseout", () => {
      video.controls = false
    })
  }
}

$(function () {
  "use strict"
  $("#sendform").on("submit", function (e) {
    e.preventDefault()
    var email = e.target[0].value
    $.ajax({
      url: "https://email-table-back.herokuapp.com/api/emails",
      type: "POST",
      contentType: "application/json; charset=utf-8",
      processData: false,
      data: JSON.stringify({ newEmail: email }),
      success: function (msg) {
        if (msg == "ok") {
          //  $("#sendform").html('<div class="img1"></div><h3 class="zag">Форма обратной связи</h3><p>Письмо успешно отправлено! Совсем скоро мы свяжимся с вами</p><div class="button crosss">Ok</div>');
        } else {
          $(".button").val("Ошибка")
          setTimeout(function () {
            $(".button").val("Отправить")
          }, 3000)
        }
      },
    })
    e.target[0].value = ""
    let form = document.querySelector("#sendform")
    form.style.display = "none"
    let success = document.querySelector(".wait_notify")
    success.style.display = "flex"
  })
})

$("a").click(function () {
  $(".email").addClass("click")
})
