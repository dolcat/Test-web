function calculate(a, b, cal) {
    if (cal == "+") {
        return parseInt(a) + parseInt(b);
    }
    if (cal == "-") {
        return parseInt(a) - parseInt(b);
    }
    if (cal == "*") {
        return parseInt(a) * parseInt(b);
    }
}

var text_count = document.querySelector(".text_count");
var text_price = document.querySelector(".price_text");
var tru = document.querySelector(".tru");
var cong = document.querySelector(".cong");

tru.onclick = function () {
    if (parseInt(text_count.value) == 1) {
        tru.preventDefault();
    }
    var count = text_count.value;
    text_count.value = calculate(count, 1, "-");
    text_price.innerText = calculate(text_count.value,price,"*");
}
cong.onclick = function () {
    var count = text_count.value;
    text_count.value = calculate(count, 1, "+");
    text_price.innerText = calculate(text_count.value,price,"*");
}