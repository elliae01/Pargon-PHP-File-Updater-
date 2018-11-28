function getName(){
    var x = document.getElementById("rule");
    var file = x.value;
    var text = document.getElementById("ruletext");
    text.text = "hello?";
}

function getExt() {
        var upFile = document.getElementById("rule")

        if (!upFile.value) {
            alert("Please choose a file!");
        } else {
            var name = upFile.files[0].name;
            var pos = name.search(/(.[^.]+)$/);
            var string = "*" + name.substr(pos);
            document.getElementById("ruletext").value = string;
        }
}

function getPath() {
    var Form = document.forms("form");
    var inputName1 = Form.elements('source').value;
    var inputName2 = Form.elements('dest').value;
    
    var imgPath1 = inputName1;
    var imgPath2 = inputName2;
    Form.elements['file_src1'].value = imgPath1;
    Form.elements['file_src2'].value = imgPath2;
}