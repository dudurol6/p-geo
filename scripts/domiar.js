function offset(){

    var coord_Xbeg = document.getElementById('coord-Xbeg').value;
    var coord_Ybeg = document.getElementById('coord-Ybeg').value;
    var coord_Xend = document.getElementById('coord-Xend').value;
    var coord_Yend = document.getElementById('coord-Yend').value;
    var current = document.getElementById('current').value;
    var offset = document.getElementById('offset').value;

    var deltaX = coord_Xend - coord_Xbeg;
    var deltaY = coord_Yend - coord_Ybeg;
    var length = Math.sqrt(deltaX^2 + deltaY^2);
    var Wx = deltaX / length;
    var Wy = deltaY / length;

    // --> TODO HERE
    // continue doing
    
}