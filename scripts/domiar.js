function offset(){

    console.log('dupa dupa123');

    var coord_Xbeg = document.getElementById('coord-Xbeg').value;
    var coord_Ybeg = document.getElementById('coord-Ybeg').value;
    var coord_Xend = document.getElementById('coord-Xend').value;
    var coord_Yend = document.getElementById('coord-Yend').value;
    var current = document.getElementById('current').value;
    var offset = document.getElementById('offset').value;

    var azimuthDeltaX = coord_Xend - coord_Xbeg;
    var azimuthDeltaY = coord_Yend - coord_Ybeg;
    var length = Math.sqrt(azimuthDeltaX^2 + azimuthDeltaY^2);
    var Wx = azimuthDeltaX / length;
    var Wy = azimuthDeltaY / length;

    var resultX = coord_Xbeg + current * Wx - offset * Wy;
    var resultY = coord_Ybeg + current * Wy + offset * Wx;

    $('#result').html('X<sub>P</sub> = '+resultX.toFixed(2)+'  Y<sup>P</sup> = '+resultY.toFixed(2)+'');
    
}