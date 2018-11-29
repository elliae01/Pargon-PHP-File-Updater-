/*  JavaScript */

function init() {
    //alert("loaded");
    return true;
}

function myFolderFunction(x) {
    var RowNumber=x.rowIndex;
    var rowValue = x.cells[0].innerHTML; //  document.getElementById("myTable").rows[1].cells[0].innerHTML;
    //alert("Row number is: " + RowNumber + " has a value of " + rowValue);
    location.replace('./reviewItems.php?dbIndex='+rowValue);
    return rowValue;
}

