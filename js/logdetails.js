function init() {
    //alert("loaded");
    return true;
}

function myFolderFunction(x) {
    var RowNumber=x.rowIndex;
    var rowValue = x.cells[0].innerHTML;
    //alert("Row number is: " + RowNumber + " has a value of " + rowValue);
    window.location.replace('./logdetails.php?dbIndex='+rowValue);
    return rowValue;
}