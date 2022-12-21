function linearIndentation(){

    var x_a = Number(document.getElementById('XA').value);
    var y_a = Number(document.getElementById('YA').value);
    var x_b = Number(document.getElementById('XB').value);
    var y_b = Number(document.getElementById('YB').value);
    var distance_a = Number(document.getElementById('distance-a').value);
    var distance_b = Number(document.getElementById('distance-b').value);

    var distance_c = Math.sqrt((x_b - x_a)**2 + (y_b - y_a)**2);

    var Ca = distance_b**2 + distance_c**2 - distance_a**2;
    var Cb = distance_c**2 + distance_a**2 - distance_b**2;
    var Cc = distance_b**2 + distance_a**2 - distance_c**2;
    var p4 = Math.sqrt(Ca*Cb + Ca*Cc + Cb*Cc);
    console.log(distance_a, distance_b, distance_c, Ca, Cb, Cc, p4, -p4);
        
    var resultX = ((x_a * Cb - y_a * (-p4) + x_b * Ca - y_b * p4) / Ca + Cb).toFixed(2);
    var resultY = ((x_a * (-p4) + y_a * Cb + x_b * p4 + y_b * Ca) / Ca + Cb).toFixed(2);

    // TODO: Wrong output...

    if(x_a && x_b && y_a && y_b && distance_a && distance_b){
        $('#result').css('display', 'block');
        $('#result').html('X<sub>P</sub> = '+resultX+'  Y<sub>P</sub> = '+resultY+'');
    }
    else{
        $('#result').css('display', 'block');
        $('#result').html('BŁĄD!');
    }

}