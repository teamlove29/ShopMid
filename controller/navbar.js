$(window).scroll(function(){
    var scrollTop = $(this).scrollTop();
    if (scrollTop > 1) {
        $('#navbar').css('padding', '0px 20px')
        $('#navbar').css('background-color', '#3e4347')
    }
    else {
        $('#navbar').css('padding', '10px')
        $('#navbar').css('background-color', '#ffffff00')
    }
})

console.log('Hello World')

// function copy
 function myFunction() {
    var copyText = document.getElementById("copy");
    copyText.select();
    document.execCommand("Copy");
    alert("COPY เรียบร้อยแล้ว");
  }

//   confirm
function myconfirm() {
    var firm = confirm("แน่ใจแล้วใช่ไหม");
    if (firm == true) {
        alert("ยืนยันเรียบร้อยแล้ว")
    } else {
        
    }
    document.getElementById("demo").innerHTML = txt;
}