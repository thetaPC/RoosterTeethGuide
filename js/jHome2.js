// show carasoul or selections
function selectDiv(divID1, divID2, divID3) {
    var showDiv = document.getElementById(divID1);
    var hideDiv1 = document.getElementById(divID2);
    var hideDiv2 = document.getElementById(divID3);

    if (showDiv.style.display == 'none') {
        showDiv.style.display = 'block';
        hideDiv1.style.display = 'none';
        hideDiv2.style.display = 'none';
    }
    else
        showDiv.style.display = 'none';
}
