function offset(){

    var X_beg = Number(document.getElementById('coord-Xbeg').value);
    var Y_beg = Number(document.getElementById('coord-Ybeg').value);
    var X_end = Number(document.getElementById('coord-Xend').value);
    var Y_end = Number(document.getElementById('coord-Yend').value);
    var current = Number(document.getElementById('current').value);
    var offset = Number(document.getElementById('offset').value);

    var azimuthDeltaX = X_end - X_beg;
    var azimuthDeltaY = Y_end - Y_beg;

    var length = Math.sqrt(azimuthDeltaX**2 + azimuthDeltaY**2).toFixed(2);
    var Wx = (azimuthDeltaX / length).toFixed(7);
    var Wy = (azimuthDeltaY / length).toFixed(7);

    var resultX = X_beg + current * Wx - offset * Wy;
    var resultY = Y_beg + current * Wy + offset * Wx;

    if(current > length){
        $('#result').css('display', 'block');
        $('#result').html('BŁĄD!'); 
    }
    else{
        $('#result').css('display', 'block');
        if(X_beg == X_end && Y_beg == Y_end) $('#result').html('BŁĄD!'); 
        else $('#result').html('X<sub>P</sub> = '+resultX.toFixed(2)+'  Y<sub>P</sub> = '+resultY.toFixed(2)+'');
    }
    
}